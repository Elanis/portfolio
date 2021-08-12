using System;
using System.Diagnostics;
using System.Threading.Tasks;

using MailKit.Net.Smtp;

using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Options;

using MimeKit;

using Portfolio.Models;

using reCAPTCHA.AspNetCore;

namespace Portfolio.Controllers {
	public class HomeController : Controller {
		private readonly IRecaptchaService _recaptcha;
		private readonly AppSettings appSettings;

		public HomeController(IRecaptchaService recaptcha, IOptions<AppSettings> appSettings) {
			_recaptcha = recaptcha;
			this.appSettings = appSettings.Value;
		}

		[HttpGet]
		[Route("/")]
		[Route("{culture}/")]
		[Route("index")]
		[Route("{culture}/index")]
		public IActionResult Index() {
			return View();
		}

		[HttpPost]
		[Route("contact")]
		[Route("{culture}/contact")]
		public async Task<ActionResult> Contact(string mail, string txt) {
			try {
				var recaptcha = await _recaptcha.Validate(Request, false); // @TODO: find a better way, that allow only some domains
				if (string.IsNullOrWhiteSpace(mail) || string.IsNullOrWhiteSpace(txt) || !recaptcha.success) {
					@ViewData["Message"] = "CONTACT_NOK";
					return View("Index");
				}

				SendMail(mail, txt);

				@ViewData["Message"] = "CONTACT_OK";

			} catch (System.ComponentModel.DataAnnotations.ValidationException e) {
				Console.WriteLine(e.Message);
				Console.WriteLine(e.StackTrace);

				@ViewData["Message"] = "CONTACT_NOK";
			}

			return View("Index");
		}

		[NonAction]
		public void SendMail(string mail, string txt) {
			var message = new MimeMessage();
			message.From.Add(new MailboxAddress("Elanis - Contact Form", "***REMOVED***"));
			message.To.Add(new MailboxAddress("Elanis", "***REMOVED***"));
			message.Subject = "Contact Form";

			message.Body = new TextPart("plain") {
				Text = txt + "\n\n\n" + mail
			};

			using var client = new SmtpClient();

			// For demo-purposes, accept all SSL certificates (in case the server supports STARTTLS)
			client.ServerCertificateValidationCallback = (s, c, h, e) => true;

			client.Connect(appSettings.MailServer, 587, false);

			// Note: only needed if the SMTP server requires authentication
			client.Authenticate(appSettings.MailAddress, appSettings.MailPassword);

			client.Send(message);
			client.Disconnect(true);
		}

		[ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
		public IActionResult Error() {
			return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
		}
	}
}

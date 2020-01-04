using System.Diagnostics;

using MailKit.Net.Smtp;

using Microsoft.AspNetCore.Mvc;
using Microsoft.Extensions.Localization;

using MimeKit;

using Portfolio.Models;

namespace Portfolio.Controllers {
	public class HomeController : Controller {
		public IStringLocalizer<HomeController> _localizer;
		public HomeController(IStringLocalizer<HomeController> localizer) {
			_localizer = localizer;
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
		public IActionResult Contact(string mail, string txt) {
			// @TODO: recaptcha check - see: https://github.com/TimothyMeadows/reCAPTCHA.AspNetCore

			var message = new MimeMessage();
			message.From.Add(new MailboxAddress("Elanis - Contact Form", "***REMOVED***"));
			message.To.Add(new MailboxAddress("Elanis", "***REMOVED***"));
			message.Subject = "Contact Form";

			message.Body = new TextPart("plain") {
				Text = txt + "\n\n\n" + mail
			};

			using (var client = new SmtpClient()) {
				// For demo-purposes, accept all SSL certificates (in case the server supports STARTTLS)
				client.ServerCertificateValidationCallback = (s, c, h, e) => true;

				client.Connect("***REMOVED***", 587, false);

				// Note: only needed if the SMTP server requires authentication
				client.Authenticate("***REMOVED***", "***REMOVED***");

				client.Send(message);
				client.Disconnect(true);
			}

			return View("Index");
		}

		[ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
		public IActionResult Error() {
			return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
		}
	}
}

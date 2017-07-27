var GateStatus = 0; // 0 = Off | 1 = Dialing | 2 = Open | 3 = Inbound
var RedStatus = 0;
var GateX = 640;
var GateY = 330;
var SGCC = 0;

window.onload = function()
{
sgcc_div = document.getElementById("sgc_computer");

sgcc_div.addEventListener('click',LoadSGCC);
}

function LoadSGCC()
{
	if(SGCC==0) {

	SGCC = 1;

	draw_ui = document.getElementById("draw_ui");

	draw_ui.innerHTML = '<canvas id="main_canvas" width="1280" height="720">Votre navigateur ne supporte pas le canvas. Veuillez utiliser un vrai navigateur</canvas>';

    canvas = document.getElementById('main_canvas');
        if(!canvas)
        {
            alert("Impossible de récupérer le canvas");
            return;
        }

    ctx = canvas.getContext('2d');
        if(!ctx)
        {
            alert("Impossible de récupérer le context du canvas");
            return;
        }

    ctx.lineWidth = "5";
	ctx.lineJoin = "round";
	ctx.strokeStyle = "rgba(0, 176, 240, 1)";

	ctx.strokeRect(20,20,1240,680); //Recangle general

    ctx.lineWidth = "3";


    /* Rectangle general arrondi gauche */
	ctx.beginPath();//On démarre un nouveau tracé
	ctx.moveTo(20, 100);
	ctx.lineTo(185, 100);
	ctx.quadraticCurveTo(200, 100, 200, 115);
	ctx.lineTo(200, 635);
	ctx.quadraticCurveTo(200, 650, 185, 650);
	ctx.lineTo(20, 650);
	ctx.stroke();
	ctx.closePath();

	/* Tracé bleu clair au dessus du Rectangle general arrondi gauche */
	ctx.beginPath();//On démarre un nouveau tracé
	ctx.moveTo(120, 30);
	ctx.lineTo(40, 30);
	ctx.quadraticCurveTo(30, 30, 30, 40);
	ctx.lineTo(30, 90);
	ctx.lineTo(195, 90);
	ctx.stroke();
	ctx.closePath();

	ctx.strokeStyle = "rgba(0, 106, 200, 1)";

	/* Rectangle interne au rectangle arrondi gauche */
	ctx.strokeRect(30,110,160,345);

	/* Tracé bleu foncé au dessus au rectangle arrondi gauche */	
	ctx.beginPath();//On démarre un nouveau tracé
	ctx.moveTo(300, 30);
	ctx.lineTo(140, 30);
	ctx.quadraticCurveTo(130, 30, 130, 40);
	ctx.lineTo(130, 80);
	ctx.lineTo(195, 80);
	ctx.stroke();
	ctx.closePath();

	ctx.strokeStyle = "rgba(0, 176, 240, 1)";
	/* STARGATE */
	/* Anneaux */
	ctx.beginPath();//On démarre un nouveau tracé
	ctx.arc(GateX, GateY, 152, 0, Math.PI*2);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();//On démarre un nouveau tracé
	ctx.arc(GateX, GateY, 167, 0, Math.PI*2);
	ctx.stroke();
	ctx.closePath();

    ctx.lineWidth = "1";

	ctx.beginPath();//On démarre un nouveau tracé
	ctx.arc(GateX, GateY, 160, 0, Math.PI*2);
	ctx.stroke();
	ctx.closePath();

    ctx.lineWidth = "3";

	ctx.beginPath();//On démarre un nouveau tracé
	ctx.arc(GateX, GateY, 210, 0, Math.PI*2);
	ctx.stroke();
	ctx.closePath();

    ctx.lineWidth = "1";

	ctx.beginPath();//On démarre un nouveau tracé
	ctx.arc(GateX, GateY, 220, 0, Math.PI*2);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();//On démarre un nouveau tracé
	ctx.arc(GateX, GateY, 230, 0, Math.PI*2);
	ctx.stroke();
	ctx.closePath();


    ctx.lineWidth = "5";

	ctx.beginPath();//On démarre un nouveau tracé
	ctx.arc(GateX, GateY, 240, 0, Math.PI*2);
	ctx.stroke();
	ctx.closePath();

    ctx.lineWidth = "3";

	/* Coordonnées */
	ctx.strokeRect(1000,110,140,60);
	ctx.strokeRect(1000,180,140,60);
	ctx.strokeRect(1000,250,140,60);
	ctx.strokeRect(1000,320,140,60);
	ctx.strokeRect(1000,390,140,60);
	ctx.strokeRect(1000,460,140,60);
	ctx.strokeRect(1000,530,140,60);

	//Liens entre boites de coordonnées et porte
	//Lien Chevron Superieur ( Pt d'origine )
	ctx.beginPath();
	ctx.moveTo(640,90);
	ctx.lineTo(640,70);
	ctx.lineTo(840,70);
	ctx.lineTo(950,100);
	ctx.lineTo(1150,100);
	ctx.lineTo(1150,560);
	ctx.lineTo(1140,560);
	ctx.stroke();
	ctx.closePath();

	//Lien Chevron 1
	ctx.beginPath();
	ctx.moveTo(1000,140);
	ctx.lineTo(900,140);
	ctx.lineTo(805,130);
	ctx.lineTo(793,142);
	ctx.stroke();
	ctx.closePath();

	//Lien Chevron 2
	ctx.beginPath();
	ctx.moveTo(1000,210);
	ctx.lineTo(980,210);
	ctx.lineTo(920,240);
	ctx.lineTo(875,280);
	ctx.stroke();
	ctx.closePath();

	//Lien Chevron 3
	ctx.beginPath();
	ctx.moveTo(1000,280);
	ctx.lineTo(980,280);
	ctx.lineTo(920,400);
	ctx.lineTo(860,425);
	ctx.stroke();
	ctx.closePath();

	/* Gate Status */
	ctx.beginPath();
	ctx.moveTo(400,605);
	ctx.lineTo(400,590);
	ctx.lineTo(880,590);
	ctx.lineTo(880,605);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(400,635);
	ctx.lineTo(400,650);
	ctx.lineTo(880,650);
	ctx.lineTo(880,635);
	ctx.stroke();
	ctx.closePath();

	ctx.lineWidth = "2";

	ctx.beginPath();
	ctx.moveTo(420,590);
	ctx.lineTo(420,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(440,590);
	ctx.lineTo(440,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(460,590);
	ctx.lineTo(460,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(480,590);
	ctx.lineTo(480,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(500,590);
	ctx.lineTo(500,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(520,590);
	ctx.lineTo(520,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(540,590);
	ctx.lineTo(540,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(560,590);
	ctx.lineTo(560,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(580,590);
	ctx.lineTo(580,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(600,590);
	ctx.lineTo(600,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(620,590);
	ctx.lineTo(620,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(640,590);
	ctx.lineTo(640,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(660,590);
	ctx.lineTo(660,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(680,590);
	ctx.lineTo(680,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(700,590);
	ctx.lineTo(700,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(720,590);
	ctx.lineTo(720,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(740,590);
	ctx.lineTo(740,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(760,590);
	ctx.lineTo(760,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(780,590);
	ctx.lineTo(780,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(800,590);
	ctx.lineTo(800,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(820,590);
	ctx.lineTo(820,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(840,590);
	ctx.lineTo(840,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(860,590);
	ctx.lineTo(860,597);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(420,650);
	ctx.lineTo(420,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(440,650);
	ctx.lineTo(440,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(460,650);
	ctx.lineTo(460,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(480,650);
	ctx.lineTo(480,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(500,650);
	ctx.lineTo(500,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(520,650);
	ctx.lineTo(520,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(540,650);
	ctx.lineTo(540,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(560,650);
	ctx.lineTo(560,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(580,650);
	ctx.lineTo(580,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(600,650);
	ctx.lineTo(600,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(620,650);
	ctx.lineTo(620,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(640,650);
	ctx.lineTo(640,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(660,650);
	ctx.lineTo(660,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(680,650);
	ctx.lineTo(680,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(700,650);
	ctx.lineTo(700,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(720,650);
	ctx.lineTo(720,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(740,650);
	ctx.lineTo(740,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(760,650);
	ctx.lineTo(760,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(780,650);
	ctx.lineTo(780,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(800,650);
	ctx.lineTo(800,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(820,650);
	ctx.lineTo(820,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(840,650);
	ctx.lineTo(840,643);
	ctx.stroke();
	ctx.closePath();

	ctx.beginPath();
	ctx.moveTo(860,650);
	ctx.lineTo(860,643);
	ctx.stroke();
	ctx.closePath();

	/*TEXTES*/
	ctx.font = "17px Helvetica";
	ctx.fillStyle = "rgba(255,255,255,1)";

	/* Credits */
	ctx.fillText("SGC Dialing Computer", 1075, 40);
	ctx.fillText("Concept Art - Script par Elanis", 1020, 60);

	/* User connected */
	ctx.fillText("Current User: Sg-Chef W. Harriman", 980, 690);


	/* Binaries à gauche */
	ctx.font = "16px Helvetica";

	ctx.fillText("1010101101101101", 37, 140);
	ctx.fillText("1101011011001110", 37, 160);
	ctx.fillText("0011010101001010", 37, 180);

	ctx.fillText("1100101100101011", 37, 230);
	ctx.fillText("0110011100101010", 37, 250);
	ctx.fillText("1010110100100110", 37, 270);
	ctx.fillText("0100100110110101", 37, 290);
	ctx.fillText("1101010010010101", 37, 310);

	ctx.fillText("1010110110110101", 37, 360);
	ctx.fillText("0101101100111010", 37, 380);
	ctx.fillText("1101010100101011", 37, 400);
	ctx.fillText("0110110110011010", 37, 420);
	ctx.fillText("1100100010111101", 37, 440);

	/* Code Auth */
	ctx.fillText("AUTH CODE :", 200, 690);

	DrawGateStatus();

	setInterval(clignoteRed,1500);

	}
}

function clignoteRed()
{
	if(GateStatus==0)
	{
		if(RedStatus==0) 
		{
		ctx.fillStyle = "rgba(255,0,0,1)";
		ctx.beginPath();//On démarre un nouveau tracé
		ctx.arc(GateX, GateY, 10, 0, Math.PI*2);
		ctx.fill();
		ctx.closePath();
		RedStatus = 1;
		}
		else
		{
		ctx.clearRect(GateX-10,GateY-10,20,20);
		RedStatus = 0;
		}
	console.log(RedStatus);
	}
}

function roundRect(x, y, width, height, radius, fill, stroke) {

  if (typeof stroke == 'undefined') {
    stroke = true;
  }
  if (typeof radius === 'undefined') {
    radius = 5;
  }
  if (typeof radius === 'number') {
    radius = {tl: radius, tr: radius, br: radius, bl: radius};
  } else {
    var defaultRadius = {tl: 0, tr: 0, br: 0, bl: 0};
    for (var side in defaultRadius) {
      radius[side] = radius[side] || defaultRadius[side];
    }
  }
  ctx.beginPath();
  ctx.moveTo(x + radius.tl, y);
  ctx.lineTo(x + width - radius.tr, y);
  ctx.quadraticCurveTo(x + width, y, x + width, y + radius.tr);
  ctx.lineTo(x + width, y + height - radius.br);
  ctx.quadraticCurveTo(x + width, y + height, x + width - radius.br, y + height);
  ctx.lineTo(x + radius.bl, y + height);
  ctx.quadraticCurveTo(x, y + height, x, y + height - radius.bl);
  ctx.lineTo(x, y + radius.tl);
  ctx.quadraticCurveTo(x, y, x + radius.tl, y);
  ctx.closePath();
  if (fill) {
    ctx.fill();
  }
  if (stroke) {
    ctx.stroke();
  }

}

function DrawGateStatus()
{
	ctx.font = "30px Helvetica";
	ctx.fillStyle = "rgba(255,255,255,1)";

	if(GateStatus==0) //Gate Off
	{
		ctx.fillText("IDLE", 610, 630);
	}
	else if(GateStatus==1) //Dialing
	{
		ctx.fillText("DIALING", 580, 630);
	}
	else if(GateStatus==2) //Open
	{
		ctx.fillText("ACTIVE", 580, 630);
	}
	else if(GateStatus==3) //Inbound
	{
		ctx.fillText("INCOMING", 560, 630);
	}
	else //Error
	{
		ctx.fillText("ERROR", 580, 630);
	}
}
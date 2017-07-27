/* Liste des sites ainsi que de leurs versions */
var websites = [
	{name: "Randomeme", versions: ["https://randomeme.xyz?mute=1"]},
	{name: "getinylink", versions: ["https://getiny.link"]},
	{name: "Dev42", versions: ["https://dev.elanistudio.eu/dev42/v1","https://dev42.elanistudio.eu"]},
	{name: "Space-scifi", versions: ["https://dev.elanistudio.eu/sg18/v1","https://dev.elanistudio.eu/sg18/v2","https://dev.elanistudio.eu/bso/v1","https://dev.elanistudio.eu/bso/v2","https://dev.elanistudio.eu/bso/v3","https://dev.elanistudio.eu/ssf/v1","https://scifi.elanistudio.eu/"]},
	{name: "***REMOVED***, versions: ["https://dev.elanistudio.eu/gaspar/v1","***REMOVED***?mute=1"]},
	{name: "Galactae", versions: ["https://spacegame.elanistudio.eu"]},
];

var currentSite = 0; // ID du site courant 

/*
openView
Ouvrir l'iframe d'apercu sur un site specifique
INPUT: n° du site
OUTPUT: -
*/
function openView(nmb) {
	currentSite = eval(nmb);
	var frame = document.getElementById("ApercuFrame");
	var overlay = document.getElementById("FrameOverlay");
	var title = document.getElementById("titleFrame");
	var versionDOM = document.getElementById("versionFrame");

	var nmbVersions = websites[currentSite]['versions'].length;

	/* On change le nom du site */
	title.innerHTML = websites[currentSite]['name'];
	title.href = websites[currentSite]['versions'][nmbVersions-1];

	/* On affiche la liste des versions */
	var versionContent = "Version:";
	for(var i=1; i<=nmbVersions; i++) {
		if(i!=1) { versionContent += " -"; }
		versionContent += " <a onclick=\"changeVersion("+i+")\" href=\"#\" id=\""+i+"\">"+i+"</a>";
	}
	versionDOM.innerHTML = versionContent;

	/* On change l'iframe */
	frame.src = websites[currentSite]['versions'][nmbVersions-1];

	/* On affiche le tout */
	overlay.style.display = "block";
}

/*
closeView
Fermer l'iframe d'apercu
INPUT: -
OUTPUT: -
*/
function closeView() {
	var overlay = document.getElementById("FrameOverlay");
	overlay.style.display = "none";
}

/*
changeVersion
Changer la version du site courant
INPUT: n° de version
OUTPUT: -
*/
function changeVersion(i) {
	/* Mise a jour de l'iframe */
	var frame = document.getElementById("ApercuFrame");
	frame.src = websites[currentSite]['versions'][i-1];

	/* Mise a jour du lien */
	var title = document.getElementById("titleFrame");
	title.href = websites[currentSite]['versions'][i-1];
}

/*
Evenements d'attribution des fonctions ci-dessus
*/
window.addEventListener('load', function() {
	var apercus = document.getElementsByClassName('apercu');
	for(var i = 0; i < apercus.length; i++) {
	    var apercu = apercus[i];
	    apercu.onclick = function() {
	        openView(this.id);
	        return false;
	    }
	}

	var closeViewButton = document.getElementById("quitFrame");
	closeViewButton.onclick = function() {
		closeView();
		return false;
	}
});
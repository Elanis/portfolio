import './index.css';

export default function HomePresentation({ age, workingTime }) {
	return (
		<>
			<h2>Elanis' Portfolio</h2>
			<div className="body-half">
				<h3>English</h3>
				<p>Hi !</p>
				<p>And welcome on my Portfolio !</p>
				<p>My name is Axel "Elanis" Soupé. I am {age}, and am working on personnal projects for {workingTime} years including: webdev, gamedev, datamining and plenty of other subjects.</p>
				<p>I'm passionate about many creative fields, I tried developpement of course but also 3D, 2D, video, drawing, and so on.</p>
				<p>You can take a look at my projects on the <a href="#projects">Projects</a> tab.</p>
			</div>
			<div className="body-half">
				<h3>Francais</h3>
				<p>Bonjour !</p>
				<p>Bienvenue sur mon portfolio !</p>
				<p>Mon nom est Axel "Elanis" Soupé. J'ai {age} ans, et je travaille sur mes projets personnels depuis maintenant {workingTime} ans dans des sujets divers tels que: le developpement web, le developpement de jeu vidéos, le datamining, et bien d'autres.</p>
				<p>Je suis passioné par de nombreuses activitées créatives, j'ai bien sûr pratiqué le developpement, mais aussi la 3D, la 2D, la vidéo, le dessin, etc.</p>
				<p>Vous pouvez jeter un oeil à mes projets sur la page <a href="#projects">Projects</a>.</p>
			</div>
		</>
	);
}

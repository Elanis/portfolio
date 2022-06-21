import './index.css';

export default function HomePresentation({ age, workingTime }) {
	return (
		<>
			<h2>Elanis' Portfolio</h2>
			<div className="body-half pres-general">
				<h3>Axel "Elanis" Soupé</h3>
				<img className="pres-me" src="img/me.jpg" alt="me" />
				<p><img className="pres-icon" src="img/birthday.png" alt="age" /> {age} years old</p>
				<p><img className="pres-icon" src="img/dev_time.png" alt="developing time" /> Developer for {workingTime} years</p>
			</div>
			<div className="body-half">
				<h3>Some details about me</h3>

				<ul>
				<li>Game developer (Check on Steam: <a href="https://store.steampowered.com/app/1730540/Alchemistry/" target="_blank">Alchemistry</a>, <a href="https://store.steampowered.com/app/1299430/Extortion/" target="_blank">Extortion</a>)</li>
				<li>Full Stack developer using .NET and React</li>
				<li>Founder of <a href="https://dysnomia.studio" target="_blank">Dysnomia</a>, the company that manage most of my projects.</li>
				<li>Part-time teacher at ULCO - Calais</li>
				<br/>
				<li>Rust enthousiast</li>
				<li>Big fan of Sonarqube and everything around code quality and good practices</li>
				<li>Open source contributor & developer - See my <a href="https://github.com/Elanis" target="_blank">Github</a></li>
				<br/>
				<li>Master degree in 2021</li>
				</ul>
			</div>
		</>
	);
}

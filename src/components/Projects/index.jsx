import './index.css';

import ProjectsItem from '../ProjectsItem';

export default function Projects({ projects, allowMinors }) {
	projects.sort((a, b) => {
		return (new Date(b.dates.updated)).getTime() - (new Date(a.dates.updated)).getTime();
	});

	let i = 0;
	let previousYear = 0;
	return (
		<div id="projects">
			<h2>My projects</h2>
			<h3 className="projects-subtitle">(sorted by last update time)</h3>
			{!allowMinors && <p className="page-link"><a href="/projects">Show full project list</a></p>}
			{allowMinors && <p className="page-link"><a href="/#projects">Get back to index</a></p>}
			<div id="projects" className="projects">
				{projects.filter((p) => allowMinors || p.major).map((project) => {
					let currentYear = new Date(project.dates.updated).getFullYear();
					let yearSeparator = null;
					if(currentYear !== previousYear) {
						previousYear = currentYear;
						yearSeparator = (<h3 key={currentYear} className="year-separator">{currentYear}</h3>);
					}

					return (<>
						{yearSeparator}
						<ProjectsItem key={i++} project={project} />
					</>);
				})}
			</div>
		</div>
	);
}
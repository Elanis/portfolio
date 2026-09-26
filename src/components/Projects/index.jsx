import './index.css';

import ProjectsItem from '../ProjectsItem';

const FIRST_RELEASE_FIELD = 'first-release';

export default function Projects({ projects, allowMinors }) {
	projects.sort((a, b) => {
		return (new Date(b.dates[FIRST_RELEASE_FIELD])).getTime() - (new Date(a.dates[FIRST_RELEASE_FIELD])).getTime();
	});

	let i = 0;
	let previousYear = 0;
	return (
		<div id="projects">
			<h2>My projects</h2>
			<h3 className="projects-subtitle">(sorted by initial release date descending)</h3>
			{!allowMinors && <p className="page-link"><a href="/projects">Show full project list</a></p>}
			{allowMinors && <p className="page-link"><a href="/#projects">Get back to index</a></p>}
			<div id="projects" className="projects">
				{projects.filter((p) => allowMinors || p.major).map((project) => {
					const firstReleaseDate = new Date(project.dates[FIRST_RELEASE_FIELD]);
					let currentProjectYear = firstReleaseDate.getFullYear();
					if (firstReleaseDate.getTime() > Date.now()) {
						currentProjectYear = 'Future';
					}
					let yearSeparator = null;
					if (currentProjectYear !== previousYear) {
						previousYear = currentProjectYear;
						yearSeparator = (<h3 key={currentProjectYear} className="year-separator">{currentProjectYear}</h3>);
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
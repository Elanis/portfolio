import './index.css';

import ProjectsItem from '../ProjectsItem';

export default function Projects({ projects }) {
	projects.sort((a, b) => {
		return (new Date(b.dates.updated)).getTime() - (new Date(a.dates.updated)).getTime();
	});

	let i = 0;
	return (
		<div>
			<h2>My projects</h2>
			<div id="projects" className="projects">
				{projects.map((project) => {
					return (<ProjectsItem key={i++} project={project} />);
				})}
			</div>
		</div>
	);
}
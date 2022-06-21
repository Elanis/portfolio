import './index.css'; 

export default function ProjectsItem(props) {
	const project = props.project;

	project.image = project.image || '';

	return (
		<div className="projects-item" style={{ 'backgroundImage': 'url(' + project.image + ')'}}>
			<div className="project-item-opacityBg">
				<a className="projects-item-bgLink" href={project.links[0].url}>
					<span className="project-item-title">{project.title}</span>
					<div className="project-item-tags">
						{project.tags.map((tag) =>
							<span key={tag} className={'project-item-' + tag.toLowerCase()}>{tag}</span>
						)}
						{project.major && <span key="major" className="project-item-major">Major Project</span>}
						{!project.major && <span key="minor" className="project-item-minor">Minor Project</span>}
					</div>
					<div className="project-item-techs">
						{project.techs.map((tech) =>
							<span key={tech} className="project-item-tech">{tech}</span>
						)}
					</div>
					<span className="project-item-description">{project.description}</span>
				</a>
				<div className="project-item-links">
					{project.links.map((link) =>
						<a key={link.name} href={link.url} className="project-item-link">
							<img src={'/img/' + link.name.toLowerCase() + '.webp'} alt={link.name} />{link.name}
						</a>
					)}
				</div>
			</div>
		</div>
	);
}
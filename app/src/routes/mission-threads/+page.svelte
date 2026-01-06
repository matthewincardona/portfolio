<script>
	import Zoom from 'svelte-medium-image-zoom';
  	import 'svelte-medium-image-zoom/dist/styles.css';
	import userPersona1 from '$lib/assets/mission threads/persona1.webp';
	import userPersona2 from '$lib/assets/mission threads/persona2.webp';
</script>

<svelte:head>
	<title>Projects | Mission Threads</title>
</svelte:head>

<div class="case-study">
	<!-- overview -->
	<section>
		<div>
			<div class="case-study__title">
				<p>Case Study</p>
				<h1>Mission Threads</h1>
			</div>
			<div class="case-study__container">
				<div>
					<h2>Overview</h2>
					<p>
						During my time at <b>Peraton</b>, I worked with a small team to transform the company's
						fragmented knowledge base, consolidating thousands of critical internal documents spread
						across multiple heritage companies.
					</p>
					<p>
						Employees relied on this system for government contract applications and daily
						operations, yet it was difficult to search and maintain. Our goal was to create a
						structured, intuitive system that simplified access and encouraged engagement.
					</p>
				</div>
				<div>
					<h2>Tools & Roles</h2>
					<p>UX/UI Design, User Research, Usability Testing, Product Strategy</p>
					<ul class="tag-container">
						<li class="project-tag"><span>Figma</span></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- background -->
	<div class="bg-wrapper">
		<section>
			<div class="case-study__row">
				<h2>Background</h2>
				<p>
					Peraton's rapid growth through acquisitions makes maintaining an up-to-date database
					challenging. Information is often missing, outdated, or lacks proper points of contact.
					Employees frequently keep documents on personal devices or share them informally, and
					uploaded files are often unsearchable.
				</p>
				<p>
					The existing knowledge base was a disorganized collection of thousands of documents,
					making it difficult to find or update information. Our goal was to build a system that
					allows employees to easily access and contribute valuable knowledge.
				</p>
			</div>
		</section>
	</div>

	<!-- information gathering -->
	<section>
		<h2 class="case-study__section-title">Information Gathering</h2>
		<div class="case-study__row">
			<h3>User Interviews</h3>
			<p>
				We conducted user interviews to understand how employees interacted with the current system
				and what improvements they needed. Key pain points included:
			</p>

			<div class="interview__card-grid" style="margin-top: 40px">
				<div class="interview__card">
					<p>
						"Information is siloed. I know my work, but I have no visibility into what others are
						doing."
					</p>
					<p><b>Director</b></p>
				</div>
				<div class="interview__card">
					<p>
						"Finding resources and contacts is frustrating—there’s no clear way to navigate the
						system."
					</p>
					<p><b>General Manager</b></p>
				</div>
				<div class="interview__card">
					<p>
						"The system is underutilized. If no one’s using it, why should I bother updating it?"
					</p>
					<p><b>Senior Program Director</b></p>
				</div>
				<div class="interview__card">
					<p>
						"Duplicated efforts are common. Everyone keeps their own documents, leading to
						inefficiencies."
					</p>
					<p><b>Senior Systems Architect</b></p>
				</div>
			</div>
		</div>
	</section>

	<section>
		<h3>Key Insights</h3>
		<p>
			We conducted user interviews with employees at Peraton to gather insights on their experiences
			with the existing knowledge base. The feedback highlighted several key issues:
		</p>
		<ul>
			<li>
				The knowledge base was difficult to navigate and search, leading to frustration and
				inefficiency.
			</li>
			<li>
				Employees were less motivated to update the knowledge base because they felt it was
				underutilized.
			</li>
			<li>
				Information was often siloed, making it hard to get a comprehensive view of the company's
				knowledge.
			</li>
			<li>
				It was difficult to quickly identify relevant documents from search results and then pull
				out relevant info from them.
			</li>
			<li>There was a need for a more user-friendly interface and better search functionality.</li>
		</ul>
	</section>

	<!-- requirements brainstorming -->
	<section>
		<h3>Requirements Brainstorming</h3>
		<p>
			We took the information we gathered from our interviews and conversations with stakeholders
			and started to brainstorm requirements for the new system.
		</p>
<iframe title="Requirements brainstorming" style="border: 1px solid rgba(0, 0, 0, 0.1);" max-width="1000px" width="100%" height="700" src="https://embed.figma.com/board/Wd2gCx7QmdTaD8RgBGOzhT/Mission-Thread-%7C-User-Interview-Data---Requirements--Public-?node-id=0-1&embed-host=share" allowfullscreen></iframe>
	</section>

	<!-- Key Insights -->
	<section>
		<h2 class="case-study__section-title">Personas & Features</h2>
		<p>Based on the information gathered from our interviews, we created the following personas.</p>
		<div class="case-study__flex">
			<Zoom>
				<img class="case-study__img case-study__img--small" src={userPersona1} alt="" loading="lazy" />
			</Zoom>
			<Zoom>
				<img class="case-study__img case-study__img--small" src={userPersona2} alt="" loading="lazy" />
			</Zoom>
		</div>

		<p>
			This further helped us to create a potential list of features, which we would later refine
			through more interviews and feedback. It included:
		</p>
		<ul>
			<li>Industry trends - Customized per user</li>
			<li>Recent content</li>
			<li>Search bar</li>
			<li>Filters</li>
			<li>Contribute Info Button</li>
			<li>Upload Documents Page</li>
			<li>
				Search Results Page
				<ul>
					<li>Breadcrumbs</li>
					<li>Displays results of a search/filter</li>
					<li>See how old/new each item is</li>
					<li>Report & request missing information button</li>
				</ul>
			</li>
			<li>
				Individual Search Result
				<ul>
					<li>Author, date, title, brief description, accuracy rating</li>
					<li>Document tags</li>
				</ul>
			</li>
			<li>
				Mission Threads Document Page
				<ul>
					<li>Breadcrumbs</li>
					<li>Core nodes</li>
					<li>Author, date, title, brief description, accuracy rating</li>
					<li>Report & request missing information button</li>
					<li>Tags for heritage companies</li>
				</ul>
			</li>
		</ul>
	</section>

	<section>
		<h2 class="case-study__section-title">Prototypes</h2>
		<p>
			From there, we boiled down our features list to just a few items that we wanted to focus on
			and created a prototype to present to our stakeholders.
		</p>

		<p><strong>Showcased Features:</strong></p>
		<ul>
			<li>Search dropdown for more nuances searches</li>
			<li>Filter by date range</li>
			<li>Feedback and copy buttons</li>
			<li>Content pagination</li>
			<li>View counter</li>
		</ul>

		<iframe
			title="Figma prototype"
			style="border: 1px solid rgba(0, 0, 0, 0.1);"
			max-width="1000"
			width="100%"
			height="700"
			src="https://embed.figma.com/proto/5bpS9Ho7KMtn21RFviLHa1/Mission-Thread-%7C-Prototypes--Public-?page-id=0%3A1&node-id=809-2329&viewport=-3909%2C36%2C0.37&scaling=scale-down-width&content-scaling=fixed&starting-point-node-id=809%3A2329&embed-host=share"
			allowfullscreen></iframe>

		<p>
			We also explored AI-enabled ideas to see what a far-future version of the system could look
			like. We modeled it after ChatGPT's UI and AI search result UIs from browsers like Brave. This
			kind of system would sit next to the new proposed UI as a separate feature and would allow
			users to quickly search for specific points of interest across multiple documents.
		</p>

		<iframe
			title="Figma AI prototype"
			style="border: 1px solid rgba(0, 0, 0, 0.1);"
			max-width="1000"
			width="100%"
			height="700"
			src="https://embed.figma.com/proto/5bpS9Ho7KMtn21RFviLHa1/Mission-Thread-%7C-Prototypes--Public-?page-id=1%3A3&node-id=299-9360&viewport=-2235%2C82%2C0.14&scaling=scale-down-width&content-scaling=fixed&starting-point-node-id=299%3A9360&embed-host=share"
			allowfullscreen></iframe>
	</section>

	<!-- Future Plans -->
	<section>
		<h2 class="case-study__section-title">Project Reflection</h2>
		<p>
			Our redesign transformed Peraton’s outdated knowledge base into an intuitive, searchable
			system with improved document organization and discoverability.
		</p>

		<p>However, key challenges emerged that offer opportunities for further refinement:</p>
		<ol>
			<li>
				<b>Driving Adoption:</b> Despite improved usability, some employees hesitated to contribute.
				Future iterations could incorporate onboarding tutorials and incentives to encourage participation.
			</li>
			<li>
				<b>Iterative Testing:</b> Additional user testing throughout development would have surfaced
				pain points earlier. A phased rollout with real-time analytics could provide continuous feedback.
			</li>
			<li>
				<b>Search Optimization:</b> Inconsistent metadata made finding specific documents challenging.
				AI-driven tagging and metadata standardization could improve search accuracy.
			</li>
		</ol>
	</section>
</div>

<style>
	/* .interview__card-grid-wrapper {
		display: flex;
		flex-direction: column;
		margin: auto;
		max-width: 1600px;
		padding: 100px 5% 20dvh 5%;
	} */

	.case-study__title p {
		margin-bottom: 0px;
		font-weight: bold;
		color: rgb(94, 94, 94);
	}

	.interview__card-grid {
		display: flex;
		flex-direction: row;
		margin: auto;
		justify-content: start;
		align-items: center;
		gap: 2vw;
		flex-wrap: wrap;
	}

	.interview__card {
		background-color: rgba(114, 114, 114, 0.08);
		border-radius: 8px;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		text-align: left;
		padding: 40px;
		max-width: 500px;
		height: 280px;
		box-shadow: inset 0px 0px 30px -10px rgba(255, 255, 255, 0.249),
			inset 0px -10px 20px 0px rgba(50, 1, 130, 0.249);
	}

	.interview__card > p:nth-of-type(2) {
		margin-top: 20px;
	}
</style>

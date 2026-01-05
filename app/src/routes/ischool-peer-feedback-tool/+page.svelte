<script>
	import Zoom from 'svelte-medium-image-zoom';
  	import 'svelte-medium-image-zoom/dist/styles.css';
	import LogoGithub from 'carbon-icons-svelte/lib/LogoGithub.svelte';
	import asmithLogin from '$lib/assets/501-feedback-tool/optimized/asmith login.webp';
	import asmithDash1 from '$lib/assets/501-feedback-tool/optimized/asmith dash 1.webp';
	import asmithDash2 from '$lib/assets/501-feedback-tool/optimized/asmith dash 2.webp';
	import createGroup from '$lib/assets/501-feedback-tool/optimized/create group.webp';
	import addCreators from '$lib/assets/501-feedback-tool/optimized/add creators.webp';
	import creatorPermissions from '$lib/assets/501-feedback-tool/optimized/creator permissions.webp';
	import setDates from '$lib/assets/501-feedback-tool/optimized/set dates.webp';
	import createAForm from '$lib/assets/501-feedback-tool/optimized/create a form.webm';
	import viewData from '$lib/assets/501-feedback-tool/optimized/view data.webp';
	import adminPage from '$lib/assets/501-feedback-tool/optimized/admin page.webp';
	import respondToForm1 from '$lib/assets/501-feedback-tool/optimized/respond to form 1.webp';
	import respondToForm2 from '$lib/assets/501-feedback-tool/optimized/respond to form 2.webp';
	import respondToForm3 from '$lib/assets/501-feedback-tool/optimized/respond to form 3.webp';
	import mincardDashCompleteForm from '$lib/assets/501-feedback-tool/optimized/mincard dash complete form.webp';
	import mincardDashCompleted from '$lib/assets/501-feedback-tool/optimized/mincard dash completed.webp';
	import mincardDashNotYetAvailable from '$lib/assets/501-feedback-tool/optimized/mincard dash not yet available.webp';
	import mincardDashPassedDeadline from '$lib/assets/501-feedback-tool/optimized/mincard dash passed deadline.webp';
</script>

<svelte:head>
	<title>Projects | iSchool Peer Feedback Tool</title>
	<link
		rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
		integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
		crossorigin="anonymous"
		referrerpolicy="no-referrer"
	/>
</svelte:head>

<div class="case-study">
	<!-- overview -->
	<section>
		<div>
			<div class="case-study__title">
				<p>Case Study</p>
				<h1>iSchool Peer Feedback Tool</h1>
			</div>
			<div class="case-study__container">
				<div>
					<h2>Overview</h2>
					<p>
						The <strong>iSchool Peer Feedback Tool</strong> was developed to address the inefficiencies
						of manual peer review processes in academic settings. Traditionally, gathering and processing
						feedback for both students and faculty was a time-consuming task that required significant
						administrative effort. The tool automates feedback solicitation, anonymizes responses, and
						generates detailed reports, reducing a 30-hour workload to just 1-2 hours per semester.
					</p>

					<p>
						This was a <strong>two-semester project,</strong> made for clients at the iSchool. We met
						with our core stakeholders regularly, and at larger gate reviews with additional stakeholders,
						for strategic discussions and to ensure the final product would effectively meet their needs.
					</p>
				</div>
				<div>
					<h2>Tools & Roles</h2>
						<a href="https://github.com/matthewincardona/501-peer-feedback-system" target="_blank">
							<div class="tools-links">
								<LogoGithub size="32px" style="fill: var(--body-color)" />
								<span><b>Github Repo</b></span>
							</div></a>
					<p>Project Management, UX/UI Design, Frontend Development</p>
					<ul class="tag-container">
						<li class="project-tag"><span>Azure DevOps</span></li>
						<li class="project-tag"><span>Figma</span></li>
						<li class="project-tag"><span>React</span></li>
						<li class="project-tag"><span>SQL</span></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="case-study__row">
			<h2>Background</h2>
			<p>
				As the project manager, I led our team of designers and developers while also contributing
				as a UX/UI designer and frontend developer, stepping into SQL and API work as needed. I
				directed the team using a Waterfall methodology, chosen for its structured and predictable
				approach, which allowed us to effectively plan and allocate time and resources.
			</p>
			<p>
				To ensure consistency and efficiency, I organized our codebase in a clear, scalable
				structure, making it easy to replicate. Additionally, I created comprehensive documentation
				to streamline collaboration between our design and development teams, clarifying workflows
				and communication processes. We utilized Azure DevOps for task management and code hosting,
				keeping the team aligned and productive.
			</p>

			<p>The final product had to meet the following requirements:</p>
			<ul>
				<li>
					<strong>Reduce Manual Labor by 95%:</strong> Decrease the time spent on the peer feedback process
					from 30 hours per semester to just 1-2 hours.
				</li>
				<li>
					<strong>Improve Feedback Turnaround Time:</strong> Ensure feedback is collated and anonymized,
					with reports delivered within 48 hours after submission deadlines.
				</li>
				<li>
					<strong>Increase User Satisfaction:</strong> Achieve a satisfaction rate of 85% or higher among
					both feedback providers and recipients.
				</li>
				<li>
					<strong>Demonstrate Scalability:</strong> Prove that the tool can handle an increasing number
					of users and be expanded for broader academic use.
				</li>
			</ul>
		</div>
	</section>

	<section>
		<h2 class="case-study__section-title">Features</h2>
		<p>
			We spent the first semester creating a list of MVP requirements, a project charter, and
			discussing our plans for design, development, and the final implementation. Through many
			iterations, we decided on the following requirements:
		</p>
		<ul>
			<li>
				Develop a user role management system, allowing users to select and assign roles. Presently,
				there are two distinct roles for forms:
				<ul>
					<li>
						<strong>Creator:</strong> Creators possess the capability to generate customized feedback
						forms and access responses. They have the right to say who gets to see their forms and how
						it gets grouped (e.g., the different teams in ISTE 500 or different groups for faculty review).
					</li>
					<li>
						<strong>Responder:</strong> Responders are solely tasked with completing the assigned feedback
						forms.
					</li>
					<li>
						<strong>Super Admin:</strong> The Super Admin is in charge of assigning the Creators.
					</li>
				</ul>
			</li>
			<li>
				Enable Creators to design and customize feedback forms according to specific requirements,
				granting them the flexibility to tailor forms to the unique needs of different projects or
				assessments.
			</li>
			<li>
				Ensure Responders can efficiently and effectively provide feedback by streamlining the
				form-filling process.
			</li>
			<li>
				Implement functionality to export form responses in CSV (Comma-Separated Values) format,
				facilitating seamless data transfer and analysis across various platforms and applications.
			</li>
			<li>
				Ensure the anonymity of responses to foster candid and unbiased feedback. Implement robust
				mechanisms to anonymize responses effectively, safeguarding the confidentiality and
				integrity of feedback data throughout the process. The creator of the form should be the
				only one who can see the respondents.
			</li>
		</ul>
	</section>

	<!-- svelte-ignore a11y-media-has-caption -->
	<section>
		<h2 class="case-study__section-title">Screens</h2>
		<h3>Shibboleth Login</h3>
		<p>Users can securely log in using Shibboleth, similar to RIT's own login system.</p>
		<Zoom>
			<img class="case-study__img" src={asmithLogin} alt="" loading="lazy" />
		</Zoom>
		<h3>Creating a Form</h3>
		<p>
			One of the hardest parts of this project was making it work for both faculty reviews and
			in-class student reviews. The tool had to be flexible enough to handle both situations and use
			language that reflected that. We create a system of "Groups", "Teams", and "Users" to
			effectively capture both use cases.
		</p>
		<p>
			At the second-highest level of power, behind only admins, creators can make new forms, edit
			existing forms and assigned teams/users, and view individual and aggregated submission data.
			Creators can be also be responders on forms.
		</p>
		<Zoom>
			<img class="case-study__img" src={asmithDash1} alt="" loading="lazy" />
		</Zoom>
		<Zoom>
			<img class="case-study__img" src={asmithDash2} alt="" loading="lazy" />
		</Zoom>

		<p>
			Only users in the same team can submit responses for each other. This can be seen later on in
			the "Responding To Forms" section.
		</p>
		<Zoom>
			<img class="case-study__img" src={createGroup} alt="" loading="lazy" />
		</Zoom>

		<p>
			An important feature is the ability to add multiple creators and set their permissions
			individually. This way, multiple people can see data, edit forms, and edit assigned teams /
			users. In some cases, we didn't want every creator to have access to all of these features.
			This also applies to the initial creator, who, on the honor system, might need to remove some
			of their own abilities on a particular form.
		</p>
		<Zoom>
			<img class="case-study__img" src={addCreators} alt="" loading="lazy" />
		</Zoom>

		<Zoom>
			<img class="case-study__img" src={creatorPermissions} alt="" loading="lazy" />
		</Zoom>
		<p>
			Start and end dates determine when the form becomes available to responders and if it can be
			edited (forms cannot be edited after they open, to protect submission data tables).
		</p>
		<Zoom>
			<img class="case-study__img" src={setDates} alt="" loading="lazy" />
		</Zoom>
		<video
			src={createAForm}
			id="create-a-form-video"
			loading="lazy"
			autoplay="true"
			controls="true"
			muted="true"
		/>
		<Zoom>
			<img class="case-study__img" src={viewData} alt="" loading="lazy" />
		</Zoom>
		<h3>Admin Page</h3>
		<p>
			Admins are able to delegate roles to users and have a dedicated page viewable only to them.
			This was in response to a need for user management that wouldn't require backend skills /
			knowledge, as the admin wouldn't necessarily be a technically-savy individual.
		</p>
		<Zoom>
			<img class="case-study__img" src={adminPage} alt="" loading="lazy" />
		</Zoom>
		<h3>Form States</h3>
		<p>
			Forms have appropriate states depending on a form's status (Complete Form, Completed, Not Yet
			Available, Passed Deadline).
		</p>
		<Zoom>
			<img class="case-study__img" src={mincardDashCompleteForm} alt="" loading="lazy" />
		</Zoom>
		<Zoom>
			<img class="case-study__img" src={mincardDashCompleted} alt="" loading="lazy" />
		</Zoom>
		<Zoom>	
			<img class="case-study__img" src={mincardDashNotYetAvailable} alt="" loading="lazy" />
		</Zoom>
		<Zoom>	
			<img class="case-study__img" src={mincardDashPassedDeadline} alt="" loading="lazy" />
		</Zoom>
		<h3>Responding To Forms</h3>
		<p>
			Users who are assigned to a form can respond if it's available (which happens when it's past
			the creator-set start date). Once all submissions are made, a message confirms to the user
			that they've completed this form and the dashboard view reflects this (by setting the form to
			a "Completed" status and stopping any further actions).
		</p>
		<Zoom>
			<img class="case-study__img" src={respondToForm1} alt="" loading="lazy" />
		</Zoom>
		<Zoom>	
			<img class="case-study__img" src={respondToForm2} alt="" loading="lazy" />
		</Zoom>
		<Zoom>
			<img class="case-study__img" src={respondToForm3} alt="" loading="lazy" />
		</Zoom>
	</section>

	<section>
		<div class="case-study__row">
			<h2 class="case-study__section-title">Project Reflection</h2>
			<p>
				When starting the project, I initially balanced both development and project management
				responsibilities. However, I quickly recognized the critical importance of fully embracing
				the project management role to ensure the team's success. I focused on delegating tasks
				effectively, breaking down complex objectives into clear, actionable steps, and providing
				detailed documentation to streamline execution.
			</p>
			<p>
				I also prioritized regular check-ins with team members to address roadblocks, gather
				feedback, and align on goals. Additionally, I worked on improving sprint planning, setting
				realistic timelines, and ensuring seamless collaboration across different functions. This
				shift in approach not only enhanced team productivity but also strengthened my ability to
				lead projects efficiently while maintaining a clear strategic vision.
			</p>
		</div>
	</section>
</div>

<style>
	.case-study__title p {
		margin-bottom: 0px;
		font-weight: bold;
		color: rgb(94, 94, 94);
	}

	.tools-links {
		display: flex;
		align-items: center;
		gap: 0.8em;
		margin-bottom: 8px;
	}

	#create-a-form-video {
		width: 95%;
		margin-left: 3%;
		border-radius: 10px;
		-webkit-box-shadow: 10px 10px 15px 0px rgba(0, 0, 0, 0.35);
		-moz-box-shadow: 10px 10px 15px 0px rgba(0, 0, 0, 0.35);
		box-shadow: 10px 10px 15px 0px rgba(0, 0, 0, 0.35);
	}
</style>

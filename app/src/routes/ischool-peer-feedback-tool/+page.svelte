<script>
	import asmithLogin from '$lib/assets/501-feedback-tool/optimized/asmith login.webp';
	import asmithDash1 from '$lib/assets/501-feedback-tool/optimized/asmith dash 1.webp';
	import asmithDash2 from '$lib/assets/501-feedback-tool/optimized/asmith dash 2.webp';
	import createGroup from '$lib/assets/501-feedback-tool/optimized/create group.webp';
	import addCreators from '$lib/assets/501-feedback-tool/optimized/add creators.webp';
	import creatorPermissions from '$lib/assets/501-feedback-tool/optimized/creator permissions.webp';
	import setDates from '$lib/assets/501-feedback-tool/optimized/set dates.webp';
	import createAForm from '$lib/assets/501-feedback-tool/optimized/create a form.webm';
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
</svelte:head>

<div class="case-study">
	<!-- overview -->
	<section>
		<div>
			<div class="case-study__title">
				<h1>iSchool Peer Feedback Tool</h1>
			</div>
			<div class="case-study__container">
				<div>
					<h4>Overview</h4>
					<p>
						The <strong>iSchool Peer Feedback Tool</strong> was developed to address the
						inefficiencies of manual peer review processes in academic settings. Traditionally,
						gathering and processing feedback for both students and faculty was a time-consuming
						task that required significant administrative effort. The tool automates feedback
						solicitation, anonymizes responses, and generates detailed reports, reducing a 30-hour
						workload to just 1-2 hours per semester.
						<br /><br />
						This streamlining not only saves time but also ensures timely, accurate feedback that fosters
						continuous improvement. With its scalable design, the tool has the potential to be adopted
						by other academic departments and administrative processes in the future.
					</p>
				</div>
				<div>
					<h4>Tools & Roles</h4>
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
			<h4>Background</h4>
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
		<h4>Features</h4>
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
		<h3 class="case-study__section-title">Screens</h3>
		<h4>Shibboleth Login</h4>
		<br />
		<img class="case-study__img" src={asmithLogin} alt="" loading="lazy" />
		<br />
		<h4>Creating a Form</h4>

		<img class="case-study__img" src={asmithDash1} alt="" loading="lazy" />
		<img class="case-study__img" src={asmithDash2} alt="" loading="lazy" />
		<img class="case-study__img" src={createGroup} alt="" loading="lazy" />
		<img class="case-study__img" src={addCreators} alt="" loading="lazy" />
		<img class="case-study__img" src={creatorPermissions} alt="" loading="lazy" />
		<img class="case-study__img" src={setDates} alt="" loading="lazy" />
		<video
			src={createAForm}
			loading="lazy"
			autoplay="true"
			controls="true"
			style="width: 95%; margin-left: 3%"
		/>
		<br />
		<br />
		<br />
		<h4>Admin Page</h4>
		<img class="case-study__img" src={adminPage} alt="" loading="lazy" />

		<br />
		<h4>Responding To Forms</h4>
		<img class="case-study__img" src={respondToForm1} alt="" loading="lazy" />
		<img class="case-study__img" src={respondToForm2} alt="" loading="lazy" />
		<img class="case-study__img" src={respondToForm3} alt="" loading="lazy" />

		<br />
		<h4>Form States</h4>
		<img class="case-study__img" src={mincardDashCompleteForm} alt="" loading="lazy" />
		<img class="case-study__img" src={mincardDashCompleted} alt="" loading="lazy" />
		<img class="case-study__img" src={mincardDashNotYetAvailable} alt="" loading="lazy" />
		<img class="case-study__img" src={mincardDashPassedDeadline} alt="" loading="lazy" />
	</section>
</div>

<style>
</style>

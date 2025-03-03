<script>
	import asmithLogin from '$lib/assets/501-feedback-system/optimized/asmith login.webp';
	import asmithDash1 from '$lib/assets/501-feedback-system/optimized/asmith dash 1.webp';
	import asmithDash2 from '$lib/assets/501-feedback-system/optimized/asmith dash 2.webp';
	import createGroup from '$lib/assets/501-feedback-system/optimized/create group.webp';
	import addCreators from '$lib/assets/501-feedback-system/optimized/add creators.webp';
	import creatorPermissions from '$lib/assets/501-feedback-system/optimized/creator permissions.webp';
	import setDates from '$lib/assets/501-feedback-system/optimized/set dates.webp';
	import createAForm from '$lib/assets/501-feedback-system/optimized/create a form.webm';
	import adminPage from '$lib/assets/501-feedback-system/optimized/admin page.webp';
	import respondToForm1 from '$lib/assets/501-feedback-system/optimized/respond to form 1.webp';
	import respondToForm2 from '$lib/assets/501-feedback-system/optimized/respond to form 2.webp';
	import respondToForm3 from '$lib/assets/501-feedback-system/optimized/respond to form 3.webp';
	import mincardDashCompleteForm from '$lib/assets/501-feedback-system/optimized/mincard dash complete form.webp';
	import mincardDashCompleted from '$lib/assets/501-feedback-system/optimized/mincard dash completed.webp';
	import mincardDashNotYetAvailable from '$lib/assets/501-feedback-system/optimized/mincard dash not yet available.webp';
	import mincardDashPassedDeadline from '$lib/assets/501-feedback-system/optimized/mincard dash passed deadline.webp';
</script>

<svelte:head>
	<title>Projects | ISTE 501 Peer Feedback System</title>
</svelte:head>

<div class="case-study">
	<!-- overview -->
	<section>
		<div>
			<div class="case-study__title">
				<h1>ISTE 501 Peer Feedback System</h1>
			</div>
			<div class="case-study__container">
				<div>
					<h4>Overview</h4>
					<p>
						During my time at <b>Peraton</b>, I worked with a small team to transform the company's
						fragmented knowledge base, consolidating thousands of critical internal documents spread
						across multiple heritage companies.
						<br /><br />
						Employees relied on this system for government contract applications and daily operations,
						yet it was difficult to search and maintain. Our goal was to create a structured, intuitive
						system that simplified access and encouraged engagement.
					</p>
				</div>
				<div>
					<h4>Tools & Roles</h4>
					<p>UX/UI Design, User Research, Usability Testing, Product Strategy</p>
					<ul class="tag-container">
						<li class="project-tag"><span>UX Researcher</span></li>
						<li class="project-tag"><span>UI Designer</span></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="case-study__row">
			<h4>Background</h4>
			<p>
				Peraton's rapid growth through acquisitions makes maintaining an up-to-date database
				challenging. Information is often missing, outdated, or lacks proper points of contact.
				Employees frequently keep documents on personal devices or share them informally, and
				uploaded files are often unsearchable.
				<br /><br />
				The existing knowledge base was a disorganized collection of thousands of documents, making it
				difficult to find or update information. Our goal was to build a system that allows employees
				to easily access and contribute valuable knowledge.
			</p>
		</div>
	</section>

	<section>
		<h3 class="case-study__section-title">Personas & Features</h3>
		<p>Based on the information gathered from our interviews, we created the following personas.</p>
		<br />
		<img class="case-study__img" src={asmithLogin} alt="" loading="lazy" />
		<img class="case-study__img" src={asmithDash1} alt="" loading="lazy" />
		<img class="case-study__img" src={asmithDash2} alt="" loading="lazy" />
		<img class="case-study__img" src={createGroup} alt="" loading="lazy" />
		<img class="case-study__img" src={addCreators} alt="" loading="lazy" />
		<img class="case-study__img" src={creatorPermissions} alt="" loading="lazy" />
		<img class="case-study__img" src={setDates} alt="" loading="lazy" />
		<img class="case-study__img" src={createAForm} alt="" loading="lazy" />

		<img class="case-study__img" src={adminPage} alt="" loading="lazy" />

		<img class="case-study__img" src={respondToForm1} alt="" loading="lazy" />
		<img class="case-study__img" src={respondToForm2} alt="" loading="lazy" />
		<img class="case-study__img" src={respondToForm3} alt="" loading="lazy" />

		<img class="case-study__img" src={mincardDashCompleteForm} alt="" loading="lazy" />
		<img class="case-study__img" src={mincardDashCompleted} alt="" loading="lazy" />
		<img class="case-study__img" src={mincardDashNotYetAvailable} alt="" loading="lazy" />
		<img class="case-study__img" src={mincardDashPassedDeadline} alt="" loading="lazy" />
	</section>
</div>

<style>
</style>

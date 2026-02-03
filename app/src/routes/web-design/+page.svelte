<script>
	import mEducationHome from '$lib/assets/web design/mEducation Home.webm';
	import mEducationFoldscope from '$lib/assets/web design/mEducation Foldscope.webm';
	import stssIncHome from '$lib/assets/web design/STSS Inc Home.webm';
	import stssIncServices from '$lib/assets/web design/STSS Inc Services.webm';
	import yvetteContactMe from '$lib/assets/web design/Contact Me.webm';
	import yvetteEntrepreneurshipBook from '$lib/assets/web design/Entreprenuership book.webm';
	import yvetteHome from '$lib/assets/web design/Home.webm';
	import yvetteJourneyPhyisicianRecruiter from '$lib/assets/web design/Journey of a Phyisician Recruiter.webm';
</script>

<svelte:head>
	<title>Projects | Freelance Web Design</title>
</svelte:head>

<div class="case-study">
	<!-- overview -->
	<section>
		<div class="case-study__title">
			<p>Case Studies</p>
			<h1>Freelance Web Design</h1>
			<!-- <ul class="tag-container">
				<li class="project-tag"><span>Founder</span></li>
				<li class="project-tag"><span>Web Designer</span></li>
			</ul> -->
			<div class="case-study__container">
				<div class="case-study__left-panel">
					<h2>Overview</h2>
					<p>
						I started my freelance business, DouxDolci Web Design, a number of years ago as a way to
						get my foot in the door and learn web design professionally. Since then, I've worked
						with a number of small businesses and nonprofit groups, creating custom websites that
						fit their user's needs and could be managed without the need for a web designer.
					</p>
					<p>
						To learn more about DouxDolci, you can visit the website
						<a href="https://douxdolci.com" target="_blank" rel="noopener noreferrer"
							><u>here.</u></a
						>
					</p>
				</div>
				<div class="case-study__right-panel">
					<h2>Keywords</h2>
					<p>Web Design, Web Development, WordPress</p>
				</div>
			</div>
		</div>
	</section>

	<!-- mEducation Alliance -->
	<div class="bg-wrapper">
		<section>
			<h2 class="case-study__section-title">
				<a href="https://meducationalliance.org" target="_blank">mEducation Alliance</a>
			</h2>

			<div class="case-study__row">
				<p>
					Partnered with mEducation Alliance, a global education-focused nonprofit, to completely
					redesign their website.
				</p>
				<ul>
					<li>
						<strong>Brand Transformation:</strong> Reimagined brand identity to be more playful and child-centric,
						aligning with the organization's mission and desired perception
					</li>
					<li>
						<strong>Prototyping:</strong> Developed comprehensive low and high-fidelity prototypes for
						dozens of pages across the site
					</li>
					<li>
						<strong>Pattern Library:</strong> Built a scalable pattern library with reusable components
						for design consistency site-wide
					</li>
					<li>
						<strong>Performance Optimization:</strong> Improved site performance through image optimization,
						lazy loading implementation, and Cloudflare CDN integration
					</li>
					<li>
						<strong>Competitive Research:</strong> Conducted competitive analysis and explored design
						opportunities within the education nonprofit space
					</li>
				</ul>
			</div>
			<div class="case-study__row">
				<video src={mEducationHome} loading="lazy" autoplay="true" controls="true" muted="true"
				></video>
				<video src={mEducationFoldscope} loading="lazy" autoplay="true" controls="true" muted="true"
				></video>
			</div>
		</section>
	</div>

	<!-- STSS -->
	<div class="bg-wrapper">
		<section>
			<h2 class="case-study__section-title">
				<a href="https://stssinc.com" target="_blank">STSS Inc.</a>
			</h2>
			<div class="case-study__row">
				<p>
					Partnered with STSS Inc., a North Carolina-based temporary staffing agency, to overhaul
					their website's performance, search visibility, and content.
				</p>
				<ul>
					<li>
						<strong>Performance Optimization:</strong> Identified and resolved bottlenecks affecting site
						speed and user experience
					</li>
					<li>
						<strong>SEO Enhancement:</strong> Implemented technical SEO best practices to improve search
						rankings
					</li>
					<li>
						<strong>Industry-Specific Pages:</strong> Created targeted landing pages for hospitality sectors
						(hotels, restaurants, events, catering)
					</li>
					<li>
						<strong>WordPress Troubleshooting:</strong> Diagnosed and fixed plugin conflicts, theme issues,
						and backend errors
					</li>
					<li>
						<strong>Mobile Optimization:</strong> Ensured responsive design for job seekers browsing on
						mobile devices
					</li>
					<li><strong>Local SEO:</strong> Optimized for "Cary, NC" and Triangle area searches</li>
					<li>
						<strong>Structured Data:</strong> Added schema markup for job postings and local business
						information
					</li>
				</ul>
			</div>

			<div class="case-study__row">
				<video src={stssIncHome} loading="lazy" autoplay="true" controls="true" muted="true"
				></video>
				<video src={stssIncServices} loading="lazy" autoplay="true" controls="true" muted="true"
				></video>
			</div>
		</section>
	</div>

	<!-- Yvette Simmons -->
	<div class="bg-wrapper">
		<section>
			<h2 class="case-study__section-title">
				<a href="https://stssinc.com" target="_blank">Yvette Simmons</a>
			</h2>

			<p>
				Designed and developed a custom website for local author Yvette Simmons to showcase her work
				and connect with readers.
			</p>
			<ul>
				<li>
					<strong>Enhanced Storytelling:</strong> Crafted compelling narrative sections that highlight
					Yvette's personal journey and professional accomplishments to create authentic visitor engagement
				</li>
				<li>
					<strong>Visual Appeal:</strong> Integrated vibrant imagery and thoughtful animations that capture
					her dynamic personality and literary voice
				</li>
				<li>
					<strong>User Engagement:</strong> Strategically placed call-to-action buttons to drive book
					purchases, event registrations, and newsletter signups
				</li>
				<li>
					<strong>Accessibility:</strong> Implemented WCAG standards to ensure the site is fully navigable
					and inclusive for all visitors
				</li>
			</ul>

			<h3>Accessibility Enhancements:</h3>
			<ul>
				<li>Added descriptive alt text to images for screen readers.</li>
				<li>Conducted thorough screen reader testing to improve navigation.</li>
				<li>Ensured full keyboard accessibility for all interactive elements.</li>
				<li>Adjusted color contrast to meet WCAG guidelines for readability.</li>
				<li>Assigned appropriate ARIA roles to buttons and navigation elements.</li>
				<li>
					Refined the HTML structure and heading hierarchy for better screen reader interpretation.
				</li>
			</ul>
			<div class="case-study__row">
				<video src={yvetteHome} loading="lazy" autoplay="true" controls="true" muted="true"></video>

				<video
					src={yvetteEntrepreneurshipBook}
					loading="lazy"
					autoplay="true"
					controls="true"
					muted="true"
				></video>

				<video
					src={yvetteJourneyPhyisicianRecruiter}
					loading="lazy"
					autoplay="true"
					controls="true"
					muted="true"
				></video>

				<video src={yvetteContactMe} loading="lazy" autoplay="true" controls="true" muted="true"
				></video>
			</div>
		</section>
	</div>
</div>

<style>
	.case-study__title p {
		margin-bottom: 0px;
		font-weight: bold;
		color: rgb(94, 94, 94);
	}
</style>

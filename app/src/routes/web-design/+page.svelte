<script>
	import meducationAlliance from '$lib/assets/web design/meducation alliance.webp';
	import murbanMarketing from '$lib/assets/web design/matt urban marketing.webp';
	import tailoredMale from '$lib/assets/web design/tailored male.webp';
	import pwec from '$lib/assets/web design/pwec.webp';
	import yvetteContactMe from '$lib/assets/web design/Contact Me.webm';
	import yvetteEntrepreneurshipBook from '$lib/assets/web design/Entreprenuership book.webm';
	import yvetteHome from '$lib/assets/web design/Home.webm';
	import yvetteJourneyPhyisicianRecruiter from '$lib/assets/web design/Journey of a Phyisician Recruiter.webm';
</script>

<svelte:head>
	<title>Projects | DouxDolci Web Design</title>
</svelte:head>

<div class="case-study">
	<!-- overview -->
	<section>
		<div class="case-study__title">
			<h1>DouxDolci Web Design</h1>
			<!-- <ul class="tag-container">
				<li class="project-tag"><span>Founder</span></li>
				<li class="project-tag"><span>Web Designer</span></li>
			</ul> -->
			<div class="case-study__container">
				<div class="case-study__left-panel">
					<h2>Overview</h2>
					<p>
						I started DouxDolci Web Design a number of years ago as a way to get my foot in the door
						and learn web design professionally. Since then, I've worked with a number of small
						businesses and nonprofit groups, creating custom websites that fit their user's needs
						and could be managed without the need for a web designer. <br /><br />
						To learn more about DouxDolci, you can visit the website
						<a href="https://douxdolci.com" target="_blank" rel="noopener noreferrer"
							><u>here.</u></a
						>
					</p>
				</div>
				<div class="case-study__right-panel">
					<h2>Keywords</h2>
					<p>Visual Design, User Experience, WordPress CMS</p>
				</div>
			</div>
		</div>
	</section>

	<!-- yvette -->
	<div class="bg-wrapper">
		<section>
			<h2 class="case-study__section-title">Yvette Simmons</h2>

			<p>
				In redesigning Yvette Simmons' website, I aimed to create a platform that authentically
				represents her journey and expertise as an author and entrepreneur. Yvette's story—from her
				beginnings in Kingston, Jamaica, to her successful career in the U.S. healthcare staffing
				industry—serves as an inspiration to many.
			</p>
			<br /><br />
			<h3>Redesign Objectives:</h3>
			<ul>
				<li>
					<strong>Enhanced Storytelling:</strong> Highlighting Yvette's personal and professional journey
					to engage visitors.
				</li>
				<li>
					<strong>Visual Appeal:</strong> Incorporating vibrant visuals and animations to reflect her
					dynamic personality.
				</li>
				<li>
					<strong>User Engagement:</strong> Adding clear call-to-action buttons to encourage interactions
					like book purchases and event bookings.
				</li>
				<li>
					<strong>Accessibility:</strong> Ensuring the site is navigable and usable for all users, regardless
					of ability.
				</li>
			</ul>
			<br /><br />

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

			<p>
				These improvements resulted in a polished, user-friendly website that effectively showcases
				Yvette's work while being easy to maintain and update.
			</p>
			<div class="case-study__row">
				<video
					src={yvetteHome}
					id="create-a-form-video"
					loading="lazy"
					autoplay="true"
					controls="true"
					muted="true"
				/>

				<br /><br />

				<video
					src={yvetteEntrepreneurshipBook}
					id="create-a-form-video"
					loading="lazy"
					autoplay="true"
					controls="true"
					muted="true"
				/>

				<br /><br />

				<video
					src={yvetteJourneyPhyisicianRecruiter}
					id="create-a-form-video"
					loading="lazy"
					autoplay="true"
					controls="true"
					muted="true"
				/>
				<br /><br />

				<video
					src={yvetteContactMe}
					id="create-a-form-video"
					loading="lazy"
					autoplay="true"
					controls="true"
					muted="true"
				/>
			</div>
		</section>
	</div>

	<!-- med -->
	<div class="bg-wrapper">
		<section>
			<h2 class="case-study__section-title">mEducation Alliance</h2>
			<div class="case-study__row">
				<h3>Challenge</h3>
				<p>
					The mEducation Alliance, a non-profit organization focused on leveraging technology to
					improve global education, needed a website that was both functional and easy to maintain.
					Their existing website had several major pain points that made content management
					difficult, especially for interns and staff with limited web design experience. The key
					challenges included:
				</p>
				<ul>
					<li>A complex and unintuitive backend that made updating content time-consuming</li>
					<li>No ability to preview changes before publishing, leading to errors going live</li>
					<li>No built-in backup system, making content updates risky and irreversible</li>
					<li>Performance and accessibility issues that affected usability</li>
				</ul>
			</div>

			<div class="case-study__row">
				<h3>Solution</h3>
				<p>
					To create a more efficient and user-friendly system, I worked closely with the mEducation
					Alliance team to understand their specific needs, workflows, and technical constraints. My
					goal was to design a solution that allowed their team—especially interns—to manage content
					confidently without requiring deep technical knowledge.
				</p>
				<ul>
					<li>
						Rebuilt the website using a WYSIWYG (What You See Is What You Get) editor, making it
						easier for non-technical users to edit content
					</li>
					<li>
						Implemented a preview functionality, allowing users to review changes before publishing
					</li>
					<li>
						Developed a structured backup system to prevent data loss and enable content recovery
					</li>
					<li>
						Optimized site performance through streamlined code, caching, and Cloudflare integration
					</li>
					<li>
						Ensured accessibility compliance by improving navigation, contrast, and screen reader
						compatibility
					</li>
				</ul>
				<p>
					Beyond the initial redesign, I continue to collaborate with the mEducation Alliance,
					providing technical support, training, and ongoing refinements to ensure their website
					remains functional and scalable. I also prototype new page layouts and interactive
					elements to enhance user engagement and better align with the organization's evolving
					goals.
				</p>
			</div>
		</section>
	</div>

	<!-- urban -->
	<section>
		<h2 class="case-study__section-title">Matt Urban Marketing</h2>
		<div class="case-study__row">
			<h3>Challenge</h3>
			<p>
				Creating a website for a marketing startup that exhibits a unique brand image. Has the
				following requirements:
			</p>
			<ul>
				<li>Brand image that fits current logo</li>
				<li>Simple to use</li>
				<li>Cost-effective</li>
			</ul>
		</div>
		<div class="case-study__row">
			<h3>Solution</h3>
			<p>
				Designed and built a responsive and user-centered website based on client needs and
				feedback. Worked within brand guidelines to create a consistent company image. The website
				is an inviting and professional design, which utlizes a one-page form factor. Above fold CTA
				button encourages visitors to schedule time with a marketing expert.
			</p>
			<div class="constrained-img">
				<div class="case-study__flex">
					<img
						class="case-study__img"
						src={murbanMarketing}
						alt="matt urban marketing project"
						loading="lazy"
					/>
				</div>
			</div>
		</div>
		<div class="case-study__row">
			<h3>Further Support</h3>
			<p>
				The project concluded with a short course in managing and editing their website. This
				allowed them to make basic edits without the need to contact and web designer and pay for
				their time.
			</p>
		</div>
	</section>

	<!-- tailored male -->
	<div class="bg-wrapper">
		<section>
			<h2 class="case-study__section-title">The Tailored Male of East Setauket</h2>
			<div class="case-study__row">
				<h3>Challenge</h3>
				<p>
					Creating a website for a local barbershop, which shows off their key selling points
					services. The age of their main audience was around 40-60, with a smaller group of 12-20
					year olds. COVID concerns were also an important consideration here. In the end, they
					needed the following:
				</p>
				<ul>
					<li>Simple navigation and pages with no fancy effects</li>
					<li>Important information to be easily-discoverable</li>
					<li>COVID safety information</li>
				</ul>
			</div>
			<div class="case-study__row">
				<h3>Solution</h3>
				<p>
					Since the barbershop's audience tended to be older, the website was given a simplified
					design, with bold colors and sharp contrasts. Contact info and directions were placed
					above-the-fold, making them easy to find without scrolling. COVID information was given
					its own page, along with a section placed directly below-the-fold.
				</p>
				<div class="constrained-img">
					<div class="case-study__flex">
						<img
							class="case-study__img"
							src={tailoredMale}
							alt="the tailored male of east setauket project"
							loading="lazy"
						/>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- pwec -->
	<section>
		<h2 class="case-study__section-title">Preach the Word Evangelical Church NA</h2>
		<div class="case-study__row">
			<h3>Challenge</h3>
			<p>
				This project was to create a website for an international church's Texas-based chapter. The
				website had to:
			</p>
			<ul>
				<li>Fit the style of their logo</li>
				<li>Include an event calendar and system to add new events</li>
				<li>Be easily updated by the church's administration</li>
			</ul>
		</div>
		<div class="case-study__row">
			<h3>Solution</h3>
			<p>
				The final product included the logo's red, green, and white color scheme. A user-friendly
				event system was put in place so staff could add new events with ease.
			</p>
			<div class="constrained-img">
				<div class="case-study__flex">
					<img
						class="case-study__img"
						src={pwec}
						alt="preach the word evangelical church project"
						loading="lazy"
					/>
				</div>
			</div>
		</div>
		<div class="case-study__row">
			<h3>Further Support</h3>
			<p>
				Staff were given a lesson in using WordPress and how to use the WYSIWYG editor Elementor to
				make minor updates to pages.
			</p>
		</div>
	</section>
</div>

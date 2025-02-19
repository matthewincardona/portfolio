<script>
	import meducationAlliance from '$lib/assets/web design/meducation alliance.webp';
	import murbanMarketing from '$lib/assets/web design/matt urban marketing.webp';
	import tailoredMale from '$lib/assets/web design/tailored male.webp';
	import pwec from '$lib/assets/web design/pwec.webp';
</script>

<svelte:head>
	<title>Projects | Mission Threads</title>
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
					<h4>Overview</h4>
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
					<h4>Keywords</h4>
					<p>Visual Design, User Experience, WordPress CMS</p>
				</div>
			</div>
		</div>
	</section>

	<!-- med -->
	<div class="bg-wrapper">
		<section>
			<h3 class="case-study__section-title">mEducation Alliance</h3>
			<div class="case-study__row">
				<h4>Challenge</h4>
				<p>
					Creating a more user-friendly website backend, which can be used by interns with little to
					no web design experience. Our pain points were:
				</p>
				<ul>
					<li>Very unfriendly and difficult to edit pages</li>
					<li>Users were unable to previews page updates before they went live</li>
					<li>No way to restore a page backup, making editing very destructive</li>
				</ul>
			</div>
			<div class="case-study__row">
				<h4>Solution</h4>
				<p>
					Rebuilt pages using a WYSIWYG builder, allowing for page backups, intuitive visual
					editing, and page previews. Rebuilt a nonprofit website with a user-friendly backend
					interface that fit their requirements. Continue to provide technical support and design
					prototypes for future pages and content.
				</p>
				<div class="constrained-img">
					<div class="case-study__flex">
						<img
							class="case-study__img"
							src={meducationAlliance}
							alt="mEducation alliance project"
							loading="lazy"
						/>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- urban -->
	<section>
		<h3 class="case-study__section-title">
			<a href="https://www.matturbanmarketing.com/" target="_blank" rel="noopener noreferrer"
				>Matt Urban Marketing</a
			>
		</h3>
		<div class="case-study__row">
			<h4>Challenge</h4>
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
			<h4>Solution</h4>
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
			<h4>Further Support</h4>
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
			<h3 class="case-study__section-title">
				<a
					href="https://thetailoredmaleofeastsetauket.com/"
					target="_blank"
					rel="noopener noreferrer">The Tailored Male of East Setauket</a
				>
			</h3>
			<div class="case-study__row">
				<h4>Challenge</h4>
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
				<h4>Solution</h4>
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
		<h3 class="case-study__section-title">
			<a href="https://pwecna.org/" target="_blank" rel="noopener noreferrer"
				>Preach the Word Evangelical Church NA</a
			>
		</h3>
		<div class="case-study__row">
			<h4>Challenge</h4>
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
			<h4>Solution</h4>
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
			<h4>Further Support</h4>
			<p>
				Staff were given a lesson in using WordPress and how to use the WYSIWYG editor Elementor to
				make minor updates to pages.
			</p>
		</div>
	</section>
</div>

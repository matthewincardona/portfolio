<!-- TO DO: -->
<!-- add prefers reduced motion check -->
<!-- make mobile friendly -->

<script>
	// assets
	import arrow from '$lib/assets/arrow.svg';
	import secondDesk from '$lib/assets/secondDesk.webp';
	import douxDolci2 from '$lib/assets/douxdolci2.webp';
	import missionThreads from '$lib/assets/missionThreads.webp';
	import ISTEPeerFeedbackTool from '$lib/assets/501 peer feedback tool cover.webp';

	// import greenovation from '$lib/assets/greenovation.webp';
	import { Application } from '@splinetool/runtime';
	import { onMount } from 'svelte';

	onMount(() => {
		// Spline
		// // make sure you have a canvas in the body
		const canvas = document.getElementById('canvas3d');
		// // start the application and load the scene
		const spline = new Application(canvas);
		spline.load('https://prod.spline.design/dquOI6xKoTCv6DlD/scene.splinecode').then(() => {
			// Hide overlay
			document.body.style.overflow = 'hidden';
			const overlay = document.getElementsByClassName('.loader-container')[0];
			document.body.style.overflow = 'auto'; // Restore scrolling
			document
				.getElementsByClassName('loader-container')[0]
				.classList.add('loader-container--hidden');
			// overlay.style.display = 'none';

			setTimeout(function () {
				spline.stop();
			}, 4200);
		});
	});
</script>

<svelte:head>
	<title>Matthew Incardona</title>
	<link
		rel="preload"
		href="https://prod.spline.design/KWvZ9DsHNqCoOsAC/scene.splinecode"
		as="script"
	/>
</svelte:head>

<!-- <div class="overlay" /> -->

<div class="loader-container">
	<div class="loader" />
</div>

<canvas id="canvas3d" />

<!-- svelte-ignore a11y-media-has-caption -->
<!-- <video src={heroVideo} autoplay id="heroVideo" /> -->

<section>
	<div class="hero" id="hero">
		<div class="hero__inner" id="hero__inner">
			<h1 class="hero__inner__title--des">Entreprenuer</h1>
			<h1 class="hero__inner__title--des">Designer</h1>
			<div class="hero__descr">
				<div>
					<p>
						<strong>Hi, I’m Matthew Incardona!</strong> With a background in research, design, and development,
						I bridge the gap between what users need and what businesses want to achieve.
					</p>
				</div>

				<div />
			</div>

			<div>
				<h1 class="hero__inner__title--dev">Developer</h1>
				<!-- <img class="hero__inner__text-mask" src={textMaskDev} alt="" /> -->
			</div>
		</div>
	</div>

	<!-- Projects area -->
	<div class="projects">
		<div class="project-container">
			<!-- Project One -->
			<div class="project-container__left-panel">
				<h2>Mission Threads</h2>
				<ul class="tag-container">
					<li class="project-tag"><span>UX Researcher</span></li>
					<li class="project-tag"><span>UI Designer</span></li>
				</ul>
				<p class="project__descr">
					Explore my work on Mission Threads, a redesign of a legacy knowledge management system
					that empowers contract proposal writers to do their best work in the least amount of time.
				</p>
				<a class="project__btn" href="/mission-threads">
					Open Project
					<img class="project__btn-icon" src={arrow} alt="" />
				</a>
			</div>
			<div class="project-container__right-panel">
				<img class="project__img" src={missionThreads} alt="Mission Threads project preview" />
			</div>

			<!-- Project Two -->
			<div class="project-container__left-panel">
				<h2>Second Desk</h2>
				<ul class="tag-container">
					<li class="project-tag"><span>UX Engineer</span></li>
					<li class="project-tag"><span>UX Researcher</span></li>
				</ul>
				<p class="project__descr">
					Dive into my work on Second Desk, a Desktop-As-A-Service product that enables non-Windows
					users to stream Windows programs directly through their browser.
				</p>
				<a class="project__btn" href="/second-desk">
					Open Project
					<img class="project__btn-icon" src={arrow} alt="" />
				</a>
			</div>
			<div class="project-container__right-panel">
				<img class="project__img" src={secondDesk} alt="Second Desk project preview" />
			</div>

			<!-- Project Three -->
			<div class="project-container__left-panel">
				<h2>DouxDolci Web Design</h2>
				<ul class="tag-container">
					<li class="project-tag"><span>Founder</span></li>
					<li class="project-tag"><span>Web Designer</span></li>
				</ul>
				<p class="project__descr">
					Explore projects from my freelance web design business, DouxDolci Web Design, where I work
					one-on-one with a variety of clients to improve their online presence.
				</p>
				<a class="project__btn" href="/web-design">
					Open Project
					<img class="project__btn-icon" src={arrow} alt="" />
				</a>
			</div>
			<div class="project-container__right-panel">
				<img class="project__img" src={douxDolci2} alt="Web design project preview" />
			</div>

			<!-- Project Four -->
			<div class="project-container__left-panel">
				<h2>iSchool Peer Feedback Tool</h2>
				<ul class="tag-container">
					<li class="project-tag"><span>Project Manager</span></li>
				</ul>
				<p class="project__descr">
					See the results of my senior dev project at RIT, creating an tool that automates and
					streamlines the peer review process for academic courses and faculty evaluations at the
					iSchool.
				</p>
				<a class="project__btn" href="/ischool-peer-feedback-tool">
					Open Project
					<img class="project__btn-icon" src={arrow} alt="" />
				</a>
			</div>
			<div class="project-container__right-panel">
				<img
					class="project__img"
					src={ISTEPeerFeedbackTool}
					alt="iSchool peer feedback tool project preview"
				/>
			</div>

			<!-- Project Three -->
			<!-- <div class="project-container__left-panel">
				<h2>Rochester Greenovation</h2>
				<ul class="tag-container">
					<li class="project-tag"><span>UX/UI Designer</span></li>
				</ul>
				<p class="project__descr">
					Take a look at my time with Rochester Greenovation, a local thrift store with a goal to
					let nothing go to waste. This project was part of a two-week team-based UX competition
					hosted by the Rochester Institute of Technology.
				</p>
				<a class="project__btn" href="/rochester-greenovation">
					Open Project
					<img class="project__btn-icon" src={arrow} alt="" />
				</a>
			</div>
			<div class="project-container__right-panel">
				<img class="project__img" src={greenovation} alt="Rochester Greenovation project preview" />
			</div> -->
		</div>

		<!-- Extra Projects -->
		<div class="about-me__card-grid-wrapper">
			<h2 style="text-align: left;">More Projects</h2>
			<p style="text-align: left; margin-bottom: 40px">
				A collection of interesting projects I've made over the years
			</p>
			<div class="about-me__card-grid">
				<div class="about-me__card">
					<h3>Time-Based Task Manager</h3>
					<p>
						A volatile task manager that encourages you to complete tasks on time.<br /><br
						/><strong>Flutter</strong>
					</p>
				</div>
				<div class="about-me__card">
					<h3>Umami AI</h3>
					<p>
						A platform for hosting helpful gen AI personas.<br /><br /><strong
							>Svelte, ChatGPT API, Firebase</strong
						>
					</p>
				</div>
				<div class="about-me__card">
					<h3>SBC4E Hub</h3>
					<p>
						An online hub for Social Behavior Change for Education (SBC4E) content.<br /><br
						/><strong>Figma</strong>
					</p>
				</div>
				<div class="about-me__card">
					<h3>Jukebox</h3>
					<p>
						An app that empowers people to listen to music socially.<br /><br /><strong
							>Swift, Spotify API</strong
						>
					</p>
				</div>
				<div class="about-me__card">
					<h3>"Booty Call"</h3>
					<p>
						A secure, privacy-focused video-calling app for couples with an interactive artboard.<br
						/><br /><strong>Cloudflare, WebRTC, HTML Canvas</strong>
					</p>
				</div>
				<div class="about-me__card">
					<h3>DoxuDolci Hosting</h3>
					<p>
						The main server for DouxDolci web design, hosting client's WordPress sites.<br /><br
						/><strong>Oracle Cloud, Webmin</strong>
					</p>
				</div>
				<div class="about-me__card">
					<h3>Remote Desktop Client</h3>
					<p>
						An Apache Guacamole-style remote desktop app.<br /><br /><strong
							>Electron, React, WebRTC, AWS</strong
						>
					</p>
				</div>
				<div class="about-me__card">
					<h3>Job App Tracker</h3>
					<p>
						A website that encourages people to put out more job applications.<br /><br /><strong
							>Cloudflare Workers & Cloudflare D1</strong
						>
					</p>
				</div>
				<div class="about-me__card">
					<h3>AVS Website</h3>
					<p>
						A website showcasing an Autonomous Vehicle Security project.<br /><br /><strong
							>Jekyll, SASS, Tailwind</strong
						>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<style>
	.loader-container {
		width: 100%;
		height: 120dvh;
		z-index: 100000000;
		display: flex;
		justify-content: center;
		align-items: center;
		background-color: #000000;
		position: absolute;
	}

	:global(.loader-container--hidden) {
		animation: fade-out 0.3s 0s both;
	}

	@keyframes fade-out {
		0% {
			opacity: 1;
		}
		99% {
			opacity: 0;
		}
		100% {
			visibility: hidden;
		}
	}

	.loader {
		--s: 25px;

		--_d: calc(0.353 * var(--s));
		width: calc(var(--s) + var(--_d));
		aspect-ratio: 1;
		display: flex;
	}
	.loader:before,
	.loader:after {
		content: '';
		flex: 1;
		clip-path: polygon(
			var(--_d) 0,
			100% 0,
			100% calc(100% - var(--_d)),
			calc(100% - var(--_d)) 100%,
			0 100%,
			0 var(--_d)
		);
		background: conic-gradient(
			from -90deg at calc(100% - var(--_d)) var(--_d),
			#fff 135deg,
			#666 0 270deg,
			#aaa 0
		);
		animation: l5 1.2s infinite;
	}
	.loader:before {
		margin-right: calc(var(--_d) / -2 - 1px);
	}
	.loader:after {
		margin-left: calc(var(--_d) / -2 - 1px);
		animation-delay: 0.6s;
	}
	@keyframes l5 {
		0% {
			transform: translateY(0);
		}
		16.67% {
			transform: translateY(-10px);
		}
		33.33% {
			transform: translateY(10px);
		}
		50%,
		100% {
			transform: translateY(0);
		}
	}

	/* .overlay {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(27, 11, 11, 0);
		z-index: 10;
	} */

	#canvas3d {
		position: absolute;
		width: 120vw !important;
		height: 120dvh !important;
	}

	.hero {
		/* user-select: none; */
		min-height: 120dvh;
		padding: 0% 2%;
		position: relative;
		overflow: hidden;
		padding: 6%;
		margin-top: -2%;
		/* animation: fade-in 0.3s 0.5s ease-in-out both; */
		box-shadow: inset 0px 0px 30px -10px rgba(31, 25, 25, 0.249);
	}

	@keyframes fade-in {
		from {
			opacity: 0;
		}
		to {
			opacity: 1;
		}
	}

	@media (max-width: 1200px) {
		.hero {
			padding-top: 10%;
		}
	}

	@media (max-width: 768px) {
		.hero {
			padding-top: 15%;
			min-height: 100dvh;
		}
	}

	@media (max-width: 500px) {
		.hero {
			padding-top: 20%;
		}
	}

	.hero__inner {
		display: flex;
		flex-direction: column;
		row-gap: 2em;
		height: 100%;
		width: 100%;
		position: absolute;
		transition-property: transform, filter;
		transition-duration: 0.8s, 0.4s; /* durations for width, height, and background-color transitions */
		transition-timing-function: cubic-bezier(0.77, 0.15, 0.07, 0.85), linear; /* timing functions for each transition */
		overflow: hidden;
	}

	h1 {
		transition: letter-spacing 0.8s cubic-bezier(0.77, 0.15, 0.07, 0.85);
		white-space: nowrap;
	}

	/* .hero__descr {
		max-width: 1200px;
		margin: 20px 0px 0px 20px;
		display: grid;
		grid-template-columns: 1.2fr 1.2fr 0.2fr 1fr;
		grid-template-rows: 1fr;
		gap: 0px 2em;
		grid-template-areas: '. . . .';
	} */

	.hero__descr {
		max-width: 1200px;
		margin: 20px 0px 0px 20px;
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		gap: 2em 2em;
	}

	.hero__descr > div {
		max-width: 600px;
	}

	.hero__inner__title--des {
		background: url('$lib/assets/text-mask-des.webp');
		background-position: 0% 25%;
		background-size: cover;
		background-clip: text;
		-webkit-background-clip: text;
		color: transparent;
	}

	.hero__inner__title--dev {
		/* mix-blend-mode: lighten; */
		/* mask-image: url('$lib/assets/text-mask-dev.png'); */
		background: url('$lib/assets/text-mask-dev.webp');
		background-position: 0% 50%;
		background-size: cover;
		background-clip: text;
		-webkit-background-clip: text;
		color: transparent;
	}

	/* .hero__people-ive-worked-with {
		display: grid;
		grid-template-columns: 1fr 1fr 1fr;
		flex-wrap: wrap;
		gap: 1em;
		margin-bottom: 10vh;
	} */

	/* ================
ABOUT
=================*/

	.about-me__card-grid-wrapper {
		display: flex;
		flex-direction: column;
		margin: auto;
		max-width: 1600px;
		padding: 0px 5% 20dvh 5%;
	}

	.about-me__card-grid {
		display: flex;
		flex-direction: row;
		margin: auto;
		justify-content: start;
		align-items: center;
		gap: 3vw;
		flex-wrap: wrap;
	}

	.about-me__card {
		background-color: rgba(114, 114, 114, 0.08);
		border-radius: 8px;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: start;
		text-align: left;
		padding: 40px;
		max-width: 500px;
		max-height: 300px;
		box-shadow: inset 0px 0px 30px -10px rgba(255, 255, 255, 0.249),
			inset 0px -10px 20px 0px rgba(50, 1, 130, 0.249);
	}

	.about-me__card > p:nth-of-type(2) {
		margin-top: 20px;
	}

	/* .about-me__card--mini {
		width: 240px;
		height: 100px;
	} */

	/* ================
PROJECTS
=================*/

	/* Create a two column layout */
	.project-container {
		max-width: 1600px;
		margin: auto;
		display: grid;
		justify-content: center;
		align-items: center;
		grid-template-columns: repeat(2, 1fr);
		grid-template-rows: auto;
		padding: 150px 0 150px 5%;
		column-gap: 6em;
		row-gap: 6em;
	}

	/* .project__descr {
		margin-top: 2rem;
	} */

	.project__img {
		width: 100%;
		height: auto;
		max-width: 800px;
		/* cursor: pointer; */
		transition: 0.15s filter ease-in-out;
		filter: saturate(0.8) brightness(0.95);
	}

	/* Add an alt color to container background */
	/* .bg-wrapper {
		background-color: rgba(114, 114, 114, 0.08);
	} */

	.project__btn {
		display: inline-flex;
		justify-content: center;
		align-items: center;
		background-color: #00000000;
		border: solid 2px #3a89b6;
		border-radius: 50px;
		padding: 10px 25px;
		transition: background-color ease-in 0.15s;
		font-size: clamp(1rem, 2.5vw, 1rem);
		line-height: 140%;
		max-width: 300px;
	}

	.project__btn:hover {
		background-color: #0000001d;
		cursor: pointer;
	}

	.project__btn-icon {
		margin-left: 20px;
	}

	.tag-container {
		display: flex;
		flex-direction: row;
		padding: 0;
		margin-top: 10px;
		gap: 2em;
	}

	/* Styles tags for projects and places bullet points inside of the background */
	.project-tag {
		list-style: none;
		padding: 10px 24px 10px 20px;
		background-color: rgba(114, 114, 114, 0.1);
		margin-bottom: 20px;
		user-select: none;
		font-size: clamp(1rem, 2.5vw, 1rem);
		letter-spacing: 4%;
		line-height: 140%;
		font-weight: bold;
	}

	/* Break this into two rows on smaller devices */
	@media screen and (max-width: 1000px) {
		.project-container {
			grid-template-columns: 1fr;
			padding-top: 100px;
		}
		/* .case-study__title {
			margin-top: -80px;
		}
		.case-study__container {
			margin-top: 40px;
			grid-template-columns: 1fr;
			row-gap: 3em;
		}
		.case-study__img {
			width: 90vw;
			max-width: 90vw;
		} */
	}
</style>

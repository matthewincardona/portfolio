<script>
	import heroVideo from '$lib/assets/hero video 4.webm';
	import secondDesk from '$lib/assets/secondDesk.webp';
	import douxDolci2 from '$lib/assets/douxdolci2.webp';
	import missionThreads from '$lib/assets/missionThreads.webp';
	import ISTEPeerFeedbackTool from '$lib/assets/501 peer feedback tool cover.webp';
	import umamiVideo from '$lib/assets/umami walkthrough.webm';
	import ArrowDown from 'carbon-icons-svelte/lib/ArrowDown.svelte';
	import ArrowRight from 'carbon-icons-svelte/lib/ArrowRight.svelte';
	import LogoGithub from 'carbon-icons-svelte/lib/LogoGithub.svelte';
	import LogoFigma from 'carbon-icons-svelte/lib/LogoFigma.svelte';
	import ApplicationWeb from 'carbon-icons-svelte/lib/ApplicationWeb.svelte';
	import DocumentVideo from 'carbon-icons-svelte/lib/DocumentVideo.svelte';

	// import { Application } from '@splinetool/runtime';
	// import { onMount } from 'svelte';

	// Load spline
	// onMount(() => {
	// 	// Spline
	// 	const canvas = document.getElementById('canvas3d');
	// 	// // start the application and load the scene
	// 	const spline = new Application(canvas);
	// 	spline.load('https://prod.spline.design/dquOI6xKoTCv6DlD/scene.splinecode').then(() => {
	// 		document.getElementsByClassName('hero__inner__title--des')[0].classList.add('fade-up');
	// 		document.getElementsByClassName('hero__descr')[0].classList.add('fade-down');

	// 		document
	// 			.getElementsByClassName('loader-container')[0]
	// 			.classList.add('loader-container--hidden');

	// 		setTimeout(function () {
	// 			spline.stop();
	// 		}, 4200);
	// 	});
	// });
</script>

<svelte:head>
	<title>Matthew Incardona</title>
	<link
		rel="preload"
		href="https://prod.spline.design/KWvZ9DsHNqCoOsAC/scene.splinecode"
		as="script"
	/>
	<link
		rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
		integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
		crossorigin="anonymous"
		referrerpolicy="no-referrer"
	/>
</svelte:head>

<section>
	<div class="hero-container">
		<!-- svelte-ignore a11y-media-has-caption -->
		<video src={heroVideo} id="heroVideo" autoplay="true" muted="true" />

		<!-- <canvas id="canvas3d" /> -->

		<!-- <div class="loader-container">
			<div class="loader2" />
		</div> -->

		<div class="hero" id="hero">
			<div class="hero__inner" id="hero__inner">
				<h1 class="hero__inner__title--des fade-down">
					<span>Entreprenuer</span>
					<span>Designer</span>
					<span>Developer</span>
				</h1>
			</div>
		</div>
		<div class="hero__descr fade-up">
			<p>
				<strong>Hi, I’m Matthew Incardona!</strong> With a background in research, design, and development,
				I bridge the gap between what users need and what businesses want to achieve.
			</p>
			<p>See My Work</p>
			<div class="hero__descr-icon">
				<ArrowDown size="20px" style="fill: var(--body-color)" />
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
					<ArrowRight size="20px" style="fill: var(--body-color)" />
				</a>
			</div>
			<div class="project-container__right-panel">
				<img class="project__img" src={missionThreads} alt="Mission Threads project preview" />
			</div>

			<!-- Project Two -->
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
					<ArrowRight size="20px" style="fill: var(--body-color)" />
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
					<ArrowRight size="20px" style="fill: var(--body-color)" />
				</a>
			</div>
			<div class="project-container__right-panel">
				<img class="project__img" src={douxDolci2} alt="Web design project preview" />
			</div>

			<!-- Project Four -->
			<div class="project-container__left-panel">
				<h2>Second Desk</h2>
				<ul class="tag-container">
					<li class="project-tag"><span>Co-Founder</span></li>
					<li class="project-tag"><span>UX Engineer</span></li>
				</ul>
				<p class="project__descr">
					Dive into my work on Second Desk, a Desktop-As-A-Service product that enables non-Windows
					users to stream Windows programs directly through their browser.
				</p>
				<a class="project__btn" href="/second-desk">
					Open Project
					<ArrowRight size="20px" style="fill: var(--body-color)" />
				</a>
			</div>
			<div class="project-container__right-panel">
				<img class="project__img" src={secondDesk} alt="Second Desk project preview" />
			</div>

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
					<img  src={arrow} alt="" />
				</a>
			</div>
			<div class="project-container__right-panel">
				<img class="project__img" src={greenovation} alt="Rochester Greenovation project preview" />
			</div> -->
		</div>

		<!-- Extra Projects -->
		<!-- SVG for icon background color -->
		<svg width="0" height="0">
			<defs>
				<linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
					<stop offset="0%" style="stop-color: #b444d0; stop-opacity: 1" />
					<stop offset="100%" style="stop-color: #58334a; stop-opacity: 1" />
				</linearGradient>
			</defs>
		</svg>

		<div class="extra-projects__card-grid-wrapper">
			<h2 style="text-align: left;">More Projects</h2>
			<p>A collection of interesting projects that I've made over the years.</p>
			<p style="text-align: left; margin-bottom: 40px">
				<b>* Click the project icons</b> to view repos, prototypes, and more!
			</p>
			<div class="extra-projects__card-grid">
				<div class="extra-projects__card">
					<div>
						<h3>Umami AI</h3>
						<p>
							A platform for creating and hosting helpful gen AI personas made to do any task.
							Future plans included file uploads, remixing/forking bots, and embeddable bots.
						</p>
						<p><strong>Svelte, ChatGPT API, Firebase</strong></p>
					</div>
					<div class="extra-projects__card-toolbar">
						<a href="https://github.com/matthewincardona/umami-ai-public" target="_blank">
							<LogoGithub size="32px" style="fill: url(#gradient)" />
						</a>
						<a
							href="https://www.figma.com/proto/879Vqt1b66iVcWuSQucKxv/Umami-AI-UI?page-id=180%3A188&node-id=208-296&viewport=-1008%2C554%2C0.21&t=NvgxM7BGT0iPkcgZ-1&scaling=scale-down&content-scaling=fixed&starting-point-node-id=208%3A296"
							target="_blank"
						>
							<LogoFigma size="32px" style="fill: url(#gradient);" />
						</a>
						<a href={umamiVideo} target="_blank">
							<DocumentVideo size="32px" style="fill: url(#gradient);" />
						</a>
					</div>
				</div>
				<div class="extra-projects__card">
					<div>
						<h3>Close Up</h3>
						<p>
							A secure, privacy-focused video-calling app for couples with an interactive artboard.
						</p>
						<p><strong>WebRTC, HTML Canvas</strong></p>
					</div>
					<div class="extra-projects__card-toolbar">
						<a href="https://github.com/matthewincardona/close-up" target="_blank">
							<LogoGithub size="32px" style="fill: url(#gradient);" />
						</a>
						<a href="https://close-up.pages.dev" target="_blank">
							<ApplicationWeb size="32px" style="fill: url(#gradient);" />
						</a>
					</div>
				</div>
				<div class="extra-projects__card">
					<div>
						<h3>SBC4E Hub</h3>
						<p>
							An online hub for Social Behavior Change for Education (SBC4E) content. Created and
							pitched in part with the mEducation Alliance.
						</p>
						<p><strong>Prototype Phase</strong></p>
					</div>
					<div class="extra-projects__card-toolbar">
						<a
							href="https://www.figma.com/proto/8xADyGAXFSU4Cyy4HEvkaK/SBC4E-Hub?page-id=404%3A1279&node-id=497-4513&viewport=-1313%2C360%2C0.09&t=gQePnSvS7rbt4Zn1-1&scaling=min-zoom&content-scaling=fixed&starting-point-node-id=497%3A4513"
							target="_blank"
						>
							<LogoFigma size="32px" style="fill: url(#gradient);" />
						</a>
					</div>
				</div>
				<div class="extra-projects__card">
					<div>
						<h3>Jukebox</h3>
						<p>
							Jukebox encourages anyone to be a DJ, to connect with their friends over music and be
							part of the jam. It's purposefully designed and built so only one person needs to have
							the app downloaded.
						</p>
						<p><strong>Swift, Spotify API</strong></p>
					</div>
					<div class="extra-projects__card-toolbar">
						<a href="https://github.com/matthewincardona/jukebox-ios" target="_blank">
							<LogoGithub size="32px" style="fill: url(#gradient);" />
						</a>
					</div>
				</div>
				<div class="extra-projects__card">
					<div>
						<h3>Outta Time</h3>
						<p>
							A volatile task manager with an ever-present countdown that encourages you to complete
							your tasks on time.
						</p>
						<p><strong>Kotlin</strong></p>
					</div>
					<div class="extra-projects__card-toolbar">
						<a href="https://github.com/matthewincardona/outta-time" target="_blank">
							<LogoGithub size="32px" style="fill: url(#gradient);" />
						</a>
					</div>
				</div>
				<div class="extra-projects__card">
					<div>
						<h3>Secret Santa Planner</h3>
						<p>
							A simple website that creates secret santa groups, allowing assignments to be viewed
							anonymously and without even the event creator knowing.
						</p>
						<p><strong>Cloudflare Workers & Cloudflare D1</strong></p>
					</div>
					<div class="extra-projects__card-toolbar">
						<a href="https://github.com/matthewincardona/secret-santa" target="_blank">
							<LogoGithub size="32px" style="fill: url(#gradient);" />
						</a>
						<a href="https://secret-santa.matthewincardona.com/" target="_blank">
							<ApplicationWeb size="32px" style="fill: url(#gradient);" />
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<style>
	/* #canvas3d {
		position: absolute;
		width: 100vw !important;
		height: calc(100dvh + 32px) !important;
	}  */

	.hero-container {
		position: relative;
		min-height: 100dvh;
		box-shadow: inset 0px 0px 30px -10px rgba(31, 25, 25, 0.249);
		overflow: hidden;
	}

	.hero {
		display: flex;
		justify-content: center;
		align-items: center;
		height: 80dvh;
		width: 100%;
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

	#heroVideo {
		position: absolute;
		bottom: 10dvh;
		left: 10vw;
		width: 100vw;
		height: 80dvh;
	}

	.hero__inner {
		/* transition-property: transform, filter; */
		/* transition-duration: 0.8s, 0.4s; durations for width, height, and background-color transitions */
		/* transition-timing-function: cubic-bezier(0.77, 0.15, 0.07, 0.85), linear; timing functions for each transition */
		margin: auto;
		width: fit-content;
	}

	h1 {
		transition: letter-spacing 0.8s cubic-bezier(0.77, 0.15, 0.07, 0.85);
		white-space: nowrap;
	}

	.hero__descr {
		width: 100%;
		text-align: center;
		display: flex;
		flex-direction: column;
		align-items: center;
		flex-wrap: wrap;
		padding: 16px;
		padding-bottom: 24px;
	}

	.hero__descr p {
		max-width: 65ch;
		margin-bottom: 20px;
	}

	.hero__descr-icon {
		border-radius: 1000px;
		border: solid 2px #3a89b6;
		padding: 5px;
		margin-top: -10px;
	}

	.hero__inner__title--des {
		background: url('$lib/assets/text-mask-des.webp');
		background-position: 0% 0%;
		background-size: 200%;
		background-clip: text;
		-webkit-background-clip: text;
		color: transparent;
	}

	.hero__inner__title--des span {
		display: block;
	}

	/* .hero__inner__title--dev {
		mix-blend-mode: lighten;
		mask-image: url('$lib/assets/text-mask-dev.png');
		background: url('$lib/assets/text-mask-dev.webp');
		background-position: 0% 50%;
		background-size: cover;
		background-clip: text;
		-webkit-background-clip: text;
		color: transparent;
	} */

	/* ================
EXTRA PROJECTS
=================*/

	.extra-projects__card-grid-wrapper {
		display: flex;
		flex-direction: column;
		margin: auto;
		max-width: 1600px;
		padding: 0px 5% 20dvh 5%;
		margin-top: 10dvh;
	}

	.extra-projects__card-grid {
		display: flex;
		flex-direction: row;
		margin: auto;
		justify-content: start;
		align-items: center;
		gap: 3vw;
		flex-wrap: wrap;
	}

	.extra-projects__card {
		background-color: rgba(114, 114, 114, 0.08);
		border-radius: 8px;
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		align-items: start;
		text-align: left;
		padding: 32px;
		max-width: 600px;
		width: 100%;
		height: 320px;
		box-shadow: inset 0px 0px 30px -10px rgba(255, 255, 255, 0.249),
			inset 0px -10px 20px 0px rgba(50, 1, 130, 0.249);
	}

	.extra-projects__card-toolbar {
		display: flex;
		gap: 1.4em;
		transition: transform cubic-bezier(0.39, 0.575, 0.565, 1) 0.15s;
		transform-origin: 0%;
		width: 100%;
	}

	.extra-projects__card-toolbar:hover {
		transform: scale(1.1);
	}

	.extra-projects__card-toolbar * {
		transition: transform cubic-bezier(0.39, 0.575, 0.565, 1) 0.15s;
	}

	.extra-projects__card-toolbar *:hover {
		transform: translateY(-4px);
	}

	/* ================
PROJECTS
=================*/

	/* Create a two column layout */
	.project-container {
		max-width: 1600px;
		margin: auto;
		display: grid;
		justify-content: space-between;
		align-items: center;
		grid-template-columns: 0.8fr 1fr;
		grid-template-rows: auto;
		padding: 10dvh 5% 10dvh 5%;
		column-gap: 4em;
		row-gap: 9em;
	}

	.project__img {
		width: 70%;
		height: auto;
		max-width: 600px;
	}

	.project__btn {
		display: inline-flex;
		justify-content: center;
		align-items: center;
		border-radius: 50px;
		padding: 10px 25px;
		transition: transform cubic-bezier(0.39, 0.575, 0.565, 1) 0.15s;
		gap: 0.6em;
		position: relative;
		z-index: 1;
	}

	.project__btn::before {
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		border-radius: 50px;
		padding: 2px; /* Adjust the thickness of the border */
		background: linear-gradient(90deg, #b444d0 0%, #58334a 100%);
		mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
		-webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
		-webkit-mask-composite: xor;
		mask-composite: exclude;
		z-index: -1;
		animation: border-animation 3s linear infinite;
	}

	@keyframes border-animation {
		0% {
			background-position: 0% 50%;
		}
		50% {
			background-position: 100% 50%;
		}
		100% {
			background-position: 0% 50%;
		}
	}

	.project__btn:hover {
		transform: translateX(8px);
		cursor: pointer;
	}

	.tag-container {
		display: flex;
		flex-direction: row;
		padding: 0;
		margin-top: 10px;
		margin-bottom: 10px;
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
	}
</style>

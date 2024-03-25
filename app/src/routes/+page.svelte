<!-- TO DO: -->
<!-- add prefers reduced motion check -->
<!-- convert font sizes to rem -->
<!-- make mobile friendly -->
<!-- make menu just a hamburg -->
<!-- make less text on the front -->

<script>
	// assets
	import Navbar from '../lib/Navbar.svelte';
	import Footer from '../lib/Footer.svelte';
	import arrow from '$lib/assets/arrow.svg';
	import secondDesk from '$lib/assets/secondDesk.webp';
	import douxDolci2 from '$lib/assets/douxdolci2.webp';
	import greenovation from '$lib/assets/greenovation.webp';
	import midterm from '$lib/assets/extra projects/midterm.jpg';

	import { Application } from '@splinetool/runtime';
	import { onMount } from 'svelte';
	onMount(() => {
		// Spline
		// make sure you have a canvas in the body
		const canvas = document.getElementById('canvas3d');
		// start the application and load the scene
		const spline = new Application(canvas);
		spline.load('https://prod.spline.design/MoATaLmqKlEtJnxV/scene.splinecode');

		// on hover, make the text small and blurred
	});
</script>

<svelte:head>
	<title>Matthew Incardona</title>
</svelte:head>

<Navbar />

<canvas id="canvas3d" />

<section>
	<div class="hero" id="hero">
		<div class="hero__inner" id="hero__inner">
			<h1 class="hero__inner__title--des">Entreprenuer</h1>
			<h1 class="hero__inner__title--des">Designer</h1>
			<div class="hero__descr">
				<div>
					<p>
						<strong>
							A Frontend Developer, UX/UI Designer, and Entrepreneur at the Rochester Institute of
							Technology.
						</strong>
					</p>
				</div>
				<div>
					<p>
						"I bring a unique blend of technical expertise and human-centric design thinking to help
						companies forge meaningful connections with their audience, ensuring a seamless and
						delightful user experience from conceptualization to the polished product."
					</p>
				</div>
				<div />
				<div>
					<p>Years of experience in:</p>
					<ul>
						<li>Cloud Computing</li>
						<li>JavaScript</li>
						<li>HTML</li>
						<li>CSS</li>
						<li>React, Svelte, Angular</li>
						<li>Figma</li>
						<li>Photoshop, Illustrator</li>
					</ul>
				</div>
			</div>

			<div>
				<h1 class="hero__inner__title--dev">Developer</h1>
				<!-- <img class="hero__inner__text-mask" src={textMaskDev} alt="" /> -->
			</div>
		</div>
	</div>

	<!-- Projects area -->
	<div class="projects">
		<!-- Project One -->
		<div class="project-container">
			<div class="project-container__left-panel">
				<h2>Second Desk</h2>
				<ul class="tag-container">
					<li class="project-tag"><span>Founder</span></li>
					<li class="project-tag"><span>UX Engineer</span></li>
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

			<!-- Project Two -->
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

			<!-- Project Three -->
			<div class="project-container__left-panel">
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
			</div>
		</div>

		<!-- Extra Projects -->
		<div class="case-study">
			<div class="bg-wrapper">
				<section>
					<!-- <h3 class="case-study__section-title">Extra Projects</h3>
						<p>See some of the websites that didn't receive their own page, but still deserve a place.
						<br /><br /><br /><br />
						</p> -->
					<div class="case-study__row">
						<h4>Class Projects</h4>
						<p>
							ISTE240 Individual Final Project: This was a semester-long website build that included
							both design and development work. The site is based off of a popular boatshow in
							Newport, Rhode Island and is made modular using PHP and a MySQL database to store user
							comments. <a href="https://people.rit.edu/mpi7253/ISTE240/Midterm/"
								><b><u>Try it out here!</u></b></a
							>
						</p>
						<div class="case-study__flex">
							<a href="https://people.rit.edu/mpi7253/ISTE240/Midterm/">
								<img class="case-study__img" src={midterm} alt="" loading="lazy" />
							</a>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
</section>

<Footer />

<style>
	#canvas3d {
		position: absolute;
		width: 100vw !important;
		max-height: 100vh !important;
	}

	.hero {
		/* user-select: none; */
		min-height: 100vh;
		padding: 0% 2%;
		position: relative;
		overflow: hidden;
		padding: 6%;
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

	.hero h1 {
		user-select: none;
	}

	.hero__descr {
		max-width: 1400px;
		margin: 20px 0px 0px 20px;
		display: grid;
		grid-template-columns: 1.2fr 1.2fr 0.2fr 1fr;
		grid-template-rows: 1fr;
		gap: 0px 2em;
		grid-template-areas: '. . . .';
	}

	.hero__inner__title--des {
		background: url('$lib/assets/text-mask-des.png');
		background-position: 0% 25%;
		background-size: cover;
		background-clip: text;
		-webkit-background-clip: text;
		color: transparent;
	}

	.hero__inner__title--dev {
		/* mix-blend-mode: lighten; */
		/* mask-image: url('$lib/assets/text-mask-dev.png'); */
		background: url('$lib/assets/text-mask-dev.png');
		background-position: 0% 50%;
		background-size: cover;
		background-clip: text;
		-webkit-background-clip: text;
		color: transparent;
	}

	/* ================
PROJECTS
=================*/

	.projects {
		/* background-color: rgba(211, 211, 211, 0.04); */
	}

	/* Create a two column layout */
	.project-container {
		max-width: 1600px;
		margin: auto;
		display: grid;
		justify-content: center;
		align-items: center;
		grid-template-columns: repeat(2, 1fr);
		grid-template-rows: auto;
		padding: 150px 5% 150px 5%;
		column-gap: 6em;
		row-gap: 10em;
	}

	.project__descr {
		margin-top: 2rem;
	}

	.project__img {
		width: 100%;
		height: auto;
		max-width: 800px;
		/* cursor: pointer; */
		transition: 0.15s filter ease-in-out;
		filter: saturate(0.8) brightness(0.95);
	}

	/* Add an alt color to container background */
	.bg-wrapper {
		background-color: rgba(114, 114, 114, 0.08);
	}

	.project__btn {
		display: inline-flex;
		justify-content: center;
		align-items: center;
		background-color: #00000000;
		border: solid 2px #3a89b6;
		border-radius: 50px;
		padding: 10px 25px;
		margin-top: 30px;
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
		.project__img {
			margin-top: -100px;
		}
		.case-study__title {
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
		}
	}
</style>

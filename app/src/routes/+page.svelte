<!-- TO DO: -->
<!-- add prefers reduced motion check -->
<!-- convert font sizes to rem -->
<!-- make mobile friendly -->
<!-- make menu just a hamburg -->
<!-- make less text on the front -->

<script>
	// assets
	import Navbar from '../lib/Navbar.svelte';

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
						delightful user experience from conceptualization to the polished product, thereby
						contributing to the success and growth of your organization."
					</p>
				</div>
				<div />
				<div>
					<p>Freelance web designer, years of experience in</p>
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
</section>

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
		margin: 20px 0px -20px 20px;
		display: grid;
		grid-template-columns: 1fr 1.3fr 1fr;
		grid-template-rows: 1fr;
		gap: 0px 2em;
		grid-template-areas: '. . . .';
	}

	.hero__descr * {
		font-size: 14px;
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
</style>

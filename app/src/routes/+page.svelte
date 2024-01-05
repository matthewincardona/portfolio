<script>
	// assets
	import bg from '$lib/assets/bg.png';
	import textMaskDev from '$lib/assets/text-mask-dev.png';
</script>

<svelte:head>
	<title>Matthew Incardona</title>
</svelte:head>

<section>
	<div class="hero">
		<h1 class="hero__inner__title--des">Entreprenuer</h1>
		<h1 class="hero__inner__title--des">Designer</h1>
		<div class="hero__inner">
			<div>
				<strong
					><p>
						A Frontend Developer, UX/UI Designer, and Entrepreneur at the Rochester Institute of
						Technology.
					</p></strong
				>
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
				<p>Being a bitch, 23 years of experience</p>
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

		<div class="hero__inner__text-mask-container">
			<h1 class="hero__inner__title--dev">Developer</h1>
			<!-- <img class="hero__inner__text-mask" src={textMaskDev} alt="" /> -->
		</div>
	</div>
</section>

<style>
	.hero {
		min-height: 100vh;
		padding: 1% 3%;
		position: relative; /* Add this line to make the container a positioning context */
	}

	.hero__inner {
		margin-top: 20px;
		margin-left: 20px;
		display: grid;
		grid-template-columns: 1fr 1.3fr 1fr 1fr;
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

	.hero__inner__text-mask-container {
		position: relative;
	}

	.hero__inner__text-mask {
		opacity: 0.8;
		mix-blend-mode: hard-light;
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		border: solid 10px black;
	}
</style>

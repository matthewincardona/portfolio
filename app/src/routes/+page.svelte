<script>
	// assets
	import bg from '$lib/assets/bg.png';
</script>

<svelte:head>
	<title>Matthew Incardona</title>
</svelte:head>

<section>
	<div class="hero">
		<h1>Entreprenuer</h1>
		<h1>Designer</h1>
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

		<div>
			<img class="hero__text-mask" src={bg} alt="" />
			<h1>Developer</h1>
		</div>
	</div>
</section>

<style>
	.hero {
		min-height: 100dvh;
		padding: 1% 3%;
	}

	.hero__inner {
		display: grid;
		grid-template-columns: 1fr 1.5fr 1fr;
		grid-template-rows: 1fr;
		gap: 0px 0px;
		grid-template-areas: '. . . .';
	}

	.hero__text-mask {
		opacity: 0.8;
		mix-blend-mode: lighten;
		position: absolute;
		inset: 0 0;
	}
</style>

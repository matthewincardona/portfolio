<script>
	// assets
	import Hero from '$lib/Hero.svelte';
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
					>A Frontend Developer, UX/UI Designer, and Entrepreneur at the Rochester Institute of
					Technology.</strong
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
			<div><p>Being a bitch, 23 years of experience</p></div>
		</div>
		<h1>Developer</h1>
	</div>
</section>

<style>
	.hero {
		color: black;
	}

	.hero__inner {
		display: flex;
		width: 1261px;
		justify-content: space-between;
		align-items: flex-start;
	}
</style>

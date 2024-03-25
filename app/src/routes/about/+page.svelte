<script>
	import aboutMePic from '$lib/assets/about me headshot.webp';
	import Navbar from '../../lib/Navbar.svelte';
	import Footer from '../../lib/Footer.svelte';
</script>

<svelte:head>
	<title>About Me | Matthew Incardona</title>
</svelte:head>
<Navbar />
<div class="about-me">
	<!-- About me picture -->
	<div class="about-me__picture">
		<img src={aboutMePic} alt="me" />
	</div>
	<!-- About me bio -->
	<div class="about-me__bio">
		<h1>About Me</h1>
		<p>
			I'm an undergraduate human-centered computing major at the Rochester Institute of Technology
			who loves learning about all things web-related. As an avid entrepreneur, I enjoy working on
			multiple projects across many different areas of the web and I use what I learn everyday to
			help build my next idea.
			<br /><br />
			I've been a freelance web designer for 5 years now and am still actively taking on clients through
			my business DouxDolci Web Design.
		</p>
	</div>
</div>

<Footer />

<style>
	/* Create a two column layout */
	.about-me {
		min-height: 100vh;
		margin: auto;
		display: grid;
		max-width: 2000px;
		justify-content: center;
		align-items: center;
		grid-template-columns: repeat(2, 1fr);
		grid-template-rows: auto;
		gap: 3em;
		padding: 100px 5% 100px 5%;
	}

	.about-me__picture {
		margin: 5%;
		margin-left: auto;
		max-width: 20rem;
	}

	.about-me__bio {
		display: flex;
		flex-direction: column;
		gap: 2em;
	}

	/* Break this into two rows on smaller devices */
	@media screen and (max-width: 600px) {
		.about-me {
			grid-template-columns: 1fr;
		}
		.about-me__bio {
			margin-top: 50px;
		}
		.about-me__picture {
			margin-top: 50px;
			max-width: 60vw;
			margin-left: 0;
		}
	}
</style>

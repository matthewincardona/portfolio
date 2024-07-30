<script>
	import aboutMePic from '$lib/assets/about me headshot.webp';
</script>

<svelte:head>
	<title>About Me | Matthew Incardona</title>
</svelte:head>
<div class="about-me">
	<div class="about-me__inner">
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

	<!-- People I've Worked With -->
	<h3 style="margin-top: 150px;">People & Orgs I've Worked With</h3>
	<div class="hero__people-ive-worked-with">
		<p>mEducation Alliance</p>
		<p>Smashing Magazine</p>
		<p>Chiara Aliotta</p>
		<p>Debbie Levitt</p>
		<p>Liddiard Consulting Corp.</p>
		<p>STSS Inc.</p>
		<p>The Tailored Male</p>
		<p>Yvette Simmons</p>
		<p>KPGT</p>
		<p>PWEC NA</p>
		<p>Matt Urban Marketing</p>
		<p>Susan Rodgers</p>
		<p>Bubble Meets</p>
		<p>Institute for Caring</p>
		<p>Emma S. Clark Library</p>
		<p>SBDC</p>
		<p>Tr-State Design Solutions, Inc.</p>
		<p>Students Helping Honduras</p>
		<p>Asir Law Firm</p>
		<p />
	</div>
</div>

<style>
	.about-me {
		max-width: 1600px;
		display: flex;
		flex-direction: column;
		margin-bottom: 10dvh;
		padding: 150px 10% 15dvh 10%;
	}

	/* Create a two column layout */
	.about-me__inner {
		display: flex;
		gap: 4em;
	}

	.about-me__picture {
		max-width: 20rem;
	}

	.about-me__bio {
		display: flex;
		flex-direction: column;
		gap: 2em;
	}

	.about-me__bio p {
		max-width: 80ch;
	}

	/* Break this into two rows on smaller devices */
	@media screen and (max-width: 600px) {
		.about-me {
			padding: 100px 5% 0 5%;
		}
		.about-me__inner {
			grid-template-columns: 1fr;
			padding-left: 0;
		}
		.about-me__bio {
			margin-top: 50px;
		}
		.about-me__picture {
			margin-top: 50px;
			max-width: 60vw;
		}
	}

	.hero__people-ive-worked-with {
		display: grid;
		grid-template-columns: 1fr 1fr 1fr;
		gap: 1em;
	}
</style>

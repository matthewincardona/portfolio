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
				I graduated from <strong
					>Rochester Institute of Technology with a degree in Human-Centered Computing</strong
				>, combining my passion for design, development, and business. As an entrepreneur, designer,
				and developer, I thrive on building digital experiences that are not just visually engaging
				but also strategically effective.
				<br /><br />
				<strong>For over five years, I’ve run my own web design business</strong>, DouxDolci Web
				Design, working with clients to create thoughtful, user-friendly solutions. I’m always
				learning, experimenting, and finding new ways to push myself and make even better products
				for my clients.
			</p>
		</div>
	</div>

	<!-- People I've Worked With -->
	<h2 style="margin-top: 150px;">People & Orgs I've Worked With</h2>
	<div class="hero__people-ive-worked-with">
		<p>mEducation Alliance</p>
		<p>Smashing Magazine</p>
		<p>Chiara Aliotta</p>
		<p>Debbie Levitt</p>
		<p>Liddiard Consulting Corp.</p>
		<p>STSS Inc.</p>
		<p>Preservation Quest</p>
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

	.about-me__picture img {
		border-radius: 10px;
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

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
			</p>
			<p>
				<strong>For over seven years, I’ve run my own web design business</strong>, DouxDolci Web
				Design, working with clients to create thoughtful, user-friendly solutions. I’m always
				learning, experimenting, and finding new ways to push myself and make even better products
				for my clients.
			</p>
		</div>
	</div>

	<!-- People I've Worked With -->
	<h2 style="margin-top: 150px;">People & Orgs I've Worked With</h2>
	<ul class="hero__people-ive-worked-with">
		<li>mEducation Alliance</li>
		<li>Smashing Magazine</li>
		<li>Chiara Aliotta</li>
		<li>Debbie Levitt</li>
		<li>Liddiard Consulting Corp.</li>
		<li>STSS Inc.</li>
		<li>Preservation Quest</li>
		<li>The Tailored Male</li>
		<li>Yvette Simmons</li>
		<li>KPGT</li>
		<li>PWEC NA</li>
		<li>Matt Urban Marketing</li>
		<li>Susan Rodgers</li>
		<li>Bubble Meets</li>
		<li>Institute for Caring</li>
		<li>Emma S. Clark Library</li>
		<li>SBDC</li>
		<li>Tri-State Design Solutions, Inc.</li>
		<li>Students Helping Honduras</li>
		<li>Asir Law Firm</li>
	</ul>
</div>

<style>
	.hero__people-ive-worked-with {
		list-style: none;
		padding: 0;
		margin: 0;
	}

	.hero__people-ive-worked-with li {
		background: #f5f5f5;
		padding: 10px;
		border-radius: 5px;
		text-align: center;
	}

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
		flex-wrap: wrap;
	}

	.about-me__picture {
		max-width: 150px;
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

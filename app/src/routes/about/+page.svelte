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
				I've been a web enthusiast since 2018, back when I first started my freelance web design
				business. I've had the wonderful opportunity since then to work with a lot of great
				organizations and people, and to make some <a href="/web-design"
					>projects that I'm really proud of</a
				>. Currently, I'm working with the mEducation Alliance and STSS Inc., and I'm also an event
				moderator for the wonderful Smashing Magazine.
			</p>
			<p>
				I enjoy working on personal projects in my freetime- my most recent one is my custom job
				board, which uses AI to pair students majoring in web fields (ux design, web design, and
				frontend development) with entry level jobs and internships. Outside of my work, I love to
				go rock climbing and practice my cooking.
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
		<li>Stony Brook SBDC</li>
		<li>STSS Inc.</li>
		<li>Preservation Quest</li>
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

	.about-me a {
		text-decoration: underline;
	}
</style>

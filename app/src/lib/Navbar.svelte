<script>
	import resume from '$lib/assets/Matthew_Incardona_Resume.pdf';
	import pdfIcon from '$lib/assets/pdf-icon.svg';

	// function toggleMobileNav() {
	// 	var x = document.getElementById('myTopnav');
	// 	if (x.className === 'topnav') {
	// 		x.className += ' responsive';
	// 	} else {
	// 		x.className = 'topnav';
	// 	}
	// }

	// function closeMobileNav() {
	// 	var x = document.getElementById('myTopnav');
	// 	x.className = 'topnav';
	// }
</script>

<nav>
	<!-- Responsive navbar
	<div class="topnav" id="myTopnav">
		<div class="topnav__inner">
			<a href="/" class="active" on:click={closeMobileNav}>Home</a>
			<a href="/about" on:click={closeMobileNav}>About</a>
			<a href={resume} on:click={closeMobileNav}>Resume</a>
		</div>
		<a href="" class="icon" on:click={toggleMobileNav}>
			<i class="fa fa-bars" />
		</a>
	</div> -->

	<div class="topnav" id="myTopnav">
		<div class="topnav__inner">
			<a href="/" class="active">Home</a>
			<!-- svelte-ignore a11y-invalid-attribute -->
			<a href="/about">About</a>
			<!-- <a href="/contact" on:click={closeMobileNav}>Contact Me</a> -->
			<a href={resume} class="topnav__inner-resume">
				<p>Resume</p>
				<img src={pdfIcon} alt="Icon of a pdf file" />
			</a>
		</div>
	</div>
</nav>

<style>
	/* https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_topnav */

	/* Style navbar */
	.topnav {
		position: fixed;
		z-index: 1000;
		top: 0;
		width: 100%;
		overflow: hidden;
		font-family: 'IBM Plex Sans', sans-serif;
		color: var(--header-color);
		padding: 5px 6%;
		/* background-color: #00000010; */
		backdrop-filter: blur(4px);
	}

	/* Style navbar links */
	.topnav a {
		color: var(--header-color);
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		font-size: clamp(1.2rem, 2.5vw, 1.2rem);
		transition: 0.15s all ease-out;
		font-family: 'IBM Plex Sans', sans-serif;
		font-weight: 400;
	}

	.topnav__inner {
		display: flex;
		justify-content: end;
		align-items: center;
	}

	.topnav__inner a:not(:last-child):hover {
		transform: translateY(-2px);
		opacity: 0.6;
	}

	.topnav__inner-resume {
		display: flex;
		align-items: center;
		margin-left: 14px;
		gap: 0.5rem;
		border: 1px solid var(--cta-color);
		border-radius: 100px;
		padding: 8px 16px !important;
		/* transition: opacity 0.3s ease-in-out; */
	}

	.topnav__inner-resume:hover {
		opacity: 0.6;
	}

	.topnav .icon {
		display: none;
	}

	i,
	.fa,
	.fa-bars,
	a.icon {
		font-size: 25px;
	}

	/* Apply this to everything but the first child of .topnav a */
	/* @media screen and (max-width: 1000px) {
		.topnav a {
			display: none;
		}

		.topnav a.icon {
			float: right;
			display: block;
		}

		.topnav {
			padding-left: 10px;
		}
	}

	@media screen and (max-width: 1000px) {
		.topnav.responsive {
			display: flex;
			flex-direction: row;
			justify-content: space-between;
		}

		.topnav.responsive .icon {
			position: relative;
		}

		.topnav.responsive a {
			float: none;
			display: block;
			text-align: left;
		}
	} */
</style>

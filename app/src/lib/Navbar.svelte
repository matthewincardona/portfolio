<script>
	import resume from '$lib/assets/Matthew_Incardona_Resume.pdf';
	import pdfIcon from '$lib/assets/pdf-icon.svg';
</script>

<nav>
	<div class="topnav" id="myTopnav">
		<div class="topnav__inner">
			<a href="/" class="active">Home</a>
			<!-- svelte-ignore a11y-invalid-attribute -->
			<a href="/about">About</a>
			<!-- <a href="/contact" on:click={closeMobileNav}>Contact Me</a> -->
			<a href={resume} class="topnav__inner-resume">
				Resume
				<img src={pdfIcon} alt="Icon of a pdf file" />
			</a>
		</div>
	</div>
</nav>

<style>
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
		backdrop-filter: blur(4px);
	}

	/* Style navbar links */
	.topnav a {
		color: var(--header-color);
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		font-size: clamp(0.8rem, 2.5vw, 1rem);
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
</style>

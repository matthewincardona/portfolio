<script>
	import resume from '$lib/assets/Matthew_Incardona_Resume-UX-Engineer.pdf';

	function toggleMobileNav() {
		var x = document.getElementById('myTopnav');
		if (x.className === 'topnav') {
			x.className += ' responsive';
		} else {
			x.className = 'topnav';
		}
	}

	function closeMobileNav() {
		var x = document.getElementById('myTopnav');
		x.className = 'topnav';
	}
</script>

<nav>
	<!-- Responsive navbar -->
	<div class="topnav" id="myTopnav">
		<div class="topnav__inner">
			<a href="/" class="active" on:click={closeMobileNav}>Home</a>
			<!-- svelte-ignore a11y-invalid-attribute -->
			<a href="/about" on:click={closeMobileNav}>About</a>
			<!-- <a href="/contact" on:click={closeMobileNav}>Contact Me</a> -->
			<a href={resume} on:click={closeMobileNav}>Resume</a>
		</div>
		<!-- svelte-ignore a11y-invalid-attribute -->
		<a href="" class="icon" on:click={toggleMobileNav}>
			<i class="fa fa-bars" />
		</a>
	</div>
</nav>

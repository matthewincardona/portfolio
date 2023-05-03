<script>
	import Footer from '$lib/Footer.svelte';
	import Navbar from '$lib/Navbar.svelte';
</script>

<div class="bg-overlay">
	<Navbar />
	<main>
		<slot />
	</main>
	<Footer />
</div>

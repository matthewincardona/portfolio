<script>
	import { fly } from 'svelte/transition';
	import Navbar from '../lib/Navbar.svelte';
	import Footer from '../lib/Footer.svelte';
</script>

<div class="bg-overlay">
	<Navbar />
	<main transition:fly={{ y: 200 }}>
		<slot />
	</main>
	<Footer />
</div>

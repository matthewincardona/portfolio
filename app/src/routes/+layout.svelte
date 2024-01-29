<script>
	import { fly } from 'svelte/transition';
</script>

<div class="bg-overlay">
	<!-- <Navbar /> -->
	<main transition:fly={{ y: 200 }}>
		<slot />
	</main>
	<!-- <Footer /> -->
</div>

<script>
	import Zoom from 'svelte-medium-image-zoom';
	import 'svelte-medium-image-zoom/dist/styles.css';
	import img1 from '$lib/assets/graphic-design/optimized/IncardonaMatthew_p3Final_ebook.webp';
	import img2 from '$lib/assets/graphic-design/optimized/Matthew-Incardona-Exercise2.webp';
	import img3 from '$lib/assets/graphic-design/optimized/Matthew-Incardona-Exercise4Final1.webp';
	import img4 from '$lib/assets/graphic-design/optimized/Matthew-Incardona-Exercise4Final2.webp';
	import img5 from '$lib/assets/graphic-design/optimized/Matthew-Incardona-Exercise4Final3.webp';
	import img6 from '$lib/assets/graphic-design/optimized/Matthew-Incardona-exercise1.webp';
	import img7 from '$lib/assets/graphic-design/optimized/MatthewIncardona1B-Final.webp';
	import img8 from '$lib/assets/graphic-design/optimized/Spicy List V2.webp';
	import img9 from '$lib/assets/graphic-design/optimized/incardonaMatthew_Quote.webp';
	import img10 from '$lib/assets/graphic-design/optimized/incardonaMatthew_p3draft_v2.webp';
	import img11 from '$lib/assets/graphic-design/optimized/matthew-incardona-exploration3-final.webp';
	import img12 from '$lib/assets/graphic-design/optimized/matthew-incardona-exploration3.webp';
	import img13 from '$lib/assets/graphic-design/optimized/matthew-incardona-poster.webp';
	import img14 from '$lib/assets/graphic-design/optimized/matthew-incardona-project1C.webp';
	import img15 from '$lib/assets/graphic-design/optimized/poster-01.webp';

	const images = [img1, img10, img11, img15, img12, img8,img13, img9, img4, img5, img2, img6, img14];
</script>

<svelte:head>
	<title>Graphic Design Projects</title>
</svelte:head>

<section class="grid-container">
	{#each images as image}
		<div class="grid-item">
			<Zoom>
				<img src={image} alt="graphic design project" loading="lazy" />
			</Zoom>
		</div>
	{/each}
</section>

<style>
	.grid-container {
		margin-top: 60px;
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
		gap: 1.5rem;
		padding: 2rem;
	}

	.grid-item {
		overflow: hidden;
		transition: transform 0.3s ease;
	}

	.grid-item:hover {
		transform: translateY(-4px);
	}

	.grid-item img {
		width: 100%;
		height: auto;
		display: block;
	}

	@media (max-width: 768px) {
		.grid-container {
			grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
			gap: 1rem;
			padding: 1rem;
		}
	}
</style>

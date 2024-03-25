<script>
	import aboutMePic from '$lib/assets/about me headshot.webp';
	import Navbar from '../../lib/Navbar.svelte';
</script>

<svelte:head>
	<title>About Me | Matthew Incardona</title>
</svelte:head>
<Navbar />
<div class="about-me">
	<!-- About me picture -->
	<div class="about-me__picture">
		<img src={aboutMePic} alt="me" />
	</div>
	<!-- About me bio -->
	<div class="about-me__bio">
		<h1>About Me</h1>
		<p>
			I'm an undergraduate human-centered computing major at the Rochester Institute of Technology
			who loves learning about all things web-related. As an avid entrepreneur, I enjoy working on
			multiple projects across many different areas of the web and I use what I learn everyday to
			help build my next idea.
			<br /><br />
			I've been a freelance web designer for 4 years now and am still actively taking on clients through
			my business DouxDolci Web Design.
			<!-- <br> -->
			<!-- And PS: If the floating donut didn't give it away on the home page, I'm also a baker & cook at heart &lt;3 -->
		</p>
	</div>
</div>

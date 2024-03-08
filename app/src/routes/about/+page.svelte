<script>
	import aboutMePic from '$lib/assets/about me headshot.webp';
</script>

<svelte:head>
	<title>About Me | Matthew Incardona</title>
</svelte:head>

<div class="about-me">
	<div class="about-me__descr" style="min-height: 100vh;">
		<!-- About me picture -->
		<div class="about-me__descr-picture">
			<img src={aboutMePic} alt="me" />
		</div>
		<!-- About me bio -->
		<div class="about-me__descr-bio">
			<h1>About Me</h1>
			<p>
				I'm an undergraduate human-centered computing major at the Rochester Institute of Technology
				who loves learning about all things web-related. As an avid entrepreneur, I enjoy working on
				multiple projects across many different areas of the web and I use what I learn everyday to
				help build my next idea.
				<br /><br />
				I've been a freelance web designer for 5 years now and am still actively taking on clients through
				my business DouxDolci Web Design.
				<!-- <br> -->
				<!-- And PS: If the floating donut didn't give it away on the home page, I'm also a baker & cook at heart &lt;3 -->
			</p>
		</div>
	</div>
	<!-- <div class="about-me__card-grid-wrapper">
		<h3 style="text-align: left;">Things I Make</h3>
		<p style="text-align: left; margin-bottom: 40px">
			Some things I've made, GitHub repos optionally included.
		</p>
		<div class="about-me__card-grid">
			<div class="about-me__card">
				<h5>Control-C</h5>
				<p>A git-like backup program for designers.</p>
			</div>
			<div class="about-me__card">
				<h5>Time-Based Task Manager</h5>
				<p>A volatile task manager that encourages you to complete tasks on time.</p>
			</div>
			<div class="about-me__card">
				<h5>Classroom Coding Assistant</h5>
				<p>A coding assistant for keeping pace with programming lectures.</p>
			</div>
			<div class="about-me__card">
				<h5>Umami AI</h5>
				<p>A platform for hosting helpful gen AI personas.</p>
			</div>
			<div class="about-me__card">
				<h5>Booty Call</h5>
				<p>A video-calling app for couples with an interactive artboard.</p>
			</div>
			<div class="about-me__card">
				<h5>UX Interview Bot</h5>
				<p>An AI bot for helping conduct UX interviews.</p>
			</div>
			<div class="about-me__card">
				<h5>Second Desk</h5>
				<p>A</p>
			</div>

		</div>
	</div> -->
</div>

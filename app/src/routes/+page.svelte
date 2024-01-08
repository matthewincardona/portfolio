<script>
	// assets
	import bg from '$lib/assets/bg.png';
	import textMaskDev from '$lib/assets/text-mask-dev.png';
	import resume from '$lib/assets/Matthew_Incardona_Resume-UX-Engineer.pdf';

	import { onMount } from 'svelte';
	onMount(() => {
		// on hover, make the text small and blurred
		document.getElementById('nav').addEventListener('mouseover', (e) => {
			document.getElementById('hero').style.transform = 'scale(.7) translateY(0px)';
			document.getElementById('hero').style.filter = 'blur(10px)';
		});

		document.getElementById('nav').addEventListener('mouseout', (e) => {
			document.getElementById('hero').style.transform = '';
			document.getElementById('hero').style.filter = '';
		});

		// const textAnimator = (textNode) => {
		// 	// Split the text content into words
		// 	const words = textNode.textContent.split(' ');
		// 	console.log(words);

		// 	// Randomly change letters (excluding the first letter) in each word to uppercase
		// 	const modifiedWords = words.map((word) => {
		// 		const firstLetter = word.charAt(0);
		// 		const restOfWord = word.slice(1);

		// 		const modifiedRest = restOfWord
		// 			.split('')
		// 			.map((char) => (Math.random() < 0.8 ? char.toLowerCase() : char.toUpperCase()))
		// 			.join('');

		// 		return firstLetter + modifiedRest;
		// 	});

		// 	// Join the modified words back into a sentence
		// 	const modifiedTextContent = modifiedWords.join(' ');

		// 	// Set the modified text content to the h1 element
		// 	textNode.textContent = modifiedTextContent;
		// };
		// const h1Nodes = document.getElementsByTagName('H1');
		// fine-grained control over timing
		// setInterval(() => textAnimator(h1Nodes[0]), getRandomInterval(3000));
		// setInterval(() => textAnimator(h1Nodes[1]), getRandomInterval(800));
		// setInterval(() => textAnimator(h1Nodes[2]), getRandomInterval(800));

		const textAnimator = (textNode, callback, duration) => {
			const words = textNode.textContent.split(' ');

			let currentIndex = 0;
			let animationDuration = 0;

			const animateWord = () => {
				const word = words[currentIndex];

				// Preserve the first letter and modify the rest
				const modifiedWord =
					word.charAt(0) +
					word
						.slice(1)
						.split('')
						.map((char) => (Math.random() < 0.6 ? char.toLowerCase() : char.toUpperCase()))
						.join('');

				words[currentIndex] = modifiedWord;
				textNode.textContent = words.join(' ');

				currentIndex = (currentIndex + 1) % words.length;

				// Check if the duration has been reached and stop the animation
				if (animationDuration >= duration) {
					clearInterval(animationInterval);
					if (callback) {
						callback(); // Trigger the callback to move on to the next word
					}
				}
				animationDuration += 500; // Assuming a delay of 500ms per word, adjust if needed
			};

			// Continue the animation for the next word after a delay
			const animationInterval = setInterval(() => {
				animateWord();
			}, getRandomInterval(200));

			// Start the animation for the first word after a delay
			setTimeout(() => {
				animateWord();
			}, getRandomInterval(800)); // Add a small delay before starting the animation

			// Return the animation interval ID for cleanup, if needed
			return animationInterval;
		};

		const h1Nodes = Array.from(document.getElementsByTagName('H1'));

		// Function to coordinate the animation sequence for each <h1> element
		const animateSequentially = (index) => {
			if (index < h1Nodes.length) {
				// Start the animation for the current <h1> element
				const nextAnimation = textAnimator(
					h1Nodes[index],
					() => {
						// Move on to the next <h1> element after the animation completes
						animateSequentially(index + 1);
					},
					1500
				); // Set the duration for the first word's animation
			}
		};

		// Start the animation sequence for the first <h1> element
		animateSequentially(0);

		// Optionally, stop the entire animation sequence after a certain duration (e.g., 30 seconds)
		// setTimeout(() => {
		//     clearInterval(firstAnimation);
		// }, 30000);

		// Function to get a random interval above a specified minimum value
		function getRandomInterval(minimumInterval) {
			return Math.floor(Math.random() * 400) + minimumInterval; // Generates a random number between minimumInterval and (minimumInterval + 600)
		}
	});
</script>

<svelte:head>
	<title>Matthew Incardona</title>
</svelte:head>

<section>
	<div class="hero" id="hero">
		<h1 class="hero__inner__title--des">Entreprenuer</h1>
		<h1 class="hero__inner__title--des">Designer</h1>
		<div class="hero__inner">
			<div>
				<p>
					<strong>
						A Frontend Developer, UX/UI Designer, and Entrepreneur at the Rochester Institute of
						Technology.
					</strong>
				</p>
			</div>
			<div>
				<p>
					"I bring a unique blend of technical expertise and human-centric design thinking to help
					companies forge meaningful connections with their audience, ensuring a seamless and
					delightful user experience from conceptualization to the polished product, thereby
					contributing to the success and growth of your organization."
				</p>
			</div>
			<div />
			<div>
				<p>Freelance web designer, years of experience in</p>
				<ul>
					<li>Cloud Computing</li>
					<li>JavaScript</li>
					<li>HTML</li>
					<li>CSS</li>
					<li>React, Svelte, Angular</li>
					<li>Figma</li>
					<li>Photoshop, Illustrator</li>
				</ul>
			</div>
		</div>

		<div>
			<h1 class="hero__inner__title--dev">Developer</h1>
			<!-- <img class="hero__inner__text-mask" src={textMaskDev} alt="" /> -->
		</div>
	</div>
</section>
<nav id="nav">
	<p style="user-select: none"><strong>Matthew Incardona</strong></p>
	<a href="/about">About</a>
	<div id="projectsNav">
		<ul id="projectsNav__menu">
			<li><a href="/second-desk">Second Desk</a></li>
			<li><a href="/web-design">DouxDolci</a></li>
			<li><a href="/sbc4e-hub">SBC4E Hub</a></li>
			<li><a href="/rochester-greenovation">Greenovation</a></li>
		</ul>
		<a href="#">Projects</a>
	</div>
	<a href={resume}>Resume</a>
</nav>

<style>
	.hero {
		user-select: none;
		min-height: 100vh;
		padding: 0% 2%;
		position: relative;
		transition: all 0.2s ease-out;
	}

	.hero__inner {
		margin: 20px 0px -20px 20px;
		display: grid;
		grid-template-columns: 1fr 1.3fr 1fr 1fr;
		grid-template-rows: 1fr;
		gap: 0px 2em;
		grid-template-areas: '. . . .';
	}

	.hero__inner__title--des {
		background: url('$lib/assets/text-mask-des.png');
		background-position: 0% 25%;
		background-size: cover;
		background-clip: text;
		-webkit-background-clip: text;
		color: transparent;
	}

	.hero__inner__title--dev {
		/* mix-blend-mode: lighten; */
		/* mask-image: url('$lib/assets/text-mask-dev.png'); */
		background: url('$lib/assets/text-mask-dev.png');
		background-position: 0% 50%;
		background-size: cover;
		background-clip: text;
		-webkit-background-clip: text;
		color: transparent;
	}

	#nav {
		display: flex;
		align-items: end;
		flex-direction: row;
		flex-flow: row-reverse;
		white-space: nowrap;
		position: fixed;
		inset: 98% 98%;
	}

	#nav > * {
		padding-right: 15px;
	}

	#projectsNav {
		position: relative;
		display: flex;
		flex-direction: column;
	}

	#projectsNav:hover #projectsNav__menu {
		display: block;
	}

	#projectsNav__menu {
		display: none;
		position: absolute;
		bottom: 100%;
		list-style: none;
		padding: 5px;
		padding-left: 0;
	}
	#projectsNav__menu li {
		margin-bottom: 5px;
	}

	#projectsNav__menu a {
		text-decoration: none;
	}

	#projectsNav__menu a:hover {
		text-decoration: underline;
		cursor: pointer;
	}
</style>

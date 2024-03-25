import { onMount } from 'svelte';

onMount(() => {
	document.getElementById('hamburgerMenu').addEventListener('click', (e) => {
		const heroElement = document.getElementById('hero__inner');
		const navElement = document.getElementById('nav');
		// if menu is not currently visible...
		if (!navElement.classList.contains('menu--show')) {
			heroElement.style.transform = 'scale(.9) translate(-40px, -20px)';
			// apply to all h1s
			const el = document.getElementsByTagName('h1');
			for (let index = 0; index < el.length; index++) {
				el[index].style.letterSpacing = '180px';
			}
			setTimeout(() => {
				// heroElement.style.filter = 'blur(10px)';
				// show menu
				navElement.classList.add('menu--show');
			}, 0);
		} else {
			heroElement.style.transform = '';
			const el = document.getElementsByTagName('h1');
			for (let index = 0; index < el.length; index++) {
				el[index].style.letterSpacing = '';
			}
			setTimeout(() => {
				heroElement.style.filter = '';
				// hide menu
				navElement.classList.add('menu--hide');
			}, 0);
		}
	});

	// document.getElementById('nav').addEventListener('mouseout', (e) => {
	// 	const heroElement = document.getElementById('hero__inner');
	// 	heroElement.style.transform = '';
	// 	const el = document.getElementsByTagName('h1');
	// 	for (let index = 0; index < el.length; index++) {
	// 		el[index].style.letterSpacing = '';
	// 	}
	// 	setTimeout(() => {
	// 		heroElement.style.filter = '';
	// 	}, 0);
	// });

	const textAnimator1 = (textNode) => {
		// Split the text content into words
		const words = textNode.textContent.split(' ');
		// console.log(words);

		// Randomly change letters (excluding the first letter) in each word to uppercase
		const modifiedWords = words.map((word) => {
			const firstLetter = word.charAt(0);
			const restOfWord = word.slice(1);

			const modifiedRest = restOfWord
				.split('')
				.map((char) => (Math.random() < 0.9 ? char.toLowerCase() : char.toUpperCase()))
				.join('');

			return firstLetter + modifiedRest;
		});

		// Join the modified words back into a sentence
		const modifiedTextContent = modifiedWords.join(' ');

		// Set the modified text content to the h1 element
		textNode.textContent = modifiedTextContent;
	};
	// const h1Nodes = document.getElementsByTagName('H1');
	// fine-grained control over timing
	// setInterval(() => textAnimator1(h1Nodes[0]), getRandomInterval(2000));
	// setInterval(() => textAnimator1(h1Nodes[1]), getRandomInterval(1800));
	// setInterval(() => textAnimator1(h1Nodes[2]), getRandomInterval(800));

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
		}, getRandomInterval(1500));

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
	// setTimeout(() => {
	// 	animateSequentially(0);
	// }, 2000);

	// Optionally, stop the entire animation sequence after a certain duration (e.g., 30 seconds)
	// setTimeout(() => {
	//     clearInterval(firstAnimation);
	// }, 30000);

	// Function to get a random interval above a specified minimum value
	function getRandomInterval(minimumInterval) {
		return Math.floor(Math.random() * 400) + minimumInterval; // Generates a random number between minimumInterval and (minimumInterval + 600)
	}
});

<script>
	import Navbar from '../../lib/Navbar.svelte';
	import Footer from '../../lib/Footer.svelte';
</script>

<svelte:head>
	<title>Contact Me | Matthew Incardona</title>
</svelte:head>

<Navbar />

<div class="contact-container">
	<div class="form-container__top">
		<h1>Get In Touch</h1>
		<p>Send me a message, I’m happy to answer any questions you have!</p>
		<p>
			You can also connect with me on
			<a
				href="https://www.linkedin.com/in/matthew-incardona/"
				target="_blank"
				rel="noopener noreferrer"><u> LinkedIn</u></a
			>.
		</p>
	</div>
	<form action="mailto:mpi7253@rit.edu" method="”POST”">
		<label for="fname">Name</label>
		<input type="text" id="fname" name="fullname" placeholder="Name" />

		<!-- svelte-ignore a11y-label-has-associated-control -->
		<label for="email">Email</label>
		<input type="text" id="email" name="email" placeholder="Email" />

		<!-- svelte-ignore a11y-label-has-associated-control -->
		<label for="subject">Message</label>
		<textarea id="subject" name="subject" placeholder="Message" style="height: 200px"></textarea>

		<input type="submit" value="Submit" />
	</form>
</div>

<Footer />

<style>
	.contact-container {
		min-height: 100vh;
		margin: auto;
		display: grid;
		max-width: 1600px;
		justify-content: center;
		align-items: center;
		grid-template-columns: 1fr 1fr;
		grid-template-rows: auto;
		gap: 2em;
		padding: 100px 5% 100px 5%;
	}

	form {
		max-width: 1000px;
		display: flex;
		flex-direction: column;
	}

	.form-container__top h1 {
		margin-bottom: 2rem;
	}

	input[type='text'],
	textarea {
		width: 100%;
		background-color: rgba(114, 114, 114, 0.1);
		padding: 10px 22px;
		border-radius: 4px;
		box-sizing: border-box;
		margin-top: 10px;
		margin-bottom: 16px;
		resize: vertical;
		border: 2px #00000000;
	}

	input:focus {
		border: 2px var(--accent-color);
	}

	input[type='submit'] {
		border: var(--accent-color) 3px solid;
		background-color: #00000000;
		padding: 8px 20px;
		border-radius: 4px;
		cursor: pointer;
		transition: background-color ease-in 0.15s;
	}

	input[type='submit']:hover {
		background-color: #0000001d;
	}

	/* .form-container {
		border-radius: 5px;
	} */
</style>

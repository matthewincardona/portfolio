<script>
	import Navbar from '../../lib/Navbar.svelte';
</script>

<svelte:head>
	<title>Contact Me | Matthew Incardona</title>
</svelte:head>

<Navbar />

<div class="contact-container">
	<div class="form-container">
		<h1>Get In Touch</h1>
		<p>
			Send me a message, I’m happy to answer any questions you have!
			<br />You can also connect with me on
			<a
				href="https://www.linkedin.com/in/matthew-incardona/"
				target="_blank"
				rel="noopener noreferrer"><u>LinkedIn</u></a
			>.<br /><br />
		</p>
		<form action="mailto:mpi7253@rit.edu" method="”POST”">
			<label for="fname">Name</label>
			<input type="text" id="fname" name="fullname" placeholder="Name" />

			<label for="email">Email</label>
			<input type="text" id="email" name="email" placeholder="Email" />

			<label for="subject">Message</label>
			<textarea id="subject" name="subject" placeholder="Message" style="height: 200px" />

			<input type="submit" value="Submit" />
		</form>
	</div>
</div>

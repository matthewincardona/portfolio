<script>
	import linkedinIcon from '$lib/assets/linkedin icon.svg';
	import behanceIcon from '$lib/assets/behance icon.svg';
</script>

<footer>
	<div class="footer-col">
		<p>Looking to get in touch?</p>
		<a href="/contact"><button class="footer-btn">Contact Me!</button></a>
	</div>
	<div class="footer-col">
		<a href="https://www.behance.net/matthewincardo/" target="_blank" rel="noopener noreferrer">
			<div class="footer__icon-row">
				<img class="footer__icon" src={behanceIcon} alt="behance icon" />
				<p>See more of my work on Behance</p>
			</div>
		</a>
		<a
			href="https://www.linkedin.com/in/matthew-incardona/"
			target="_blank"
			rel="noopener noreferrer"
		>
			<div class="footer__icon-row">
				<img class="footer__icon" src={linkedinIcon} alt="linkedin icon" />
				<p>Connect with me on LinkedIn</p>
			</div>
		</a>
	</div>
</footer>
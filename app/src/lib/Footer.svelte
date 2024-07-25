<script>
	import linkedinIcon from '$lib/assets/linkedin icon.svg';
	import behanceIcon from '$lib/assets/behance icon.svg';
</script>

<footer>
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
	<div class="footer-col">
		<a href="mailto:doublethink.inc@gmail.com"
			><button class="footer-btn">doublethink.inc@gmail.com</button></a
		>
	</div>
</footer>

<style>
	footer {
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		justify-content: center;
		align-content: center;
		border-top: 4px solid var(--accent-color);
		min-height: 200px;
		width: 100%;
		padding-top: 10px;
	}

	.footer-col {
		margin: 30px 60px;
		display: grid;
		grid-template-rows: auto;
		row-gap: 0.5;
		margin-top: auto;
		margin-bottom: auto;
	}

	.footer-col button {
		margin-top: 20px;
		margin-bottom: 20px;
	}

	.footer-btn {
		border: var(--accent-color) 3px solid;
		background-color: #00000000;
		padding: 8px 20px;
		border-radius: 4px;
		cursor: pointer;
		transition: background-color ease-in 0.15s;
		font-size: clamp(1rem, 2.5vw, 1rem);
	}

	.footer-btn:hover {
		background-color: #0000001d;
	}

	.footer__icon-row {
		display: grid;
		grid-template-columns: 0.2fr 1fr;
		grid-template-rows: auto;
		column-gap: 1em;
		align-items: center;
		padding-bottom: 20px;
		transition: opacity 0.15s ease-in;
	}

	.footer__icon-row:hover {
		opacity: 0.8;
	}

	.footer__icon {
		width: 3em;
		height: auto;
	}
</style>

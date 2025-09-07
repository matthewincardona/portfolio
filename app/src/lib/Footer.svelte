<script>
	import LogoLinkedin from 'carbon-icons-svelte/lib/LogoLinkedin.svelte';
</script>

<footer>
	<a href="https://www.linkedin.com/in/matthew-incardona/" target="_blank">
		<LogoLinkedin size="40px" style="fill: var(--body-color)" />
	</a>
	<a href="mailto:matthew@douxdolci.com" style="margin-top: 7px;">matthew@douxdolci.com</a>
</footer>

<style>
	footer {
		margin-top: 60px;
		display: flex;
		flex-direction: row;
		place-content: center;
		border-top: 2px solid var(--accent-color);
		width: 100%;
		padding: 24px 0;
		gap: 2em;
	}
</style>

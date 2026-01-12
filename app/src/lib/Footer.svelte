<script>
	import LogoLinkedin from 'carbon-icons-svelte/lib/LogoLinkedin.svelte';
	import LogoGithub from 'carbon-icons-svelte/lib/LogoGithub.svelte';
	import Email from 'carbon-icons-svelte/lib/Email.svelte';
</script>

<footer>
	<a href="https://www.linkedin.com/in/matthew-incardona/" target="_blank">
		<LogoLinkedin size="40px" style="fill: var(--body-color)" />
	</a>
	<a href="https://github.com/matthewincardona/501-peer-feedback-system" target="_blank">
		<LogoGithub size="40px" style="fill: var(--body-color)" />
	</a>

	<a href="mailto:matthew@douxdolci.com" target="_blank">
		<Email size="40px" style="fill: var(--body-color)" />
	</a>
	<a href="https://exploration.matthewincardona.com/" target="_blank" style="margin-top: 7px;"
		>Explore More Work</a
	>
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

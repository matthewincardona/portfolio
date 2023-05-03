import { sveltekit } from '@sveltejs/kit/vite';
import { defineConfig } from 'vite';

// threejs minifier
import { threeMinifier } from "@yushijinhun/three-minifier-rollup";

export default defineConfig({
	plugins: [
		{ ...threeMinifier(), enforce: "pre" }, // <=== Add plugin here
		sveltekit(),
	],
	assetsInclude: ['**/*.glb'], // add support for glb files
});



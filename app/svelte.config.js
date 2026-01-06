import adapter from '@sveltejs/adapter-node';

export default {
	kit: {
		adapter: adapter({
			platform: 'node',
			// See below for an explanation of these options
			routes: {
				include: ['/*'],
				exclude: ['<all>']
			}
		})
	}
};

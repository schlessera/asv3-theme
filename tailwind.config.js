const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
	purge: [
		'./assets/js/**/*.js',
		'./assets/js/**/*.jsx',
		'./src/**/*.php',
		'./views/**/*.php',
	],
	theme: {
		extend: {
			fontFamily: {
				sans: ['Inter var', ...defaultTheme.fontFamily.sans],
			},
		},
	},
	variants: {},
	plugins: [
		require('@tailwindcss/ui')
	],
}

const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
//require('laravel-mix-purgecss');

mix.setPublicPath('./assets');

mix.webpackConfig({
	externals: {
		"jquery": "jQuery",
	}
});

mix.browserSync({
	proxy: 'asv3.lndo.site',
	injectChanges: true,
	open: false,
	files: [
		'assets/js/**/*.js',
		'assets/css/**/*.css',
		'views/**/*.php'
	]
});

mix.js('assets/src/js/theme.js', 'js');
mix.sass('assets/src/scss/theme.scss', 'css')
	.options({
		processCssUrls: false,
		postCss: [ tailwindcss('./tailwind.config.js') ]
	});


if (mix.inProduction()) {
	require('laravel-mix-versionhash');
	mix.versionHash();
	mix.sourceMaps();
}

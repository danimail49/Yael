/**
 * GULP config file.
 * All PATH variables are going here.
 */

module.exports = function () {
	'use strict';
	// Main Config variable
	//  * HINT: for styling purpose every folder path must end with "/" or filename and begin with "./" providing clear urls
	// ** HINT: There are some exceptions from upper rule

	return {
		'basePath': './',
		'vendorPath': './src/vendor/', // defined in .bowerrc file
		'buildPath': {
			'css': './css/',
			'img': './img/images/',
			'pngSprites': './img/png-sprites/',
			'js': './js/',
			'svg': './img/svg/',
			'svgSprites': './img/svg_sprites/'
		},
		'srcPath': {
			'img': ['./src/img/images/**/*.*', '!./src/img/png_sprites'],
			'pngSprites': './src/img/png_sprites/',
			'js': ['./src/js/script.js', './src/js/vendor.js'],
			'less': ['./src/less/style.less', './src/less/vendor.less'],
			'sass': ['./src/sass/style.scss', './src/sass/vendor.scss'],
			'svg': './src/img/svg/**/*.svg',
			'svgSprites': './src/img/svg_sprites/'
		},
		'helperVars': {
			//IMG folder for clean IMG function
			'imgBuildClean': ['./img/**/*.*', '!./img/png_sprites/**/*.*'],
			// here we put SCSS mixins for PNG sprites
			'pngSpriteSassPath': './src/sass/module/png_sprites/',
			// clear URL to use it inside CSS files
			'pngSpriteImgPath': '/img/png-sprites'
		},
		// Browser definitions for autoprefixer
		'autoprefixerSettings': [
			'> 3%',
			'ie >= 10',
			'iOS >= 7',
			'Android >= 4.1',
			'bb >= 10'
		],
	};
};

/**
 * WPGulp Configuration File
 */

// General options.
const projectURL      = 'http://localhost/merchant';
const productURL      = './';
const browserAutoOpen = false;
const injectChanges   = true;
const outputStyle     = 'compressed';
const errLogToConsole = true;
const precision       = 10;

// Styles to process.
const styles = [

	// Core.
	{
		name: 'core',
		src: './assets/sass/merchant.scss',
		destination: './assets/css',
	},

	// Admin.
	{
		name: 'admin',
		src: './assets/sass/admin/admin.scss',
		destination: './assets/css/admin',
	},

	// Metabox.
	{
		name: 'metabox',
		src: './assets/sass/admin/metabox.scss',
		destination: './assets/css/admin',
	},

	// Grid.
	{
		name: 'grid',
		src: './assets/sass/grid.scss',
		destination: './assets/css',
	},

	// Carousel.
	{
		name: 'carousel',
		src: './assets/sass/carousel.scss',
		destination: './assets/css',
	},

	// Pagination.
	{
		name: 'pagination',
		src: './assets/sass/pagination.scss',
		destination: './assets/css',
	},

	// Buy Now.
	{
		name: 'buyNow',
		src: './assets/sass/modules/buy-now/buy-now.scss',
		destination: './assets/css/modules/buy-now',
	},
	{
		name: 'buyNowAdmin',
		src: './assets/sass/modules/buy-now/admin/preview.scss',
		destination: './assets/css/modules/buy-now/admin',
	},

];

// Scripts to process.
const scripts = [

	// Core.
	{
		name: 'core',
		src: './assets/js/src/merchant.js',
		destination: './assets/js',
		file: 'merchant',
	},

	// Admin.
	{
		name: 'admin',
		src: './assets/js/src/admin/admin.js',
		destination: './assets/js/admin',
		file: 'admin',
	},

	// Metabox.
	{
		name: 'metabox',
		src: './assets/js/src/admin/metabox.js',
		destination: './assets/js/admin',
		file: 'merchant-metabox',
	},

	// Preview.
	{
		name: 'preview',
		src: './assets/js/src/admin/preview.js',
		destination: './assets/js/admin',
		file: 'merchant-preview',
	},

	// Carousel.
	{
		name: 'carousel',
		src: './assets/js/src/carousel.js',
		destination: './assets/js',
		file: 'carousel',
	},

	// Pagination.
	{
		name: 'pagination',
		src: './assets/js/src/pagination.js',
		destination: './assets/js',
		file: 'pagination',
	},

	// Scroll Direction.
	{
		name: 'scrollDirection',
		src: './assets/js/src/scroll-direction.js',
		destination: './assets/js',
		file: 'scroll-direction',
	},

	// Toggle Class.
	{
		name: 'toggleClass',
		src: './assets/js/src/toggle-class.js',
		destination: './assets/js',
		file: 'toggle-class',
	},

	// Custom Add To Cart Button.
	{
		name: 'customAddToCartButton',
		src: './assets/js/src/custom-addtocart-button.js',
		destination: './assets/js',
		file: 'custom-addtocart-button',
	}

];

// Watch options.
const watchStyles  = './assets/sass/**/*.scss';
const watchScripts = './assets/js/src/**/*.js';
const watchPhp     = './**/*.php';

// Zip options.
const zipName        = 'merchant.zip';
const zipDestination = './../';
const zipIncludeGlob = ['../@(Merchant|merchant)/**/*'];
const zipIgnoreGlob  = [
	'!../@(Merchant|merchant)/**/*{node_modules,node_modules/**/*}',
	'!../@(Merchant|merchant)/**/*.git',
	'!../@(Merchant|merchant)/**/*.svn',
	'!../@(Merchant|merchant)/**/*gulpfile.babel.js',
	'!../@(Merchant|merchant)/**/*wpgulp.config.js',
	'!../@(Merchant|merchant)/**/*.eslintrc.js',
	'!../@(Merchant|merchant)/**/*.eslintignore',
	'!../@(Merchant|merchant)/**/*.editorconfig',
	'!../@(Merchant|merchant)/**/*phpcs.xml.dist',
	'!../@(Merchant|merchant)/**/*vscode',
	'!../@(Merchant|merchant)/*.code-workspace',
	'!../@(Merchant|merchant)/**/*package.json',
	'!../@(Merchant|merchant)/**/*package-lock.json',
	'!../@(Merchant|merchant)/**/*assets/img/raw/**/*',
	'!../@(Merchant|merchant)/**/*assets/img/raw',
	'!../@(Merchant|merchant)/**/*assets/js/src/**/*',
	'!../@(Merchant|merchant)/**/*assets/js/src',
	'!../@(Merchant|merchant)/**/*tests/**/*',
	'!../@(Merchant|merchant)/**/*tests',
	'!../@(Merchant|merchant)/**/*e2etests/**/*',
	'!../@(Merchant|merchant)/**/*e2etests',
	'!../@(Merchant|merchant)/**/*playwright-report/**/*',
	'!../@(Merchant|merchant)/**/*playwright-report',
	'!../@(Merchant|merchant)/**/*.wp-env.json',
	'!../@(Merchant|merchant)/**/*playwright.config.js',
	'!../@(Merchant|merchant)/**/*composer.json',
	'!../@(Merchant|merchant)/**/*composer.lock',
	'!../@(Merchant|merchant)/**/*phpcs.xml',
	'!../@(Merchant|merchant)/{vendor,vendor/**/*}'
];

// Translation options.
const textDomain             = 'merchant';
const translationFile        = 'merchant.pot';
const translationDestination = './languages';

// Others.
const packageName    = 'merchant';
const bugReport      = 'https://athemes.com/contact/';
const lastTranslator = 'aThemes <team@athemes.com>';
const team           = 'aThemes <team@athemes.com>';
const BROWSERS_LIST  = ['last 2 version', '> 1%'];

// Export.
module.exports = {

	// General options.
	projectURL,
	productURL,
	browserAutoOpen,
	injectChanges,
	outputStyle,
	errLogToConsole,
	precision,

	// Style options.
	styles,

	// Script options.
	scripts,

	// Watch options.
	watchStyles,
	watchScripts,
	watchPhp,

	// Zip options.
	zipName,
	zipDestination,
	zipIncludeGlob,
	zipIgnoreGlob,

	// Translation options.
	textDomain,
	translationFile,
	translationDestination,

	// Others.
	packageName,
	bugReport,
	lastTranslator,
	team,
	BROWSERS_LIST,

};

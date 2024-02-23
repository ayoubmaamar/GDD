const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// Compiler les fichiers JavaScript
mix.js('resources/js/app.js', 'public/js')
   .react('resources/js/app.jsx', 'public/js') // Décommentez cette ligne pour React
   .vue() // Décommentez cette ligne pour Vue.js
   .sass('resources/sass/app.scss', 'public/css'); // Compiler SASS en CSS

// Optionnel: Ajouter la version des fichiers pour la mise en cache
if (mix.inProduction()) {
    mix.version();
}

// Optionnel: Personnaliser le processus de compilation Babel
mix.babelConfig({
    plugins: ['@babel/plugin-syntax-dynamic-import'],
});

// Optionnel: Copier des images ou d'autres fichiers statiques vers le répertoire public
mix.copyDirectory('resources/images', 'public/images');

// Optionnel: Créer des source maps pour faciliter le débogage
if (!mix.inProduction()) {
    mix.sourceMaps();
}

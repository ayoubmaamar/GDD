const mix = require('laravel-mix');
require('mix-tailwindcss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Laravel Mix provides a clean, fluent API for defining Webpack build steps
 | for your Laravel application.
 |
 */

// Compiler les fichiers JavaScript et CSS avec Tailwind CSS
mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
       require('tailwindcss'),
   ]);

// Optionnel: Ajouter la version des fichiers pour la mise en cache en production
if (mix.inProduction()) {
    mix.version();
}

// Optionnel: Copier des images ou d'autres fichiers statiques vers le répertoire public
mix.copyDirectory('resources/images', 'public/images');

// Optionnel: Créer des source maps pour faciliter le débogage en développement
if (!mix.inProduction()) {
    mix.sourceMaps();
}

const mix = require('laravel-mix');
require('tailwindcss');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
      require('tailwindcss'),
   ]);
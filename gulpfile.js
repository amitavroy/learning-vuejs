var elixir = require('laravel-elixir');
require('laravel-elixir-vueify');

elixir(function(mix) {
    // mix.sass('app.scss');
    mix.browserify('main.js');
    mix.version('js/main.js');
});

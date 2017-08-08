
const elixir = require('laravel-elixir');

require('laravel-elixir-browsersync');
require('laravel-elixir-webpack-official');

var bowerLibs = './resources/assets/libs/';


elixir(function(mix) {

  mix.styles(["fontawes.min.css", "framework.css", "layout.css"], 'public/css/product.css');

  mix.scripts([
      //JavaScript-Libs
      "resources/assets/libs/jquery.min.js",
      "resources/assets/libs/jquery.backtotop.js",
      "resources/assets/libs/jquery.mobilemenu.js",
      "resources/assets/libs/jquery.placeholder.min.js"
    ],'public/js/app_libs.js', bowerLibs);

  mix.webpack('app_common.js');

  mix.version(['public/css/product.css','public/js/app_libs.js', 'public/js/app_common.js' ]);


});

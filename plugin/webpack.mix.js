const mix = require("laravel-mix");
require("laravel-mix-tailwind");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.setPublicPath("public");

//  mix.webpackConfig({
//     "resolve": {
//         "alias": {
//             "react": "preact/compat",
//             "react-dom/test-utils": "preact/test-utils",
//             "react-dom": "preact/compat",     // Must be below test-utils
//             "react/jsx-runtime": "preact/jsx-runtime"
//         }
//     }
// });
mix.options({
    processCssUrls: false,
    // postCss: [ tailwindcss('./tailwind.config.js') ],
});
if (process.env.npm_config_member_list) {
    mix.js(
        "app/js/members/list.js",
        "public/js/mid-functions-member-list.js"
    ).react();
    mix.sass(
        "app/sass/members/list.scss",
        "public/css/mid-functions-member-list.css"
    );
}

if (process.env.npm_config_member_submission) {
    mix.js(
        "app/js/members/submission-form.js",
        "public/js/mid-functions-member-submission.js"
    ).react();
    mix.sass(
        "app/sass/members/submission-form.scss",
        "public/css/mid-functions-member-submission.css"
    );
}

mix.js("app/js/index.js", "public/js/mid-functions.js");

if (mix.inProduction()) {
    mix.sass(
        "app/sass/tailwind-prod.scss",
        "public/css/mid-functions.css"
    ).tailwind();
    mix.version();
} else {
    mix.sass(
        "app/sass/tailwind-dev.scss",
        "public/css/mid-functions.css"
    ).tailwind();
}

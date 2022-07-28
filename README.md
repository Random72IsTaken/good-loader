<div align="center">
    بسم الله الرحمن الرحيم
</div>

# Good Loader

Display an elegant loader for your TALL Stack application.

### Description

When you load the site, and the page is already loaded, the package's loader view beautifully fades out in a specified `transition` time...

Otherwise, a customizable **`sentence`** loads along the view, as soon as your specified **`font`** is loaded; and until the page is ready; before everything fading all out in the end.

The result is something like this:

https://user-images.githubusercontent.com/81492351/179066243-16001c9c-330a-4ac7-a020-0e6d1adcc7c6.mp4


## Installation

This package is built for the [TALL stack](https://tallstack.dev). You must account for its requirements at first.

### Requirements

- [TailwindCSS](https://tailwindcss.com)
- [Alpine.js](https://alpinejs.dev)
- [Laravel](https://laravel.com)

### Steps

1. Install the package via Composer:

   ```bash
   composer require goodm4ven/good-loader
   ```

2. Publish the package configuration and view files:

   ```bash
   php artisan vendor:publish --provider="GoodM4ven\GoodLoader\GoodLoaderServiceProvider"
   ```

   - If you're **updating** the package, please add `--force` option to **override** the old assets.

3. Open the published `config/good-loader.php` file and specify your `font` name.

   - <details>
       <summary>
         Here are the <b>default</b> configurations of the file.
       </summary><br>

     ```php
     /*
      |--------------------------------------------------------------------------
      | Loading Font
      |--------------------------------------------------------------------------
      |
      | Provide the name of the font you're using, so that the sentence won't
      | load until that font is loaded at least.
      |
      */

     'font' => env('GOOD_LOADER_FONT', 'Mulish'),


     /*
      |--------------------------------------------------------------------------
      | Loading Sentence
      |--------------------------------------------------------------------------
      |
      | Customize the sentence which shows up at the center of the screen before
      | the page is completely loaded.
      |
      */

     'sentence' => env('GOOD_LOADER_SENTENCE', 'Loading...'),


     /*
      |--------------------------------------------------------------------------
      | Loading Transitions
      |--------------------------------------------------------------------------
      |
      | The time it takes to transition (fade) the `background` and the `sentence`.
      |
      */

     'transitions' => [
         'background' => env('GOOD_LOADER_TRANSITIONS_BACKGROUND', 1000),
         'sentence' => env('GOOD_LOADER_TRANSITIONS_SENTENCE', 300),
     ],


     /*
      |--------------------------------------------------------------------------
      | Loading Durations
      |--------------------------------------------------------------------------
      |
      | The time it takes for the `sentence` to start `animating`, as things are
      | still not loaded...
      |
      */

     'durations' => [
         'sentence-animating' => env('GOOD_LOADER_DURATIONS_SENTENCE_ANIMATING', 750),
     ],
     ```
     </details>

4. Ensure that your `content` in the `tailwind.config.js` file include the published view - along your font:

   ```js
   const defaultTheme = require('tailwindcss/defaultTheme');

   module.exports = {
       content: [
           ...
           './resources/views/**/*.blade.php', // or to './resources/views/vendor/good-loader/**' specifically...
       ],
       ...
       theme: {
           extend: {
               fontFamily: {
                   mulish: ['Mulish', ...defaultTheme.fontFamily.sans],
                   ...
   ```

   - The view is available at `resources/views/vendor/good-loader/partials/good-loader.blade.php` for customization.

5. Add the following Blade directive to your `master` layout or view - along the font:

   ```html
       ...
       <link rel="prefetch"
             href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900">
   </head>
   <body class="font-mulish">
       @goodLoader
       ...
   ```

6. Finally, compile Alpine in `app.js` and the view's Tailwind classes in `app.css` with NPM:

   ```bash
   npm run dev
   ```


## Development

Feel free to **p**ull-**r**equest at any time. It's not like the package is moving anywhere... -Or is it? 😲

- There's an available and automated [CHANGELOG](CHANGELOG.md) of all the updates.

### TODOs

- Provide more time customizations.
- Neat background grids to pick from!
- Write [Cypress](https://cypress.io) and [Pest](https://pestphp.com/) tests! 🥲


## Remarks

Please do 🌟 all the packages you rely on, but NOT this one. 😍


<div align="center">
    <br>والحمد لله رب العالمين
</div>

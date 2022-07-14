<div align="center">
    بسم الله الرحمن الرحيم
</div>

# Good Loader

Display an elegant loader for your TALL Stack application.

### Description

When you load the site, if JavaScript is already loaded, the package's loader view beautifully fades out after a specified **`duration`**...

Otherwise, a customizable **`sentence`** loads along the view, as soon as your specified **`font`** is loaded; after CSS; and for a predefined **`minimum`** duration as well, before finally fading all out.

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

   - > **Warning**
     > If that `font` is not set up and loaded in the view, **the loading will be just a cute little infinite**! 😅

   - <details>
       <summary>
         Here are the <b>default</b> configurations of the file.
       </summary><br>

     ```php
     /*
      |--------------------------------------------------------------------------
      | Loading Sentence
      |--------------------------------------------------------------------------
      |
      | Customize the sentence which shows up at the center of the screen before
      | JavaScript is completely loaded.
      |
      */

     'sentence' => env('GOOD_LOADER_SENTENCE', 'Loading...'),


     /*
      |--------------------------------------------------------------------------
      | Loading Font
      |--------------------------------------------------------------------------
      |
      | Provide the name of the font you're using, so that the sentence won't
      | load until that font is loaded at least; after CSS.
      |
      */

     'font' => env('GOOD_LOADER_FONT', 'Mulish'),


     /*
      |--------------------------------------------------------------------------
      | Loading Duration
      |--------------------------------------------------------------------------
      |
      | The minimum time it takes to keep the background whilst `loading`, even
      | after the Javascript is completely loaded.
      |
      | And the least duration it takes for the `sentence` to stay visible when
      | it gets displayed.
      |
      */

     'duration' => [
         'loading' => env('GOOD_LOADER_LOADING_DURATION', 500),
         'sentence' => env('GOOD_LOADER_SENTENCE_DURATION', 750),
     ],
     ```
     </details>

4. Add the following Blade directive to your `master` layout or view:

   ```html
   <body>
       @goodLoader
       ...
   </body>
   ```

5. Ensure that your `content` in the `tailwind.config.js` file include the published view:

   ```js
   module.exports = {
       content: [
           ...
           './resources/views/**/*.blade.php', // or to './resources/views/vendor/good-loader/**' specifically...
       ],
       ...
   }
   ```

   - The view is available at `resources/views/vendor/good-loader/partials/good-loader.blade.php` for customization.

6. Finally, compile Alpine in `app.js` and the view's Tailwind classes in `app.css` with NPM:

   ```bash
   npm run dev
   ```


## Development

Feel free to **p**ull-**r**equest at any time. It's not like the package is moving anywhere... -Or is it? 😲

- There's an available and automated [CHANGELOG](CHANGELOG.md) of all the updates.

### TODOs

- Find a better way to await font loading... That `while` loop scares me! 👀
- Integrate Spatie's [google-fonts](https://github.com/spatie/laravel-google-fonts) package as a required one.
- Neat background grids to pick from!
- Write [Cypress](https://cypress.io) and [Pest](https://pestphp.com/) tests! 🥲


## Remarks

Please do 🌟 all the packages you rely on, but NOT this one. 😍


<div align="center">
    <br>والحمد لله رب العالمين
</div>

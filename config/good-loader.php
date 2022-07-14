<?php

return [

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

];

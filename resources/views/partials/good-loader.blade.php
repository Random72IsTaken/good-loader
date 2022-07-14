<!-- Loader -->
<div
    x-data="{ shown: true }"
    x-show="shown"
    x-init="$nextTick(() => {
        const $element = $el.children[0];

        if (!$element.classList.contains('opacity-0')) {
            $element.classList.add('prevent-pulsing');
            $element.classList.remove('animate-pulse');
            setTimeout(() => $element.classList.add('opacity-0'), {{ config('good-loader.duration.sentence') }});

            setTimeout(
                () => shown = false,
                {{ config('good-loader.duration.sentence') }} + {{ config('good-loader.duration.loading') }}
            );
        } else {
            setTimeout(
                () => shown = false,
                {{ config('good-loader.duration.loading') }}
            );
        }
    })"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed z-[99] grid h-full w-full items-center justify-center bg-white"
>
    <p
        id="good-loader-sentence"
        class="text-xl opacity-0 transition-all duration-[300ms]"
    >
        {{ config('good-loader.sentence', 'Loading...') }}
    </p>
</div>

<!-- Script -->
<script defer>
    // ? Shows the loader sentence only when the font is loaded at least
    document.fonts.ready.then(function() {
        while (!document.fonts.check("1.25rem '{{ config('good-loader.font') }}'")) {}

        setTimeout(() => {
            if (document.readyState !== 'complete') {
                const $element = document.getElementById('good-loader-sentence');

                $element.classList.remove('opacity-0');

                setTimeout(() => {
                    if (!$element.classList.contains('prevent-pulsing')) {
                        $element.classList.add('animate-pulse');
                    }
                }, 700);
            }
        }, {{ config('good-loader.duration.sentence') }});
    });
</script>

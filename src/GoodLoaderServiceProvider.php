<?php

namespace GoodM4ven\GoodLoader;

use Illuminate\Support\Facades\Blade;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GoodLoaderServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         *
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         *
         */
        $package
            ->name('good-loader')
            ->hasConfigFile()
            ->hasViews();
    }

    public function bootingPackage()
    {
        $this->registerBladeDirectives();
    }

    protected function registerBladeDirectives()
    {
        Blade::directive('goodLoader', function () {
            return "<?= view('good-loader::partials.good-loader')->render(); ?>";
        });
    }
}

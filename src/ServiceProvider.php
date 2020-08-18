<?php declare(strict_types=1);

namespace codicastudio\NovaUnlayerField;

use Illuminate\Support\ServiceProvider as BasicServiceProvider;
use Laravel\Nova\Nova;

class ServiceProvider extends BasicServiceProvider
{
    /** @inheritDoc */
    public function boot(): void
    {
        Nova::serving(function () {
            Nova::script('landing-email', __DIR__.'/../dist/js/field.js');
        });

        $this->publishes([
            __DIR__.'/../resources/lang/' => resource_path('lang/vendor/landing-email'),
        ]);

        $this->registerTranslations();
    }

    protected function registerTranslations(): void
    {
        $currentLocale = app()->getLocale();

        Nova::translations(__DIR__."/../resources/lang/$currentLocale.json");
        Nova::translations(resource_path("lang/vendor/landing-email/$currentLocale.json"));
    }
}

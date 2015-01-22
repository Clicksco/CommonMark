<?php
namespace Clicksco\CommonMark;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use League\CommonMark\CommonMarkConverter;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'clicksco.commonmark',
        ];
    }

    /**
     * Register the service provided.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bindShared('clicksco.commonmark', function($app) {
            return new CommonMarkConverter;
        });
    }
}

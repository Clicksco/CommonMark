<?php
namespace Clicksco\CommonMark;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;
use League\CommonMark\CommonMarkConverter;

class ServiceProvider extends IlluminateServiceProvider
{
    protected $defer = true;

    protected $hint = 'clicksco/commonmark';

    public function boot()
    {
        $this->package('clicksco/commonmark', $this->hint);
    }

    public function register()
    {
        $this->app['clicksco.commonmark'] = $this->app->share(function($app){
            $config = \Config::get($this->hint . '::config');

            return new CommonMarkConverter;
        });
    }
}

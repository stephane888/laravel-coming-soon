<?php 
namespace Stephane888\LaravelComingSoon;

use Illuminate\Support\ServiceProvider;

class ComingSoonServiceProvider extends ServiceProvider{
    private $_packageTag = 'LaravelComingSoon';
    
    /**
     * 
     */
    public function boot()
    {
        if (config('ComingSoon.Show')) {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        }
    }
    /**
     * 
     * {@inheritDoc}
     * @see \Illuminate\Support\ServiceProvider::register()
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/ComingSoon.php', 'ComingSoon');
        
        if (config('ComingSoon.Show')) {
            $this->loadViewsFrom(__DIR__.'/resources/views/', $this->_packageTag);
        }
    }
}
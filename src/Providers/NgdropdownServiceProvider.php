<?php
 
namespace Ngdropdown\Providers;
 
 
use Plenty\Plugin\ServiceProvider;
 
class NgdropdownServiceProvider extends ServiceProvider
{
 
    /**
     * Register the service provider.
     */
 
    public function register()
    {
        $this->getApplication()->register(NgdropdownRouteServiceProvider::class);
    }
}
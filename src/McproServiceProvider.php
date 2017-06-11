<?php 

namespace Jsdecena\MCPro;

use Illuminate\Support\ServiceProvider;

class McproServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Set up the publishing of configuration
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/database/migrations' => database_path('migrations')
        ], 'migrations');

	    $this->publishes([
	        __DIR__.'/database/seeds' => database_path('seeds')
	    ], 'seed');
    }

    /**
     * Register the Mailchimp Instance to be set up with the API-key.
     * Then, the IoC-container can be used to get a Mailchimp instance ready for use.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
    }    
}
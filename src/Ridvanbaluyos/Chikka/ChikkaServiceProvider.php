<?php namespace Ridvanbaluyos\Chikka;

use Illuminate\Support\ServiceProvider;

class ChikkaServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('ridvanbaluyos/chikka');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
		$this->app['chikka'] = $this->app->share(function($app){
			return new Chikka;
		});

		$this->app->booting(function()
		{
		  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  $loader->alias('Chikka', 'Ridvanbaluyos\Chikka\Facades\Chikka');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('chikka');
	}

}

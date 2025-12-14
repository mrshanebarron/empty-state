<?php

namespace MrShaneBarron\empty-state;

use Illuminate\Support\ServiceProvider;
use MrShaneBarron\empty-state\Livewire\empty-state;
use MrShaneBarron\empty-state\View\Components\empty-state as Bladeempty-state;
use Livewire\Livewire;

class empty-stateServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/ld-empty-state.php', 'ld-empty-state');
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ld-empty-state');

        Livewire::component('ld-empty-state', empty-state::class);

        $this->loadViewComponentsAs('ld', [
            Bladeempty-state::class,
        ]);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/ld-empty-state.php' => config_path('ld-empty-state.php'),
            ], 'ld-empty-state-config');

            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/ld-empty-state'),
            ], 'ld-empty-state-views');
        }
    }
}

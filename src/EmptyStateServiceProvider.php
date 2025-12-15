<?php

namespace MrShaneBarron\EmptyState;

use Illuminate\Support\ServiceProvider;
use MrShaneBarron\EmptyState\Livewire\EmptyState;
use MrShaneBarron\EmptyState\View\Components\EmptyState as BladeEmptyState;

class EmptyStateServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/sb-empty-state.php', 'sb-empty-state');
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'sb-empty-state');

        if (class_exists(\Livewire\Livewire::class)) {
            \Livewire\Livewire::component('sb-empty-state', EmptyState::class);
        }

        $this->loadViewComponentsAs('ld', [
            BladeEmptyState::class,
        ]);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/sb-empty-state.php' => config_path('sb-empty-state.php'),
            ], 'sb-empty-state-config');

            $this->publishes([
                __DIR__ . '/../resources/views' => resource_path('views/vendor/sb-empty-state'),
            ], 'sb-empty-state-views');
        }
    }
}

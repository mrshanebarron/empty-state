<?php

namespace MrShaneBarron\EmptyState;

use Illuminate\Support\ServiceProvider;

class EmptyStateServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (class_exists(\Livewire\Livewire::class)) {
            \Livewire\Livewire::component('sb-empty-state', Livewire\EmptyState::class);
        }
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'sb-empty-state');
    }
}

<?php

namespace MrShaneBarron\EmptyState;

use Illuminate\Support\ServiceProvider;

class EmptyStateServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (class_exists(\Livewire\Livewire::class)) {
            \Livewire\Livewire::component('ld-empty-state', Livewire\EmptyState::class);
        }
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ld-empty-state');
    }
}

<?php

namespace MrShaneBarron\EmptyState\Livewire;

use Livewire\Component;

class EmptyState extends Component
{
    public ?string $title = null;
    public ?string $description = null;
    public ?string $icon = null;
    public ?string $actionLabel = null;
    public ?string $actionUrl = null;

    public function mount(?string $title = null, ?string $description = null, ?string $icon = null, ?string $actionLabel = null, ?string $actionUrl = null): void
    {
        $this->title = $title ?? 'No data found';
        $this->description = $description;
        $this->icon = $icon;
        $this->actionLabel = $actionLabel;
        $this->actionUrl = $actionUrl;
    }

    public function render()
    {
        return view('sb-empty-state::livewire.empty-state');
    }
}

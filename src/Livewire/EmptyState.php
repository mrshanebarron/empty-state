<?php

namespace MrShaneBarron\EmptyState\Livewire;

use Livewire\Component;

class EmptyState extends Component
{
    public string $title = 'No data found';
    public string $description = '';
    public string $icon = 'inbox';
    public ?string $actionLabel = null;
    public ?string $actionUrl = null;

    public function mount(
        string $title = 'No data found',
        string $description = '',
        string $icon = 'inbox',
        ?string $actionLabel = null,
        ?string $actionUrl = null
    ): void {
        $this->title = $title;
        $this->description = $description;
        $this->icon = $icon;
        $this->actionLabel = $actionLabel;
        $this->actionUrl = $actionUrl;
    }

    public function render()
    {
        return view('ld-empty-state::livewire.empty-state');
    }
}

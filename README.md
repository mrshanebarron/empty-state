# Laravel Design Empty State

Empty state placeholder component for Laravel. Supports Livewire, Blade, and Vue 3.

## Installation

```bash
composer require mrshanebarron/empty-state
```

## Usage

### Livewire Component

```blade
<livewire:ld-empty-state />
```

### Blade Component

```blade
<x-ld-empty-state />
```

## Configuration

Publish the config file:

```bash
php artisan vendor:publish --tag=ld-empty-state-config
```

## Customization

### Publishing Views

```bash
php artisan vendor:publish --tag=ld-empty-state-views
```

## License

MIT

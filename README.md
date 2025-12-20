# Empty State

An empty state placeholder component for Laravel applications. Displays friendly messages when content is missing. Works with Livewire and Vue 3.

## Installation

```bash
composer require mrshanebarron/empty-state
```

## Livewire Usage

### Basic Usage

```blade
<livewire:sb-empty-state
    title="No items found"
    description="Get started by creating your first item."
/>
```

### With Icon

```blade
<livewire:sb-empty-state
    title="No messages"
    description="Your inbox is empty."
    icon="inbox"
/>
```

### With Action Button

```blade
<livewire:sb-empty-state
    title="No projects"
    description="Create a project to get started."
    action-text="Create Project"
    action-url="/projects/create"
/>
```

### Livewire Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | string | `'No items'` | Main heading |
| `description` | string | `null` | Subtext description |
| `icon` | string | `null` | Icon name/type |
| `action-text` | string | `null` | Button text |
| `action-url` | string | `null` | Button link |

## Vue 3 Usage

### Setup

```javascript
import { SbEmptyState } from './vendor/sb-empty-state';
app.component('SbEmptyState', SbEmptyState);
```

### Basic Usage

```vue
<template>
  <SbEmptyState
    title="No results found"
    description="Try adjusting your search or filters."
  />
</template>
```

### With Icon

```vue
<template>
  <SbEmptyState
    title="No notifications"
    description="You're all caught up!"
    icon="bell"
  />
</template>
```

### With Action

```vue
<template>
  <SbEmptyState
    title="No team members"
    description="Invite your team to collaborate."
    action-text="Invite Team"
    @action="openInviteModal"
  />
</template>

<script setup>
const openInviteModal = () => {
  // Handle action
};
</script>
```

### Conditional Rendering

```vue
<template>
  <div v-if="items.length > 0">
    <!-- List items -->
  </div>
  <SbEmptyState
    v-else
    title="No items yet"
    description="Create your first item to get started."
    action-text="Create Item"
    @action="createItem"
  />
</template>
```

### Custom Slot Content

```vue
<template>
  <SbEmptyState title="Custom Content">
    <template #icon>
      <MyCustomIcon class="w-12 h-12 text-gray-400" />
    </template>

    <template #description>
      <p class="text-gray-500">
        Need help? <a href="/docs" class="text-blue-500">Read the docs</a>
      </p>
    </template>

    <template #action>
      <div class="flex gap-2">
        <button class="btn-primary">Create</button>
        <button class="btn-secondary">Import</button>
      </div>
    </template>
  </SbEmptyState>
</template>
```

### Vue Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `title` | String | `'No items'` | Heading text |
| `description` | String | `null` | Description text |
| `icon` | String | `null` | Icon identifier |
| `actionText` | String | `null` | Action button text |
| `actionUrl` | String | `null` | Action link URL |

### Events

| Event | Description |
|-------|-------------|
| `action` | Button clicked (when no actionUrl) |

### Slots

| Slot | Description |
|------|-------------|
| `icon` | Custom icon content |
| `description` | Custom description content |
| `action` | Custom action buttons |

## Common Use Cases

- Empty search results
- No data in tables
- Empty inbox/notifications
- New user onboarding
- Filtered results with no matches

## Styling

Uses Tailwind CSS:
- Centered layout
- Gray icon
- Large title text
- Muted description
- Primary action button

## Requirements

- PHP 8.1+
- Laravel 10, 11, or 12
- Tailwind CSS 3.x

## License

MIT License

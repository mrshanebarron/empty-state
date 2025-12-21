<div style="text-align: center; padding: 3rem 1.5rem;">
    @if($this->icon)
        <div style="margin: 0 auto 1rem; width: 3rem; height: 3rem; color: #9ca3af;">{!! $this->icon !!}</div>
    @else
        <svg style="margin: 0 auto 1rem; width: 3rem; height: 3rem; color: #9ca3af;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
        </svg>
    @endif

    <h3 style="font-size: 1.125rem; font-weight: 500; color: #111827; margin-bottom: 0.25rem;">{{ $this->title }}</h3>

    @if($this->description)
        <p style="font-size: 0.875rem; color: #6b7280; margin-bottom: 1rem;">{{ $this->description }}</p>
    @endif

    @if($this->actionLabel)
        <a
            href="{{ $this->actionUrl ?? '#' }}"
            style="display: inline-flex; align-items: center; padding: 0.5rem 1rem; background-color: #2563eb; color: white; font-size: 0.875rem; font-weight: 500; border-radius: 0.5rem; text-decoration: none;"
            onmouseover="this.style.backgroundColor='#1d4ed8'"
            onmouseout="this.style.backgroundColor='#2563eb'"
        >
            {{ $this->actionLabel }}
        </a>
    @endif
</div>

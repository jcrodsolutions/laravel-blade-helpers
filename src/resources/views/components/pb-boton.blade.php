<a href="{{ $url }}" class="{{ $classes }}">
    @if($icon)
    <span 
        @class([
            'fas fa-'.$icon,
            $iconClass => $iconClass
        ])
        @if($iconColor)style="color: {{ $iconColor }};"@endif
        >
    </span>
    @endif
    {{ $text }}
</a>
<a href="{{ $url }}" class="{{ $classes }}"  {{ $targetBlank?"target='_blank'":''  }}>
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
<div>
    <div class="input-group mb-{{ $mb }}">
        <span class="input-group-text icono fa-{{ $icon }}"></span>
        <div class="form-floating flex-grow-1">
            @if($type=='select')
            <select 
                class='form-select' 
                name='{{ $name }}'
                @if($id!==null)id="{{ $id }}" @endif
                >
                @foreach($datos??[] as $k=>$v)
                <option value='{{ $v[0] }}' @selected(($value??null)==$v[0])>{{ $v[1] }}</option>
                @endforeach
            </select>
            @else
            <input 
                @if($id!==null)id="{{ $id }}" @endif
                type="{{ $type }}" 
                class="form-control" 
                name="{{ $name }}" 
                value="{{ old($name) ?? $value ?? '' }}"
                @if($required) required @endif
                @if($readonly) readonly @endif
                @if($max!==null) max="{{ $max }}"@endif
                @if($min!==null) max="{{ $min }}"@endif
                @if($maxlength!==null) maxlength="{{ $maxlength }}"@endif
                @if($step!==null) step="{{ $step }}" @endif
                @if($selectOnClick===true) ss onclick="$(this).select()" @endif
                
                @foreach($otros as $k=>$v)
                {{ $k }}="{{ $v }}"
                @endforeach
                >
            @endif
            <label>{{ $label }}</label>
        </div>
    </div>
</div>
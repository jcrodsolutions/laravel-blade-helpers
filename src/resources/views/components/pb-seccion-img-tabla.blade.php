@if($titulo)
<x-lbh-pb-titulo-row :tituloRowClasses="$tituloRowClasses" :titulo="$titulo" />
@endif
<div class="row pt-3 d-none d-md-flex align-items-center">
    @if($col1offset)
    <div class='col-{{ $col1offset }}'></div>
    @endif
    <div @class([
          'col-'.$col1,
          'order-2' => $imgderecha, 
        ])>
        <img src="{{ $imgSrc }}" width="100%" class="rounded" alt="alt"/>
    </div>
    <div class="col-{{ $col2 }}">
        <table @class([$clasestabla])>
            <tr>
                <th>TITLE</th>
                <th class='text-center'>TITLE</th>
                <th class='text-center'>TITLE</th>
            </tr>
            @foreach($rows as $row)
            @php
            $fila=explode(';',$row->$locale);
            @endphp
            <tr>
                <td class="fw-bold">{{ $row->parametros->es }}</td>
                <td class='text-center'>{{ $fila[0] }}</td>
                <td class='text-center'>{{ $fila[1]??'---' }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
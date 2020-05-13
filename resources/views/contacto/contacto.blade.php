{{--Mi comentario de html--}}
<?php //Mi comentario de HTML?>
@include('contacto.cabecera')

<h1>Pagina de contacto {!!$nombre!!} {{--isset($edad) && !is_null($edad) ? $edad : "No existe la edad"--}}</h1>
<!-- IF -->
@if(is_null($edad))
    No existe la edad
@else 
    Si existe la edad: {{$edad}}
@endif
<br>
<br>
Tablas de multiplicar
<br>
<br>
<!-- FOR -->
@for($i=0;$i<=10;$i++)
<p>
Tabla del {{$i}}
<br>
<br>
    @for($x=0;$x<=10;$x++)
        {{$i.'x'. $x.'='.($i*$x)}}
        <br>
    @endfor
@endfor

@include('contacto.cabecera',array('nombre'=>$nombre))
<!-- WHILE -->
<?php $f=1?>
@while($f<=7)
    {{'Hola mundo'.$i}}
    <?php $f++ ?>
@endwhile

<!-- Foreach -->
@foreach($frutas as $fruta)
    {{$fruta}}
@endforeach

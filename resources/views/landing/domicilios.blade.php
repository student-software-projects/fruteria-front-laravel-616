@extends('layout.app')

@section('content')

    <h3>DOMICILIOS</h3>
    <a href="{{route('landing.index')}}">INICIO</a><br>
    <a href="{{route('landing.acercade')}}">ACERCA DE</a><br>
    <a href="{{route('landing.contact')}}">CONTACTO</a><br>
<br>LISTA<br>
    20 moras para suba calle 32 n13 123 para el miercoles 11<br>
    5 sandias para el recreo calle5 n27 12 jueves 12<br>
    10 manzanas para bosa calle 46 n5 34 lunes 16<br>

@endsection

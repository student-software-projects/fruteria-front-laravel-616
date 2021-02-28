@extends('layout.app')

@section('content')

    <h3>ACERCA DE</h3>
    <a href="{{route('landing.index')}}">INICIO</a><br>
    <a href="{{route('landing.servicio')}}">SERVICIO</a><br>
    <a href="{{route('landing.contact')}}">CONTACTO</a><br>
<br>Fruteria Frutas de mi Bosque<br>
<br>Mision:<br>
    Dar a los clientes un buen servicio y traer frutos de calidad<br>

    <br>Vision:<br>
    extenderse a mas mercados<br>

    <br>Dueños:<br>
    Nombre: Ana Milena Ruiz Rojas <br>
    Nombre: Hernando Perez Vallesteros<br>

@endsection

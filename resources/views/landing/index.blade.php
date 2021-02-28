@extends('layout.app')

@section('content')

    <h3>INICIO</h3>
    <a href="{{route('landing.servicio')}}">SERVICIO</a> <br>
    <a href="{{route('landing.acercade')}}">ACERCA DE</a> <br>
    <a href="{{route('landing.contact')}}">CONTACTO</a><br>
    <br>MANGO<br>
    Es una fruta muy dulce<br>
    <img src="mango.jpg">

    <br>SANDIA<br>
    suele desvanecerse en la boca<br>
    <img src="sandias.jpg">

    <br>NARANJA<br>
    aveces se pone dulce pero no le quita el toque citrico<br>
   <img src="naranja.jpg">

    <br>MANZANA<br>
    puede ser dulce o citrica y un poco dura<br>
   <img src="manzana.jpg">

    <br>MORA<br>
    tiene un sabor citrico<br>
    <img src="29.jpg">

    <br>KIWI<br>
    tambien un poco citrico pero sigue siendo delicioso<br>
    <img src="descarga.jpg">

    <br>COCO<br>
    es duro y seco cuando se mastica constantemente<br>
    <img src="coco.jpg">

@endsection

@extends('layouts.landingPage')

@section('title','Sobre Nosotros')

@section('header')
    <h1>Conocenos</h1>
@endsection
@section('content')
    @component('_components.card')
        @slot('title','Nuestra Historia')
        @slot('content','Empresa creada en 1986')
    @endcomponent
    @component('_components.card')
        @slot('title',' Nuestra Misión')
        @slot('content','Ser la mejor empresa de desarrollo de software')
    @endcomponent
@endsection


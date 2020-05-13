@extends('layouts.master')


@section('contenido')
<div class="right custom-social">
    <a href="{{URL::to('https://twitter.com/Blogarmariomar1')}}"><img class='twitter' src={{asset('imagenes/twitter.png')}} alt="Twitter"></a>
    <a href="{{URL::to('https://www.facebook.com/maria.acostaprieto.3')}}"><img class='facebook' src={{asset('imagenes/facebook.png')}} alt="Facebook"></a>
    <a href="{{URL::to('https://www.instagram.com/blogarmariomaria/?hl=es')}}"><img class='instagram' src={{asset('imagenes/instagram.png')}} alt="Instagram"></a>
</div>
<div>    <!--class="flex-center position-ref full-height"-->
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    El armario de Maria
                </div>
                <nav><ul>
                    <li><a href="{{ url('index') }}">Inicio</a></li>
                     <li><a href="#">Categorias</a>
                        <ul><li><a href="{{ url('belleza') }}">Belleza</a></li>
                            <li><a href="{{ url('moda') }}">Moda</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('acercade') }}">Acerca de</a></li>
                    <li><a href="{{ url('contacto') }}">Contacto</a></li>
             </ul>
             </nav>
        </div>
<h1>BELLEZA</h1>
<div class="wp-block-image">
    <p>
    <a style="text-decoration: none;
    color:#C603C6;
    border-bottom: 1px solid" href="{{ url('belleza1') }}" alt="3 consejos para comenzar bien el dia">
        3 consejos para comenzar bien el dia
    </p>
    <img src="{{ asset('imagenes/fotos/habitacion.jpg') }}" alt="" width="300" height="350">
</div>
<div class="wp-block-image">
    <p>
    <a style="text-decoration: none;
    color:#C603C6;
    border-bottom: 1px solid" href="{{ url('belleza2') }}" alt="piel limpia y fresca">
        Piel limpia y fresca
    </p>
    <img src="{{ asset('imagenes/fotos/habitacion.jpg') }}" alt="" width="300" height="350">
</div>

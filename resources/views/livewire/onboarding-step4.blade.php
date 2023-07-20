


@extends('layouts.app')

@section('title', 'Página de Inicio')

@section('content')
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-11">
        <h3><span class="gradient-text">¿A qué sector</span> pertenece tu empresa?</h3>
    </div>
</div>
<div class="row"> 
   
    <div class="col-md-1  order-md-first"></div>
    <div class="col-md-5 order-md-first order-last">
        <div class="option " data-option="1">
            <p style="margin-bottom:4px" class="title">Tiendas,comercios y bienes físicos.</p>
            <p class="list">Productos, materiales, ropa, regalos, artículos para mascotas, tienda de productos, bicicletas, lencería, droguería,...</p>
        </div>
        <div class="option " data-option="2">
            <p style="margin-bottom:4px" class="title">Construcción e Industria.</p>
            <p class="list">Contrucción, alquiler de maquinarias, piscinas, instalaciones, carpintería, contrucciones metallicas, reformas, obras, cerámica, mármoles, materiales, domótica, promotora,...</p>
        </div>
        <div  class="option " data-option="3">
            <p style="margin-bottom:4px" class="title">Ocio y Turismo.</p>
            <p class="list">Restaurante, bar, spa, turismo, comida, alojamiento, alojamiento rural, ajencia de viajes,...</p>
        </div>
        <div class="option " data-option="4">
          <p> Otros.</p>
        </div>
        <a style="text-decoration:none" href="{{ route('onboarding.step3') }}" class=" css-button-sliding-to-left--red">Volver</a>
    <a style="text-decoration:none" href="{{ route('onboarding.step5') }}" class="css-button-sliding-to-left--sky">Siguiente</a>
    </div>
 
    <div class="col-md-5 order-md-last order-first">
        <div class="option selected " data-option="5">
            <p style="margin-bottom:4px" class="title">Ciencia, Tecnología e Ingeniería.</p>
            <p class="list">Productos digitales, diseño web, plataformas online, ecommerce, robótica, ingeniería, energía solar,...</p>
        </div>
        <div class="option " data-option="6">
            <p style="margin-bottom:4px" class="title">Servicios Profesionales.</p>
            <p class="list">Electricidad, fontanería, transporte, fotografía, informática, publicidad, coaching, cerrajería, decoración, pintor, jardinería, arquitecto, abogado, inmobiliaria,...</p>
        </div>
        <div style="height: 6rem" class="option " data-option="7">
            <p style="margin-bottom:4px" class="title">Medicina, Salud y Belleza.</p>
            <p class="list">Podología, clínica dental, salón de belleza, peluquería, óptica,...</p>
        </div>
        
    </div>
    <div class="col-md-1  order-md-last"></div>
    
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   
    $(document).ready(function() {
        $(".option").click(function() {
            $(".option").removeClass("selected");
            $(this).addClass("selected");
        });
    });
</script>
@endsection


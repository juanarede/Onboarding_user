@extends('layouts.app')

@section('title', 'Página de Inicio')

@section('content')


<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-5">
        <h3>Escribe<span class="gradient-text"> 3 Servicios</span> que ofrezca <br> tu empresa...</h3>
       
        <form id="myForm">
            <div class="input-wrapper">
                <input type="text" name="servicio1" placeholder="Servicio 1" required>
                <div class="input-line"></div>
            </div>
            <div class="input-wrapper">
                <input type="text" name="servicio2" placeholder="Servicio 2" required>
                <div class="input-line"></div>
            </div>
            <div class="input-wrapper">
                <input type="text" name="servicio3" placeholder="Servicio 3" required>
                <div class="input-line"></div>
            </div>
            <a style="text-decoration:none" href="{{ route('onboarding.step2') }}" class="css-button-sliding-to-left--red">Volver</a>
            <a style="text-decoration:none" href="#" onclick="validarFormulario()" class="css-button-sliding-to-left--sky">Siguiente</a>
        </form>
    </div>
    <div class="col-md-3 d-none d-md-block">
        <div class="box"></div>
    </div>
</div>

<script>
    function validarFormulario() {
        var servicio1 = document.forms["myForm"]["servicio1"].value;
        var servicio2 = document.forms["myForm"]["servicio2"].value;
        var servicio3 = document.forms["myForm"]["servicio3"].value;
        
        if (servicio1 === "" || servicio2 === "" || servicio3 === "") {
            alert("Por favor, complete todos los campos antes de continuar.");
        } else {
           
            window.location.href = "{{ route('onboarding.step4') }}";
        }
    }
</script>
@endsection

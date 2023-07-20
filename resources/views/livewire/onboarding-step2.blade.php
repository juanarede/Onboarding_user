@extends('layouts.app')

@section('title', 'Página de Inicio')

@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-5">
        <h3><span class="gradient-text">Indica el Nombre</span> de tu empresa <br> y un slogan...</h3>
       
        <form id="myForm">
            <div class="input-wrapper">
                <input type="text" name="empresa" placeholder="Nombre de la Empresa" required>
                <div class="input-line"></div>
            </div>
              
            <div class="input-wrapper">
                <input type="text" name="slogan" placeholder="Indique su slogan" required>
                <div class="input-line"></div>
            </div>
            <a style="text-decoration:none" href="{{ route('onboarding.step1') }}" class="css-button-sliding-to-left--red">Volver</a>
            <a style="text-decoration:none" href="#" onclick="validarFormulario()" class="css-button-sliding-to-left--sky">Siguiente</a>
        </form>
    </div>
    <div class="col-md-3 d-none d-md-block">
        <div class="box"></div>
    </div>
</div>

<script>
    function validarFormulario() {
        var empresa = document.forms["myForm"]["empresa"].value;
        var slogan = document.forms["myForm"]["slogan"].value;
        
        if (empresa === "" || slogan === "") {
            alert("Por favor, complete todos los campos antes de continuar.");
        } else {
      
            window.location.href = "{{ route('onboarding.step3') }}";
        }
    }
</script>
@endsection



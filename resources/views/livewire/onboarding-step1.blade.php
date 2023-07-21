@extends('layouts.app')


@section('title', 'default')


@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
            <h3 ><span class="gradient-text">¡Customer </span>, vamos a crear <br> tu cuenta!</h3>
        <p>Elige tu perfil para empezar a usar la plataforma...</p>
        <ul class="custom-list">
            <li class="custom-list-item"><a href="{{ route('onboarding.step2') }}" class="custom-link">Autóno/Empresa</a></li>
            <li class="custom-list-item"><a href="{{ route('onboarding.step2') }}" class="custom-link">Community Manager</a></li>
            <li class="custom-list-item"><a href="{{ route('onboarding.step2') }}" class="custom-link">Agencia</a></li>
            <li class="custom-list-item"><a href="{{ route('onboarding.step2') }}" class="custom-link">Otro Usuario</a></li>
        </ul>
      
     
    </div>
    <div class="col-md-4 d-none d-md-block">
        <div class="box"></div>
    </div>
</div>



    
   
@endsection

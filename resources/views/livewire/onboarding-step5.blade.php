@extends('layouts.app')


@section('title', 'default')


@section('content')

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-5">
            <h3 ><span class="gradient-text">Para Terminar</span>,¿Podría decirnos<br> cómo nos has conocido?</h3>
    
            <div class="row mt-4">
                <div class="col-md-6">
                    <ul class="custom-list">
                        <li class="custom-list-item"><a href="#" class="custom-link" data-option="Google">Google</a></li>
                        <li class="custom-list-item"><a href="#" class="custom-link" data-option="Facebook">Facebook</a></li>
                        <li class="custom-list-item"><a href="#" class="custom-link" data-option="Instagram">Instagram</a></li>
                        <li class="custom-list-item"><a href="#" class="custom-link" data-option="Linkedin">Linkedin</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="custom-list">
                        <li class="custom-list-item"><a href="#" class="custom-link" data-option="Twitter">Twitter</a></li>
                        <li class="custom-list-item"><a href="#" class="custom-link" data-option="Email">Email</a></li>
                        <li class="custom-list-item"><a href="#" class="custom-link" data-option="Amigo">A través de un amigo</a></li>
                        <li class="custom-list-item"><a href="#" class="custom-link" data-option="Otro">Otro canal</a></li>
                    </ul>
                    
                </div>
                
            </div>
            <a style="text-decoration:none" href="{{ route('onboarding.step4') }}" class=" css-button-sliding-to-left--red">Volver</a>
            <a style="text-decoration:none"  class="css-button-sliding-to-left--sky view-modal">Finalizar</a>
             
    </div>
    <div class="col-md-3 d-none d-md-block">
        <div class="box"></div>
    </div>
</div>


<div class="popup">
    <header>
      <div class="close"><i class="fa-solid fa-xmark" style="color: #000000;"></i></div>
    </header>
    <div class="content">
      <div class="field">
        <h1>Muchas Gracias</h1>
        <span>🎉</span> 
      </div>
    </div>
  </div>
  


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    $(document).ready(function() {
        $(".custom-link").click(function(e) {
            e.preventDefault();
            $(".custom-link").removeClass("selected");
            $(this).addClass("selected");
        });
    });
</script>

<script>
  const viewBtn = document.querySelector(".view-modal"),
    popup = document.querySelector(".popup"),
    close = popup.querySelector(".close"),
    field = popup.querySelector(".field"),
    input = field.querySelector("input"),
    copy = field.querySelector("button");

    viewBtn.onclick = ()=>{
      popup.classList.toggle("show");
    }
    close.onclick = ()=>{
      viewBtn.click();
    }

    copy.onclick = ()=>{
      input.select(); 
      if(document.execCommand("copy")){
        field.classList.add("active");
        copy.innerText = "Copied";
        setTimeout(()=>{
          window.getSelection().removeAllRanges(); 
          field.classList.remove("active");
          copy.innerText = "Copy";
        }, 3000);
      }
    }
</script>


@endsection

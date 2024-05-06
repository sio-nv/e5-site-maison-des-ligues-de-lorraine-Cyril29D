<!--La page suit le modèle de page "modele.blade.php"-->
@extends('layout.modele')

<!-- Commence ici le corps de la page -->
@section('content')
      <!-- Content -->
      <article>

        <header class="section background-dark">
          <div class="line">        
            <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Evènements à la maison des ligues.</h1>
            <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>

          </div>  
        </header>
        <div class="section background-white"> 
        @foreach  ($evenements as $events)

        
  
        <div class="section background-white"> 
          <div class="line">  
          <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ $events->intitule }}/ {{ $events->lieu }}
    </button>
    <ul class="dropdown-menu">
    <li><h3 class="text-size-40 margin-bottom-30"></h2></li>
            <h4>{{ $events->date_deb }} / {{ $events->date_fin }}</h3>
            <hr class="break-small background-primary margin-bottom-30">
            
            <div class="line margin-top-30">
              <div class="margin">
                <div class="s-9 m-6 l-6">
              <img src="{{ asset('/img/evenements/'.$events->url_image) }}" alt="">

              </div>
                <div class="s-12 m-6 l-6">
                  <p class="margin-top-30">
                  {{ $events->details }}
                  </p>
                  </option>
                </div>
              </div>
            </div>      
          </div>
        </div>
      </article>
    <!-- termine le corps de la page -->
        @endforeach
        
@endsection
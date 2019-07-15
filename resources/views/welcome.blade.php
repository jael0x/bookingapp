@extends('layouts.app')

@section('content')
<section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          @php 
            $firsteventos = [ $eventos[0] ]
          @endphp

          @foreach ($firsteventos as $fevento)
          <div class="carousel-item active">
            <div class="carousel-background"><img src="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>{{$fevento['nombre']}}</h2>
                <p>{{$fevento['descripcion']}}</p>
              </div>
            </div>
          </div>
          @endforeach

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
</section><!-- #intro -->

<main id="main">
        <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
            <div class="container">
      
              <header class="section-header">
                <h3 class="section-title">Eventos</h3>
              </header>
      
              {{-- <div class="row">
                <div class="col-lg-12">
                  <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                  </ul>
                </div>
              </div> --}}
      
              <div class="row portfolio-container">
      
                @foreach ($eventos as $evento)
                    {{-- {{dd($evento)}} --}}
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.1s">
                      <div class="portfolio-wrap">
                        <figure>
                          {{-- <a href="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a> --}}
                          <a href="{{ '/evento/'.$evento['evento_id'] }}">
                            <img src="https://images.unsplash.com/photo-1533174072545-7a4b6ad7a6c3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="img-fluid" alt="">
                          </a>
                        </figure>
          
                        <div class="portfolio-info">
                          <h4><a href="#">{{ $evento['nombre'] }}</a></h4>
                          <p>{{ $evento['descripcion'] }}</p>
                        </div>
                      </div>
                    </div>
                @endforeach
      
              </div>
      
            </div>
          </section><!-- #portfolio -->
          
</main>
@endsection


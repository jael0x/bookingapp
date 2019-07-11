@extends('layouts.app')

@section('content')
<section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>We are professional</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>At vero eos et accusamus</h2>
                <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Temporibus autem quibusdam</h2>
                <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste natus error sit voluptatem accusantium.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Nam libero tempore</h2>
                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Magnam aliquam quaerat</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
              </div>
            </div>
          </div>

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
                <h3 class="section-title">Our Portfolio</h3>
              </header>
      
              <div class="row">
                <div class="col-lg-12">
                  <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                  </ul>
                </div>
              </div>
      
              <div class="row portfolio-container">
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                  <div class="portfolio-wrap">
                    <figure>
                      <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
                      <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>
      
                    <div class="portfolio-info">
                      <h4><a href="#">App 1</a></h4>
                      <p>App</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                  <div class="portfolio-wrap">
                    <figure>
                      <img src="img/portfolio/web3.jpg" class="img-fluid" alt="">
                      <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>
      
                    <div class="portfolio-info">
                      <h4><a href="#">Web 3</a></h4>
                      <p>Web</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                  <div class="portfolio-wrap">
                    <figure>
                      <img src="img/portfolio/app2.jpg" class="img-fluid" alt="">
                      <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>
      
                    <div class="portfolio-info">
                      <h4><a href="#">App 2</a></h4>
                      <p>App</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                  <div class="portfolio-wrap">
                    <figure>
                      <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
                      <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>
      
                    <div class="portfolio-info">
                      <h4><a href="#">Card 2</a></h4>
                      <p>Card</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                  <div class="portfolio-wrap">
                    <figure>
                      <img src="img/portfolio/web2.jpg" class="img-fluid" alt="">
                      <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>
      
                    <div class="portfolio-info">
                      <h4><a href="#">Web 2</a></h4>
                      <p>Web</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                  <div class="portfolio-wrap">
                    <figure>
                      <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
                      <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>
      
                    <div class="portfolio-info">
                      <h4><a href="#">App 3</a></h4>
                      <p>App</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                  <div class="portfolio-wrap">
                    <figure>
                      <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
                      <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>
      
                    <div class="portfolio-info">
                      <h4><a href="#">Card 1</a></h4>
                      <p>Card</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
                  <div class="portfolio-wrap">
                    <figure>
                      <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
                      <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>
      
                    <div class="portfolio-info">
                      <h4><a href="#">Card 3</a></h4>
                      <p>Card</p>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
                  <div class="portfolio-wrap">
                    <figure>
                      <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
                      <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </figure>
      
                    <div class="portfolio-info">
                      <h4><a href="#">Web 1</a></h4>
                      <p>Web</p>
                    </div>
                  </div>
                </div>
      
              </div>
      
            </div>
          </section><!-- #portfolio -->
          
</main>
@endsection


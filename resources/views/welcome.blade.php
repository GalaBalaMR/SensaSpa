<x-guest-layout>
<!-- ======= Get Started Section ======= -->
<section id="about" class="get-started section-bg">
  <div class="container d-lg-flex justify-content-center d">

    <div class="row justify-content-between gy-4">

      <div class="col-lg-6 d-flex align-items-center flex-column" data-aos="fade-up">
        <div class="content">
          
          {!!  $contents->where('name', 'about')->first()->content  !!}

        </div>
        @If(Auth::check() && Auth::user()->is_admin)
            @include('content.partials.form', ['content' => $contents->where('name', 'about')->first()])
        @endif
      </div>
      <div class="col-lg-5" data-aos="fade">
        <form action="{{ route('infomail') }}" method="post" class="p" id="contaktMail">
          @csrf
          @method('post')
          <h3>Napíšte nám!</h3>
          <p>V prípade akýchkoľvek otázok nás neváhajte kontaktovať. Môžte nám napísat na <a href="mailto:info@wooddream.sk">info@wooddream.sk</a>, alebo cez náš kontaktný formulár.</p>
          <div class="row gy-3">

            <div class="col-md-12">
              <input type="text" name="name" class="form-control mail-input" placeholder="Name" value="{{old('name')}}"required>
            </div>

            <div class="col-md-12 ">
              <input type="email" class="form-control mail-input" name="email" placeholder="Email" value="{{old('email')}}" required>
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control mail-input" name="phone" placeholder="Phone" value="{{old('phone')}}" required>
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
            </div>

            <div class="col-md-12">
              <input class="form-check-input" type="checkbox" value="" id="CheckAgreement">
              <label class="form-check-label" for="CheckAgreement">
                Súhlasím so <a href="{{ route('ochrana-osobnych-udajov') }}" class="link-warning">spracovaním osobných údajov.</a>
              </label>
            </div>

            <div class="col-md-12 text-center">
              <button type="submit" class="btn btn-warning rounded-pill text-light">Odoslať</button>
            </div>

          </div>
        </form>
      </div><!-- End Quote Form -->

    </div>
    
  </div>
  
  <!-- ======= Services Section ======= -->
  <div id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Pravidlá prístupu</h2>
        <p>Pri mojom podnikaní sa snažím dodržiavať tieto veci.</p>
      </div>

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item  position-relative">
            <div class="icon">
              <i class="fa-regular fa-handshake"></i>
            </div>

            {!!  $contents->where('name', 'service_first')->first()->content  !!}

            @If(Auth::check() && Auth::user()->is_admin)
                @include('content.partials.form', ['content' => $contents->where('name', 'service_first')->first()])
            @endif
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa fa-wrench ms-1"></i>
            </div>
            {!!  $contents->where('name', 'service_second')->first()->content  !!}

            @If(Auth::check() && Auth::user()->is_admin)
                @include('content.partials.form', ['content' => $contents->where('name', 'service_second')->first()])
            @endif
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-compass-drafting ms-1"></i>
            </div>
            {!!  $contents->where('name', 'service_third')->first()->content  !!}

            @If(Auth::check() && Auth::user()->is_admin)
                @include('content.partials.form', ['content' => $contents->where('name', 'service_third')->first()])
            @endif
            
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-truck fas"></i>
            </div>
            {!!  $contents->where('name', 'service_four')->first()->content  !!}

            @If(Auth::check() && Auth::user()->is_admin)
                @include('content.partials.form', ['content' => $contents->where('name', 'service_four')->first()])
            @endif
            
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-sack-dollar ms-1"></i>
            </div>
            {!!  $contents->where('name', 'service_five')->first()->content  !!}

            @If(Auth::check() && Auth::user()->is_admin)
                @include('content.partials.form', ['content' => $contents->where('name', 'service_five')->first()])
            @endif
            
          </div>
        </div><!-- End Service Item -->

        

      </div>

    </div>
  </div><!-- End Services Section -->
    
</section><!-- End Get Started Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features section-bg">
  <div class="container" data-aos="fade-up">

    <ul class="nav nav-tabs row  g-2 d-flex">

      <li class="nav-item col-4">
        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
          <h4>Kuchyne</h4>
        </a>
      </li><!-- End tab nav item -->

      <li class="nav-item col-4">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
          <h4>Vstavané skrine</h4>
        </a><!-- End tab nav item -->

      <li class="nav-item col-4">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
          <h4>Nábytky</h4>
        </a>
      </li><!-- End tab nav item -->

    </ul>

    <div class="tab-content">

      <div class="tab-pane active show" id="tab-1">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
            {!!  $contents->where('name', 'feature_kitchen')->first()->content  !!}

            @If(Auth::check() && Auth::user()->is_admin)
                @include('content.partials.form', ['content' => $contents->where('name', 'feature_kitchen')->first()])
            @endif
          </div>
          <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
            <img src="{{ Storage::url('public/theme_img/features-1.jpg') }}" alt="" class="img-fluid">
          </div>
        </div>
      </div><!-- End tab content item -->

      <div class="tab-pane" id="tab-2">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
            {!!  $contents->where('name', 'feature_wardrobe')->first()->content  !!}

            @If(Auth::check() && Auth::user()->is_admin)
                @include('content.partials.form', ['content' => $contents->where('name', 'feature_wardrobe')->first()])
            @endif
          </div>
          <div class="col-lg-6 order-1 order-lg-2 text-center">
            <img src="{{ Storage::url('public/theme_img/features-2.jpg') }}" alt="" class="img-fluid">
          </div>
        </div>
      </div><!-- End tab content item -->

      <div class="tab-pane" id="tab-3">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
            {!!  $contents->where('name', 'feature_furniture')->first()->content  !!}

            @If(Auth::check() && Auth::user()->is_admin)
                @include('content.partials.form', ['content' => $contents->where('name', 'feature_furniture')->first()])
            @endif
          </div>
          <div class="col-lg-6 order-1 order-lg-2 text-center">
            <img src="{{ Storage::url('public/theme_img/features-3.jpg') }}" alt="" class="img-fluid">
          </div>
        </div>
      </div><!-- End tab content item -->

    </div>

  </div>
</section><!-- End Features Section -->
        
<!-- ======= Constructions Section ======= -->
<section id="constructions" class="constructions">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>Ako pracujem</h2>
      <p>Som najlepší remeselník</p>
    </div>

    <div class="row gy-4">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="card-item">
          <div class="row">
            <div class="col-xl-5">
              <div class="card-bg" style="background-image: url({{ Storage::url('public/theme_img/constructions-1.jpg') }});"></div>
            </div>
            <div class="col-xl-7 d-flex align-items-center">
              <div class="card-body">
                {!!  $contents->where('name', 'construction_first')->first()->content  !!}

                @If(Auth::check() && Auth::user()->is_admin)
                  @include('content.partials.form', ['content' => $contents->where('name', 'construction_first')->first()])
                @endif
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Card Item -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="card-item">
          <div class="row">
            <div class="col-xl-5">
              <div class="card-bg" style="background-image: url({{ Storage::url('public/theme_img/constructions-2.jpg') }});"></div>
            </div>
            <div class="col-xl-7 d-flex align-items-center">
              <div class="card-body">
                {!!  $contents->where('name', 'construction_second')->first()->content  !!}

                @If(Auth::check() && Auth::user()->is_admin)
                  @include('content.partials.form', ['content' => $contents->where('name', 'construction_second')->first()])
                @endif
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Card Item -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
        <div class="card-item">
          <div class="row">
            <div class="col-xl-5">
              <div class="card-bg" style="background-image: url({{ Storage::url('public/theme_img/constructions-3.jpg') }});"></div>
            </div>
            <div class="col-xl-7 d-flex align-items-center">
              <div class="card-body">
                {!!  $contents->where('name', 'construction_third')->first()->content  !!}

                @If(Auth::check() && Auth::user()->is_admin)
                    @include('content.partials.form', ['content' => $contents->where('name', 'construction_third')->first()])
                @endif
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Card Item -->

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
        <div class="card-item">
          <div class="row">
            <div class="col-xl-5">
              <div class="card-bg" style="background-image: url({{ Storage::url('public/theme_img/constructions-4.jpg') }});"></div>
            </div>
            <div class="col-xl-7 d-flex align-items-center">
              <div class="card-body">
                {!!  $contents->where('name', 'construction_four')->first()->content  !!}

                @If(Auth::check() && Auth::user()->is_admin)
                    @include('content.partials.form', ['content' => $contents->where('name', 'construction_four')->first()])
                @endif
              </div>
            </div>
          </div>
        </div>
      </div><!-- End Card Item -->

    </div>

  </div>
</section><!-- End Constructions Section -->

<!-- Projects Section -->
<section id="projects" class="projects">
  <div class="container" data-aos="fade-up">

    <div class="section-header pb-3">
      <h2>Our Projects</h2>
      <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p>
    </div>
    <div class="text-center">
      @If(Auth::check() && Auth::user()->is_admin)
      <a href="{{ route('admin.projects.create') }}" class="btn btn-warning rounded-pill text-light mb-3">
        Vytvoriť projekt
      </a>
      @else 
      <a href="#contaktMail" class="btn btn-warning rounded-pill text-light mb-3">
        Mám záujem!
      </a>
      @endif


    </div>
    <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

      <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-skriňa">Vstavané skrine</li>
        <li data-filter=".filter-kuchyňa">Kuchyne</li>
        <li data-filter=".filter-nábytok">Nábytky</li>
        <li data-filter=".filter-ostatné">Ostatné</li>
      </ul><!-- End Projects Filters -->

      <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

        @forelse($projects as $project)
        <div class="card portfolio-item filter-{{ $project->kind }} col-lg-3 p-0" style="background: #dee2eb33;">
          <div class="card-img-top">

            <div id="carousel-{{ $project->id }}" class="carousel slide" data-bs-ride="false">
              
              <div class="carousel-inner">
                @foreach($imgs = explode("|", $project->images) as $image)

                @If($loop->first)
                <div class="carousel-item active">
                  <img src="{{ Storage::url($image) }}" class="d-block w-100  rounded-top" alt="...">
                  <div class="carousel-caption d-none d-md-block">

                    {{-- on click showing gallery --}}
                    <a href="{{ Storage::url($image) }}" title="{{ $project->name }}" data-gallery="portfolio-gallery-{{ $project->kind }}" class="glightbox preview-link position-absolute top-0 start-100 translate-middle ms-3 mt-4">
                      <i class="bi bi-zoom-in px-2"></i>
                    </a>
                  </div>
                </div>
                @continue
                @endif
                <div class="carousel-item">
                  <img src="{{ Storage::url($image) }}" class="d-block w-100  rounded-top" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    
                    {{-- on click showing gallery --}}
                    <a href="{{ Storage::url($image) }}" title="{{ $project->name }}" data-gallery="portfolio-gallery-{{ $project->kind }}" class="glightbox preview-link position-absolute top-0 start-100 translate-middle ms-3 mt-4">
                      <i class="bi bi-zoom-in px-2"></i>
                    </a>
                  </div>
                </div>

                @endforeach
                
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carousel-{{ $project->id }}" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next h-50 my-auto" type="button" data-bs-target="#carousel-{{ $project->id }}" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="card-body text-center">
            <h5 class="card-title">
              {{ $project->name }}
            </h5>
            <p class="card-text mb-0">
              {{ $project->more }}
              <hr>
              {{ $project->description}}

              {{-- Item for update and delete --}}
              @If(Auth::check() && Auth::user()->is_admin)
              <div class="d-flex justify-content-between align-items-center">
    
                <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn link-success pb-1 fw-bold">editovať</i></a>

                <form action="{{ route('admin.projects.destroy', $project->id) }}"
                  method="POST"
                  onsubmit="return confirm('Určite chceš vymazať?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn link-danger fw-bold">zahodiť</button>
                </form>

              </div>
              @endif
            </p>
          </div>
        </div>
        @empty
        @endforelse
      
      </div><!-- End Projects Container -->

    </div>

  </div>
</section><!-- End Our Projects Section -->

        {{-- <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
          <div class="container" data-aos="fade-up">
    
            <div class="section-header">
              <h2>Testimonials</h2>
              <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
            </div>
    
            <div class="slides-2 swiper">
              <div class="swiper-wrapper">
    
                <div class="swiper-slide">
                  <div class="testimonial-wrap">
                    <div class="testimonial-item">
                      <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                      <h3>Saul Goodman</h3>
                      <h4>Ceo &amp; Founder</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                  <div class="testimonial-wrap">
                    <div class="testimonial-item">
                      <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                      <h3>Sara Wilsson</h3>
                      <h4>Designer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                  <div class="testimonial-wrap">
                    <div class="testimonial-item">
                      <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                      <h3>Jena Karlis</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                  <div class="testimonial-wrap">
                    <div class="testimonial-item">
                      <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                      <h3>Matt Brandon</h3>
                      <h4>Freelancer</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
    
                <div class="swiper-slide">
                  <div class="testimonial-wrap">
                    <div class="testimonial-item">
                      <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                      <h3>John Larson</h3>
                      <h4>Entrepreneur</h4>
                      <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        <i class="bi bi-quote quote-icon-left"></i>
                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                </div><!-- End testimonial item -->
    
              </div>
              <div class="swiper-pagination"></div>
            </div>
    
          </div>
        </section><!-- End Testimonials Section --> --}}
    

</x-guest-layout>
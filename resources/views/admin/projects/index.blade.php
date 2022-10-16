<x-guest-layout>
  <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header pb-3">
          <h2>Moje projekty</h2>
          <p>Prehľad pridaných projektov.</p>
        </div>
        <div class="text-center">
          <a href="{{ route('admin.projects.create') }}" class="btn btn-warning rounded-pill text-light mb-3">
            Vytvoriť projekt
          </a>

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
            <div class="card portfolio-item filter-{{ $project->kind }} col-lg-3 p-0" id="portfolio-{{ $project->id }}" style="background: #dee2eb33;">
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
                      {{-- onsubmit="return confirm('Určite chceš vymazať?')" --}}
                      class="delProject">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn link-danger fw-bold" >zahodiť</button>
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

</x-guest-layout>
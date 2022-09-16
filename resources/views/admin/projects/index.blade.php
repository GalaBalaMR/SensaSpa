<x-guest-layout>
    <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header pb-3">
            <h2>Our Projects</h2>
            <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p>
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
              {{-- Start Project Item --}}
              <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $project->kind }}">
                <div id="carousel-{{ $project->id }}" class="carousel slide" data-bs-ride="false">
                  <div class="carousel-inner">

                  @foreach($imgs = explode("|", $project->images) as $image)

                    {{-- give active class to first loop --}}
                    @if ($loop->first)

                    <div class="carousel-item active">
                      <img src="{{ Storage::url($image) }}" class="  w-100" alt="{{ $project->name }}" >
                        <div class="carousel-caption d-md-block pb-0">

                          {{-- Item for update and delete --}}
                          <div class="d-flex justify-content-end align-items-center position-absolute top-0 start-100 translate-middle badge pb-5 ps-lg-5">

                            <a href="{{ route('admin.projects.edit', $project->id) }}" class="link-success pb-1"><i class="fa-regular fa-pen-to-square"></i></a>

                            <form action="{{ route('admin.projects.destroy', $project->id) }}"
                              method="POST"
                              onsubmit="return confirm('Určite chceš vymazať?')">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-link decoration-none del-button"><i class="fa-solid fa-trash"></i></button>
                            </form>

                          </div>

                          {{-- on click showing gallery --}}
                          <a href="{{ Storage::url($image) }}" title="{{ $project->name }}" data-gallery="portfolio-gallery-{{ $project->kind }}" class="glightbox preview-link"><i class="bi bi-zoom-in px-2"></i></a>
                          <h5 class="mx-auto px-1">{{ $project->name }}</h5>
                          <p class="mb-0 ">

                          {{ $project->more }}

                          {{-- collapse element --}}
                          <a class="btn btn-warning ms-1 collapse-link" data-bs-toggle="collapse" href="#collapse-{{ $project->id }}" role="button" aria-expanded="false" aria-controls="collapse-{{ $project->id }}">
                            viac
                          </a>
                          </p>

                          <div class="collapse" id="collapse-{{ $project->id }}">
                            <div class="card card-body text-dark">
                              {{ $project->description }}
                            </div>
                          </div>
                        </div>
                      </div>
                    @continue

                    @endif

                    {{-- No active item --}}
                    <div class="carousel-item">
                      <img src="{{ Storage::url($image) }}" class="  w-100" alt="{{ $project->name }}" >
                      <div class="carousel-caption d-md-block pb-0">

                        {{-- Item for update and delete --}}
                        <div class="d-flex justify-content-end align-items-center position-absolute top-0 start-100 translate-middle badge pb-5 ps-lg-5">

                          <a href="{{ route('admin.projects.edit', $project->id) }}" class="link-success pb-1"><i class="fa-regular fa-pen-to-square"></i></a>
                            
                          <form action="{{ route('admin.projects.destroy', $project->id) }}"
                            method="POST"
                            onsubmit="return confirm('Určite chceš vymazať?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link decoration-none del-button"><i class="fa-solid fa-trash"></i></button>
                          </form>

                        </div>

                          {{-- on click showing gallery --}}
                          <a href="{{ Storage::url($image) }}" title="{{ $project->name }}" data-gallery="portfolio-gallery-{{ $project->kind }}" class="glightbox preview-link"><i class="bi bi-zoom-in px-2"></i></a>

                          <h5 class="mx-auto px-1">{{ $project->name }}</h5>
                          <p class="mb-0">
                            {{ $project->more }}

                            {{-- collapse element --}}
                            <a class="btn btn-warning ms-1" data-bs-toggle="collapse" href="#collapse-{{ $project->id }}" role="button" aria-expanded="false" aria-controls="collapse-{{ $project->id }}">
                                  viac
                            </a>
                          </p>
                          <div class="collapse" id="collapse-{{ $project->id }}">
                            <div class="card card-body text-dark">
                              {{ $project->description }}
                            </div>
                          </div>
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
              @empty
              <p class="text-center">Zatiaľ si nepridal žiadny projekt</p>
                  
              
              @endforelse
            </div><!-- End Projects Container -->
  
          </div>
  
        </div>
      </section><!-- End Our Projects Section -->

</x-guest-layout>
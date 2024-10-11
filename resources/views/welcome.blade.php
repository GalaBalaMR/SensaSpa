<x-guest-layout>
    <!-- ======= Get Started Section ======= -->
    <section id="about" class="get-started section-bg">
        <div class="container-fluid d-lg-flex justify-content-center d">

            <div class="gy-4">

                <div class="row align-items-center flex-column text-about" data-aos="fade-up">

                    <div class="part">

                        <div class="d-lg-flex justify-content-center">
                            <div>
                                <h1>Vitajte v Sensa Spa</h1>
                                <h2>Vašej oáze relaxu a zdravia</h2>
                                <p>V našom masážnom štúdiu Sensa Spa sme sa zamerali na vytvorenie jedinečného
                                    priestoru,
                                    kde sa
                                    môžete naplno uvoľniť, obnoviť svoje telo aj myseľ a vychutnať si chvíľku pre seba.
                                </p>

                                <p>
                                    Naše
                                    štúdio je navrhnuté tak, aby poskytovalo maximálne pohodlie – od jemného osvetlenia,
                                    ktoré
                                    vytvára príjemnú atmosféru, cez relaxačnú hudbu, až po aromaterapiu s 100%
                                    prírodnými
                                    olejmi. S profesionálnym masážnym stolom a vybavením sa u nás budete cítiť ako v
                                    skutočnom
                                    wellness centre.
                                </p>

                            </div>
                            <img id="studio" src="{{ Storage::url('public/img/studio.jpg') }}" alt="oil image">
                        </div>



                    </div>

                    <div class="part">
                        <h2>
                            Prečo je pravidelná masáž dôležitá?

                        </h2>
                        <p>
                            Masáž nie je len o relaxe – jej pravidelné absolvovanie má množstvo pozitívnych účinkov
                            na
                            zdravie. Zlepšuje krvný obeh, podporuje regeneráciu svalov, uvoľňuje napätie, zmierňuje
                            stres a zlepšuje kvalitu spánku.
                        </p>

                        <p>
                            Pre tých, ktorí trpia bolesťami chrbta, stuhnutosťou
                            svalov
                            či chronickým napätím, masáž môže výrazne zlepšiť kvalitu života.
                        </p>

                    </div>

                    <div class="part">
                        <h2>Naše masáže</h2>

                        <p>V Sensa Spa vám ponúkame širokú škálu masáží, ktoré sú prispôsobené vašim individuálnym
                            potrebám. Či už hľadáte klasickú relaxačnú masáž, športovú masáž na uvoľnenie svalov po
                            fyzickej námahe, alebo špeciálne terapie ako manuálnu lymfodrenáž či myofasciálnu masáž – u
                            nás nájdete to, čo hľadáte.
                        </p>

                        <p>
                            V našich procedúrach používame 100% prírodné esenciálne oleje,
                            ktoré zlepšujú relaxáciu a podporujú liečivé účinky masáže.
                        </p>

                        <img src="{{ Storage::url('public/img/oil.webp') }}" alt="oil image">

                    </div>

                    {{-- <ul>
                            {!! $contents->where('name', 'massages')->first()->content !!}

                        </ul> --}}

                    {{-- @if (Auth::check() && Auth::user()->is_admin)
                        @include('content.partials.form', [
                            'content' => $contents->where('name', 'massages')->first(),
                        ])
                    @endif --}}
                </div>
                <div class="text-center" data-aos="fade">
                    <h3>Napíšte nám!</h3>
                    <p>V prípade akýchkoľvek otázok nás neváhajte kontaktovať. Môžte nám napísat na <a
                            href="mailto:kontakt@sensaspa.sk">kontakt@sensaspa.sk</a>, alebo cez <a
                            href="tel:+421910152552">tel. číslo 0910 152 552</a>.
                    </p>

                    <div class="buttons ">
                        <a data-aos="fade-up" data-aos-delay="200" href="mailto:kontakt@sensaspa.sk"
                            class="d-block btn rounded-pill btn-outline-warning">Napísať mail</a>
                        <a data-aos="fade-up" data-aos-delay="200" href="tel:+421910152552"
                            class="d-block btn rounded-pill btn-outline-warning">Zavolať</a>
                    </div>
                    {{-- <form action="{{ route('infomail') }}" method="post" class="p" id="contaktMail">
                        @csrf
                        @method('post')
                        <div class="row gy-3">

                            <div class="col-md-12">
                                <input type="text" name="name" class="form-control mail-input" placeholder="Name"
                                    value="{{ old('name') }}"required>
                            </div>

                            <div class="col-md-12 ">
                                <input type="email" class="form-control mail-input" name="email" placeholder="Email"
                                    value="{{ old('email') }}" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control mail-input" name="phone" placeholder="Phone"
                                    value="{{ old('phone') }}" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                            </div>

                            <div class="col-md-12">
                                <input class="form-check-input" type="checkbox" value="" id="CheckAgreement">
                                <label class="form-check-label" for="CheckAgreement">
                                    Súhlasím so <a href="{{ route('ochrana-osobnych-udajov') }}"
                                        class="link-warning">spracovaním osobných údajov.</a>
                                </label>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-warning rounded-pill text-light">Odoslať</button>
                            </div>

                        </div>
                    </form> --}}
                </div><!-- End Quote Form -->

            </div>


        </div>




        <!-- ======= Services Section ======= -->
        {{-- <div id="services" class="services section-bg">
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

                            {!! $contents->where('name', 'service_first')->first()->content !!}

                            @if (Auth::check() && Auth::user()->is_admin)
                                @include('content.partials.form', [
                                    'content' => $contents->where('name', 'service_first')->first(),
                                ])
                            @endif
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa fa-wrench ms-1"></i>
                            </div>
                            {!! $contents->where('name', 'service_second')->first()->content !!}

                            @if (Auth::check() && Auth::user()->is_admin)
                                @include('content.partials.form', [
                                    'content' => $contents->where('name', 'service_second')->first(),
                                ])
                            @endif
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-compass-drafting ms-1"></i>
                            </div>
                            {!! $contents->where('name', 'service_third')->first()->content !!}

                            @if (Auth::check() && Auth::user()->is_admin)
                                @include('content.partials.form', [
                                    'content' => $contents->where('name', 'service_third')->first(),
                                ])
                            @endif

                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-truck fas"></i>
                            </div>
                            {!! $contents->where('name', 'service_four')->first()->content !!}

                            @if (Auth::check() && Auth::user()->is_admin)
                                @include('content.partials.form', [
                                    'content' => $contents->where('name', 'service_four')->first(),
                                ])
                            @endif

                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-sack-dollar ms-1"></i>
                            </div>
                            {!! $contents->where('name', 'service_five')->first()->content !!}

                            @if (Auth::check() && Auth::user()->is_admin)
                                @include('content.partials.form', [
                                    'content' => $contents->where('name', 'service_five')->first(),
                                ])
                            @endif

                        </div>
                    </div><!-- End Service Item -->



                </div>

            </div>
        </div><!-- End Services Section --> --}}

    </section><!-- End Get Started Section -->

    <section id="bookio">
        <script type="text/javascript" src="https://bookio-services-eu.s3.eu-central-1.amazonaws.com/assets/widget.bookio.js">
        </script> <iframe id="bookio-iframe" src="https://services.bookio.com/sensa-spa/widget?lang=sk"
            width="100%" height="100%" onload="initBookioWidget()" scrolling="no"></iframe>
    </section>

    <section id="cennik">
        <table class="zigzag">
            <thead>
              <tr>
                <th>Meno masáže</th>
                <th>Čas trvania</th>
                <th>Cena</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Klasická masáž</td>
                <td>25 min</td>
                <td>12 €</td>
              </tr>
              <tr>
              <tr>
                <td>Klasická masáž</td>
                <td>50 min</td>
                <td>20 €</td>
              </tr>
              <tr>
                <td>Kombinovaná masáž</td>
                <td>25 min</td>
                <td>12 €</td>
              </tr>
              <tr>
              <tr>
                <td>Kombinovaná masáž</td>
                <td>50 min</td>
                <td>20 €</td>
              </tr>
                <td>Myofasciálna masáž</td>
                <td>50 min</td>
                <td>25 €</td>
              </tr>
              <tr>
                <td>Bankovanie</td>
                <td>50 min</td>
                <td>20 €</td>
              </tr>
              <tr>
                <td>Breussova masáž</td>
                <td>25 min</td>
                <td>20 €</td>
              </tr>
              <tr>
                <td>Sensa Touch</td>
                <td>25 min</td>
                <td>15 €</td>
              </tr>
              <tr>
                <td>Manuálna lymfodrenáž</td>
                <td>120 min</td>
                <td>60 €</td>
              </tr>
            </tbody>
          </table>
          
    </section>

    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
        <div class="container" data-aos="fade-up">

            <ul class="nav nav-tabs row  g-2 d-flex">

                <li class="nav-item col-4">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                        <h4>Prírodné oleje</h4>
                    </a>
                </li><!-- End tab nav item -->

                <li class="nav-item col-4">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                        <h4>Fasciálne nože</h4>
                    </a><!-- End tab nav item -->

                <li class="nav-item col-4">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                        <h4>Masážne banky</h4>
                    </a>
                </li><!-- End tab nav item -->

            </ul>

            <div class="tab-content">

                <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                            data-aos="fade-up" data-aos-delay="100">
                            <h3>100% prírodné oleje</h3>
                            <p class="fst-italic">
                                Esenciálne oleje sú koncentrované výťažky z rastlín, ktoré majú silné terapeutické
                                vlastnosti. Využívajú sa pri masážach na podporu relaxácie, zlepšenie nálady a
                                posilnenie zdravotných benefitov masáže. Každý olej má jedinečné vlastnosti, ktoré môžu
                                pôsobiť na telo aj myseľ.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Uvoľňujú napätie a stres</li>
                                <li><i class="bi bi-check2-all"></i> Zlepšujú kvalitu spánku</li>
                                <li><i class="bi bi-check2-all"></i> Podporujú imunitný systém</li>
                                <li><i class="bi bi-check2-all"></i> Zlepšujú náladu a koncentráciu</li>
                                <li><i class="bi bi-check2-all"></i> Majú protizápalové a analgetické účinky</li>
                            </ul>

                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ Storage::url('public/img/oils.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End tab content item -->
                <div class="tab-pane show" id="tab-2">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                            data-aos="fade-up" data-aos-delay="100">
                            <h3>Fasciálne nože</h3>
                            <p class="fst-italic">
                                Myofasciálne nože sú špeciálne nástroje používané na uvoľnenie napätia vo fasciálnych
                                tkanivách, ktoré obklopujú svaly. Pomáhajú zmierniť bolesť, zlepšiť flexibilitu a
                                podporiť regeneráciu svalov. Ich pravidelné používanie zlepšuje krvný obeh a pomáha
                                odstraňovať svalové uzly a napätie.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Uvoľňujú napätie vo fasciálnych tkanivách</li>
                                <li><i class="bi bi-check2-all"></i> Zlepšujú pohyblivosť a flexibilitu</li>
                                <li><i class="bi bi-check2-all"></i> Znižujú bolesť a podporujú regeneráciu svalov</li>
                                <li><i class="bi bi-check2-all"></i> Zlepšujú krvný obeh v postihnutých oblastiach</li>
                                <li><i class="bi bi-check2-all"></i> Pomáhajú rozbíjať svalové uzly</li>
                            </ul>


                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ Storage::url('public/img/noze.webp') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End tab content item -->
                <div class="tab-pane show" id="tab-3">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                            data-aos="fade-up" data-aos-delay="100">
                            <h3>Masážne banky</h3>
                            <p class="fst-italic">
                                Masážne banky sa využívajú na vytvorenie podtlaku na koži, ktorý stimuluje krvný obeh a
                                podporuje regeneráciu tkanív. Tieto banky pomáhajú uvoľniť napätie, zmierniť bolesť a
                                detoxikovať telo. Používanie bánk zvyšuje prísun živín do svalov a urýchľuje hojenie.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> Zlepšujú krvný obeh a regeneráciu tkanív</li>
                                <li><i class="bi bi-check2-all"></i> Uvoľňujú svalové napätie a zmierňujú bolesť</li>
                                <li><i class="bi bi-check2-all"></i> Podporujú detoxikáciu organizmu</li>
                                <li><i class="bi bi-check2-all"></i> Zlepšujú prísun živín do svalov</li>
                                <li><i class="bi bi-check2-all"></i> Urýchľujú hojenie a regeneráciu</li>
                            </ul>

                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                            <img src="{{ Storage::url('public/img/cups.jpg') }}" alt="" class="img-fluid">
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
                <h2>Masáže</h2>
                <p>Typy masáží, ktoré poskytujeme</p>
            </div>

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"
                                    style="background-image: url({{ Storage::url('public/img/masaz1.jpg') }});">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Klasická masáž</h4>
                                    <p>
                                        Klasická masáž je ideálna pre relaxáciu a uvoľnenie svalového napätia. Zlepšuje
                                        krvný obeh,
                                        urýchľuje regeneráciu tkanív a prispieva k celkovému uvoľneniu tela a mysle.
                                        Táto forma
                                        masáže pomáha zmierniť bolesti chrbta, šije a kĺbov, pričom podporuje dlhodobé
                                        zdravie
                                        pohybového aparátu.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->


                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"
                                    style="background-image: url({{ Storage::url('public/img/masaz2.jpg') }});">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Kombinovaná masáž</h4>
                                    <p>
                                        Kombinovaná masáž je prispôsobená presne podľa individuálnych potrieb každého
                                        klienta. Spája techniky
                                        klasickej, športovej,bankovania, myofasciálnej a triggerpoint masáže na
                                        uvoľnenie svalov, zmiernenie bolesti a
                                        zlepšenie pohyblivosti.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->


                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url({{ Storage::url('public/img/iastm.jpg') }});">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Myofasciálna masáž</h4>
                                    <p>
                                        Myofasciálna masáž sa zameriava na uvoľnenie napätia vo fasciálnych tkanivách, ktoré obklopujú svaly a kosti.
                                        Táto technika pomáha zlepšiť flexibilitu, zmierniť bolesť a zlepšiť krvný obeh. Ideálna pre ľudí, ktorí
                                        trpia chronickým napätím a potrebujú hlbšie uvoľnenie tkanív.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url({{ Storage::url('public/img/cups.jpg') }});">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Bankovanie</h4>
                                    <p>
                                        Bankovanie je starodávna technika, ktorá pomocou podtlaku stimuluje krvný obeh a podporuje detoxikáciu tela.
                                        Pomáha uvoľniť napäté svaly, zlepšiť pohyblivosť a odstrániť toxíny z tela. Je výbornou metódou na
                                        zmiernenie bolesti a urýchlenie regenerácie.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url({{ Storage::url('public/img/breus.jpg') }});">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Breussova masáž</h4>
                                    <p>
                                        Breussova masáž je jemná energetická masáž, zameraná na podporu zdravia chrbtice a regeneráciu
                                        medzistavcových platničiek. Pomocou špeciálnych ťahov a jemných dotykov uvoľňuje tlak na chrbticu a
                                        pomáha obnoviť rovnováhu tela. Ideálna pre klientov so bolesťami chrbta.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->
                
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url({{ Storage::url('public/img/lymfa1.jpeg') }});">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Manuálna lymfodrenáž</h4>
                                    <p>
                                        Manuálna lymfodrenáž je špeciálna masážna technika, ktorá stimuluje lymfatický systém a podporuje
                                        odplavovanie toxínov z tela. Pomáha zmierniť opuchy, zlepšiť imunitu a detoxikovať organizmus.
                                        Ideálna pre klientov, ktorí chcú podporiť svoje zdravie a zlepšiť regeneráciu tela.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->
                
                

                {{-- <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg"
                                    style="background-image: url({{ Storage::url('public/theme_img/constructions-3.jpg') }});">
                                </div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    {!! $contents->where('name', 'construction_third')->first()->content !!}

                                    @if (Auth::check() && Auth::user()->is_admin)
                                        @include('content.partials.form', [
                                            'content' => $contents->where('name', 'construction_third')->first(),
                                        ])
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item --> --}}

            </div>

        </div>
    </section><!-- End Constructions Section -->

    

    <!-- Projects Section -->
    {{-- <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">

            <div class="section-header pb-3">
                <h2>Our Projects</h2>
                <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto
                    accusamus fugit aut qui distinctio</p>
            </div>
            <div class="text-center">
                @if (Auth::check() && Auth::user()->is_admin)
                    <a href="{{ route('admin.projects.create') }}"
                        class="btn btn-warning rounded-pill text-light mb-3">
                        Vytvoriť projekt
                    </a>
                @else
                    <a href="#contaktMail" class="btn btn-warning rounded-pill text-light mb-3">
                        Mám záujem!
                    </a>
                @endif


            </div>
            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                data-portfolio-sort="original-order">

                <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-skriňa">Vstavané skrine</li>
                    <li data-filter=".filter-kuchyňa">Kuchyne</li>
                    <li data-filter=".filter-nábytok">Nábytky</li>
                    <li data-filter=".filter-ostatné">Ostatné</li>
                </ul>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    @forelse($projects as $project)
                        <div class="card portfolio-item filter-{{ $project->kind }} col-lg-3 p-0"
                            style="background: #dee2eb33;">
                            <div class="card-img-top">

                                <div id="carousel-{{ $project->id }}" class="carousel slide" data-bs-ride="false">

                                    <div class="carousel-inner">
                                        @foreach ($imgs = explode('|', $project->images) as $image)
                                            @if ($loop->first)
                                                <div class="carousel-item active">
                                                    <img src="{{ Storage::url($image) }}"
                                                        class="d-block w-100  rounded-top" alt="...">
                                                    <div class="carousel-caption d-none d-md-block">

                                                       
                                                        <a href="{{ Storage::url($image) }}"
                                                            title="{{ $project->name }}"
                                                            data-gallery="portfolio-gallery-{{ $project->kind }}"
                                                            class="glightbox preview-link position-absolute top-0 start-100 translate-middle ms-3 mt-4">
                                                            <i class="bi bi-zoom-in px-2"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                @continue
                                            @endif
                                            <div class="carousel-item">
                                                <img src="{{ Storage::url($image) }}"
                                                    class="d-block w-100  rounded-top" alt="...">
                                                <div class="carousel-caption d-none d-md-block">

                                                    
                                                    <a href="{{ Storage::url($image) }}"
                                                        title="{{ $project->name }}"
                                                        data-gallery="portfolio-gallery-{{ $project->kind }}"
                                                        class="glightbox preview-link position-absolute top-0 start-100 translate-middle ms-3 mt-4">
                                                        <i class="bi bi-zoom-in px-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carousel-{{ $project->id }}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next h-50 my-auto" type="button"
                                        data-bs-target="#carousel-{{ $project->id }}" data-bs-slide="next">
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
                                    {{ $project->description }}

                                
                                    @if (Auth::check() && Auth::user()->is_admin)
                                        <div class="d-flex justify-content-between align-items-center">

                                            <a href="{{ route('admin.projects.edit', $project->id) }}"
                                                class="btn link-success pb-1 fw-bold">editovať</i></a>

                                            <form action="{{ route('admin.projects.destroy', $project->id) }}"
                                                method="POST" onsubmit="return confirm('Určite chceš vymazať?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="btn link-danger fw-bold">zahodiť</button>
                                            </form>

                                        </div>
                                    @endif
                                </p>
                            </div>
                        </div>
                    @empty
                    @endforelse

                </div>

            </div>

        </div>
    </section> --}}<!-- End Our Projects Section -->




</x-guest-layout>

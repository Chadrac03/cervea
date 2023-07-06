@extends('client.layout')

@section('content')

    <!--Banner  -->
    <div class="owl-carousel-wrapper" style="height: 650px;">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-35px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(asset/img/dow/io.jpg); background-size: cover; background-position: center; height: 600px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7 text-center">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    planification-reservation
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">planification et réservation automatisée</h3>
                                <p class="text-3 text-color-light font-weight-light opacity-7 text-center" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">
                                    Prestataires de services, écoles et studios, voyagistes et prestataires d’activités
                                    Planifiez et gérez vos rendez-vous et avec un logiciel de planification et de réservation automatisé et sur mesure.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="intro" class="section section-no-border section-angled bg-light pt-5 m-0 mt-4">
        <div class="container">
            <div class="row mb-5 counters">
                <div class="col-lg-10 text-center offset-lg-1">
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">POURQUOI DÉVELOPPER VOTRE PROPRE LOGICIEL DE RÉSERVATION ?</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">chez  <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">La réservation en ligne, un indispensable pour développer votre chiffre d’affaires via le web !
                        Aujourd’hui, le premier réflexe de vos prospects avant chaque premier rendez-vous est de chercher le nom de votre entreprise sur les moteurs de recherche. Une fois sur votre site internet, si vous ne disposez pas d’une fonctionnalité permettant la réservation en ligne, vous augmentez le risque que votre client quitte votre site et vous oublie.
                        Permettez à vos prospects de faire leurs réservations en ligne depuis n’importe quel endroit ou n’importe quelles plateformes. AxioCode vous accompagne dans le développement de votre logiciel de réservation et de planification.
                    </p>
                    <p>
                        En plus d’optimiser l’expérience de vos clients, la mise en place d’un système de prise de rendez-vous 100% automatisé vous fait gagner du temps. Avec votre propre système de réservation, la gestion quotidienne des plannings devient moins chronophage et vos équipes peuvent concentrer leurs efforts sur les activités qui forment votre cœur de métier.
                        Un système de gestion et de planification des réservation vous donne l’opportunité de booster votre productivité mais surtout de remettre le client au centre de l’expérience proposée par votre entreprise.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-primary border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/p3.jpg') }}" alt="">
                </div>
                <div class="col-lg-7 pl-lg-5">
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">UN LOGICIEL DE RÉSERVATION 100% ADAPTÉ​</strong></h4>
                        <p>cervea vous accompagne de la conception à la mise en place de votre système automatisé de planification et de réservation en ligne. En fonction de vos enjeux business et de vos contraintes métier, nous saurons vous apporter la meilleure solution.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">GÉRER TOUS VOS RENDEZ-VOUS (MÊME HORS LIGNE)</strong></h4>
                        <p>Que vos clients fassent leurs réservations en ligne, en magasin ou par téléphone toutes les données sont automatiquement synchronisées pour facilité la gestion de vos plannings.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">UNE SOLUTION SUR MESURE POUR VOTRE ENTREPRISE</strong></h4>
                        <p>Nos solutions de réservation et de planification sont développées sur mesure. Que votre projet porte sur une application web, mobile ou mixte, notre expertise nous permet de vous accompagner et de vous conseiller sur le choix des technologies et des plateformes à utiliser en fonction du parcours de vos clients.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 text-right">
                    <a href="{{ url('contact') }}" class="btn btn-dark rounded-0 mt-2">brefiez nous</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <a href="{{ url('reservation-diagnostic') }}" class="btn btn-dark rounded-0 mt-2">demander un diagnostic</a>
                </div>
            </div>
        </div>
    </section>


    <section id="intro" class="section section-no-border section-angled bg-light pt-5 m-0 mt-4">
        <div class="container">
            <div class="row mb-5 counters">
                <div class="col-lg-10 text-center offset-lg-1">
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">LOGICIEL DE PLANIFICATION DE RENDEZ-VOUS ET FONCTIONNALITÉS</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">chez  <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        La réservation en ligne, un indispensable pour développer votre chiffre d’affaires via le web !
                        Un système de planification et de réservation ou logiciel de gestion de rendez-vous vous permet de gérer plus facilement vos plannings. Les systèmes de planification sur-mesure comprennent généralement les fonctionnalités suivantes :
                    </p>
                    <div class="row">
                        <div class="col-md-12 col-lg-12 text-left">
                            <ul>
                                <li>Réservation sur Internet</li>
                                <li>Réservation via une application mobile</li>
                                <li>Interface utilisateur pour vos équipes</li>
                                <li>Synchronisation des données clients on et off-line</li>
                            </ul>
                        </div>
                    </div>

                    <p>
                        Un système de planification des rendez-vous, lorsqu’il est intégré à un système de gestion du parcours client (aussi appelé « système de gestion de files d’attente »), devient un outil efficace qui permet de faire facilement le lien entre l’interface en ligne et le rendez-vous sur place.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="intro" class="section bg-grey section-no-border section-angled pt-5 m-0 mt-4">
        {{-- <div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 21rem 0;"></div> --}}
        <div class="container">
            <div class="row mb-2 counters">
                <div class="col-lg-10 text-center offset-lg-1">
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">LES AVANTAGES DES SOLUTIONS DE RÉSERVATION AUTOMATISÉES</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">chez <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        Les logiciels de réservation présentent de nombreux avantages à la fois pour vos clients mais aussi pour votre entreprise.
                    </p>
                </div>
            </div>

            <div class="row mb-2 pb-3">
                <div class="col-md-6 col-lg-6 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="card border-0 border-radius-0 bg-grey py-4 px-3" style="height : 600px;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Une meilleure expérience pour vos clients</h4>

                            <h6 class="card-title mb-1 mp-2 font-weight-bold">  Réduction du temps d'attente</h6>
                            <p class="card-text mt-3">
                                Vos clients n’ont pas à attendre sur place pour la prise de rendez-vous : tout est simple, rapide et automatisé.
                            </p>

                            <h6 class="card-title mb-1 font-weight-bold">  Flexibilité et tranquililité d'esprit </h6>
                            <p>
                                Vos clients peuvent réserver, annuler ou modifier leur réservation à tout moment suivant les critères que vous avez définis.
                            </p>

                            <h6 class="card-title mb-1 font-weight-bold">  Flexibilité et tranquililité d'espriExpérience client améliorée </h6>
                            <p>
                                En offrant une expérience personnalisée et des fonctionnalités uniques à vos clients, un logiciel de gestion des réservations permet d’optimiser l’expérience client.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="card border-0 border-radius-0 bg-grey py-4 px-3" style="height : 600px;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Une productivité boostée pour votre entreprise</h4>

                            <h6 class="card-title mb-1 mp-2 font-weight-bold">  Gestion des ressources en fonction des besoins</h6>
                            <p class="card-text mt-3">
                                Si toutes vos réservations sont planifiées correctement, vous savez avec précision de quelles ressources vous avez besoins.
                            </p>

                            <h6 class="card-title mb-1  font-weight-bold">Optimisation de la productivité</h6>
                            <p>
                                Le temps de vos équipes n’est plus accaparé par la gestion des rendez-vous et réservations. Elles peuvent désormais se concentrer sur les activités qui constituent leur cœur de métier.
                            </p>

                            <h6 class="card-title mb-1 font-weight-bold">  Moins de pression sur vos équipes</h6>
                            <p>
                                La planification a du bon pour vos salariés, une journée correctement organisée contribue à réduire le stress et la pression de vos équipes. Tout comme pour vos clients, ils auront l’esprit plus tranquille !
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Notre collaboration -->
    @include('client.Sections.collaborations')

    <!-- Nos ressources -->
    @include('client.Sections.ressources')

    <!-- Nos realisations  -->
    @include('client.Sections.realisations')

    @include('client.Sections.autres-solutions')

@endsection

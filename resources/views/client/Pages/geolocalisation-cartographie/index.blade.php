@extends('client.layout')

@section('content')

    <!--Banner  -->
    <div class="owl-carousel-wrapper" style="height: 650px;">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-35px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(asset/img/dow/g.jpg); background-size: cover; background-position: center; height: 600px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7 text-center">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    geolocalisation-cartographie
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">géolocalisation et cartographie sur mesure</h3>
                                <p class="text-3 text-color-light font-weight-light opacity-7 text-center" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">
                                    Développement sur mesure d’applications mobiles de géolocalisation et de cartographie pour les professionnels.
                                    Nos solutions sont fiables, réactives et faciles à utiliser.
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
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">CARTOGRAPHIE ET GÉOLOCALISATION, L’EXPERTISE cervea</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">chez  <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">cervea est expert dans le développement et la conception d’applications de cartographie et de géolocalisation sur-mesure. Nous développons des applications web et mobile pour nos clients mais avons aussi notre propre solution.
                        Que la cartographie ou la géolocalisation soit au cœur de votre business model ou fasse simplement partie des fonctionnalités indispensables à votre projet, nous vous accompagnons pour développer vos applications sur mesure.
                    </p>
                    <p>
                        Quelles que soient vos exigences et vos contraintes, nous saurons vous apporter la meilleure réponse en matière de géolocalisation, d’identification de vos POI, d’optimisation, etc.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-primary border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/g2.jpg') }}" alt="">
                </div>
                <div class="col-lg-7 pl-lg-5">
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">DES CHOIX PLUS RAPIDES ET ÉCLAIRÉS​</strong></h4>
                        <p>Une application de géolocalisation vous permet de localiser facilement et en temps réel vos équipes.  De ce fait, vous serez capable d’identifier la personne la plus proche pour répondre aux besoins de vos clients. La vue d’ensemble que propose nos applications donne la possibilité aux managers de prendre des décisions objectives plus rapidement.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">UNE FORTE EXPERTISE MÉTIELOCALISATION DE ​ ZONES ET POINTS D'INTÉRÊT</strong></h4>
                        <p>Certains secteurs d’activités, comme le bâtiment ou l’agriculture, requiert de localiser des points d’intérêts (armoires électriques, lieux de récoltes, borne de rechargement, etc.) avec précision. Nos outils de cartographie en ligne, vous permettent de localiser précisément un emplacement. Une fonctionnalité très utile pour suivre l’avancée de travaux ou de récoltes par exemple.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">AMÉLIORATION DE VOTRE PRODUCTIVITÉ</strong></h4>
                        <p>Les applications de géolocalisation et de cartographie, sont communément accompagnés de fonctionnalités de reporting et permettent à votre entreprise mieux gérer ses ressources. Nos applications permettent de faire remonter les informations issues du terrain pour assurer le suivi de la performance commerciale de vos équipes, même à distance.</p>
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

    <section id="intro" class="section bg-grey section-no-border section-angled pt-5 m-0 mt-4">
        {{-- <div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 21rem 0;"></div> --}}
        <div class="container">
            <div class="row mb-2 counters">
                <div class="col-lg-10 text-center offset-lg-1">
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">ES SOLUTIONS DE GÉOLOCALISATION ET CARTOGRAPHIE DÉVELOPPÉES POUR NOS CLIENTS</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">chez <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        cervea s’adapte à vos besoins pour créer l’outil qui vous aidera à atteindre vos objectifs. Nous vous accompagnons dans la conception, le développement, la mise en œuvre et la maintenance de vos plateformes de mise en relation B2B, B2C et C2CNotre société a développé une application de géolocalisation et de cartographie qui permet aux professionnels de trouver des lieux, de les cartographier et d’y ajouter des photos. C’est un outil parfait pour les agents immobiliers, les ouvriers du bâtiment,
                        les plombiers et tous les autres professionnels qui ont besoin de trouver les bons endroits au bon moment.
                    </p>
                </div>
            </div>

            <div class="row mb-2 pb-3">
                <div class="col-md-4 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="card border-0 border-radius-0 bg-grey py-4 px-3" style="height : 600px;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Cartographie et entreprise</h4>
                            <p class="card-text mt-3">
                                Les applications de géolocalisation et de cartographie ont le même objectif : donner la position d’une personne, d’un objet ou d’un point d’intérêt.
                            </p>
                            <p>
                                La seule différence entre ces deux termes est l’aspect plus statique. Les applications de cartographie sont utilisées dans les secteurs agricoles et du BTP pour délimiter une zone donnée ou localiser un point précis par exemple. Bien sûr, vous pouvez ajouter des fonctionnalités de géolocalisation sur l’ensemble des applications cartographiques.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="card border-0 border-radius-0 bg-grey py-4 px-3" style="height : 600px;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Les particuliers et les services de géolocalisation</h4>
                            <p class="card-text mt-3">
                                Les fonctionnalités de localisation font désormais partie des fonctionnalités indispensables à toute application.
                            </p>
                            <p>
                                Pour preuve, chacun de nous utilise au moins une fois par jour une application utilisant votre position. La géolocalisation a su conquérir tous les secteurs, santé, sécurité, transport, petite enfance, restauration… Du contrôle parental au suivi de vos évolutions sportives en passant par la création d’itinéraires : la géolocalisation fait partie de notre quotidien.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="card border-0 border-radius-0 bg-grey py-4 px-3" style="height : 600px;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Géolocalisation et professionnels</h4>
                            <p class="card-text mt-3">
                                La géolocalisation est une technologie permettant de localiser un objet ou une personne en temps réel via le GPS d’un téléphone et une application web ou mobile par exemple.
                            </p>
                            <p>
                                C’est une fonctionnalité très utilisée par les entreprises évoluant dans le secteur du transport ou de la sécurité. Développer une application de géolocalisation vous permet, par exemple, d’avoir une vue d’ensemble des véhicules de votre parc en les positionnant en temps réel sur une carte.
                            </p>
                        </div>
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

    <!-- Notre collaboration -->
    @include('client.Sections.collaborations')

    <!-- Nos ressources -->
    @include('client.Sections.ressources')

    <!-- Nos realisations  -->
    @include('client.Sections.realisations')

    @include('client.Sections.autres-solutions')

@endsection

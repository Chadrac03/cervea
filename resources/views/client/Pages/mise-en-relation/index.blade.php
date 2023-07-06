@extends('client.layout')

@section('content')

    <!--Banner  -->
    <div class="owl-carousel-wrapper" style="height: 650px;">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-35px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(asset/img/dow/fr3.png); background-size: cover; background-position: center; height: 600px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7 text-center">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    relation B2B-B2C-C2C
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Plateformes de mise en relation B2B, et B2C et C2C</h3>
                                <p class="text-3 text-color-light font-weight-light opacity-7 text-center" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">Quel que soit le type d’entreprise que vous dirigez, il existe une plateforme de mise en relation adaptée à vos besoins.
                                    B2C, B2B ou C2C nous développons votre plateforme de mise en relation sur mesure.</p>
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
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">UN CONTACT FACILITÉ AVEC VOS CLIENTS, PARTENAIRES ET EMPLOYÉS</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">chez  <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">On désigne par “plateformes de mise en relation“, toute application web ou mobile spécifique dont l’objectif est de faciliter la communication entre une entreprise et ses clients, d’autres professionnels ou ses collaborateurs.
                        Le concept de mise en relation des personnes est devenu de plus en plus important et l’on voit émerger de nombreuses nouvelles plateformes : sites de réseautage professionnel, sites d’offres d’emploi (recrutement), plateformes de mise en relation de particuliers pour différentes prestations de service, etc.
                    </p>
                    <p>
                        Il existe donc autant de plateformes de mises en relation que de besoins. Vous souhaitez créer votre propre plateforme de mise en relation ?
                        Une plateforme de mise en relation réussie se distingue la concurrence et a la capacité d’attirer une large base d’utilisateurs. Une grande expérience dans ce domaine est nécessaire pour créer une plateforme de mise en relation à succès.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-primary border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/p5.jpg') }}" alt="">
                </div>
                <div class="col-lg-7 pl-lg-5">
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">UNE APPROCHE ORIENTÉE UTILISATEURS​</strong></h4>
                        <p>Nos approches orientées utilisateurs vous garantissent les meilleures pratiques UX/UI et un excellent taux d’adoption de nos solutions par vos équipes, vos clients ou par vos fournisseurs.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">UNE FORTE EXPERTISE MÉTIER</strong></h4>
                        <p>Nous bénéficions d’une forte expertise sur les plateformes en temps réel, dotées de fonctions de géolocalisation ou non, axées sur le travail collaboratif ou la digitalisation de vos processus métier.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">DES PROCESSUS MÉTIERS OPTIMISÉS</strong></h4>
                        <p>Nos plateformes de mise en relation sont développées sur mesure pour répondre à vos besoins tout en veillant à offrir une expérience unique aux utilisateurs. Une expérience utilisateur unique, vous permettra d’optimiser vos processus commerciaux et de maximiser la génération de leads.</p>
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
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">UNE PLATEFORME ADAPTÉE A VOS UTILISATEURS ET À VOS BESOINS </h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">chez <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        cervea s’adapte à vos besoins pour créer l’outil qui vous aidera à atteindre vos objectifs. Nous vous accompagnons dans la conception, le développement, la mise en œuvre et la maintenance de vos plateformes de mise en relation B2B, B2C et C2C.
                    </p>
                </div>
            </div>

            <div class="row mb-2 pb-3">
                <div class="col-md-4 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="card border-0 border-radius-0 bg-grey py-4 px-3" style="height : 600px;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Business to Business</h4>
                            <p class="card-text mt-3">
                                Les plateformes B2B permettent aux entreprises de se connecter à d’autres entreprises à des fins commerciales.
                            </p>
                            <p>
                                Les plateformes B2B ont de nombreux usages : plateformes d’appel d’offre, annuaires professionnelles ou marketplace B2B par exemple.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="card border-0 border-radius-0 bg-grey py-4 px-3" style="height : 600px;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Consumer to Consumer</h4>
                            <p class="card-text mt-3">
                                Les plateformes C2C permettent aux particuliers d’interagir les uns avec les autres. Ces plateformes sont devenues populaires dans les domaines de l’immobilier et du transport notamment.
                            </p>
                            <p>
                                Airbnb en est un excellent exemple, car elle facilite le partage de logements entre particuliers, tandis que Blablacar met en relation des conducteurs et des passagers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="card border-0 border-radius-0 bg-grey py-4 px-3" style="height : 600px;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Business to Consumer</h4>
                            <p class="card-text mt-3">
                                Les plateformes B2C sont utilisées par les professionnels pour vendre leurs produits ou services directement à leurs clients particuliers.
                            </p>
                            <p>
                                La plateforme B2C la plus connue est Amazon, mais il en existe beaucoup d’autres comme les services de VTC par exemple.
                            </p>

                            <a href="{{ url('contact') }}" class="btn btn-primary rounded-0 mt-2">brefiez nous</a>
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

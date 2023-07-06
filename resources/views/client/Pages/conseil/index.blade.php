@extends('client.layout')

@section('content')

    <!--Banner  -->
    <div class="owl-carousel-wrapper" style="height: 650px;">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-35px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(asset/img/dow/B.png); background-size: cover; background-position: center; height: 400px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7 text-center">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    conseil
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Conseil </h3>
                                <p class="text-3 text-color-light font-weight-light opacity-7 text-center" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">Un accompagnement sur-mesure.</p>
                                {{-- <a href="#" class="btn btn-light btn-outline text-color-light text-color-hover-dark font-weight-bold text-3 btn-px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800" data-plugin-options="{'minWindowWidth': 0}">GEST STARTED NOW!</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End banner -->
    <section id="intro" class="section section-no-border section-angled bg-light pt-5 m-0 mt-4">
        {{-- <div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 21rem 0;"></div> --}}
        <div class="container">
            <div class="row mb-2 counters">
                <div class="col-lg-10 text-center offset-lg-1">
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">NOS EXPERTS AU SERVICE DE VOTRE PROJET</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750"> chez <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        Parce que le succès d’un projet numérique repose sur des méthodes éprouvées et un haut niveau de compétences technique, nous mettons à votre disposition notre équipe d’experts.
                        Chaque projet digital est unique. C’est pourquoi nous réalisons un accompagnement sur mesure avec une équipe de spécialistes expérimentés sur vos problématiques. Selon vos enjeux, nos experts analysent votre système applicatif et vous proposent un plan d’action détaillé ainsi qu’une feuille de route adaptée.
                        Nous vous proposons différentes prestations pour vous aider dans les diverses phases de votre projet. Bénéficiez d’un accompagnement personnalisé.
                    </p>
                </div>
            </div>

            <div class="row featured-boxes featured-boxes-style-4">
                <div class="col-md-4 col-lg-4">
                    <div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                        <div class="box-content px-4">
                            <i class="icon-featured icon-screen-tablet icons text-12"></i>
                            <h4 class="font-weight-bold text-color-dark pb-1 mb-2">
                                CONCEPTION LOGICIELLE STRUCTURÉE ET DÉTAILLÉE
                            </h4>
                            <p class="mb-0">
                                Nos business analysts sont certifiés en ingénierie des exigences (IREB). Nous garantissons un haut niveau de définition des spécifications fonctionnelles et techniques de votre projet web ou mobile.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeIn">
                        <div class="box-content px-4">
                            <i class="icon-featured icon-layers icons text-12"></i>
                            <h4 class="font-weight-bold text-color-dark pb-1 mb-2">
                                AUDIT
                            </h4>
                            <p class="mb-0">
                                Vous souhaitez faire le point sur votre logiciel ou votre système applicatif ? Vous ne savez pas exactement ce que contient votre logiciel, comment le faire évoluer ? Nos experts réalisent l’audit de vos solutions numériques grâce à une méthodologie éprouvée.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeIn">
                        <div class="box-content px-4">
                            <i class="icon-featured icon-magnifier icons text-12"></i>
                            <h4 class="font-weight-bold text-color-dark pb-1 mb-2">
                                DÉVELOPPEMENT APPLICATIF
                            </h4>
                            <p class="mb-0">
                                Vous avez besoin de conseils ou d’accompagnement pour mener à bien la réalisation d’un projet applicatif ? Nous sommes spécialisés dans le développement de solutions sur-mesure. Contactez-nous.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row featured-boxes featured-boxes-style-4">
                <div class="col-md-6 col-lg-6">
                    <div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                        <div class="box-content px-4">
                            <i class="icon-featured icon-screen-tablet icons text-12"></i>
                            <h4 class="font-weight-bold text-color-dark pb-1 mb-2">
                                CONTRÔLE DE LA DETTE TECHNIQUE
                            </h4>
                            <p class="mb-0">
                                Audit, contrôle en continu, tests logiciels : nous traquons et pilotons la dette technique afin de limiter son accumulation, en toute transparence avec vous.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="featured-box featured-box-primary featured-box-effect-4 appear-animation" data-appear-animation="fadeIn">
                        <div class="box-content px-4">
                            <i class="icon-featured icon-magnifier icons text-12"></i>
                            <h4 class="font-weight-bold text-color-dark pb-1 mb-2">
                                CHOIX DES TECHNOLOGIES
                            </h4>
                            <p class="mb-0">
                                Nos experts vous recommandent les meilleures solutions et les technologies qui répondront au mieux à vos exigences et à vos contraintes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12 col-lg-12">
                    <div class="get-started">
                        <a href="{{ url('reservation-diagnostic') }}" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3"> Beneficier d'un accompagnement personnalisé </a>
                        {{-- <div class="learn-more">or <a href="index.html">learn more.</a></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="intro" class="section bg-grey section-no-border section-angled pt-5 m-0 mt-4">
        {{-- <div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 21rem 0;"></div> --}}
        <div class="container">
            <div class="row mb-2 counters">
                <div class="col-lg-10 text-center offset-lg-1">
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">NOTRE ENGAGEMENT PHARE </h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">GARANTIR LA QUALITÉ ET LA PÉRENNITÉ DES <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">PROJETS NUMÉRIQUES</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-2 pb-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        Parce que garantir la qualité et la pérennité des projets numériques est crucial pour les entreprises, nous avons développé un logiciel unique permettant une documentation exhaustive des fonctionnalités, exigences, cas d’utilisations, user stories…
                    </p>

                    <p class="text-1rem text-color-default negative-ls-05 pt-2 pb-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        Nous mettons notre logiciel innovant et unique sur le marché au service de votre projet. Cela nous permet de vous certifier la complétude de la documentation rédigée par nos experts pour répondre à vos exigences de qualité tout en assurant une haute productivité de nos équipes de développement.
                    </p>

                    <p class="text-1rem text-color-default negative-ls-05 pt-2 pb-2 mb-2 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        Dès la phase de conception, nous vous accompagnons vers la réussite en garantissant une définition très fine de votre projet
                        via des spécifications structurées de haute qualité.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="home-intro mb-0" id="home-intro">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-8">
                    <p>
                        LA QUALITÉ DE NOS RÉALISATIONS EST LE REFLET DE NOTRE HAUT NIVEAU <span class="highlighted-word highlighted-word-animation-1 text-color-primary font-weight-semibold text-5">D’EXIGENCES</span>
                        <span> cervea est une entreprise innovante reconnue pour son haut niveau de maîtrise et son expertise des méthodes de conception et de programmation avancées.
                            Nous confier votre projet, c’est vous assurer d’un rendu pérenne de très haute qualité.</span>
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="get-started text-left text-lg-right">
                        <a href="{{ url('reservation-diagnostic') }}" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3"> Demander un diagnostic</a>
                        {{-- <div class="learn-more">or <a href="index.html">learn more.</a></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Notre collaboration -->
    @include('client.Sections.collaborations')

    <!-- Nos clients   -->
    @include('client.Sections.nos-clients')

    <!-- Nos ressources -->
    @include('client.Sections.ressources')

    <!-- Nos realisations  -->
    @include('client.Sections.realisations')
@endsection

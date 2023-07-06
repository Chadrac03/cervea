@extends('client.layout')

@section('content')

    <!--Banner  -->
    <div class="owl-carousel-wrapper" style="height: 650px;">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-35px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(asset/img/dow/dev-2.png); background-size: cover; background-position: center; height: 500px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7 text-center">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    web et mobile
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Développement web et mobile </h3>
                                <p class="text-3 text-color-light font-weight-light opacity-7 text-center" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">
                                    Soyez au cœur de la concrétisation de votre solution.
                                </p>
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
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}" >DÉVELOPPEMENT D’APPLICATIONS WEB ET MOBILES</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750"> chez <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        Le développement d’applications web et mobiles sur-mesure est le cœur d’activité d’cervea.
                        Nous réalisons des applications professionnelles B2B ou B2C qui ont le plus souvent pour but de digitaliser les processus métier d’entreprises dans des secteurs d’activité variés (Agro industrie, Énergie, Santé, Transport, Commerce, Sport, Ressources Humaines, …).
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-primary border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/svd-2.jpg') }}" alt="">
                </div>
                <div class="col-lg-7 pl-lg-5">
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold"> UNE MÉTHODOLOGIE BASÉE SUR LES ÉCHANGES </strong></h4>
                        <p>Vous restez au cœur des échanges tout au long du développement de votre solution grâce à l’environnement collaboratif que nous mettons en place pour faciliter nos interactions.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold"> UNE EXPERTISE RENFORCÉE </strong></h4>
                        <p>Nous réalisons vos applications à partir de nombreux langages tels que PHP (principalement Angular et Symfony), .Net, Java, etc. Nos experts vous accompagnent aussi bien dans les langages natifs des systèmes d’exploitation mobiles qu’avec la plateforme Xamarin ou Flutter. Notre veille renforcée et les formations régulières de nos équipes vous permettent de bénéficier des meilleurs conseils et de la meilleure expertise, quels que soient les langages ou les technologies / frameworks utilisés.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold"> NOTRE VISION DE LA QUALITÉ </strong></h4>
                        <p>Convaincus par la force de l’expertise, nos développeurs maîtrisent sur le bout des doigts un à deux langages, pas plus, afin de répondre à de hauts niveaux d’exigence et de qualité.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- Innovation -->
<section class="section bg-dark border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
    <div class="container py-4">
        <div class="row mb-2 counters">
            <div class="col-lg-10 text-center offset-lg-1">
                <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}" style="color: white;">ASSURER LA RÉUSSITE DE VOTRE PROJET</h2>
                <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750"> chez <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                    cervea est une entreprise innovante reconnue pour son haut niveau de maîtrise et son expertise des méthodes de conception et de programmation avancées. Nous confier votre projet, c’est vous assurer d’un rendu de haute qualité.
                    Nos travaux de développement sont précédés de phases de conception : spécifications fonctionnelles, maquettage haute fidélité,  spécifications techniques. Ces travaux de conception sont itératifs et collaboratifs. Votre validation permet de démarrer la phase de développement.
                    Nous adoptons la méthode de gestion de projet et de développement de votre choix :
                </p>
            </div>
        </div>
        <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
            <div class="col-lg-7 pl-lg-5 text-center">
                <h2 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold"></strong></h2>
                <div class="row">
                    <div class="feature-box feature-box-style-2 ">
                        <div class="card border-0 border-radius-0 bg-grey py-4 px-3">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">LA MÉTHODE "CLASSIQUE"</h4>
                                <p class="card-text mt-3">
                                    L’approche  “classique” (cycle de développement en V) consiste à définir l’ensemble des fonctionnalités du projet, les spécifier de façon détaillée, les développer puis les tester avant validation et mise en service. Cette méthode est adaptée aux projets que vous nous confiez en sous-traitance avec un engagement au forfait sur devis. À l’issue de la phase de conception, nous vous garantissons la réalisation de l’intégralité de votre application à un coût fixe et dans un délai imparti.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="feature-box feature-box-style-2  mt-3">
                        <div class="card border-0 border-radius-0 bg-grey py-4 px-3">
                            <div class="card-body">
                                <h4 class="card-title mb-1 text-4 font-weight-bold">LA MÉTHODE AGILE</h4>
                                <p class="card-text mt-3">
                                    La méthode agile s’appuie sur un cadre méthodologique léger, basé sur la communication permanente entre l’équipe de développement et le donneur d’ordre. Le maître mot est la flexibilité, tant en termes de planification que d’implémentation des fonctionnalités de l’application. Cette méthode est adaptée aux projets les plus susceptibles d’évolutions, souvent les plus innovants.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                <div class="row pb-5 pb-lg-0 ml-3">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/p6.jpg') }}" alt="">
                </div>
                <div class="row align-items-center mt-5">
                    <div class="col-lg-6">
                        <div class="get-started text-center text-left">
                            <a href="{{ url('#') }}" class="btn btn-light btn-lg text-3 font-weight-semibold px-4 py-3"> brefiez nous</a>
                            {{-- <div class="learn-more">or <a href="index.html">learn more.</a></div> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="get-started text-center text-right">
                            <a href="{{ url('reservation-diagnostic') }}" class="btn btn-primary btn-md text-3 font-weight-semibold px-4 py-3"> Demander un diagnostic</a>
                            {{-- <div class="learn-more">or <a href="index.html">learn more.</a></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12 col-lg-12">
                <div class="feature-box feature-box-style-2 ">
                    <p class="text-1rem text-color-default negative-ls-05 pt-4 mt-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        À l’issue de chaque phase de développement faisant l’objet d’un livrable, nous réalisons les tests prévus dès la phase de conception : tests techniques (tests unitaires et d’intégration), tests fonctionnels (automatisés pour les fonctionnalités les plus utilisées et les plus critiques). Nous livrons ensuite l’application sur un environnement dit “de recette” qui vous permet de réaliser vos propres tests avant de lancer l’application “en production”.
                        Cette méthodologie éprouvée nous permet de vous délivrer un produit de qualité, qui répond intégralement à vos exigences. L’ensemble du code source de l’application vous appartient, y compris les composants réalisés par AxioCode et utilisés pour les besoins de votre application.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fin INNOVATION -->


<section class="section bg-grey border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
    <div class="container py-4">
        <div class="row mb-2 counters">
            <div class="col-lg-10 text-center offset-lg-1">
                <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">GOUVERNANCE DE PROJET</h2>
            </div>
        </div>
        <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
            <div class="col-md-4 col-lg-4 pl-lg-4 text-center">
                <div class="feature-box feature-box-style-2 ">
                    <div class="card border-0 border-radius-0 bg-grey py-4 px-3" style="height: 550px;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Comité de pilotage</h4>
                            <p class="card-text mt-3">
                                Nous préconisons la mise en place d’un Comité de Pilotage qui réunit les représentants du donneur d’ordres, de l’assistance à maîtrise d’ouvrage le cas échéant, et d’cervea (chargé de compte et chef de projet).
                                Le Comité de Pilotage assure la supervision du projet et prend les décisions nécessaires à sa bonne réalisation. Il se réunit à une fréquence adaptée au projet, en général toutes les 4 à 6 semaines. Il se déroule dans les locaux d’AxioCode ou en visioconférence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 pl-lg-4 text-center">
                <div class="feature-box feature-box-style-2 ">
                    <div class="card border-0 border-radius-0 bg-grey py-4 px-3" style="height: 550px;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Comité de projet</h4>
                            <p class="card-text mt-3">
                                En complément des Comités de pilotage, lorsqu’un projet est en cours de réalisation, nous préconisons la mise en place d’un Comité de projet qui réunit chaque semaine les Chefs de projet du donneur d’ordre et d’cervea.
                                Les revues de projet hebdomadaires permettent de traiter des questions techniques, de faire le point sur les spécifications, l’avancement des travaux, les tests, …. Ces réunions se font généralement à distance, par téléphone ou en visioconférence.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 pl-lg-4 text-center">
                <div class="feature-box feature-box-style-2 ">
                    <div class="card border-0 border-radius-0 bg-grey py-4 px-3" style="height: 550px;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Environnement collaboratif</h4>
                            <p class="card-text mt-3">
                                Nous mettons en place un environnement GitLab. Cet espace de travail permet de gérer les échanges entre les équipes au quotidien.
                                GitLab offre également la possibilité de gérer l’intégralité des demandes de corrections ou de changements avec un historique de l’ensemble des échanges.
                            </p>
                            <a href="#" class="btn btn-primary btn-modern">contactez nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
    <div class="col-md-4 mb-4 mb-md-0">
        <img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ url('asset/img/layout-styles.png') }}" alt="layout styles" />
    </div>
    <div class="col-md-8 pl-md-5">
        <h2 class="font-weight-normal text-6 mb-3">DES SOLUTIONS MAINTENABLES ET ÉVOLUTIVES POUR <strong class="font-weight-extra-bold"> PRÉPARER L'AVENIR</strong></h2>
        <p class="text-4">
            Parmi nos 4 grandes valeurs : l’expertise technique et  la qualité. Nous nous engageons à répondre à de hauts niveaux d’exigences pour assurer la qualité et la pérennité des applications. Nous développons vos applications web et mobiles sur un socle technique fiable pour assurer leur maintenabilité et évolutivité sur les années à venir.</p>
        <p>Pour préparer au mieux l’avenir, nous vous proposons des services de support, maintenance applicative et évolutive, supervision d’infrastructure, supervision applicative, des tests de vulnérabilité mensuels, …  </p>
        <div class="get-started text-left text-lg">
            <a href="#" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3"> L'innovation chez cervea </a>
            {{-- <div class="learn-more">or <a href="index.html">learn more.</a></div> --}}
        </div>
    </div>
</div>

    <!-- Notre collaboration -->
    @include('client.Sections.collaborations')

    <!-- Projet  -->
    @include('client.Sections.technologie-utilise')

    <!-- Nos ressources -->
    @include('client.Sections.ressources')

    <!-- Nos realisations  -->
    @include('client.Sections.realisations')


@endsection

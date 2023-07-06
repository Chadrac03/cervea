@extends('client.layout')

@section('content')

    <!--Banner  -->
    <div class="owl-carousel-wrapper" style="height: 650px;">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-35px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(asset/img/dow/bg-2.jpg); background-size: cover; background-position: center; height: 650px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7 text-center">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    Applications métier et terrain
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Applications métier et terrain </h3>
                                <p class="text-3 text-color-light font-weight-light opacity-7 text-center" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">Apportez à vos agents sur le terrain des solutions mobiles et connectées qui augmenteront leur efficacité.
                                    Automatisez la planification de vos opérations grâce à des données en temps réel et offrez à vos opérateurs un outil d’intervention et d’aide à la décision grâce à vos datas, à la géolocalisation, à la blockchain ou à un algorithme.</p>
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
            <div class="row mb-5 counters">
                <div class="col-lg-10 text-center offset-lg-1">
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">DES APPLICATIONS MÉTIERS ET DE REMONTÉE DES DONNEES TERRAIN</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">MÉTIERS ET DE REMONTÉE DES <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">DONNÉES TERRAIN</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        Une application métier est une application informatique qui vous permet de gérer différentes activités de votre entreprise. Elle vous permet d’informatiser et d’automatiser vos processus. Une telle application est spécifique à votre métier ou à votre entreprise car elle fonctionne selon vos processus. Développer une application métier sur-mesure pour votre entreprise vous apporte une plus-value et un retour sur investissement rapide.
                        Par exemple, des équipes de techniciens sont en intervention et effectuent le relevé d’équipements sur le terrain. Les formulaires sont digitalisés et simplifiés pour plus d’efficacité et de fiabilité. Les données collectées sont disponibles en temps réel dans l’application, pour le management, le support ou le back office, les données sont accessibles en temps réel et peuvent être affichées sous forme de tableau de bord ou de cartographie interactive. Les services peuvent collaborer plus efficacement et la gestion des interventions est plus efficace.
                    </p>
                </div>
            </div>
        </div>
    </section>


<section class="section section-primary border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
    <div class="container">
        <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
            <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/dev-mobi.png') }}" alt="">
            </div>
            <div class="col-lg-7 pl-lg-5">
                <div class="row my-2">
                    <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">ANTICIPEZ VOS INTERVENTIONS</strong></h4>
                    <p>Améliorez la planification de vos interventions grâce à la donnée et à la géolocalisation. Mettez en place un outil de maintenance prédictive pour détecter les pannes plus rapidement. </p>
                </div>
                <div class="row my-2">
                    <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">APPORTEZ DE NOUVELLES FONCTIONNALITÉS À VOS ÉQUIPES</strong></h4>
                    <p>Simplifiez les prises de décision de vos agents grâce à des données partagées en temps réel accessibles en continu (synchronisation différée des données en cas d’absence de connexion internet). Mettez en place des fonctionnalités qui fiabilisent l’information : localisation GPS, puces RFID, ….</p>
                </div>
                <div class="row my-2">
                    <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">GAGNEZ EN EFFICACITÉ</strong></h4>
                    <p>Suivez les interventions de vos agents en temps réel, mesurez votre rentabilité, anticipez les formations ou les interventions. Utilisez la donnée terrain pour vous aider dans votre processus décisionnel en mettant en place un outil d’aide à la décision.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fin Application metier et remontées des données de terrain -->


<!-- securiser les interventions -->
<section class="section border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
    <div class="container">
        <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
            <div class="col-lg-7 pr-lg-5">
                {{-- <h2 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">SOLUTION SUR-MESURE</strong></h2>
                <p>CRÉER UNE SOLUTION MÉTIER SUR-MESURE POUR VOTRE ENTREPRISE</p> --}}
                <div class="row pt-4 my-5">
                    <div class="col-md-12 col-lg-12">
                        <div class="feature-box feature-box-style-2 mb-4">
                            <div class="feature-box-icon">
                                <i class="icons icon-support text-color-primary"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold text-4 mb-0">ENEDIS : SÉCURISER LES INTERVENTIONS TERRAINS EN PRÉSENCE D'AMIANTE</h4>
                                <p class="mb-4">
                                    Enedis a fait appel à Axiocode pour la digitalisation de certains de ses processus métier. Dans un premier temps, Enedis souhaitait pouvoir identifier la présence d’amiante dans les équipements avant d’opérer des maintenances. Nous avons ainsi développé pour Enedis une application mobile afin d’identifier les postes électriques et de permettre aux intervenants de dresser un état des sites en présence d’amiante. L’application permet également de mettre à disposition des agents les procédures d’intervention adaptées à chaque situation pour une meilleure sécurité en intervention.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/ac-2.jpg') }}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- Fin Securiser les interventions -->

<div class="home-intro mb-0" id="home-intro">
    <div class="container">

        <div class="row align-items-center">
            <div class="col-lg-8">
                <p>
                    cervea s’adapte à vos besoins pour créer l’outil qui vous aidera à atteindre vos objectifs. Nous vous accompagnons dans la conception, le développement, la mise en œuvre <span class="highlighted-word highlighted-word-animation-1 text-color-primary font-weight-semibold text-5">et la maintenance</span>
                    <span> Et nous avons accompagné de nombreuses entreprises dans la réalisation de leurs applications métier. </span>
                </p>
            </div>
            <div class="col-lg-4">
                <div class="get-started text-left text-lg-right">
                    <a href="#" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3"> Demander un diagnostic</a>
                    {{-- <div class="learn-more">or <a href="index.html">learn more.</a></div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Notre collaborations -->
@include('client.Sections.collaborations')

<!-- Nos ressources -->
@include('client.Sections.ressources')

<!-- Nos realisations  -->
@include('client.Sections.realisations')

@include('client.Sections.autres-solutions')

@endsection

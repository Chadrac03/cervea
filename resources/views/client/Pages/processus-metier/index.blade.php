@extends('client.layout')

@section('content')

    <!--Banner  -->
    <div class="owl-carousel-wrapper" style="height: 650px;">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-35px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(img/slides/slide-corporate-2-1.jpg); background-size: cover; background-position: center; height: 400px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7 text-center">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    Processus métier
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Processus métier </h3>
                                <p class="text-3 text-color-light font-weight-light opacity-7 text-center" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">Digitalisez vos processus métiers avec des solutions digitales développées sur-mesure en quelques semaines seulement.</p>
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
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">DIGITALISER SES PROCESSUS MÉTIERS</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750"> chez <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        La transformation digitale en entreprise commence par la mise en place de solutions numériques permettant d’améliorer l’expérience utilisateurs, la relation client, la collaboration et l’efficacité des équipes. Elle fait évoluer la chaîne de valeur d’une entreprise avec des canaux digitaux. Il s’agit de digitaliser les processus métiers, les expertises et les services. En tant qu’experts des technologies web et mobiles, nous vous apportons notre conseil pour mettre en œuvre efficacement votre solution digitale et calculer son retour sur investissement.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-primary border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/gallery/gallery-1.jpg') }}" alt="">
                </div>
                <div class="col-lg-7 pl-lg-5">
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">UNE SOLUTION DISPONIBLE EN CONTINU</strong></h4>
                        <p>Notre philosophie « offline first » (disponible en continu) permet à votre solution d’être efficiente sur le terrain, même sans connexion internet, tout en vous garantissant des données fiables et à jour. Suivez les interventions en temps réel et sécurisez-les avec des instructions spécifiques, des guides, de l’information, etc. en fonction de l’historique et du contexte.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">GAIN DE TEMPS ET EFFICACITÉ</strong></h4>
                        <p>Automatisez simplement et rapidement vos processus pour permettre à vos collaborateurs de se concentrer sur des tâches à valeur ajoutée.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">ADAPTÉE SPÉCIFIQUEMENT À VOS BESOINS</strong></h4>
                        <p>Utilisez tout le potentiel d’un développement sur-mesure pour aider vos collaborateurs, organiser vos plannings d’interventions, identifier et historiser des équipements, etc.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">LA DONNÉE AU SERVICE DE LA PRISE DE DÉCISION</strong></h4>
                        <p>Vos données viennent enrichir les bases de savoir de vos collaborateurs. Simplifiez les prises de décision de vos agents grâce à des données en temps réel, … Améliorez rapidement et simplement vos performances business. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row mb-2 pb-3">
                <div class="col-md-6 col-lg-- mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="card border-0 border-radius-0 bg-grey py-4 px-3" style="height : 500px;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Automatisation des processus métiers</h4>
                            <p class="card-text mt-3">
                                Automatiser les processus métiers répétitifs et chronophages permet à vos équipes de se concentrer sur des tâches à plus forte valeur ajoutée. Les entreprises gagnent en fiabilité et en performance grâce à l’automatisation des processus et l’accélération du traitement des données. Accédez en temps réel à vos informations métiers.
                                Nos spécialistes web et mobiles vous accompagnent dans votre stratégie digitale pour atteindre vos objectifs. Nous développons des solutions métiers innovantes et à haut niveau d’automatisation.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-- mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="card border-0 border-radius-0 bg-grey py-4 px-3" style="height : 500px;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">Développement d'applications métier</h4>
                            <p class="card-text mt-3">
                                cervea s’adapte à vos besoins uniques pour créer l’outil qui vous aidera à atteindre vos objectifs. Que vous souhaitiez améliorer vos communications internes, votre support client ou répondre à un nouveau besoin métier, nous vous accompagnons dans la création de vos applications web et mobiles. AxioCode vous accompagne à travers la mise en place de solutions logicielles web ou d’applications mobiles sur mesure (logiciels métiers, applications d’intervention terrain, plateformes de mise en relation, solution de gestion de la relation client, système de planification automatisé, système de géolocalisation, …). De la conception à la maintenance de votre solution, en passant par le choix des technologies et le développement de vos outils, nos équipes vous conseillent dans le développement de votre projet sur-mesure.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="home-intro mb-0" id="home-intro">
        <div class="container">

            <div class="row align-items-center">
                <div class="col-lg-12">
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

    <!-- Nos ressources -->
    @include('client.Sections.ressources')

    <!-- Nos realisations  -->
    @include('client.Sections.realisations')


@endsection

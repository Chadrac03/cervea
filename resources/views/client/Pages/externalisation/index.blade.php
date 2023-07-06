@extends('client.layout')

@section('content')

    <!--Banner  -->
    <div class="owl-carousel-wrapper" style="height: 650px;">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-35px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(asset/img/dow/extern.jpg); background-size: cover; background-position: center; height: 400px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7 text-center">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100 mt-4">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    Externalisation
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Externalisation</h3>
                                <p class="text-3 text-color-light font-weight-light opacity-7 text-center" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">Vous avez une roadmap très ambitieuse ? <br>Nous vous accompagnons pour garantir votre time to market.</p>
                                {{-- <a href="#" class="btn btn-light btn-outline text-color-light text-color-hover-dark font-weight-bold text-3 btn-px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800" data-plugin-options="{'minWindowWidth': 0}">GEST STARTED NOW!</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="intro" class="section section-no-border section-angled bg-light pt-5 m-0 mt-4">
        {{-- <div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 21rem 0;"></div> --}}
        <div class="container">
            <div class="row mb-5 counters">
                <div class="col-lg-10 text-center offset-lg-1">
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">EXTERNALISER VOS DÉVELOPPEMENTS WEB ET MOBILES</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">chez  <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">cervea préconise une méthodologie qui s’appliquent à l’ensemble du projet ou se décline par lots ou par modules selon l’ampleur des travaux :L’externalisation d’un projet de développement d’application web ou mobile présente les mêmes avantages que dans de multiples domaines d’activités économiques : une réduction significative des coûts, un gain de temps et d’énergie qui peuvent alors être mobilisés sur votre cœur de métier.</p>
                    <p>
                        Face à la pénurie de compétences techniques confirmées, l’externalisation est une solution pragmatique. Vous disposez de collaborateurs hautement qualifiés pour la durée de votre choix. Pas besoin de recrutements incertains, de formations lourdes, d’encadrement chronophage ni d’investissements dans les outils et les infrastructures de développement.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-primary border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/pf-5.jpg') }}" alt="">
                </div>
                <div class="col-lg-7 pl-lg-5">
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">UNE MÉTHODE QUI RÉPOND À VOS BESOINS</strong></h4>
                        <p>Nous mettons nos méthodologies et nos expertises à votre disposition pour vous apporter la meilleure valeur-ajoutée.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">EXTERNALISATION/OUTSOURCING</strong></h4>
                        <p>Nous assurons l’externalisation de vos développements depuis nos locaux, en mettant à votre disposition les équipes adéquates pour répondre à vos exigences en termes de langage, de méthodologie et de délais. Nous prenons en charge l’organisation des travaux à partir des demandes que vous formulez via notre outil collaboratif. Cette solution est à privilégier lorsque vous souhaitez déléguer la maîtrise d’œuvre de votre application.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">MÉTHODE AGILE</strong></h4>
                        <p>Pour des solutions métiers impactantes, même sans intervention d’un designer, nos maquettes HF (haute fidélité) sauront répondre aux attentes esthétiques de vos utilisateurs.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">NOS ÉQUIPES EN RÉGIE</strong></h4>
                        <p>En régie, nous mettons à votre disposition nos experts les mieux à même d’intervenir, à distance, sur votre environnement et vos technologies. Vous prenez en charge l’organisation des travaux, qui sont exécutés sur votre infrastructure. Cette solution convient aux projets dont vous souhaitez assurer la maîtrise d’œuvre.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Nos valeurs -->
    @include('client.Sections.sections-valeurs')

    <!-- Projet  -->
    @include('client.Sections.technologie-utilise')

    <!-- Notre collaboration -->
    @include('client.Sections.collaborations')

    <!-- Nos ressources -->
    @include('client.Sections.ressources')

    <!-- Nos realisations  -->
    @include('client.Sections.realisations')


@endsection

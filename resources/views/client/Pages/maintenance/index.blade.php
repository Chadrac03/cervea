@extends('client.layout')

@section('content')

    <!--Banner  -->
    <div class="owl-carousel-wrapper" style="height: 650px;">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-35px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(asset/img/dow/svd-4.jpg); background-size: cover; background-position: center; height: 500px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7 text-center">
                            <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                    maintenance
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Tierce Maintenance Applicative TMA</h3>
                                <p class="text-3 text-color-light font-weight-light opacity-7 text-center" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}">
                                    Petits ou grands besoins, nous avons la solution adaptée !
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
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">MAINTENANCE D’APPLICATION WEB ET MOBILE</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">chez  <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        Votre application web est en ligne ? Vos applications mobiles sont disponibles sur les stores ? Reste à les maintenir en bon état de fonctionnement et à les faire évoluer selon vos besoins.
                        Une application bien entretenue, c’est la garantie d’un service de qualité. C’est également un gage de pérennité de votre patrimoine applicatif.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-primary border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/p4.jpg') }}" alt="">
                </div>
                <div class="col-lg-7 pl-lg-5">
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">UNE OFFRE SUR-MESURE​</strong></h4>
                        <p>Vous recherchez un partenaire pour maintenir ou faire évoluer votre code ? Nous répondons à l’ensemble de vos exigences avec des offres sur-mesure.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">AUDIT APPLICATIF</strong></h4>
                        <p>Nous analysons le code source avant la reprise et vous apportons un diagnostic complet des paramètres fondamentaux de vos solutions digitales : qualité, sécurité, scalabilité, testabilité, maintenabilité.</p>
                    </div>
                    <div class="row my-2">
                        <h4 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">CONTINUITÉ ET TRANSPARENCE</strong></h4>
                        <p>Nous effectuons la reprise de code avec vos prestataires afin de garantir la meilleure continuité de vos services, et nous effectuons une transition en transparence pour vos utilisateurs finaux.</p>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 text-right">
                    <a href="{{ url('contact') }}" class="btn btn-dark rounded-0 mt-2">brefiez nous</a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <a href="{{ url('reservation-diagnostic') }}" class="btn btn-dark rounded-0 mt-2">demander un diagnostic</a>
                </div>
            </div> --}}
        </div>
    </section>


    <section id="intro" class="section bg-grey section-no-border section-angled pt-5 m-0 mt-4">
        {{-- <div class="section-angled-layer-bottom section-angled-layer-increase-angle bg-color-light-scale-1" style="padding: 21rem 0;"></div> --}}
        <div class="container">
            <div class="row mb-2 counters">
                <div class="col-lg-10 text-center offset-lg-1">
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">LA GARANTIE APPLICATIVE</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750">chez <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        Lorsque vous confiez le développement de votre solution numérique à cervea, nous vous proposons de souscrire à notre service de garantie.
                        La garantie applicative cervea couvre deux services :
                    </p>
                </div>
            </div>

            <div class="row mb-2 pb-3">
                <div class="col-md-6 col-lg-6 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="card border-0 border-radius-0 bg-grey py-4 px-3" style="height : 600px;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">La correction des défauts</h4>

                            <p class="card-text mt-3">
                                La correction des défauts de l’application (bugs) ayant pour origine le code produit ou repris en tierce maintenance applicative par cervea. Notre plateforme de surveillance applicative recueille automatiquement les anomalies, sans que vos utilisateurs ou vous-même n’ayez besoin d’intervenir.
                            </p>
                            <p>
                                Vous pouvez également signaler sur notre plateforme collaborative les défauts que vous constatez ; vous indiquez leur urgence ou leur criticité, en fonction de laquelle nous nous engageons sur un délai d’intervention.
                            </p>


                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="card border-0 border-radius-0 bg-grey py-4 px-3" style="height : 600px;">
                        <div class="card-body">
                            <h4 class="card-title mb-1 text-4 font-weight-bold">La mise à jour des technologies</h4>

                            <p class="card-text mt-3">
                                Lorsque cette mise à jour ne requiert pas la modification du code sourcede l’application, elle est réalisée à l’initiative d’cervea sous réserve de votre accord.
                            </p>

                            <p>
                                Lorsque cette mise à jour nécessite la modification du code source de l’application, notamment en cas d’annonce par l’éditeur d’une date de fin de support de version majeure. Celle-ci n’est pas couverte par le service de garantie applicative. Nous vous proposons dans ce cas une mise à jour dans le cadre de la maintenance applicative.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <p>
                    Le coût de la garantie applicative est de l’ordre de 7% de la valeur de l’application.
                    Elle est facturée de façon forfaitaire (mensuellement ou annuellement). Service garanti sans surprises !
                </p>
            </div>
        </div>
    </section>


    <section class="section bg-grey border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col-lg-12 pl-lg-5 text-center">
                    <div class="row my-2 text-center">
                        <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">EN SAVOIR PLUS SUR NOTRE SERVICE DE MAINTENANCE</h2>
                    </div>
                    <div class="row my-2 counters text-center">
                        <div class="accordion" id="accordion12">
                            <div class="card card-default">
                                <div class="card-header bg-dark" id="collap1">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle" data-toggle="collapse" data-target="#collaps01" aria-expanded="true" aria-controls="collapse12One">
                                            <h4 class="font-weight-bold text-9 mb-0 appear-animation" style="color: white;">MAINTENANCE APPLICATIVE</h4>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collaps01" class="collapse show" aria-labelledby="collap1" data-parent="#accordion12">
                                    <div class="card-body">
                                        <p class="mb-0">
                                            Le service de maintenance applicative cervea vous accompagne dans les évolutions que vous souhaitez apporter à votre application.
                                        </p>

                                        <p class="mb-0">
                                            Vous enregistrez vos demandes sur notre (Gitlab) en indiquant leur urgence ou leur criticité, en fonction de laquelle nous nous engageons sur un délai d’intervention. Nous vous fournissons une estimation du temps d’étude ou de réalisation. Vous décidez en connaissance de cause de la suite à donner et de la priorisation des travaux à effectuer. Vous définissez le volume mensuel ou annuel du support que vous estimez nécessaire, ce qui vous permet de réserver des ressources à notre planning. Mais notre facturation ne porte que sur les heures de support effectivement réalisées. Les relevés mensuels indiquent le temps passé sur chaque point de support.
                                        </p>

                                        <p class="mb-0">
                                            Pour les travaux qui dépassent quelques heures, si vous le souhaitez, nous pouvons passer en mode projet avec un engagement forfaitaire basé sur des spécifications fonctionnelles et techniques détaillées.
                                            Vous pouvez définir un volume de support mensuel maximum, au-delà duquel les travaux seront poursuivis le mois suivant, sauf contre ordre explicite de votre part.
                                            Le coût de la maintenance applicative est établi en fonction du volume d’heures prévu, à partir de 75 000 FCFA HT / heure.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header bg-dark" id="collap2">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle" data-toggle="collapse" data-target="#collaps02" aria-expanded="false" aria-controls="collapse12Two">
                                            <h4 class="font-weight-bold text-9 mb-0 appear-animation" style="color: white;">SUPERVISION D'INFRASTRUTURE</h4>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collaps02" class="collapse" aria-labelledby="collap2" data-parent="#accordion12">
                                    <div class="card-body">
                                        <p class="mb-0">
                                            Nous confions en sous-traitance à un partenaire intervenant 24/24 et 7j7 sur le monitoring, la mise à jour et les sauvegardes quotidiennes des serveurs dont l’hébergement est assuré par un prestataire agréé par AxioCode. Le service de monitoring interroge en continu l’architecture d’hébergement pour vérifier le bon fonctionnement matériel, système, applicatif et réseau.
                                        </p>

                                        <p class="mb-0">
                                            Le coût du service de supervision d’infrastructure est de 80 000 FCFA HT / mois / serveur, ajusté selon l’architecture de votre infrastructure.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header bg-dark" id="collap3">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle" data-toggle="collapse" data-target="#collaps03" aria-expanded="false" aria-controls="collapse12Three">
                                            <h4 class="font-weight-bold text-9 mb-0 appear-animation" style="color: white !important;">TEST DE VULNÉRABILITÉ</h4>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collaps03" class="collapse" aria-labelledby="collap3" data-parent="#accordion12">
                                    <div class="card-body">
                                        <p class="mb-0">
                                            Nous exécutons chaque mois un scan de vulnérabilité de votre application, avec une solution éprouvée du marché. Le rapport d’exécution ainsi que nos conseils vous sont transmis afin que vous puissiez décider des actions à mener.
                                        </p>

                                        <p>
                                            Le coût du service de tests de vulnérabilité est de 40 000 FCFA HT / mois / application.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row my-2">
                        <p>
                            Nos analyses, nos audits et notre vision vous permettent de disposer de paramètres complémentaires d’aide à la décision.
                            Orientés ROI, nous vous apportons les éléments essentiels à la réussite de vos projets digitaux et de vos solutions métiers.
                        </p>
                    </div>

                    <div class="row my-3">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <a href="{{ url('reservation-diagnostic') }}" class="btn btn-dark rounded-0 mt-2">demander un devis</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Notre collaboration -->
    @include('client.Sections.collaborations')

     <!-- Projet pleins d'innovation -->
     @include('client.Sections.section-projet')

    <!-- Nos ressources -->
    @include('client.Sections.ressources')

    <!-- Nos realisations  -->
    @include('client.Sections.realisations')

@endsection

@extends('client.layout')

@section('content')

    <!--Banner  -->
    <div class="owl-carousel-wrapper">
        <div class="owl-carousel dots-inside dots-horizontal-center show-dots-hover dots-light nav-style-1 nav-inside nav-inside-plus nav-dark nav-lg nav-font-size-lg show-nav-hover mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-35px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': true, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">
            <!-- Carousel Slide 2 -->
            <div class="position-relative overlay overlay-show overlay-op-7" data-dynamic-height="['650px','650px','650px','550px','500px']" style="background-image: url(asset/img/dow/eng.jpg); background-size: cover; background-position: center; height: 400px;">
                <div class="container position-relative z-index-3 h-100">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-lg-7 text-center mt-2">
                            <div class="d-flex flex-column align-items-center justify-content-center pt-4">
                                <h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium ls-0 px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
                                    <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                        engagement
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}"> Nos engagements </h3>
                                <p class="text-3 text-color-light font-weight-light opacity-7 text-center" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 30}"> </p>
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
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}">LA CHARTE QUALITÉ cervea</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750"><span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        cervea est une entreprise de services numériques spécialisée dans le développement web et mobile. Créée en 2013, AxioCode poursuit sa croissance dans un environnement de l’économie numérique en plein essor et s’engage autour de quatres grandes valeurs : expertise technique, qualité, esprit d’équipe, respect.
                    </p>
                </div>
            </div>

            <article class="post post-medium">
                <div class="row mb-3">
                    <div class="col-lg-5">
                        <div class="post-image">
                            <a href="#" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="icon-bg icon-feature-4"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="icon-bg icon-feature-4"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">Expertise technique</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="post-content pt-4">
                            <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-4"> Des langages de programmation, des exigences métiers, conseil et accompagnement </h2>
                            <p class="mb-0 pt-3">
                                L’expertise technique traduit une spécialisation et une compétence pointue dans les différents domaines du développement web et mobile sur-mesure. Chacun des collaborateurs d’AxioCode a vocation à progresser dans le but d’une expertise technique reconnue.
                            </p>

                            <p>
                                Nos clients attendent également de nos services un professionnalisme et une expertise qui leur donnent confiance dans la réussite de leurs projets.
                            </p>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post post-medium">
                <div class="row mb-3">
                    <div class="col-lg-5">
                        <div class="post-image">
                            <a href="#" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="icon-bg icon-feature-6"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="ficon-bg icon-feature-6"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">QUALITÉ</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="post-content pt-4">
                            <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-4"> La garantie d’une qualité de haut niveau</h2>
                            <p class="mb-0 pt-3">
                                La qualité désigne un haut niveau de finition, la perfection de nos services et des applications développées pour nos clients. Par notre travail au quotidien, nous avons à cœur de fournir un service de qualité et apprécié comme tel.
                            </p>

                            <p>
                                Nos clients attendent de nos réalisations sur-mesure un niveau de qualité maximum, à la hauteur de l’enjeu que représentent pour eux les applications qu’ils nous confient.
                            </p>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post post-medium">
                <div class="row mb-3">
                    <div class="col-lg-5">
                        <div class="post-image">
                            <a href="#" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="icon-bg icon-feature-7"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="icon-bg icon-feature-7"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">ESPRIT D'ÉQUIPE</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="post-content pt-4">
                            <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-4"> Esprit d’équipe, écoute et proximité </h2>
                            <p class="mb-0 pt-3">
                                Construire ensemble les applications de demain.
                                Notre coopération professionnelle au quotidien et la confiance réciproque que nous nous accordons sont de grands atouts pour notre réussite et celle de vos projets.
                            </p>

                            <p>
                                Nous aimons travailler ensemble pour créer des synergies, aider nos collègues, partenaires et collaborateurs, communiquer entre nous, partager nos expériences.
                                Nos développements sont 100% locaux, nous sommes proches de nos collaborateurs et leur offrons le meilleur cadre de travail possible.
                            </p>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post post-medium">
                <div class="row mb-3">
                    <div class="col-lg-5">
                        <div class="post-image">
                            <a href="#" class="text-decoration-none">
                                <span class="box-content px-1 py-4 text-center d-block">
                                    <span class="text-primary text-8 position-relative top-3 mt-3"><i class="icon-bg icon-feature-3"></i></span>
                                    <span class="elements-list-shadow-icon text-default"><i class="icon-bg icon-feature-3"></i></span>
                                    <span class="font-weight-bold text-uppercase text-1 negative-ls-1 d-block text-dark pt-2">RESPECT</span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="post-content pt-4">
                            <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-4"> Respect des délais, des clients, des équipes, des exigences. </h2>
                            <p class="mb-0 pt-3">
                                Le respect que l’on attend des autres est à l’image du respect qu’on leur porte. Nous sommes attentionnés et avons de l’égard pour nos collègues et pour nos clients. Nous faisons preuve de savoir vivre et de considération les uns envers les autres.
                            </p>

                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 text-center">
                                    <a href="{{ url('contact') }}" class="btn btn-dark rounded-0 mt-2">contactez un des experts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="section bg-grey border-0 py-4 m-0 appear-animation" data-appear-animation="fadeIn">
        <div class="container">
            <div class="row pt-4 appear-animation" data-appear-animation="fadeInUpShorter">
                <div class="col-lg-7 pr-lg-5">
                    <h2 class="font-weight-normal line-height-1"><strong class="font-weight-extra-bold">NOS MÉTHODES DE TRAVAIL</strong></h2>
                    <div class="row pt-4 my-5">
                        <div class="col-md-12 col-lg-12">
                            <div class="feature-box feature-box-style-2 mb-4">
                                <div class="feature-box-icon">
                                    <i class="icons icon-doc text-color-primary"></i>
                                </div>
                                <div class="feature-box-info">
                                    <p class="mb-4">
                                        Nous avons construit un cadre et une organisation propice au développement et à la réussite de projets complexes.  Nous accompagnons nos clients dès la réflexion de leur projet, dans le développement de solutions qui répondent aux problématiques de leur entreprise. Cet accompagnement permet de définir les spécifications fonctionnelles et techniques du projet et d’assurer un suivi continu.
                                        Nous utilisons des technologies modernes qui nous permettent de développer des solutions pour des projets complexes, innovants et adaptables à différents environnements. Nos principales technologies sont Symfony/Angular pour le web,  Xamarin en mobile natif (iOS & Android) et Flutter.
                                        Nous avons quatre équipes de production. Trois équipes de production prennent en charge les différents projets de nos clients. Une équipe de production prend en charge des projets d’outillage interne pour augmenter notre productivité et la qualité de nos services.
                                        Nous procédons à des tests approfondis (revue de code, tests unitaires, tests fonctionnels automatisés) et nous garantissons la qualité de nos produits. Nous avons mis en place un environnement de travail avec des outils collaboratifs pour favoriser des échanges courts et rapides.
                                        Nous utilisons au quotidien des outils comme GitLab, GitKraken, Visual Studio Code, PhP Storm, Sketch, Marvel, Sentry ou encore Squash TM. Nous nous donnons les moyens d’améliorer en continu nos méthodes, nos process et nos services. Nous développons des composants réutilisables qui permettent d’accélérer les phases de développement d’applications web et mobiles sur-mesure.
                                        Nous développons les compétences de nos collaborateurs par des actions de formation, de certification et d’expérimentation.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-items-center justify-content-center justify-content-lg-between pb-5 pb-lg-0">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/dow/svd-1.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Fin Solution sur mesure -->

    @include('client.Sections.gouvernance-projet')

    <section class="section bg-color-grey-scale-1 section-height-3 border-0 m-0">
        <div class="container p-4">
            {{-- <div class="row pt-2 mb-2 text-center">
                <h2 class="font-weight-bold mb-3 ml-5 text-center">MODERNISER VOTRE APPLICATION</h2>
            </div> --}}
            <div class="row align-items-center py-5 appear-animation" data-appear-animation="fadeInRightShorter">

                <h5 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold">DES SOLUTIONS WEB ET MOBILES DE HAUTE QUALITÉ</strong> </h5>
                <p class="text-4">
                    cervea est une entreprise innovante reconnue pour son haut niveau de maîtrise et son expertise des méthodes de conception et de programmation avancées.
                    Que votre projet nécessite la réalisation d’un logiciel web ou d’une application mobile, nous confier votre projet, c’est vous assurer d’un rendu de très haute qualité.
                    Nous avons développé un outil unique sur le marché pour garantir la qualité et la pérennité des projets numériques. Dès la phase de conception, nous vous accompagnons vers la réussite en garantissant une définition très fine de votre projet.
                </p>
            </div>
        </div>
    </section>

    @include('client.Sections.autres-solutions')

    <!-- Nos clients   -->
    @include('client.Sections.nos-clients')


@endsection

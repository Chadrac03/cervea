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
                                    application mobile flutter
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">Application mobile avec flutter </h3>
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
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}" >DÉVELOPPER AVEC FLUTTER</h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750"> chez <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        Dans un article précédent, nous avons analysé pourquoi et comment moderniser une application avec Flutter. Mais qu’en est-il lorsque l’application est encore au stade du projet? <br>
                        En premier : Faire le choix du langage de programmation à utiliser et des technologies associées. Est-ce que vous cherchez à développer sur iOS ? Développer sur Android ? Peut-être les deux ! Et pourquoi pas rendre votre application disponible aussi sur le web ? <br>
                        Des interrogations que Flutter, le framework multi-plateformes de Google, résout.
                        Nous allons voir dans cet article, les avantages de ce framework, puis comment développer avec Flutter.
                    </p>
                </div>
            </div>
            <div class="row counters">
                <div class="col-lg-12 text-center">
                    <div class="accordion" id="accordion12">
                        <div class="card card-default">
                            <div class="card-header" id="collapse12HeadingOne">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle" data-toggle="collapse" data-target="#collapse12One" aria-expanded="true" aria-controls="collapse12One">
                                       Sommaire
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse12One" class="collapse show" aria-labelledby="collapse12HeadingOne" data-parent="#accordion12">
                                <div class="card-body">
                                    <p class="mb-0">
                                        <ul class="text-1rem text-color-default negative-ls-05 text-left">
                                            <li>
                                                Construire un projet de développement avec Flutter
                                            </li>
                                            <li>Comment developper avec flutter ?</li>
                                            <li>Conclusion </li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
        <div class="col-md-12 pl-md-5">
            <h2 class="font-weight-normal text-6 mb-3">CONSTRUIRE UN PROJET DE DÉVELOPPEMENT <strong class="font-weight-extra-bold">AVEC FLUTTER </strong></h2>

            <h4> POURQUOI UTILISER FLUTTER ? </h4>
            <p class="text-4">
                Flutter est un kit de développement logiciel (SDK) d’interface utilisateur open-source, développé par Google, qui utilise Dart comme langage de programme.
            </p>
            <p>
                <strong class="font-weight-extra-bold">
                    Son principe est d’être multi-plateformes : pouvoir développer en un code des applications flexibles au déploiement sur mobile et web, toutes marques et types d’environnements confondus.
                </strong>
            </p>
            <p>
                Concrètement, si vous êtes aux prémices de la gestion de projet de votre application et que vous ne souhaitez pas fermer des opportunités quant aux choix stratégiques de déploiement de votre application, Flutter est le candidat idéal.
            </p>
            <p>
                Par exemple, prenons le cas d’une entreprise qui souhaite développer une application métier à destination de ses collaborateurs. Il est fort probable que ses employés aient un téléphone mobile différent. Traditionnellement, il faudrait développer cette application pour chaque types d’appareils : Android et iPhone. Concrètement, il faudrait développer en deux fois, avec un langage de programmation différent pour chacun. En utilisant Flutter, l’impératif de multiplication du travail est supprimé.
                Ce framework a deux types de widgets. D’un côté il y a les widgets communs, et de l’autre les spécifiques à chaque systèmes d’exploitation mobiles (iOS, Android, Harmony, etc.) et ordinateurs (Windows, Mac, Linux, etc.). Grâce à ce système, Flutter concrétise l’adage “build once, run everywhere”, un seul code pour tous les environnements.
                Dans notre quotidien de développeurs d’applications sur-mesure, une seule équipe est nécessaire à mobiliser pour développer une application qui utiliserait Flutter, au lieu d’avoir des besoins en compétences différents par système d’exploitation mobile et web.
            </p>
            <p>
                De fait, avec Flutter le développement est plus rapide (car un seul code est à produire) et moins énergivore en termes de ressources matérielles, financières et humaines.
            </p>

            <h4> SYSTÈMES D’EXPLOITATION ET LES DIFFÉRENTS TYPES D’APPLICATIONS </h4>
            <p>
                Pour mieux comprendre la prouesse technique et les bénéfices que permet Flutter, il faut d’abord comprendre comment les applications arrivent à fonctionner sur nos mobiles et ordinateurs (desktop).
            </p>
            <p>
                Chacun de nos appareils ont ce qu’on appelle un système d’exploitation, plus connu sous l’abréviation “OS” pour operating system en anglais. Cet OS est “l’ensemble des programmes permettant de faire fonctionner et contrôler un appareil informatique” (source: Le Robert). C’est sur ce système d’exploitation que les applications existent. <br>
                On retrouve selon le type d’appareil mobile :
                <ul class="text-1rem text-color-default negative-ls-05 text-left">
                    <li> Android, chez Google, </li>
                    <li> Blackberry, chez Blackberry </li>
                    <li> iOS, chez Apple </li>
                    <li> Harmony, chez Huawei </li>
                    <li> Meego, chez Nokia et Intel  </li>
                </ul>
            </p>
            <p>
                Et pour les ordinateurs, on retrouve les OS : Windows, OS X (chez Apple) et Linux.  <br>
                Tous permettent les fonctionnalités suivantes :

                <ul class="text-1rem text-color-default negative-ls-05 text-left">
                    <li> Gestion de la connectivité </li>
                    <li> Gestion de la mémoire du processeur</li>
                    <li> Gestion des fichiers et de la sécurité </li>
                    <li> Articulation entre toutes les autres applications. </li>
                </ul>

                Pour lesquelles, ces applications, existent de trois manières  : native, web ou hybride.
            </p>

            <h4> Les applications natives </h4>
            <p>
                Traditionnellement une application est développée pour un type de système d’exploitation. C’est ce qu’on appelle une application native. Elles sont codées dans les langages de programmation natifs de chaque système d’exploitation.
            </p>
            <p>
                Ce type d’application est pertinent si vous ciblez le grand public et un parc hétérogène de mobiles. Car, conçu exclusivement pour le type d’OS choisi, elles communiquent facilement avec.
                L’inconvénient en état est qu’il faut procéder à un développement additionnel si on souhaite avoir son application disponible sur d’autres appareils mobiles et d’autres systèmes d’exploitations mobiles que celui choisi au départ. <br>
                Ceci dit, des solutions existent pour remédier à cet inconvénient. L’une d’entre elles étant d’opter pour un langage multi-plateforme plutôt que natif comme il est question en utilisant le framework Flutter.
            </p>

            <h4> Les applications web </h4>
            <p>
                Ce sont des applications uniquement accessibles via un navigateur Web.
                Elles se différencient des applications mobiles car elles n’ont pas besoin d’être téléchargées et installées sur son appareil (ordinateur ou mobile). L’avantage est de ne pas être restreint au type de système d’exploitation utilisé.
                Et, codées en majorité avec CSS, HTML et JavaScript, elles se différencient d’un site web car elles sont plus interactives et plus complexes. Un site web fonctionne par requêtes Serveur / Navigateur, il est par essence statique. Alors qu’une application web utilise en plus un framework qui supporte beaucoup plus de code au niveau du backend. C’est le cas par exemple d’applications web : Google Keep ou Discord.
                Ainsi l’avantage d’une application web est la possibilité de développer plus de complexités entre le serveur et les navigateurs. Si bien qu’on a plus d’interactions avec son utilisateur, sans se limiter à tel ou tel système d’exploitation. Le tout sans avoir à le forcer à télécharger l’application en question.
            </p>

            <h4> Les applications hybrides </h4>
            <p>
                Tout comme les applications natives, les applications hybrides peuvent être installées sur smartphone. Elles sont, quant à elles, exécutées via un navigateur web. Elles sont développées en HTML5, un langage web également utilisé pour développer des applications hybrides. Ces applications ne sont pas aussi stables et rapides que des applications natives. Tous les systèmes hybrides conviennent parfaitement pour des applications de contenu par exemple (blog, recettes, tutos etc.), ou encore pour des besoins éphémères.
                En résumé, avant de développer votre application, vous devez réfléchir à quel type d’application correspond le mieux à votre objectif visé. Natives, web ou hybrides, chacune auront des avantages et des inconvénients à vous apporter, mais aussi des contraintes de développement. Flutter sera un framework pertinent pour limiter ces contraintes, du fait qu’il est flexible à tous types d’environnements de codage.
            </p>

            <h4>COMMENT INSTALLER FLUTTER </h4>
            <p>
                Si vous souhaitez développer vous même avec Flutter, cette partie vous indique comment installer le logiciel. Sinon rendez-vous au point suivant pour comprendre comment  développer avec Flutter.
                Pour installer Flutter cela va dépendre du système d’opération principal : Windows, macOS, Linux ou Chrome OS. Selon l’OS, différentes exigences sont à remplir pour pouvoir exécuter le programme :
            </p>
            <ul class="text-1rem text-color-default negative-ls-05 text-left">
                <li> Pour Windows : avoir un OS Windows 10 (64-bit) x86-64, au minimum, 1,64 GB de mémoire disponible, et l’installation préalable de Windows PowerShell 5.0 et Git for Windows 2.x </li>
                <li> Pour macOS : avoir 2,8 GB de mémoire disponible, et l’installation préalable de Xcode pour disposer ensuite de git  </li>
                <li>
                    Pour Linux : avoir un OS Linux (64-bit), 600 MB de mémoire, et disposer dans votre environnement des lignes commandes
                    <ul class="text-1rem text-color-default negative-ls-05 text-left">
                        <li> bash </li>
                        <li> curl </li>
                        <li> file </li>
                        <li> git 2.x </li>
                        <li> mkdir </li>
                        <li> rm </li>
                        <li> unzip </li>
                        <li> which </li>
                        <li> xz-utils </li>
                        <li> zip </li>
                    </ul>
                </li>
            </ul>
            Si vous répondez à toutes ces conditions vous pouvez vous rendre sur le site suivant et télécharger le dossier zip adéquat.
        </div>
    </div>

    <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
        <div class="col-md-12 pl-md-5">
            <h2 class="font-weight-normal text-6 mb-3">COMMENT DÉVELOPPER <strong class="font-weight-extra-bold">AVEC FLUTTER ?</strong></h2>

            <h4>LA STRUCTURE D’UNE APPLICATION FLUTTER </h4>
            <p class="text-4">
                Comme évoqué précédemment, le but de Flutter est d’être multi-plateformes. Le framework Flutter vous permet de développer en une seule fois plusieurs composants applicatifs : une application mobile Android, une application mobile iOS et une application web par exemple.
                La technologie Flutter repose sur des rendering library Skia et 2D graphiques en Dart.
                C’est un framework conçu en un système extensible par couches de bibliothèques indépendantes (qui n’ont pas accès aux couches inférieures), et dont chaque partie du niveau cadre est conçue pour être optionnelle et remplaçable.
            </p>

            <div class="row pb-5 pb-lg-0 ml-3 text-center">
                <div class="col-md-12 col-lg-12 text-center">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/gallery/gallery-1.jpg') }}" alt="">
                </div>
            </div>

            <p>
                On retrouve au centre de cette architecture le moteur Flutter : en majorité écrit en C++ dans Dart. Son rôle est double :

                <ul class="text-1rem text-color-default negative-ls-05 text-left">
                    <li> Installer tout ce qui compose les bibliothèques principales de Flutter (animation, graphiques, E/S de fichiers et de réseaux, plugins, etc.) </li>
                    <li> Exécuter la chaîne de code développée en Dart.  </li>
                </ul>

                Ensuite la structure de Flutter se compose de 4 éléments :

                <ul class="text-1rem text-color-default negative-ls-05 text-left">
                    <li> La bibliothèque Fondation : elle dispose de tous les packages requis, en langage Dart, pour les éléments de base de développement. </li>
                    <li> Les widgets : ils composent la conception de l’interface utilisateur de votre application (nous détaillons ce point plus bas dans l’article). </li>
                    <li> Les widgets spécifiques embedder plateform : des intégrateurs spécifiques aux différents systèmes d’exploitations, écrits dans leur langage natif (Java, C++, C/Objective-C++, etc.). Ils fournissent un point d’entrée et les éléments nécessaires à la bonne coordination avec le système d’exploitation sous-jacent. Pour savoir comment créer un cadre qui articule les API de l’embedder à partir d’un code unique.  </li>
                    <li>Le système d’exécution sur machine virtuelle (MV) : permet la visualisation directe du code (après rafraichissement) sans avoir à recompiler complètement celui-ci. Le travail de développement est plus rapide car plus simple pour visualiser ses modifications.  </li>
                </ul>
            </p>

            <h4>LANGAGE DE PROGRAMMATION DART PAR GOOGLE </h4>
            <p class="text-4">
                Développé depuis 2010, pour être une alternative à JavaScript, Dart est un langage de programmation optimisé client.
                Plusieurs types de données sont supportés :

                <ul class="text-1rem text-color-default negative-ls-05 text-left">
                    <li> Les chaînes de caractères (String) </li>
                    <li> Les nombres (int et double) </li>
                    <li> Les booléens (Vrai ou Faux / True ou False) </li>
                    <li> Les listes (Lists ou Arrays) </li>
                    <li> Les ensembles (Sets) </li>
                    <li> Les dictionnaires (Maps) </li>
                </ul>

                La plateforme Dart compile de deux manières. D’un côté en plateformes natives, pour les applications ciblées mobiles et desktop. On retrouvera ici une machine virtuelle qui compile en just-in-time (JIT) et une production de code ahead-of-time (AOT). Et de l’autre côté en plateforme Web, pour les applications qui ciblent uniquement le web. Le compilateur web fera la traduction directe de Dart vers JavaScript.
            </p>

            <div class="row pb-5 pb-lg-0 ml-3 text-center">
                <div class="col-md-12 col-lg-12 text-center">
                    <img class="img-fluid box-shadow-3 my-2 border-radius" src="{{ url('asset/img/gallery/gallery-1.jpg') }}" alt="">
                </div>
            </div>

            <p>
                Les avantages de Dart sont alors nombreux. C’est un langage open source, ce qui le rend accessible à tous gratuitement. Étant développé par Google, il s’assure une longévité sur une entreprise pérenne. Bien qu’étant un langage plutôt récent, la documentation évolue et s’agrandit.
                Pour en apprendre plus sur le langage Dart, voici notre sélection de plusieurs liens proposés par Google :

                <ul class="text-1rem text-color-default negative-ls-05 text-left">
                    <li> Installer DartPad  </li>
                    <li> Expérimenter l’écriture avec Dart via un navigateur </li>
                    <li> B.a.-ba du langage Dart  </li>
                    <li> Tutoriel pour écrire sa première ligne commande</li>
                    <li> Apprendre autour d’une communauté d’experts  </li>
                    <li> Explorer la documentation d’API de Dart  </li>
                    <li> Autres documentations sur Dart  </li>
                </ul>
            </p>

            <h4>LES WIDGETS FLUTTER </h4>
            <p class="text-4">
                Les widgets sont les éléments centraux dans Flutter. Ils se définissent comme étant un  “élément de base de l’interface graphique d’un logiciel” (Larousse). En exemple de widget on retrouve : barre d’outils, texte, image, bouton, etc.
                Dans Flutter les widgets s’organisent hiérarchiquement sous la forme d’une arborescence (tree), entre widgets parents et widgets enfants, et selon deux types de configuration :

                <ul class="text-1rem text-color-default negative-ls-05 text-left">
                    <li> StatelessWidget (sans états) : qui ne stockent pas de valeurs (comme de icônes et ou du texte)  </li>
                    <li> StatefulWidget (avec état) : qui stockent de la valeurs (comme un bouton qu’on sélectionnerait et qui activerait)  </li>
                </ul>

                On retrouve les catégories suivantes :

                <ul class="text-1rem text-color-default negative-ls-05 text-left">
                    <li> Les bases communes (pour tous les développements avec Flutter)   </li>
                    <li> Accessibilité  </li>
                    <li> Animation et mouvement </li>
                    <li> Actifs, images et icônes </li>
                    <li> Asynchrone </li>
                    <li> Cupertino (widget propre à Apple)  </li>
                    <li> Entrée </li>
                    <li> D’interaction (ex : les actions tactiles)  </li>
                    <li> Asynchrone D’interaction (ex : les actions tactiles) </li>
                    <li> Composants matériels (widget propre à Google) </li>
                    <li> Défilement (scroll) </li>
                    <li> Styling </li>
                    <li> Texte </li>
                </ul>

                Vous pouvez retrouver ici le détail de chacune de ces catégories sur ce lien.
            </p>
        </div>
    </div>


    <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
        <div class="col-md-12 pl-md-5">
            <h2 class="font-weight-normal text-6 mb-3">CONCLUSION </h2>

            <p class="text-4">
                Lorsque vous souhaitez développer votre application, il y a une question centrale : sur quel système d’exploitation mobile la déployer ?
                Si vous souhaitez déployer votre logiciel sur un maximum de systèmes mobiles et web, tout en optimisant la phase de développement, le framework Flutter est ce qui est le plus adapté.
                Bien que récent, Google assure sa fiabilité et une expansion de documentations pour se l’approprier. À l’avenir, ce type de développement (multi-plateformes) deviendra la norme.
                Alors intéressé pour développer votre projet avec la solution multi-plateformes Flutter ? <br>
                Si notre expertise Flutter vous intéresse vous pouvez directement nous contacter.
                cervea est une entreprise de développement de logiciel web et application mobile, dont la conviction est de vous accompagner du début et au-delà de votre projet applicatif.
            </p>

            <div class="row text-center mt-4">
                <div class="col-md-12 col-lg-12">
                    <div class="get-started">
                        <a href="{{ url('reservation-diagnostic') }}" class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3"> Contactez un de nos experts </a>
                        {{-- <div class="learn-more">or <a href="index.html">learn more.</a></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('client.Sections.derniers-articles')

@endsection

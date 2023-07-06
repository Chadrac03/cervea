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
                                    <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                        <img src="{{ url('asset/img/slides/slide-title-border-light.png') }}" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                    </span>
                                </h3>
                                <h3 class="text-color-light font-weight-extra-bold text-12-13 line-height-1 line-height-sm-3 mb-2 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">les exigences non fonctionnelles d’une application </h3>
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
                    <h2 class="font-weight-bold text-9 mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-duration="750" data-plugin-options="{'accY': -200}" >C’est quoi les exigences non fonctionnelles d’une application ? </h2>
                    <p class="sub-title text-primary text-4 font-weight-semibold positive-ls-2 mt-2 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400" data-appear-animation-duration="750"> chez <span class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-4 font-weight-semibold line-height-2 pb-2">cervea</span></p>
                    <p class="text-1rem text-color-default negative-ls-05 pt-3 pb-4 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" data-appear-animation-duration="750">
                        Exigences non fonctionnelles, spécifications fonctionnelles ou encore techniques, il y a de quoi s’y perdre.
                        Les exigences, aussi appelées spécifications non fonctionnelles, sont un élément crucial dans le processus de développement de votre projet informatique et dans la rédaction du cahier des charges de votre logiciel/application.
                    </p>

                    <p>
                        Les exigences non fonctionnelles sont les aspects d’un système qui n’est pas directement lié à sa fonctionnalité principale.
                        Bien sûr, nous vous donnons une définition plus complète dans la suite de cet article.
                        Un projet d’application mobile ou web doit être pourvu de caractéristiques fonctionnelles et non fonctionnelles. On considère parfois que les spécifications non fonctionnelles sont moins importantes que les spécifications fonctionnelles.
                        Pourtant, cet outil du cahier des charges aide les développeurs à comprendre le design de l’application et ses exigences. Elles fournissent des informations précises sur l’application à construire, ce qui augmente la qualité du produit fini.
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
                                            <li> Spécifications (ou exigences) non fonctionnelles : définition </li>
                                            <li> Exigences fonctionnelles et non fonctionnelles quelle différence ? </li>
                                            <li> Les spécifications non fonctionnelles en bref </li>
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
            <h2 class="font-weight-normal text-6 mb-3">SPÉCIFICATIONS (OU EXIGENCES) NON FONCTIONNELLES <strong class="font-weight-extra-bold">: DÉFINITION</strong></h2>

            <p class="text-4">
                Les exigences non fonctionnelles (ENF) ou NonFunctional Requirement en Anglais (NFR) ne sont pas directement liées aux caractéristiques et aux fonctionnalités de votre application, mais plutôt à d’autres aspects de la conception et du développement de votre application.
                Plus précisément, les exigences non fonctionnelles concernent les performances, la disponibilité et l’évolutivité. Elles définissent la manière dont votre application doit fonctionner dans diverses circonstances, notamment en cas de charge ou d’erreur, ainsi que la manière dont elle évoluera en fonction des différents niveaux d’utilisation.
            </p>

            <p>
                Les exigences non fonctionnelles peuvent être divisées en deux grandes catégories : les performances et l’évolutivité. Les performances font référence à la rapidité avec laquelle une application peut répondre lorsque les utilisateurs soumettent des demandes ou des données.
                L’évolutivité fait pour sa part référence à la capacité d’une application à gérer des quantités croissantes de trafic sans causer de problèmes ou d’erreurs ou la faciliter d’implémenter de nouvelles fonctionnalités. Les exigences non fonctionnelles affectent donc la manière dont le code sera développé.
            </p>

            <p>
                Les NFR doivent toujours être décrites en termes clairs, précis et non ambigus. Elles doivent être quantifiées – par exemple, le système doit pouvoir traiter 100 000 clients simultanément avec un temps de réponse inférieur à 2 secondes par utilisateur.
            </p>

            <h4> QUE CONTIENNENT LES SPÉCIFICATIONS FONCTIONNELLES D’UNE APPLICATION ?  </h4>
            <p>
                Plus vous identifierez de contraintes, plus il sera facile de construire un système viable.
                Tenez compte de l’environnement dans lequel votre système fonctionnera avant de concevoir votre solution.
                Regardez la situation dans son ensemble pour vous assurer que votre application est conforme à toutes les réglementations, licences et normes applicables.
            </p>
            <p>
                Lorsque vous construisez un système, réfléchissez à la facilité avec laquelle il sera possible de le mettre à jour ultérieurement ou de traiter les erreurs qui pourraient survenir. Si vous concevez une application destinée à être utilisée à l’étranger, gardez à l’esprit la facilité avec laquelle les utilisateurs d’autres pays pourront installer et exécuter votre programme.
                Pour vous faciliter la vie, vous pouvez les répartir en différentes catégories :

                <ul class="text-1rem text-color-default negative-ls-05 text-left">
                    <li> <strong>Contraintes</strong>  pesant sur le système : prix maximum de la solution à développer, ressources humaines et matérielles imposées, … </li>
                    <li> <strong>Conformité </strong> du système à un environnement : normes réglementaires, documentaires, conformité aux licences acquises, … </li>
                    <li> <strong>Maintenabilité </strong> du système : traçage des erreurs, possibilité des mises à jour, extensibilité / modifiabilité du système initial, supportabilité en fonction de l’implantation géographique du futur système, testabilité… </li>
                    <li> <strong>Performance </strong> du système : charge utilisateurs / transactions</li>
                    <li> <strong>Portabilité </strong> du système : compatibilité avec diverses plateformes, facilité de remplacement d’autres systèmes en place, facilité d’installation et de désinstallation de l’application … </li>
                    <li> <strong>Fiabilité </strong> du système : capacité à gérer les erreurs du système, densité des défauts de qualité, capacité à être remis en état rapidement, capacité à résister aux attaques… </li>
                    <li> <strong>Sécurité </strong>du système : traçage des mises à jour des données dans le système, gestion de la confidentialité, gestion de l’intégrité des données, protection des données personnelles …</li>
                    <li> <strong>Utilisation </strong> du système : facilité d’utilisation en limitant le nombre de clic à maximum 3 clics pour finaliser la transaction, rendre l’application attractive à une certaine audience (facteurs émotionnels), certification du système à une technologie particulière, capacité à respecter les exigences d’un pays, réutilisabilité de certains composants… </li>
                </ul>
            </p>

            <h4> EXIGENCES FONCTIONNELLES ET NON FONCTIONNELLES QUELLE DIFFÉRENCE ? </h4>
            <p>
                Lorsqu’on parle d’exigences fonctionnelles, il s’agit des exigences que l’utilisateur final demande spécifiquement comme des services de base rendus par le système.
            </p>
            <p>
                Toutes ces fonctionnalités doivent nécessairement être intégrées au logiciel ou à l’application dans le cadre du contrat. Elles sont représentées ou énoncées comme l’entrée à donner au système, l’opération effectuée et la sortie attendue. Il s’agit essentiellement des exigences énoncées par l’utilisateur qui sont directement visibles dans le produit final, par opposition aux exigences non fonctionnelles.
            </p>

            <p>
                Les exigences non fonctionnelles, quant à elles, peuvent être définies simplement comme des conditions ou des capacités qui doivent être respectées ou satisfaites par le système mais qui ne contribuent pas directement à satisfaire les besoins des utilisateurs finaux ou d’autres parties prenantes.
            </p>

            <h4> COMPRENDRE LA DIFFÉRENCE ENTRE EXIGENCES FONCTIONNELLES OU NON FONCTIONNELLES </h4>
            <p>
                <div class="row text-center mt-4">
                    <div class="col-md-12 col-lg-12 text-center">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        Spécifications fonctionnelles
                                    </th>
                                    <th>
                                        Spécifications non fonctionnelles
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        Une exigence fonctionnelle définit un système ou son composant.
                                    </td>
                                    <td>
                                        Une exigence non fonctionnelle définit l’attribut de qualité d’un système logiciel.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Spécifient « Que doit faire le système logiciel ? »
                                    </td>
                                    <td>
                                        Imposent des contraintes sur « Comment le système logiciel doit-il répondre aux exigences fonctionnelles ? »
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        L’exigence fonctionnelle est spécifiée par l’utilisateur.
                                    </td>
                                    <td>
                                        L’exigence non fonctionnelle est spécifiée par des personnes techniques, par exemple l’architecte, les responsables techniques et les développeurs de logiciels.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Défini au niveau d’un composant.
                                    </td>
                                    <td>
                                        Appliqué à un système dans son ensemble.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Aident à vérifier la fonctionnalité du logiciel.
                                    </td>
                                    <td>
                                        Aident à vérifier les performances du logiciel.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Des tests fonctionnels tels que le système, l’intégration, de bout en bout, les tests d’API, etc. sont effectués.
                                    </td>
                                    <td>
                                        Des tests non fonctionnels tels que les tests de performance, de stress, d’utilisabilité, de sécurité, etc. sont effectués.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </p>

            <h4> EXEMPLE DE SPÉCIFICATIONS NON FONCTIONNELLES </h4>
            <p>
                <div class="row text-center mt-4">
                    <div class="col-md-12 col-lg-12 text-center">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        Exemple – Exigence fonctionnelle
                                    </th>
                                    <th>
                                        Exemple – Exigence non fonctionnelle
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1- Authentification de l’utilisateur chaque fois qu’il se connecte au système.
                                    </td>
                                    <td>
                                        1- Les e-mails doivent être envoyés avec une latence ne dépassant pas 12 heures à partir d’une telle activité.
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2- Arrêt du système en cas de cyberattaque.
                                    </td>
                                    <td>
                                        2- Le traitement de chaque requête doit se faire dans les 10 secondes
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3- Un e-mail de vérification est envoyé à l’utilisateur chaque fois qu’il s’inscrit pour la première fois sur un système logiciel.
                                    </td>
                                    <td>
                                        3- Le site doit se charger en 3 secondes lorsque le nombre d’utilisateurs simultanés est > 10000
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </p>
        </div>
    </div>

    <div class="row align-items-center pt-4 appear-animation" data-appear-animation="fadeInLeftShorter">
        <div class="col-md-12 pl-md-5">
            <h2 class="font-weight-normal text-6 mb-3">LES SPÉCIFICATIONS NON FONCTIONNELLES <strong class="font-weight-extra-bold"> EN BREF</strong></h2>

            <p class="text-4">
                Malheureusement, dans beaucoup de projets informatiques, les spécifications ou exigences non fonctionnelles ne sont pas identifiées, voire mises de côté.
                Il va sans dire que l’absence d’exigences non fonctionnelles peut mener à de gros problèmes lors des phases de conception et de développement.
            </p>

            <p>
                Dans les meilleurs des cas, ces défauts et erreurs seront corrigés dans les phases de tests unitaires et fonctionnels à condition que des scénarios aient été mis en place et bien pensés.
                Dans la plupart des cas, des exigences fonctionnelles non rédigées conduisent votre projet à l’échec.
                L’absence de NFR (Nonfunctional requirements) peut rendre votre solution temporairement ou définitivement inutilisable.
            </p>

            <p class="text-4">
                Si vous dépensez du temps et de l’argent dans un projet d’application web ou mobile, ne négligez pas les spécifications non fonctionnelles ! Définir vos exigences, c’est s’assurer qu’elles seront prises en compte par l’équipe en charge de développer votre projet. Elles ont un impact sur la réussite du développement.
                Vous souhaitez être accompagné dans la rédaction de votre cahier des charges, vos spécifications fonctionnelles, non fonctionnelles et techniques ?
            </p>


            <p>
                Nous rédigeons vos spécifications non-fonctionnelles pour et avec vous. Chaque parcours utilisateur y est référencé et scénarisé avec un parcours optimal, les incidents possibles et les enchaînements. Cette étape est réalisée par un Business Analyst sous forme d’ateliers auxquels vous participez pour garantir la vision métier.
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

<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': true, 'stickyStartAt': 70, 'stickyChangeLogo': false, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}">
                            <a href="/" class="goto-top"><img alt="heyano" width="204" height="45" data-sticky-width="82" data-sticky-height="36" data-sticky-top="0" src="{{ asset('asset/img/cervea/logo-v.png') }}" data-plugin-lazyload data-plugin-options="{'threshold': 500}" data-original="{{ url('asset/img/cervea/logo-cervea-w.png') }}"></a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-light-text header-nav-dropdowns-dark">
                            <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-text-capitalize header-nav-main-text-size-2 header-nav-main-mobile-dark header-nav-main-effect-1 header-nav-main-sub-effect-1 appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="{{ url('nos-offres') }}">
                                                Nos offres
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                vos besoins
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{ url('cahier-des-charges') }}">Cahier des charges </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{ url('app-mobile') }}">Application mobile</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{ url('logiciel-web') }}">Logiciels et applications web</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{ url('outsourcing') }}">Externalisation</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Nos expertises
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{ url('audit-applicatif') }}">Audit applicatif</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{ url('conception') }}">Conception</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{ url('conseil') }}">Conseil</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{ url('ux-ui') }}">Design UX/UI</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{ url('developpement') }}">Developpement</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{ url('maintenance') }}">Maintenance applicative</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{ url('moderniser-une-application') }}">Moderniser une application</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Nos realisations
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{ url('application-metier-terrain') }}">Applications metier et terrain </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{ url('app-disponible-en-continue') }}">Applications mobiles disponible en continue</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{ url('mise-en-relation-b2b-b2c-c2c') }}">Plateformes de mises en relation B2B, B2C, et C2C</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{ url('geolocalisation-cartographie-online') }}">Géolocalisation et cartographie en ligne</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{ url('systeme-planification-reservation-automatique') }}">Système de planificatiion et de reservation automatisé</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="{{ url('contact') }}">
                                                contact
                                            </a>
                                            {{-- <ul class="dropdown-menu">
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="{{ url('blog') }}">Le blog </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="#">Nos guides et modèles</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item" href="#">Webinaires et videos</a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <a class="btn btn-gradient btn-rounded font-weight-semibold px-4 ml-3 appear-animation" data-appear-animation="fadeIn" data-plugin-options="{'accY': 100}" href="{{ url('reservation-diagnostic') }}" target="_blank">reservez votre diagnostic</a>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav"><i class="fa fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return view('client.Pages.Home.index');
    }

    public function nosOffres(){
        return view('client.Pages.Nos-offres.index');
    }

    public function cahierDesCharges(){
        return view('client.Pages.cahier-des-charges.index');
    }

    public function auditApplicatif(){
        return view('client.Pages.audit-applicatif.index');
    }

    public function applicationMetierTerrain(){
        return view('client.Pages.application-metier-terrain.index');
    }

    public function blog(){
        return view('client.Pages.blog.index');
    }

    public function reservationDiagnostic(){
        return view('client.Pages.reservation-diagnostic.index');
    }

    public function contact(){
        return view('client.Pages.Contact.contact');
    }

    public function conseil(){
        return view('client.Pages.conseil.index');
    }

    public function processusMetier(){
        return view('client.Pages.processus-metier.index');
    }

    public function relationClient(){
        return view('client.Pages.relation-client.index');
    }

    public function developpement(){
        return view('client.Pages.developpement.index');
    }

    public function uxUi(){
        return view('client.Pages.ux_ui.index');
    }

    public function appMobileFlutter(){
        return view('client.Pages.app-mobile-flutter.index');
    }

    public function moderniserAppFlutter(){
        return view('client.Pages.app-mobile-flutter.moderniser');
    }

    public function exigenceNonFonctionnel(){
        return view('client.Pages.app-mobile-flutter.exigence-non-fonctionnelle');
    }

    public function solutions(){
        return view('client.Pages.solutions.index');
    }

    public function appMobile(){
        return view('client.Pages.app-mobile.index');
    }

    public function logicielWeb(){
        return view('client.Pages.logiciel-web.index');
    }

    public function externalisation(){
        return view('client.Pages.externalisation.index');
    }

    public function appDisponible(){
        return view('client.Pages.app-mobile-disponible.index');
    }

    public function miseRelation(){
        return view('client.Pages.mise-en-relation.index');
    }

    public function geolocalisationCartographie(){
        return view('client.Pages.geolocalisation-cartographie.index');
    }

    public function planificationReservation(){
        return view('client.Pages.planification-reservation.index');
    }

    public function conceptionApp(){
        return view('client.Pages.conception.index');
    }

    public function maintenanceApp(){
        return view('client.Pages.maintenance.index');
    }

    public function modernisationApp(){
        return view('client.Pages.modernisation.index');
    }

    public function charte(){
        return view('client.Pages.charte.index');
    }
}

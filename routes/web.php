<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('layout');
// });

Route::get('/', [PageController::class, 'index']);

Route::get('nos-offres', [PageController::class, 'nosOffres']);
Route::get('cahier-des-charges', [PageController::class, 'cahierDesCharges']);
Route::get('audit-applicatif', [PageController::class, 'auditApplicatif']);
Route::get('application-metier-terrain', [PageController::class, 'applicationMetierTerrain']);
Route::get('blog', [PageController::class, 'blog']);
Route::get('reservation-diagnostic', [PageController::class, 'reservationDiagnostic']);
Route::get('contact', [PageController::class, 'contact']);
Route::get('conseil', [PageController::class, 'conseil']);
Route::get('processus-metier', [PageController::class, 'processusMetier']);
Route::get('relation-client', [PageController::class, 'relationClient']);
Route::get('developpement', [PageController::class, 'developpement']);
Route::get('ux-ui', [PageController::class, 'uxUi']);
Route::get('app-mobile-flutter', [PageController::class, 'appMobileFlutter']);
Route::get('moderniser-app-mobile-flutter', [PageController::class, 'moderniserAppFlutter']);
Route::get('exigence-non-fonctionnelle', [PageController::class, 'exigenceNonFonctionnel']);
Route::get('nos-solutions', [PageController::class, 'solutions']);
Route::get('app-mobile', [PageController::class, 'appMobile']);
Route::get('logiciel-web', [PageController::class, 'logicielWeb']);
Route::get('outsourcing', [PageController::class, 'externalisation']);
Route::get('app-disponible-en-continue', [PageController::class, 'appDisponible']);
Route::get('mise-en-relation-b2b-b2c-c2c', [PageController::class, 'miseRelation']);
Route::get('geolocalisation-cartographie-online', [PageController::class, 'geolocalisationCartographie']);
Route::get('systeme-planification-reservation-automatique', [PageController::class, 'planificationReservation']);
Route::get('conception', [PageController::class, 'conceptionApp']);
Route::get('maintenance', [PageController::class, 'maintenanceApp']);
Route::get('moderniser-une-application', [PageController::class, 'modernisationApp']);
Route::get('charte-heyano', [PageController::class, 'charte']);
<?php

use App\Http\Livewire\GestionTJobComponent;
use App\Http\Livewire\ProflileComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\GestionCommande;
use App\Http\Controllers\Auth\ActionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Logout\LogoutController;
use App\Http\Controllers\Courses\CourseController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Episode\EpisodeController;
use App\Http\Controllers\Payment\PaymentController;
use App\Http\Controllers\Profles\ProfileController;
use App\Http\Controllers\Admin\GestionCouponController;
use App\Http\Controllers\Admin\GestionCourseController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Formateur\FormateurController;
use App\Http\Controllers\Admin\GestionCategoryController;
use App\Http\Controllers\Admin\GestionFormateurController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\AuthSocialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PrestationController;
use App\Http\Controllers\SkillController;
use App\Http\Livewire\CandidatListComponent;
use App\Http\Livewire\CompetenceComponent;
use App\Http\Livewire\CourseComponent;
use App\Http\Livewire\DetailPrestataire;
use App\Http\Livewire\ExperienceComponent;
use App\Http\Livewire\FormationComponent;
use App\Http\Livewire\GestionArticleComponent;
use App\Http\Livewire\GestionSpecialiteComponent;
use App\Http\Livewire\GestionUserComponent;
use App\Http\Livewire\HomeCandidat;
use App\Http\Livewire\HomeDetailJob;
use App\Http\Livewire\HomeJob;
use App\Http\Livewire\PrestationComponent;
use App\Http\Livewire\ProjetComponent;
use App\Http\Livewire\SocialAccompteComponent;
use App\Http\Middleware\AdminMddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/commande-formation-{id}', [HomeController::class, 'commande'])->name('commande.formation');
Route::get('/course-by-category-{id}', [HomeController::class, 'courseByCategory'])->name('course.category');
Route::get('/annuaire-des-categories', [HomeController::class, 'homeCategory'])->name('home.categorie');
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/annuaire-des-formations', [HomeController::class, 'annuaireFormation'])->name('formation.annuaire');
Route::get('/annuaire-des-formateurs', [HomeController::class, 'annuaireFormateur'])->name('formateur.annuaire');
Route::get('/detail/profile/prestataire/{id}', DetailPrestataire::class)->name('detail.prestataire');
Route::get('/sucess/{name}', [ActionController::class, 'registerSuccess'])->name('register.sucess');
Route::get('/register', [RegisterController::class, 'create'])->name('auth.register');
Route::post('/post/user', [RegisterController::class, 'store'])->name('register');
Route::get('/login', [LoginController::class, 'login'])->name('auth.login');
Route::post('/login/User', [LoginController::class, 'loginForUser'])->name('post.login');
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/dashboards', [DashboardController::class, 'index'])->name('dashboard.users')->middleware('auth');
Route::post('/createNewTeacher', [FormateurController::class, 'store'])->name('post.new.formateur');
Route::get('/become-teacher', [FormateurController::class, 'createNewFormateur'])->name('become.teacher')->middleware('guest');
Route::get('/profile-formateur', [ProfileController::class, 'profileFormateur'])->name('profile.formateurs');
Route::get('/formateur-store/{slug}-{id}', [HomeController::class, 'boutiqueFormateur'])->name('boutique.formateur');
Route::resource('courses', CourseController::class);
Route::get('/course/{slug}', [HomeController::class, 'detailCourse'])->name('detail.course');
Route::get('/processinPayment', [PaymentController::class, 'createNewPayment'])->name('payment.form');
Route::get('/orders/user/liste', [HomeController::class, 'ordersListe'])->name('orders.users.liste');
Route::get('/orders/{id}', [HomeController::class, 'detailCommande'])->name('orders.detail');
Route::get('/prestation', [PrestationController::class, 'index'])->name('prestation.index');
Route::get('/skills', [SkillController::class, 'index'])->name('skills.index');
Route::get('/mesformations', CourseComponent::class)->name('formation.index')->middleware('auth');
Route::get('/projets', ProjetComponent::class)->name('projet.index')->middleware('auth');
Route::get('/sucess/creation', function () {
    return view('actions.sucessTeacher');
});

Route::middleware([AdminMddleware::class])->group(function () {
    Route::get('/admin-orders-liste', [GestionCommande::class, 'liste'])->name('admin.orders.liste');
    Route::get('/oders/liste', [GestionCommande::class, 'liste'])->name('liste.commande');
    Route::get('/admin-dashboard', [HomeAdminController::class, 'homeAdmin'])->name('admin.dashboard');
    Route::get('/formateurs/liste', [GestionFormateurController::class, 'disableTeacher'])->name('admin.teacher.disable');
    Route::get('/formateurs/view/profile/{id}', [GestionFormateurController::class, 'show'])->name('formateur.view');
    Route::get('/formateur/update-status', [GestionFormateurController::class, 'confirmatedCandidature'])->name('update.candidature');
    Route::post('/sendNotificationTest',  [GestionFormateurController::class, 'sendNotificationTest'])->name('test.confirmed');
    Route::get('/all-courses', [GestionCourseController::class, 'allCourse'])->name('all.admin.course');
    Route::get('/course/detail/{slug}-{id}', [GestionCourseController::class, 'show'])->name('admin.course.show');
});

Route::resources([
    'category' => GestionCategoryController::class,
    'coupon' => GestionCouponController::class,
    'episode' => EpisodeController::class
]);


Route::get('/cancel-payment', [PaymentController::class, 'cancelPayment'])->name('cancel.payment');
Route::get('/sucess-payment', [PaymentController::class, 'sucessPayment'])->name('success.payment');
Route::post('/process-payment', [PaymentController::class, 'initialisePayment'])->name('process.checkout');


// GoogleLoginController redirect and callback urls
Route::get('/login/{google}', [AuthSocialController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/login/{google}/callback', [AuthSocialController::class, 'handleGoogleCallback']);


Route::get('/comment-ca-marche', function () {
    return view('home.commentcamarche');
});


Route::get('/conditionutilisateur', function () {
    return view('home.condtiionutilisation');
})->name('CGU');


Route::get('/confirmated_compte', [AuthController::class, 'verificationAcount'])->name('confirmated.compte');;





Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
    ->name('verification.verify')
    ->middleware(['signed', 'throttle:6,1']); // Ajout des middlewares "signed" et "throttle" pour limiter les requêtes




// mes nouvelles routes

Route::get('/detail/profile/candidat/{codeprofile}', DetailPrestataire::class)->name('detail.candidat');


Route::get('/experiences', ExperienceComponent::class)->name('experience.index');
Route::get('/competences', CompetenceComponent::class)->name('competence.index');
Route::get('/profile', ProflileComponent::class)->name('profile.index');
Route::get('/formations', FormationComponent::class)->name('formation.index');
Route::get('/projets', ProjetComponent::class)->name('projet.index');
Route::get('/social-comptes', SocialAccompteComponent::class)->name('comptesocial.index');
Route::get('/dashboards', [DashboardController::class, 'index'])->name('dashboard.users')->middleware('auth');
Route::get('/nos-formations', HomeCandidat::class)->name('candidat.index');
Route::get('/gestionspecialites', GestionSpecialiteComponent::class, 'index')->name('gestion.specialies')->middleware('auth');
Route::get('/gestion-candidatures', CandidatListComponent::class, 'index')->name('gestion.listcandidat')->middleware('auth');

Route::get('/gestion-utilisateurs', GestionUserComponent::class)->name('users.management');
Route::get('/gestion-articles', GestionArticleComponent::class)->name('articles.management');
Route::get('/politiquedeconfidentialite', function () {
    return view('home.politiquedeconfidentialise');
})->name('politique.confidentialise');


Route::get('/fac', function () {
    return view('home.faq');
})->name('fac');


Route::get('/quisommesnous', function () {
    return view('home.about');
})->name('about');





Route::get('/gestion-job', GestionTJobComponent::class)->name('gestion.job')->middleware('auth');
Route::get('/home-job', HomeJob::class)->name('home.job');
Route::get('/home-job-detail/{slug}', HomeDetailJob::class)->name('detail.job');



Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/presentation', [HomeController::class, 'presentation'])->name('presentation');


Route::get('/rit', function () {
    return view('home.rit');
})->name('rit');


Route::get('/genie-logicel', function () {
    return view('home.genielogiciel');
})->name('genie.logiciel');


Route::get('/finance-banque', function () {
    return view('home.banquecard');
})->name('finance.banque');


Route::get('/finance-comptabilite', function () {
    return view('home.comptabilitefinance');
})->name('finance.comptabilite');


Route::get('/sciencejuridique', function () {
    return view('home.scienceeconomique');
})->name('science.juridique');


Route::get('/controle/gestion', function () {
    return view('home.auditcontrolegestion');
})->name('audit.controle.gestion');

Route::get('/science/economique', function () {
    return view('home.scienceeconomique');
})->name('science.economique');

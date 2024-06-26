<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DerangementController;
use App\Http\Controllers\StatController;
use Stichoza\GoogleTranslate\GoogleTranslate;
use App\Http\Controllers\MessageController;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/entreprise',[entreprisecontroller::class,'index'])->name('entreprise.index');
Route::get('/entreprise/create',[entreprisecontroller::class,'create'])->name('entreprise.create');
Route::post('/entreprise/store',[entreprisecontroller::class,'store'])->name('entreprise.store');
Route::get('/entreprise/{entreprise}/edit',[entreprisecontroller::class,'edit'])->name('entreprise.edit');
Route::put('/entreprise/{entreprise}/update',[entreprisecontroller::class,'update'])->name('entreprise.update');
Route::delete('/entreprise/{entreprise}/destroy',[entreprisecontroller::class,'destroy'])->name('entreprise.destroy');
Route::get('/entreprise/dashboard', [entreprisecontroller::class, 'dashboard'])->name('entreprise.dashboard');

// Route::get('/homepage', [DemandeController::class, 'homepage'])->name('homepage');
// Route::get('/homepage', function () {
//     $user = session('user');
//     return view('homepage', ['user' => $user]);
// })->name('homepage');
// Route::get('/homepage', [DemandeController::class, 'homepage'])->name('homepage');
Route::get('/demandefibre', [DemandeController::class, 'fibre'])->name('demande.fibre');
Route::get('/demandefibrefr', [DemandeController::class, 'fibrefr'])->name('demande.fibrefr');
Route::get('/demandeadsl', [DemandeController::class, 'adsl'])->name('demande.adsl');
Route::get('/demandeadslfr', [DemandeController::class, 'adslfr'])->name('demande.adslfr');
Route::get('/demandequatreg', [DemandeController::class, 'quatreg'])->name('demande.quatreg');
Route::get('/demandequatregfr', [DemandeController::class, 'quatregfr'])->name('demande.quatregfr');
Route::get('/demandefixe', [DemandeController::class, 'fixe'])->name('demande.fixe');
Route::get('/demandefixefr', [DemandeController::class, 'fixefr'])->name('demande.fixefr');
Route::get('/demande/{demande}/edit',[DemandeController::class,'edit'])->name('demande.edit');
Route::get('/demande/{demande}/editfr',[DemandeController::class,'editfr'])->name('demande.editfr');
Route::put('/demande/{demande}/update',[DemandeController::class,'update'])->name('demande.update');
Route::put('/demande/{demande}/updatefr',[DemandeController::class,'updatefr'])->name('demande.updatefr');
Route::delete('/demande/{demande}/destroy',[DemandeController::class,'destroy'])->name('demande.destroy');
Route::delete('/demande/{demande}/destroyfr',[DemandeController::class,'destroyfr'])->name('demande.destroyfr');
Route::get('/demande/filteradsl', [DemandeController::class, 'filterByDateadsl'])->name('demande.filtera');
Route::get('/demande/filteradslfr', [DemandeController::class, 'filterByDateadslfr'])->name('demande.filterafr');
Route::get('/demande/filterfibre', [DemandeController::class, 'filterByDatefibre'])->name('demande.filterfb');
Route::get('/demande/filterfibrefr', [DemandeController::class, 'filterByDatefibrefr'])->name('demande.filterfbfr');
Route::get('/demande/filterfixe', [DemandeController::class, 'filterByDatefixe'])->name('demande.filterfx');
Route::get('/demande/filterfixefr', [DemandeController::class, 'filterByDatefixefr'])->name('demande.filterfxfr');
Route::get('/demande/filterquatreg', [DemandeController::class, 'filterByDatequatreg'])->name('demande.filterq');
Route::get('/demande/filterquatregfr', [DemandeController::class, 'filterByDatequatregfr'])->name('demande.filterqfr');


Route::get('/form', [FormController::class, 'index'])->name('form.index');
Route::post('/form/submitdemande', [FormController::class, 'submitdemande'])->name('form.submitdemande');
Route::post('/form/submitderangement', [FormController::class, 'submitderangement'])->name('form.submitderangement');





Route::get('/login', [AuthController::class, 'loginform'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');


Route::get('/dot',[UserController::class,'index'])->name('dot.index');
Route::get('/dot/create',[UserController::class,'create'])->name('dot.create');
Route::post('/dot/store',[UserController::class,'store'])->name('dot.store');
Route::get('/dot/{dot}/edit',[UserController::class,'edit'])->name('dot.edit');
Route::put('/dot/{dot}/update',[UserController::class,'update'])->name('dot.update');
Route::delete('/dot/{dot}/destroy',[UserController::class,'destroy'])->name('dot.destroy');
Route::get('/dot/filter', [UserController::class, 'dotfilter'])->name('dot.filter');

Route::get('/dotfr',[UserController::class,'indexfr'])->name('dot.indexfr');
Route::get('/dot/createfr',[UserController::class,'createfr'])->name('dot.createfr');
Route::post('/dot/storefr',[UserController::class,'storefr'])->name('dot.storefr');
Route::get('/dot/{dot}/editfr',[UserController::class,'editfr'])->name('dot.editfr');
Route::put('/dot/{dot}/updatefr',[UserController::class,'updatefr'])->name('dot.updatefr');
Route::delete('/dot/{dot}/destroyfr',[UserController::class,'destroyfr'])->name('dot.destroyfr');
Route::get('/dot/filterfr', [UserController::class, 'dotfilterfr'])->name('dot.filterfr');




Route::get('/derangement',[DerangementController::class,'derangement'])->name('derangement.index');
Route::put('/derangement/{derangement}/update',[DerangementController::class,'update'])->name('derangement.update');
Route::get('/derangement/{derangement}/edit',[DerangementController::class,'edit'])->name('derangement.edit');
Route::delete('/derangement/{derangement}/destroy',[DerangementController::class,'destroy'])->name('derangement.destroy');
Route::get('/derangement/filter', [DerangementController::class, 'filterByDate'])->name('derangement.filter');

Route::get('/derangementfr',[DerangementController::class,'derangementfr'])->name('derangement.indexfr');
Route::put('/derangement/{derangement}/updatefr',[DerangementController::class,'updatefr'])->name('derangement.updatefr');
Route::get('/derangement/{derangement}/editfr',[DerangementController::class,'editfr'])->name('derangement.editfr');
Route::delete('/derangement/{derangement}/destroyfr',[DerangementController::class,'destroyfr'])->name('derangement.destroyfr');
Route::get('/derangement/filterfr', [DerangementController::class, 'filterByDatefr'])->name('derangement.filterfr');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/homepage', [StatController::class, 'index'])->name('homepage');
Route::get('/homepagefr', [StatController::class, 'indexfr'])->name('homepagefr');

Route::get('/settings',[UserController::class,'settings'])->name('settings');
Route::get('/settingsfr',[UserController::class,'settingsfr'])->name('settingsfr');



Route::get('/messages/send', [MessageController::class, 'sendMessageForm'])->name('msg.send');
Route::post('/messages/send', [MessageController::class, 'sendMessage'])->name('msg.send');
Route::get('/messages', [MessageController::class, 'getMessages'])->name('msg.index');


Route::get('/messages/sendfr', [MessageController::class, 'sendMessageFormfr'])->name('msg.sendfr');
Route::post('/messages/sendfr', [MessageController::class, 'sendMessagefr'])->name('msg.sendfr');
Route::get('/messagesfr', [MessageController::class, 'getMessagesfr'])->name('msg.indexfr');
Route::get('/emails', [MessageController::class, 'getEmails'])->name('emails');
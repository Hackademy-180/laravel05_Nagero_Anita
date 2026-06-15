<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;



// rotta di tipo get prende una risorsa 
//nuovo parametro: array; logica nel controller; indirizzo legato a classi
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
//lavoriamo nell'oop; prevede method change; come dare un nome alla rotta e percorso vuoi che segua,
//URI è SLASH MA POTREBBE ESSERE UN ALTRO, CONTROLLER, NOME FUNZIONE(QUELLA VUOI SCATTI) , RETURN VIEW E' LA VISTA; FILE CHE HAI NELLE VIEW; DOPO LA FRECCIA CON NAME è METODO CHE VEDE SOLO SVILUPPATORE E SCEGLI TU, è CIO' FA PARTIRE LINK NELLA NAVBAR; IL PROGETTO DINAMICO DI LARAVEL LO TRASFORMERA' IN MANIERA DINAMICA; 
//DOPO CONTROLLER HAI FUNZIONE DENTRO IL CONTROLLER, E POI IN FINE HAI METODO A RICHIAMARLA COME ROTTA; ECCO PERCHE' SCRIVI DOPO IL NAME IN TONDE; 

// QUESTO FILE COSA FA, COME SI CHIAMA DOVE VIENE USATO; QUESTE SONO LE COSE BISOGNA INTERPORSI PER RIUSCIRE A FARE FUNZIONARE INTERO PROGETTO; 




// Prima fare sempre la rotta del percorso che deve seguirsi, che si collega a vista creerai in seguito;
//Così meglio controlli

Route::get('/contattaci', [PublicController::class, 'contactUs'])->name('contact.us');



// Rotta per collegare il Form alla vista ; processo di routing ; ricerca di collegamenti _ connessioni

//ROTTA POST -> FUNZIONA COME LE GET; URI -> CONTROLLER X LOGICA-> FUNZIONE;
// submit per immissione ed invio dei dati;

Route::post('/contattaci/submit', [PublicController::class, 'submit'])->name('contact.submit');



Route::get('/thank-you', [PublicController::class, 'thankYou'])->name('thankYou.page');

<?php

namespace App\Http\Controllers;
// Classe importata di Richiesta per inviare o ricevere delle richieste da Utente
 //contiene i dati della richiesta HTTP
use Illuminate\Http\Request;
use App\Mail\ContactMail;

 //USE - Facade per l'invio email
use Illuminate\Support\Facades\Mail;
// Controller; per operazioni logice, per richiesta a vedere qualcosa, quando devi gestire + dati, argomenti;..
// Con i database si va ad entità complesse per il quale il file del controller diverrà di aiuto ; per tutte le operazioni; a tutti i files che si devono gestire;


class PublicController extends Controller
{
    //Importo funzione di welcome dal php; per farla funzionare da qui
    
public function homepage() {
    return view('homepage');
}



//NOME FILE VIEW NELLA CARTELLA

// Il mio file si deve chiamare ESTTAMENTE come in questa funzione publica di php, di ritorno vista avrò proprio ciò che gli scrivo nelle tonde
public function contactUs(){
    return view('contattaci');
}


    public function thankYou()
    {
        return view('thankYou');
    }




    //Funzione per collegare form al submit; per inserimento dati , inserzione da parte di un Utente i dati ad ingresso; dati -> cosa da prendere; cosa è importante;
    // Li fai entrare ;(i dati),  mediante  1 Funzione; meglio: dei parametri


    // Prendere in ingresso i dati d'Utente; 
    // Classe d'indentificare richiesta http-> Utente cosa scrive; fa richiesta-> Dati dati immessi ; 
    // Dalla funzione hai già parametri della richiesta per cui;

    // Parametri sempre nelle tonde; 
    // Dependency Injection e php puro; ciò che è in arrivo è proprio da 1 p. di richiesta ; 

    public function submit(Request $request){
        // $request->all() → array con tutti i campi
        // dd($request->all());

        $name = $request->input('username');
        $email = $request->input('email');
        $usermessage = $request->input('message');

        // dd($name,$email,$usermessage);
        // con dd dump and die, facciamo test canonici a vedere il nostro contenuto codice, che risulta; e come: per visualizzare se stiamo passando correttamente dati(parametri ed argomenti);
        // devo creare un solito array per i dati:  

       

        //spedire mail ad Utente
        //metodo statico Mail::to()->send()

        Mail::to($email)->send(new ContactMail($name, $email,$usermessage));

//rendering ad home con messaggio, redirect ad 1 pagina custom 'thankYou page
        // reindirizzo utente per fargli avere 1 riscontro visivo
        // return redirect()->route('home')->with('mailInviata', 'mail inviata con successo, sarai ricontattato a breve!');
        
        //Mail - classse di partenza, to- inserisco il destinatario, ->send =  Gli sto dicendo, è da inviare
        // dd($name,$email,$usermessage);
//dd('controlla la tua casella di posta;');


return redirect()->route('thankYou.page');
    }
}

















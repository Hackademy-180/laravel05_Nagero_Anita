<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Address;
//definisce la view blade da usare per il corpo email
use Illuminate\Mail\Mailables\Content;
//definisce mittente, destinatario, oggetto
use Illuminate\Mail\Mailables\Envelope;
//serializza i model passati alla mail
use Illuminate\Queue\SerializesModels;





class ContactMail extends Mailable
{
    //serializza i model passati alla mail
    use Queueable, SerializesModels;
    // file di modello 
    //ContactMail ($dati) ; crea email
    //al quale abbiamo le funzioni a metodi per l'invio della mail
//automaticamente disponibili sulla vista della mail
     public $username, $useremail, $usermessage;
     //$message è una variabile riservata
    // Proprietà pubblica per accedere ai dati nella vista

    /**
     * prima funzione con il construct; crea la funz. per messaggio mail.
     */

    public function __construct($name, $mail, $message)
    {
        //
         $this->username =$name;
        $this->useremail = $mail;
        $this->usermessage = $message;
    }

    /**
     * Get the message envelope.Invia messaggio(mail)
     */
    //definisce mittente, destinatario, oggetto
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Grazie per averci contattato! A breve,sarai ricontattato!',
            from: new Address('maianita@infotalent.com'),
         
        );
    }

    /**
     * Get the message content definition; Il contenuto definito della mail, il testo; .
     */
    //e sarà contenuto,(definisce la view blade da usare per il corpo email)
    public function content(): Content
    {
        return new Content(


        // CARTELLA/ FILE DELLA VIEW (Blade);
            // view: 'view.contact-mail',
            view:'mail.contact-mail',
        );
    }

    /**
     * Get the attachments for the message.Il messaggio; lo scritto vero e proprio; 
     *
     * @return array<int, Attachment>
     */
   // use Illuminate\Mail\Mailables\Attachment;





   
 public function attachments(): array
 {
        return [];
    } 
    
    
    
    }
<!-- PAGINA CON FORM ACCESSIBILE AD UTENTE TEXTAREA; INPUTS; ED INVIO DATI;  -->



<x-layout>

    <div class="container py-5">
        <div class="row align-items-center justify-content-center min-vh-100">
            <div class="col-12 col-md-8">
                <h1 class="title text-center display-4">Contattaci!
                </h1>

                <!-- <div class="row justify-content-center">
            <div class="col-12 col md-8"> -->

                <!-- FORM -->
                <!-- MODIFICO INSERENDO ACTION COME TAG-CLASS POICHE' AL INTERNO CI AVVERRA' GIRO CON ROUTE , QUINDI ROUTING, COLLEGANDO IL PERCORSO E METODO AGGIUNTO ANCHE , (DELL'AZIONE CHE DEVE SCATTARE) - Tramite il route facciamo scattare l'azione collegando di richiesta fatta da utente, ne gestisce la funzione, (Request $request)! Richiamo metodo che abbiamo dal name della route; la vista; 
 =COLLEGAMENTO
 SCATTA DELL'URI \\ DINAMICITA' LARAVEL; NELLA SUDDIVISIONE COMPITI.
 LA ROTTA  E' QUELLA CHE VIENE FATTA SCATTARE ; LA LOGICA FUNZIONA (Altrove) , MA NON RICHIAMI QUELLA; fai giri per innescarla(logica e funz., servon a fare accadere qualcosa, ..)  -->
                <form class="py-3 px-5 bg-info shadow rounded text-custom" method="POST" action="{{ route('contact.submit') }}">


                    <!-- TOKEN DI SICUREZZA OBBLIGATORIO -->
                    @csrf
                    <!-- nome -->
                    <div class="mb-3">
                        <!-- Label -> dicitura comprensibile per il form per il nome -->
                        <label for="username" class="form-label fw-bld">Inserisci Un Nome: </label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <!-- Per inserire email -->

                    <!-- Cambio con InputEmail per verificare la validità per cui è una mail  -->
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label fw-bld">Inserisci la tua e-mail</label>
                        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label fw-bold text-black text-center display-1">Inserisci 1 messaggio!</label>
                        <!-- TEXTAREA PER SCRIVERE MESSAGGIO TESTO -->
                        <textarea name="message" class="form-control fw-bld" id="message" cols="10" rows="5"
                            placeholder="scrivi il tuo messaggio "> </textarea>
                    </div>

                    <!-- Bottone INVIA -->
                    
                        <button type="submit" class="d-felx justify-content-center btn btn-danger">Submit</button>
                    
                </form>
                <!-- FINE FORM -->

            </div>
        </div>
    </div>
</x-layout>



<!-- elementi backend di 1 form;
 1-attributo etichetta identificativa del input-textarea_identificativo
 2attributo method , metodo richiesta(get o post)
 3-attributo action FORM azione deve scattare al clic della funzione
 -->
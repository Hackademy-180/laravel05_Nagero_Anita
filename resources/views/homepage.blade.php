<x-layout>

    <div class="container-fluid">
        <div class="row height-custom align-items-center justify-content-center">
            <div class="col-12">
                <h1 class="title text-center display-4">Benvenuto guess!
                </h1>

<div class="contText bg-white">

    <p class="fw-bold text-dark display-1">
        Sito per vendere le tue opere Pittoriche di Quadri; In Italia e fuori
    </p>
    
    
    <p class="fw-bold text-dark display-2">
        Contattaci e mettiamo in vendita il tuo operato pittorico!
    </p>
</div>


                @if (session('mailInviata'))

                <div class="alert alert-success">
                    {{ sessions('mailInviata') }}
                </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>
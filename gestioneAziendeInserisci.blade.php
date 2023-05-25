@extends('homepage')

@section('title','Domande Frequenti')
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#buttonReset').click(function () {
                if (confirm("Sei sicuro di voler resettare i dati inseriti?")) {

                } else {
                    event.preventDefault();
                }
            });
        });
    </script>
</head>

@section('content')
<div id="content">
    <div align="center">
        <h1 style="color: black">Inserisci nuove Aziende</h1>
        <br><br>
    </div>
    <div class="chat-container">
        <div class="chat wrap-input ">


            @csrf
            <div class="contenitore-funzioni">
                <div  class="box-aggiungi-aziende" align="center">
                    {{ Form::label('ragionesociale', 'Inserisci qui la ragione Sociale dell\'azienda', ['class' => 'label-input']) }}
                    <br>
                    {{ Form::text('ragionesociale', '', ['class' => 'inputFormAziendeRigaSingola','id' => 'ragionesociale']) }}
                </div>
            </div>
            <div class="contenitore-funzioni">
                <div  class="box-aggiungi-aziende" align="center">
                    {{ Form::label('tipologia', 'Inserisci qui la tipologia dell\'azienda', ['class' => 'label-input']) }}
                    <br>
                    {{ Form::text('tipologia', '', ['class' => 'inputFormAziendeRigaSingola','id' => 'tipologia']) }}
                </div>
            </div>
            <div  class="contenitore-funzioni" align="center">
                <div class="box-aggiungi-aziende">
                    {{ Form::label('via', 'Inserisci qui la via dell\'azienda', ['class' => 'label-input']) }}
                    <br>
                    {{ Form::text('via', '', ['class' => 'inputFormAziendeRigaDivisa1','id' => 'via']) }}
                </div>
                <div class="box-aggiungi-aziende">
                    {{ Form::label('numerocivico', 'Inserisci qui il numero civico dell\'azienda', ['class' => 'label-input']) }}
                    <br>
                    {{ Form::text('numerocivico', '', ['class' => 'inputFormAziendeRigaDivisa2','id' => 'numerocivico']) }}
                </div>
            </div>




            <div class="container-form-btn">  
                <dix align="center" class="prova1234">
                    {{ Form::reset('Cancella i dati', ['class' => 'buttoninserimentofaq', 'id' => 'buttonReset']) }}
                </dix>
                <div align="center" class="prova1234">
                    {{ Form::submit('Conferma inserimento', ['class' => 'buttoninserimentofaq']) }}
                </div>
            </div>

            {{ Form::close() }}
        </div>

    </div>
</div>
@endsection
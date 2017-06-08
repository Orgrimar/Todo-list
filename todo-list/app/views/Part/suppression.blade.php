{{ Form::open() }}
<p>Suppression des taches</p>
{{ Form::label('id', 'Numéro de tache : ') }}
{{ Form::text('id') }}
{{ Form::submit('Envoyer !') }}
{{ Form::close() }}

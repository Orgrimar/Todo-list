{{ Form::open() }}
<p>Modification des taches</p>
{{ Form::label('id', 'Numéro de tache : ') }}
{{ Form::text('id') }}
{{ Form::label('titre', 'Titre') }}
{{ Form::text('titre') }}
{{ Form::label('tache', 'Tache : ') }}
{{ Form::text('tache') }}
{{ Form::submit('Envoyer !') }}
{{ Form::close() }}

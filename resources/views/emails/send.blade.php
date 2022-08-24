@component('mail::message')
# Identifiant de connexion

# Salut {{$name}}
{{$message}}



Merci,<br>
{{ config('app.name') }}
@endcomponent

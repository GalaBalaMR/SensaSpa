@component('mail::message')
# Dobrý deň,

zákazník {{ $info->name }},

píše správu:
{{ $info->message }}.

Telefónne číslo: {{ $info->phone }},
<br>
Email: {{ $info->email }}.

@component('mail::button', ['url' => 'https://wooddream.sk/login'])
Prihlásiť sa.
@endcomponent

Ďakujem,<br>
{{ config('app.name') }}
@endcomponent

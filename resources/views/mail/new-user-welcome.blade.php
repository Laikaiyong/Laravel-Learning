@component('mail::message')
# Welcome to vantagram

Join the verse

@component('mail::button', ['url' => ''])
Launch
@endcomponent

Cheers,<br>
{{ config('app.name') }}
@endcomponent

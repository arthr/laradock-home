@component('mail::message')
# Introduction

Olá {{ $name }},
Seja muito bem vindo a nossa comunidade.
Você pode ignorar esse e-mail, não se preocupe!

@component('mail::button', ['url' => 'http://google.com'])
Google It!
@endcomponent

Agradecimentos,<br>
{{ config('app.name') }}
@endcomponent

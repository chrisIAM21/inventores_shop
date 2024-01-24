<x-mail::message>
# Introduction

Te haz registrado en Inventores Shop.
Para completar tu registro, haz clic en el botón de abajo para verificar tu dirección de correo electrónico.

<x-mail::button :url="route('verification.verify', $user->id)">
Verificar Correo
</x-mail::button>

Gracias,<br>
{{ config('app.name') }}
</x-mail::message>

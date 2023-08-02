@component('mail::layout')
{{-- Header --}}
@slot ('header')
@component('mail::header', ['url' => 'https://previsegura.com'])
<!-- header -->
<img class="logo" src="{{ env('APP_URL') }}/img/logo.png" width="350" alt="Previsegura Logo" />
@endcomponent
@endslot

{{-- Content here --}}

<p>¿Problemas para entrar? </p>
<p> Restablecer tu contraseña es fácil. </p>
<p> Simplemente presiona el botón de abajo y sigue las instrucciones. Tendrás todo listo y funcionando en poco tiempo. </p>
<p> Enlace: </p>
<p><a href="{{ url($url) }}">{{$url}}</a></p>

<p> Si no realizaste esta solicitud, puedes ignorar este correo electrónico. </p>
<p> Este enlace expira en 60 minutos. </p>
{{-- Subcopy --}}
@slot('subcopy')
@component('mail::subcopy')
<!-- subcopy -->
Esta es una respuesta automática, por ende, no revisaremos el mensaje si respondes a esta dirección.
@endcomponent
@endslot

{{-- Footer --}}
@slot ('footer')
@component('mail::footer')
<!-- footer -->
Fast Track Talent, C.A.
@endcomponent
@endslot
@endcomponent

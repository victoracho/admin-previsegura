@component('mail::layout')
{{-- Header --}}
@slot ('header')
@component('mail::header', ['url' => 'https://ftt-web.ekodevs.com'])
<!-- header -->
@endcomponent
@endslot

{{-- Content here --}}

<p>Un saludo, con el siguiente enlace podrás restablecer tu contraseña: </p>
<p> {{ $url }}</p>
<br>
<p> Este enlace solo es valido por 60 minutos.</p>

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

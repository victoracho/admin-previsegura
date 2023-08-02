@component('mail::layout')
{{-- Header --}}
@slot ('header')
@component('mail::header', ['url' => 'https://previsegura.com'])
<!-- header -->
<img class="logo" src="{{ env('APP_URL') }}/img/Grupo Previsegura Tranquilidad Familiar logo.png" width="350" alt="Previsegura" />
@endcomponent
@endslot
{{-- Content here --}}
<p>Estimado <b>{{ $details['userData']->firstnames}} {{ $details['userData']->lastnames}}, </b> Tu usuario ha sido creado con exito.</p>
<p> Tu usuario es: {{$details['doc']}}</p>
<p> Tu clave de acceso es: {{$details['password']}}</p>
<p> Puedes cambiarla desde este enlace: </p>
<a href="https://admin.previsegura.com/forgot-password">
    aqui
</a>
<p> De lo contrario puedes revisar tus contratos desde este enlace:</p>
<a href="https://user.previsegura.com/"> aqui </a>
{{-- Subcopy --}}
@slot('subcopy')
@component('mail::subcopy')
<!-- subcopy -->
Este correo ha sido enviado automáticamente, por favor no responda ni reenvíe mensajes a esta dirección.
@endcomponent
@endslot

{{-- Footer --}}
@slot ('footer')
@component('mail::footer')
<!-- footer -->

@endcomponent
@endslot
@endcomponent

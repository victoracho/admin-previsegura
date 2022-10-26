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
        <p> {{$details['link']}}</p>
        
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
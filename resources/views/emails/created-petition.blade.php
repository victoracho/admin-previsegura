@component('mail::layout')
    {{-- Header --}}
    @slot ('header')
        @component('mail::header', ['url' => 'https://fttalent.work'])
            <!-- header -->
            <img class="logo" src="{{ env('APP_URL') }}/img/Grupo Previsegura Tranquilidad Familiar logo.png" width="350" alt="Previsegura" />
        @endcomponent
    @endslot
    {{-- Content here --}}
        <p>Estimado <b>{{ $details['admin']}}, </b> un usuario ha creado una solicitud con la siguiente información:</p>
        <p> <strong> Nombres:</strong> {{ $details['petition']->user->firstnames}} {{ $details['petition']->user->lastnames}}</p>
        <p> <strong> Correo:</strong> {{ $details['petition']->user->email}} </p>
        <p> <strong> Telefono:</strong> {{ $details['petition']->user->phone_number}} </p>
        <p> <strong> Plan:</strong> {{ $details['petition']->plan->name}} </p>
        @if ($details['petition']->user->user_type =='1')
            <p> <strong> Tipo de usuario:</strong> Nuevo </p>
        @else
            <p> <strong> Tipo de usuario:</strong> Registrado </p>
        @endif
        <p> <strong> Asistencias:</strong> <br>
        <ul>
            @foreach ($details['petition']->assistancePetitions as $assistance)
                <li> {{ $assistance->assistance->name }} </li>
            @endforeach
        </ul> 
        </p>
        <p> Accede al panel administrativo para ver mas detalles.</p>
        
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
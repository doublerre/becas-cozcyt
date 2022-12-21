@component('mail::message')


Estimado {{$nombre}} haz recibido un mensaje importante en la plataforma de becas, por favor verificalo

@component('mail::button', ['url' => 'www.cozcyt.gob.mx'])
Ir a la plataforma
@endcomponent

@endcomponent

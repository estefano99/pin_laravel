@component('mail::message')
# {{$mensaje -> name}} mando un mensaje

El mensaje es: {{$mensaje -> message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

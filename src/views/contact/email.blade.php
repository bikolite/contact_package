@component('mail::message')
# Introduction
There is new query from <strong>{{$name}}</strong>
<br>
<strong>Message:</strong>
<br>
{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

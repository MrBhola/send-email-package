@component('mail::message')
# Introduction

There is a message from the followong person.
* Name : {{$data->name}}
* Email : {{$data->email}}
* Message : {{$data->message}}

@component('mail::button', ['url' => 'http://localhost:8000'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

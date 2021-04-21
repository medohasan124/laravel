@component('mail::message')
# Introduction

The body of your message.
{{$data['user']->name}}
@component('mail::button', ['url' => $data['token']])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

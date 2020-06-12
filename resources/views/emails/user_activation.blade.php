@component('mail::message')
Hello {{ $code->User->name }}


Activation Code

Click the link below to get your activation code !!!
<a href="{{$url}}">{{$url}}</a>
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

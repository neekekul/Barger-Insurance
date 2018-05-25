@component('mail::message')
# Introduction

Thanks so much for registering with us!

{{$user->email}}

@component('mail::button', ['url' => 'https://bargerins.com/'])

Get Started!

@endcomponent
<br><br>
@component('mail::panel', ['url' => ''])

Something inspirational for '{{$user->name}}' to see...

@endcomponent
<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent

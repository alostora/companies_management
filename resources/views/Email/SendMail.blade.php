@component('mail::message')
# Introduction

Active your account ....

@component('mail::button', ['url' => url('activeEmail/'.$token)])
Active email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

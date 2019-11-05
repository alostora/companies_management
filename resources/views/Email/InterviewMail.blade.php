@component('mail::message')
# Introduction

interview mail .....

@component('mail::button', ['url' => url('/')])
interview mail
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

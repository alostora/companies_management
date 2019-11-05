@component('mail::message')
# Introduction

welcome {{$user['name']}}


message from khebra company
we told you that we accept your order for job 
	{{\App\Models\Job::find($user['userJobOrderInfo']['job_id'])->jobName}}
and will send you interview date and time..

thx Hr-team

@component('mail::button', ['url' => url('/')])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

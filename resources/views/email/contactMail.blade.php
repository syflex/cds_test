@component('mail::message')
# Hello from CDAInterview

Your Message Has been recieved
"{{ $email->content }}"

@component('mail::button', ['url' => ''])
I didn't Send the message
@endcomponent

Thanks,<br>
{{ __('CDAinterview')}}
@endcomponent

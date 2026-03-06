<x-mail::message>
# New Inquiry — {{ $event }} ({{ $date }})

<x-mail::panel>
**Lead:** {{ $fname }} {{ $lname }}  
**Email:** <a href="mailto:{{ $email }}">{{ $email }}</a>  
**Phone:** <a href="tel:{{ preg_replace('/[^0-9+]/', '', $phone) }}">{{ $phone }}</a>
</x-mail::panel>

<x-mail::panel>
**Event Date:** {{ $date }}  
**Event Type:** {{ $event }}  
@if (!empty($venue))
**Venue / Location:** {{ $venue }}  
@endif
@if (!empty($package))
**Package Interest:** {{ $package }}  
@endif
</x-mail::panel>

## Message
<x-mail::panel>
{!! nl2br(e($messageBody)) !!}
</x-mail::panel>

<x-mail::subcopy>
Tip: hit **Reply** — this email is configured to reply directly to {{ $fname }}.
</x-mail::subcopy>

—  
{{ config('mail.from.name') }}
</x-mail::message>
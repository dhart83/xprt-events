<x-mail::message>
# New Customer Inquiry
<br>

## Contact Information
<x-mail::panel>
**Full Name**: {{ $fname }} {{ $lname }}

**Email Address**: {{ $email }}

**Phone Number**: {{ $phone }}

@if ($ext)
**Extension:** {{ $ext }}
@endif
</x-mail::panel>

<br>

## Event Details
<x-mail::panel>
**Event Date:** {{ $date }}

**Event Type:** {{ $event }}

**About Event:** {{ $body }}
</x-mail::panel>

<br>

## Budget Information
<x-mail::panel>
**Budget Range:** {{ $budget }}
</x-mail::panel>
</x-mail::message>
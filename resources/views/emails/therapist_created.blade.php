@component('mail::message')
# New Therapist Registration

A new therapist has registered with the following details:

**Name**: {{ $emailData['name'] }}
**Email**: {{ $emailData['email'] }}
**State**: {{ $emailData['state'] }}
**Profession**: {{ $emailData['profession'] }}
**Graduation Year**: {{ $emailData['graduation_year'] }}
**Institution**: {{ $emailData['institution'] }}

Thank you,
{{ config('app.name') }}
@endcomponent

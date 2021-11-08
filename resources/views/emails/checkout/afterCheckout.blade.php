@component('mail::message')
# Register camp: {{$checkout->Camp->title}}

Hi {{$checkout->User->name}}
<br>
Thank you for register on <b>{{$checkout->Camp->title}}</b>, please see payment instruction by click the button bellow

@component('mail::button', ['url' => route('dashboard', $checkout->id)])
{{-- Get Invoice --}}
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

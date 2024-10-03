<x-mail::message>
# Hi, {{ $name }}

We're excited to have you on board!

<x-mail::button :url="''">
Click Here
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

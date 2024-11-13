<x-mail::message>
    Hello {{$user->name}}

    @if ($user->is_admin)
    Your are now admin in the system. You can add and block users.
    @else
    Your are now regular user in the system. You are no longer able to add and block users.

    @endif

    thank you,<br>
    {{ config('app.name') }}

</x-mail::message>

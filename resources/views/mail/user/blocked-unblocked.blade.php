<x-mail::message>
    Hello {{$user->name}}

    @if ($user->blocked_at)
    Your account has been blocked. You are no longer able to login.
    @else
    Your account has been unblocked. You are now able to login.
    <x-mail::button url="{{ route('login')}}">
        Login
    </x-mail::button>

    @endif

    thank you,<br>
    {{ config('app.name') }}

</x-mail::message>

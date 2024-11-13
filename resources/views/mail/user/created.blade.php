<x-mail::message>
    Hello {{$user->name}}

    Your account has been created successfully.

    **Here is your login information:** <br>
    Email:{{$user->email}}<br>
    Password:{{$password}}<br>

    Please login to the system and change your password.

    <x-mail::button url="{{route('login')}}">
        Login
    </x-mail::button>
    Thank you , <br>
    {{ config('app.name') }}

</x-mail::message>

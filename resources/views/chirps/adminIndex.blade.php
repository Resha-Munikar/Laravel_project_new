@extends('layouts.app')
@section('title', 'Admin Chirps')

@section('content')

<!-- logoutbutton -->
<div>
<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit" class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Logout</button>
</form>
</div>

<div>
    <!-- {{ $userCount }} users are registered. -->
    
    <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">

    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $userCount }}</h5>
    <p class="font-normal text-gray-700 dark:text-gray-400">Total User</p>
    </a>

</div>


<div>
    <h1>Admin Chirps</h1>
    <p>Welcome, {{ $user->name }} (Admin)</p>

    <ul>
        @foreach ($chirps as $chirp)
            <li>
                <strong>{{ $chirp->user->name }}:</strong> {{ $chirp->chirp }}

                <br>
                <small>Posted on: {{ $chirp->created_at->format('M d, Y \a\t h:i A') }}</small>
            </li>
            <hr>
        @endforeach
    </ul>
</div>


@endsection
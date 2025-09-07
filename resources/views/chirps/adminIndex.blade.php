<div>
    <h1>Admin Chirps</h1>
    <p>Welcome, {{ $user->name }} (Admin)</p>

    <ul>
        @foreach ($chirps as $chirp)
            <li>
                <strong>{{ $chirp->user->name }}:</strong> {{ $chirp->message }}
                <br>
                <small>Posted on: {{ $chirp->created_at->format('M d, Y \a\t h:i A') }}</small>
            </li>
        @endforeach
    </ul>
</div>
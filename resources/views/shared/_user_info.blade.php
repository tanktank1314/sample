<a href="{{ route('users.show',$user->id) }}">
    <img src="{{ $user->gravater('140') }}" alt="{{ $user->name }}" class="gravater">
</a>
<h1>{{ $user->name }}</h1>
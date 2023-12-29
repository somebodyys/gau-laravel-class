<div style="display: flex; align-items: center; justify-content: space-between; flex-direction: column">
    @foreach ($planets as $planet)
        @include('space.components.planet-card')
    @endforeach

    @foreach ($users as $user)
        <div style="border: solid 1px black; border-radius: 15px; margin: 30px;">
            <h1>{{ $user->first_name }}</h1>
        </div>
    @endforeach
</div>

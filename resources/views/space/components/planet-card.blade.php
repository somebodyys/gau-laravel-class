<div style="border: solid 1px black; border-radius: 15px; margin: 30px;">
    <h1>{{ $planet->name }}</h1>

    @if ($planet->life)
        <h3 style="color: green;">There is Life!</h3>
    @else
        <h3 style="color: red;">No Life!</h3>
    @endif

    <p>{{ $planet->description }}</p>
</div>

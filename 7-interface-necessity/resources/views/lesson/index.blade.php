@foreach ($lessons as $lesson)
<li>
    <h1>{{ $lesson->getTitle() }}</h1>
    <p>{{ $lesson->getBody() }}</p>
</li>
@endforeach

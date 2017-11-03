@foreach ($epsidos as $epsido)
<li>
    <h1>{{ $epsido->getTitle() }}</h1>
    <p>{{ $epsido->getBody() }}</p>
</li>
@endforeach

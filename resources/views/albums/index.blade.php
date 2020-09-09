<h1>Elenco Album</h1>


@foreach ($albums as $album)
  <div>
    <ul>
      <li>
        Nome Album: {{ $album->title }}
        <a href="{{ route('albums.show', $album)}}">Visualizza</a>
      </li>
      <li>Artista: {{ $album->artist }}</li>
      <li>Year: {{ $album->year }}</li>
    </ul>
  </div>
@endforeach

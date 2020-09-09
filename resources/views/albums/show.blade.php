<h1>Album {{ $album->title }}</h1>
<img src="{{ $album->covers->cover }}" alt="">
<p>Artista {{ $album->artist }}</p>
<p>Anno {{ $album->year }}</p>

<h2>Lista canzoni</h2>
@foreach ($album->songs as $song)
  <div class="">
    <li>
      Canzone {{ $song->title}}
      <a> Genere {{ $song->genre }}</a>
    </li>

  </div>
@endforeach

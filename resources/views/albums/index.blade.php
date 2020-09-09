<link rel="stylesheet" href="{{asset('css/app.css')}}">

<h1>Elenco Album</h1>

<div class="container">



@foreach ($albums as $album)
  <div class="album">
    <div class="immagine">
        <img src="{{ (!empty($album->covers))? $album->covers->cover : 'https://via.placeholder.com/320x180' }}" alt="">
    </div>
    <ul>
      <li>
        Nome Album: {{ $album->title }}

      </li>
      <li>Artista: {{ $album->artist }}</li>
      <li>Year: {{ $album->year }}</li>
    </ul>
    <a href="{{ route('albums.show', $album)}}">Visualizza</a>
  </div>
@endforeach


</div>

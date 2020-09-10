<h1>Modifica Album {{ $album->title }}</h1>

<img src="{{ $album->covers->cover }}" alt="">



<form action="{{route('albums.update', $album)}}" method="post">
@csrf
@method('PUT')
 <label for="titolo">Titolo</label>
 <input type="text" name="title" value="{{ $album->title }}" placeholder="Titolo"> <br>

 <label for="year">Artista</label>
 <input type="text" name="artist" value="{{ $album->artist }}" placeholder="Artista"> <br>

 <label for="year">Anno</label>
 <input type="text" name="year" value="{{ $album->year }}" placeholder="Anno"> <br>


@foreach ($formats as $format)
  <input type="checkbox" name="formats[]" value="{{ $format->id }}" {{ ($album->formats->contains($format)) ? 'checked' : '' }}>
   <span> {{ $format->format }}</span>
@endforeach




 <br>
 <input class="submit" type="submit" value="Invia">
</form>

@extends('layouts/main')

@section('content')

<div class="row">

  @foreach($albums as $album)
    <div class="col-4 p-3">
      <strong>{{$album->title}}</strong> ({{$album->artist}})
    </div>  
  @endforeach

</div>

@endsection
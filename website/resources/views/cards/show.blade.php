@extends('layout')

@section('content')
  <div class="row">
      <div class="col-md-6 col-md-offset-3">


          <h1> {{$card->title }}</h1>
        <ul class="list-group">


                @foreach ($card->notes as $note)
                  <form method="GET" action="/notes/{{$note->id}}/edit">


                  <li class="listitem list-group-item">{{$note->body}}

                    <a href="#" class="pull-left">{{$note->user->username}}  :</a>
                          <button type="submit" class="btn pull-right">Edit</button></li></form>

                @endforeach
          </ul>
          <hr>
          <h3>Add new note</h3>
          <form method="POST" action="/cards/{{ $card->id }}/notes">
            {{ csrf_field()}}
            <div class="form-group">


              <textarea name="body" rows="8" cols="40" class="form-control">{{old('body')}}</textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Note</button>
            </div>

          </form>
          @if (count($errors))
            <ul>
              @foreach ($errors->all() as $error)
                <li>
                  {{$error}}
                </li>


              @endforeach
            </ul>

          @endif
        </div>
    </div>
    @endsection

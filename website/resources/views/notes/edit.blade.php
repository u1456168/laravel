@extends('layout')

@section('content')

  <h1> Edit the Note:</h1>

      <form method="POST" action="/notes/{{$note->id}}">
        {{ method_field('PATCH')}}
        {{ csrf_field()}}
        <div class="form-group">


          <textarea name="body" rows="8" cols="40" class="form-control">{{$note->body}}</textarea>
        </div>

        <div class="form-group">
          
            <button type="submit" class="btn btn-primary">Update Note</button>

        </div>

      </form>
    </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
 

<div class = "mx-auto" style="width: 1000px;">
  <a href="{{ route("rating.create") }}">
    <button role="button" class="btn btn-success" type="submit" >ADD Rating</button>
  </a> 

</div>

<div  class = "mx-auto" style="width: 1000px;">
    <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Rating</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($ratings as $rating)
        <tr>
            <td>{{ $rating->id }}</td>
            <td>{{ $rating->rating}}</td>
            <td>
                <div class="container">
                    <div class="row">
                        <div class="col" style="padding-right: 0px; flex-grow: 0;">   
                            <a href="{{ route("rating.edit",['rating' => $rating->id]) }}">
                                <button role="button" class="btn btn-success" type="submit" >Edit</button>
                            </a> 
                        </div>
                        <div class="col" style="padding-right: 0px; flex-grow: 0;">
                            <form action="{{ route("rating.destroy",['rating' => $rating->id]) }}" method="POST">
                                @csrf
                                @method("Delete")
                                <button role="button" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            <td>
        </tr>
        @endforeach
    
    </tbody>
    </table>
</div>
  
  @endsection
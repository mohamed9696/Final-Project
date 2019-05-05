@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Book Info</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card" style="width: 43rem;">
                        <img class="card-img-top" src="{{ $book->url }}" alt="Card image cap" width="400" height="500">
                            <div class="card-body">
                                 <h2 class="card-title">Book Name : {{ $book->name}}</h2>
                                 <p class="card-text">Description : {{ $book->description}} </p>
                                            <!--edit button-->
                                <form action="{{url('edit'.$book->id)}}" method="GET">      
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-refresh"></i>Edit
                                    </button>
                                </form>

                                                <!--delete button-->
                                <form action="{{url ('delete'. $book->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-btn fa-refresh"></i>DELETE
                                    </button
                                </form>

					        </div>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


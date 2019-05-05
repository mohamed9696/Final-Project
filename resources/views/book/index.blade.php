@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a class="nav-link" href="{{url('book.create')}}" >Add New Book </a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($books as $book)
	                    <div class="card" style="width: 14rem; display: inline-block; height: 22rem; overflow: hidden; text-overflow: ellipsis;">
						  <img class="card-img-top" height= "250px" src="{{ $book['url']}}" alt="Card image cap">
						  <div class="card-body">
						    <p class="card-title" style="height: 30px;"><strong>{{ $book->name }}</strong></p>
                            <div>
                                <a class="nav-link" href="{{url('show'.$book->id)}}" style="display: inline-block;"><span class="glyphicon glyphicon-eye-open" >Show More</span></a>
                            </div>
						  </div>
						</div>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


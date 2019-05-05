@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hello</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{url('/books')}}"> <button  style="font-size:20px;background-color:aqua;margin-left:auto;margin-right:auto;display:block;margin-top:10%;margin-bottom:10%" class="btn btn-default">My books</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

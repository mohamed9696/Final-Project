@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Book Page</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{url('store')}}" method="POST">
                        @csrf
                       <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                      </div>
                       <div class="form-group">
                        <label for="url">Image:</label>
                        <input type="text" class="form-control" id="url" name="url">
                      </div>
                      <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                      </div>
                      <button type="submit" class="btn btn-default">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

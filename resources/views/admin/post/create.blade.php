@extends('layouts.app')
@section('content')
    <div class="container-fluid content p-5">
        <h1>Crea nuovo post</h1>
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>
            </div>
        @endif
        <form action="{{ route('admin.posts.store') }}" method="POST" class="row g-3 needs-validation" novalidate>

            @csrf
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">
                    Titolo
                </label>
                <input type="text" class="form-control" id="validationCustom01" required name="title"
                    value="{{ old('title') }}">
            </div>
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Contenuto</label>
                <textarea name="content" value="{{ old('content') }}" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Add to posts list</button>
            </div>
        </form>
    </div>
@endsection

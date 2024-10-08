@extends('layouts.app')
@section('content')
    <div class="container-fluid content p-5">
        <h1 class="n-txt">Modifica post</h1>

        <form class="form d-flex flex-column" action="{{ route('admin.posts.update', $edit_post) }}" method="POST"
            class="row g-3 needs-validation" novalidate>
            @csrf
            @method('PUT')
            <div class="col-md-4 d-flex flex-column py-4 txt">
                <label for="validationCustom01" class="form-label">
                    Titolo
                </label>
                <input type="text" class="form-controlid=" id="validationCustom02" required name="title"
                    value="{{ $edit_post->title }}">

            </div>
            <div class="col-md-4 py-4 d-flex flex-column txt">
                <label for="validationCustom02" class="form-label">Contenuto</label>
                <textarea class="form-control" name="content" id="validationCustom02" cols="30" rows="10">{{ $edit_post->content }}</textarea>
            </div>
            <div class="col-12">
                <button class="btn btn-primary add" type="submit">Aggiorna</button>
            </div>
        </form>
    @endsection

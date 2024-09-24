@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Benvenuto nella Dashboard</h1>
        <h3>Sono presenti {{ $n_post }} posts al momento</h3>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Contenuto</th>
                    <th scope="col">Visite</th>
                    <th scope="col">Creato il</th>
                    <th scope="col">Visite</th>
                    <th scope="col">Like</th>
                    <th scope="col">Dislike</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->visit }}</td>
                        <td>{{ $post->positive_votes }}</td>
                        <td>{{ $post->negative_votes }}</td>
                        <td>{{ $post->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="container-fluid content">
        <h2>Post List</h2>
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
                    <th scope="col">Dettaglio</th>
                    <th scope="col">Edita</th>
                    <th scope="col">Elimina</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->created_at->format('d/m/Y') }}</td>
                        <td>{{ $post->visit }}</td>
                        <td>{{ $post->positive_votes }}</td>
                        <td>{{ $post->negative_votes }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td><a href="{{ route('admin.posts.show', $post->id) }}"><i class="fa-regular fa-eye"></i></a></td>
                        <td><a href="{{ route('admin.posts.edit', $post) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <form action="{{ route('admin.posts.destroy', $post) }}" method="POST"
                                onsubmit="return confirm('Sicuro di voler eliminare il post?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

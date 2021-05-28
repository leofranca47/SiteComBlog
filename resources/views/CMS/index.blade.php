@extends('CMS.layout.app')

@section('content')
    <h2>Lista de posts</h2>

    <a href="{{ url('cms/create') }}" class="btn btn-primary">Criar Novo Post</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Imagem</th>
                <th scope="col">Titulo</th>
                <th scope="col">Data Criação</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>
                        @if ($post->cover)
                            <img src="{{ url( Storage::url(\App\Support\Cropper::thumb($post->cover, 800, 450) )) }}" alt="{{ $post->title }}" width="80px">
                        @endif
                    </td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>
                        <a href="{{ route('cms.show', $post->id) }}">Visualizar</a> <br>
                        <a href="{{ route('cms.edit', $post->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    @if (isset($filters))
        {!! $posts->appends($filters)->links() !!}
    @else
        {!! $posts->links() !!}
    @endif
@endsection

@csrf
<div class="form-group">
    <label>Título</label>
    <input type="text" class="form-control" name="title" value="{{ $post->title ?? old('title') }}">
</div>
<div class="form-group">
    <label>SubTitulo</label>
    <input type="text" class="form-control" name="subtitle" value="{{ $post->subtitle ?? old('subtitle') }}">
</div>
<div class="form-group">
    <label>Imagem</label>
    <input type="file" class="form-control" name="cover">
</div>
<div class="form-group">
    <label>Post</label>
    <textarea id="artigo" name="content" class="form-control" cols="30" rows="10">{{ $post->content ?? old('content') }}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">
        @if (isset($post))
            Atualizar
        @else
            Cadastrar
        @endif
    </button>
</div>

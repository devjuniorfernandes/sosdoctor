@extends('layouts.main')

@section('title', 'Criar Slide')

@section('content')
<br><br><br><br><br>
<br><br><br><br><br>
    <div class="col-md-6 offset-md-3">
        <h1>Adicionar Slide</h1>
        <form action="/slides" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Imagem do Slide:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="title">Titulo do Slide:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titulo do slide">
            </div>
            <div class="form-group">
                <label for="title">Subtitulo do Slide:</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Subtitulo do slide">
            </div>
            <div class="form-group">
                <label for="title">Informação do Slide:</label>
                <textarea class="form-control" id="description" name="description" placeholder="Informação do slide"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="ADICIONAR SLIDE">
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Adicionar Produto</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Preço:</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" step="0.01" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection

@section('scripts')
    <!-- Adicionar Bootstrap via CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection

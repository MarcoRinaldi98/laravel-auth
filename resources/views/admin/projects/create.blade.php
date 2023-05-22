@extends('layouts.admin')

@section('page-title', 'Crea nuovo progetto')

@section('content')
    <div class="container">
        <h3 class="py-3">Modulo per l'inserimento di un nuovo progetto:</h3>

        <form action="{{ route('admin.projects.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo: </label>
                <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror"
                    value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione: </label>
                <textarea name="description" id="description" rows="10"
                    class="form-control @error('description') is-invalid @enderror">
                    {{ old('description') }}
                </textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="btn btn-success" type="submit">Salva</button>
        </form>
    </div>
@endsection

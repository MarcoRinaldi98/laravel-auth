@extends('layouts.admin')

@section('page-title', 'Modifica progetto')

@section('content')
    <div class="container">
        <h2 class="text-center">Modifica progetto: </h2>
        <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">

            @method('PUT')
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo: </label>
                <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror"
                    value="{{ old('title', $project->title) }}">
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
                    {{ old('description', $project->description) }}
                </textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-warning">Salva</button>
        </form>
    </div>
    </div>
    </div>
@endsection

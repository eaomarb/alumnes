@extends("layouts.app")
@section("content")
<div class="container mt-5">
    <div class="mb-3">
        <a href="{{ route('alumne.index') }}" class="btn btn-secondary">Darrere</a>
    </div>

    <div class="w-full">
        <div class="flex flex-wrap">
            <h1 class="mb-5">{{ $title }}</h1>
        </div>
    </div>

    <form method="POST" action="{{ $route }}" class="needs-validation">
        @csrf
        @isset($update)
        @method("PUT")
        @endisset
        <div class="mb-3">
            <label for="nom" class="form-label">{{ __("Nom") }}</label>
            <input name="nom" type="text" class="form-control" value="{{ old("nom") ?? $alumne->nom }}" disabled>
            @error("nom")
            <div class="fs-6 text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="cognoms" class="form-label">{{ __("Cognoms") }}</label>
            <input name="cognoms" type="text" class="form-control" value="{{ old("cognoms") ?? $alumne->cognoms }}" disabled>
            @error("cognoms")
            <div class="fs-6 text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="data_naixement" class="form-label">{{ __("Data de naixement") }}</label>
            <input name="data_naixement" type="date" class="form-control" value="{{ old("data_naixement") ?? $alumne->data_naixement }}" disabled>
            @error("data_naixement")
            <div class="fs-6 text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="centre_id" class="form-label">{{ __("Centre") }}</label>
            <input name="centre_id" type="text" class="form-control" value="{{ $alumne->centre->nom ?? 'N/A' }}" disabled>
            @error("centre_id")
            <div class="fs-6 text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="ensenyament_id" class="form-label">{{ __("Ensenyament") }}</label>
            <input name="ensenyament_id" type="text" class="form-control" value="{{ $alumne->ensenyament->nom ?? 'N/A' }}" disabled>
            @error("ensenyament_id")
            <div class="fs-6 text-danger">{{ $message }}</div>
            @enderror
        </div>



    </form>
</div>
@endsection
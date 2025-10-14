@extends('layouts.app')

@section("content")

<div class="container mt-5">
    <div class="mb-3">
        <a href="{{ route('home') }}" class="btn btn-secondary">Darrere</a>
    </div>

    <div class="text-center">
        <h1>{{ __("Llistat de ensenyaments") }}</h1>
        <a href="{{ route("ensenyament.create") }}" class="btn btn-primary">
            {{ __("Afegir ensenyament") }}
        </a>
    </div>

    <table class="table table-bordered mb-5 mt-5">
        <thead>
            <tr class="table-success">
                <th>{{ __("Id") }}</th>
                <th>{{ __("Nom") }}</th>
                <th>{{ __("Accions") }}</th>
            </tr>
        </thead>
        <tbody>
            @forelse($ensenyaments as $ensenyament)
            <tr>
                <th scope="row">{{ $ensenyament->id }}</th>
                <td>{{ $ensenyament->nom }}</td>
                <td>
                    <a href="{{ route("ensenyament.edit", ["ensenyament" => $ensenyament]) }}" class="btn btn-warning">{{ __("Editar") }}</a>
                    <a href="#" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-project-{{ $ensenyament->id }}-form').submit();">{{ __("Eliminar") }}</a>
                    <form id="delete-project-{{ $ensenyament->id }}-form" action="{{ route("ensenyament.destroy", ["ensenyament" => $ensenyament]) }}" method="POST" class="hidden">
                        @method("DELETE")
                        @csrf
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4">
                    <div class="text-center" role="alert">
                        <p><strong class="font-bold">{{ __("No hi ha ensenyaments") }}</strong></p>
                        <span>{{ __("No hi ha cap dada a mostrar") }}</span>
                    </div>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{-- Pagination --}}
    <div class="d-flex justify-content-center">
        {!! $ensenyaments->links() !!}
    </div>
</div>

@endsection
@extends('layouts.app')

@section('content')
    <h1>Dettagli Prodotto</h1>

    <p><strong>Nome Prodotto:</strong> {{ $elemento->nome_prodotto }}</p>
    <p><strong>Quantità:</strong> {{ $elemento->quantita }}</p>
    <p><strong>Prezzo:</strong> {{ $elemento->prezzo }}</p>

    <a href="{{ route('inventario.edit', $elemento->id) }}" class="btn btn-warning">Modifica</a>
    <form action="{{ route('inventario.destroy', $elemento->id) }}" method="post" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Elimina</button>
    </form>
@endsection

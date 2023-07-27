@extends('layouts.app')

@section('content')
    <h1>Modifica Prodotto</h1>

    <form action="{{ route('inventario.update', $elemento->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nome_prodotto">Nome Prodotto</label>
            <input type="text" name="nome_prodotto" class="form-control" value="{{ $elemento->nome_prodotto }}">
        </div>
        <div class="form-group">
            <label for="tipologia_prodotto">Tipologia Prodotto</label>
            <input type="text" name="tipologia_prodotto" class="form-control" value="{{ $elemento->tipologia_prodotto }}">
        </div>
        <div class="form-group">
            <label for="quantita">Quantità</label>
            <input type="number" name="quantita" class="form-control" value="{{ $elemento->quantita }}">
        </div>
        <div class="form-group">
            <label for="package">Package</label>
            <input type="text" name="package" class="form-control" value="{{ $elemento->package }}">
        </div>
        <div class="form-group">
            <label for="prezzo">Prezzo</label>
            <input type="text" name="prezzo" class="form-control" value="{{ $elemento->prezzo }}">
        </div>
        <div class="form-group">
            <label for="notes">Note</label>
            <textarea name="notes" class="form-control">{{ $elemento->notes }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salva Modifiche</button>
    </form>
@endsection

@extends('layouts.app')

@section('content')
    <h1>Aggiungi un nuovo prodotto</h1>

    <form action="{{ route('inventario.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nome_prodotto">Nome Prodotto</label>
            <input type="text" name="nome_prodotto" class="form-control">
        </div>
        <div class="form-group">
            <label for="tipologia_prodotto">Tipologia Prodotto</label>
            <input type="text" name="tipologia_prodotto" class="form-control">
        </div>
        <div class="form-group">
            <label for="quantita">Quantità</label>
            <input type="number" name="quantita" class="form-control">
        </div>
        <div class="form-group">
            <label for="package">Package</label>
            <input type="text" name="package" class="form-control">
        </div>
        <div class="form-group">
            <label for="prezzo">Prezzo</label>
            <input type="text" name="prezzo" class="form-control">
        </div>
        <div class="form-group">
            <label for="notes">Note</label>
            <textarea name="notes" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection

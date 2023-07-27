@extends('layouts.app')

@section('content')
<div class="container-fluid mt-4 custom-table-container">
    <h1>Elenco dell'inventario</h1>

    <a href="{{ route('inventario.create') }}" class="btn btn-primary">Aggiungi Prodotto</a>

    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th class="th-sm sortable" data-sort-order="item_name,asc">Item name <i class="fas fa-sort"></i></th>
                <th class="th-sm sortable" data-sort-order="item_type,asc">Item type <i class="fas fa-sort"></i></th>
                <th class="th-sm sortable" data-sort-order="quantity,asc">Quantity <i class="fas fa-sort"></i></th>
                <th class="th-sm sortable" data-sort-order="package,asc">Package <i class="fas fa-sort"></i></th>
                <th class="th-sm sortable" data-sort-order="notes,asc">Notes <i class="fas fa-sort"></i></th>
                <th class="th-sm">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($inventario as $prodotto)
            <tr>
                <td>{{ $prodotto->nome_prodotto }}</td>
                <td>{{ $prodotto->tipologia_prodotto }}</td>
                <td>{{ $prodotto->quantita }}</td>
                <td>{{ $prodotto->package }}</td>
                <td>{{ $prodotto->notes }}</td>
                <td>
                    <a href="{{ route('inventario.show', $prodotto->id) }}" title="Visualizza"><i class="fas fa-eye text-info"></i></a>
                    <a href="{{ route('inventario.edit', $prodotto->id) }}" title="Modifica"><i class="fas fa-edit text-warning"></i></a>
                    <a href="{{ route('inventario.destroy', $prodotto->id) }}" title="Delete"><i class="fas fa-trash-alt text-danger"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th class="th-sm">Item name
                </th>
                <th class="th-sm">Item type
                </th>
                <th class="th-sm">Quantity
                </th>
                <th class="th-sm">Package
                </th>
                <th class="th-sm">Notes
                </th>
                <th class="th-sm">Actions
                </th>
              </tr>
        </tfoot>
      </table>
    </div>
@endsection

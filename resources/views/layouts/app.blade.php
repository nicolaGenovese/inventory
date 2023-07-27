<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Inventory Management')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        th {
            background-color: #f8f9fa;
            color: #333;
            text-align: left;
            font-weight: bold;
            padding: 12px 15px;
        }
    
    
        th.sortable:hover {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('inventario.index') }}">Inventory Management</a>
        </div>
    </nav>
    <div class="container-fluid mt-4">
        @yield('content')
    </div>


    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#dtBasicExample').DataTable();
        });
    </script>
</body>
</html>


@extends('layouts.system')

@section('head')
<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <style>
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: .5em 1em;
        }
    </style>
@endsection 

@section('body')
<div class="container">
    <div class="page-inner">
    <h2 class="mb-4">Data Table with Filtering, Sorting, and Pagination</h2>
    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john.doe@example.com</td>
                    <td>+123 456 7890</td>
                    <td>123 Main St, Anytown, USA</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>jane.smith@example.com</td>
                    <td>+987 654 3210</td>
                    <td>456 Elm St, Othercity, USA</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Michael Johnson</td>
                    <td>michael.johnson@example.com</td>
                    <td>+456 789 0123</td>
                    <td>789 Oak St, Anothercity, USA</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <!-- Initialize DataTables -->
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true
            });
        });
    </script>
@endsection 
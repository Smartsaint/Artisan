@extends('layouts.system')

@section('body')
<div class="container mt-5">
  <div class="page-inner">
  <div class="table-responsive mt-10" style="margin-top:2rem;">
            <table class=" mt-8 table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Role Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Admin</td>
                        <td>Full access to all features and settings.</td>
                        <td>
                            <button class="btn btn-info btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Editor</td>
                        <td>Can edit and manage content.</td>
                        <td>
                            <button class="btn btn-info btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Viewer</td>
                        <td>Can view content but cannot make changes.</td>
                        <td>
                            <button class="btn btn-info btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
  </div>
</div>
@endsection 


@extends('layouts.system')

@section('body')
<div class="container mt-5">
  <div class="page-inner">
        <h2>Create Role</h2>
        <form action="/create-role" method="POST">
            <div class="mb-3">
                <label for="roleName" class="form-label">Name</label>
                <input type="text" class="form-control" id="roleName" name="name" placeholder="Enter role name" required>
            </div>
            <div class="mb-3">
                <label for="roleDescription" class="form-label">Description</label>
                <textarea class="form-control" id="roleDescription" name="description" rows="3" placeholder="Enter role description"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Role</button>
        </form>
  </div>
</div>
@endsection 


@extends('layouts.system')

@section('head')
<style>
        .profile-header {
            background-color: #f8f9fa;
            padding: 2rem;
            border-bottom: 1px solid #dee2e6;
        }
        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        .card-body {
            padding: 2rem;
        }
    </style>
@endsection

@section('body')
<div class="container mt-5">
    <div class="page-inner">
          <!-- Profile Header -->
          <div class="profile-header text-center">
            <img src="https://via.placeholder.com/150" alt="Profile Picture" class="profile-picture mb-3">
            <h1 class="h3">John Doe</h1>
            <p class="text-muted">Web Developer</p>
        </div>

        <!-- Profile Details -->
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Contact Information</h5>
                        <ul class="list-unstyled">
                            <li><strong>Email:</strong> john.doe@example.com</li>
                            <li><strong>Phone:</strong> +123 456 7890</li>
                            <li><strong>Address:</strong> 123 Main St, Anytown, USA</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">About Me</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel risus nec urna laoreet volutpat. Integer vel vehicula dui. Donec vitae nisi vitae velit condimentum scelerisque. Cras sit amet nunc a ligula facilisis facilisis vel id odio.</p>
                        <h5 class="card-title mt-4">Social Media</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="btn btn-outline-primary">Facebook</a></li>
                            <li><a href="#" class="btn btn-outline-info">Twitter</a></li>
                            <li><a href="#" class="btn btn-outline-link">LinkedIn</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>      
</div>
@endsection 
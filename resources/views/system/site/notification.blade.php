@extends('layouts.system')

@section('head')
<style>
        .notification-item {
            border-bottom: 1px solid #dee2e6;
            padding: 1rem;
            margin-bottom: 0.5rem;
            border-radius: 0.375rem;
        }
        .notification-item.read {
            background-color: #f8f9fa;
        }
        .notification-item.unread {
            background-color: #ffffff;
        }
    </style>
@endsection 

@section('body')
<div class="container">
    <div class="inner-page page-inner">
    <div class="container mt-5">
        <h2 class="mb-4">Notifications</h2>

        <!-- Filter and Search -->
        <div class="d-flex justify-content-between mb-4">
            <div>
                <button class="btn btn-primary me-2" id="filter-all">All</button>
                <button class="btn btn-success me-2" id="filter-read">Read</button>
                <button class="btn btn-danger me-2" id="filter-unread">Unread</button>
            </div>
            <div class="w-50">
                <input type="text" class="form-control" id="search" placeholder="Search notifications...">
            </div>
        </div>

        <!-- Notifications List -->
        <div id="notifications-list">
            <div class="notification-item unread">
                <h5 class="mb-1">New User Registered</h5>
                <p class="mb-1">A new user has registered on the platform.</p>
                <small class="text-muted">10 minutes ago</small>
            </div>
            <div class="notification-item read">
                <h5 class="mb-1">System Update</h5>
                <p class="mb-1">The system has been updated successfully.</p>
                <small class="text-muted">1 hour ago</small>
            </div>
            <div class="notification-item unread">
                <h5 class="mb-1">New Comment</h5>
                <p class="mb-1">A user commented on your post.</p>
                <small class="text-muted">3 hours ago</small>
            </div>
            <!-- Add more notifications as needed -->
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>

    <!-- Custom Script for Filtering and Search -->
    <script>
        $(document).ready(function() {
            $('#filter-all').click(function() {
                $('.notification-item').show();
            });
            $('#filter-read').click(function() {
                $('.notification-item').hide();
                $('.notification-item.read').show();
            });
            $('#filter-unread').click(function() {
                $('.notification-item').hide();
                $('.notification-item.unread').show();
            });

            $('#search').on('input', function() {
                var searchTerm = $(this).val().toLowerCase();
                $('.notification-item').each(function() {
                    var text = $(this).text().toLowerCase();
                    $(this).toggle(text.includes(searchTerm));
                });
            });
        });
    </script>
    </div>
</div>
@endsection 
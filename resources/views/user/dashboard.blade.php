<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'User Dashboard')</title>
    <!-- Bootstrap CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-header {
            background-color: #007bff;
            color: white;
        }

        .card-body {
            background-color: #f8f9fa;
        }

        .nav-link.active {
            color: #007bff;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #343a40;
            height: 100vh;
            padding-top: 20px;
        }

        .sidebar .nav-link {
            color: white;
        }

        .sidebar .nav-link:hover {
            background-color: #495057;
        }

        .sidebar .nav-item {
            padding: 10px 20px;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .footer {
            background-color: #f8f9fa;
            padding: 20px;
            text-align: center;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                position: relative;
            }

            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="container-fluid">
            <h3 class="text-white text-center mb-4">User Dashboard</h3>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('user.dashboard') }}">
                        Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Orders
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Account Settings
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="main-content">
        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('user.dashboard') }}">SmartKart</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Account Settings</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Dashboard Content -->
        <div class="container mt-4">
            <div class="row">
                <!-- Profile Overview -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Profile Overview
                        </div>
                        <div class="card-body">
                            <h5>Name: {{ auth()->user()->name }}</h5>
                            <p>Email: {{ auth()->user()->email }}</p>
                            <p>Joined: {{ auth()->user()->created_at->format('F d, Y') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Order History -->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            Your Orders
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Product</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {{-- @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->product->name }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>{{ $order->created_at->format('F d, Y') }}</td>
                                    </tr>
                                    @endforeach
                                    --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Account Settings Link -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Account Settings
                        </div>
                        <div class="card-body">
                            <a href="#" class="btn btn-primary">Manage Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer Section -->
    <footer class="footer">
        <p>&copy; {{ date('Y') }} SmartKart. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS & Dependencies via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

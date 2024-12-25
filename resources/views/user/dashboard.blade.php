<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <h1>Welcome to the User Dashboard</h1>
        <p>This is a sample dashboard page to demonstrate the layout. You can customize it as needed.</p>
        
        <!-- Dashboard Stats Section -->
        <div class="row mt-4">
            <!-- Profile Overview -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Your Profile</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Name:</strong> John Doe</p>
                        <p><strong>Email:</strong> john.doe@example.com</p>
                        <p><strong>Member Since:</strong> January 2021</p>
                    </div>
                </div>
            </div>

            <!-- User Activity Section -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Your Recent Activities</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Logged in on January 15, 2024</li>
                            <li>Updated profile information on January 10, 2024</li>
                            <li>Made a purchase on December 20, 2023</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Buttons Section -->
        <div class="mt-4">
            <a href="#" class="btn btn-primary">Edit Profile</a>
            <a href="#" class="btn btn-secondary">View Orders</a>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-3">
        <p>&copy; 2024 YourCompany. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>






<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h1 class="mb-4">Admin Dashboard</h1>
            <p>Welcome back, <strong>{{ auth()->user()->name }}</strong>!</p>

            <div class="card mt-4">
                <div class="card-header">
                    <h5>Quick Links</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{ route('products.index') }}">Manage Products</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('categories.index') }}">Manage Categories</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('orders.index') }}">View Orders</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('users.index') }}">Manage Users</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


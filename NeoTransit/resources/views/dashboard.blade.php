@extends('layouts.admin')
@section('content')
<div class="container">
    <h1 class="mt-5">Admin Dashboard</h1>

    <div class="row  bg-secondary justify-content-between mt-5 p-3 border  rounded">
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body justify-content-center">
                        <h3 class="card-title">Users</h3>
                        <h5 class="card-text">12</h5>

                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body justify-content-center">
                        <h3 class="card-title">Payments</h3>
                        <h5 class="card-text">2</h5>
                    </div>
                </div>
            </div>
    </div>
    <div class="row mt-5">
        <h2>User Information</h2>
        <table class="table table-light table-hover bg-primary border border-primary rounded">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>User</td>
                    <td>User123</td>
                    <td>User Email</td>
                    <td>Tele</td>
                    <td>Tele</td>
                </tr>

            </tbody>
        </table>
        <div class="row">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="row mt-5">
        <h2>Payment Information</h2>
        <table class="table  table-light table-hover border border-primary rounded">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Payment Amount</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>User</td>
                <td>User123</td>
                <td>User Email</td>
                <td>Tele</td>
            </tr>
            </tbody>
        </table>
        <div class="row">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body justify-content-center">
                    <h3 class="card-title">Admin</h3>
                    <h5 class="card-text">12</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <h2>Admin Information</h2>
        <table class="table table-light table-hover border border-primary rounded">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Admin Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>User</td>
                    <td>User123</td>
                    <td>User Email</td>
                    <td>Tele</td>
                </tr>
            </tbody>
        </table>
        <div class="row">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
@endsection


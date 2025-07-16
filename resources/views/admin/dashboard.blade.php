@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>John</td><td>john@gmail.com</td><td>contact-us</td></tr>
                    <tr><td>2</td><td>Maria</td><td>m11@gmail.com</td><td>membership</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
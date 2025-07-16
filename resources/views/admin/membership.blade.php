@extends('layouts.admin')
@section('title', 'Membership')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Membership</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Members List
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th></th></tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>John</td><td>john@gmail.com</td><td>0000000</td><td><a href="">See All</a></td></tr>
                    <tr><td>2</td><td>Maria</td><td>m11@gmail.com</td><td>1111111111</td><td><a href="">See All</a></td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
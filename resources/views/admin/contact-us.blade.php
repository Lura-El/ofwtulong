@extends('layouts.admin')
@section('title', 'Contact Us')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Contact Us</h1>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Contact Messages
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Messages</th></tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>John</td><td>john@gmail.com</td><td>00000000</td><td>Hello. Need help, call me</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
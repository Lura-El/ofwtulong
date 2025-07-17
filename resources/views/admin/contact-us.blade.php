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
                    <tr>
                        <th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Messages</th>
                    </tr>
                </thead>
                <tbody id="contact-table-body"></tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tbody = document.getElementById("contact-table-body");

        function fetchContacts() {
            fetch("{{ route('contact.fetch') }}")
                .then(res => res.json())
                .then(data => {
                    tbody.innerHTML = "";
                    data.forEach(row => {
                        tbody.innerHTML += `
                            <tr>
                                <td>${row.id}</td>
                                <td>${row.name}</td>
                                <td>${row.email_address}</td>
                                <td>${row.phone_number}</td>
                                <td>${row.message}</td>
                            </tr>
                        `;
                    });
                })
                .catch(err => {
                    console.error("Failed to fetch contact messages", err);
                });
        }

        if (!tbody) {
            console.error("Element #contact-table-body not found");
            return;
        }

        fetchContacts();

        setInterval(fetchContacts, 5000);
    });
</script>
@endpush

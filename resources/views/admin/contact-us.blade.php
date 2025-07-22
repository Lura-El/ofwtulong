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
            <div class="table-responsive">
                <div id="table-container">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"></script>

<script>
    let dataTableInstance;

    document.addEventListener('DOMContentLoaded', function () {
        const tableContainer = document.getElementById("table-container");

        function renderTable(data) {
            let tableHtml = `
                <table id="datatablesSimple" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Messages</th>
                            <th>Location</th>
                        </tr>
                    </thead>
                    <tbody>
            `;

            data.forEach(row => {
                tableHtml += `
                    <tr>
                        <td>${row.id}</td>
                        <td>${row.name}</td>
                        <td>${row.email_address}</td>
                        <td>${row.phone_number}</td>
                        <td>${row.message}</td>
                        <td>${row.location_address}</td>
                    </tr>
                `;
            });

            tableHtml += `
                    </tbody>
                </table>
            `;

            tableContainer.innerHTML = tableHtml;

            dataTableInstance = new simpleDatatables.DataTable("#datatablesSimple");
        }

        function fetchContacts() {
            fetch("{{ route('contact.fetch') }}")
                .then(res => res.json())
                .then(data => {
                    renderTable(data);
                })
                .catch(err => {
                    console.error("Failed to fetch contact messages", err);
                });
        }

        fetchContacts();
    });
</script>
@endpush

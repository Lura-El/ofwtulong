@extends('layouts.admin')
@section('title', 'Dashboard')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>

    {{-- Responsive summary cards --}}
    <div class="row mb-4 g-3">
        <div class="col-12 col-md-4">
            <div class="card bg-primary text-white shadow text-center rounded-3 h-100">
                <div class="card-body">
                    <h5 class="card-title">Contact Us Entries</h5>
                    <p class="display-6 fw-bold" id="contactCount">{{ $contactCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card bg-success text-white shadow text-center rounded-3 h-100">
                <div class="card-body">
                    <h5 class="card-title">Membership Entries</h5>
                    <p class="display-6 fw-bold" id="memberCount">{{ $memberCount }}</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="card bg-warning text-dark shadow text-center rounded-3 h-100">
                <div class="card-body">
                    <h5 class="card-title">Request Assistance Entries</h5>
                    <p class="display-6 fw-bold" id="requestCount">{{ $requestCount }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Table section --}}
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            All User Entries (Combined)
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatablesSimple" class="table table-bordered table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Category</th>
                        </tr>
                    </thead>
                    <tbody id="entriesTableBody">
                        @foreach($entries as $entry)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $entry->name }}</td>
                            <td>{{ $entry->email }}</td>
                            <td>{{ $entry->category }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"></script>

<script>
    let table;

    document.addEventListener('DOMContentLoaded', function () {
        table = new simpleDatatables.DataTable("#datatablesSimple");
        fetchLiveData(); 
        setInterval(fetchLiveData, 10000); 
    });

    function fetchLiveData() {
        fetch("{{ route('admin.dashboard.json') }}")
            .then(response => response.json())
            .then(data => {
                
                document.getElementById("contactCount").textContent = data.contactCount;
                document.getElementById("memberCount").textContent = data.memberCount;
                document.getElementById("requestCount").textContent = data.requestCount;

                if (table) {
                    table.destroy();
                }

                const tbody = document.getElementById("entriesTableBody");
                tbody.innerHTML = ""; 

                data.entries.forEach((entry, index) => {
                    const row = document.createElement("tr");
                    row.innerHTML = `
                        <td>${index + 1}</td>
                        <td>${entry.name}</td>
                        <td>${entry.email}</td>
                        <td>${entry.category}</td>
                    `;
                    tbody.appendChild(row);
                });

                table = new simpleDatatables.DataTable("#datatablesSimple");
            })
            .catch(err => console.error("Failed to fetch dashboard data:", err));
    }
</script>
@endpush

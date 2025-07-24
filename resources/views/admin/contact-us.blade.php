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
                <div id="contacts-table-container"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById("contacts-table-container");
    let dataTable;

    function renderTable(contacts, previousState = {}) {
        const tableHTML = `
            <table id="datatablesSimple" class="table table-bordered table-hover align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Location</th>
                    </tr>
                </thead>
                <tbody>
                    ${contacts.map(contact => `
                        <tr>
                            <td>${contact.id}</td>
                            <td>${contact.name}</td>
                            <td>${contact.email_address}</td>
                            <td>${contact.phone_number}</td>
                            <td>${contact.message}</td>
                            <td>${contact.location_address}</td>
                        </tr>
                    `).join('')}
                </tbody>
            </table>
        `;

        container.innerHTML = tableHTML;

        dataTable = new simpleDatatables.DataTable("#datatablesSimple");

        if (previousState.search) {
            dataTable.input.value = previousState.search;
            dataTable.input.dispatchEvent(new Event('input'));
        }

        if (previousState.page) {
            dataTable.page(previousState.page);
        }
    }

    function fetchContacts() {
        const previousState = {
            search: dataTable?.input?.value || '',
            page: dataTable?.currentPage || 1
        };

        fetch("{{ route('contact.fetch') }}")
            .then(res => res.json())
            .then(contacts => renderTable(contacts, previousState))
            .catch(err => console.error("Failed to fetch contact messages:", err));
    }

    fetchContacts(); 
    setInterval(fetchContacts, 5000); 
});
</script>
@endpush
 
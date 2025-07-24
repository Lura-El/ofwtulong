@extends('layouts.admin')

@section('title', 'Request Assistance')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Request Assistance</h1>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Assistance Requests
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="request-table-container"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"></script>

<script>
    let dataTable; 

    function renderRequests() {
        const container = document.getElementById("request-table-container");

        fetch("/admin/request-assistance/json")
            .then(res => res.json())
            .then(requests => {
                
                document.querySelectorAll(".modal").forEach(m => m.remove());

                let tableHTML = `
                    <table id="datatablesSimple" class="table table-bordered table-hover align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Location</th>
                                <th>Complaint</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                `;

                requests.forEach(request => {
                    const modalId = `assistModal${request.id}`;
                    tableHTML += `
                        <tr>
                            <td>${request.id}</td>
                            <td>${request.first_name} ${request.last_name}</td>
                            <td>${request.email_fb}</td>
                            <td>${request.address || request.ksa_location || 'Not provided'}</td>
                            <td>${request.complaint.length > 50 ? request.complaint.substring(0, 50) + '...' : request.complaint}</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#${modalId}">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </td>
                        </tr>
                    `;

                    const uploadedFiles = (() => {
                        try {
                            const files = JSON.parse(request.uploaded_files || '[]');
                            if (!files.length) return 'No files uploaded';

                            return files.map(file => {
                                const fileUrl = `/storage/${file.file_path}`;
                                return file.file_type.startsWith('image/')
                                    ? `<img src="${fileUrl}" alt="${file.file_name}" class="img-fluid mb-2" style="max-height: 200px;" />`
                                    : `<a href="${fileUrl}" target="_blank">${file.file_name}</a>`;
                            }).join('');
                        } catch {
                            return 'No files';
                        }
                    })();

                    const modal = `
                        <div class="modal fade" id="${modalId}" tabindex="-1" aria-labelledby="label${request.id}" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-scrollable modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header bg-dark text-white">
                                        <h5 class="modal-title" id="label${request.id}">Request Assistance Details</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5 class="mb-3">Personal Information</h5>
                                        <table class="table table-bordered">
                                            <tr><th>Full Name</th><td colspan="3">${request.first_name} ${request.middle_name ?? ''} ${request.last_name}</td></tr>
                                            <tr><th>Passport</th><td>${request.passport_num}</td><th>Iqama</th><td>${request.iqama_number ?? 'N/A'}</td></tr>
                                            <tr><th>Gender</th><td>${request.gender}</td><th>Occupation</th><td>${request.occupation}</td></tr>
                                            <tr><th>Email</th><td>${request.email_fb}</td><th>Phone</th><td>${request.personal_phone_num}</td></tr>
                                            <tr><th>Other Phone</th><td>${request.other_phone_num ?? 'None'}</td><th>KSA Location</th><td>${request.ksa_location}</td></tr>
                                            <tr><th>Address</th><td colspan="3">${request.address ?? 'N/A'}</td></tr>
                                            <tr><th>Coordinates</th><td colspan="3">${request.latitude ?? 'N/A'}, ${request.longitude ?? 'N/A'}</td></tr>
                                        </table>

                                        <h5 class="mt-4 mb-3">Employer Information</h5>
                                        <table class="table table-bordered">
                                            <tr><th>Employer Name</th><td>${request.employer_name ?? 'N/A'}</td><th>Employer Contact</th><td>${request.employer_number ?? 'N/A'}</td></tr>
                                        </table>

                                        <h5 class="mt-4 mb-3">Recruitment Agency Information</h5>
                                        <table class="table table-bordered">
                                            <tr><th>Saudi Agency</th><td>${request.saudi_agency ?? 'N/A'}</td><th>PH Agency</th><td>${request.phil_agency ?? 'N/A'}</td></tr>
                                        </table>

                                        <h5 class="mt-4 mb-3">Complaint & Uploaded Files</h5>
                                        <table class="table table-bordered">
                                            <tr><th>Complaint</th><td colspan="3">${request.complaint}</td></tr>
                                            <tr><th>Uploaded Files</th><td colspan="3">${uploadedFiles}</td></tr>
                                            <tr><th>Submitted At</th><td colspan="3">${request.created_at}</td></tr>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    document.body.insertAdjacentHTML("beforeend", modal);
                });

                tableHTML += '</tbody></table>';
                container.innerHTML = tableHTML;

                if (dataTable) dataTable.destroy();
                dataTable = new simpleDatatables.DataTable("#datatablesSimple");
            })
            .catch(err => console.error("Error loading assistance requests:", err));
    }

    document.addEventListener("DOMContentLoaded", function () {
        renderRequests(); 
        setInterval(renderRequests, 10000); 
    });
</script>
@endpush

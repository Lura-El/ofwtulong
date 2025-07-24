@extends('layouts.admin')

@section('title', 'Membership')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Membership</h1>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-users me-1"></i>
            Members List
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="membership-table-container"></div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const container = document.getElementById("membership-table-container");

    function loadMembershipTable() {
        fetch("/admin/membership/json")
            .then(res => res.json())
            .then(members => {
                let table = `
                    <table id="datatablesSimple" class="table table-bordered table-hover align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Passport</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                `;

                let modals = "";

                members.forEach(member => {
                    const modalId = `memberModal${member.id}`;
                    table += `
                        <tr>
                            <td>${member.id}</td>
                            <td>${member.full_name}</td>
                            <td>${member.passport_num}</td>
                            <td>${member.mobile_num}</td>
                            <td>${member.email_address}</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#${modalId}">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </td>
                        </tr>
                    `;

                    modals += `
                        <div class="modal fade" id="${modalId}" tabindex="-1" aria-labelledby="label${member.id}" aria-hidden="true">
                            <div class="modal-dialog modal-xl modal-dialog-scrollable modal-fullscreen-md-down">
                                <div class="modal-content">
                                    <div class="modal-header bg-dark text-white">
                                        <h5 class="modal-title" id="label${member.id}">Complete Member Information</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h5 class="mb-3">Personal Information</h5>
                                        <table class="table table-bordered">
                                            <tr><th>Full Name</th><td>${member.full_name}</td><th>Passport</th><td>${member.passport_num}</td></tr>
                                            <tr><th>Phone</th><td>${member.mobile_num}</td><th>Email</th><td>${member.email_address}</td></tr>
                                            <tr><th>Birthdate</th><td>${member.birthdate}</td><th>Civil Status</th><td>${member.civil_status}</td></tr>
                                            <tr><th>Job Position</th><td>${member.job_position}</td><th>Job Site</th><td>${member.job_site}</td></tr>
                                        </table>

                                        <h5 class="mt-4 mb-3">Employer Information</h5>
                                        <table class="table table-bordered">
                                            <tr><th>Employer Name</th><td>${member.employer_name}</td><th>Employer Address</th><td>${member.employer_address}</td></tr>
                                            <tr><th>Email</th><td>${member.employer_email}</td><th>Phone</th><td>${member.employer_num}</td></tr>
                                        </table>

                                        <h5 class="mt-4 mb-3">Recruitment Agency Information</h5>
                                        <table class="table table-bordered">
                                            <tr><th>PH Agency</th><td>${member.recruitment_agency_phil}</td><th>PH Phone</th><td>${member.contact_num_agency}</td></tr>
                                            <tr><th>PH Email</th><td>${member.email_add_agency}</td><th>Foreign Agency</th><td>${member.foreign_agency}</td></tr>
                                            <tr><th>Foreign Phone</th><td>${member.contact_num_foreign_agency}</td><th>Foreign Email</th><td>${member.email_add_foreign_agency}</td></tr>
                                        </table>

                                        <h5 class="mt-4 mb-3">Next of Kin</h5>
                                        <table class="table table-bordered">
                                            <tr><th>Name</th><td>${member.next_of_kin}</td><th>Relationship</th><td>${member.relationship_with_ofw}</td></tr>
                                            <tr><th>Contact</th><td>${member.contact_number_relative}</td><th>Address</th><td>${member.relative_address_phil}</td></tr>
                                            <tr><th>Email</th><td colspan="3">${member.relative_email_add}</td></tr>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                });

                table += `</tbody></table>`;
                container.innerHTML = table;
                document.body.insertAdjacentHTML("beforeend", modals);
                new simpleDatatables.DataTable("#datatablesSimple");
            })
            .catch(error => {
                console.error("Error loading membership data:", error);
                container.innerHTML = "<div class='alert alert-danger'>Unable to load members data.</div>";
            });
    }

    loadMembershipTable();
    setInterval(loadMembershipTable, 10000);
});
</script>
@endpush

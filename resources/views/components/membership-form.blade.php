<form action="{{ route('membership.submit') }}" method="POST" class="space-y-6" id="membershipForm">
    @csrf

    {{-- Section: Personal Info --}}
    <div>
        <h2 class="text-xl font-semibold text-accent mb-4">Personal Information</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <x-input label="Full Name of OFW" name="full_name" required />
            <x-input label="Philippine Passport Number" name="passport_num" required />
            <x-input label="Email Address" type="email" name="email_address" required />
            <x-input label="Mobile Number" type="tel" name="mobile_num" required />
            <x-input label="Birthdate" type="date" name="birthdate" required />
            <x-input label="Civil Status" name="civil_status" required />
            <x-input label="Job Position" name="job_position" placeholder="Ex: Nurse, Electrician" required />
            <x-input label="Job Site" name="job_site" placeholder="Ex: UAE, Canada" required />
        </div>
    </div>

    {{-- Section: Employer Info --}}
    <div>
        <h2 class="text-xl font-semibold text-accent mb-4">Employer Information</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <x-input label="Full Name of Employer" name="employer_name" required />
            <x-input label="Address of Employer" name="employer_address" required />
            <x-input label="Email Address of Employer" type="email" name="employer_email" required />
            <x-input label="Phone Number of Employer" type="tel" name="employer_num" required />
        </div>
    </div>

    {{-- Section: Agency Info --}}
    <div>
        <h2 class="text-xl font-semibold text-accent mb-4">Recruitment Agency Information</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <x-input label="Agency in the Philippines" name="recruitment_agency_phil" required />
            <x-input label="PH Agency Contact Number" type="tel" name="contact_num_agency" required />
            <x-input label="PH Agency Email" type="email" name="email_add_agency" required />
            <x-input label="Foreign Agency" name="foreign_agency" required />
            <x-input label="Foreign Agency Contact" type="tel" name="contact_num_foreign_agency" required />
            <x-input label="Foreign Agency Email" type="email" name="email_add_foreign_agency" required />
        </div>
    </div>

    {{-- Section: Next of Kin --}}
    <div>
        <h2 class="text-xl font-semibold text-accent mb-4">Next of Kin</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <x-input label="Next of Kin Name" name="next_of_kin" required />
            <x-input label="Relationship" name="relationship_with_ofw" required />
            <x-input label="Contact Number" type="tel" name="contact_number_relative" required />
            <x-input label="Address in the Philippines" name="relative_address_phil" required />
            <x-input label="Email Address" type="email" name="relative_email_add" required />
        </div>
    </div>

    {{-- Submit Section --}}
    <div class="pt-4 flex flex-col items-center gap-2">
        <button id="submitBtn" type="submit"  class="w-auto bg-[#FEC601] hover:bg-[#FFD84D] text-[#0B1D2A] font-semibold py-2 px-4 rounded-md shadow-sm transition duration-300">
            Submit
        </button>

        <!-- Submitting indicator -->
        <p id="submittingText" class="text-sm text-gray-500 hidden">Submitting...</p>

        <!-- Success message (displayed for 3 seconds only) -->
        @if(session('success'))
            <p id="successMsg" class="text-green-600 font-medium">{{ session('success') }}</p>
        @endif
    </div>
</form>

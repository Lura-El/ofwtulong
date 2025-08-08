<form action="{{ route('request.assistance.submit') }}" method="POST" enctype="multipart/form-data" id="tulong-form" class="p-3 space-y-6">
  @csrf

  <div class="grid md:grid-cols-3 gap-4">
      <x-input label="First Name / Pangalan" name="first-name" required />
      <x-input label="Middle Name / Panggitnang Apelyido" name="middle-name" />
      <x-input label="Last Name / Apelyido" name="last-name" required />
  </div>

  <div class="border-t pt-4 grid md:grid-cols-2 gap-4">
      <x-input label="Passport Number / Numero ng Pasaporte" name="passport-number" required />
      <x-input label="Saudi Residence ID (Iqama) Number" name="iqama-num"/>
  </div>

  <div class="border-t pt-4 grid md:grid-cols-3 gap-4">
      <x-select 
          label="Gender / Kasarian" 
          name="gender" 
          :required="true"
          :options="['Male' => 'Male / Lalaki', 'Female' => 'Female / Babae']"
      />
      <x-input label="Email or Facebook Name" name="email-fb" required />
      <x-input label="Occupation / Trabaho" name="occupation" required />
  </div>

  <div class="border-t pt-4 grid md:grid-cols-3 gap-4">
      <x-input label="Mobile Number / Numero ng Telepono" type="tel" name="personal-phone" required />
      <x-input label="Other Contact Number / Ibang Numero" type="tel" name="other-phone" />
      <x-input label="Location in KSA / Lokasyon sa KSA" name="ksa-location" required />
  </div>

  <input type="hidden" name="latitude" id="latitude">
  <input type="hidden" name="longitude" id="longitude">
  <input type="hidden" name="address" id="address">

  <div class="border-t pt-4 grid md:grid-cols-3 gap-4">
      <x-input label="Name of Employer / Pangalan ng Employer" name="employer-name" required />
      <x-input label="Employer Phone / Telepono ng Employer" type="tel" name="employer-phone" />
      <x-input label="Saudi Recruitment Agency / Ahensya sa Saudi" name="saudi-agency" />
  </div>
  
  <div class="border-t pt-4">
      <x-input label="PH Recruitment Agency / Ahensya sa Pilipinas" name="ph-agency" />
  </div>

  <div class="border-t pt-4">
    <label class="block text-gray-700 font-medium mb-2">Upload Proofs</label>
    <div class="grid md:grid-cols-3 gap-4 text-sm">
      @for ($i = 0; $i < 3; $i++)
        <input type="file" name="files[]" class="block text-gray-700 file:text-white file:border file:rounded file:px-4 file:py-2 file:bg-gray-800" />
      @endfor
    </div>
  </div>

  <div class="border-t pt-4">
    <label class="block font-medium text-sm text-gray-700">Complaint / Reklamo <span class="text-red-500">*</span></label>
    <textarea name="complaint" required class="w-full border font-medium text-sm text-gray-800 rounded px-3 py-2 min-h-[100px]" placeholder="Leave your complaints here..."></textarea>
  </div>

  <div class="text-center">
    <button type="submit" class="bg-[#FEC601] hover:bg-[#FFD84D] text-[#0B1D2A] font-semibold py-2 px-4 rounded-md shadow-sm transition duration-300">Submit</button>
  </div>
</form>

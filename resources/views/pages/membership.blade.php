@extends('layouts.app')

@section('title', 'Membership')

@section('content')
<div id="membership" class="py-20 px-6 md:px-16 bg-[#F9FAFB] text-[#0B1D2A] font-body">
    <!-- Header -->
    <div class="text-center mb-12" data-aos="fade-down">
        <h1 class="text-2xl md:text-3xl font-bold text-[#0B1D2A] mb-3">Membership Registration</h1>
        <p class="text-base md:text-sm text-[#3ABEF9]">Join us to support and empower OFWs worldwide.</p>
        <div class="w-16 h-1 bg-[#FEC601] mx-auto mt-4 rounded-full"></div>
    </div>


    @include('components.membership-form')

</div>
@endsection

@push('scripts')
<script src="{{ asset('js/membership.js') }}"></script>
@endpush

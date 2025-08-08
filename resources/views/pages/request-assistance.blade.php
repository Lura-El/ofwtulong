@extends('layouts.app')

@section('title', 'Request Assistance')

@section('content')
<div id="request-assistance" class="py-20 px-6 md:px-16 bg-[#F9FAFB] text-[#0B1D2A] font-body">
    <!-- Header -->
    <div class="text-center mb-12" data-aos="fade-down">
        <h1 class="text-2xl md:text-3xl font-bold text-[#0B1D2A] mb-3">Request Assistance</h1>
        <p class="text-base md:text-sm text-[#3ABEF9]">We’re here to help our OFWs in need, wherever they are.</p>
        <div class="w-16 h-1 bg-[#FEC601] mx-auto mt-4 rounded-full"></div>
    </div>

    <!-- Main Content Wrapper -->
    <div class="max-w-7xl mx-auto">
        @include('components.request-assistance-form')
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/request-assistance.js') }}"></script>
@endpush

@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div id="contact-us" class="py-20 px-6 md:px-16 bg-[#F9FAFB] text-[#0B1D2A] font-body">
    <!-- Header -->
    <div class="text-center mb-12" data-aos="fade-down">
        <h1 class="text-2xl md:text-3xl font-bold text-[#0B1D2A] mb-3">Let’s Get in Touch</h1>
        <p class="text-base md:text-sm text-[#3ABEF9]">We’re here to listen, help, and support our OFWs wherever they are in the world.</p>
        <div class="w-16 h-1 bg-[#FEC601] mx-auto mt-4 rounded-full"></div>
    </div>

    <!-- Main Grid -->
    <div class="flex flex-col lg:flex-row gap-12 items-start max-w-7xl mx-auto">
        
        <!-- LEFT SIDE: Info Panel -->
        <div class="lg:w-1/2 space-y-10" data-aos="fade-right">
            <!-- Reach Out -->
            <div class="bg-white rounded-xl shadow p-6 border-l-4 border-[#FEC601]">
                <h2 class="text-xl font-semibold text-[#0B1D2A] mb-2">Reach Out to Us</h2>
                <p class="text-sm text-[#0B1D2A] leading-relaxed">
                    Every OFW story matters. Whether you’re in need of assistance, want to collaborate, or just have a question — our team is ready to connect.
                </p>
            </div>

            <!-- Location -->
            <div class="bg-white rounded-xl shadow p-6 border-l-4 border-[#FEC601]">
                <h3 class="text-xl font-semibold text-[#0B1D2A] mb-2">Our Location</h3>
                <p class="text-sm text-[#0B1D2A] leading-relaxed">
                    OFW Tulong Headquarters<br>
                    Santa Rosa City, Laguna, Philippines<br>
                </p>
            </div>
        </div>

        <!-- RIGHT SIDE: Contact Form  -->
        @include('components.contact-form')

    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/contact.js') }}"></script>
@endpush

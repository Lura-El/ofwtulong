@extends('layouts.app')

@section('title', 'Request Assistance')

@section('content')
<section id="request-assistance" class="max-w-4xl mx-auto rounded-xl shadow-lg mt-8 p-6 bg-bg">
  <div class="text-center mb-4">
    <h1 class="text-3xl font-bold text-primary">OFW Tulong Assistance</h1>
    <h2 class="text-xl font-semibold text-gray-700 mt-1">Request Assistance Form</h2>
  </div>

  @include('components.request-assistance-form')
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/request-assistance.js') }}"></script>
@endpush

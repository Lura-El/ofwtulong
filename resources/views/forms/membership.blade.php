@extends('layouts.app')

@section('title', 'Membership')

@section('content')
<div class="max-w-4xl mx-auto p-6 bg-bg rounded-xl shadow-lg mt-8">
    <h1 class="text-3xl font-bold text-center text-primary mb-6">Membership Registration</h1>
    @include('components.membership-form')
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/membership.js') }}"></script>
@endpush


@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div id="contact-us" class="py-16 px-6 md:px-16 bg-bg text-gray-800">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-[#4682A9] mb-2">Contact Us</h1>
    </div>

    <div class="flex flex-col lg:flex-row gap-12 items-start">
        <!-- Left Info -->
        <div class="lg:w-1/2 space-y-8">
            <section>
                <h2 class="text-2xl font-semibold text-[#749BC2] mb-2">Please Reach Us!</h2>
                <p class="text-sm leading-relaxed text-gray-700">
                    Discovering, caring, understanding: making our way in new places with kindness. 
                    Helping, sharing, getting along: crossing borders to connect with others. 
                    Solving, cheering, connecting: turning worries into chances for worldwide friendship.
                </p>
            </section>

            <section>
                <h2 class="text-2xl font-semibold text-[#749BC2] mb-2">Location</h2>
                <p class="text-sm leading-relaxed text-gray-700">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit...
                </p>
            </section>
        </div>

        <!-- Right Form -->
        @include('components.contact-form')
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('js/contact.js') }}"></script>
@endpush

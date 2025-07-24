<div id="contact-form" class="lg:w-1/2 w-full bg-support/10 rounded-xl shadow-lg p-8">
    <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
        @csrf
        <input type="text" name="name" placeholder="Name" id="name"
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#4682A9]">

        <input type="email" name="email" placeholder="Email" required id="c-email"
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#4682A9]">

        <input type="tel" name="phone" placeholder="Phone" required id="c-phone"
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#4682A9]">

        <input type="hidden" name="latitude" id="latitude">
        <input type="hidden" name="longitude" id="longitude">

        <textarea name="message" placeholder="Message" id="message-area" required
            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#4682A9] h-32 resize-none"></textarea>

        <button type="submit" id="send-mes-btn" disabled
            class="w-full bg-[#4682A9] hover:bg-[#749BC2] text-white font-semibold py-2 px-4 rounded-md transition duration-300">
            Send Message
        </button>

        <p id="location-warning" class="text-red-600 text-sm mt-2 hidden">You must allow location access to send a message.</p>
    </form>

    <p id="responseMsg" class="mt-4 text-center font-semibold text-sm"></p>
</div>

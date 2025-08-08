<div id="contact-form" class="lg:w-1/2 w-full bg-white rounded-xl shadow-lg border border-[#E5E7EB] p-8">
    <form id="contactForm" action="{{ route('contact.submit') }}" method="POST" class="space-y-5">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block text-sm font-medium text-[#0B1D2A] mb-1">Name</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                placeholder="Enter your full name"
                class="w-full px-4 py-2 border border-[#D3E6D6] rounded-md bg-[#F9FAFB] text-[#0B1D2A] placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#3ABEF9]"
            >
        </div>

        <!-- Email -->
        <div>
            <label for="c-email" class="block text-sm font-medium text-[#0B1D2A] mb-1">Email</label>
            <input 
                type="email" 
                name="email" 
                id="c-email" 
                required 
                placeholder="your@email.com"
                class="w-full px-4 py-2 border border-[#D3E6D6] rounded-md bg-[#F9FAFB] text-[#0B1D2A] placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#3ABEF9]"
            >
        </div>

        <!-- Phone -->
        <div>
            <label for="c-phone" class="block text-sm font-medium text-[#0B1D2A] mb-1">Phone</label>
            <input 
                type="tel" 
                name="phone" 
                id="c-phone" 
                required 
                placeholder="+63 9XX XXX XXXX"
                class="w-full px-4 py-2 border border-[#D3E6D6] rounded-md bg-[#F9FAFB] text-[#0B1D2A] placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-[#3ABEF9]"
            >
        </div>

        <!-- Hidden Geolocation -->
        <input type="hidden" name="latitude" id="latitude">
        <input type="hidden" name="longitude" id="longitude">

        <!-- Message -->
        <div>
            <label for="message-area" class="block text-sm font-medium text-[#0B1D2A] mb-1">Message</label>
            <textarea 
                name="message" 
                id="message-area" 
                required 
                placeholder="Write your message here..." 
                class="w-full px-4 py-2 border border-[#D3E6D6] rounded-md bg-[#F9FAFB] text-[#0B1D2A] placeholder:text-gray-400 h-32 resize-none focus:outline-none focus:ring-2 focus:ring-[#3ABEF9]"
            ></textarea>
        </div>

        <!-- Submit Button -->
        <button 
            type="submit" 
            id="send-mes-btn" 
            disabled 
            class="w-full bg-[#FEC601] hover:bg-[#FFD84D] text-[#0B1D2A] font-semibold py-2 px-4 rounded-md shadow-sm transition duration-300"
        >
            Send Message
        </button>

        <!-- Location Warning -->
        <p id="location-warning" class="text-red-600 text-sm mt-2 hidden">
            You must allow location access to send a message.
        </p>

        <!-- Server Response -->
        <p id="responseMsg" class="mt-4 text-center font-semibold text-sm text-[#0B1D2A]"></p>
    </form>
</div>

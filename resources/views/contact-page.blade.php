@extends('layout')

@section('content')
<div class="relative bg-blue-900 py-24 overflow-hidden">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/hero-slider1.jpg') }}" 
             alt="About Us Background" 
             class="w-full h-full object-cover opacity-30">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900 via-blue-900/80 to-transparent"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-6 text-center md:text-left">
        <h1 class="text-5xl font-extrabold text-white tracking-tight">
            About Us
        </h1>
        <div class="mt-4 h-1 w-20 bg-blue-500 mx-auto md:mx-0"></div>
        <p class="mt-4 text-xl text-blue-100 max-w-2xl">
         Engineering the Next Generation of Digital Solutions.
        </p>
    </div>
</div>

<section class="py-20 bg-gray-50 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="order-2 md:order-1">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4834.859617125238!2d7.351574090159462!3d8.994141975781213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e73d79fce7adb%3A0x9b99090b3b516663!2sAMAC%20Market%2C%20Lugbe%20900107%2C%20Federal%20Capital%20Territory!5e0!3m2!1sen!2sng!4v1771357038623!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              
        </div>

            <div class="bg-white p-10 rounded-2xl shadow-sm border-t-4 border-indigo-600">
                <div class="flex items-center mb-4">
                    <div class="p-3 bg-indigo-100 rounded-full text-indigo-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Contact Us</h3>
                </div>
                <p class="text-gray-600 leading-relaxed"> Behind AMAC Market, By Coral Garden. FHA Lugbe, Federaal Capital Territory, Abuja. Nigeria </p><br>
                <br>
                <p class="text-gray-600 leading-relaxed"> <strong>TEL 1:&nbsp;&nbsp;</strong>+234 081 099 399 63 </p>
                <br>
                <p class="text-gray-600 leading-relaxed"> <strong>TEL 2:&nbsp;&nbsp;</strong>+234 081 760 931 20  </p>
                <br>
                <p class="text-gray-600 leading-relaxed"> <strong>EMAIL:&nbsp;&nbsp;</strong>support@jvntechnologies.org </p><br>
            </div>
        </div>
    </div>
</section>

<section class="py-20 px-6 bg-white">
    <div class="max-w-4xl mx-auto">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900">Get In Touch</h2>
            <p class="text-gray-600 mt-4">Have a project in mind? Let's talk about it.</p>
        </div>

        <form action="{{ route('contact.send') }}" method="POST" class="grid grid-cols-1 gap-y-6">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" name="name" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-3 bg-gray-50">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" name="email" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-3 bg-gray-50">
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Subject</label>
                <input type="text" name="subject" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-3 bg-gray-50">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Message</label>
                <textarea name="message" rows="4" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 p-3 bg-gray-50"></textarea>
            </div>
            <div>
                <button type="submit" class="w-full bg-blue-600 text-white font-bold py-4 px-6 rounded-lg hover:bg-blue-700 transition duration-300">
                    Send Message
                </button>
            </div>
        </form>
    </div>
</section>

@endsection
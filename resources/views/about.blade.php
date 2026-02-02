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

<section class="py-20 px-6 bg-white">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
        <div class="order-2 md:order-1">
            <img src="{{ asset('images/hero-slider1.jpg') }}" alt="Team work" class="rounded-2xl shadow-2xl">
        </div>
        <div class="order-1 md:order-2 space-y-6">
            <h2 class="text-3xl font-bold text-gray-900">Who We Are</h2>
            <p class="text-gray-600 leading-relaxed">
                At <b>JVN Technologies</b>, we don't just build apps; we architect digital ecosystems. Founded on the principles of technical excellence and strategic innovation,
                we have grown into a premier software development firm dedicated to solving the most complex business challenges. 
                Our team is a collective of visionary developers, designers, and strategists who believe that well-crafted code is the foundation of modern business success.
            </p>
            <p class="text-gray-600 leading-relaxed">
            We specialize in bridging the gap between ambitious ideas and functional reality. Whether it’s a high-scale enterprise platform or a disruptive startup MVP, 
            JVN Technologies delivers precision-engineered software that is secure, scalable, and built to last.
            With years of experience in the tech industry, we've helped startups and established enterprises alike scale their operations through custom-built internal tools and public-facing platforms.
            </p>
            <p class="text-gray-600 leading-relaxed">
                With years of experience in the tech industry, we've helped startups and established enterprises alike scale their operations
                 through custom-built internal tools and public-facing platforms.
            </p>
        </div>
    </div>
</section>

<section class="py-20 bg-gray-50 px-6">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white p-10 rounded-2xl shadow-sm border-t-4 border-blue-600">
                <div class="flex items-center mb-4">
                    <div class="p-3 bg-blue-100 rounded-full text-blue-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Our Mission</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                Our mission is to empower global enterprises and local businesses alike by providing world-class software development services. We are committed to transparency, agile methodology, and the relentless pursuit of quality. At JVN Technologies, 
                we strive to be more than just a vendor; we aim to be a long-term strategic partner, ensuring our clients stay ahead of the curve in a rapidly evolving technological landscape.    </p>
            </div>

            <div class="bg-white p-10 rounded-2xl shadow-sm border-t-4 border-indigo-600">
                <div class="flex items-center mb-4">
                    <div class="p-3 bg-indigo-100 rounded-full text-indigo-600 mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Our Vision</h3>
                </div>
                <p class="text-gray-600 leading-relaxed">
                Our vision is to become a global leader in digital innovation, recognized for setting the gold standard in software engineering. We envision a world where every business has the tools to achieve its maximum potential through seamless technology. By fostering a culture of continuous learning and experimentation, 
                JVN Technologies aims to be at the forefront of AI integration, cloud computing, and beyond.       </p>
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

<section class="py-16 bg-gray-50 border-t border-gray-200">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-2xl font-bold text-gray-800 uppercase tracking-widest">Our Trusted Clients</h2>
            <div class="w-12 h-1 bg-blue-900 mx-auto mt-2"></div>
            <p class="text-gray-600 mt-4 text-lg font-medium">Transforming ideas into scalable reality. We build the architecture that powers your growth.</p>
        </div>

        <div class="relative overflow-hidden" 
             x-data="{ 
                logos: [
                    '{{ asset('images/hero-slider1.jpg') }}',
                    '{{ asset('images/hero-slide2.jpg') }}',
                    '{{ asset('images/hero-slide3.jpg') }}',
                    '{{ asset('images/hero-slide2.jpg') }}',
                    '{{ asset('images/hero-slide3.jpg') }}'
                   
                ] 
             }">
            
            <div class="flex items-center space-x-12 animate-marquee whitespace-nowrap">
                <template x-for="logo in logos">
                    <div class="flex-shrink-0 w-40 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition duration-400">
                        <img :src="logo" class="max-h-full max-w-full object-contain rounded-md"  alt="Client Logo">
                    </div>
                </template>
                
                <template x-for="logo in logos">
                    <div class="flex-shrink-0 w-40 h-24 flex items-center justify-center grayscale hover:grayscale-0 transition duration-400">
                        <img :src="logo" class="max-h-full max-w-full object-contain rounded-md" alt="Client Logo">
                    </div>
                </template>
            </div>
        </div>
    </div>
</section>
@endsection


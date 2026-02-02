@extends('layout')

@section('content')

    <section class="relative h-[500px] bg-gray-900 overflow-hidden" 
         x-data="{ 
            activeSlide: 1, 
            slides: [
                { id: 1, img: '{{ asset('images/hero-slider1.jpg') }}', title: 'Innovative Solutions', sub: 'Crafting digital excellence' },
                { id: 2, img: '{{ asset('images/hero-slide2.jpg') }}', title: 'Expert Team', sub: 'Software developers you can trust' },
                { id: 3, img: '{{ asset('images/hero-slide3.jpg') }}', title: 'Scale Your Business', sub: 'Cloud-ready infrastructure' }
            ],
            loop() {
                setInterval(() => {
                    this.activeSlide = this.activeSlide === this.slides.length ? 1 : this.activeSlide + 1
                }, 5000)
            }
         }" 
         x-init="loop()">

    <template x-for="slide in slides" :key="slide.id">
        <div x-show="activeSlide === slide.id" 
             x-transition:enter="transition opacity-100 duration-1000" 
             x-transition:enter-start="opacity-0" 
             x-transition:leave="transition opacity-0 duration-1000"
             class="absolute inset-0">
            
            <img :src="slide.img" class="absolute w-full h-full object-cover opacity-60" :alt="slide.title">
            
            <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4">
                <h1 class="text-5xl font-bold mb-4" x-text="slide.title"></h1>
                <p class="text-xl" x-text="slide.sub"></p>
            </div>
        </div>
    </template>

    <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 z-20 flex space-x-2">
        <template x-for="slide in slides" :key="slide.id">
            <button @click="activeSlide = slide.id" 
                    :class="activeSlide === slide.id ? 'bg-white' : 'bg-white/50'"
                    class="w-3 h-3 rounded-full transition-colors duration-300"></button>
        </template>
    </div>
</section>
   

<section class="py-16 px-6 max-w-7xl mx-auto">
    <div class="grid md:grid-cols-2 gap-12 items-center">
        <div>
            <h2 class="text-3xl font-bold mb-4">About Us</h2>
            <p class="text-gray-600 mb-6 leading-relaxed">
            At JVN Technologies, we don't just build apps; we architect digital ecosystems. Founded on the principles of technical excellence and strategic innovation,
            we have grown into a premier software development firm dedicated to solving the most complex business challenges. 
            Our team is a collective of visionary developers, designers, and strategists who believe that well-crafted code is the foundation of modern business success.
            </p>
            <a href="{{ url('/about') }}" class="text-blue-600 font-semibold hover:underline">See more &rarr;</a>
        </div>
        <div class="rounded-lg overflow-hidden shadow-xl">
            <img src="https://via.placeholder.com/600x400" alt="Office Culture">
        </div>
    </div>
</section>

<section class="py-16 bg-gray-50 px-6">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl font-bold text-center mb-12">Our Services</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition">
                <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Web Development</h3>
                <p class="text-gray-500">Scalable and performant web applications built with the latest tech stack.</p>
            </div>
            
            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition">
                <div class="w-12 h-12 bg-green-100 text-green-600 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Mobile Apps</h3>
                <p class="text-gray-500">Native and cross-platform mobile experiences for iOS and Android.</p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-sm hover:shadow-md transition">
                <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-xl font-bold mb-2">Cloud Solutions</h3>
                <p class="text-gray-500">Modernizing your infrastructure with secure and cost-effective cloud services.</p>
            </div>
        </div>
    </div>
</section>

@endsection


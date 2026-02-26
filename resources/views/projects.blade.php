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
            Projects
        </h1>
        <div class="mt-4 h-1 w-20 bg-blue-500 mx-auto md:mx-0"></div>
        <p class="mt-4 text-xl text-blue-100 max-w-2xl">
        From cloud-native applications to intelligent automation, we build the tools that define tomorrow’s industry leaders.
        </p>
    </div>
</div>

<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <header class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-gray-900">Our Portfolio</h1>
            <p class="mt-4 text-xl text-gray-600">Some Innovative digital solutions we've built for clients across Nigeria.</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 flex flex-col">
                <div class="relative h-48 w-full overflow-hidden">
                    <img src="{{ asset('images/dl_app_icon.png') }}" alt="darl logistics logo" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    <span class="absolute top-4 right-4 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Logistics</span>
                </div>
                <div class="p-6 flex-grow">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Darl Logistics</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                    A comprehensive SaaS solution for logistics providers. This platform streamlines operations by connecting load management, driver dispatch, and financial reporting. 
                    With automated invoicing and payroll features, Darl Logistics empowers carriers to scale their business while the app handles the operational heavy lifting. 
                    The project was built: Mobile(flutter), Website(laravel)
                    </p>
                </div>
                <div class="p-6 pt-0 mt-auto">
                    <a href="https://play.google.com/store/apps/details?id=com.darlcloud.darllogistics&hl=en" target="_blank" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition">
                        View App on Playstore <i class="fas fa-external-link-alt ml-2 text-xs"></i>
                    </a>
                    <a href="" target="_blank" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition">
                        View App on Appstore <i class="fas fa-external-link-alt ml-2 text-xs"></i>
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 flex flex-col">
                <div class="relative h-48 w-full overflow-hidden">
                    <img src="{{ asset('images/dd_app_logo.png') }}" alt="darldistributors logo" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    <span class="absolute top-4 right-4 bg-green-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase">E-Commerce</span>
                </div>
                <div class="p-6 flex-grow">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Darl Distributors</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                    An e-commerce platform designed for groceries, Biscuites and drinks online shopping. Whether serving bulk wholesalers or individual retail customers, this mobile and web-ready platform 
                    streamlines the distribution of groceries and confectioneries. With optimized inventory tracking and a seamless checkout experience, it bridges the gap between large-scale distribution and everyday consumer needs. 
                    The project was built with: Android(java), IOS Native(Swift), Website(laravel)
                    </p>
                </div>
                <div class="p-6 pt-0 mt-auto">
                    <a href="https://darldistributors.com/" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition">
                        Visit Website <i class="fas fa-external-link-alt ml-2 text-xs"></i>
                    </a>
                    <a href="https://apps.apple.com/ng/app/darl-distributors/id6470433629" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition">
                        View App on Playstore <i class="fas fa-external-link-alt ml-2 text-xs"></i>
                    </a>
                    <a href="#" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition">
                        View App on Appstore <i class="fas fa-external-link-alt ml-2 text-xs"></i>
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 flex flex-col">
                <div class="relative h-48 w-full overflow-hidden">
                    <img src="{{ asset('images/allfile-logo.png') }}" alt="Allfiletype converter logo" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    <span class="absolute top-4 right-4 bg-purple-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Business</span>
                </div>
                <div class="p-6 flex-grow">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">All File Type Converter</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                    All File Type Converter is a free and easy-to-use online platform designed to simplify your file conversion needs. Whether you’re converting images, 
                   documents, or other formats, Editing of pdf files, Merge Pdf files and Split Pdf files, The tool ensures quick, reliable, and high-quality results. The project was built with laravel
         
                    </p>
                </div>
                <div class="p-6 pt-0 mt-auto">
                    <a href="https://allfiletypeconverter.com/" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition">
                        View website <i class="fas fa-external-link-alt ml-2 text-xs"></i>
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 flex flex-col">
                <div class="relative h-48 w-full overflow-hidden">
                    <img src="{{ asset('images/fame.png') }}" alt="fame logo" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    <span class="absolute top-4 right-4 bg-purple-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase">NGO</span>
                </div>
                <div class="p-6 flex-grow">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">FAME Foundation</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                    FAME Foundation is a non-profit organisation that encourage and advance the social, emotional and economic wellbeing of women and girls as well as formulate programmes 
                    within the framework of national development plan with a view to enhancing the participation of women and advocate for gender parity in the society. The project was build with wordpress.
                    </p>
                </div>
                <div class="p-6 pt-0 mt-auto">
                    <a href="https://famefoundationwg.org/" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition">
                        View website <i class="fas fa-external-link-alt ml-2 text-xs"></i>
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 flex flex-col">
                <div class="relative h-48 w-full overflow-hidden">
                    <img src="{{ asset('images/tsg-logo.png') }}" alt="tsg logo" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    <span class="absolute top-4 right-4 bg-green-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Politics</span>
                </div>
                <div class="p-6 flex-grow">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Tinubu Support Group</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                    TSG is a dedicated movement of individuals and groups who believe in the vision and leadership of President Bola Ahmed Tinubu. The platform was 
                    created to enable the mission and vission of PBAT supporters. The project was built with laravel and javascript      </p>
                </div>
                <div class="p-6 pt-0 mt-auto">
                    <a href="https://tinubusupportgroup.com/" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition">
                        View website <i class="fas fa-external-link-alt ml-2 text-xs"></i>
                    </a>
                </div>
            </div>

            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-shadow duration-300 flex flex-col">
                <div class="relative h-48 w-full overflow-hidden">
                    <img src="{{ asset('images/dch-academy-logo.png') }}" alt="tsg logo" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    <span class="absolute top-4 right-4 bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full uppercase">Education</span>
                </div>
                <div class="p-6 flex-grow">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">DCH Academy</h3>
                    <p class="text-gray-600 text-sm mb-4 leading-relaxed">
                    Darl Creative Hub Academy offers wide range of digital & business oriented courses. The platform was created to enable tutoring of tech related courses either offline or online. 
                    it was build with laravel and javascript, runing mysql database and firebase firestore    
                </div>
                <div class="p-6 pt-0 mt-auto">
                    <a href="https://dchacademy.com/" class="inline-flex items-center text-blue-600 font-semibold hover:text-blue-800 transition">
                        View website <i class="fas fa-external-link-alt ml-2 text-xs"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
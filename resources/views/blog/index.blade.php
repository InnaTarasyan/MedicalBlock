@extends('layouts.app')

@section('title', 'Medical Library - Health Articles & Insights')

@section('content')
<div class="grid gap-4 sm:gap-6 md:gap-8">
	<!-- Hero Section -->
	<section class="relative w-full overflow-hidden mx-0 sm:mx-0 px-0 sm:px-0 bg-gradient-to-br from-emerald-50 via-teal-50 to-cyan-50 border-b border-gray-200">
		<!-- Decorative background elements -->
		<div class="absolute inset-0 hidden sm:block pointer-events-none">
			<div class="absolute w-64 h-64 bg-emerald-200/20 blur-3xl rounded-full" style="top: -120px; left: -60px;"></div>
			<div class="absolute w-72 h-72 bg-teal-200/20 blur-3xl rounded-full" style="bottom: -180px; right: -40px;"></div>
			<div class="absolute w-48 h-48 bg-cyan-200/20 blur-3xl rounded-full" style="top: 50%; left: 50%; transform: translate(-50%, -50%);"></div>
		</div>
		
		<div class="relative z-10 px-4 py-10 sm:py-14 md:py-16 lg:py-24 sm:px-6 md:px-8 lg:px-12 text-center">
			<!-- Icon/Logo -->
			<div class="flex justify-center mb-4 sm:mb-5 md:mb-6">
				<div class="relative">
					<div class="absolute inset-0 bg-emerald-400/20 blur-xl rounded-full"></div>
					<div class="relative bg-gradient-to-br from-emerald-500 to-teal-600 p-3 sm:p-4 md:p-5 rounded-2xl shadow-lg">
						<svg class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
						</svg>
					</div>
				</div>
			</div>
			
			<!-- Main Heading -->
			<h1 class="text-gray-900 text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold mb-3 sm:mb-4 md:mb-5 lg:mb-6" style="font-weight: 700; line-height: 1.1; letter-spacing: -0.02em;">
				Medical Library
			</h1>
			
			<!-- Subtitle -->
			<p class="text-gray-700 text-base sm:text-lg md:text-xl lg:text-2xl max-w-4xl mx-auto px-2 sm:px-4 mb-6 sm:mb-8 md:mb-10" style="line-height: 1.6; font-weight: 400;">
				Expert health insights, medical articles, and wellness tips from healthcare professionals
			</p>
			
			<!-- Statistics & Trust Indicators -->
			@if(isset($totalArticles) && isset($totalTopics))
			<div class="flex flex-wrap items-center justify-center gap-4 sm:gap-6 md:gap-8 lg:gap-10 mb-4 sm:mb-6">
				<!-- Total Articles -->
				<div class="flex items-center gap-2 sm:gap-3 bg-white/80 backdrop-blur-sm px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 md:py-3 rounded-full shadow-sm hover:shadow-md transition-shadow">
					<svg class="w-5 h-5 sm:w-6 sm:h-6 md:w-7 md:h-7 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
					</svg>
					<div class="text-left">
						<div class="text-lg sm:text-xl md:text-2xl font-bold text-gray-900 leading-tight">{{ number_format($totalArticles) }}</div>
						<div class="text-xs sm:text-sm text-gray-600 leading-tight">Articles</div>
					</div>
				</div>
				
				<!-- Total Topics -->
				<div class="flex items-center gap-2 sm:gap-3 bg-white/80 backdrop-blur-sm px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 md:py-3 rounded-full shadow-sm hover:shadow-md transition-shadow">
					<svg class="w-5 h-5 sm:w-6 sm:h-6 md:w-7 md:h-7 text-teal-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
					</svg>
					<div class="text-left">
						<div class="text-lg sm:text-xl md:text-2xl font-bold text-gray-900 leading-tight">{{ number_format($totalTopics) }}</div>
						<div class="text-xs sm:text-sm text-gray-600 leading-tight">Topics</div>
					</div>
				</div>
				
				<!-- Trusted Sources -->
				<div class="flex items-center gap-2 sm:gap-3 bg-white/80 backdrop-blur-sm px-4 sm:px-5 md:px-6 py-2 sm:py-2.5 md:py-3 rounded-full shadow-sm hover:shadow-md transition-shadow">
					<svg class="w-5 h-5 sm:w-6 sm:h-6 md:w-7 md:h-7 text-cyan-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
					</svg>
					<div class="text-left">
						<div class="text-lg sm:text-xl md:text-2xl font-bold text-gray-900 leading-tight">40+</div>
						<div class="text-xs sm:text-sm text-gray-600 leading-tight">Trusted Sources</div>
					</div>
				</div>
			</div>
			@endif
			
			<!-- Trust Badge -->
			<div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 text-xs sm:text-sm text-gray-600 mt-4 sm:mt-6">
				<div class="flex items-center gap-1.5 sm:gap-2">
					<svg class="w-4 h-4 sm:w-5 sm:h-5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
						<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
					</svg>
					<span>Curated from WHO, Mayo Clinic, WebMD & more</span>
				</div>
				<span class="hidden sm:inline text-gray-400">•</span>
				<div class="flex items-center gap-1.5 sm:gap-2">
					<svg class="w-4 h-4 sm:w-5 sm:h-5 text-emerald-600" fill="currentColor" viewBox="0 0 20 20">
						<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
					</svg>
					<span>Updated daily</span>
				</div>
			</div>
		</div>
	</section>

	<!-- Topic Filter Section -->
	<section class="mt-4 sm:mt-6 md:mt-8">
		<div class="bg-white border-b border-gray-200 p-4 sm:p-5 md:p-6">
			<div class="flex items-center justify-between mb-3 sm:mb-4 md:mb-6">
				<h2 class="text-base sm:text-lg md:text-xl font-bold text-gray-900">Explore by Topic</h2>
				<div class="flex items-center gap-2 sm:gap-3">
					@if(request('topic'))
						<a href="{{ route('blog.index') }}" class="text-xs sm:text-sm font-medium text-teal-700 hover:text-teal-800 flex items-center gap-1 transition-colors">
							<svg class="w-3.5 h-3.5 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
							</svg>
							<span class="hidden sm:inline">Clear filter</span>
							<span class="sm:hidden">Clear</span>
						</a>
					@endif
					@if(!request('topic'))
						<a href="{{ route('blog.topics') }}" class="text-xs sm:text-sm font-medium text-teal-700 hover:text-teal-800 flex items-center gap-1 transition-colors">
							<span>View All</span>
							<svg class="w-3.5 h-3.5 sm:w-4 sm:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
							</svg>
						</a>
					@endif
				</div>
			</div>
			
		<!-- Topic Cards: Responsive layout for all devices -->
		<div class="w-full overflow-hidden">
			<!-- Mobile: 2-column grid -->
			<ul class="grid grid-cols-2 sm:hidden gap-2.5 sm:gap-3">
				@php
					$getTopicImage = function($topicName) {
						// First check local images
						$topicSlug = strtolower(str_replace([' ', "'"], ['-', ''], $topicName));
						$imagePath = "/img/topics/{$topicSlug}.png";
						$fullPath = public_path($imagePath);
						if (file_exists($fullPath)) {
							return asset($imagePath);
						}
						
						// Use Unsplash images for topics (Healthline-style)
						$topicImages = [
							'general health' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=400&h=300&fit=crop',
							'mental health' => 'https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=400&h=300&fit=crop',
							'nutrition' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400&h=300&fit=crop',
							'cardiology' => 'https://images.unsplash.com/photo-1576092768241-dec231879fc3?w=400&h=300&fit=crop',
							'neurology' => 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=400&h=300&fit=crop',
							'dermatology' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400&h=300&fit=crop',
							'pediatrics' => 'https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?w=400&h=300&fit=crop',
							'oncology' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400&h=300&fit=crop',
							'orthopedics' => 'https://images.unsplash.com/photo-1551601651-2a8555f1a136?w=400&h=300&fit=crop',
							'gynecology' => 'https://images.unsplash.com/photo-1576092768241-dec231879fc3?w=400&h=300&fit=crop',
							'psychiatry' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=300&fit=crop',
							'endocrinology' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400&h=300&fit=crop',
							'gastroenterology' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400&h=300&fit=crop',
							'ophthalmology' => 'https://images.unsplash.com/photo-1576092768241-dec231879fc3?w=400&h=300&fit=crop',
							'urology' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400&h=300&fit=crop',
							'pulmonology' => 'https://images.unsplash.com/photo-1551601651-2a8555f1a136?w=400&h=300&fit=crop',
							'rheumatology' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400&h=300&fit=crop',
						];
						
						$key = strtolower($topicName);
						return $topicImages[$key] ?? 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400&h=300&fit=crop';
					};
				@endphp
				
				<!-- All Topics Card -->
				<li>
					<a href="{{ route('blog.index') }}" 
						class="group block w-full transition-all duration-200 hover:scale-105">
						<div class="relative overflow-hidden rounded-xl bg-gradient-to-br {{ !request('topic') ? 'from-emerald-600 to-emerald-700 ring-2 ring-emerald-500 ring-offset-2' : 'from-gray-100 to-gray-200 hover:from-gray-200 hover:to-gray-300' }} transition-all duration-200 aspect-[4/3] shadow-sm hover:shadow-md">
							@if(!request('topic'))
								<div class="absolute inset-0 bg-gradient-to-br from-emerald-600 to-emerald-700"></div>
							@endif
							<div class="absolute inset-0 flex flex-col items-center justify-center p-3">
								<div class="text-center">
									<span class="text-xs font-semibold {{ !request('topic') ? 'text-white' : 'text-gray-900' }} leading-tight block">
										All Topics
									</span>
								</div>
							</div>
						</div>
					</a>
				</li>
				
				<!-- Topic Cards -->
				@foreach($topics as $topic)
					@php
						$topicImage = $getTopicImage($topic);
						$isActive = request('topic') === $topic;
					@endphp
					<li>
						<a href="{{ route('blog.index', ['topic' => $topic]) }}" 
							class="group block w-full transition-all duration-200 hover:scale-105">
							<div class="relative overflow-hidden rounded-xl {{ $isActive ? 'ring-2 ring-emerald-500 ring-offset-2' : '' }} transition-all duration-200 aspect-[4/3] shadow-sm hover:shadow-md">
								@if($topicImage)
									<img 
										src="{{ $topicImage }}" 
										alt="{{ $topic }}"
										class="w-full h-full object-cover {{ $isActive ? 'opacity-100' : 'opacity-90 group-hover:opacity-100' }} transition-opacity duration-200"
										loading="lazy"
									>
								@else
									<div class="w-full h-full bg-gradient-to-br {{ $isActive ? 'from-emerald-500 to-emerald-600' : 'from-gray-200 to-gray-300 group-hover:from-gray-300 group-hover:to-gray-400' }} transition-all duration-200 flex items-center justify-center">
										@php
											$topicIcon = match(strtolower($topic)) {
												'cardiology' => 'M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z',
												'neurology' => 'M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456z',
												'dermatology' => 'M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.648 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42',
												'pediatrics' => 'M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z',
												'oncology' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z',
												'orthopedics' => 'M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636',
												'gynecology' => 'M12 2.25a.75.75 0 01.75.75v.756a49.106 49.106 0 019.152 1 .75.75 0 01-.152 1.485h-1.918l2.474 10.124a.75.75 0 01-.375.84A6.721 6.721 0 0118.75 18a6.721 6.721 0 01-3.181-.795.75.75 0 01-.375-.84l2.474-10.124H12.75v13.28c1.293.076 2.534.343 3.697.776a.75.75 0 01-.262 1.453h-8.37a.75.75 0 01-.262-1.453c1.162-.433 2.404-.7 3.697-.775V6.24H6.332l2.474 10.124a.75.75 0 01-.375.84A6.721 6.721 0 015.25 18a6.721 6.721 0 01-3.181-.795.75.75 0 01-.375-.84L3.768 6.882H1.918a.75.75 0 01-.152-1.485 49.105 49.105 0 019.152-1V3a.75.75 0 01.75-.75zm6.364 13.522a.75.75 0 01.636.744c.069.557-.079 1.188-.462 1.767a.75.75 0 11-1.197-.9c.24-.32.373-.686.4-1.05zm-12.728 0a.75.75 0 01.636.744c.069.557-.079 1.188-.462 1.767a.75.75 0 11-1.197-.9c.24-.32.373-.686.4-1.05z',
												'psychiatry' => 'M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-2.625 6c-.54 0-.828.419-.936.634a1.96 1.96 0 00-.189.866c0 .298.059.605.189.866.108.215.395.634.936.634.54 0 .828-.419.936-.634.13-.26.189-.568.189-.866 0-.298-.059-.605-.189-.866-.108-.215-.395-.634-.936-.634zm4.314.634c.108-.215.395-.634.936-.634.54 0 .828.419.936.634.13.26.189.568.189.866 0 .298-.059.605-.189.866-.108.215-.395.634-.936.634-.54 0-.828-.419-.936-.634a1.96 1.96 0 01-.189-.866c0-.298.059-.605.189-.866zm2.023 6.828a.75.75 0 10-1.06-1.06 3.75 3.75 0 01-5.304 0 .75.75 0 00-1.06 1.06 5.25 5.25 0 007.424 0z',
												'endocrinology' => 'M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z',
												'gastroenterology' => 'M12 3c-1.5 0-3 .5-4 1.5C7 3.5 6 3 4.5 3c-1.5 0-3 .5-4 1.5v12c1-.5 2.5-1.5 4-1.5 1.5 0 2.5.5 3.5 1.5 1-1 2-1.5 3.5-1.5 1.5 0 3 1 4 1.5V4.5c-1-.5-2.5-1.5-4-1.5z',
												'ophthalmology' => 'M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z M15 12a3 3 0 11-6 0 3 3 0 016 0z',
												'urology' => 'M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3zM6.75 6.75h.008v.008H6.75V6.75z',
												'pulmonology' => 'M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.224 48.224 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.589-1.202L18.75 4.971zm-16.5 0a6.226 6.226 0 013 .52m-3 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.589-1.202L5.25 4.971z',
												'rheumatology' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z',
												default => 'M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25'
											};
										@endphp
										@php
											$filledIcons = ['cardiology', 'heart', 'urology', 'kidney'];
											$isFilled = in_array(strtolower($topic), $filledIcons);
										@endphp
										@if($isFilled)
											<svg class="w-10 h-10 {{ $isActive ? 'text-white' : 'text-gray-500' }} opacity-70 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 24 24">
												<path d="{{ $topicIcon }}"/>
											</svg>
										@else
											<svg class="w-10 h-10 {{ $isActive ? 'text-white' : 'text-gray-500' }} opacity-70 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $topicIcon }}"/>
											</svg>
										@endif
									</div>
								@endif
								<div class="absolute inset-0 flex items-end justify-center p-2">
									<span class="text-xs font-semibold {{ $isActive ? 'text-white drop-shadow-lg' : 'text-gray-900 bg-white/80 backdrop-blur-sm px-2 py-1 rounded' }} leading-tight text-center">
										{{ $topic }}
									</span>
								</div>
							</div>
						</a>
					</li>
				@endforeach
			</ul>
			
			<!-- Tablet: 3-column grid -->
			<ul class="hidden sm:grid md:hidden grid-cols-3 gap-3">
				@php
					$getTopicImage = function($topicName) {
						// First check local images
						$topicSlug = strtolower(str_replace([' ', "'"], ['-', ''], $topicName));
						$imagePath = "/img/topics/{$topicSlug}.png";
						$fullPath = public_path($imagePath);
						if (file_exists($fullPath)) {
							return asset($imagePath);
						}
						
						// Use Unsplash images for topics (Healthline-style)
						$topicImages = [
							'general health' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=400&h=300&fit=crop',
							'mental health' => 'https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=400&h=300&fit=crop',
							'nutrition' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400&h=300&fit=crop',
							'cardiology' => 'https://images.unsplash.com/photo-1576092768241-dec231879fc3?w=400&h=300&fit=crop',
							'neurology' => 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=400&h=300&fit=crop',
							'dermatology' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400&h=300&fit=crop',
							'pediatrics' => 'https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?w=400&h=300&fit=crop',
							'oncology' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400&h=300&fit=crop',
							'orthopedics' => 'https://images.unsplash.com/photo-1551601651-2a8555f1a136?w=400&h=300&fit=crop',
							'gynecology' => 'https://images.unsplash.com/photo-1576092768241-dec231879fc3?w=400&h=300&fit=crop',
							'psychiatry' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=300&fit=crop',
							'endocrinology' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400&h=300&fit=crop',
							'gastroenterology' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400&h=300&fit=crop',
							'ophthalmology' => 'https://images.unsplash.com/photo-1576092768241-dec231879fc3?w=400&h=300&fit=crop',
							'urology' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400&h=300&fit=crop',
							'pulmonology' => 'https://images.unsplash.com/photo-1551601651-2a8555f1a136?w=400&h=300&fit=crop',
							'rheumatology' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400&h=300&fit=crop',
						];
						
						$key = strtolower($topicName);
						return $topicImages[$key] ?? 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400&h=300&fit=crop';
					};
				@endphp
				
				<!-- All Topics Card -->
				<li>
					<a href="{{ route('blog.index') }}" 
						class="group block w-full transition-all duration-200 hover:scale-105">
						<div class="relative overflow-hidden rounded-xl bg-gradient-to-br {{ !request('topic') ? 'from-emerald-600 to-emerald-700 ring-2 ring-emerald-500 ring-offset-2' : 'from-gray-100 to-gray-200 hover:from-gray-200 hover:to-gray-300' }} transition-all duration-200 aspect-[4/3] shadow-sm hover:shadow-md">
							@if(!request('topic'))
								<div class="absolute inset-0 bg-gradient-to-br from-emerald-600 to-emerald-700"></div>
							@endif
							<div class="absolute inset-0 flex flex-col items-center justify-center p-3">
								<div class="text-center">
									<span class="text-xs sm:text-sm font-semibold {{ !request('topic') ? 'text-white' : 'text-gray-900' }} leading-tight block">
										All Topics
									</span>
								</div>
							</div>
						</div>
					</a>
				</li>
				
				<!-- Topic Cards -->
				@foreach($topics as $topic)
					@php
						$topicImage = $getTopicImage($topic);
						$isActive = request('topic') === $topic;
					@endphp
					<li>
						<a href="{{ route('blog.index', ['topic' => $topic]) }}" 
							class="group block w-full transition-all duration-200 hover:scale-105">
							<div class="relative overflow-hidden rounded-xl {{ $isActive ? 'ring-2 ring-emerald-500 ring-offset-2' : '' }} transition-all duration-200 aspect-[4/3] shadow-sm hover:shadow-md">
								@if($topicImage)
									<img 
										src="{{ $topicImage }}" 
										alt="{{ $topic }}"
										class="w-full h-full object-cover {{ $isActive ? 'opacity-100' : 'opacity-90 group-hover:opacity-100' }} transition-opacity duration-200"
										loading="lazy"
									>
								@else
									<div class="w-full h-full bg-gradient-to-br {{ $isActive ? 'from-emerald-500 to-emerald-600' : 'from-gray-200 to-gray-300 group-hover:from-gray-300 group-hover:to-gray-400' }} transition-all duration-200 flex items-center justify-center">
										@php
											$topicIcon = match(strtolower($topic)) {
												'cardiology' => 'M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z',
												'neurology' => 'M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456z',
												'dermatology' => 'M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.648 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42',
												'pediatrics' => 'M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z',
												'oncology' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z',
												'orthopedics' => 'M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636',
												'gynecology' => 'M12 2.25a.75.75 0 01.75.75v.756a49.106 49.106 0 019.152 1 .75.75 0 01-.152 1.485h-1.918l2.474 10.124a.75.75 0 01-.375.84A6.721 6.721 0 0118.75 18a6.721 6.721 0 01-3.181-.795.75.75 0 01-.375-.84l2.474-10.124H12.75v13.28c1.293.076 2.534.343 3.697.776a.75.75 0 01-.262 1.453h-8.37a.75.75 0 01-.262-1.453c1.162-.433 2.404-.7 3.697-.775V6.24H6.332l2.474 10.124a.75.75 0 01-.375.84A6.721 6.721 0 015.25 18a6.721 6.721 0 01-3.181-.795.75.75 0 01-.375-.84L3.768 6.882H1.918a.75.75 0 01-.152-1.485 49.105 49.105 0 019.152-1V3a.75.75 0 01.75-.75zm6.364 13.522a.75.75 0 01.636.744c.069.557-.079 1.188-.462 1.767a.75.75 0 11-1.197-.9c.24-.32.373-.686.4-1.05zm-12.728 0a.75.75 0 01.636.744c.069.557-.079 1.188-.462 1.767a.75.75 0 11-1.197-.9c.24-.32.373-.686.4-1.05z',
												'psychiatry' => 'M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-2.625 6c-.54 0-.828.419-.936.634a1.96 1.96 0 00-.189.866c0 .298.059.605.189.866.108.215.395.634.936.634.54 0 .828-.419.936-.634.13-.26.189-.568.189-.866 0-.298-.059-.605-.189-.866-.108-.215-.395-.634-.936-.634zm4.314.634c.108-.215.395-.634.936-.634.54 0 .828.419.936.634.13.26.189.568.189.866 0 .298-.059.605-.189.866-.108.215-.395.634-.936.634-.54 0-.828-.419-.936-.634a1.96 1.96 0 01-.189-.866c0-.298.059-.605.189-.866zm2.023 6.828a.75.75 0 10-1.06-1.06 3.75 3.75 0 01-5.304 0 .75.75 0 00-1.06 1.06 5.25 5.25 0 007.424 0z',
												'endocrinology' => 'M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z',
												'gastroenterology' => 'M12 3c-1.5 0-3 .5-4 1.5C7 3.5 6 3 4.5 3c-1.5 0-3 .5-4 1.5v12c1-.5 2.5-1.5 4-1.5 1.5 0 2.5.5 3.5 1.5 1-1 2-1.5 3.5-1.5 1.5 0 3 1 4 1.5V4.5c-1-.5-2.5-1.5-4-1.5z',
												'ophthalmology' => 'M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z M15 12a3 3 0 11-6 0 3 3 0 016 0z',
												'urology' => 'M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3zM6.75 6.75h.008v.008H6.75V6.75z',
												'pulmonology' => 'M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.224 48.224 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.589-1.202L18.75 4.971zm-16.5 0a6.226 6.226 0 013 .52m-3 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.589-1.202L5.25 4.971z',
												'rheumatology' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z',
												default => 'M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25'
											};
										@endphp
										@if(strtolower($topic) === 'cardiology')
											<svg class="w-10 h-10 sm:w-12 sm:h-12 {{ $isActive ? 'text-white' : 'text-gray-500' }} opacity-70 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 24 24">
												<path d="{{ $topicIcon }}"/>
											</svg>
										@else
											<svg class="w-10 h-10 sm:w-12 sm:h-12 {{ $isActive ? 'text-white' : 'text-gray-500' }} opacity-70 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $topicIcon }}"/>
											</svg>
										@endif
									</div>
								@endif
								<div class="absolute inset-0 flex items-end justify-center p-2 sm:p-3">
									<span class="text-xs sm:text-sm font-semibold {{ $isActive ? 'text-white drop-shadow-lg' : 'text-gray-900 bg-white/80 backdrop-blur-sm px-2 py-1 rounded' }} leading-tight text-center">
										{{ $topic }}
									</span>
								</div>
							</div>
						</a>
					</li>
				@endforeach
			</ul>
			
			<!-- Desktop: Horizontal scrolling -->
			<div class="hidden md:block md:overflow-x-auto scrollbar-hide pb-2 -mx-4 md:-mx-6 px-4 md:px-6">
				<ul class="flex md:flex-row md:flex-nowrap gap-3 md:gap-4 lg:gap-5">
						@php
							$getTopicImage = function($topicName) {
								// First check local images
								$topicSlug = strtolower(str_replace([' ', "'"], ['-', ''], $topicName));
								$imagePath = "/img/topics/{$topicSlug}.png";
								$fullPath = public_path($imagePath);
								if (file_exists($fullPath)) {
									return asset($imagePath);
								}
								
								// Use unique Unsplash images for each topic (no repeats)
								$topicImages = [
									'general health' => 'https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=400&h=300&fit=crop',
									'mental health' => 'https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=400&h=300&fit=crop',
									'nutrition' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400&h=300&fit=crop',
									'cardiology' => 'https://images.unsplash.com/photo-1576092768241-dec231879fc3?w=400&h=300&fit=crop',
									'neurology' => 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=400&h=300&fit=crop',
									'dermatology' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400&h=300&fit=crop',
									'pediatrics' => 'https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?w=400&h=300&fit=crop',
									'oncology' => 'https://images.unsplash.com/photo-1582719471384-894fbb16e074?w=400&h=300&fit=crop',
									'orthopedics' => 'https://images.unsplash.com/photo-1551601651-2a8555f1a136?w=400&h=300&fit=crop',
									'gynecology' => 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=400&h=300&fit=crop',
									'psychiatry' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=300&fit=crop',
									'endocrinology' => 'https://images.unsplash.com/photo-1551190822-a9333d879b1f?w=400&h=300&fit=crop',
									'gastroenterology' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?w=400&h=300&fit=crop',
									'ophthalmology' => 'https://images.unsplash.com/photo-1582750433449-648ed127bb54?w=400&h=300&fit=crop',
									'urology' => 'https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=400&h=300&fit=crop&auto=format&q=80&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
									'pulmonology' => 'https://images.unsplash.com/photo-1551601651-2a8555f1a136?w=400&h=300&fit=crop&auto=format&q=80&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
									'rheumatology' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400&h=300&fit=crop&auto=format&q=80&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
								];
								
								$key = strtolower($topicName);
								return $topicImages[$key] ?? 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=400&h=300&fit=crop';
							};
						@endphp
						
						<!-- All Topics Card -->
						<li class="w-full md:flex-shrink-0 md:w-auto">
							<a href="{{ route('blog.index') }}" 
								class="group block w-full md:w-[150px] lg:w-[160px] transition-all duration-200 hover:scale-105">
								<div class="relative overflow-hidden rounded-xl bg-gradient-to-br {{ !request('topic') ? 'from-emerald-600 to-emerald-700 ring-2 ring-emerald-500 ring-offset-2' : 'from-gray-100 to-gray-200 hover:from-gray-200 hover:to-gray-300' }} transition-all duration-200 aspect-[4/3] shadow-sm hover:shadow-md">
									@if(!request('topic'))
										<div class="absolute inset-0 bg-gradient-to-br from-emerald-600 to-emerald-700"></div>
									@endif
									<div class="absolute inset-0 flex flex-col items-center justify-center p-3 md:p-4">
										<div class="text-center">
											<span class="text-xs md:text-sm font-semibold {{ !request('topic') ? 'text-white' : 'text-gray-900' }} leading-tight block">
												All Topics
											</span>
										</div>
									</div>
								</div>
							</a>
						</li>
						
						<!-- Topic Cards -->
						@foreach($topics as $topic)
							@php
								$topicImage = $getTopicImage($topic);
								$isActive = request('topic') === $topic;
							@endphp
							<li class="w-full md:flex-shrink-0 md:w-auto">
								<a href="{{ route('blog.index', ['topic' => $topic]) }}" 
									class="group block w-full md:w-[150px] lg:w-[160px] transition-all duration-200 hover:scale-105">
									<div class="relative overflow-hidden rounded-lg {{ $isActive ? 'ring-2 ring-teal-500 ring-offset-2' : '' }} transition-all duration-200 aspect-[4/3] shadow-sm hover:shadow-md bg-white">
										@if($topicImage)
											<img 
												src="{{ $topicImage }}" 
												alt="{{ $topic }}"
												class="w-full h-full object-cover {{ $isActive ? 'opacity-100' : 'opacity-95 group-hover:opacity-100' }} transition-opacity duration-200"
												loading="lazy"
											>
										@else
											<div class="w-full h-full bg-gradient-to-br {{ $isActive ? 'from-teal-500 to-teal-600' : 'from-gray-100 to-gray-200 group-hover:from-gray-200 group-hover:to-gray-300' }} transition-all duration-200 flex items-center justify-center">
												@php
													$topicIcon = match(strtolower($topic)) {
														'cardiology' => 'M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z',
														'neurology' => 'M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456z',
														'dermatology' => 'M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.648 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42',
														'pediatrics' => 'M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z',
														'oncology' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z',
														'orthopedics' => 'M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636',
														'gynecology' => 'M12 2.25a.75.75 0 01.75.75v.756a49.106 49.106 0 019.152 1 .75.75 0 01-.152 1.485h-1.918l2.474 10.124a.75.75 0 01-.375.84A6.721 6.721 0 0118.75 18a6.721 6.721 0 01-3.181-.795.75.75 0 01-.375-.84l2.474-10.124H12.75v13.28c1.293.076 2.534.343 3.697.776a.75.75 0 01-.262 1.453h-8.37a.75.75 0 01-.262-1.453c1.162-.433 2.404-.7 3.697-.775V6.24H6.332l2.474 10.124a.75.75 0 01-.375.84A6.721 6.721 0 015.25 18a6.721 6.721 0 01-3.181-.795.75.75 0 01-.375-.84L3.768 6.882H1.918a.75.75 0 01-.152-1.485 49.105 49.105 0 019.152-1V3a.75.75 0 01.75-.75zm6.364 13.522a.75.75 0 01.636.744c.069.557-.079 1.188-.462 1.767a.75.75 0 11-1.197-.9c.24-.32.373-.686.4-1.05zm-12.728 0a.75.75 0 01.636.744c.069.557-.079 1.188-.462 1.767a.75.75 0 11-1.197-.9c.24-.32.373-.686.4-1.05z',
														'psychiatry' => 'M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-2.625 6c-.54 0-.828.419-.936.634a1.96 1.96 0 00-.189.866c0 .298.059.605.189.866.108.215.395.634.936.634.54 0 .828-.419.936-.634.13-.26.189-.568.189-.866 0-.298-.059-.605-.189-.866-.108-.215-.395-.634-.936-.634zm4.314.634c.108-.215.395-.634.936-.634.54 0 .828.419.936.634.13.26.189.568.189.866 0 .298-.059.605-.189.866-.108.215-.395.634-.936.634-.54 0-.828-.419-.936-.634a1.96 1.96 0 01-.189-.866c0-.298.059-.605.189-.866zm2.023 6.828a.75.75 0 10-1.06-1.06 3.75 3.75 0 01-5.304 0 .75.75 0 00-1.06 1.06 5.25 5.25 0 007.424 0z',
														'endocrinology' => 'M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z',
														'gastroenterology' => 'M12 3c-1.5 0-3 .5-4 1.5C7 3.5 6 3 4.5 3c-1.5 0-3 .5-4 1.5v12c1-.5 2.5-1.5 4-1.5 1.5 0 2.5.5 3.5 1.5 1-1 2-1.5 3.5-1.5 1.5 0 3 1 4 1.5V4.5c-1-.5-2.5-1.5-4-1.5z',
														'ophthalmology' => 'M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z M15 12a3 3 0 11-6 0 3 3 0 016 0z',
														'urology' => 'M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3zM6.75 6.75h.008v.008H6.75V6.75z',
														'pulmonology' => 'M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.224 48.224 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.589-1.202L18.75 4.971zm-16.5 0a6.226 6.226 0 013 .52m-3 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.589-1.202L5.25 4.971z',
														'rheumatology' => 'M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z',
														default => 'M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25'
													};
												@endphp
												@php
													$filledIcons = ['cardiology', 'heart', 'urology', 'kidney'];
													$isFilled = in_array(strtolower($topic), $filledIcons);
												@endphp
												@if($isFilled)
													<svg class="w-12 h-12 {{ $isActive ? 'text-white' : 'text-gray-500' }} opacity-70 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 24 24">
														<path d="{{ $topicIcon }}"/>
													</svg>
												@else
													<svg class="w-12 h-12 {{ $isActive ? 'text-white' : 'text-gray-500' }} opacity-70 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $topicIcon }}"/>
													</svg>
												@endif
											</div>
										@endif
										<div class="absolute inset-0 flex items-end justify-center p-2 sm:p-3">
											<div class="text-center w-full px-2">
												<span class="text-xs sm:text-sm font-semibold text-gray-900 bg-white px-2 py-1 rounded leading-tight block" style="text-align: center;">
													{{ $topic }}
												</span>
											</div>
										</div>
									</div>
								</a>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Search Section -->
	<section class="mt-4 sm:mt-6 md:mt-8">
		<div class="bg-white border-b border-gray-200 p-4 sm:p-5 md:p-6">
			<form id="blog-search-form" class="blog-ajax-search-form" action="{{ route('blog.index') }}" method="GET" data-ajax-list="true" data-results="#blog-articles-container">
				<div class="relative">
					<input 
						type="text" 
						name="q" 
						id="blog-search-input"
						value="{{ request('q') }}"
						placeholder="Search articles by title, topic, author, or content..." 
						class="w-full pl-10 sm:pl-12 pr-10 sm:pr-12 py-2.5 sm:py-3 md:py-3.5 text-sm sm:text-base border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-200 placeholder:text-gray-400 touch-manipulation"
						autocomplete="off"
					>
					<div class="absolute left-3 sm:left-4 top-1/2 -translate-y-1/2 text-gray-400">
						<svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
						</svg>
					</div>
					<button 
						type="button" 
						id="blog-search-clear"
						class="absolute right-2 sm:right-3 md:right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 active:text-gray-700 transition-colors p-2 sm:p-1.5 touch-manipulation {{ request('q') ? '' : 'hidden' }}"
						aria-label="Clear search"
					>
						<svg class="w-4 h-4 sm:w-5 sm:h-5 pointer-events-none" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
						</svg>
					</button>
				</div>
				@if(request('topic'))
					<input type="hidden" name="topic" value="{{ request('topic') }}">
				@endif
			</form>
		</div>
	</section>

	<!-- Blog Posts Grid -->
	<section class="mt-4 sm:mt-6 md:mt-8">
		@if(request('topic') || request('q'))
			<div class="mb-3 sm:mb-4 md:mb-6 flex flex-wrap items-center gap-2 sm:gap-3">
				@if(request('topic'))
					<div class="flex items-center gap-2">
						<span class="text-gray-600 text-xs sm:text-sm md:text-base">
							Topic: <span class="font-semibold text-teal-700">{{ e(request('topic')) }}</span>
						</span>
						<a href="{{ route('blog.index', ['q' => request('q') ? e(request('q')) : null]) }}" class="text-teal-700 hover:text-teal-800 text-xs sm:text-sm">
							<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
							</svg>
						</a>
					</div>
				@endif
				@if(request('q'))
					<div class="flex items-center gap-2">
						<span class="text-gray-600 text-xs sm:text-sm md:text-base">
							Search: <span class="font-semibold text-teal-700">"{{ e(request('q')) }}"</span>
						</span>
					</div>
				@endif
				@if($posts->total() > 0)
					<span class="text-gray-500 text-xs sm:text-sm md:text-base">
						({{ $posts->total() }} {{ Str::plural('article', $posts->total()) }})
					</span>
				@endif
			</div>
		@endif
		
		<div id="blog-articles-container">
			@include('blog._articles', ['posts' => $posts, 'searchTerm' => $searchTerm ?? null])
		</div>
		
		<!-- Loading indicator -->
		<div id="blog-loading" class="hidden text-center py-8 sm:py-12">
			<div class="inline-flex items-center gap-2 text-teal-700">
				<svg class="animate-spin h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
					<circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
					<path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
				</svg>
				<span class="text-sm sm:text-base">Searching...</span>
			</div>
		</div>
	</section>
</div>

<style>
	.line-clamp-2 {
		display: -webkit-box;
		-webkit-line-clamp: 2;
		-webkit-box-orient: vertical;
		overflow: hidden;
	}
	.line-clamp-3 {
		display: -webkit-box;
		-webkit-line-clamp: 3;
		-webkit-box-orient: vertical;
		overflow: hidden;
	}
	
	/* Hide scrollbar for Chrome, Safari and Opera */
	.scrollbar-hide::-webkit-scrollbar {
		display: none;
	}
	
	/* Hide scrollbar for IE, Edge and Firefox */
	.scrollbar-hide {
		-ms-overflow-style: none;  /* IE and Edge */
		scrollbar-width: none;  /* Firefox */
	}
	
	/* Smooth scrolling */
	.scrollbar-hide {
		scroll-behavior: smooth;
		-webkit-overflow-scrolling: touch;
	}
</style>
@endsection


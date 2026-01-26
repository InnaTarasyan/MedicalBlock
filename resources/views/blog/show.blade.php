@extends('layouts.app')

@section('title', $post->title . ' - Medical Library')

@section('breadcrumbs')
	<a href="{{ route('blog.index') }}" class="hover:underline">Blog</a>
	<span class="mx-1">/</span>
	<span class="line-clamp-1">{{ $post->title }}</span>
@endsection

@section('content')
<div class="grid gap-6 sm:gap-8">
	<!-- Article Header -->
	<article class="bg-white overflow-hidden">
		@if($post->valid_image_url)
			<div class="relative h-64 sm:h-80 lg:h-96 overflow-hidden bg-gray-100">
				<img 
					src="{!! $post->valid_image_url !!}" 
					alt="{{ $post->title }}"
					class="w-full h-full object-cover"
					loading="eager"
				>
			</div>
		@else
			<div class="relative h-64 sm:h-80 lg:h-96 overflow-hidden bg-gray-100">
				<div class="absolute inset-0 flex items-center justify-center">
					<svg class="w-32 h-32 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
					</svg>
				</div>
			</div>
		@endif
		
		<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-6 sm:py-8 lg:py-10">
			<!-- Article Meta -->
			<div class="flex flex-wrap items-center gap-3 text-sm text-gray-600 mb-4">
				@if($post->topic)
					<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold text-teal-700 bg-teal-50">
						{{ $post->topic }}
					</span>
				@endif
				<span class="text-gray-400">•</span>
				<time datetime="{{ $post->published_at->format('Y-m-d') }}" class="text-gray-600">
					{{ $post->published_at->format('F d, Y') }}
				</time>
				<span class="text-gray-400">•</span>
				<span class="text-gray-600">{{ $post->read_time }} min read</span>
				@if($post->doctor)
					<span class="text-gray-400">•</span>
					<a href="{{ route('blog.author', $post->doctor) }}" class="text-gray-600 hover:text-teal-700 transition-colors font-medium">
						{{ $post->author }}
					</a>
				@else
					<span class="text-gray-400">•</span>
					<span class="text-gray-600 font-medium">{{ $post->author }}</span>
				@endif
			</div>
			
			<!-- Article Title -->
			<h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 sm:mb-6 leading-tight" style="font-weight: 700; line-height: 1.2;">
				{{ $post->title }}
			</h1>
			
			@if($post->excerpt)
				<p class="text-lg sm:text-xl text-gray-700 mb-6 sm:mb-8 leading-relaxed" style="line-height: 1.6;">
					{{ $post->excerpt }}
				</p>
			@endif
			
			<!-- Article Content -->
			<div class="prose prose-lg max-w-none prose-headings:text-gray-900 prose-headings:font-bold prose-p:text-gray-700 prose-p:leading-relaxed prose-p:text-base prose-a:text-teal-600 prose-a:no-underline hover:prose-a:underline prose-strong:text-gray-900 prose-ul:text-gray-700 prose-ol:text-gray-700 prose-li:text-gray-700 prose-img:rounded-lg prose-img:shadow-md prose-img:my-8" style="font-size: 18px; line-height: 1.75;">
				{!! $post->content !!}
			</div>
			
			@php
				$sourceUrl = $post->effective_source_url;
			@endphp
			
			@if($sourceUrl)
				<!-- Read More Button -->
				<div class="mt-8 pt-6 border-t border-gray-200">
					<a href="{{ $sourceUrl }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-6 py-3 rounded-lg text-base font-semibold text-white bg-teal-600 hover:bg-teal-700 transition-colors shadow-sm hover:shadow-md">
						<span>Read More</span>
						<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
						</svg>
					</a>
					<p class="mt-2 text-sm text-gray-500">Continue reading the full article on the original source</p>
				</div>
			@endif
			
			<!-- Article Footer -->
			<div class="mt-10 pt-8 border-t border-gray-200">
				<div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
					<div class="flex items-center gap-3">
						<div class="w-12 h-12 rounded-full bg-teal-100 flex items-center justify-center">
							<span class="text-teal-700 font-semibold">{{ substr($post->author, 0, 2) }}</span>
						</div>
						<div>
							@if($post->doctor)
								<a href="{{ route('blog.author', $post->doctor) }}" class="font-semibold text-gray-900 hover:text-teal-700 transition-colors block">
									{{ $post->author }}
								</a>
							@else
								<p class="font-semibold text-gray-900">{{ $post->author }}</p>
							@endif
							<p class="text-sm text-gray-500">Medical Professional</p>
						</div>
					</div>
					<a href="{{ route('blog.index') }}" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-lg text-sm font-semibold text-teal-700 bg-teal-50 hover:bg-teal-100 transition-colors">
						<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
						</svg>
						Back to Blog
					</a>
				</div>
			</div>
		</div>
	</article>
	
	<!-- Related Articles Section -->
	@php
		$relatedPosts = \App\Models\BlogPost::where('topic', $post->topic)
			->where('id', '!=', $post->id)
			->whereNotNull('published_at')
			->where('published_at', '<=', now())
			->orderBy('published_at', 'desc')
			->limit(3)
			->get();
	@endphp
	
	@if($relatedPosts->count() > 0)
		<section class="mt-6 sm:mt-8 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
			<div class="flex items-center justify-between mb-6">
				<h2 class="text-2xl sm:text-3xl font-bold text-gray-900">Related Articles</h2>
				<a href="{{ route('blog.index') }}" class="text-sm font-semibold text-teal-700 hover:text-teal-800">
					View all
				</a>
			</div>
			<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
				@foreach($relatedPosts as $relatedPost)
					<article class="group bg-white rounded-lg border border-gray-200 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
					@if($relatedPost->valid_image_url)
						<a href="{{ route('blog.show', $relatedPost) }}" class="block relative h-48 overflow-hidden bg-gray-100">
							<img 
								src="{!! $relatedPost->valid_image_url !!}" 
								alt="{{ $relatedPost->title }}"
								class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
								loading="lazy"
							>
							</a>
						@else
							<a href="{{ route('blog.show', $relatedPost) }}" class="block relative h-48 overflow-hidden bg-gray-100">
								<div class="absolute inset-0 flex items-center justify-center">
									<svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
									</svg>
								</div>
							</a>
						@endif
						
						<div class="p-5">
							<div class="flex items-center gap-2 text-xs text-gray-500 mb-3">
								<time datetime="{{ $relatedPost->published_at->format('Y-m-d') }}">
									{{ $relatedPost->published_at->format('M d, Y') }}
								</time>
								<span>•</span>
								<span>{{ $relatedPost->read_time }} min read</span>
							</div>
							
							<h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-teal-700 transition-colors line-clamp-2">
								<a href="{{ route('blog.show', $relatedPost) }}">{{ $relatedPost->title }}</a>
							</h3>
							
							@if($relatedPost->excerpt)
								<p class="text-gray-600 text-sm mb-4 line-clamp-2">
									{{ $relatedPost->excerpt }}
								</p>
							@endif
							
							<a href="{{ route('blog.show', $relatedPost) }}" class="inline-flex items-center gap-1 text-sm font-semibold text-teal-700 hover:text-teal-800 group-hover:gap-2 transition-all">
								Read more
								<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
								</svg>
							</a>
						</div>
					</article>
				@endforeach
			</div>
		</section>
	@endif
</div>

<style>
	.line-clamp-1 {
		display: -webkit-box;
		-webkit-line-clamp: 1;
		-webkit-box-orient: vertical;
		overflow: hidden;
	}
	.line-clamp-2 {
		display: -webkit-box;
		-webkit-line-clamp: 2;
		-webkit-box-orient: vertical;
		overflow: hidden;
	}
	.prose {
		color: inherit;
	}
	.prose p {
		margin-top: 1.25em;
		margin-bottom: 1.25em;
	}
	.prose ul, .prose ol {
		margin-top: 1.25em;
		margin-bottom: 1.25em;
		padding-left: 1.625em;
	}
	.prose li {
		margin-top: 0.5em;
		margin-bottom: 0.5em;
	}
	.prose h2 {
		font-size: 1.875em;
		margin-top: 2em;
		margin-bottom: 1em;
		font-weight: 700;
	}
	.prose h3 {
		font-size: 1.5em;
		margin-top: 1.6em;
		margin-bottom: 0.6em;
		font-weight: 600;
	}
	.prose strong {
		font-weight: 600;
	}
</style>
@endsection





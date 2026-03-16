@extends('layouts.app')

@section('title', 'Page Not Found - 404')

@section('content')
<div class="error-404-container">
	<div class="error-404-content">
		<!-- Animated 404 Number -->
		<div class="error-404-number-wrapper">
			<div class="error-404-glow"></div>
			<div class="error-404-number">404</div>
			<!-- Medical icon overlay -->
			<svg class="error-404-icon-overlay" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
			</svg>
		</div>

		<!-- Decorative Medical Icons -->
		<div class="error-404-decorative-icons">
			<svg class="error-404-icon error-404-icon-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
			</svg>
			<svg class="error-404-icon error-404-icon-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
			</svg>
			<svg class="error-404-icon error-404-icon-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
			</svg>
		</div>

		<!-- Title -->
		<h1 class="error-404-title">Page Not Found</h1>

		<!-- Description -->
		<p class="error-404-description">
			We couldn't find the page you're looking for. The page may have been moved, deleted, or the URL might be incorrect.
		</p>

		<!-- Action Buttons -->
		<div class="error-404-buttons">
			<a href="{{ route('blog.index') }}" class="error-404-btn error-404-btn-primary">
				<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
				</svg>
				<span>Go to Homepage</span>
			</a>
			<button onclick="window.history.back()" class="error-404-btn error-404-btn-secondary">
				<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
				</svg>
				<span>Go Back</span>
			</button>
		</div>

		<!-- Quick Links -->
		<div class="error-404-quick-links">
			<p class="error-404-quick-links-label">Popular Pages:</p>
			<div class="error-404-quick-links-list">
				<a href="{{ route('blog.index') }}" class="error-404-quick-link">Home</a>
				<span class="error-404-quick-link-separator">•</span>
				<a href="{{ route('blog.topics') }}" class="error-404-quick-link">Topics</a>
			</div>
		</div>
	</div>
</div>
@endsection






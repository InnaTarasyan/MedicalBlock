@extends('layouts.app')

@section('title', 'About Us - MedicalBlock')

@section('breadcrumbs')
	<a href="{{ route('blog.index') }}" class="hover:underline">Home</a>
	<span class="mx-1">/</span>
	<span>About</span>
@endsection

@section('content')
<div class="max-w-4xl mx-auto">
	<div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
		<!-- Header -->
		<div class="bg-gradient-to-r from-brand-600 to-brand-700 px-6 sm:px-8 lg:px-10 py-8 sm:py-10">
			<h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-3">About MedicalBlock</h1>
			<p class="text-brand-100 text-base sm:text-lg">Your trusted source for medical and health information</p>
		</div>

		<!-- Content -->
		<div class="px-6 sm:px-8 lg:px-10 py-8 sm:py-10 lg:py-12">
			<div class="prose prose-lg max-w-none">
				<!-- About Inna Tarasyan - Featured Section -->
				<section class="mb-8 sm:mb-12">
					<div class="bg-gradient-to-br from-brand-50 to-brand-100 border-2 border-brand-200 rounded-2xl p-6 sm:p-8 lg:p-10 shadow-sm">
						<div class="flex flex-col md:flex-row items-center md:items-start gap-6 md:gap-8">
							<!-- Image -->
							<div class="flex-shrink-0">
								<img 
									src="{{ asset('img/inna.jpg') }}" 
									alt="Inna Tarasyan - Web Developer" 
									class="w-48 h-48 sm:w-56 sm:h-56 md:w-64 md:h-64 rounded-full object-cover border-4 border-white shadow-lg"
									loading="eager"
								>
							</div>
							
							<!-- Information -->
							<div class="flex-1 text-center md:text-left">
								<h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-3">Inna Tarasyan</h2>
								<p class="text-lg sm:text-xl text-brand-700 font-semibold mb-4">Web Developer & Crypto Enthusiast</p>
								<div class="space-y-3 text-gray-700 leading-relaxed">
									<p>
										Hello! I'm a passionate web developer from Armenia, dedicated to creating tools that make crypto trading more accessible and informed. I believe in the power of real-time data and user-friendly interfaces to help traders make better decisions.
									</p>
									<p>
										MedicalBlock was developed and is maintained by <strong class="text-gray-900">Inna Tarasyan</strong>, a dedicated web developer passionate about making health information more accessible and useful for everyone.
									</p>
									<p>
										With a commitment to excellence and user experience, Inna has created a comprehensive platform that aggregates trusted medical content from over 40 reputable sources, including the World Health Organization (WHO), National Institutes of Health (NIH), Mayo Clinic, WebMD, Healthline, and many other leading medical institutions.
									</p>
									<p class="bg-white rounded-lg p-4 border border-brand-200 mt-4">
										<span class="text-brand-700 font-semibold">🤝 Important:</span> We kindly ask that you do not use or share information from this site without first reaching out to the author. If you have questions or would like to use any content, please contact <strong>Inna Tarasyan</strong>—I'm always happy to connect!
									</p>
									
									<!-- Links Section -->
									<div class="bg-white rounded-lg p-4 border border-brand-200 mt-4">
										<h3 class="text-lg font-semibold text-gray-900 mb-3">Connect & Explore</h3>
										<div class="space-y-2">
											<p class="text-gray-700">
												<strong>GitHub:</strong> <a href="https://github.com/InnaTarasyan" target="_blank" rel="noopener noreferrer" class="text-brand-700 hover:text-brand-800 hover:underline font-semibold">https://github.com/InnaTarasyan</a>
											</p>
											<div class="mt-3">
												<p class="text-gray-700 font-semibold mb-2">My Websites:</p>
												<ul class="list-disc pl-6 space-y-1 text-gray-700">
													<li><a href="https://armmagazine.shop/" target="_blank" rel="noopener noreferrer" class="text-brand-700 hover:text-brand-800 hover:underline">https://armmagazine.shop/</a></li>
													<li><a href="https://cryptotrading.website/" target="_blank" rel="noopener noreferrer" class="text-brand-700 hover:text-brand-800 hover:underline">https://cryptotrading.website/</a></li>
													<li><a href="https://hurgada.site/" target="_blank" rel="noopener noreferrer" class="text-brand-700 hover:text-brand-800 hover:underline">https://hurgada.site/</a></li>
													<li><a href="https://innatarasyan.site/" target="_blank" rel="noopener noreferrer" class="text-brand-700 hover:text-brand-800 hover:underline">https://innatarasyan.site/</a></li>
													<li><a href="https://popularmagazines.shop/" target="_blank" rel="noopener noreferrer" class="text-brand-700 hover:text-brand-800 hover:underline">https://popularmagazines.shop/</a></li>
													<li><a href="https://primedoctors.store/" target="_blank" rel="noopener noreferrer" class="text-brand-700 hover:text-brand-800 hover:underline">https://primedoctors.store/</a></li>
													<li><a href="https://rusarticles.shop/" target="_blank" rel="noopener noreferrer" class="text-brand-700 hover:text-brand-800 hover:underline">https://rusarticles.shop/</a></li>
													<li><a href="https://wikchenlun.site/" target="_blank" rel="noopener noreferrer" class="text-brand-700 hover:text-brand-800 hover:underline">https://wikchenlun.site/</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- Introduction -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Welcome to MedicalBlock</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						MedicalBlock is a comprehensive medical and health information platform dedicated to providing reliable, evidence-based health content to help you make informed decisions about your health and wellness.
					</p>
					<p class="text-gray-700 leading-relaxed">
						We aggregate and curate medical articles from trusted sources including the World Health Organization (WHO), National Institutes of Health (NIH), Mayo Clinic, WebMD, Healthline, and many other reputable medical institutions and health organizations.
					</p>
				</section>

				<!-- Our Mission -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Our Mission</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						Our mission is to make reliable medical and health information accessible to everyone. We believe that access to accurate, evidence-based health information is a fundamental right and can empower individuals to take better care of their health and make informed decisions.
					</p>
					<p class="text-gray-700 leading-relaxed">
						We are committed to providing content that is:
					</p>
					<ul class="list-disc pl-6 space-y-2 text-gray-700 mt-4">
						<li>Evidence-based and scientifically accurate</li>
						<li>From trusted and reputable sources</li>
						<li>Easy to understand and accessible</li>
						<li>Regularly updated with the latest medical research</li>
						<li>Free and available to all</li>
					</ul>
				</section>

				<!-- What We Do -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">What We Do</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						MedicalBlock serves as a centralized hub for medical and health information. We:
					</p>
					<div class="space-y-4">
						<div>
							<h3 class="text-xl font-semibold text-gray-800 mb-2">Aggregate Trusted Content</h3>
							<p class="text-gray-700 leading-relaxed">
								We collect articles and information from over 40 trusted medical sources, including international health organizations, leading medical institutions, and reputable health websites.
							</p>
						</div>
						<div>
							<h3 class="text-xl font-semibold text-gray-800 mb-2">Organize by Topics</h3>
							<p class="text-gray-700 leading-relaxed">
								Our content is organized by medical topics, making it easy for you to find information about specific health conditions, treatments, wellness topics, and more.
							</p>
						</div>
						<div>
							<h3 class="text-xl font-semibold text-gray-800 mb-2">Provide Author Information</h3>
							<p class="text-gray-700 leading-relaxed">
								We maintain information about the doctors and medical professionals who author our articles, helping you understand the expertise behind the content you're reading.
							</p>
						</div>
						<div>
							<h3 class="text-xl font-semibold text-gray-800 mb-2">Enable Easy Discovery</h3>
							<p class="text-gray-700 leading-relaxed">
								With our search functionality and topic filtering, you can quickly find the health information you need, when you need it.
							</p>
						</div>
					</div>
				</section>

				<!-- Our Values -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Our Values</h2>
					<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
						<div class="bg-brand-50 border border-brand-200 rounded-lg p-4 sm:p-6">
							<h3 class="text-lg font-semibold text-brand-800 mb-2">Accuracy</h3>
							<p class="text-gray-700">
								We prioritize accuracy and rely on evidence-based information from reputable medical sources.
							</p>
						</div>
						<div class="bg-brand-50 border border-brand-200 rounded-lg p-4 sm:p-6">
							<h3 class="text-lg font-semibold text-brand-800 mb-2">Transparency</h3>
							<p class="text-gray-700">
								We clearly attribute content to its sources and authors, ensuring transparency about where information comes from.
							</p>
						</div>
						<div class="bg-brand-50 border border-brand-200 rounded-lg p-4 sm:p-6">
							<h3 class="text-lg font-semibold text-brand-800 mb-2">Accessibility</h3>
							<p class="text-gray-700">
								We believe health information should be accessible to everyone, regardless of their background or location.
							</p>
						</div>
						<div class="bg-brand-50 border border-brand-200 rounded-lg p-4 sm:p-6">
							<h3 class="text-lg font-semibold text-brand-800 mb-2">Privacy</h3>
							<p class="text-gray-700">
								We respect your privacy and are committed to protecting your personal information. See our <a href="{{ route('legal.privacy') }}" class="text-brand-700 hover:underline font-semibold">Privacy Policy</a> for details.
							</p>
						</div>
					</div>
				</section>

				<!-- Important Disclaimer -->
				<section class="mb-8 sm:mb-10">
					<div class="bg-red-50 border border-red-200 rounded-lg p-4 sm:p-6">
						<h3 class="text-xl font-semibold text-red-800 mb-3">⚠️ Important Medical Disclaimer</h3>
						<p class="text-red-700 leading-relaxed mb-3">
							The information provided on MedicalBlock is for general informational purposes only and is not intended as medical advice, diagnosis, or treatment. Always seek the advice of your physician or other qualified health provider with any questions you may have regarding a medical condition.
						</p>
						<p class="text-red-700 leading-relaxed font-semibold">
							🚨 If you think you may have a medical emergency, call your doctor or emergency services immediately. Do not rely on information from this website for emergency medical situations.
						</p>
					</div>
				</section>

				<!-- Contact Information -->
				<section class="mb-6 sm:mb-8">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Contact Us</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						If you have questions, feedback, or would like to get in touch, please reach out through the contact information provided in the footer of our website.
					</p>
					<div class="bg-gray-50 border border-gray-200 rounded-lg p-4 sm:p-6">
						<p class="text-gray-800 font-semibold mb-2 text-lg">Inna Tarasyan</p>
						<p class="text-gray-700 mb-2">Web Developer & Crypto Enthusiast</p>
						<p class="text-gray-700">
							For inquiries, please use the contact information available in the website footer.
						</p>
					</div>
				</section>

				<!-- Legal Links -->
				<section class="mb-6 sm:mb-8">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Legal Information</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						For more information about how we handle your data and the terms of using our website, please review our legal pages:
					</p>
					<div class="flex flex-wrap gap-4">
						<a href="{{ route('legal.privacy') }}" class="inline-flex items-center px-4 py-2 bg-brand-600 text-white rounded-lg hover:bg-brand-700 transition-colors font-semibold">
							Privacy Policy
						</a>
						<a href="{{ route('legal.terms') }}" class="inline-flex items-center px-4 py-2 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition-colors font-semibold">
							Terms of Use
						</a>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
@endsection


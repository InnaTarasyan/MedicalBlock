@extends('layouts.app')

@section('title', 'Privacy Policy - MedicalBlock')

@section('breadcrumbs')
	<a href="{{ route('blog.index') }}" class="hover:underline">Home</a>
	<span class="mx-1">/</span>
	<span>Privacy Policy</span>
@endsection

@section('content')
<div class="max-w-4xl mx-auto">
	<div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
		<!-- Header -->
		<div class="bg-gradient-to-r from-brand-600 to-brand-700 px-6 sm:px-8 lg:px-10 py-8 sm:py-10">
			<h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-3">Privacy Policy</h1>
			<p class="text-brand-100 text-base sm:text-lg">Last updated: {{ date('F d, Y') }}</p>
		</div>

		<!-- Content -->
		<div class="px-6 sm:px-8 lg:px-10 py-8 sm:py-10 lg:py-12">
			<div class="prose prose-lg max-w-none">
				<!-- Introduction -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Introduction</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						Welcome to MedicalBlock. We respect your privacy and are committed to protecting your personal data. This privacy policy explains how we collect, use, and safeguard your information when you visit our website.
					</p>
					<p class="text-gray-700 leading-relaxed">
						By using our website, you agree to the collection and use of information in accordance with this policy.
					</p>
				</section>

				<!-- Information We Collect -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Information We Collect</h2>
					<div class="space-y-4">
						<div>
							<h3 class="text-xl font-semibold text-gray-800 mb-2">Automatically Collected Information</h3>
							<p class="text-gray-700 leading-relaxed mb-3">
								When you visit our website, we may automatically collect certain information about your device, including:
							</p>
							<ul class="list-disc pl-6 space-y-2 text-gray-700">
								<li>IP address</li>
								<li>Browser type and version</li>
								<li>Operating system</li>
								<li>Pages you visit and time spent on pages</li>
								<li>Referring website addresses</li>
								<li>Date and time of your visit</li>
							</ul>
						</div>
						<div class="mt-4">
							<h3 class="text-xl font-semibold text-gray-800 mb-2">Cookies and Tracking Technologies</h3>
							<p class="text-gray-700 leading-relaxed">
								We use cookies and similar tracking technologies to track activity on our website and store certain information. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent.
							</p>
						</div>
					</div>
				</section>

				<!-- How We Use Your Information -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">How We Use Your Information</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						We use the information we collect for various purposes, including:
					</p>
					<ul class="list-disc pl-6 space-y-2 text-gray-700">
						<li>To provide and maintain our website</li>
						<li>To improve, personalize, and expand our website</li>
						<li>To understand and analyze how you use our website</li>
						<li>To develop new features and functionality</li>
						<li>To monitor the usage of our website and detect technical issues</li>
						<li>To provide customer support</li>
					</ul>
				</section>

				<!-- Data Security -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Data Security</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						The security of your data is important to us. We implement appropriate technical and organizational measures to protect your personal information. However, no method of transmission over the Internet or electronic storage is 100% secure, and we cannot guarantee absolute security.
					</p>
					<p class="text-gray-700 leading-relaxed">
						We use SSL encryption and follow industry best practices to safeguard your information.
					</p>
				</section>

				<!-- Third-Party Services -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Third-Party Services</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						Our website may contain links to third-party websites or services that are not owned or controlled by us. We have no control over, and assume no responsibility for, the privacy policies or practices of any third-party websites or services.
					</p>
					<p class="text-gray-700 leading-relaxed">
						We encourage you to review the privacy policies of any third-party websites or services that you visit.
					</p>
				</section>

				<!-- Your Rights -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Your Rights</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						Depending on your location, you may have certain rights regarding your personal information, including:
					</p>
					<ul class="list-disc pl-6 space-y-2 text-gray-700">
						<li>The right to access your personal data</li>
						<li>The right to rectify inaccurate data</li>
						<li>The right to request deletion of your data</li>
						<li>The right to object to processing of your data</li>
						<li>The right to data portability</li>
					</ul>
				</section>

				<!-- Children's Privacy -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Children's Privacy</h2>
					<p class="text-gray-700 leading-relaxed">
						Our website is not intended for children under the age of 13. We do not knowingly collect personal information from children under 13. If you are a parent or guardian and believe your child has provided us with personal information, please contact us.
					</p>
				</section>

				<!-- Changes to This Policy -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Changes to This Privacy Policy</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page and updating the "Last updated" date.
					</p>
					<p class="text-gray-700 leading-relaxed">
						You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.
					</p>
				</section>

				<!-- Contact Us -->
				<section class="mb-6 sm:mb-8">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Contact Us</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						If you have any questions about this Privacy Policy, please contact us:
					</p>
					<div class="bg-brand-50 border border-brand-200 rounded-lg p-4 sm:p-6">
						<p class="text-gray-800 font-semibold mb-2">Inna Tarasyan</p>
						<p class="text-gray-700">Web Developer</p>
						<p class="text-gray-700 mt-2">
							Please reach out through the contact information provided in the footer of our website.
						</p>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
@endsection




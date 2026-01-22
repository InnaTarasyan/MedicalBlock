@extends('layouts.app')

@section('title', 'Terms of Use - MedicalBlock')

@section('breadcrumbs')
	<a href="{{ route('blog.index') }}" class="hover:underline">Home</a>
	<span class="mx-1">/</span>
	<span>Terms of Use</span>
@endsection

@section('content')
<div class="max-w-4xl mx-auto">
	<div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
		<!-- Header -->
		<div class="bg-gradient-to-r from-brand-600 to-brand-700 px-6 sm:px-8 lg:px-10 py-8 sm:py-10">
			<h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-3">Terms of Use</h1>
			<p class="text-brand-100 text-base sm:text-lg">Last updated: {{ date('F d, Y') }}</p>
		</div>

		<!-- Content -->
		<div class="px-6 sm:px-8 lg:px-10 py-8 sm:py-10 lg:py-12">
			<div class="prose prose-lg max-w-none">
				<!-- Introduction -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Introduction</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						Welcome to MedicalBlock. These Terms of Use govern your access to and use of our website. By accessing or using our website, you agree to be bound by these Terms of Use.
					</p>
					<p class="text-gray-700 leading-relaxed">
						If you do not agree with any part of these terms, please do not use our website.
					</p>
				</section>

				<!-- Acceptance of Terms -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Acceptance of Terms</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						By accessing and using this website, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.
					</p>
				</section>

				<!-- Use License -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Use License</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						Permission is granted to temporarily access the materials on MedicalBlock's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
					</p>
					<ul class="list-disc pl-6 space-y-2 text-gray-700">
						<li>Modify or copy the materials</li>
						<li>Use the materials for any commercial purpose or for any public display (commercial or non-commercial)</li>
						<li>Attempt to decompile or reverse engineer any software contained on the website</li>
						<li>Remove any copyright or other proprietary notations from the materials</li>
						<li>Transfer the materials to another person or "mirror" the materials on any other server</li>
					</ul>
					<p class="text-gray-700 leading-relaxed mt-4">
						This license shall automatically terminate if you violate any of these restrictions and may be terminated by MedicalBlock at any time.
					</p>
				</section>

				<!-- Content Usage -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Content Usage and Intellectual Property</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						All content on this website, including but not limited to text, graphics, logos, images, and software, is the property of MedicalBlock or its content suppliers and is protected by copyright and other intellectual property laws.
					</p>
					<div class="bg-amber-50 border border-amber-200 rounded-lg p-4 sm:p-6 my-4">
						<p class="text-gray-800 font-semibold mb-2">⚠️ Important Notice</p>
						<p class="text-gray-700">
							We kindly ask that you do not use or share information from this site without first reaching out to the author. If you have questions or would like to use any content, please contact <strong>Inna Tarasyan</strong>—we're always happy to connect!
						</p>
					</div>
				</section>

				<!-- Disclaimer -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Medical Disclaimer</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						The information on this website is provided for general informational purposes only and is not intended as medical advice, diagnosis, or treatment. Always seek the advice of your physician or other qualified health provider with any questions you may have regarding a medical condition.
					</p>
					<div class="bg-red-50 border border-red-200 rounded-lg p-4 sm:p-6 my-4">
						<p class="text-red-800 font-semibold mb-2">🚨 Medical Emergency</p>
						<p class="text-red-700">
							If you think you may have a medical emergency, call your doctor or emergency services immediately. Do not rely on information from this website for emergency medical situations.
						</p>
					</div>
					<p class="text-gray-700 leading-relaxed">
						Never disregard professional medical advice or delay in seeking it because of something you have read on this website.
					</p>
				</section>

				<!-- Limitations -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Limitations</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						In no event shall MedicalBlock or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on MedicalBlock's website, even if MedicalBlock or a MedicalBlock authorized representative has been notified orally or in writing of the possibility of such damage.
					</p>
				</section>

				<!-- Accuracy of Materials -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Accuracy of Materials</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						The materials appearing on MedicalBlock's website could include technical, typographical, or photographic errors. MedicalBlock does not warrant that any of the materials on its website are accurate, complete, or current.
					</p>
					<p class="text-gray-700 leading-relaxed">
						MedicalBlock may make changes to the materials contained on its website at any time without notice. However, MedicalBlock does not make any commitment to update the materials.
					</p>
				</section>

				<!-- Links -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Links</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						MedicalBlock has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by MedicalBlock of the site.
					</p>
					<p class="text-gray-700 leading-relaxed">
						Use of any such linked website is at the user's own risk.
					</p>
				</section>

				<!-- Modifications -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Modifications</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						MedicalBlock may revise these Terms of Use at any time without notice. By using this website, you are agreeing to be bound by the then current version of these Terms of Use.
					</p>
				</section>

				<!-- Governing Law -->
				<section class="mb-8 sm:mb-10">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Governing Law</h2>
					<p class="text-gray-700 leading-relaxed">
						These terms and conditions are governed by and construed in accordance with applicable laws, and you irrevocably submit to the exclusive jurisdiction of the courts in that location.
					</p>
				</section>

				<!-- Contact Information -->
				<section class="mb-6 sm:mb-8">
					<h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">Contact Information</h2>
					<p class="text-gray-700 leading-relaxed mb-4">
						If you have any questions about these Terms of Use, please contact us:
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


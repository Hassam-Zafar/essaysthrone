@extends('frontend.layouts.app')

@section('title')
{{ $pages->meta_title ?? "Terms & Conditions" }}
@endsection

@section('description')
{{ $pages->meta_description ?? "Terms & Conditions" }}
@endsection

@section('tags')
{{ isset($pages->tags) ? json_decode($pages->tags) :  "Terms & Conditions" }}
@endsection

@section('page_main_heading')
TERMS & CONDITIONS
@endsection

@push('custom-styles')
<link rel="stylesheet" href="{{ asset('frontend/assets/cssn/static.css') }}">
<style type="text/css">
	p {
		font-size: 14px; 
	}
</style>
@endpush

@section('content')

<div class="acd_section static-pages">
	<div class="container">

		<h2 class="black">TERMS &amp; CONDITIONS</h2>
		<p>Please read these Terms and Conditions (“Terms” and/or “Terms and Conditions”) carefully before using the thiswebsite (“Website”).</p>
		<h2 class="black"> INTRODUCTION </h2>
		<p>Your access to and use of Website are conditioned on your full acceptance and compliance with these Terms and Conditions and this Website Privacy Policy, which are published at this website and which are incorporated herein by reference (“Privacy Policy”). These Terms and Conditions and Privacy Policy are applied to all visitors, users and others who access or use this Website.</p>

		<p>By accessing or using this Website, you agree to be bound by these Terms and Conditions and Privacy Policy. If you disagree with these Terms and Conditions and/or Privacy Policy or any part of them, you must not use this Website.</p>

		<p>Capitalized terms defined in these Terms and Conditions shall have no other meaning but set forward in this section. The following terminology is applied to these Terms and Conditions, Privacy Policy and Refund and Revision Policy: “Client”, “You” and “Your” refers to you, the person accessing this Website and accepting these Terms and Conditions. “We”, “Us” and “Ourselves” refers to this website. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.
		</p>

		<h2 class="black">ELIGIBILITY </h2>
		<p>By using our Services, you represent and warrant that (a) all registration information you submit to this website is truthful and accurate; (b) you will maintain the accuracy of such information; (c) you are 18 years of age or older and/or have full legal capacity to enter into legally binding relations; and (d) your use of the Services does not violate any applicable law, regulation, and/or your college/university/school rules.</p>

		<p>Your profile may be deleted and Services provided to you may be terminated without warning, if we believe that you are less than 18 years of age and/or do not have full legal capacity to enter into legally binding relations.</p>

		<h2 class="black"> PROVIDED SERVICES </h2>
		<p>Subjected to full compliance with these Terms and Conditions, this website shall provide academic writing services as described more fully on the Website (“Services”).</p>

		<p>Services may include, but not be limited to, providing our Clients with dissertations, research papers, book reports, term papers, and other types of assignments written by this website team (“Paper”) which are intended for research/reference purposes and for your personal use only. Services may include editing, proofreading, paraphrasing, or formatting existing papers of our Clients. Please note that rewriting an existing paper that contains 40% or more plagiarized content may qualify as providing you with a custom Paper and shall be charged for accordingly.</p>

		<p>Please note that Services may be provided only to the users who submit an appropriate order form at the Website and this website may charge fees for such Services. The Services are provided according to the provisions of these Terms and Conditions and the specific commercial provisions and policies (including Privacy Policy, Refund Policy, etc.) as detailed on the Website, and these provisions and policies may be amended or changed from time to time.</p>

		<p>The format of the Papers we provide:</p>
		<p>
			12 point Times New Roman;<br>
			Bibliography on a separate page;<br>
			Double-spaced;<br>
			MS Word file;<br>
			Approximately 250 words per page;<br>
			One inch margin top, bottom, left, right;<br>
			Title and Reference pages are free of charge<br>
			In case Client needs a single-spaced Paper they are to pay a double fee. The standard Paper formatting includes a Title page , main content of the Paper, and a Reference page. Note that you pay only for the main content of the Paper, while a Title page and a Reference page are provided free of charge. this website reserves the right to use any relevant materials available, such as books, journals, newspapers, interviews, online publications, etc., unless the Client indicates some specific sources to be used.
		</p>

		<h2 class="black"> PLACING AN ORDER </h2>
		<p>When placing your order, you must provide accurate and complete information. You are solely responsible for any possible consequences and misunderstandings, in case you provide us with inaccurate and/or incorrect and/or unfaithful information. Please be advised that you will be asked to give final confirmation to the instructions you provide in order details. Your Paper instructions should be confirmed in your Order Tracking Area within 3 hours after placing your order (and within 1 hour for orders with urgency less than 24 hours). Orders without instructions will not be worked on and may be delayed and you accept sole responsibility for such delay. this website guarantees that the delivered Paper will meet only confirmed requirements. You must not change the instructions once you have confirmed them. Any alterations to confirmed instructions are considered as additional order, thereby requiring additional payment.</p>


		<h2 class="black">PAYMENT</h2>
		<p>All payments are due upon receipt. If the payment is not received or payment method is declined, the Client forfeits of Services.</p>

		<p>All fees are exclusive of all taxes and/or levies, and/or duties imposed by taxing authorities, and you shall be responsible for payment of all such taxes and/or levies, and/or duties. You agree to pay any such taxes that might be applicable to your use of the Services and payments made by you under these Terms.</p>

		<p>If at any time you contact your bank or credit card company and decline or otherwise reject the charge of any payment, this act will be considered as a breach of your obligation hereunder and your use of the Services will be automatically terminated. Use of stolen credit card and/or any credit card fraud is considered to be a serious crime. this website closely cooperates with our payment provider to prevent and fight online fraud. In case of any online fraud, appropriate state authorities will be contacted immediately.</p>

		<p>By doing a chargeback, you agree to give up all your rights to the Paper automatically. At the same time, you authorize this website to publish the completed Paper and start the authorship procedure that will allow us to determine if you have used any parts of the Paper. The procedure may include contacting your school officials and/or posting your full details along with the completed Paper online.</p>

		<p>this website reserves the right to change its prices at any time in its sole discretion and such changes or modifications shall be posted online at the Website and become effective immediately without need for further notice to any Client and/or user.</p>

		<h2 class="black">DISCOUNT POLICY</h2>
		<p>We care about our Clients and are always looking for ways to offer them the best value for money. One method we use is a discount system. this website, at its sole discretion, shall have the right to provide our Clients with discount programs as described more fully and published on the Website.</p>

		<h2 class="black">REFUNDS</h2>
		<p>this website will issue a refund to you only according to these Terms. this website offers a 14-day money back period for Papers less than 20 pages and a 30-day period for Papers more than 20 pages (”Refund Period”). Refund Period begins on the date of Client`s order deadline and expires on the last day of the Refund Period. In case you are not satisfied with any of the Services, you can submit a refund request according to these Terms within the Refund Period. Once the Refund Period elapses, this website will not refund any amounts paid. Refund period can be extended to 180 days in exceptional cases if plagiarism is confirmed.</p>

		<p>Should the Client's order be canceled by Website at the halfway point to the Client's deadline or later, Client is entitled to a 30% refund or a 100% compensation to the Bonus Balance. In the event of order cancellation, the funds will be debited back only to the account of the initial payment within 5-7 business days from the time of cancellation request.</p>

		<p>In other case this website assesses refund requests on a case-by-case basis as there are usually unique reasons as to why a refund request is made. Please note that if you request a refund, we may require documented proof that the quality of your order is low (e.g., scan copy of your instructor’s feedback, plagiarism report, etc.). Should you feel it necessary to make a refund request, we will immediately forward your order to our Quality Assurance Department. After comparing their findings with the reasons for dissatisfaction, the necessary corrective actions will be taken. Any refund request must be made within the Refund Period.</p>

		<p>In case this website reimburses the money because of mistakes or some irrelevance to the initial instructions, our Quality Assurance Department, at its sole discretion, evaluates the quality of the Paper and refunds an amount comparable to the percentage of incorrect content in the Paper and mistakes present in it.</p>

		<p>this website provides various methods of contact (i.e. email, telephone, message board, and live chat) to facilitate communication between you, us and the writer assigned to complete an order. Using any of these methods, our Customer Support Center is available to you at any time and will respond to any refund request or other issue promptly. However, if such a request is not received using any of the aforementioned methods within the Refund Period, this website will not be obliged to honor or consider the above said request.</p>

		<p>Should the Paper delivery be delayed due to unexpected circumstances, from the side of this website, we may provide compensation for the breach of the order deadline in the form of a credit or a discount to be used towards your next order with us. Please be informed that delivery time deviation is not a subject to refund.</p>

		<h2 class="black">REVISIONS</h2>
		<p>Any revision request or complaint in regards to a Paper that this website has provided must be made within the revision period (“Revision Period”). this website offers a 14-day Revision Period for Papers less than 20 pages and a 30-day period for Papers more than 20 pages. Revision Period begins on the date of Client`s order deadline and expires on the last day of the Revision Period. After that point, no revision and/or complaint will be accepted. Revision period can be extended to 180 days in exceptional cases if plagiarism is confirmed.</p>

		<p>this website recognizes that orders vary in size and complexity; as a result, dissertation, thesis and/or other sufficiently large assignment may be granted 30-day Revision Period. Sufficiency in the size of the Paper will be determined by this website in its sole discretion.</p>

		<p>In case a request for revision is not submitted within the Revision Period, this website tacitly accepts that the Client is satisfied with the Paper and requires no further actions to be taken in regards to the Paper unless extra payment is provided or a new order is placed.</p>

		<p>Upon receiving your completed assignment you are entitled to a free revision should the Paper fail to meet your instructions or defined the requirements in any way. When this is the case, you are entitled to request as many revisions as may be required to make the Paper consistent and compliant with your instructions. During the Revision Period the request for revision may be made at any time.</p>

		<p>All revisions must be based on the original order instructions. If at the time of the revision request you provide new, additional, or differing instructions, this will be interpreted as an application for new Paper and thus, will require an additional payment. Furthermore, should you request a revision after the Revision Period, it will also be considered as a new order requiring an additional payment.</p>


		<h2 class="black">VERIFICATION</h2>
		<p>We may require you to supply us with personal identifying information, and we may also legally consult other sources to obtain information about you. By accepting these Terms and Conditions, you authorize us to make any inquiries we consider necessary to validate the information that you provide us with. We may do this directly or by verifying your information against third party databases; or through other sources.</p>

		<p>Essentially, verification procedure involves, inter alia, confirming that the order is authentic and that the cardholder is aware of charges by placing a phone call to them, and in certain cases by requesting some additional documents to be submitted for verification to our Risk Department. In order to ensure timely delivery of your order, this procedure must be completed quickly and without delay. Therefore, it is vital to provide accurate and valid phone numbers. Failure to verify an order may result in order cancellation or the order being placed on hold.</p>

		<p>You consent to our processing your personal information for the purposes of providing the Services, including for verification purposes as set out herein. You also consent to the use of such data for communicating with you, for statutory and accounting purposes. You acknowledge that you have read and consented to this website's Privacy Policy.</p>


		<h2 class="black">LIMITATIONS OF LIABILITY</h2>
		<p>this website will not be liable to you in relation to the contents of, the use of, or otherwise in connection with, this Website:</p>

		<p>for failure to learn the material covered by the Paper; and<br>
			for your final grade; and<br>
			for the outcome or consequences of submission the Paper to any academic institution; and<br>
		excludes all liability for damages arising out of or in connection with your use of this Website. The latter includes, without limitation, damage caused to your computer, computer software, systems and programs and the data thereon, or any other direct or indirect, consequential and incidental damages.</p>


		<h2 class="black">COPYRIGHT</h2>

		<p>The Paper provided to you by this website remains our property and is the subject to copyright and other intellectual property rights under local and international laws conventions.</p>

		<p>The Paper is intended for your personal use only and it may not be used, copied, reproduced, distributed, transmitted, broadcast, displayed, sold, licensed, or otherwise exploited for any other purposes without our prior written consent.</p>

		<p>You agree not to engage in the use, copying, or distribution of Papers other than expressly permitted herein.</p>


		<h2 class="black">TESTIMONIALS</h2>

		<p>We post Clients` testimonials on our Website which may contain personal information (first name or initials). Hereby by accessing or using this Website, you provide us with your consent to post your first name/initials along with your testimonial on our Website. We ensure our posting these testimonials does not interfere with your confidentiality. If you wish to request the removal of your testimonial, you may email the support staff.</p>

		<h2 class="black">NOTIFICATION OF CHANGES</h2>
		<p>this website reserves the right to change these Terms and Conditions at any time and your continued use of the Website will signify your acceptance of any adjustment, improvements and/or alterations to these Terms and Conditions. You are, therefore, advised to re-read these Terms and Conditions on a regular basis.</p>
	</div>
</div>

<div class="row pilt">
	<div class="col-md-12 bottom">
		<div class="trusted">
			<div class="card p-0">
				<div class="card-body">
					<div class="trust_customers">
						<div class="__head">
							<h3 class="_gbl___head">
								Trusted by <span class="___ghead">14,000+</span> happy <br>
								customers and experts
							</h3>
						</div>
						<div class="trust_poilot">
							<img src="{{ asset('frontend/assets/images/reviews.png') }}">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection
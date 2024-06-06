@extends('layout.root')
@section('content')
	<main class="h-screen flex flex-col justify-between font-tiroBangla">
		<header class="pt-5 sm:pb-10 md:pb-16 px-[15px] md:px-0">
			<div class="container mx-auto">
				<div class="flex items-center justify-between">
					<a href="{{ url('/') }}">
						<img class="h-24" draggable="false" src="{{ asset('logo.png') }}" alt="Logo">
					</a>
					<h1 class="text-4xl font-tiroBangla font-bold hidden sm:block">বঙ্গবন্ধু ভার্চুয়াল ট্যুর</h1>
					<img class="h-16" draggable="false" src="{{ asset('ict.svg') }}" alt="ICT Logo">
				</div>
			</div>
		</header>
		<section class="px-[15px] md:px-0 pb-10 md:pb-16 lg:pb-20">
			<h2 class="text-3xl font-tiroBangla font-bold py-5 text-center block sm:hidden">বঙ্গবন্ধু ভার্চুয়াল ট্যুর</h2>
			<div class="container mx-auto">
				<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5">
					<button data-modal-target="dhanmondi" data-modal-toggle="dhanmondi" class="card_wrap_style">
						<img src="{{ asset('dhanmondi.jpeg') }}" draggable="false" class="card_wrap_image" alt="Dhanmondi 32">
						<div class="p-5 text-center">
							<h2 class="card_wrap_text">স্মৃতি জাদুঘর</h2>
						</div>
					</button>
					<a href="https://etldev.xyz/bvr/suhrawardy-en/" target="_blank" class="card_wrap_style">
						<img src="{{ asset('suhrawardy.jpeg') }}" draggable="false" class="card_wrap_image" alt="suhrawardy">
						<div class="p-5 text-center">
							<h2 class="card_wrap_text">সোহরাওয়ার্দী উদ্যান</h2>
						</div>
					</a>
					<button data-modal-target="backerHostel" data-modal-toggle="backerHostel" class="card_wrap_style">
						<img src="{{ asset('backer_hostel.jpeg') }}" draggable="false" class="card_wrap_image" alt="Backer Hostel">
						<div class="p-5 text-center">
							<h2 class="card_wrap_text">বেকার হোস্টেল</h2>
						</div>
					</button>
					<a href="https://etldev.xyz/bvr/tungipara-en/" target="_blank" class="card_wrap_style">
						<img src="{{ asset('tungipara.jpeg') }}" draggable="false" class="card_wrap_image" alt="tungipara">
						<div class="p-5 text-center">
							<h2 class="card_wrap_text">টুঙ্গিপাড়া</h2>
						</div>
					</a>
					<button data-modal-target="chengchhariVillage" data-modal-toggle="chengchhariVillage" class="card_wrap_style">
						<img src="{{ asset('chengchhari.jpeg') }}" draggable="false" class="card_wrap_image" alt="Chengchhari">
						<div class="p-5 text-center">
							<h2 class="card_wrap_text">চেংছড়ি গ্রাম, উখিয়া</h2>
						</div>
					</button>
				</div>
			</div>
		</section>
		<footer class="px-[15px] md:px-0 text-center w-full pb-5">
			<p>
				Copyright © <script>
						document.write(new Date().getFullYear())
					</script>, All rights reserved <br> Developed by:
				<a href="https://www.etl.com.bd/" target="_blank">
					<img src="https://virtualtour.halftimefpl.xyz/images/SDMGA_Logo_1.png" alt="ezzetech" class="h-8 text-center inline-block">
				</a>
			</p>
		</footer>
	</main>


  	<!-- Dhanmondi 32 Modal -->
	<div id="dhanmondi" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
		<div class="relative p-4 w-full max-w-xl max-h-full">
			<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
				<div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
					<h3 class="modal_heading_text">
						স্মৃতি জাদুঘর বাংলা এবং ইংরেজী ভাষায় ভার্চুয়াল ট্যুর!
					</h3>
					<button type="button" class="modal_close_button hover:bg-primary" data-modal-hide="dhanmondi">
						<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
						</svg>
						<span class="sr-only">Close modal</span>
					</button>
				</div>
				<!-- Modal body -->
				<div class="p-4 md:p-5 space-y-4">
					<div class="grid grid-cols-2 items-center gap-5 justify-center">
						<a href="https://etldev.xyz/bvr/memorial-museum-bn/" target="_blank" class="modal_link_style hover:text-primary">
							স্মৃতি জাদুঘর বাংলা ভাষায় ভার্চুয়াল ট্যুর শুরু করুন!
						</a>
						<a href="https://etldev.xyz/bvr/memorial-museum-en/" target="_blank" class="modal_link_style hover:text-primary">
							স্মৃতি জাদুঘর ইংরেজী ভাষায় ভার্চুয়াল ট্যুর শুরু করুন!
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- Backer Hostel Modal --}}
	<div id="backerHostel" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
		<div class="relative p-4 w-full max-w-xl max-h-full">
			<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
				<div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
					<h3 class="modal_heading_text">
						বেকার হোস্টেল বাংলা এবং ইংরেজী ভাষায় ভার্চুয়াল ট্যুর!
					</h3>
					<button type="button" class="modal_close_button hover:bg-primary" data-modal-hide="backerHostel">
						<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
						</svg>
						<span class="sr-only">Close modal</span>
					</button>
				</div>
				<!-- Modal body -->
				<div class="p-4 md:p-5 space-y-4">
					<div class="grid grid-cols-2 items-center gap-5 justify-center">
						<a href="https://etldev.xyz/bvr/baker-hostel-bn/" target="_blank" class="modal_link_style hover:text-primary">
							বেকার হোস্টেল বাংলা ভাষায় ভার্চুয়াল ট্যুর শুরু করুন!
						</a>
						<a href="https://etldev.xyz/bvr/baker-hostel-en/" target="_blank" class="modal_link_style hover:text-primary">
							বেকার হোস্টেল ইংরেজী ভাষায় ভার্চুয়াল ট্যুর শুরু করুন!
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- Chengchhari Village Modal --}}
	<div id="chengchhariVillage" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
		<div class="relative p-4 w-full max-w-xl max-h-full">
			<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
				<div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
					<h3 class="modal_heading_text">
						চেংছড়ি গ্রাম বাংলা এবং ইংরেজী ভাষায় ভার্চুয়াল ট্যুর!
					</h3>
					<button type="button" class="modal_close_button hover:bg-primary" data-modal-hide="chengchhariVillage">
						<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
						</svg>
						<span class="sr-only">Close modal</span>
					</button>
				</div>
				<!-- Modal body -->
				<div class="p-4 md:p-5 space-y-4">
					<div class="grid grid-cols-2 items-center gap-5 justify-center">
						<a href="https://etldev.xyz/bvr/chengchhari-bn/" target="_blank" class="modal_link_style hover:text-primary">
							চেংছড়ি গ্রাম বাংলা ভাষায় ভার্চুয়াল ট্যুর শুরু করুন!
						</a>
						<a href="https://etldev.xyz/bvr/chengchhari-en/" target="_blank" class="modal_link_style hover:text-primary">
							চেংছড়ি গ্রাম ইংরেজী ভাষায় ভার্চুয়াল ট্যুর শুরু করুন!
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

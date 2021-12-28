@extends('laraboots5::layouts.app')
@section('content')
<div class="container">
	<h1>Alert</h1>
	<h5 class="fw-light">Biasa digunakan untuk notifikasi pesan, sama seperti di <a href="https://getbootstrap.com/docs/5.0/components/alerts/">Bootstarp Alert</a>, tetapi yang ini mendapatkan tambahan fungsi untuk memudahkan menerima pesan kesalahan dan pesan kilat.</h5>	

	{{-- Event Listener --}}
	<section class="mt-4">
		<h3>Event Listener</h3>
		<p >Memudahkan saat menerima <a href="https://laravel.com/docs/8.x/validation#working-with-error-messages" target="_blank">Error Message</a> atau <a href="https://laravel.com/docs/8.x/session#flash-data" target="_blank">Flash Session</a> dari Laravel, anda hanya perlu menambahkan satu attribute untuk menghandle event tersebut, dimana <code>error</code> untuk error message dan <code>flash-message</code> untuk Flash session.</p>
		<span>demo penggunaan:</span>
		<div class="rounded border p-4">
			{{-- Alert with Error handle--}}
			<x-lb5-alert error="error-demo" type="danger" />
				
			{{-- Alert with Flash Message handle --}}
			<x-lb5-alert flash-message="flash-demo" type="success" />

			<div class="row justify-content-center mt-3">
				<div class="col">
					{{-- Form Error --}}
					<x-lb5-form action="{{ route('error') }}">
						<button class="btn btn-primary" type="submit">Test Error Alert</button>
					</x-lb5-form>
				</div>
				<div class="col">
					{{-- Form Flash Message --}}
					<x-lb5-form action="{{ route('flash') }}">
						<button class="btn btn-primary" type="submit">Test Flash Message Alert</button>
					</x-lb5-form>
				</div>
			</div>
		</div>
		{{-- Code --}}
		<div class="bg-light">
			<pre>{{ '<!-- Alert Error Message -->' }}&#10;&lt;{{ 'x-lb5-alert error="error-demo" type="danger" />'}}&#10;&#10;{{ '<!-- Alert Flash Message -->' }}&#10;&lt;{{ 'x-lb5-alert flash-message="flash-demo" type="success" />'}}</pre>
		</div>
	</section>




	{{-- Warna --}}
	<section class="mt-4">
		<h3>Warna</h3>
		<div class="rounded border p-4">
			{{-- Alert Basic --}}
			<x-lb5-alert>A simple primary alert—check it out!</x-lb5-alert>
			<x-lb5-alert type="secondary">A simple secondary alert—check it out!</x-lb5-alert>
			<x-lb5-alert type="success">A simple success alert—check it out!</x-lb5-alert>
			<x-lb5-alert type="danger">A simple danger alert—check it out!</x-lb5-alert>
			<x-lb5-alert type="warning">A simple warning alert—check it out!</x-lb5-alert>
			<x-lb5-alert type="info">A simple info alert—check it out!</x-lb5-alert>
			<x-lb5-alert type="light">A simple light alert—check it out!</x-lb5-alert>
			<x-lb5-alert type="dark">A simple dark alert—check it out!</x-lb5-alert>
		</div>
			
		{{-- Code --}}
		<div class="bg-light">
			<pre>&lt;{{ 'x-lb5-alert>A simple primary alert—check it out!</x-lb5-alert' }}&gt;&#10;&lt;{{ 'x-lb5-alert type="secondary">A simple secondary alert—check it out!</x-lb5-alert' }}&gt;&#10;&lt;{{ 'x-lb5-alert type="success">A simple success alert—check it out!</x-lb5-alert' }}&gt;&#10;&lt;{{ 'x-lb5-alert type="danger">A simple danger alert—check it out!</x-lb5-alert' }}&gt;&#10;&lt;{{ 'x-lb5-alert type="warning">A simple warning alert—check it out!</x-lb5-alert' }}&gt;&#10;&lt;{{ 'x-lb5-alert type="info">A simple info alert—check it out!</x-lb5-alert' }}&gt;&#10;&lt;{{ 'x-lb5-alert type="light">A simple light alert—check it out!</x-lb5-alert' }}&gt;&#10;&lt;{{ 'x-lb5-alert type="dark">A simple dark alert—check it out!</x-lb5-alert' }}&gt;</pre>
		</div>
	</section>

	{{-- Header --}}
	<section class="mt-3">
		<h3>Header</h3>
		<div class="rounded border p-4">
			<x-lb5-alert head="Header Alert" type="success">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid dicta, atque ducimus accusantium, ratione eius voluptatum eveniet libero quos exercitationem nisi, repellendus mollitia illo rerum perferendis nulla saepe nihil reiciendis!</p>
				<hr>
				<small>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</small>
			</x-lb5-alert>
		</div>
		{{-- Code --}}
		<div class="bg-light">
			<pre>&lt;{{ 'x-lb5-alert head="Header Alert" type="success">'}}&#10;{{'	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid dicta, atque ducimus accusantium, ratione eius voluptatum eveniet libero quos exercitationem nisi, repellendus mollitia illo rerum perferendis nulla saepe nihil reiciendis!</p>'}}&#10;{{'	<hr>'}}&#10;{{'	<small>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</small>'}}&#10;{{'</x-lb5-alert'}}&gt;</pre>
		</div>
	</section>

	{{-- Close Button --}}
	<section class="mt-3">
		<h3>Close button</h3>
		<div class="rounded border p-4">
			<x-lb5-alert close="true">Alert dengan close button</x-lb5-alert>
		</div>
		{{-- Code --}}
		<div class="bg-light">
			<pre>&lt;{{ 'x-lb5-alert close="true">Alert dengan close button</x-lb5-alert'}}&gt;</pre>
		</div>
	</section>

</div>
@endsection
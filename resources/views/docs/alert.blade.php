@extends('laraboots5::layouts.app')
@section('content')
<div class="container">
	<h1>Alert</h1>
	<p>Component Form seperti <code>&lt;input&gt; &lt;textarea&gt;</code> yang diringkas dengan pemakaian sangat mudah. dokumentasi dari <a href="https://getbootstrap.com/docs/5.0/forms/form-control/">bootstarp form</a> </p>


	<section class="mt-4">
		<h3>Examples</h3>
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
		<div class="">
			<h5>Atribute tambahan</h5>
			<ul>
				<li>
					<code>validation="true"</code> secara otomatis akan menambahkan <code>is-invalid</code> class dan menampilkan pesan kesalahan disaat menerima error dari Laravel
				</li>
				<li>
					<code>old="true"</code> akan menyimpan nilai lama saat terjadi validasi error dari Laravel
				</li>
				<li>
					<code>label="text.."</code> menambahkan label input jika didefinisikan
				</li>
			</ul>
		</div>
		<p>Semua attribute yang biasa digunakan di <code>&lt;input&gt;</code> bisa tetap digunakan dan attribute yang ditambahkan</p>
	</section>

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

	{{-- Alert with Error handle--}}
	<x-lb5-alert 
		error="error-demo" 
		type="danger" 
		/>
		
	{{-- Alert with Flash Message handle --}}
	<x-lb5-alert 
		flash-message="flash-demo"
		type="success" 
		/>
	
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
@endsection
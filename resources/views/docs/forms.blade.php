@extends('laraboots5::layouts.app')
@section('content')
<div class="container">
	<h1>Forms</h1>
	<p>Component Form seperti <code>&lt;input&gt; &lt;textarea&gt;</code> yang diringkas dengan pemakaian sangat mudah. dokumentasi dari <a href="https://getbootstrap.com/docs/5.0/forms/form-control/">bootstarp form</a> </p>

	{{-- Input --}}
	<section class="mt-4">
		<h3>Input</h3>
		<form action="{{ url('docs/forms') }}" method="POST">
			@csrf
			<div class="border rounded p-4">
				<x-lb5-input label="Label input" required name="test" id="label-input" placeholder="Ketik sesuatu..." validation="true" />
				<button class="btn btn-primary">Test</button>
			</div>	
		</form>
		{{-- Code --}}
		<div class="bg-light">
			<pre>&lt;{{ 'x-lb5-input label="Label input" required name="test" id="label-input" placeholder="Ketik sesuatu..." validation="true" />' }}</pre>
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

	{{-- Input Group --}}
	<section class="mt-4">
		<h3>Input Group</h3>
		<div class="border rounded p-4">
			<x-lb5-input-group label="Input group default" addon-text="Awal" placeholder="Input Group Default" />
			<x-lb5-input-group label="Input group position after" addon-text="Akhir" addon-position="after" placeholder="Input Group addon position" />
			<x-lb5-input-group label="Input group custom" placeholder="Input Group Button addon">
				<button class="btn btn-success">Kirim</button>
			</x-lb5-input-group>
			<x-lb5-input-group label="Input group custom" addon-position="after" placeholder="Input Group Button addon">
				<button class="btn btn-success">Kirim</button>
			</x-lb5-input-group>
		</div>	
		{{-- Code --}}
		<div class="bg-light">
			<pre>&lt;{{ 'x-lb5-input-group label="Input group default" addon-text="Awal" placeholder="Input Group Default" />' }}&#10;&#10;&lt;{{ 'x-lb5-input-group label="Input group position after" addon-text="Akhir" addon-position="after" placeholder="Input Group addon position" />' }}&#10;&#10;&lt;{{ 'x-lb5-input-group label="Input group custom" placeholder="Input Group Button addon">' }}&#10;{{ '	<button class="btn btn-success">Kirim</button>' }}&#10;&lt;{{ '/x-lb5-input-group>' }}&#10;&#10;&lt;{{ 'x-lb5-input-group label="Input group custom" addon-position="after" placeholder="Input Group Button addon">' }}&#10;{{ '	<button class="btn btn-success">Kirim</button>' }}&#10;&lt;{{ '/x-lb5-input-group>' }}</pre>
		</div>
		<div class="">
			<h5>Atribute tambahan</h5>
			<ul>
				<li>
					<code>validation="true"</code> secara otomatis akan menambahkan <code>is-invalid</code> class disaat menerima error dari laravel <code>withErrors()</code>
				</li>
				<li>
					<code>old="true"</code> secara otomatis akan mengaktifkan fitur <code>old()</code>
				</li>
				<li>
					<code>label="text.."</code> menambahkan label input jika didefinisikan
				</li>
			</ul>
		</div>
		<p>Semua attribute yang biasa digunakan di <code>&lt;input&gt;</code> bisa tetap digunakan dan attribute yang ditambahkan</p>
	</section>



</div>
@endsection
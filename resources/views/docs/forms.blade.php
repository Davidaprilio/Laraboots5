<x-lbdocs-page title="Forms">

	<x-bs-form action="/">
		<x-bs-form.input label="Phone" name="phone" />

		<x-bs-button>Kirim</x-bs-button>
	</x-bs-form>




	<p>
		Component Form seperti <x-bs-code code="<input> <textarea>" /> yang diringkas dengan pemakaian sangat mudah.
		dokumentasi dari 
		<a href="https://getbootstrap.com/docs/5.0/forms/form-control/">bootstarp form</a> 
	</p>

	
	@php
		$codes = [
			'<x-bs-input label="Label input" required name="form1" id="label-input" placeholder="Ketik sesuatu..." validation="true" />',
			'<x-bs-textarea label="Label textarea" required name="form2" id="label-textarea" validation="true" />',
		]
	@endphp
	<x-lbdocs-section title="Input" :codes="$codes">
		@slot('preview')
		<form action="{{ url('docs/form') }}" method="POST">
			@csrf
			<div class="border rounded p-4">
				<x-bs-input label="Label input" required name="form1" id="label-input" placeholder="Ketik sesuatu..."
					validation="true" />
				<x-bs-textarea label="Label textarea" required name="form2" id="label-textarea" validation="true" />
				<button class="btn btn-primary">Test</button>
			</div>
		</form>
		@endslot
		
		@slot('bottom')	
		<div class="">
			<h5>Atribute tambahan</h5>
			<ul>
				<li>
					<code>validation="true"</code> secara otomatis akan menambahkan <code>is-invalid</code> class dan
					menampilkan pesan kesalahan disaat menerima error dari Laravel
				</li>
				<li>
					<code>old="true"</code> akan menyimpan nilai lama saat terjadi validasi error dari Laravel
				</li>
				<li>
					<code>label="text.."</code> menambahkan label input jika didefinisikan
				</li>
			</ul>
		</div>
		<p>Semua attribute yang biasa digunakan di <code>&lt;input&gt;</code> bisa tetap digunakan dan attribute yang
			ditambahkan</p>
		@endslot
	</x-lbdocs-section>

	@php
		$codes = [
			'<x-bs-input-group label="Input group default" addon-text="Awal" placeholder="Input Group Default" />',
			'',
			'<x-bs-input-group label="Input group position after" addon-text="Akhir" addon-position="after"',
			'	placeholder="Input Group addon position" />',
			'',
			'<x-bs-input-group label="Input group custom" placeholder="Input Group Button addon">',
			'	<button class="btn btn-success">Kirim</button>',
			'</x-bs-input-group>',
			'',
			'<x-bs-input-group label="Input group custom" addon-position="after" placeholder="Input Group Button addon">',
			'	<button class="btn btn-success">Kirim</button>',
			'</x-bs-input-group>',
		]
	@endphp
	<x-lbdocs-section title="Input Group" :codes="$codes">
		@slot('preview')
		<x-bs-input-group label="Input group default" addon-text="Awal" placeholder="Input Group Default" />
		<x-bs-input-group label="Input group position after" addon-text="Akhir" addon-position="after"
			placeholder="Input Group addon position" />
		<x-bs-input-group label="Input group custom" placeholder="Input Group Button addon">
			<button class="btn btn-success">Kirim</button>
		</x-bs-input-group>
		<x-bs-input-group label="Input group custom" addon-position="after" placeholder="Input Group Button addon">
			<button class="btn btn-success">Kirim</button>
		</x-bs-input-group>
		@endslot
		@slot('bottom')
		<div class="">
			<h5>Atribute tambahan</h5>
			<ul>
				<li>
					<code>validation="true"</code> secara otomatis akan menambahkan <code>is-invalid</code> class disaat
					menerima error dari laravel <code>withErrors()</code>
				</li>
				<li>
					<code>old="true"</code> secara otomatis akan mengaktifkan fitur <code>old()</code>
				</li>
				<li>
					<code>label="text.."</code> menambahkan label input jika didefinisikan
				</li>
			</ul>
		</div>
		<p>Semua attribute yang biasa digunakan di <code>&lt;input&gt;</code> bisa tetap digunakan dan attribute yang
			ditambahkan</p>
		@endslot
	</x-lbdocs-section>



</x-lbdocs-page>
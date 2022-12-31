<x-lbdocs-page title="Forms">
    <h5 class="fw-light">
        Forms blade component akan membantu anda melakukan pembuatan form pada Laravel, mulai dari form model, form input, layouts dan lainya. Untuk dokumentasi bootstrap mengenai ini bisa anda lihat di <x-lbdocs-blank href="5.2/forms/overview">Forms Overview</x-lbdocs-blank>
    </h5>
	
	@php
		$codes = [
			'<x-bs-form url="docs/form" method="POST">',
            '    <x-bs-form.input label="Name" required name="name" placeholder="Ketik sesuatu..." />',
            '    <x-bs-textarea label="Address" required name="address" />',
            '    <x-bs-button color="primary">Test</x-bs-button>',
            '</x-bs-form>',
		]
	@endphp
	<x-lbdocs-section title="Overview" :codes="$codes" push>
        <p>
            Lihat mudahnya menggunakan Blade Component ini untuk membuat sebuah Form, seperti <x-bs-code code="<form> <input> <textarea>" /> dengan standart style dan kelas dari Bootstrap yang diringkas dengan pemakaian sangat mudah.
        </p>

        @slot('preview')
        <x-bs-form url="lb5/docs/form" method="POST">
            <x-bs-form.input label="Name" required name="name" placeholder="Ketik sesuatu..." />
            <x-bs-textarea label="Address" required name="address" />
            <x-bs-button color="primary">Test</x-bs-button>
        </x-bs-form>
        @endslot
		
		@slot('bottom')	
        <h5>Keterangan</h5>
        <ul>
            <li>
                <code>url</code> pada <code>x-bs-form</code> adalah alias dari penulisan 
                <code><?= "action=\"{{ url('/') }}\"" ?></code>
            </li>
            <li>
                <code>label</code> pada <code>x-bs-form.input</code> akan mencetak <code>label</code> dengan attribute <i>for</i> yang langsung disambungkan dengan <i>id</i> dari <code>input</code>
            </li>
            <li>
                Terus mana CSRF nya? <code>x-bs-form</code> akan secara otomatis memberikan <code><?= "@csrf" ?></code> pada form yang dikirim selain dengan method GET
            </li>
            <li>Semua attribute yang biasa digunakan pada tag <x-bs-code code="<input> <form> <textarea>"/> tetap bisa digunakan </li>
        </ul>
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
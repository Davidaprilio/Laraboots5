<x-lbdocs-page title="Alert">
	
	<h5 class="fw-light">Biasa digunakan untuk notifikasi pesan, sama seperti di <a href="https://getbootstrap.com/docs/5.0/components/alerts/">Bootstarp Alert</a>, tetapi yang ini mendapatkan tambahan fungsi untuk memudahkan menerima pesan kesalahan dan pesan kilat.</h5>	


	@php
		$codes = [
			'<!-- Alert Error Message -->',
			'<x-bs-alert error="error-demo" type="danger" />',
			'<x-bs-form action="route-to-validation-error">',
			'	<x-bs-button>Test Error Alert</x-bs-button>',
			'</x-bs-form>',
			'',
			'<!-- Alert Flash Message -->',
			'<x-bs-alert flash-message="flash-demo" type="success" />',
			'<x-bs-form action="route-to-return-flash-message">',
			'	<x-bs-button>Test Flash Message Alert</x-bs-button>',
			'</x-bs-form>'
		]
	@endphp
	<x-lbdocs-section title="Event Listener" :codes="$codes">
		<p>
			Memudahkan saat menerima 
			<a href="https://laravel.com/docs/8.x/validation#working-with-error-messages" target="_blank">Error Message</a> atau 
			<a href="https://laravel.com/docs/8.x/session#flash-data" target="_blank">Flash Session</a> dari Laravel, anda hanya perlu menambahkan satu attribute untuk menghandle event tersebut, dimana <code>error</code> untuk error message dan <code>flash-message</code> untuk Flash session.
		</p>
		<span>demo penggunaan:</span>
		@slot('preview')
		<x-bs-alert error="error-demo" type="danger" />
		<x-bs-alert flash-message="flash-demo" type="success" />
		<div class="row justify-content-center mt-3">
			<div class="col">
				{{-- Form Error --}}
				<x-bs-form action="{{ route('error') }}">
					<x-bs-button>Test Error Alert</x-bs-button>
				</x-bs-form>
			</div>
			<div class="col">
				{{-- Form Flash Message --}}
				<x-bs-form action="{{ route('flash') }}">
					<x-bs-button>Test Flash Message Alert</x-bs-button>
				</x-bs-form>
			</div>
		</div>
		@endslot
	</x-lbdocs-section>


	@php
		$codes = [
			'<!-- Alert Basic -->',
			'<x-bs-alert>A simple primary alert—check it out!</x-bs-alert>',
			'<x-bs-alert type="secondary">A simple secondary alert—check it out!</x-bs-alert>',
			'<x-bs-alert type="success">A simple success alert—check it out!</x-bs-alert>',
			'<x-bs-alert type="danger">A simple danger alert—check it out!</x-bs-alert>',
			'<x-bs-alert type="warning">A simple warning alert—check it out!</x-bs-alert>',
			'<x-bs-alert type="info">A simple info alert—check it out!</x-bs-alert>',
			'<x-bs-alert type="light">A simple light alert—check it out!</x-bs-alert>',
			'<x-bs-alert type="dark">A simple dark alert—check it out!</x-bs-alert>',
		]
	@endphp
	<x-lbdocs-section title="Warna" :codes="$codes">
		@slot('preview')
		<x-bs-alert>A simple primary alert—check it out!</x-bs-alert>
		<x-bs-alert type="secondary">A simple secondary alert—check it out!</x-bs-alert>
		<x-bs-alert type="success">A simple success alert—check it out!</x-bs-alert>
		<x-bs-alert type="danger">A simple danger alert—check it out!</x-bs-alert>
		<x-bs-alert type="warning">A simple warning alert—check it out!</x-bs-alert>
		<x-bs-alert type="info">A simple info alert—check it out!</x-bs-alert>
		<x-bs-alert type="light">A simple light alert—check it out!</x-bs-alert>
		<x-bs-alert type="dark">A simple dark alert—check it out!</x-bs-alert>
		@endslot
	</x-lbdocs-section>
		

	@php
		$codes = [
			'<x-bs-alert head="Header Alert" type="success">',
			'	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid dicta, atque ducimus accusantium, ratione eius voluptatum eveniet libero quos exercitationem nisi, repellendus mollitia illo rerum perferendis nulla saepe nihil reiciendis!</p>',
			'	<hr>',
			'	<small>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</small>',
			'</x-bs-alert>'
		]
	@endphp
	<x-lbdocs-section title="Header" :codes="$codes">
		@slot('preview')
		<x-bs-alert head="Header Alert" type="success">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid dicta, atque ducimus accusantium, ratione eius voluptatum eveniet libero quos exercitationem nisi, repellendus mollitia illo rerum perferendis nulla saepe nihil reiciendis!</p>
			<hr>
			<small>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</small>
		</x-bs-alert>
		@endslot		
	</x-lbdocs-section>


	@php
		$codes = ['<x-bs-alert close="true">Alert dengan close button</x-bs-alert>']
	@endphp
	<x-lbdocs-section title="Close button" :codes="$codes">
		@slot('preview')
		<x-bs-alert close="true">Alert dengan close button</x-bs-alert>
		@endslot
	</x-lbdocs-section>
</x-lbdocs-page>

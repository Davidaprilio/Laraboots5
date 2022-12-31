<x-lbdocs-page title="Breadcrumb">
	
	<h5 class="fw-light">
		Buat breadcrumb dengan mudah menggunakan data array. 
		dokumentasi <x-lbdocs-blank href="5.2/components/breadcrumb">Bootstrap Breadcrumb</x-lbdocs-blank>
	</h5>

	@php
		$codes = [
			'<x-bs-breadcrumb :items="[',
			"	'Home' => '#',",
			"	'Library' => '#',",
			']" />',
			'<x-bs-breadcrumb items="Home/Library/Data" />',
		]
	@endphp
	<x-lbdocs-section title="Example" :codes="$codes" push>
		<p>saat membuat breadcrumb anda dapat menuliskan items dalam bentuk array maupun string dengan pemisah '/' seperti menuliskan path</p>
		@slot('preview')
		<x-bs-breadcrumb :items="[
		'Home' => '#',
			'Library' => '#',
		]" />
		<x-bs-breadcrumb items="Home/Library/Data" />
		@endslot
	</x-lbdocs-section>

	@php
		$codes = [
			'<x-bs-breadcrumb divider="\'>\'" :items="[',
			"	'Home' => '#',",
			"	'Library' => '#',",
			']" />',
			'<x-bs-breadcrumb divider="\'>\'"  items="Home/Library/Data" />',
		]
	@endphp
	<x-lbdocs-section title="Divider" :codes="$codes" push>
		<p>anda dapat mengganti pemisah menu (divider) dengan mengisi attribute/props <code>divider="'>'"</code></p>
		@slot('preview')
		<x-bs-breadcrumb divider="'>'" :items="[
		'Home' => '#',
			'Library' => '#',
		]" />
		<x-bs-breadcrumb divider="'>'"  items="Home/Library/Data" />
		@endslot
	</x-lbdocs-section>

</x-lbdocs-page>

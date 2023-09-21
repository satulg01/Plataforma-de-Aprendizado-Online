<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
			{{ __('Cursos') }}
		</h2>
	</x-slot>

	<div class="rounded-lg  bg-neutral-50 dark:bg-gray-700 mt-6">
		<livewire:create-course />
	</div>
</x-app-layout>

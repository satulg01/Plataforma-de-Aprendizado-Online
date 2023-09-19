<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
			{{ __('Cursos') }}
		</h2>
	</x-slot>

	<div class="rounded-lg  bg-neutral-50 dark:bg-gray-700 mt-6">
		<h2 class="text-lg font-semibold leading-7 text-gray-900 dark:text-slate-50 px-6 py-3 border-b dark:border-slate-800 flex items-center justify-between">
			Cadastro
			<div>
				<a class="bg-red-500 hover:bg-red-400 text-white text-base font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded mr-3" href="{{ route('courses.create') }}">
					Apagar
				</a>
				<a class="bg-blue-500 hover:bg-blue-400 text-white text-base font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" href="{{ route('courses.create') }}">
					Salvar
				</a>
			</div>
		</h2>

		<div class="py-3 px-6">
			<div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
				<div class="col-span-6">
					<label for="nome" class="block text-sm font-medium leading-6 text-gray-900 dark:text-slate-50">Nome</label>
					<div class="mt-2">
						<div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-600 sm:max-w-md">
							<input type="text" name="nome" id="nome" autocomplete="curso" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
						</div>
					</div>
				</div>
				
				<div class="col-span-6">
					<label for="nome" class="block text-sm font-medium leading-6 text-gray-900 dark:text-slate-50">Valor</label>
					<div class="mt-2">
						<div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-600 sm:max-w-md">
							<input type="text" name="nome" id="nome" autocomplete="curso" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
						</div>
					</div>
				</div>
			</div>
		</div>

		<h2 class="text-gray-900 dark:text-slate-50 px-6 py-3 border-t dark:border-slate-800 flex items-center justify-end">
			<a class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded mr-3" href="{{ route('courses.create') }}">
				Apagar
			</a>
			<a class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded" href="{{ route('courses.create') }}">
				Salvar
			</a>
		</h2>
	</div>
</x-app-layout>

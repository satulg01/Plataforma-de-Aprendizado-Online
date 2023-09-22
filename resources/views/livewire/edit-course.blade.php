<form wire:submit="save">
	<div>
		<h2 class="text-lg font-semibold leading-7 text-gray-900 dark:text-slate-50 px-6 py-3 border-b dark:border-slate-800 flex items-center justify-between">
			Cadastro
			<div>
				<x-a-primary href="/courses" wire:navigate>
					Voltar
				</x-a-primary>
	
				<x-button-danger>
					Apagar
				</x-button-danger>
	
				<x-button-success>
					Salvar
				</x-button-success>
			</div>
		</h2>
	
		<div class="pt-3 pb-6 px-6">
			<div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
				<div class="col-span-6">
					<label for="nome" class="block text-sm font-medium leading-6 text-gray-900 dark:text-slate-50">Name</label>
					<div class="mt-2">
						<div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-600 sm:max-w-md">
							<input wire:model="form.name" type="text" name="nome" id="nome" autocomplete="curso" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
						</div>
						<div>
							<x-input-error for="form.name"/>
						</div>
					</div>
				</div>
				
				<div class="col-span-6">
					<label for="nome" class="block text-sm font-medium leading-6 text-gray-900 dark:text-slate-50">Value</label>
					<div class="mt-2">
						<div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-600 sm:max-w-md">
							<input wire:model="form.value" type="text" name="nome" id="nome" autocomplete="curso" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
						</div>
						<div>
							<x-input-error for="form.value"/>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
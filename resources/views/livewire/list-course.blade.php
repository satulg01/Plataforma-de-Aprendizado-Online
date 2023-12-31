<div>
    <div class="rounded-lg  bg-neutral-50 dark:bg-gray-700 mt-6">
		<h2 class="text-lg font-semibold leading-7 text-gray-900 dark:text-slate-50 px-6 py-3 border-b dark:border-slate-800">Filtro</h2>
        <div class="py-3 px-6">
            <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="col-span-6">
                    <label for="nome" class="block text-sm font-medium leading-6 text-gray-900 dark:text-slate-50">Nome</label>
                    <div class="mt-2">
                        <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-green-600 sm:max-w-md">
                            <input wire:model.lazy="filter" type="text" name="nome" id="nome" autocomplete="curso" class="block flex-1 border-0 bg-transparent py-1.5 pl-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>

                <div class="col-span-6 pt-8 pb-4">
					<x-a-success class="float-right" href="/courses/create" wire:navigate>
						Adicionar
					</x-a-success>
                </div>
            </div>
        </div>
    </div>

    <div class="rounded-lg p-3 bg-neutral-50 dark:bg-gray-700 mt-6">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-left text-sm font-light bg-neutral-100 dark:bg-gray-700 text-gray-900 dark:text-slate-50">
                            <thead class="border-b dark:border-slate-800 bg-neutral-200 dark:bg-gray-800 font-medium">
                                <tr>
                                    <th scope="col" class="px-6 py-4">#</th>
                                    <th scope="col" class="px-6 py-4">Name</th>
                                    <th scope="col" class="px-6 py-4">Value</th>
                                    <th scope="col" class="px-6 py-4"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
									<tr class="border-b dark:border-slate-800">
										<td class="whitespace-nowrap px-6 py-4 font-medium">{{ $course->id }}</td>
										<td class="whitespace-nowrap px-6 py-4">{{ $course->name }}</td>
										<td class="whitespace-nowrap px-6 py-4">{{ $course->value }}</td>
										<td class="whitespace-nowrap px-6 py-4"><x-a-primary href="/courses/{{ $course->id }}/edit" wire:navigate>Editar</x-a-primary></td>
									</tr>
								@endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

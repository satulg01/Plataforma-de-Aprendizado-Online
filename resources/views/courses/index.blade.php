<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cursos') }}
        </h2>
    </x-slot>

    <div class="rounded-lg  bg-neutral-50 dark:bg-gray-700 mt-6">
		<h2 class="text-lg font-semibold leading-7 text-gray-900 dark:text-slate-50 px-6 py-3 border-b dark:border-slate-800">Filtro</h2>
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

                <div class="col-span-6 pt-8 pb-4">
					<a class="float-right bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded" href="{{ route('courses.create') }}">
						Adicionar
					</a>
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
                                    <th scope="col" class="px-6 py-4">First</th>
                                    <th scope="col" class="px-6 py-4">Last</th>
                                    <th scope="col" class="px-6 py-4">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b dark:border-slate-800">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                                    <td class="whitespace-nowrap px-6 py-4">Mark</td>
                                    <td class="whitespace-nowrap px-6 py-4">Otto</td>
                                    <td class="whitespace-nowrap px-6 py-4">@mdo</td>
                                </tr>
                                <tr class="border-b dark:border-slate-800">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">2</td>
                                    <td class="whitespace-nowrap px-6 py-4">Jacob</td>
                                    <td class="whitespace-nowrap px-6 py-4">Thornton</td>
                                    <td class="whitespace-nowrap px-6 py-4">@fat</td>
                                </tr>
                                <tr class="border-b dark:border-slate-800">
                                    <td class="whitespace-nowrap px-6 py-4 font-medium">3</td>
                                    <td colspan="2" class="whitespace-nowrap px-6 py-4 text-center">
                                        Larry the Bird
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

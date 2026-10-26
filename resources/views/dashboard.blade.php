<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section class="space-y-4">
                        <div>
                            <h3 class="text-lg font-medium">Bootstrapi nupu Tailwindi vaste</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                Nupp kasutab ainult Tailwindi utility-klasse. Proovi fookust tab-klahviga ja võrdle keelatud olekut.
                            </p>
                        </div>

                        <div class="flex flex-wrap items-center gap-3">
                            <x-primary-button type="button">Primary nupp</x-primary-button>
                            <x-primary-button type="button" disabled>Keelatud</x-primary-button>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

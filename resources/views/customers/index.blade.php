<x-app-layout>
    {{-- @push('css')
        @csvStyles
    @endpush --}}
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Customers') }}
            </h2>
            <x-csv-button>Import</x-csv-button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="space-y-1">
                        @forelse ($customers as $customer)
                            <div>
                                {{ $customer->id }} . {{ $customer->fullName() }}
                            </div>
                        @empty
                            <p class="p-4">
                                {{ __('No Customers found!') }}
                            </p>
                        @endforelse
                        <hr>

                        <div class="my-10">
                            {!! $customers->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <livewire:csv-importer :model="App\Models\Customer::class"
                            :columns-to-map="['id', 'first_name', 'last_name', 'email']"
                            :required-columns="['id', 'first_name', 'last_name', 'email']"
                            :column-labels="['id' => 'ID', 'first_name' => 'First Name', 'last_name' => 'Last Name', 'email' => 'Email']"/>

    {{-- @push('js')
        @csvScripts
    @endpush --}}
</x-app-layout>

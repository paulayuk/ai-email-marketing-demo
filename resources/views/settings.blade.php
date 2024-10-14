<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('post')

                        <div>
                            <x-input-label for="your_api_key" :value="__('Your secret API Key')" />
                            <x-text-input id="your_api_key" name="api_key" type="text" class="mt-1 block w-full" />

                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

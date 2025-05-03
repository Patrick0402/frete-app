<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-6 text-gray-900 text-center">
                    <h3 class="text-2xl font-bold mb-4">{{ __("Você está logado!") }}</h3>
                    <p class="text-gray-600">Bem-vindo ao sistema de gerenciamento de fretes.</p>
                </div>
                <div class="p-6 bg-gray-50 flex flex-col items-center space-y-4">
                    <a href="{{ route('frete.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 transition">
                        Cadastrar Frete
                    </a>
                    <a href="{{ route('frete.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-lg shadow hover:bg-gray-600 transition">
                        Listar Fretes
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
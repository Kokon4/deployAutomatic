@extends('layouts.app')

@section('title', 'Afegir Nou Estadi')

@section('content')
<div class="container mx-auto mt-6">
    <h1 class="text-3xl font-bold text-blue-800 mb-4">Afegir Nou Estadi</h1>

    <!-- Missatge de confirmació -->
    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('estadis.store') }}" method="POST" class="bg-gray-100 p-6 rounded shadow-md">
        @csrf
        <div class="mb-4">
            <label for="nom" class="block text-gray-700">Nom de l'Estadi</label>
            <input type="text" id="nom" name="nom" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
            <label for="mitjanaPreuEntrades" class="block text-gray-700">Mitjana Preu Entrades</label>
            <input type="text" id="mitjanaPreuEntrades" name="mitjanaPreuEntrades" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
            <label for="aforoMaxim" class="block text-gray-700">Aforament Màxim</label>
            <input type="number" id="aforoMaxim" name="aforoMaxim" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Afegir Estadi
        </button>
    </form>
</div>
@endsection


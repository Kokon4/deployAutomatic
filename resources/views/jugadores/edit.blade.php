@extends('layouts.app')

@section('title', 'Afegir Nou Estadi')

@section('content')
<div class="container mx-auto mt-6">
    <h1 class="text-3xl font-bold text-blue-800 mb-4">Editar Jugadora</h1>

    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('jugadores.update', $jugadora->id) }}" method="POST" class="bg-gray-100 p-6 rounded shadow-md">
        @csrf
        <div class="mb-4">
            <label for="nom" class="block text-gray-700">Nom de la Jugadora</label>
            <input type="text" id="nom" name="nom" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
        <label for="equip_id" class="block text-sm font-medium text-gray-700 mb-1">Equip:</label>
        <select name="equip_id" id="equip_id" required
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @foreach ($equips as $equip)
                <option value="{{ $equip->id }}">{{ $equip->nom }}</option>
            @endforeach
        </select>
        </div>
        
        <div class="mb-4">
            <label for="posicio" class="block text-gray-700">Posicio</label>
            <select id="posicio" name="posicio" class="w-full p-2 border border-gray-300 rounded" required>
                <option value="Portera">Portera</option>
                <option value="Defensa">Defensa</option>
                <option value="Mediocampista">Mediocampista</option>
                <option value="Delantera">Delantera</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="foto" class="block text-sm font-medium text-gray-700 mb-1">Foto:</label>
            <input type="file" name="foto" id="foto" accept="image/*"
                class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @if($jugadora->foto)
                <img src="{{ asset('storage/' . $jugadora->foto) }}" alt="Foto de {{ $jugadora->nom }}" class="mt-2 max-w-xs">
            @endif
        </div>

        <input type="submit" value ="Editar Jugadora">
    </form>
</div>
@endsection


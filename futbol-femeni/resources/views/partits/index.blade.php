@extends('layouts.app')

@section('title', "Guia d'Equips")

@section('content')
<h1 class="text-3xl font-bold text-blue-800 mb-6">Llistat de partits</h1>
<table class="w-full border-collapse border border-gray-300">
    <thead class="bg-gray-200">
        <tr>
            <th class="border border-gray-300 p-2">Local</th>
            <th class="border border-gray-300 p-2">Visitant</th>
            <th class="border border-gray-300 p-2">Data</th>
            <th class="border border-gray-300 p-2">Resultat</th>
            <th class="border border-gray-300 p-2">Accions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($partits as $partit)
        <tr class="hover:bg-gray-100">
            <td class="border border-gray-300 p-2">
                <a href="{{ route('partits.show', $partit->id) }}" class="text-blue-700 hover:underline">{{ $partit->equip_local->nom }}</a>
            </td>
            <td class="border border-gray-300 p-2">{{ $partit->equip_visitant->nom }}</td>
            <td class="border border-gray-300 p-2">{{ $partit['data'] }}</td>
            <td class="border border-gray-300 p-2">{{ $partit['resultat'] }}</td>
            <td class="border border-gray-300 p-2">
            <a href="{{ route('partits.show', $partit) }}" class="text-blue-600 hover:underline mr-2">Mostrar</a>
            <a href="{{ route('partits.edit', $partit) }}" class="text-green-600 hover:underline mr-2">Editar</a>
            <form action="{{ route('partits.destroy', $partit) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Estàs segur que vols eliminar aquest partit?')">Eliminar</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <a href="{{ route('partits.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block hover:bg-blue-700">
        Afegir Nou Partit
    </a>
</table>
@endsection
@extends('layouts.app')

@section('title', "Guia d'Equips")

@section('content')
<h1 class="text-3xl font-bold text-blue-800 mb-6">Llistat d'estadis</h1>
<table class="w-full border-collapse border border-gray-300">
    <thead class="bg-gray-200">
    <tr>
        <th class="border border-gray-300 p-2">Nom</th>
        <th class="border border-gray-300 p-2">Ciutat</th>
        <th class="border border-gray-300 p-2">Capacitat</th>
        <th class="border border-gray-300 p-2">Equip principal</th>
    </tr>
    </thead>
    <tbody>
    @foreach($estadis as $key => $estadi)
    <tr class="hover:bg-gray-100">
        <td class="border border-gray-300 p-2">
            <a href="{{ route('estadis.show', $key) }}" class="text-blue-700 hover:underline">{{ $estadi['nom'] }}</a>
        </td>
        <td class="border border-gray-300 p-2">{{ $estadi['ciutat'] }}</td>
        <td class="border border-gray-300 p-2">{{ $estadi['capacitat'] }}</td>
        <td class="border border-gray-300 p-2">{{ $estadi['equip_principal'] }}</td>
    </tr>
    @endforeach
    </tbody>
    <a href="{{ route('estadis.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block hover:bg-blue-700">
        Afegir Nou Estadi
    </a>
</table>

@endsection
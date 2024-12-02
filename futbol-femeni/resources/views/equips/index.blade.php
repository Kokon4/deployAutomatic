@extends('layouts.app')

@section('title', "Guia d'Equips")

@section('content')
<h1 class="text-3xl font-bold text-blue-800 mb-6">Guia d'Equips</h1>
<table class="w-full border-collapse border border-gray-300">
    <thead class="bg-gray-200">
    <tr>
        <th class="border border-gray-300 p-2">Nom</th>
        <th class="border border-gray-300 p-2">Estadi</th>
        <th class="border border-gray-300 p-2">Títols</th>
    </tr>
    </thead>
    <tbody>
    @foreach($equips as $equip)
    <tr class="hover:bg-gray-100">
        <td class="border border-gray-300 p-2">
            <a href="{{ route('equips.show', $equip->id) }}" class="text-blue-700 hover:underline">{{ $equip->nom }}</a>
        </td>
        <td class="border border-gray-300 p-2">{{ $equip->estadi }}</td>
        <td class="border border-gray-300 p-2">{{ $equip->titols }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
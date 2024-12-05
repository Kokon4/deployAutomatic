@extends('layouts.app')

@section('title', "Guia d'Equips")

@section('content')
<h1 class="text-3xl font-bold text-blue-800 mb-6">Llistat de jugadores</h1>
<table class="w-full border-collapse border border-gray-300">
    <thead class="bg-gray-200">
    <tr>
        <th class="border border-gray-300 p-2">Nom</th>
        <th class="border border-gray-300 p-2">Equip</th>
        <th class="border border-gray-300 p-2">Posicio</th>
        <th class="border border-gray-300 p-2">Operacions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($jugadores as $key => $jugadora)
    <tr class="hover:bg-gray-100">
        <td class="border border-gray-300 p-2">
            <a href="{{ route('jugadores.show', $key) }}" class="text-blue-700 hover:underline">{{ $jugadora['nom'] }}</a>
        </td>
        <td class="border border-gray-300 p-2">{{ $jugadora['equip'] }}</td>
        <td class="border border-gray-300 p-2">{{ $jugadora['posicio'] }}</td>
        <td class="border border-gray-300 p-2 flex space-x-2">
            <a href="{{ route('jugadores.show', $jugadora->id) }}" class="text-green-600 hover:underline"> Mostrar </a>
            <a href="{{ route('jugadores.edit', $jugadora->id) }}" class="text-yellow-600 hover:underline"> Editar </a>
            <form action="{{route('jugadores.destroy',$jugadora->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Esborrar</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
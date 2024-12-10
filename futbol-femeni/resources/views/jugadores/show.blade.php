@extends('layouts.app')
@section('title', "Pagina equip Femení" )
@section('content')
<x-jugadora
   :nom="$jugadora->nom"
   :equip="$jugadora->equip"
   :posicio="$jugadora->posicio"
   :foto="$jugadora->foto"
/>
@endsection
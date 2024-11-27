@extends('layouts.app')
@section('title', "Pagina equip Femení" )
@section('content')
<x-equip
   :nom="$jugadora['nom']"
   :equip="$jugadora['equip']"
   :posicio="$jugadora['posicio']"
/>
@endsection
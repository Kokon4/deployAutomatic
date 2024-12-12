@extends('layouts.app')
@section('title', "Pagina equip Femení" )
@section('content')
<x-estadi
   :nom="$estadi->nom"
   :ciutat="$estadi->ciutat"
   :capacitat="$estadi->capacitat"
   :equip_principal="$estadi->equip_principal_id"
/>
@endsection
@extends('layouts.app')
@section('title', "Pagina equip Femení" )
@section('content')
<x-equip
   :nom="$estadi['nom']"
   :mitjanaPreuEntrades="$estadi['mitjanaPreuEntrades']"
   :aforoMaxim="$estadi['aforoMaxim']"
/>
@endsection
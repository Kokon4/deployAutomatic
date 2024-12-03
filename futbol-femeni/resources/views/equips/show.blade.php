@extends('layouts.app')
@section('title', "Pagina equip Femení" )
@section('content')
<x-equip
   :nom="$equip->nom"
   :estadi="$equip->estadi->nom"
   :titols="$equip->titols"
   :escut="$equip->escut"
/>
@endsection
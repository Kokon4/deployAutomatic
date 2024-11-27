@extends('layouts.app')
@section('title', "Pagina equip Femení" )
@section('content')
<x-equip
   :local="$partit['nom']"
   :visitant="$partit['visitant']"
   :data="$partit['data']"
   :resultat="$partit['resultat']"
/>
@endsection
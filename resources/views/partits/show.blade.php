@extends('layouts.app')
@section('title', "Pagina equip Femení" )
@section('content')
<x-partit
   :local="$partit->equip_local->nom"
   :visitant="$partit->equip_visitant->nom"
   :date="$partit->data"
   :resultat="$partit->resultat"
/>
@endsection
@extends('layouts.app')
@section('title', "Pagina equip Femení" )
@section('content')
<x-partit
   :local="$partit['local']"
   :visitant="$partit['visitant']"
   :date="$partit['date']"
   :resultat="$partit['resultat']"
/>
@endsection
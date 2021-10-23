@extends('layouts.app')

@section('content')

@foreach($data as $item)
    {{$item}}
    <?php
    
     echo '<br>';
     ?>
@endforeach

@endsection
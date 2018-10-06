@extends('templates/core')

@section('content')

  <!-- HOME -->
  @include('home/home')

  <!-- BIO -->
  @include('bio/bio')

  <!-- PROCESS -->
  @include('work/process')

  <!-- EXAMPLE -->
  @include('work/example')

  <!-- PHOTOGRAPHY -->
  @include('work/photography')

  <!-- CONTACT -->
  @include('work/contact')

@endsection

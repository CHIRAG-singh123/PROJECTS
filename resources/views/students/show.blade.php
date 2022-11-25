@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">Details Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $student->studname }}</h5>
        <p class="card-text">Stream : {{ $student->stream }}</p>
        <p class="card-text">Semister : {{ $student->sem }}</p>
        <p class="card-text">Division : {{ $student->div }}</p>
        <p class="card-text">Course : {{ $student->course }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
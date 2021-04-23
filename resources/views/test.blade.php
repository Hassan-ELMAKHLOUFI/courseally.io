@extends('admin.layouts.master')
@section('body')
@section('title', 'ADD User - Admin')

<section class="content">



  <form action="{{ url('test/proceed') }}" method="POST">
      @csrf
      
      <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">
              {{__("Click to quick update")}}
          </button>
      </div>
  </form>
 
  
   
      

@endsection

 


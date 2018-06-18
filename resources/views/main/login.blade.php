@extends('layout.main')
<?php 
// dd($data);
?>

@section('title')
	<title>The Bee Go</title>
@stop

@section('style')
	
@stop

@section('content')

	<div class="blank-header-top">
	</div>
	<div class="blank-header">
	</div>
	 <!-- Start About -->
    <section class="auth">
      <div class="container">
        <div class="row">

          {!! Form::open(['url' => '/auth/auth-signin','id'=>'signin','class'=>'default-form','method'=>'POST']) !!}
          <div class="form-group">
		    
		    {{Form::label('email', 'Email address')}}
		    {{Form::email("email", $value = null, $attributes = ['id'=>'email','class' => 'form-control','placeholder'=>'Enter email'])}}		    
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  <div class="form-group">
		  	{{Form::label('password', 'Password')}}
		    {{Form::password('password', ['id'=>'password','class' => 'form-control','placeholder'=>'Password'])}}  
		  </div>
		  	{{Form::submit('Submit', ['id'=>'password','class' => 'btn btn-primary'])}}
		 {!! Form::close() !!}
        </div>
      </div>
    </section>
    <!-- End About -->
	
	
@stop

@section('script')
@stop

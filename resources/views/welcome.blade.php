@extends('layouts.master')

@section('title')

 Welcome!

@endsection

@include('includes.header')

@section('content')

  <div class="row">

   <h1> Sign Up </h1>

     <div class="col-md-6">

	<form action="{{ route('signup') }}" method="post">
           
          <div class="form-group">

            <label for="email">Email</label>
            <input type="text" class="form-control"name="email" id="email" >

           </div>

          <div class="form-group">

            <label for="first_name">First Name</label>
            <input type="text" class="form-control"name="first_name" id="first_name" >

          </div>

          <div class="form-group">

            <label for="email">Password</label>
            <input type="password" class="form-control"name="password" id="password" >

          </div>
     
        

            <button type="submit" class="btn btn-primary"name="submit" id="submit" > Sign Up </button>

        
        <input type="hidden" name="_token" value= "{{ Session::token() }}" >

	</form>

    </div>

     <div class="col-md-6">

      <h1> Sign In </h1>

         <form action="{{ route('signin') }}" method="post">
           
		  <div class="form-group">

		    <label for="email">Email</label>
		    <input type="text" class="form-control"name="email" id="email" >

		   </div>

		 

		  <div class="form-group">

		    <label for="email">Password</label>
		    <input type="password" class="form-control"name="password" id="password" >

		  </div>

                

                     <button type="submit" class="btn btn-primary"name="submit" id="submit" > Sign In </button>

              
             
        <input type="hidden" name="_token" value= "{{ Session::token() }}" >

	</form>

     </div>
  
  </div>

@endsection

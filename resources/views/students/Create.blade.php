@extends('students.layout')
@section('content')
<div>
    <h2>ADD NEW STUDENT DETAILS</h2>
</div>
@if ($errors->any())
    <div>
    <p>THERE was somthing wrong with your input.</p>   
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach    
    </ul> 
    </div>    
@endif
  <head>
    <title>Simple registration form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style>
      html, body {
      display: flex;
      justify-content: center;
      height: 100%;
      }
      body, div, h1, form, input, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #666;
      }
      h1 {
      padding: 10px 0;
      font-size: 32px;
      font-weight: 300;
      text-align: center;
      }
      h6 {
      padding: 1px 0;
      font-size: 15px;
      font-weight: 300;
      text-align: center;
      }
      p {
      font-size: 12px;
      }
      hr {
      color: #389e9f;
      opacity: 0.3;
      }
      .main-block {
      max-width: 340px; 
      min-height: 460px; 
      padding: 10px 0;
      margin: auto;
      border-radius: 5px; 
      border: solid 1px #ccc;
      box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
      background: #ebebeb; 
      }
      form {
      margin: 0 30px;
      }
      .account-type, .gender {
      margin: 15px 0;
      }
      input[type=radio] {
      display: none;
      }
      label#icon {
      margin: 0;
      border-radius: 5px 0 0 5px;
      }
      label.radio {
      position: relative;
      display: inline-block;
      padding-top: 4px;
      margin-right: 20px;
      text-indent: 30px;
      overflow: visible;
      cursor: pointer;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: 2px;
      left: 0;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: #1c87c9;
      }
      label.radio:after {
      content: "";
      position: absolute;
      width: 9px;
      height: 4px;
      top: 8px;
      left: 4px;
      border: 3px solid #fff;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      input[type=text], input[type=password] {
      width: calc(100% - 57px);
      height: 36px;
      margin: 13px 0 0 -5px;
      padding-left: 10px; 
      border-radius: 0 5px 5px 0;
      border: solid 1px #cbc9c9; 
      box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
      background: #fff; 
      }
      input[type=password] {
      margin-bottom: 15px;
      }
      #icon {
      display: inline-block;
      padding: 9.3px 15px;
      box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
      background: #1c87c9;
      color: #fff;
      text-align: center;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 100%;
      padding: 10px 0;
      margin: 10px auto;
      border-radius: 5px; 
      border: none;
      background: #1c87c9; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #00ff2a;
      }
      button{border-radius:100%; color:white; border:solid rgb(0, 187, 255) 3px; background-color:rgb(0, 187, 255); font-size:30px;"}
    </style>
  </head>
  <div style="float:left;">
    <a href="{{ route('students.index')}}"><button type="submit" >
      <b>🔙</b></button></a>
</div>

  <body>
    <div class="main-block">
      <h1>REGISTRATION</h1>
      <h6>FOR STUDENT</h6>
      <form action="{{ route('students.store')}}" method="POST">
        @csrf
        <hr>
        <div class="account-type">
            <label><b>Student's Name :</b></label>
                    <input type="text" name="studname" class="form-control" placeholder="Your name">
          
        </div>
        <hr>
        <label><b>Student's Stream : </b></label>
                    <input type="text" name="stream"class="form-control" placeholder="Stream[M.C.A/MSc(I.T)">
        <hr>
        <label><b>Student's Semister : </b></label>
        <input type="text" name="sem"class="form-control" placeholder="Sem-1...7....10">
        <hr>
        <label><b>Student's Div : </b></label>
                    <input type="text" name="div" class="form-control"placeholder="Div">
        <hr>
        <label><b>Student's Course : </b></label>
                    <input type="text" name="course"class="form-control" placeholder="Course era Course">
                    <hr>
        <div class="btn-block">
          <p>By clicking Register, you agree on our <a href="https://www.w3docs.com/privacy-policy">Privacy Policy for W3Docs</a>.</p>
          <button type="submit" href="/">Submit</button>
        </div>
      </form>
    </div>
  </body> 
@endsection
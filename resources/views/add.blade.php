
<!DOCTYPE html>
<html>
  <head>
    <title>Add new airplane</title>
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">-->
    
    <style>
      html, body {
      height: 100%;
      }
      body, input, select { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      font-size: 16px;
      color: black;
      }
      h1, h3 {
      font-weight: 400;
      }
      h1 {
      font-size: 32px;
      }
      h3 {
      color: #1c87c9;
      }
      .main-block, .info {
      display: flex;
      flex-direction: column;
      }
      .main-block {
      justify-content: center;
      align-items: center;
      width: 100%; 
      min-height: 100%;
      background-size: cover;
      }
      form {
      width: 40%; 
      padding: 25px;
      margin-bottom: 20px;
      background: #f8f8f8;
      }
      input, select {
      padding: 5px;
      margin-bottom: 20px;
      background: #ccc;
      border-radius: 5px;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #636465;
      }
      option {
      background: black; 
      border: none;
      }
      .metod {
      display: flex; 
      }
      input[type=radio] {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin-right: 20px;
      text-indent: 32px;
      cursor: pointer;
      }
      label.radio:before {
      content: "";
      position: absolute;
      top: -1px;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #1c87c9;
      }
      label.radio:after {
      content: "";
      position: absolute;
      width: 8px;
      height: 4px;
      top: 5px;
      left: 5px;
      border-bottom: 3px solid #1c87c9;
      border-left: 3px solid #1c87c9;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      textarea {
        width: 100%;
        height: 150px;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        font-size: 16px;
        color: grey;
        resize: none;
    }


      button {
      display: block;
      width: 200px;
      padding: 10px;
      margin: 20px auto 0;
      border: none;
      border-radius: 5px; 
      background: #1c87c9; 
      font-size: 14px;
      font-weight: 600;
      color: #fff;
      }
      button:hover {
      background: #095484;
      }
      @media (min-width: 568px) {
      .info {
      /* flex-flow: row wrap; */
      justify-content: space-between;
      }
      input {
      width: 100%;
      }
      input.fname {
      width: 100%;
      }
      select {
      width: 48%;
      }
      }
    </style>
  <!-- </head> -->
    
<!--Marking the content-->
@extends("layout")
@section("content")
  <body>
    <div class="main-block">
      <h1>Add Airplane </h1>
      <form action="{{ url('insert-data') }}" method="POST">
        @csrf
        <div class="info">
            <div>
                <label type="text" for="contentArea">&nbspPlane name:</label>
                <input type="text" name="title" placeholder="example Airbus A380" value="">
            </div>
                <label type="text" for="contentArea">&nbspTagline or subhead:</label>
                <input type="text" name="excerpt" placeholder="Best commercial airline" value="">
            <div>
                <label type="text" for="contentArea">&nbspPlane descriptions:</label>
                <br>
                <textarea id="contentArea" type="text" name="content" rows="4" cols="50" placeholder="Terbaik untuk commercial airline bisa untuk terbang jauh dalam jarak tertentu"></textarea>
            </div>
            <div> 
                <img class="bd-placeholder-img card-img-top" width="100%" height="auto" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>
                <br>
                <input type="text" name="image" placeholder="Image"> 
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            </div>

        </div>
        <br>
        <button href="/insert-data" type="submit" class="btn btn-sm btn-outline-secondary" >Submit</button>
      </form>
    </div>
  </body>
</html>
@endsection
<!-- Marking end of the content -->
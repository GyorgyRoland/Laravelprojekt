<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notification-Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
      body {font-family: Arial, Helvetica, sans-serif;
        background-image: url(back.jpg);
      }
      form {border:green 2px dashed;
        width: 900px;
        padding: 0px 0px 50px 0px;
        margin: auto;
        background-color: #0080004d;
        position: absolute;
        top:110px;
        left:300px;
        border-radius: 25px;
        z-index: -1;
      }
      .errorr{
        color: white;
        background-color: red;
      }
      input[type=text], input[type=email] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }
      button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        font-size: 22px;
        font-style: italic;
        font-weight: bold;
      }
      button:hover {
        opacity: 0.8;
        color: green
      }
      .container {
        padding: 16px;
      }
      span.psw {
        float: right;
        padding-top: 16px;
      }
      .image{
        margin: auto;
        text-align: center;
        position: absolute;
        left: 700px;
        z-index: 1
      }
      h2{
          text-align: center;
          color: white;
          font-size: 45px;
          font-family: initial;
          font-style: italic;
        }
      .footer{
        width: 96%;
       padding: 20px;
        height: 25px;
      }
      .right{
        width: 50%;
        float: right;
        text-align: right;
      }
      .left{
        width: 50%;
        float: left;
      }
      a{
        color: wheat;
        text-decoration: blink;
      }
      a:hover{
        color: white;
      }
      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
        span.psw {
           display: block;
           float: none;
        }
        .cancelbtn {
           width: 100%;
        }
      }
    </style>
  </head>
  <body>
  	<form method="post" action="{{ url('emailsend/send')}}">
			{{ csrf_field()}}
			<div class="container">
        		<H2>Email küldő</H2>
      		</div>
		
		@if(count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		@if($message = Session::get('success'))
			<div class="alert alert-success alert-block">
				<strong>{{ $message }}</strong>
			</div>
		@endif
			<div class="container">
			<label><b style="color: white">Name:</b></label>
			<input type="text" name="name" class="form-control">
		    <label for="email"><b style="color: white">Email:</b></label>
		    <input type="email" name="email">
		    <label ><b style="color: white">Message:</b></label>
		    <input type="text" name="message" rows="5"></input>
		    <button type="submit" name="Smssend">Küldés</button>
		  </div>
		</form>
	</div>
	</body>
</html>
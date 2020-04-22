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
      input[type=email], input[type=password] {
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
    <div class="image">
      <img src="user2.png" height="150px">
    </div>
    <form  method="post" action="{{ route('user.login') }}" >
      {{ csrf_field() }}
      <div class="container">
        <H2>Login</H2>
      </div>
        @csrf
     @if ($errors->any())
      <div>
          <ul>
            @foreach($errors->all() as $error)
             <li style="color: white;background-color: #e48787;">{{ $error }}</li>
            @endforeach
          </ul>
      </div><br />
    @endif
    @if($message=Session::get('erro'))
    <div>
      <ul>
        <li style="color: white;background-color: #e48787;">{{ $message }}</li>  
      </ul>
    </div>
    @endif
     @if($message=Session::get('sucess'))
        <div>
          <ul>
            <li style="color: white;background-color: green; padding: 10px;">{{ $message }}</li>  
          </ul>
        </div>
      @endif
      <div class="container">
        <label for="email"><b style="color: white">Email</b></label>
          <input type="email" placeholder="Email" name="email" >

        <label for="password"><b style="color: white">Password</b></label>
          <input type="password" placeholder="Password" name="password" >
            
        <button type="submit">Login</button>

        <div class="footer">
          <div class="left">
            <a href="{{ route('register') }}"  style="padding-left: 30px">Don't have an Account? Signup Here!</a>
          </div>
        </div>
      </div>
    </form>

</body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notification-Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
      body {font-family: Arial, Helvetica, sans-serif;
        background-image: url(back.jpg);
      }
      form {outline-style: dashed;
      width: 900px;
      margin: auto;
      background-color: #0080004d;

      }
      .forms {border: green 2px dashed;
      width: 900px;
      margin: auto;
      background-color: #0080004d;
      position: absolute;
      top:110px;
       left:300px;
       border-top-left-radius:25px;
       border-top-right-radius: 25px;
        z-index: -1;
        padding-top: 50px;
        margin-bottom: 50px
      }
      input[type=text], input[type=password] {
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
        border-radius: 10px;
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
    <div class="image">
      <img src="user2.png" height="150px">
    </div>
    <table class="forms">        
      <thead>
        </tr>
        <tr>
          <th>ID</th>
          <th>Név</th>                            
          <th>Email</th>
          <th>Mobile</th>
        </tr>
      </thead>
      <tbody>
        @foreach($users as $user)
          <tr bgcolor="green" style="color: wheat">
            <td style="text-align: center;">{{$user->id}}</td>
            <td style="text-align: center;"> {{$user->name}}</td>
            <td style="text-align: center;">{{$user->email}}</td>
            <td style="text-align: center;">{{$user->mobile}}</td> \                 
          </tr>
        @endforeach
        <tr>
          <th colspan="2"><button><a href="{{ url('/emailsend') }}">Email kuldes</a></button></th>
          
          <th colspan="2"><button><a href="{{ url('/smssend') }}">Sms kuldes</a></button></th>
        </tr>
      </tbody>
    </table>            
  </body>
</html>

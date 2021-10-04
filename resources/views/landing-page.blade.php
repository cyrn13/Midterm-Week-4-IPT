<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title></title>
</head>
<body>
    <div class="landing-page">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="z-index:2;">
    <a class="navbar-brand" href="{{url('/')}}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/register')}}">Register</a>
        </li>
      </ul>
    </div>
</nav>
        <div class="page-content">
            <h1>Type Your Thoughts</h1>
            <p>
            Naturally, employees hired by companies will have varying disabilities. Information on how to provide accommodations is available from a number of sources, including the Job Accommodation Network and local community organizations like the Gateway Association, the Canadian Council on Rehabilitation and Work, the Neil Squire Association and the March of Dimes. Businesses should also ask their employees what they need to be successful.

            </p>
            <a href="#">Start Working</a>
            
        </div>
    </div>

    <div class="text">
    Producing evidence-based journalism comes at a cost. At a time when Australian media is in crisis, <br>
    The Conversation produces trusted news coverage written by experts and we rely on donors to keep our lights on. <br>
    If you value us, please show us by becoming a monthly donor.
    </div>


</body>
</html>

<style>

    *{
        margin: 0;
        padding: 0;
        font-family: "monserrat", sans-serif;
    }

    .landing-page {
        width: 100%;
        height: 100vh;
        background: #000;
        position: relative;
        overflow: hidden;
    }

    .landing-page::after{
        content:"";
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: url(/picture/bground.jpg) no-repeat;
        background-size: cover;
        opacity: .3;
        animation: anim 25s linear infinite;
    }
    @keyframes anim{
        50% {
            transform: scale(2);
        }
        100%{
            transform: scale(1);
        }
    }

    .page-content{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
        width: 100%;
        max-width: 800px;
        text-align: center;
        padding: 0 40px;
        box-sizing: border-box;
    }

    .page-content h1{
        color: #ff7979;
        text-transform: uppercase;
        font-size: 50px;
        font-weight: 900;
        margin-bottom: 20px;
    }

    .page-content p{
        color: #fff;
        margin-bottom: 20px;
    }

    .page-content a{
        display: inline-block;
        text-decoration: none;
        color: #ff7979;
        border: 2px solid #ff7979;
        text-transform: uppercase;
        padding: 10px 20px;
        transition: 0.4s linear;
    }

    .page-content a:hover{
        color: #fff;
        background: #ff7979;
    }

    .text{
        padding: 10px;
        text-align: justify;
    }

    .text div{
        margin-bottom: 6px;

    }
</style>
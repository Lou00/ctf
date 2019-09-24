<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/apple-icon-180x180.png')}}">
  <link href="{{asset('assets/favicon.ico')}}" rel="icon">

  <link href="" rel="stylesheet">


  <title>Unfinished CMS</title>

<link href="{{asset('main.550dcf66.css')}}"" rel="stylesheet"></head>

<body> <!-- Add your content of header -->
  <header>
    <nav class="navbar navbar-default active">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./index.html" title="">
            <img src="{{asset('assets/images/mashup-icon.svg')}}"" class="navbar-logo-img" alt="">
            baby La
          </a>
        </div>
  
         <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
          
            <li>
              <p>
              <form id="_form" method="post" action="/logout">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="user_session" value="@user_session($id)">
                      <a class="btn btn-default navbar-btn" title="" onclick="document.getElementById('_form').submit();">Logout</a>
              </form>
              </p>
            </li>
  
          </ul>
        </div> 
      </div>
    </nav>
  </header>

<div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
          <h1 class="text-center">Hi,{{$username}}</h1>
          <p class="text-center">TO BE ADMIN:)</p>
          <div class="section-container-spacer">
            <img src="{{$imgurl}}" alt="" class="img-responsive reveal-content" data-action="zoom">
          </div>

          
       </div>
      </div>
    </div>
  </div>




<script>
  document.addEventListener("DOMContentLoaded", function (event) {
    navActivePage();
    scrollRevelation('.reveal');
  });
</script>


<script type="text/javascript" src="{{asset('assets/main.0cf8b554.js')}}"></script></body>

</html>
<?php include("pages/connection.php"); ?>

<html ng-app='cess'>

<head>
    <title>Cess</title>




    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme|Crete+Round|Luckiest+Guy" href="/css/master.css">
  <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|Varela+Round" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/home.css">
     <link rel="stylesheet" type="text/css" href="css/teams.css">
     <link rel="stylesheet" type="text/css" href="css/custom1.css">
    <link href="css/animate.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js"></script>
    <script src="https://code.angularjs.org/1.6.5/angular-route.js"></script>
</head>

<body style="background:white">


<section class="welcome-screen animated infinite pulse" id="welcome-page" style="margin: 0;
    text-align: center;    position: relative;
    top: 127px;">
            <h1> Welcome to CESS </h1>
            <div class="loader" style="display: inline-block;">



            </div>
            <img src="img/cess.png" id="intro-logo">
            </div-->
         </section>




    <div class="body hidden">


        <nav class="navbar navbar-default navbar-fixed-top">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <img src="img/cess.png" style="height:20px;top:0%;">
                </button>
                <a class="navbar-brand" href="#"><img style="height:60px;margin-top:-20px;" src="img/cess.png">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                <ul class="nav navbar-nav navbar-right">
                    <a href="#!"><i class="fa fa-home" aria-hidden="true"></i><span id="list">Home</span></a>
                    <a href="#!/home"><i class="fa fa-users" aria-hidden="true"></i><span id="list">Teams</span></a>
                    <a href="#!/events"><i class="fa fa-user" aria-hidden="true"></i><span id="list">Events</span></a>
                    <a href="#!/galary/1"><i class="fa fa-camera" aria-hidden="true"></i><span id="list">Gallery</span></a>

                    <?php

                    if(isset($_SESSION['name']))
                    {
                      echo "<a  href='#!/logout'style='  margin-right: 26px;
                    position: relative;
                    top: 9px;'>Welcome ".$_SESSION['name']."</a>";
                    }
                    else {
                    echo  '<a href="#!/register"><i class="fa fa-sign-in" aria-hidden="true"></i><span id="list">login</span></a>';
                    }



                    ?>

                </ul>
            </div>
            <!-- /.navbar-collapse -->

        </nav>


       <div ng-view=""></div>







<script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>

	<script type="text/javascript" src="js/min.js"></script>
	<script type="text/javascript">

  console.log("hello");





 window.onload = function() {
           // $('#now-playing').addClass('run-animation');



           setTimeout(function(){
                       $('#welcome-page').addClass('animated bounceOutDown');
                        },500);
            setTimeout(function(){

                      $('#welcome-page').addClass('hidden');
                    },3000);


            setTimeout(function(){
                        $('.body').removeClass('hidden');
                         $('.body').addClass('animated fadeIn');

             },3000);


           }



  </script>
<script type="text/javascript" src="js/main.js"></script>
<style media="screen">

</style>
</body>
</html>

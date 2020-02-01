<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="bootgrid/nav.css" type="text/css">
<link href="dist/bootstrap.min.css" rel="stylesheet">
<link href="blog.css" rel="stylesheet">
<link rel="icon" href="img/unc_logo.png" >
<meta charset='utf-8' />
<link href='dist/fullcalendar.min.css' rel='stylesheet' />
<link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='lib/moment.min.js'></script>
<script src='lib/jquery.min.js'></script>
<script src='dist/fullcalendar.min.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--Nav bar-->
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
  <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="FreeHTML5.co" />

    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="mainPage/css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="mainPage/css/icomoon.css">
  <!-- Themify Icons-->
  <link rel="stylesheet" href="mainPage/css/themify-icons.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="mainPage/css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="mainPage/css/magnific-popup.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="mainPage/css/bootstrap-datepicker.min.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="mainPage/css/owl.carousel.min.css">
  <link rel="stylesheet" href="mainPage/css/owl.theme.default.min.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="mainPage/css/style.css">

  <!-- Modernizr JS -->
  <script src="mainPage/js/modernizr-2.6.2.min.js"></script>
  <!--nav bar-->
<script>

   $(document).ready(function() {
   var calendar = $('#calendar').fullCalendar({
    editable:true,
    eventLimit: true,
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay,listDay,listWeek'
    },
    views: {
        listDay: { buttonText: 'list day' },
        listWeek: { buttonText: 'list week' }
      },
    events: 'php/load.php',
    selectable:true,
    weekNumbers: true,
    selectHelper:true,
    eventLimit: true,
    select: function(start, end, allDay)
    {
     var title = prompt("Enter Event Title");
     if(title)
     {
      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
      $.ajax({
       url:"php/insert.php",
       type:"POST",
       data:{title:title, start:start, end:end},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Added Successfully");
       }
      })
     }
    },
    editable:true,
    eventResize:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"php/update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function(){
       calendar.fullCalendar('refetchEvents');
       alert('Event Updated');
      }
     })
    },
  

    eventDrop:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"php/update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function()
      {
       calendar.fullCalendar('refetchEvents');
       alert("Event Updated");
      }
     });
    },

    eventClick:function(event)
    {
     if(confirm("Are you sure you want to remove it?"))
     {
      var id = event.id;
      $.ajax({
       url:"php/delete.php",
       type:"POST",
       data:{id:id},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Event Removed");
       }
      })
     }
    },

   });
  });

</script>
<style>

  body {
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
    color: black;
    background-color: transparent;
  }

  #calendar {
    max-width: 1000px;
    height: 120%
    margin: 5px auto;
    padding-top: 0px;
    margin: 0 auto;
    margin-bottom: 5px auto;
  }

</style> 
</head>
<body>
  <div class="gtco-loader"></div>
  
  <div id="page">

  
  <!-- <div class="page-inner"> -->
  <nav class="gtco-nav" role="navigation">
    <div class="gtco-container">
      
      <div class="row">
        <div class="col-sm-4 col-xs-12">
          <div id="gtco-logo"><a href="../index.html">Guidance Office Scheduler<em></em></a></div>
        </div>
        <div class="col-xs-8 text-right menu-1">
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Scheduler</a></li>
            <li><a href="mainPage/create.php">Create</a></li>
            <li><a href="#bottom">Contact</a></li>
          </ul> 
        </div>
      </div>
      
    </div>
  </nav>
  
  <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(mainPage/images/sched2.jpg)">
    <div class="overlay"></div>
    <div class="gtco-container">
      <div class="row">
        <div class="col-md-12 col-md-offset-0 text-center">
          <div class="row row-mt-15em">

            <div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
              <h1>Welcome to the Scheduler</h1>
            </div>
            
          </div>
          
        </div>
      </div>
    </div>
  </header>
  
  <div class="gtco-section">
    <div class="gtco-container">
      <div class="row" style="background-color: transparent;">
      </div>
      
    </div>
  </div>
  
  <div id='calendar'></div>
  <!-- </div> -->

  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>
<a id="bottom"></a>  
<footer id="gtco-footer" role="contentinfo">
    <div class="gtco-container">
      <div class="row row-p b-md">

        <div class="col-md-4">
          <div class="gtco-widget">
            <h3 style="text-align: justify;">About This</h3>
            <p style="text-align: justify;">This web page is to make the scheduling much easier. This will help the UNC SHS Department Guidance office to schedule an appointment for counselling or agenda related in guiding a students behavior. This will also serve as reports compilation of every students cases so that the guidance office will be organized in their reports of every students case. The web page will also provide a students profiling meaning every student have their profile so that the guidance counselor will have a background on the student case.</p>
          </div>
        </div>


        <div class="col-md-3 col-md-push-1">
          <div class="gtco-widget">
            <h3>Get In Touch</h3>
            <ul class="gtco-quick-contact">
              <li><a href="#"><i class="icon-phone"></i> +63 912 886 6881</a></li>
              <li><a href="#"><i class="icon-phone"></i> +63 999 517 0929</a></li>
              <li><a href="#"><i class="icon-mail2"></i> roda.roadel@unc.edu.ph </a></li>
              <li><a href="#"><i class="icon-mail2"></i> kristine.siscar@unc.edu.ph</a></li>
            </ul>
          </div>
        </div>

      </div>

      <div class="row copyright">
        <div class="col-md-12">
          <p class="pull-left">
            <small class="block">Designed by Group 2 UNC ICT-CP Students</small>
          </p>
          <p class="pull-right">
            <ul class="gtco-social-icons pull-right">
              <li><a href="#"><i class="icon-facebook"></i></a></li>
            </ul>
          </p>
        </div>
      </div>

    </div>
  </footer>
   

  <!--nAv bar->
<script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="mainPage/js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="mainPage/js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="mainPage/js/jquery.waypoints.min.js"></script>
  <!-- Carousel -->
  <script src="mainPage/js/owl.carousel.min.js"></script>
  <!-- countTo -->
  <script src="mainPage/js/jquery.countTo.js"></script>

  <!-- Stellar Parallax -->
  <script src="mainPage/js/jquery.stellar.min.js"></script>

  <!-- Magnific Popup -->
  <script src="mainPage/js/jquery.magnific-popup.min.js"></script>
  <script src="mainPage/js/magnific-popup-options.js"></script>
  
  <!-- Datepicker -->
  <script src="mainPage/js/bootstrap-datepicker.min.js"></script>
  

  <!-- Main -->
  <script src="mainPage/js/main.js"></script>
</body>
</html>

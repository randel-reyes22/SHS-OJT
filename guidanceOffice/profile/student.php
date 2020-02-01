<?php
  require_once('../php/auth.php');
?>
<html>
 <head>
  <script src="dist/jquery.min.js"></script>
  <link rel="stylesheet" href="dist/bootstrap.min.css" />
  <script src="dist/jquery.dataTables.min.js"></script>
  <script src="dist/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="dist/dataTables.bootstrap.min.css" />
  <script src="dist/bootstrap.min.js"></script>
  <!--Nav bar-->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Student profile &mdash; Guidance Office Scheduler</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
  <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="FreeHTML5.co" />
  <link rel="icon" href="../img/unc_logo.png" >

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
  <link rel="stylesheet" href="../mainPage/css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="../mainPage/css/icomoon.css">
  <!-- Themify Icons-->
  <link rel="stylesheet" href="../mainPage/css/themify-icons.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="../mainPage/css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="../mainPage/css/magnific-popup.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="../mainPage/css/bootstrap-datepicker.min.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="../mainPage/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../mainPage/css/owl.theme.default.min.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="../mainPage/css/style.css">

  <!-- Modernizr JS -->
  <script src="../mainPage/js/modernizr-2.6.2.min.js"></script>
  <!--nav bar-->
  <style>
   body
   {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
   }
   .box
   {
    width:1280px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:5px;
   }

   .required:after {
  content:"*";
  color:red;
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
          <div id="gtco-logo"><a href="#">Guidance Office Scheduler<em></em></a></div>
        </div>
        <div class="col-xs-8 text-right menu-1">
          <ul>
            <li><a href="#">Student Profiles</a></li>
            <li><a href="../narrativeReports/narrative.php">Narrative Reports</a></li>
            <li><a href="#bottom">Contact</a></li>
            <li><a href="../mainPage/change.php">Change Password</a></li>
            <li><a href="../php/logout.php">Log Out</a></li>
            <li style="color: white; cursor: default;"><i class="icon-user"></i><?php echo $_SESSION['SESS_FIRST_NAME'];?></li>
          </ul> 
        </div>
      </div>
      
    </div>
  </nav>
  
  <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(../mainPage/images/studentProfile.jpg)">
    <div class="overlay"></div>
    <div class="gtco-container">
      <div class="row">
        <div class="col-md-12 col-md-offset-0 text-center">
          <div class="row row-mt-15em">

            <div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
              <h1>Student Profiles</h1>
            </div>
            
          </div>
          
        </div>
      </div>
    </div>
  </header>
  
  <div class="gtco-section">
    <div class="gtco-container">
      <div class="row">
      </div>
      
    </div>
  <div class="container box">
   <div class="table-responsive">
    <div align="right">
     <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add</button>
    </div>
    <br /><br />
    <table id="user_data" class="table table-striped table-hover">
     <thead>
      <tr>
       <th width="50%">Image</th>
       <th width="45%">Name</th>
       <th width="45%">Mobile Number</th>
       <th width="45%">Strand and Section</th>
       <th width="45%">Date of Birth</th>
       <th width="45%">Place of Birth</th>
       <th width="45%">Address</th>
       <th width="45%">Father's Name</th>
       <th width="45%">Father's Mobile #</th>
       <th width="45%">Mother's Name</th>
       <th width="45%">Mother's Number #</th>
       <th width="45%">Parent's Martial Relationship</th>
       <th width="45%">Guardian's Name</th>
       <th width="45%">Guardian's Mobile #</th>
       <th width="5%">Edit</th>
       <th width="5%">Delete</th>
      </tr>
     </thead>
    </table>    
   </div>
  </div>
<div id="userModal" class="modal fade">
 <div class="modal-dialog">
  <form method="post" id="user_form" enctype="multipart/form-data">
   <div class="modal-content">
    <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal">&times;</button>
     <h1 class="modal-title text-center"><strong>Add Student</strong></h1>
    </div>
    <div class="modal-body">
     <label class="required">Given Name</label>
     <input type="text" name="student_name" id="student_name" class="form-control" />
     <br />
     <label>Mobile Number</label>
     <input type="text" name="student_mobile" id="student_mobile" class="form-control" />
     <br />
     <br />
     <label>Strand and Section</label>
     <input type="text" name="student_year" id="student_year" class="form-control" />
     <br />
     <br />
     <label>Date of Birth</label>
     <input type="date" name="student_birth" id="student_birth" class="form-control" />
     <br />
     <br />
     <label>Place of Birth</label>
     <input type="text" name="student_birthPlace" id="student_birthPlace" class="form-control" />
     <br />
     <br />
     <label class="required">Student Address</label>
     <input type="text" name="student_address" id="student_address" class="form-control" />
     <br />
     <br />
     <label>Father's Name</label>
     <input type="text" name="student_fatherName" id="student_fatherName" class="form-control" />
     <br />
     <br />
     <label>Father's Mobile Number </label>
     <input type="text" name="student_fatherMobile" id="student_fatherMobile" class="form-control" />
     <br />
     <br />
     <label>Mother's Name</label>
     <input type="text" name="student_motherName" id="student_motherName" class="form-control" />
     <br />
     <br />
     <label>Mother's Mobile Number</label>
     <input type="text" name="student_motherMobile" id="student_motherMobile" class="form-control" />
     <br />
     <br />
     <label>Parent's Martial Relationship</label>
     <input type="text" name="student_parentRelation" id="student_parentRelation" class="form-control" />
     <br />
     <br />
     <label>Guardian's Name</label>
     <input type="text" name="student_guardianName" id="student_guardianName" class="form-control" />
     <br />
     <br />
     <label>Guardian's Mobile Number</label>
     <input type="text" name="student_guardianMobile" id="student_guardianMobile" class="form-control" />
     <br />
     <label>Select User Image</label>
     <input type="file" name="user_image" id="user_image" />
     <span id="user_uploaded_image"></span>
    </div>
    <div class="modal-footer">
     <input type="hidden" name="user_id" id="user_id" />
     <input type="hidden" name="operation" id="operation" />
     <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
   </div>
  </form>
 </div>
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
<a id="bottom"></a>
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
 </body>
</html>


<!--JS FOR FUNCTION-->
<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 $('#add_button').click(function(){
  $('#user_form')[0].reset();
  $('.modal-title').text("Add Student Profile");
  $('#action').val("Add");
  $('#operation').val("Add");
  $('#user_uploaded_image').html('');
 });
 
 var dataTable = $('#user_data').DataTable({
  "processing":true,
  "serverSide":true,
  "order":[],
  "ajax":{
   url:"fetch.php",
   type:"POST"
  },
  "columnDefs":[
   {
    "targets":[0, 3, 4],
    "orderable":false,
   },
  ],

 });

 $(document).on('submit', '#user_form', function(event){
  event.preventDefault();
  var studentName = $('#student_name').val();
  var studentMobile = $('#student_mobile').val();
  var studentYear = $('#student_year').val();
  var studentBirth = $('#student_birth').val();
  var studentbirthPlace = $('#student_birthPlace').val();
  var studentAddress = $('#student_address').val();
  var studentfatherName = $('#student_fatherName').val();
  var studentfatherMobile = $('#student_fatherMobile').val();
  var studentmotherName = $('#student_motherName').val();
  var studentmotherMobile = $('#student_motherMobile').val();
  var studentparentRelation = $('#student_parentRelation').val();
  var studentguardianName = $('#student_guardianName').val();
  var studentguardianMobile = $('#student_guardianMobile').val();
  var extension = $('#user_image').val().split('.').pop().toLowerCase();
  if(extension != '')
  {
   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
   {
    alert("Invalid Image File");
    $('#user_image').val('');
    return false;
   }
  } 
  if(studentName != '' , studentMobile != '' , studentYear != '' , studentBirth != '' , studentbirthPlace != '' , studentAddress != '' , studentfatherName != '' , studentfatherMobile != '' , studentmotherName != '' ,studentmotherMobile != '' , studentparentRelation != '' , studentguardianName != '' ,  studentguardianMobile != '')
  {
   $.ajax({
    url:"insert.php",
    method:'POST',
    data:new FormData(this),
    contentType:false,
    processData:false,
    success:function(data)
    {
     alert(data);
     $('#user_form')[0].reset();
     $('#userModal').modal('hide');
     dataTable.ajax.reload();
    }
   });
  }
  else
  {
   alert("All Fields are Required");
  }
 });
 
 $(document).on('click', '.update', function(){
  var user_id = $(this).attr("id");
  $.ajax({
   url:"fetch_single.php",
   method:"POST",
   data:{user_id:user_id},
   dataType:"json",
   success:function(data)
   {
    $('#userModal').modal('show');
    $('#student_name').val(data.studentName);
    $('#student_mobile').val(data.studentMobile);
     $('#student_year').val(data.studentYear);
      $('#student_birth').val(data.studentBirth);
       $('#student_birthPlace').val(data.studentbirthPlace);
       $('#student_address').val(data.studentAddress);
        $('#student_fatherName').val(data.studentfatherName);
         $('#student_fatherMobile').val(data.studentfatherMobile);
          $('#student_motherName').val(data.studentmotherName);
           $('#student_motherMobile').val(data.studentmotherMobile);
            $('#student_parentRelation').val(data.studentparentRelation);
             $('#student_guardianName').val(data.studentguardianName);
              $('#student_guardianMobile').val(data.studentguardianMobile);
               $('.modal-title').text("Edit or View Student Profile");
                 $('#user_id').val(user_id);
                  $('#user_uploaded_image').html(data.user_image);
                   $('#action').val("Save");
                    $('#operation').val("Edit");
   }
  })
 });
 
 $(document).on('click', '.delete', function(){
  var user_id = $(this).attr("id");
  if(confirm("Are you sure you want to delete this?"))
  {
   $.ajax({
    url:"delete.php",
    method:"POST",
    data:{user_id:user_id},
    success:function(data)
    {
     alert(data);
     dataTable.ajax.reload();
    }
   });
  }
  else
  {
   return false; 
  }
 });
 
 
});


</script>
<!--JS FOR FUNCTION-->
 <!--nAv bar->
<script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="../mainPage/js/jquery.easing.1.3.js"></script>

  <!-- Waypoints -->
  <script src="../mainPage/js/jquery.waypoints.min.js"></script>
  <!-- Carousel -->
  <script src="../mainPage/js/owl.carousel.min.js"></script>
  <!-- countTo -->
  <script src="../mainPage/js/jquery.countTo.js"></script>

  <!-- Stellar Parallax -->
  <script src="../mainPage/js/jquery.stellar.min.js"></script>

  <!-- Magnific Popup -->
  <script src="../mainPage/js/jquery.magnific-popup.min.js"></script>
  <script src="../mainPage/js/magnific-popup-options.js"></script>
  
  <!-- Datepicker -->
  <script src="../mainPage/js/bootstrap-datepicker.min.js"></script>
  

  <!-- Main -->
  <script src="../mainPage/js/main.js"></script>
<?php require_once('../php/auth.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Narrative Report</title>
<link rel="stylesheet" href="dist/bootstrap.min.css" type="text/css" media="all">
<link rel="icon" href="../img/unc_logo.png" >
<script src="dist/jquery-1.11.1.min.js"></script>
<script src="dist/bootstrap.min.js"></script>
<script src="dist/jquery.bootgrid.min.js"></script>
<meta charset="utf-8">
<!--nav bar-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Narrative Reports &mdash; Guidance Office Scheduler</title>
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
  <link rel="stylesheet" href="../mainPage/css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="../mainPage/css/icomoon.css">
  <!-- Themify Icons-->
  <link rel="stylesheet" href="../mainPage/css/themify-icons.css">
  <!-- Bootstrap  -->

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

<style type="text/css">

.control-label.required:after {
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
            <li><a href="../profile/student.php">Student Profiles</a></li>
            <li><a href="#">Narrative Reports</a></li>
            <li><a href="#bottom">Contact</a></li>
            <li><a href="../mainPage/change.php">Change Password</a></li>
            <li><a href="../php/logout.php">Log Out</a></li>
            <li style="color: white; cursor: default;"><i class="icon-user"></i><?php echo $_SESSION['SESS_FIRST_NAME'];?></li>
          </ul> 
        </div>
      </div>
      
    </div>
  </nav>
  
  <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(../mainPage/images/sched.jpg)">
    <div class="overlay"></div>
    <div class="gtco-container">
      <div class="row">
        <div class="col-md-12 col-md-offset-0 text-center">
          <div class="row row-mt-15em">

            <div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
              <h1>Narrative Reports</h1>
            </div>
            
          </div>
          
        </div>
      </div>
    </div>
  </header>
	<div class="container">
      <div class="">
        <div class="col-sm-12">
		<div class="well clearfix">
			<div class="pull-right"><button type="button" class="btn btn-xs btn-primary" id="command-add" data-row-id="0">
			<span class="glyphicon glyphicon-plus"></span> Record</button></div></div>
		<table id="employee_grid" class="table table-condensed table-hover table-striped" width="60%" cellspacing="0" data-toggle="bootgrid">
			<thead>
				<tr>
					<th data-column-id="id" data-type="numeric" data-identifier="true">Empid</th>
					<th data-column-id="student_name">Name</th>
					<th data-column-id="student_year">Year and Section</th>
					<th data-column-id="student_narrative">Narrartive report 1</th>
                    <th data-column-id="student_narrative2">Narrartive report 2</th>
                    <th data-column-id="student_narrative3">Narrartive report 3</th>
                    <th data-column-id="student_narrative4">Narrartive report 4</th>
                    <th data-column-id="student_narrative5">Narrartive report 5</th>
					<th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
				</tr>
			</thead>
		</table>
    </div>
      </div>
    </div>
	
<div id="add_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h1  class="modal-title text-center"><strong>Add Student</strong></h1>
            </div>
            <div class="modal-body">
                <form method="post" id="frm_add">
				<input type="hidden" value="add" name="action" id="action" required>
                  <div class="form-group">
                    <label for="name" class="control-label required">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required />
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label required">Year and Section</label>
                    <input type="text" class="form-control" id="salary" name="salary" required/>
                  </div>
                   <div class="form-group">
                    <label for="narrative" class="control-label required">Narrative Reports 1</label>
                    <textarea type="text" name="student_narrative" id="student_narrative" placeholder="Enter Report 1" class="form-control name_list"> </textarea> 
                   
                  </div>
                  <div class="form-group">
                    <label for="narrative" class="control-label ">Narrative Reports 2</label>
                    <textarea type="text" name="student_narrative2" id="student_narrative2" placeholder="Report 2" class="form-control name_list"> </textarea> 
                  </div>
                  <div class="form-group">
                    <label for="narrative" class="control-label">Narrative Reports 3</label>
                    <textarea type="text" name="student_narrative3" id="student_narrative3
                    " placeholder="Report 3" class="form-control name_list"> </textarea>   
                  </div>
                  <div class="form-group">
                    <label for="narrative" class="control-label">Narrative Reports 4</label>
                    <textarea type="text" name="student_narrative4" id="student_narrative4
                    " placeholder="Report 4" class="form-control name_list"> </textarea>   
                  </div>
                  <div class="form-group">
                    <label for="narrative" class="control-label">Narrative Reports 5</label>
                    <textarea type="text" name="student_narrative5" id="student_narrative5
                    " placeholder="Report 5" class="form-control name_list"> </textarea>   
                  </div>
                
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btn_add" class="btn btn-primary">Save</button>
            </div>
			</form>
        </div>
    </div>
</div>
<div id="edit_model" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h1 class="modal-title text-center"><strong>Edit Student</strong></h1>
            </div>
            <div class="modal-body">
                <form method="post" id="frm_edit">
				<input type="hidden" value="edit" name="action" id="action">
				<input type="hidden" value="0" name="edit_id" id="edit_id">
                  <div class="form-group">
                    <label for="name" class="control-label required">Name</label>
                    <input type="text" class="form-control" id="edit_name" name="edit_name"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label required">Year and Section</label>
                    <input type="text" class="form-control" id="edit_salary" name="edit_salary"/>
                  </div>
                  <div class="form-group">
                    <label for="salary" class="control-label required">Narrative Report 1</label>
                    <textarea type="text" class="form-control" id="edit_narrative" name="edit_narrative"></textarea>
                  </div>
                   <div class="form-group">
                    <label for="salary" class="control-label required">Narrative Report 2</label>
                    <textarea type="text" class="form-control" id="edit_narrative2" name="edit_narrative2"></textarea>
                  </div>
                   <div class="form-group">
                    <label for="salary" class="control-label required">Narrative Report 3</label>
                    <textarea type="text" class="form-control" id="edit_narrative3" name="edit_narrative3"></textarea>
                  </div>
                   <div class="form-group">
                    <label for="salary" class="control-label required">Narrative Report 4</label>
                    <textarea type="text" class="form-control" id="edit_narrative4" name="edit_narrative4"></textarea>
                  </div>
                   <div class="form-group">
                    <label for="salary" class="control-label required">Narrative Report 5</label>
                    <textarea type="text" class="form-control" id="edit_narrative5" name="edit_narrative5"></textarea>
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btn_edit" class="btn btn-primary">Save</button>
            </div>
			</form>
        </div>
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
            <h3 style="text-align: justify;" ="">About This</h3>
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
<script type="text/javascript">
$( document ).ready(function() {
	var grid = $("#employee_grid").bootgrid({
		ajax: true,
		rowSelect: true,
		post: function ()
		{
			/* To accumulate custom parameter with the request object */
			return {
				id: "b0df282a-0d67-40e5-8558-c9e93b7befed"
			};
		},
		
		url: "response.php",
		formatters: {
		        "commands": function(column, row)
		        {
		            return "<button type=\"button\" class=\"btn btn-xs btn-default command-edit\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-edit\"></span></button> " + 
		                "<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-id=\"" + row.id + "\"><span class=\"glyphicon glyphicon-trash\"></span></button>";
                      
		        }
		    }

            
   }).on("loaded.rs.jquery.bootgrid", function()
{
    /* Executes after data is loaded and rendered */
    grid.find(".command-edit").on("click", function(e)
    {
        //alert("You pressed edit on row: " + $(this).data("row-id"));
			var ele =$(this).parent();
			var g_id = $(this).parent().siblings(':first').html();
            var g_name = $(this).parent().siblings(':nth-of-type(2)').html();
console.log(g_id);
                    console.log(g_name);

		//console.log(grid.data());//
		$('#edit_model').modal('show');
					if($(this).data("row-id") >0) {
							
                                // collect the data
                                $('#edit_id').val(ele.siblings(':first').html()); // in case we're changing the key
                                $('#edit_name').val(ele.siblings(':nth-of-type(2)').html());
                                $('#edit_salary').val(ele.siblings(':nth-of-type(3)').html());
                                $('#edit_narrative').val(ele.siblings(':nth-of-type(4)').html());
                                $('#edit_narrative2').val(ele.siblings(':nth-of-type(5)').html());
                                $('#edit_narrative3').val(ele.siblings(':nth-of-type(6)').html());
                                $('#edit_narrative4').val(ele.siblings(':nth-of-type(7)').html());
                                $('#edit_narrative5').val(ele.siblings(':nth-of-type(8)').html());

					} else {
					 alert('Now row selected! First select row, then click edit button');
					}
    //view//
    //view end//

    }).end().find(".command-delete").on("click", function(e)
    {
	
		var conf = confirm('Delete ' + 'number ' + $(this).data("row-id") + ' student?');
					alert(conf);
                    if(conf){
                                $.post('response.php', { id: $(this).data("row-id"), action:'delete'}
                                    , function(){
                                        // when ajax returns (callback), 
										$("#employee_grid").bootgrid('reload');
                                }); 
								//$(this).parent('tr').remove();
								//$("#employee_grid").bootgrid('remove', $(this).data("row-id"))
                    }
    });
});


function ajaxAction(action) {
				data = $("#frm_"+action).serializeArray();
				$.ajax({
				  type: "POST",  
				  url: "response.php",  
				  data: data,
				  dataType: "json",       
				  success: function(response)  
				  {
					$('#'+action+'_model').modal('hide');
					$("#employee_grid").bootgrid('reload');
				  }   
				});
			}
			
			$( "#command-add" ).click(function() {
			  $('#add_model').modal('show');
			});
			$( "#btn_add" ).click(function() {
			  ajaxAction('add');
			});
			$( "#btn_edit" ).click(function() {
			  ajaxAction('edit');
			});
            $( "#command-view" ).click(function() {
              $('#view_modal').modal('show');
            });
});

</script>
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
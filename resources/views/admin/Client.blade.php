<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal"> -->
    <link rel="shortcut icon" href="img/favicon.png">

    <title> Clients </title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  </head>

  <body>
    <section id="container" class="">
    @include('admin.header.header')
     @include('admin.sidebar.sidebar')
    </section>

          <section id="main-content">
          <section class="wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-files-o"></i> Accounts</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                        <li><i class="icon_document_alt"></i>Account</li>
                        <li><i class="fa fa-files-o"></i>Add Accounts</li>
                    </ol>
                </div>
            </div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Account Forms
                          </header>
                          <div class="panel-body">
                              <div class="form">
<!--                                   <form class="form-validate form-horizontal" id="feedback_form" method="get" action=""> -->
                                  <form action="cname"  method="POST" enctype="multipart/from-date">
                                  {!! csrf_field() !!}
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Account Name <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="name_client" minlength="5" type="text" required />
                                          </div>
                                      </div>
                                     <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">City: <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                   <input list ="browsers"  class="form-control" id="cCity" name="City"  type="text" required />
                                          <datalist id="browsers">
                                               <option value="Dubai">
                                               <option value="Abudhabi">
                                               <option value="Sharjah">
                                               <option value="Ajman">
                                               <option value="Umm Al Qaywayn">
                                               <option value="Ras Al khaimah">
                                               <option value="Fujairah">
                                              </datalist>
                                          </div>
                                      </div>
                                       <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Account Stage: <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                   <input list ="Stage"  class="form-control" id="cStage" name="Stage"  type="text" required />
                                          <datalist id="Stage">
                                               <option value="Lead In">
                                               <option value="Contact Made">
                                               <option value="Meeting">
                                               <option value="Proposal Sent">
                                               <option value="Active">
                                               <option value="ShutDown">
                                              </datalist>
                                          </div>
                                      </div>
                                     <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Country: <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                          <input class="form-control" id="cCountry" name="Country" minlength="3" type="text" required />
                                          </div>
                                      </div> 
                                     <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Address: <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                          <input class="form-control" id="cLocation" name="Location" minlength="5" type="text" required />
                                          </div>
                                      </div>    
                                          <label for="cname" class="control-label col-lg-2">Type of Business: <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input list ="TOB" class="form-control" id="c type_of_business" name=" type_of_business" minlength="5" type="text" required />
                                             <datalist id="TOB">
                                  
                                               <option value="F&M">
                                               <option value="Hotel">
                                                <option value="Resturant">
                                                <option value="Residential">
                                              </datalist>
                                          </div>
                                      </div>                                 
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">E-Mail <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cemail" type="email" name="email_client" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Website</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="Website_client" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Phone Number  <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                           <input class="form-control" id="CPhone" name="Phone_client" minlength="5" type="text" required />
                                              
                                              
                                          </div>
                                      </div>                                      
                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Information</label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control " id="ccomment" name="information_client" required></textarea>
                                          </div>
                                      </div>
                                     <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">SalesID: <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                          <input class="form-control" id="cname" name="sales_id" minlength="5" type="text" required />
                                           </br>
                                          </div>
                                          </br>
                                      </div>                                      
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Save</button>
                                              <button class="btn btn-default" type="button">Cancel</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>
             
              <!-- page end-->
          </section>
      </section>

       <!-- javascripts -->
    <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
  <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
  <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
  <script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
  <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="js/jquery-jvectormap-world-mill-en.js"></script>
  <script src="js/xcharts.min.js"></script>
  <script src="js/jquery.autosize.min.js"></script>
  <script src="js/jquery.placeholder.min.js"></script>
  <script src="js/gdp-data.js"></script>  
  <script src="js/morris.min.js"></script>
  <script src="js/sparklines.js"></script>  
  <script src="js/charts.js"></script>
  <script src="js/jquery.slimscroll.min.js"></script>   

  </body>

  </html>


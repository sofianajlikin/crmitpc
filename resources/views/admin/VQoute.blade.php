<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Auotations </title> 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
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
          <h3 class="page-header"><i class="fa fa-table"></i>Quotations</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="fa fa-table"></i>Quotations</li>
            <li><i class="fa fa-th-list"></i>List</li>
          </ol>
        </div>
      </div>
              <div class="row">
                  <div class="col-sm-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Quotations
                          </header>
                          <table class="table">
                              <thead>
                              <tr>
                                   <th>#</th>
                                  <th>Client Name</th>
                                  <th>Quote</th>
                                  <th>Amount</th>
                                  <th>Valid Till</th>
                                   <th>Stage</th>
                                  <th>Update</th>
                                 
                              </tr>
                              </thead>
                              <tbody>
                              
                                @foreach($quotes as $quote)
                                 @foreach($clients as $client)
                                
                                <tr>
                                  <td>
                                  
                                  </td>
                                  <td>
                                    {{ $client->name_client }}
                                  </td>
                                  <td>
                                     {{ $quote->Quotename }}
                                  </td>
                                  <td>
                                   {{ $quote->amount }}
                                  </td>
                                  <td>
                                     {{ $quote->Vdate }}
                                  </td>
                                  <td>
                                 {{ $quote->status }}
                                  </td>
                                  <td>
                                  <input list ="Stage"  class="form-control" id="cStage" name="Stage"  type="text" required /> 
                                   <datalist id="Stage">
                                               <option value="Close Won">
                                               <option value="Closed lost">
                                               <option value="Checking">
                                                </datalist>
                                  </td>
                                   <td>
                                   <!--  <a class="btn btn-warning" href="EClient/{{ $client->id }}"> Edit</a>
                                   </td>
                                    <td>
                                    <button class="btn btn-danger" >Delete</button>
                                   </td> -->
                                   <td> 
                                    <a class="btn btn-warning" href="clientpage/{{ $client->id }}"> Update Status</a>
                                   </td>

                                </tr>
                                @endforeach
                                 @endforeach
                      
                           
                              </tbody>
                          </table>
                      </section>
                  </div>

 

    <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
  <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <script src="js/calendar-custom.js"></script>
  <script src="js/jquery.rateit.min.js"></script>
    <script src="js/jquery.customSelect.min.js" ></script>
  <script src="assets/chart-master/Chart.js"></script>
    <script src="js/scripts.js"></script>
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


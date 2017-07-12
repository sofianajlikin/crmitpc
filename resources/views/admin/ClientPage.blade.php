<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Add Clients </title>

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
      @foreach($clients as $client)
  <section id="main-content">
          <section class="wrapper">
      <div class="row">
        <div class="col-lg-11">
          <h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
            <li><i class="icon_documents_alt"></i>Pages</li>
            <li><i class="fa fa-user-md"></i>Profile</li>
          </ol>
        </div>
      </div>
              <div class="row">
                <!-- profile-widget -->
                <div class="col-lg-11">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-2 col-sm-2">
                              <h4>{{ $client->name_client }}</h4>               
                              <div class="follow-ava">
                                <!--   <img src="img/profile-widget-avatar.jpg" alt=""> -->
                              </div>
                              
                            </div>

                            <div class="col-lg-4 col-sm-5 follow-info">
                                <p>{{ $client->information_client }}</p>
 <!--                                <p>@jenifersmith</p>
                <p><i class="fa fa-twitter">jenifertweet</i></p> -->
                                <h6>
                                    <span><i class="icon_clock_alt"></i>11:05 AM</span>
                                    <span><i class="icon_calendar"></i>25.10.13</span>
                                    <span><i class="icon_pin_alt"></i>NY</span>
                                </h6>
                            </div>
                 
                </div>
              </div>
              <!-- page start-->

              <div class="row">
                 <div class="col-lg-12">
                    <section class="panel">
                          <header class="panel-heading tab-bg-info">
                              <ul class="nav nav-tabs">
                                  <li class="active">
                                      <a data-toggle="tab" href="#recent-activity">
                                          <i class="icon-home"></i>
                                          Daily Activity
                                      </a>
                                  </li>
                                  <li>
                                      <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          Profile
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#Quotation">
                                          <i class="icon-envelope"></i>
                                          Leads
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#">
                                          <i class="icon-envelope"></i>
                                          Contract
                                      </a>
                                  </li>
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="recent-activity" class="tab-pane active">

                                      <div class="profile-activity">
                                      <div class="row" >
                                            <div class="col-sm-9">
                                                <section class="body">
                               <div class="form">
                                  <form action="cevent"  method="POST" enctype="multipart/from-date">
                                  {!! csrf_field() !!}
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Event Name:</label>
                                          <div class="col-lg-9">
                                         
                              <input class="form-control " id="curl" type="text"  name="name_event" />
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Details:</label>
                                          <div class="col-lg-9">
                                           <textarea name="details" class="form-control" cols="30" rows="5"></textarea>
                                    </div>
                                  <div class="form-group">
                                        <label class="col-lg-2 control-label">Follow up Date:</label>
                                          <div class="col-lg-9">
                                           <input type="date"  name="Nextfollowupdate" class="form-control" cols="30" rows="5"></input>
                                    </div>
                                <div class="form-group">
                                        </br>
                                          <div class="col-lg-9">
                                           <input type="hidden"  name="client_id" class="form-control" cols="30" rows="5" value= {{ $client->id }}></input>
                                    </br>
                                    </div>

                                      <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <button class="btn btn-default" type="button">Cancel</button>
                                                <div class="col-lg-offset-2 col-lg-2">
                                               
                                                <button class="btn btn-primary" type="submit">Add</button>
                                            </div>
                                        </div>
                                   </form>
                                  </div  
                                                   <div >
                                                       <table class="table" >
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Event Name</th>
                                                            <th class="col-lg-8">Details</th>
                                                           <th class="col-lg-3" onclick="sortTable(0)" >Create Date & Time</th>
                                                            <th class="col-lg-5">Next Follow up</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        
                                                          @foreach($cevents as $cevent)
                                                          <tr>
                                                            <td>
                                                              {{ $cevent->id }}
                                                            </td>
                                                            <td>
                                                              {{ $cevent->name_event }}
                                                            </td>
                                                            <td>
                                                              {{ $cevent->details }}
                                                            </td>
                                                            <td>
                                                              {{ $cevent->updated_at }}
                                                            </td>
                                                            <td>
                                                              {{ $cevent->Nextfollowupdate }}
                                                            </td>
                                                            <td>
                                                            

                                                          </tr>
                                                          @endforeach
                                                     
                                                        </tbody>
                                                    </table>
                                                </section>
                                            </div>

                                            </div>


                                      </div>
                                  </div>

                                  <!-- profile -->
                                  <div id="profile" class="tab-pane">
                                    <section class="panel">
                                      <div class="bio-graph-heading">
                                                {{ $client->information_client }}
                                      </div>
                                      <div class="panel-body bio-graph-info">
                                          <h1>{{ $client->name_client }}</h1>
                                          <div class="row">
                                              <div class="bio-row">
                                                  <p><span>location </span>{{ $client->Location }} </p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>City </span>{{ $client->City }} </p></p>
                                              </div>                                              
                                              <div class="bio-row">
                                                  <p><span>Website</span>{{ $client->Website_client }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Country </span>{{ $client->Country }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Type of business: </span>{{ $client->type_of_business }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Email </span>{{ $client->email_client }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Mobile </span>{{ $client-> Mobile_client }}</p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Phone </span>{{ $client->Phone_client }} </p>
                                              </div>
                                          </div>
                                      </div>
                                    </section>
                                      <section>
                                          <div class="row">                                              
                                          </div>
                                      </section>
                                  </div>
                                  <!-- edit-profile -->
                                  <div id="Quotation" class="tab-pane">
                                    <section class="panel">

                                          <div class="panel-body bio-graph-info">
                                              <h1> Quotation</h1>
                             <form class="form-horizontal" role="form" action="cqoute"  method="POST" enctype="multipart/from-date">
                                                {!! csrf_field()!!}                                                  
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Quotation Name</label>
                                                      <div class="col-lg-6">
                                <input type="text" class="form-control" name="Quotename" />
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Quotation Amount</label>
                                                      <div class="col-lg-3">
                                                          <input type="number" class="form-control" id="l-name" placeholder=" " name='amount'>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Quotation information</label>
                                                      <div class="col-lg-10">
                                   <textarea name="note" id="" class="form-control" cols="30" rows="5"></textarea>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Quotation Status</label>
                                                      <div class="col-lg-6">
                <input list ="browsers" class="form-control" id="c-name" placeholder=" " name="status">
                         <datalist id="browsers">
                                  
                                               <option value="Close Won">
                                               <option value="Closed lost">
                                                <option value="Sent">
                                                   <option value="checking">
                                              </datalist>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Valid Till</label>
                                                      <div class="col-lg-6">
                                           <input type="date" class="form-control" id="b-day" placeholder=" " name='Vdate'>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Quotation Number</label>
                                                      <div class="col-lg-6">
                                          <input type="text" class="form-control" id="occupation" placeholder=" " name='QuoteNumber'>
                                                          </br>
                                                      </div>
                                            </div>
                                  <div class="form-group">
                                   <label class="col-lg-2 control-label">ClientID</label>
                                  <div class="col-lg-6">
                   <input type="text"  name ='client_id'class="form-control" placeholder=" " value= {{ $client->id }} >
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">SalesID</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="mobile" placeholder=" ">
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" class="btn btn-primary">Save</button>
                                          <button type="reset" value="Reset" class="btn">Reset</button>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                            <div >
                                                       <table class="table" >
                                                        <thead>
                                                        <tr>
                                                            <th class="col-lg-1">#</th>
                                                            <th class="col-lg-2">Quote Name</th>
                                                            <th class="col-lg-2">Date</th>
                                                            <th class="col-lg-2">Valid Till</th>
                                                            <th class="col-lg-2">Create</th>
                                                            <th class="col-lg-2">status</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        
                                                          @foreach($quotes as $quote)
                                                          <tr>
                                                            <td>
                                                              {{ $quote->id }}
                                                            </td>
                                                            <td>
                                                              {{ $quote->Quotename }}
                                                            </td>
                                                            <td>
                                                              {{ $quote->created_at }}
                                                            </td>
                                                            <td>
                                                              {{ $quote->Vdate }}
                                                            </td>
                                                            <td>
                                                              {{ $quote->QuoteNumber }}
                                                            </td>
                                                            <td>
                                                              {{ $quote->status }}
                                                            </td>
                                                            <td>
                                                            

                                                          </tr>
                                                          @endforeach
                                                     
                                                        </tbody>
                                                    </table>
                                      </section>
                                  </div>
                              </div>
                          </div>
                      </section>
                 </div>
              </div>
                 @endforeach

              <!-- page end-->
          </section>
                     
      </section>
       <!-- profile -->
                                

       <!-- javascripts -->

       <script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("table");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("TR");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
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


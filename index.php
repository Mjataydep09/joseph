<!doctype html>
<?php
session_start();
require_once 'php/dbconnect.php';

if(isset($_POST["m_submit"])){
  $m_firstname = $_POST['m_firstname'];
  $m_lastname = $_POST['m_lastname'];
  $m_email = $_POST['m_email'];
  $m_phone  = $_POST['m_phone'];
  $m_company = $_POST['m_company'];
  $m_message = $_POST['m_message'];
  if(mysqli_query($conn,"INSERT INTO messages(m_firstname,m_lastname,m_email,m_phone,m_company,m_message) VALUES ('$m_firstname','$m_lastname','$m_email','$m_phone','$m_company','$m_message')")){
    echo "Success Message";
  }
}
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.svg" type="image/x-icon">
  <meta name="description" content="">
  <title>NAV_D+C</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/marcc/css/additional.css" type="text/css">
  <link rel="stylesheet" href="assets/marcc/css/additional1.css" type="text/css">
  <link rel="stylesheet" href="assets/marcc/css/mycss.css" type="text/css">

</head>
<body>

  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-caption-wrap">
				<a class="navbar-caption text-white display-4 boxshadowlogo navborder" href="index.html#header1"><b><font color="#F16022" class="navqwe">NAV</font><font class="navqwe" color="white">D+C</font></b></a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">

				<li class="nav-item"><a class="nav-link link text-white display-4" href="index.php#header1">Home<br></a></li>
				<li class="nav-item"><a class="nav-link link text-white display-4" href="index.php#gallery3-a">Gallery</a></li>
				<li class="nav-item"><a class="nav-link link text-white display-4" href="index.php#services3-c">Services</a></li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="index.php#slider1-b">About us<br></a></li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="index.php#team1-f">Team<br></a></li>
				<li class="nav-item"><a class="nav-link link text-white display-4" href="index.php#contacts1-e">Contact</a></li>

				</ul>

        </div>
    </nav>
</section>
<div class="container-fluid mbr-fullscreen gradientbg0" id="header1">
    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-6 boxshadowlogo logoborder" >
                <h1 class="topnav">N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;V</h1>
               <img src="assets/images/logo.svg" class="asdlogo">
                <p class="belownav"><b>N</b>ew<b>A</b>rchitecture<b>V</b>ision</p>

            </div>
        </div>
    </div>

</div>
<section class="cid-rZHh4OTXJ8"  id="gallery3-a">

  <div class="container-fluid">
    <div class="row gradientbg43" id="row-main" >
        <div class="col-md-2" id="sidebarr" style="margin-top:2rem">
            <a class="btn-default display-6 whitecolor topright" href="javascript:void(0)" onclick="closeNav()">☰</a>
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical"> <hr/>
            <a class="  text-white display-4 text-center  active" id="v-pills-tab-1" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Featured <hr style="border-bottom: 1px solid #222933;"/></a>
            <a class=" display-4 text-white  text-center " id="v-pills-tab-2" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Commercial  <hr style="border-bottom: 1px solid #222933;"/></a>
            <a class=" display-4 text-white  text-center " id="v-pills-tab-3" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Residential - Hign rise  <hr style="border-bottom: 1px solid #222933;"/></a>
            <a class=" display-4 text-white  text-center " id="v-pills-tab-4" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Residential - Low rise  <hr style="border-bottom: 1px solid #222933;"/></a>
            <a class=" display-4 text-white  text-center " id="v-pills-tab-5" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Industrial  <hr style="border-bottom: 1px solid #222933;"/></a>
            <a class=" display-4 text-white  text-center " id="v-pills-tab-6" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">Master Plan <hr style="border-bottom: 1px solid #222933;"/></a>
            <a class=" display-4 text-white  text-center " id="v-pills-tab-7" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="false">Interior <hr style="border-bottom: 1px solid #222933;"/></a>
          </div>
        </div>
        <div class="col-md-10" id="contentt" style="margin-top:2rem">
          <div class="tab-content" id="v-pills-tabContent">
                    <button class="btn btn-default display-5 whitecolor" id="mySidebarrbtn" style="display:none;" onclick="openNav()">☰ Gallery</button>
            <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-tab-1">
              <div class="container-fluid" id="galleries" style="margin-bottom:3rem;margin-top:3rem;" >

                    <?php
                    $latest = mysqli_query($conn,"SELECT * FROM works WHERE works_category = 'latestproject'");
                    while($latestshow = mysqli_fetch_array($latest)){
                      echo "
                        <div class='columnn galleries-images'>
                            <div class='imgborder'>
                            <img class='bgimageasd' src='assets/images/thumbs/".$latestshow['works_category']."/".$latestshow['works_thumbs']."' style='width:100%;height:auto;'>
                            <p class='display-overlay'>".$latestshow['works_description']."</p>
                            </div>
                        </div>



                      ";



                    }
                    ?>

                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-2" role="tabpane2" aria-labelledby="v-pills-tab-2">

              <div class="container-fluid" id="galleries" style="margin-bottom:3rem;" >

                    <?php
                    $latest = mysqli_query($conn,"SELECT * FROM works WHERE works_category = 'commercial'");
                    while($latestshow = mysqli_fetch_array($latest)){
                      echo "
                      <div class='columnn gallery-scale'>
                          <div class='imgborder'>
                      <a href='#' type='button'>
                      <img class='bgimageasd' src='assets/images/thumbs/".$latestshow['works_category']."/".$latestshow['works_thumbs']."' style='width:100%;height:auto;'>
                      </a>
                        </div>
                      </div>


                      ";
                    }
                    ?>

                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-3" role="tabpane3" aria-labelledby="v-pills-tab-3">

              <div class="container-fluid" style="margin-bottom:3rem;" >
                  <div class="row">
                    <?php
                    $latest = mysqli_query($conn,"SELECT * FROM works WHERE works_category = 'residentialhr'");
                    while($latestshow = mysqli_fetch_array($latest)){
                      echo "
                      <div class='columnn col-sm-3 col-md-4 '>
                          <div class='imgborder'>
                      <a href='#' type='button' data-toggle='modal' data-target='#Gallery".$latestshow['works_id']."'>
                      <img class='bgimageasd' src='assets/images/thumbs/".$latestshow['works_category']."/".$latestshow['works_thumbs']."' style='width:100%;height:auto;'>
                      </a>
                        </div>
                      </div>
                      <div class='modal fade ' id='Gallery".$latestshow['works_id']."'>
                      <div class='modal-dialog modal-lg '>
                      <div class='modal-content' style='background-color:#252628;color:#fff'>
                      <div class='modal-header '>
                      <h4 class='modal-title'>".$latestshow['works_description']."</h4>
                      <button type='button' class='close' data-dismiss='modal'>&times;</button>
                      </div>
                      <div class='modal-body'>
                      <div class='imgborder columnn'>
                      <img src='assets/images/works/".$latestshow['works_category']."/".$latestshow['works_large']."' style='width:100%;height:auto;'>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      ";
                    }
                    ?>
                  </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-4" role="tabpane4" aria-labelledby="v-pills-tab-4">

              <div class="container-fluid" style="margin-bottom:3rem;" >
                  <div class="row">
                    <?php
                    $latest = mysqli_query($conn,"SELECT * FROM works WHERE works_category = 'residentiallr'");
                    while($latestshow = mysqli_fetch_array($latest)){
                      echo "
                      <div class='columnn col-sm-3 col-md-4 '>
                          <div class='imgborder'>
                      <a href='#' type='button' data-toggle='modal' data-target='#Gallery".$latestshow['works_id']."'>
                      <img class='bgimageasd' src='assets/images/thumbs/".$latestshow['works_category']."/".$latestshow['works_thumbs']."' style='width:100%;height:auto;'>
                      </a>
                        </div>
                      </div>
                      <div class='modal fade ' id='Gallery".$latestshow['works_id']."'>
                      <div class='modal-dialog modal-lg '>
                      <div class='modal-content' style='background-color:#252628;color:#fff'>
                      <div class='modal-header '>
                      <h4 class='modal-title'>".$latestshow['works_description']."</h4>
                      <button type='button' class='close' data-dismiss='modal'>&times;</button>
                      </div>
                      <div class='modal-body'>
                      <div class='imgborder columnn'>
                      <img src='assets/images/works/".$latestshow['works_category']."/".$latestshow['works_large']."' style='width:100%;height:auto;'>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      ";
                    }
                    ?>
                  </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-5" role="tabpane5" aria-labelledby="v-pills-tab-5">

              <div class="container-fluid" style="margin-bottom:3rem;" >
                  <div class="row">
                    <?php
                    $latest = mysqli_query($conn,"SELECT * FROM works WHERE works_category = 'industrial'");
                    while($latestshow = mysqli_fetch_array($latest)){
                      echo "
                      <div class='columnn col-sm-3 col-md-4 '>
                          <div class='imgborder'>
                      <a href='#' type='button' data-toggle='modal' data-target='#Gallery".$latestshow['works_id']."'>
                      <img class='bgimageasd' src='assets/images/thumbs/".$latestshow['works_category']."/".$latestshow['works_thumbs']."' style='width:100%;height:auto;'>
                      </a>
                        </div>
                      </div>
                      <div class='modal fade ' id='Gallery".$latestshow['works_id']."'>
                      <div class='modal-dialog modal-lg '>
                      <div class='modal-content' style='background-color:#252628;color:#fff'>
                      <div class='modal-header '>
                      <h4 class='modal-title'>".$latestshow['works_description']."</h4>
                      <button type='button' class='close' data-dismiss='modal'>&times;</button>
                      </div>
                      <div class='modal-body'>
                      <div class='imgborder columnn'>
                      <img src='assets/images/works/".$latestshow['works_category']."/".$latestshow['works_large']."' style='width:100%;height:auto;'>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      ";
                    }
                    ?>
                  </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-6" role="tabpane6" aria-labelledby="v-pills-tab-6">

              <div class="container-fluid" style="margin-bottom:3rem;" >
                  <div class="row">
                    <?php
                    $latest = mysqli_query($conn,"SELECT * FROM works WHERE works_category = 'masterplan'");
                    while($latestshow = mysqli_fetch_array($latest)){
                      echo "
                      <div class='columnn col-sm-3 col-md-4 '>
                          <div class='imgborder'>
                      <a href='#' type='button' data-toggle='modal' data-target='#Gallery".$latestshow['works_id']."'>
                      <img class='bgimageasd' src='assets/images/thumbs/".$latestshow['works_category']."/".$latestshow['works_thumbs']."' style='width:100%;height:auto;'>
                      </a>
                        </div>
                      </div>
                      <div class='modal fade ' id='Gallery".$latestshow['works_id']."'>
                      <div class='modal-dialog modal-lg '>
                      <div class='modal-content' style='background-color:#252628;color:#fff'>
                      <div class='modal-header '>
                      <h4 class='modal-title'>".$latestshow['works_description']."</h4>
                      <button type='button' class='close' data-dismiss='modal'>&times;</button>
                      </div>
                      <div class='modal-body'>
                      <div class='imgborder columnn'>
                      <img src='assets/images/works/".$latestshow['works_category']."/".$latestshow['works_large']."' style='width:100%;height:auto;'>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      ";
                    }
                    ?>
                  </div>
                </div>
            </div>
            <div class="tab-pane fade" id="v-pills-7" role="tabpane7" aria-labelledby="v-pills-tab-7">

              <div class="container-fluid" style="margin-bottom:3rem;" >
                  <div class="row">
                    <?php
                    $latest = mysqli_query($conn,"SELECT * FROM works WHERE works_category = 'interior'");
                    while($latestshow = mysqli_fetch_array($latest)){
                      echo "
                      <div class='columnn col-sm-3 col-md-4 '>
                          <div class='imgborder'>
                      <a href='#' type='button' data-toggle='modal' data-target='#Gallery".$latestshow['works_id']."'>
                      <img class='bgimageasd' src='assets/images/thumbs/".$latestshow['works_category']."/".$latestshow['works_thumbs']."' style='width:100%;height:auto;'>
                      </a>
                        </div>
                      </div>
                      <div class='modal fade ' id='Gallery".$latestshow['works_id']."'>
                      <div class='modal-dialog modal-lg '>
                      <div class='modal-content' style='background-color:#252628;color:#fff'>
                      <div class='modal-header '>
                      <h4 class='modal-title'>".$latestshow['works_description']."</h4>
                      <button type='button' class='close' data-dismiss='modal'>&times;</button>
                      </div>
                      <div class='modal-body'>
                      <div class='imgborder columnn'>
                      <img src='assets/images/works/".$latestshow['works_category']."/".$latestshow['works_large']."' style='width:100%;height:auto;'>
                      </div>
                      </div>
                      </div>
                      </div>
                      </div>
                      ";
                    }
                    ?>
                  </div>
                </div>
            </div>
                    </div>
        </div>
      </div>
  </div>


</section>

<section class="timeline2 cid-s0cCw7gb48 container-fluid mbr-fullscreen gradientbg2"  id="services3-c">

  <div class="container align-center">
      <h2 class="marginbottomstyle pb-3 display-2 service-section">
        SERVICES
      </h2>
      <div class="container timelines-container" mbri-timelines="">
          <!--1-->

          <?php
            $service = mysqli_query($conn,'SELECT * FROM ourservice');
            while($runservice = mysqli_fetch_array($service)){
            echo "<div class='row timeline-element ".$runservice['service_position']." separline'>
                <span class='iconsBackground' >
                    <img src='assets/images/logo3.svg' class='mbr-iconfont'>
                </span>
                <div class='col-xs-12 col-md-6 align-left'>
                    <div class='timeline-text-content boxbordershadow'>
                        <h4 class='align-center service-section mbr-timeline-title pb-3 mbr-fonts-style display-5' >
                            ".$runservice['service_name']."
                        </h4>
                     </div>
                </div>
            </div>";
          }?>
      </div>
  </div>

</section>


<section class="gradientbg1 mbr-fullscreen mbr-white">
<div class="container-fluid">
        <div class="row" style="position:relative;overflow:hidden;" >
            <div class="col-md-12 aboutcontainer"  id="slider1-b">
                <h2 class="align-center mbr-fonts-style display-2 marginbottomstyle1">ABOUT US</h2>
                <?php require('profile.svg'); ?>
            </div>
            <div class="col-md-12 aboutcontainer collapse"  id="pilos1">
              <h2 class="align-center mbr-fonts-style display-2 marginbottomstyle">Philosophy</h2>
              <div class="row" >
                                      <div class="col-md-6" style="font-size:13px">
                                       <p>  <b>In Design</b>

                                             Good design is a homologous process of <b>NAV</b>igating through a <b>maze</b> of environmental needs and principles.
                                             <br/>NAV believes that every design and project shall pass through a progress of something in a logical sequence and considering every aspect of it. Visioning each design or project regardless of its size and type should respond, add quality and consider the root to the desired environment so that it would contributes positively - partly if not a whole to the constructive environment.
                                            <br/> NAVs New Architecture Vision design philosophy is a synthesis of range of design ingredients:
                                           </p>

                                           <table class="align-center">
                                             <tbody>
                                               <tr>
                                                 <th style="width:4%;">I</th><th>
                                                 </th><th style="width:2%;">:</th><th>
                                                 </th><th style="width:40%;">Identity &amp; Innovation </th><th>
                                                 </th><th style="width:2%;">=</th><th>
                                                 </th><th>&nbsp;traditional to &nbsp;modern</th><th>
                                                 </th></tr>

                                                   <tr>
                                                     <th>C</th><th>
                                                     </th><th style="width:2%;">:</th><th>
                                                     </th><th style="width:40%;">Colour</th><th>
                                                     </th><th style="width:2%;">=</th><th>
                                                     </th><th>&nbsp;light to bright</th><th>
                                                     </th></tr>

                                                       <tr>
                                                         <th>A</th><th>
                                                         </th><th style="width:2%;">:</th><th>
                                                         </th><th style="width:40%;">Articulation</th><th>
                                                         </th><th style="width:2%;">=</th><th>
                                                         </th><th>&nbsp;simple to &nbsp;complex</th><th>
                                                         </th></tr>

                                                           <tr>
                                                             <th>S</th><th>
                                                             </th><th style="width:2%;">:</th><th>
                                                             </th><th style="width:40%;">Scale</th><th>
                                                             </th><th style="width:2%;">=</th><th>
                                                             </th><th>&nbsp;small to big</th><th>
                                                             </th></tr>

                                                               <tr>
                                                                 <th>T</th><th>
                                                                 </th><th style="width:2%;">:</th><th>
                                                                 </th><th style="width:40%;">Texture</th><th>
                                                                 </th><th style="width:2%;">=</th><th>
                                                                 </th><th>&nbsp;smooth to rough</th><th>
                                                                 </th></tr>

                                                                   <tr>
                                                                     <th>S</th><th>
                                                                     </th><th style="width:2%;">:</th><th>
                                                                     </th><th style="width:40%;">Sound / Appearnce</th><th>
                                                                     </th><th style="width:2%;">=</th><th>
                                                                     </th><th>&nbsp;soft to loud</th><th>
                                                                     </th></tr></tbody>
                                              </table>

                                                                   <p>
                                                                     NAV believes that there is no good design if everything is all traditional, light, simple, small, smooth, soft, etc. Thus, by infusing NAV-iCASTS theorem with its design factors and drive to exert the passion will conceive a timeless, innovative and distinguishing design approach that will be surely admired.
                                                                   </p>
                                                                   <p>
                                                                   </div>
                                                                     <div class="col-md-6" style="font-size:13px">
                                                                    <b>In Construction</b>
                                                                            </p>
                                                                    <p>
                                                                    Construction appears to have nothing to do with philosophy as it is merely a practical activity. Construction seems to be the most distant of any discipline from any notion of philosophy. Philosophy asks basic question such "why" and engages in a rigorous process of inquiry about the way we think and act in the world.
                                                                     </p>

                                                                    <p>
                                                                    The philosophical concepts behind this involve expertise-in-context which is everyday expertise understood broadly as covering various kinds of practical knowledge, attention based knowledge,skills,desicion making and action planning.
                                                                     </p>
                                                                    <p>
                                                                    Thus, NAVD+C philosophically aimed to:
                                                                     </p>
                                                                    <p>
                                                                    - determine the therapeutic and diagnostic role of expertise-in-context- ideas in improving construction practice.
                                                                    </p>
                                                                    <p>
                                                                    - facilitate the development of better models of practice by thinking differently about knowledge and skills. This
                                                                       will allow more flexible decision making that reflects individual expertise.
                                                                    </p>
                                                                    <p>
                                                                    - disseminate the economic, social, and cultural benefits of the use of philosophy to a non-academic audience.
                                                                    </p>
                                                                    <p>
                                                                    -  analyse the relationship between theory and practice within practice and philosophy.
                                                                    </p>
                                                                    <p>
                                                                    - explore how ideas get embedded in company structures and process.
                                                                     </p>
                                                                  </div>
                                                                  </div>

            </div>
            <div class="col-md-12 aboutcontainer collapse"  id="misvis2">
              <h2 class="align-center mbr-fonts-style display-2 marginbottomstyle">Mission and Vision</h2>
              <div class="gallery-expander-contents">


				<div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>
   <b>In Design</b>
   </p>
   <p >
                      NAV’s mission is a thorough commitment in properly (1) knitting the spaces to be an art of place embodying everything else a concern for the quality of private and public spaces and life amongst them; (2) crafting the building—emanating from a belief that thoughtful use of materials and careful attention to detail are fundamental factors to the conception of a meaningful and responsible built environment.
                       </p>
   <p >
   NAV is dedicated to employing the tools, methods, and visionary capability of design to catalyze positive change through public engagement and advocacy.
                      </p>
   <p ></p><br>

            </div>
            <div class="col-md-6">
             <p >  <b>In Construction</b>
            <br/>
              It is the mission and objective of NAVDC to deliver professional construction services that will result in the highest quality building production and construction services at fair and market competitive prices.
              <br/><br/>
              We are dedicated to (1) ensure the longevity of our company through repeat and referral business achieved by customer satisfaction in all areas including timeliness, attention to detail and service-minded attitudes; (2) maintain the highest levels of professionalism, integrity, honesty and fairness in our relationship with our suppliers, sub-contractors, professionals associates and customers.
              <br/>
              We also envisioned to deliver and excel in every facet of our business by:
              <br/>
              - Providing awesome customer service and relationship to our clients.
            <br/>
              - Providing a mixture of services to a variety of industries and different geographical locations.
              <br/>
              - Continuing communications with our customer during and after construction.
              <br/>
              - Providing training for personnel technical enhancement
            <br/>
              - Recruiting and hiring only those who can adhere our vision.
                          </p>
      </div>

            </div>

          </div>

		</div>
            </div>
        </div>
</div>

</section>
<section class="team1 cid-rZU096inCz gradientbg3" id="team1-f">
    <div class="container align-center">
        <h2 class="pb-3 mbr-section-title display-2 marginbottomstyle">
            OUR AWESOME TEAM
        </h2>
        <div class="row media-row">
<?php
$team = mysqli_query($conn,'SELECT * FROM team');
while($runteam = mysqli_fetch_array($team)){
  echo "
  <div class='col-md-4' style='margin-bottom:2rem;'>
    <div class='flip-card card team-border'>
        <div class='flip-card-inner card-body text-center teamborder'>
          <div class='flip-card-front'>
            <p><img class='imgbordercircle bgimageasdsep img-fluid' src='assets/images/Team/".$runteam['team_image']."'  /></p>
            <h4 class='display-7'><u>".$runteam['team_name']."</u></h4>
            <p class='display-8'>".$runteam['team_position']."</p>

        </div>
        <div class='flip-card-back'>
          <q>'Architect & Engineer'</q>
          <p style='font-size:9px;'>~".$runteam['team_name']."</p>
        </div>
        </div>

    </div>

    </div>
    ";
}
?>
        </div>
    </div>

</section>

<section class="mbr-section contacts1 cid-rZHjlmR5Lw gradientbg42" id="contacts1-e">
    <!--Overlay-->
    <!--Container-->
      <div class="container">
          <div class="row">
              <!--Titles-->
              <div class="title col-12">
                  <h2 class="align-center mbr-fonts-style display-1 marginbottomstyle">
                    OUR CONTACTS
                  </h2>
                </div>
                <div class="col-md-2">

                </div>

          <div class="col-md-8">
            <div class="darkcard">
              <div class="card-header">
                <h5 class="title">Get in touch.</h5>
              </div>
              <div class="card-body">
                <form method="POST">
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="m_firstname" placeholder="Name" class="darkform-control" pattern="[A-Z.' '.a-z]{5,20}" title="Enter Atleast 5 or more character to continue." required="">
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="m_lastname" placeholder="Name" class="darkform-control"  pattern="[A-Z.' '.a-z]{5,20}" title="Enter Atleast 5 or more character to continue." required="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="m_email" placeholder="E-mail" class="darkform-control"  required="">
                      </div>
                    </div>
                  </div>
                <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" name="m_phone" placeholder="Phone" class="darkform-control" title="Enter Atleast 7 or more number" maxlength="11">
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Company</label>
                          <input type="text" name="m_company" placeholder="(Optional)" class="darkform-control"  pattern=".{3,25}" title="Enter Atleast 3 or more character to continue.">
                      </div>
                    </div>
                  </div><div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label>Message</label>
                        <textarea name="m_message" rows="6" cols="80" class="darkform-control" placeholder=""></textarea>
                      </div>
                    </div>
                  </div>

              </div>
              <div class="card-footer">
                <button type="submit" name="m_submit" class="btn btn-sm btn-primary">Save</button>
              </div>
                </form>
            </div>
          </div>

          <div class="col-md-2">

          </div>
            <?php
            $showcontacts = mysqli_query($conn,'SELECT * FROM contacts');
            while($runcontacts = mysqli_fetch_array($showcontacts)){
              echo "
                <div class='col-12 col-md-6'>
                <div class='google-map'>
                  <iframe class='mapinvert' src='".$runcontacts['contact_map']."' width='300' height='250' frameborder='0' style='border:0;' allowfullscreen='' aria-hidden='false' tabindex='0'></iframe>
                    </div>
                    <h5 class='align-center mbr-fonts-style m-0 display-5'>
                    ".$runcontacts['contact_branch']."
                    </h5>
                          <p class='mbr-text align-center mbr-fonts-style display-7'>
                              ".$runcontacts['contact_address']."
                              </p>
                              <p class='mbr-text align-center mbr-fonts-style display-7'>
                              ".$runcontacts['contact_number']."
                              </p>
                              <p class='mbr-text align-center mbr-fonts-style display-7'>
                              ".$runcontacts['contact_email']."
                              </p>
                              </div>
                              ";
                            }
                            ?>
        </div>
        <div class="container-fluid">
          <h2 class="mbr-text align-center mbr-fonts-style display-4">Email: navdesignandconstruction@gmail.com</h2>
        </div>
    </div>
</section>

<section class="cid-qTkAaeaxX5 gradientoriginal" id="footer1-2">
    <div class="container">
            <div class="media-container-row content text-white">

                <div class="media-wrap">
                    <a href="index.php">
                        <img src="assets/images/logo2.svg">
                    </a>
                </div>
              </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7">
                        © Copyright 2020 <br/>NAVD+C Architectural and Construction - All Rights Reserved
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">
                            <a href="https://twitter.com/nav_dc" target="_blank">
                                <span class="socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://plus.google.com/u/0/102371587651359470292" target="_blank">
                                <span class="socicon-google socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com/pg/navdesignconst/about/?ref=page_internal" target="_blank">
                                <span class="socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.instagram.com/nav_dc" target="_blank">
                                <span class="socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.linkedin.com/company/navd-c/" target="_blank">
                                <span class="socicon-linkedin socicon mbr-iconfont mbr-iconfont-social"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/nav-dropdown.js"></script>
  <script src="assets/dropdown/js/navbar-dropdown.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>
  <script src="assets/marcc/js/mymain.js"></script>


  <input name="animation" type="hidden">

  </body>


</html>

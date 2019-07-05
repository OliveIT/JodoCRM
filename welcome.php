<?php
session_start();
include("checklogin.php");
check_login();

include('dbconnection.php');

if(isset($_POST['login']))
{    
    echo "<meta http-equiv='refresh' content='0'>";
    return;
    $Q22 =$_POST['Q22'];
    $Q23 =$_POST['Q23'];
    $Q24 =$_POST['Q24'];
    $Q28 =$_POST['Q28'];
    $Q29 =$_POST['Q29'];
    $Q31 =$_POST['Q31'];
    $Q32 =$_POST['Q32'];
    $Q34 =$_POST['Q34'];
    $Q35 =$_POST['Q35'];
    $Q36 =$_POST['Q36'];
    $Q38 =$_POST['Q38'];
    $Q33 =$_POST['Q33'];
    $Q37 =$_POST['Q37'];
    $Q30 =$_POST['Q30'];
    $condosheet =$_POST['condosheet'];
    $reviewtable =$_POST['reviewtable'];
    $pressuretable =$_POST['pressuretable'];
    $otherservicetable =$_POST['otherservicetable'];
    $fencetable =$_POST['fencetable'];

    $query_u = "insert into tbl_user_umode(id, user_id, units, bldgs, storeys,
     gutters, boom, deck, green, debris, th_style, extra_access,
      roof_pitch, foliage_percent, roofmoss_percent, visual, condosheet,
       review, pressure, otherservices, fence)
         value('','$userid', '$Q22', '$Q23', '$Q24', '$Q28','$Q29', '$Q31',
          '$Q32', '$Q34', '$Q35', '$Q36', '$Q38', '$Q33', '$Q37', '$Q30',
          '$condosheet', '$reviewtable', '$pressuretable', '$otherservicetable', '$fencetable')";
    
    // $adminuser=$_POST['username'];
    // $password=md5($_POST['password']);
    // $cvmsaid=$_SESSION['cvmsaid'];

    //var_dump($_POST);
    //header('location: dashboard.php');

    /* Save rMode information */
    $req_p_type =$_POST['req_p_type'];
    $req_property_city =$_POST['req_property_city'];
    $p_name =$_POST['p_name'];
    $p_addr =$_POST['p_addr'];
    $council_name =$_POST['council_name'];
    $form_council_role =$_POST['form_council_role'];
    $council_unit =$_POST['council_unit'];
    $council_email =$_POST['council_email'];
    $p_m_company =$_POST['p_m_company'];
    $p_m_name =$_POST['p_m_name'];
    $p_m_email =$_POST['p_m_email'];
    $query_r=mysqli_query($con,"insert into tbl_user_rmode(id,property_type,property_city,property_name,
        property_addr,council_mem_name,council_mem_role,council_mem_unit,council_mem_email,property_manage_company,
        property_manage_name,property_manage_email) value('','$req_p_type', '$req_property_city', '$p_name', '$p_addr', '$council_name',
         '$form_council_role', '$council_unit', '$council_email', '$p_m_company', '$p_m_name', '$p_m_email')");

    $userid = mysqli_insert_id($con);

    if ($query_r) {
        //printf("Last inserted record has id %d\n", mysql_insert_id());                
        $msg="Visitors Quote has been added.";
    }
    else
    {
        $msg="Something Went Wrong. Please try again";
    }

    /* Save iMod information */
    $q_r_name =$_POST['q_r_name'];
    $q_r_role =$_POST['q_r_role'];
    $q_r_email =$_POST['q_r_email'];    
    $strata_num =$_POST['strata_num'];
    $datetime_local =$_POST['datetime_local'];    
    $quote_req_unit =$_POST['quote_req_unit'];
    $quote_service =$_POST['quote_service'];    

    $submit_proposal =$_POST['submit_proposal'];
    $attend_approve =$_POST['attend_approve'];    

    if ($submit_proposal == "other") {
        $p_txt = $_POST['submit_proposal_txt'];        
        $submit_proposal .= ",";
        $submit_proposal .= $p_txt;
    }

    if ($attend_approve == "other") {
        $a_txt = $_POST['attend_approve_txt'];
        $attend_approve .= ",";
        $attend_approve .= $a_txt;
    }

    $query_i=mysqli_query($con,"insert into tbl_user_imode(id, user_id, quote_req_name, quote_req_role,
      quote_req_email,submit_proposal, strata_plannum, services, upcoming_datetime, meeting, quote_req_unit)
       value('','$userid', '$q_r_name', '$q_r_role', '$q_r_email', '$submit_proposal','$strata_num',
        '$quote_service', '$datetime_local', '$attend_approve', '$quote_req_unit')");
    
    if ($query_i) {
        //printf("Last inserted record has id %d\n", mysql_insert_id());                
        $msg.="Visitors Quote has been added.";
    }
    else
    {
        $msg.="Something Went Wrong. Please try again";
    }    

    $Q22 =$_POST['$Q22'];
    $Q23 =$_POST['$Q23'];
    $Q24 =$_POST['$Q24'];
    $Q28 =$_POST['$Q28'];
    $Q29 =$_POST['$Q29'];
    $Q31 =$_POST['$Q31'];
    $Q32 =$_POST['$Q32'];
    $Q34 =$_POST['$Q34'];
    $Q35 =$_POST['$Q35'];
    $Q36 =$_POST['$Q36'];
    $Q38 =$_POST['$Q38'];
    $Q33 =$_POST['$Q33'];
    $Q37 =$_POST['$Q37'];
    $Q30 =$_POST['$Q30'];
    $condosheet =$_POST['$condosheet'];
    $reviewtable =$_POST['$reviewtable'];
    $pressuretable =$_POST['$pressuretable'];
    $otherservicetable =$_POST['$otherservicetable'];
    $fencetable =$_POST['$fencetable'];

    $query_u=mysqli_query($con,"insert into tbl_user_umode(id, user_id, units, bldgs, storeys,
     gutters, boom, deck, green, debris, th_style, extra_access,
      roof_pitch, foliage_percent, roofmoss_percent, visual, condosheet,
       review, pressure, otherservices, fence)
         value('','$userid', '$Q22', '$Q23', '$Q24', '$Q28','$Q29', '$Q31',
          '$Q32', '$Q34', '$Q35', '$Q36', '$Q38', '$Q33', '$Q37', '$Q30',
          '$condosheet', '$reviewtable', '$pressuretable', '$otherservicetable', '$fencetable')");

    if ($query_u) {
        //printf("Last inserted record has id %d\n", mysql_insert_id());                
        $msg.="Visitors Quote has been added.";
    }
    else
    {
        $msg.="Something Went Wrong. Please try again";
    }
    
    $from = "doug@jodoex.ca";
    $to = "sunnygods888@gmail.com";
    $subject = "Checking PHP mail";
    $message = "Test Mail";
    $headers = "From:" . $from;
    if (mail($to,$subject,$message, $headers)) {        
        echo "Succes mail!";
    }    
    // header('location:dashboard.php');
}

?><!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="night.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title Page-->
    <title>Property set-up</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS -->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/shield-ui.min.css'>
        
    <!-- Main CSS-->    
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="fonts/themify-icons/themify-icons.css" media="all">
    <!-- <link rel="stylesheet" href="css/style.css" media="all"> -->
    <link rel="stylesheet" href="css/mystyle.css">
    
</head>
<body class="animsition">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Welcome !</a>
            </div>
            <div class="navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#"><?php echo $_SESSION['name'];?></a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                  
                </ul>
            </div>
        </div>
    </nav>
    <div class="main">
        <div class="container">            
            <form method="POST" id="signup-form" class="signup-form">
                    <h3>
                        <span class="icon"><i class="ti-eye"></i></span>                        
                        <span class="title_text">R-MODE</span>
                    </h3>
                    <fieldset id="rMode">
                        <legend>
                            <span class="step-heading">Reconnaissance Mode: </span>
                            <span class="step-number">Step 1</span>
                        </legend>
                        <!-- <div class="form-group">                            
                            <strong style="color:#2c2cca;">Enter new property</strong>
                        </div> -->                                           

                        <div class="form-select">
                            <label for="req_p_type" style="color: #fa5e5b; font-weight: 100;" class="form-label">Property type</label>
                            <div class="select-list-city mdb-select md-form colorful-select dropdown-primary">
                                <select class="select-css" name="req_p_type" id="req_p_type" required="">
                                    <option value="townhouse">TownHouse</option>
                                    <option value="condominium">Condominium</option>
                                    <option value="both">TownHouse & Condominium</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-select">
                            <label for="req_property_city" style="color: #fa5e5b; font-weight: 100;" class="form-label">Property city</label>
                            <div class="select-list-city">
                                <select class="select-css" name="req_property_city" id="req_property_city">
                                    <option value="">Choose</option>
                                    <option value="Abbotsford">Abbotsford</option>
                                    <option value="Burnaby">Burnaby</option>
                                    <option value="Chilliwack">Chilliwack</option>
                                    <option value="Conquitlam">Conquitlam</option>
                                    <option value="Delta">Delta</option>
                                    <option value="Maple Ridge">Maple Ridge</option>
                                    <option value="Mission">Mission</option>
                                    <option value="New Westminster">New Westminster</option>
                                    <option value="North Vancouver">North Vancouver</option>
                                    <option value="Port Conquitlam">Port Conquitlam</option>
                                    <option value="Port Moody">Port Moody</option>
                                    <option value="Richmond">Richmond</option>
                                    <option value="Surrey">Surrey</option>
                                    <option value="Vancouver">Vancouver</option>
                                    <option value="West Vancouver">West Vancouver</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group custom_form">
                            <div class="question">                                
                                <input type="text" name="p_name" id="p_name"/>
                                <label for="p_name" class="form-label">Property name</label>
                            </div>
                            <div class="question">                                
                                <input type="text" name="p_addr" id="p_addr" value=""/>
                                <label for="p_addr" class="form-label">Property address</label>
                            </div>                          
                        </div>
                        
                        <div class="form-group inputGroup">
                            <!-- <input id="option1" name="option1" type="checkbox"/> -->
                            <!-- <input type="checkbox" name="update_option" id="update_option" checked="unchecked"  style="width:30px; display: inline-block; margin-top:15px;"/><span>Update existing property</span> -->
                            <input type="checkbox" name="update_option" id="update_option" checked="unchecked" style="padding-left:10px;"/>
                            <label for="update_option">Update existing property</label>
                        </div>
                        <div class="form-group custom_form" id="update_property">
                            <div class="question">                                                                
                                <input type="text" name="council_name" id="council_name"/>
                                <label for="council_name" class="form-label">Council member's name</label>
                            </div>
                            <div class="question">
                                <input type="text" name="council_unit" id="council_unit"/>
                                <label for="council_unit" class="form-label">Council member's unit#</label>
                            </div>
                            <div class="question">
                                <input type="email" name="council_email" id="council_email"/>
                                <label for="council_email" class="form-label">Council member's email address</label>
                            </div>                            
                            <div class="form-select">
                                <label for="form_council_role" class="form-label required" style="color: #fa5e5b; font-weight: 100;">Council member's role</label>
                                <div class="select-list-role">
                                    <select class="select-css" name="form_council_role" id="form_council_role">
                                        <option value="">Choose</option>
                                        <option value="req_Prisident">president</option>
                                        <option value="req_vice_president">vice president</option>
                                        <option value="req_treasurer">treasurer</option>
                                        <option value="req_c_mem">council member</option>
                                        <option value="req_c_mem_charge">council member in charge of maintenance</option>
                                        <option value="req_PM">PM</option>
                                        <option value="req_manager">caretaker/manager</option>
                                    </select>
                                </div>
                            </div>

                            <div class="question">                                
                                <input type="text" name="p_m_company" id="p_m_company" value=""/>
                                <label for="p_m_company" class="form-label">Property management company</label>
                            </div>
                            <div class="question">                                
                                <input type="text" name="p_m_name" id="p_m_name" value=""/>
                                <label for="p_m_name" class="form-label">Property management name</label>
                            </div>
                            <div class="question">                                
                                <input type="email" name="p_m_email" id="p_m_email" value=""/>
                                <label for="p_m_email" class="form-label">Property management email address</label>
                            </div>                            
                        </div>
                        
                    </fieldset>

                    <h3>
                        <span class="icon"><i class="ti-user"></i></span>
                        <!-- <span class="icon">
                            <img class="manImg" src="images/interview.png">
                        </span> -->
                        <span class="title_text">I-MODE</span>
                    </h3>
                    <fieldset id="iMode">
                        <legend>
                            <span class="step-heading" name="header_property_name" id="header_property_name">Property name: </span>
                            <span class="step-number">Step 2</span>
                        </legend>
                        <div class="form-group">

                            <div class="form-group">                            
                                <input type="checkbox" name="check_council" id="check_council" checked="unchecked"  style="width:30px; display: inline-block; margin-top:15px;"/><span>The quote requester is the council member on file</span>
                            </div>

                            <div class="form-group custom_form" style="padding-bottom: 5px;">
                                <div class="question">                                    
                                    <input type="text" name="q_r_name" id="q_r_name" valu=""/>
                                    <label for="q_r_name" class="form-label">Quote requester’s first and last names</label>
                                </div>

                                <div class="question">                                    
                                    <input type="email" name="q_r_email" id="q_r_email" valu=""/>
                                    <label for="q_r_email" class="form-label">Quote requester’s email address</label>
                                </div>

                                <div class="question">                                    
                                    <input type="number" name="quote_req_unit" id="quote_req_unit" value="" />
                                    <label for="quote_req_unit" class="form-label">Quote requester’s unit #</label>
                                </div>
                                
                                <div class="form-select">
                                    <label for="q_r_role" class="form-label required" style="color:#fa5e5b; font-weight: 100;">Quote requester’s role</label>
                                    <div class="select-list">
                                        <select class="select-css" name="q_r_role" id="q_r_role">
                                            <option >Choose</option>
                                            <option disabled>_______________</option>
                                            <option value="Prisident">president</option>
                                            <option value="vice president">vice prisident</option>
                                            <option value="treasurer">treasurer</option>
                                            <option value="council member">council member</option>
                                            <option value="council member in charge of maintenance">council member in charge of maintenance</option>
                                            <option value="PM">PM</option>
                                            <option value="caretaker/manager">caretaker/manager</option>
                                        </select>
                                    </div>
                                </div>
                            </div>                            

                            <div class="form-groupd custom_form" style="padding-top: 5px;">
                                <div class="question">                                    
                                    <input type="text" name="req_council_name" id="req_council_name" value="" />
                                    <label for="req_council_name" class="form-label">Council member's name</label>
                                </div>                                

                                <div class="question">                                    
                                    <input type="text" name="req_council_unit" id="req_council_unit" />
                                    <label for="req_council_unit" class="form-label">Council member's unit#</label>
                                </div>

                                <div class="question">                                    
                                    <input type="email" name="req_council_email" id="req_council_email" />
                                    <label for="req_council_email" class="form-label">Council member's email address</label>
                                </div>

                                <div class="form-select">
                                    <label for="req_council_role" class="form-label required" style="color: #fa5e5b; font-weight: 100;">Council member's role</label>
                                    <div class="select-list">
                                        <select class="select-css" name="req_council_role" id="req_council_role">
                                            <option >Choose</option>
                                            <option disabled>_______________</option>
                                            <option value="req_Prisident">president</option>
                                            <option value="req_vice_president">vice prisident</option>
                                            <option value="req_treasurer">treasurer</option>
                                            <option value="req_c_mem">council member</option>
                                            <option value="req_c_mem_charge">council member in charge of maintenance</option>
                                            <option value="req_PM">PM</option>
                                            <option value="req_manager">caretaker/manager</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
  
                            <div class="form-group">
                                <label for="submit_proposal_div" class=" form-control-label" style="color: #fa5e5b; font-weight: 100;" >permission granted to submit proposal&nbsp;<b class="icon_required" style="color:#FF0000">*</b></label>
                                <div class="col-12 col-md-9" id="submit_proposal_div">                                                    
                                    <input type="radio" name="submit_proposal" id="submit_proposal_yes" value="yes" checked style="width: 30px; display: inline-block;"> yes<br>
                                    <input type="radio" name="submit_proposal" id="submit_proposal_no" value="no" style="width: 30px; display: inline-block;"> no<br>
                                    <input type="radio" name="submit_proposal" id="submit_proposal_other" value="other" style="width: 30px; display: inline-block;"> other                                    
                                    <label for="submit_proposal_txt" class="inp">
                                        <input type="text" id="submit_proposal_txt" name="submit_proposal_txt" id="submit_proposal_txt" value="" class="form-control" placeholder="&nbsp;">                                        
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group custom_form">
                                <div class="question">                                    
                                    <input type="text" name="strata_num" id="strata_num" value=""/>
                                    <label for="strata_num" class="form-label">Strata plan number</label>
                                </div>
                            </div>                        

                            <div class="form-group">
                                <label for="quote_service-input" class=" form-control-label" style="color: #fa5e5b; font-weight: 100;">services for which a quote is desired</label>
                                <div class="col-12 col-md-9">
                                    <input type="checkbox" name="quote_service[]" class="multiple_choice" id="quote_service_0" value="none requested"  checked style="width: 30px; display: inline-block;"> none requested<br>
                                    <input type="checkbox" name="quote_service[]" class="multiple_choice" id="quote_service_1" value="gutter cleans" style="width: 30px; display: inline-block;"> gutter cleans<br>
                                    <input type="checkbox" name="quote_service[]" class="multiple_choice" id="quote_service_2" value="siding package" style="width: 30px; display: inline-block;"> siding package<br>
                                    <input type="checkbox" name="quote_service[]" class="multiple_choice" id="quote_service_3" value="roof moss control" style="width: 30px; display: inline-block;"> roof moss control<br>
                                    <input type="checkbox" name="quote_service[]" class="multiple_choice" id="quote_service_4" value="window cleaning" style="width: 30px; display: inline-block;"> window cleaning<br>
                                    <input type="checkbox" name="quote_service[]" class="multiple_choice" id="quote_service_5" value="dryer vent cleaning" style="width: 30px; display: inline-block;"> dryer vent cleaning<br>
                                    <input type="checkbox" name="quote_service[]" class="multiple_choice" id="quote_service_6" value="concrete pressure washing" style="width: 30px; display: inline-block;"> concrete pressure washing<br>
                                    <input type="checkbox" name="quote_service[]" class="multiple_choice" id="quote_service_7" value="exterior face of gutter cleaning" style="width: 30px; display: inline-block;"> exterior face of gutter cleaning<br>
                                    <input type="checkbox" name="quote_service[]" class="multiple_choice" id="quote_service_8" value="roof debris removal" style="width: 30px; display: inline-block;"> roof debris removal<br>
                                    <input type="checkbox" name="quote_service[]" class="multiple_choice" id="quote_service_9" value="others" style="width: 30px; display: inline-block;"> others:                                    
                                    <label for="quote_service_text" class="inp">
                                        <input type="text" id="quote_service_text" name="quote_service_text" value="" class="form-control" placeholder="&nbsp;">                                        
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datetime_local" class="form-label" style="color: #fa5e5b; font-weight: 100;">DateTime of upcoming council meeting</label>
                                <input type="datetime-local" name="datetime_local" id="datetime_local" value="2019-06-13T09:00"/>
                            </div>                            

                            <div class="form-group">
                                <label for="attend_approve_div" class="form-control-label" style="color: #fa5e5b; font-weight: 100;">Meeting attendance approved?</label>
                                <div class="col-12 col-md-9" id ="attend_approve_div">                                                    
                                    <input type="radio" name="attend_approve" id="attend_approve_yes" value="yes" checked style="width: 30px; display: inline-block;"> yes<br>
                                    <input type="radio" name="attend_approve" id="attend_approve_no" value="no" style="width: 30px; display: inline-block;"> no<br>
                                    <input type="radio" name="attend_approve" id="attend_approve_other" value="other" style="width: 30px; display: inline-block;"> other                                    
                                    <label for="attend_approve_txt" class="inp">
                                        <input type="text" id="attend_approve_txt" name="attend_approve_txt" value="" class="form-control" placeholder="&nbsp;">                                        
                                        <span class="border"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group custom_form" style="padding-bottom:5px;">
                                <div class="question">                                    
                                    <input type="text" name="iMode_p_m_company" id="iMode_p_m_company" value=""/>
                                    <label for="iMode_p_m_company" class="form-label">Property management company</label>
                                </div>

                                <div class="question">                                    
                                    <input type="text" name="iMode_p_m_name" id="iMode_p_m_name" value=""/>
                                    <label for="iMode_p_m_name" class="form-label">Property management name</label>
                                </div>

                                <div class="question">                                    
                                    <input type="email" name="iMode_p_m_email" id="iMode_p_m_email" value=""/>
                                    <label for="iMode_p_m_email" class="form-label">Property management email address</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h3>
                        <span class="icon"><i class="ti-write"></i></span>
                        <span class="title_text">U-MODE</span>
                    </h3>
                    <fieldset id="uMode">
                        <legend>
                            <span class="step-heading">Congratulations on acquiring a quote request! </span>
                            <span class="step-number">Step 3</span>
                        </legend>

                        <div class="form-group" id="select_townhouse">
                            <div class="form-group">
                                <label for="adjust_price">Considerations for adjusting the price up</label>
                                <select  class="form-control select-css" name="adjust_price" id="adjust_price">
                                    <option style="color:#fa5e5b;">Answer Question</option>
                                    <option disabled>_______________</option>
                                    <option value="Q29">Boom lift requirement</option>
                                    <option value="Q30">Recommended services based on visual</option>
                                    <option value="Q31">Deck mounting?</option>
                                    <option value="Q32">Excessive green on siding?</option>
                                    <option value="Q33">Percentage of gutters that have foliage feeders</option>
                                    <option value="Q34">Do you recommend roof debris removal together with gutter cleaning?</option>
                                    <option value="Q35">Over/under style townhouse?</option>
                                    <option value="Q36">Extraordinary access problem?</option>
                                    <option value="Q37">Percentage to increase cost for excessive roof moss?</option>
                                    <option value="Q38">Roof pitch unwalkable?</option>
                                </select>
                            </div>
                            
                            <div class="form-group" id="Q29_View">
                                <label for="Q29">Boom lift requirement</label>
                                <select class="form-control" name="Q29" id="Q29">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="form-group" id="Q30_View">
                                <label for="Q30">Recommended services based on visual</label>
                                <select class="form-control" name="Q30" id="Q30">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="form-group" id="Q31_View">
                                <label for="Q31">Deck mounting?</label>
                                <select class="form-control" name="Q31" id="Q31">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="form-group" id="Q32_View">
                                <label for="Q32">Excessive green on siding?</label>
                                <select class="form-control" nam="Q32" id="Q32">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="form-group" id="Q33_View">                                
                                <div class="custom_form" style="padding:0px;">
                                    <div class="question">                                        
                                        <label for="Q33" class="form-label">Percentage of gutters that have foliage feeders</label>
                                        <input type="number" name="Q33" id="Q33" value=""/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group" id="Q34_View">
                                <label for="Q34">Do you recommend roof debris removal together with gutter cleaning?</label>
                                <select class="form-control" name="Q34" id="Q34">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="form-group" id="Q35_View">
                                <label for="Q35">Over/under style townhouse?</label>
                                <select class="form-control" name="Q35" id="Q35">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="form-group" id="Q36_View">
                                <label for="Q36">Extraordinary access problem?</label>
                                <select class="form-control" name="Q36" id="Q36">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="form-group" id="Q37_View">                                
                                <div class="custom_form" style="padding:0px;">
                                    <div class="question">                                        
                                        <label for="Q37" class="form-label">Percentage to increase cost for excessive roof moss?</label>
                                        <input type="number" name="Q37" id="Q37" value=""/>
                                    </div>
                                </div>
                            </div>                            

                            <div class="form-group" id="Q38_View">
                                <label for="Q38">Roof pitch unwalkable?</label>
                                <select class="form-control" name="Q38" id="Q38">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="adjust_TH_Info">Information</label>
                                <select class="select-css form-control" name="adjust_TH_Info" id="adjust_TH_Info">
                                    <option style="color:#fa5e5b;">Answer Question</option>
                                    <option disabled>_______________</option>
                                    <option value="Q22">Number of units</option>
                                    <option value="Q23">Number of buildings</option>
                                    <option value="Q24">Number of storeys</option>
                                    <option value="Q28">Linear feet of gutters</option>
                                </select>
                            </div>

                            <div class="form-group custom_form" id="Q22_View" style="padding:0px;">
                                <div class="question">                                
                                    <input type="number" name="Q22" id="Q22" value="0"/>
                                    <label for="Q22">Units</label>
                                </div>
                            </div>
                            
                            <div class="form-group custom_form" id="Q23_View" style="padding:0px;">
                                <div class="question">
                                    <input type="number" name="Q23" id="Q23" value="0"/>
                                    <label for="Q23">Buildings</label>
                                </div>
                            </div>

                            <div class="form-group custom_form" id="Q24_View" style="padding:0px;">
                                <div class="question">                                    
                                    <input type="number" name="Q24" id="Q24" value="0"/>
                                    <label for="Q24">Storeys</label>
                                </div>
                            </div>

                            <div class="form-group custom_form" id="Q28_View" style="padding:0px;">
                                <div class="question">
                                    <input type="number" name="Q28" id="Q28" value="0"/>
                                    <label for="Q28">Gutters</label>
                                </div>
                            </div>
                            
                        </div>                        

                        <!-- Condo Worksheet dropdown section -->
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <div class="ibox collapsed">
                                    <div class="ibox-title" style="margin-top:10px;">
                                        <h5>Condo Worksheet dropdown section</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link" href="#">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ibox-content" style="margin-top:10px;" style="display: none;">
                                        <div id="condo_table_view" class="table-editable">
                                            <span class="condosheet_table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
                                                class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
                                            <table class="table table-bordered table-responsive-md table-striped text-center" id="condo_table" name="condo_table">
                                                <thead>
                                                <tr>
                                                    <th class="text-center column1">Bldgs</th>
                                                    <th class="text-center column2">Width</th>
                                                    <th class="text-center column3">Length</th>
                                                    <th class="text-center column4">LFC</th>
                                                    <th class="text-center column5">Floors</th>                                            
                                                    <th class="text-center column6">Option</th>
                                                </tr>
                                                </thead>
                                                <tbody name="condo_table_body" id="condo_table_body">
                                                    <tr style="padding: 0px;">
                                                        <td class="pt-3-half column1" contenteditable="true" style="margin-bottom:0px;">1</td>
                                                        <td class="pt-3-half column2" contenteditable="true" name="condo_table_width"  style="margin-bottom:0px;"></td>
                                                        <td class="pt-3-half column3" contenteditable="true" style="margin-bottom:0px;"></td>
                                                        <td class="pt-3-half column4" contenteditable="true" style="margin-bottom:0px;"></td>
                                                        <td class="pt-3-half column5" contenteditable="true" style="margin-bottom:0px;"></td>
                                                        <td style="margin-bottom:0px;">
                                                        <span class="table-remove column6"><button type="button"
                                                            class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                                        </td>
                                                    </tr>
                                                    <!-- This is our clonable table line -->
                                                    <tr style="padding: 0px;">
                                                        <td class="pt-3-half" contenteditable="true" style="margin-bottom:0px;">2</td>
                                                        <td class="pt-3-half" contenteditable="true" style="margin-bottom:0px;"></td>
                                                        <td class="pt-3-half" contenteditable="true" style="margin-bottom:0px;"></td>
                                                        <td class="pt-3-half" contenteditable="true" style="margin-bottom:0px;"></td>
                                                        <td class="pt-3-half" contenteditable="true" style="margin-bottom:0px;"></td>
                                                        <td style="margin-bottom:0px;">
                                                        <span class="table-remove"><button type="button"
                                                            class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                                        </td>
                                                    </tr>
                                                    <!-- This is our clonable table line -->
                                                    <tr style="padding: 0px;">
                                                        <td  style="margin-bottom:0px;" class="pt-3-half" contenteditable="true">3</td>
                                                        <td  style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td  style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td  style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" >
                                                        <span class="table-remove"><button type="button"
                                                            class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input id="calc" type="button" value="calc" onclick="get_Allservice_info();" />

                        <!-- Review and Confirm dropdown section -->
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <div class="ibox collapsed">
                                    <div class="ibox-title" style="margin-top:10px;">
                                        <h5>Review and Confirm dropdown section</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link" href="#">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>                                            
                                        </div>
                                    </div>                                    
                                    <div class="ibox-content" style="margin-top:10px;" style="display: none;">                                    
                                        <div class="table100">
                                            <table id="review_table">
                                                <thead>
                                                    <tr class="table100-head">                                        
                                                        <th class="column1">Main Services</th>
                                                        <th class="column2">Total</th>
                                                        <th class="column3">Unit</th>
                                                        <th class="column4">Bldg</th>
                                                        <th class="column5">Adjust</th>
                                                        <th class="column6">Update</th>
                                                    </tr>
                                                </thead>
                                                <tbody name="review_table_body" id="review_table_body">
                                                    <!-- Siding package -->
                                                    <tr>                                    
                                                        <td class="column1">Siding package</td>
                                                        <td class="column2">$0</td>
                                                        <td class="column3">0</td>
                                                        <td class="column4">0</td>                                                    
                                                        <td class="column5">
                                                            <div id=spinner>
                                                                <div class="input-group spinner">
                                                                    <input type="text" maxlength="3" class="form-control txtinput" value="0%" style="padding-left: 5px;">
                                                                    <div class="input-group-btn-vertical" style="position: absolute; right: 0; padding: 0px 5px;">
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-up" style="color: #C41C01"></i>
                                                                        </button>
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-down" style="color: #20AD4E"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>                                                        
                                                        <td class="column6">$0<span class="label label-info"></span></td>
                                                    </tr>
                                                    <!-- Siding only -->
                                                    <tr>                                    
                                                        <td class="column1">Siding only</td>
                                                        <td class="column2">$0</td>
                                                        <td class="column3">0</td>
                                                        <td class="column4">0</td>                                                    
                                                        <td class="column5">
                                                            <div id=spinner>
                                                                <div class="input-group spinner">
                                                                    <input type="text" maxlength="3" class="form-control txtinput" value="0%" style="padding-left: 5px;">
                                                                    <div class="input-group-btn-vertical" style="position: absolute; right: 0; padding: 0px 5px;">
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-up" style="color: #C41C01"></i>
                                                                        </button>
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-down" style="color: #20AD4E"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>                                                        
                                                        <td class="column6">$0<span class="label label-info"></span></td>
                                                    </tr>
                                                    <!-- Gutter cleanse -->
                                                    <tr>                                    
                                                        <td class="column1">Gutter cleanse</td>
                                                        <td class="column2">$0</td>
                                                        <td class="column3">0</td>
                                                        <td class="column4">0</td>                                                    
                                                        <td class="column5">
                                                            <div id=spinner>
                                                                <div class="input-group spinner">
                                                                    <input type="text" maxlength="3" class="form-control txtinput" value="0%" style="padding-left: 5px;">
                                                                    <div class="input-group-btn-vertical" style="position: absolute; right: 0; padding: 0px 5px;">
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-up" style="color: #C41C01"></i>
                                                                        </button>
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-down" style="color: #20AD4E"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>                                                        
                                                        <td class="column6">$0<span class="label label-info"></span></td>
                                                    </tr>
                                                    <!-- Gutter ex face -->
                                                    <tr>                                    
                                                        <td class="column1">Gutter ex face</td>
                                                        <td class="column2">$0</td>
                                                        <td class="column3">0</td>
                                                        <td class="column4">0</td>                                                    
                                                        <td class="column5">
                                                            <div id=spinner>
                                                                <div class="input-group spinner">
                                                                    <input type="text" maxlength="3" class="form-control txtinput" value="0%" style="padding-left: 5px;">
                                                                    <div class="input-group-btn-vertical" style="position: absolute; right: 0; padding: 0px 5px;">
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-up" style="color: #C41C01"></i>
                                                                        </button>
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-down" style="color: #20AD4E"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>                                                        
                                                        <td class="column6">$0<span class="label label-info"></span></td>
                                                    </tr>
                                                    <!-- Windows -->
                                                    <tr>                                    
                                                        <td class="column1">Windows</td>
                                                        <td class="column2">$0</td>
                                                        <td class="column3">0</td>
                                                        <td class="column4">0</td>                                                    
                                                        <td class="column5">
                                                            <div id=spinner>
                                                                <div class="input-group spinner">
                                                                    <input type="text" maxlength="3" class="form-control txtinput" value="0%" style="padding-left: 5px;">
                                                                    <div class="input-group-btn-vertical" style="position: absolute; right: 0; padding: 0px 5px;">
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-up" style="color: #C41C01"></i>
                                                                        </button>
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-down" style="color: #20AD4E"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>                                                        
                                                        <td class="column6">$0<span class="label label-info"></span></td>
                                                    </tr>
                                                    <!-- DVC out -->
                                                    <tr>                                    
                                                        <td class="column1">DVC out</td>
                                                        <td class="column2">$0</td>
                                                        <td class="column3">0</td>
                                                        <td class="column4">0</td>                                                    
                                                        <td class="column5">
                                                            <div id=spinner>
                                                                <div class="input-group spinner">
                                                                    <input type="text" maxlength="3" class="form-control txtinput" value="0%" style="padding-left: 5px;">
                                                                    <div class="input-group-btn-vertical" style="position: absolute; right: 0; padding: 0px 5px;">
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-up" style="color: #C41C01"></i>
                                                                        </button>
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-down" style="color: #20AD4E"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>                                                        
                                                        <td class="column6">$0<span class="label label-info"></span></td>
                                                    </tr>
                                                    <!-- DVC in & out -->
                                                    <tr>                                    
                                                        <td class="column1">DVC in & out</td>
                                                        <td class="column2">$0</td>
                                                        <td class="column3">0</td>
                                                        <td class="column4">0</td>                                                    
                                                        <td class="column5">
                                                            <div id=spinner>
                                                                <div class="input-group spinner">
                                                                    <input type="text" maxlength="3" class="form-control txtinput" value="0%" style="padding-left: 5px;">
                                                                    <div class="input-group-btn-vertical" style="position: absolute; right: 0; padding: 0px 5px;">
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-up" style="color: #C41C01"></i>
                                                                        </button>
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-down" style="color: #20AD4E"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>                                                        
                                                        <td class="column6">$0<span class="label label-info"></span></td>
                                                    </tr>
                                                    <!-- Roof spray -->
                                                    <tr>                                    
                                                        <td class="column1">Roof spray</td>
                                                        <td class="column2">$0</td>
                                                        <td class="column3">0</td>
                                                        <td class="column4">0</td>                                                    
                                                        <td class="column5">
                                                            <div id=spinner>
                                                                <div class="input-group spinner">
                                                                    <input type="text" maxlength="3" class="form-control txtinput" value="0%" style="padding-left: 5px;">
                                                                    <div class="input-group-btn-vertical" style="position: absolute; right: 0; padding: 0px 5px;">
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-up" style="color: #C41C01"></i>
                                                                        </button>
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-down" style="color: #20AD4E"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>                                                        
                                                        <td class="column6">$0<span class="label label-info"></span></td>
                                                    </tr>
                                                    <!-- Roof manual -->
                                                    <tr>                                    
                                                        <td class="column1">Roof manual</td>
                                                        <td class="column2">$0</td>
                                                        <td class="column3">0</td>
                                                        <td class="column4">0</td>                                                    
                                                        <td class="column5">
                                                            <div id=spinner>
                                                                <div class="input-group spinner">
                                                                    <input type="text" maxlength="3" class="form-control txtinput" value="0%" style="padding-left: 5px;">
                                                                    <div class="input-group-btn-vertical" style="position: absolute; right: 0; padding: 0px 5px;">
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-up" style="color: #C41C01"></i>
                                                                        </button>
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-down" style="color: #20AD4E"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>                                                        
                                                        <td class="column6">$0<span class="label label-info"></span></td>
                                                    </tr>
                                                    <!-- Roof guarantee -->
                                                    <tr>                                    
                                                        <td class="column1">Roof guarantee</td>
                                                        <td class="column2">$0</td>
                                                        <td class="column3">0</td>
                                                        <td class="column4">0</td>                                                    
                                                        <td class="column5">
                                                            <div id=spinner>
                                                                <div class="input-group spinner">
                                                                    <input type="text" maxlength="3" class="form-control txtinput" value="0%" style="padding-left: 5px;">
                                                                    <div class="input-group-btn-vertical" style="position: absolute; right: 0; padding: 0px 5px;">
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-up" style="color: #C41C01"></i>
                                                                        </button>
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-down" style="color: #20AD4E"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>                                                        
                                                        <td class="column6">$0<span class="label label-info"></span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Dropdown section for Pressure Washing -->
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <div class="ibox collapsed">
                                    <div class="ibox-title" style="margin-top:10px;">
                                        <h5>Dropdown section for Pressure Washings</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link" href="#">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>                                            
                                        </div>
                                    </div>
                                    <div class="ibox-content" style="margin-top:10px;" style="display: none;">
                                        <div id="contractual_table" class="table-editable">                                
                                            <table class="table table-bordered table-responsive-md table-striped text-center" name="pressure_table" id="pressure_table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Clarifying Contractual Description(s)</th>
                                                        <th class="text-center">Feet²</th>
                                                        <th class="text-center">Price(s)</th>                                        
                                                    </tr>
                                                </thead>
                                                <tbody name="pressure_table_body" id="pressure_table_body">
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin: 0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin: 0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin: 0px;" class="pt-3-half" contenteditable="true"></td>
                                                    </tr>
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin: 0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin: 0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin: 0px;" class="pt-3-half" contenteditable="true"></td>
                                                    </tr>
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin: 0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin: 0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin: 0px;" class="pt-3-half" contenteditable="true"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="form-group" id="contractual_totalprice">
                                            <div class="form-group">
                                                <label for="Q23">Total:  </label>
                                                <input type="text" name="totalprice_contractual" id="totalprice_contractual" value="$0"/>
                                            </div>
                                            <input id="pressure_calc" type="button" class="btn btn-primary btn-sm" value="confirm pressure washing prices" onclick="get_pressure_price();" />
                                            <!-- <button style="text-align: center; margin-top:10px;" class="btn btn-primary btn-sm" name="totalprice" onclick="get_pressure_price();">confirm pressure washing prices</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Dropdown section for Other Services -->
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <div class="ibox collapsed">
                                    <div class="ibox-title" style="margin-top:10px;">
                                        <h5>Other Services</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link" href="#">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>                                            
                                        </div>
                                    </div>
                                    <div class="ibox-content" style="margin-top:10px;" style="display: none;">
                                        <div id="otherservice_table" class="table-editable">                                
                                            <table class="table table-bordered table-responsive-md table-striped text-center" name="otherservice_table" id="otherservice_table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Service Name</th>
                                                        <th class="text-center">Price</th>
                                                        <th class="text-center">Man-Hours</th>                                        
                                                    </tr>
                                                </thead>
                                                <tbody name="otherservice_table_body" id="otherservice_table_body">
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                    </tr>
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                    </tr>
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                    </tr>
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                    </tr>
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                    </tr>
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                    </tr>
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                    </tr>
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                    </tr>
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                    </tr>
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="form-group" id="contractual_totalprice">                                            
                                            <input id="otherservice_calc" type="button" class="btn btn-primary btn-sm" value="confirm prices for other services" onclick="calc_otherservice_price();" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Dropdown section for Fence Cleaning -->
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <div class="ibox collapsed">
                                    <div class="ibox-title" style="margin-top:10px;" style="display: none;">
                                        <h5>Fence Cleaning</h5>
                                        <div class="ibox-tools">
                                            <a class="collapse-link" href="#">
                                                <i class="fa fa-chevron-up"></i>
                                            </a>                                            
                                        </div>
                                    </div>
                                    <div class="ibox-content" style="margin-top:10px;">
                                        <div class="table-editable">                                
                                            <table class="table table-bordered table-responsive-md table-striped text-center" name="fence_table" id="fence_table">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Clarifying fence cleaning description</th>
                                                        <th class="text-center">L</th>
                                                        <th class="text-center">H</th>
                                                        <th class="text-center">Both</th>
                                                        <th class="text-center">Adj%</th>
                                                        <th class="text-center">Price</th>
                                                    </tr>
                                                </thead>
                                                <tbody name="fence_table_body" id="fence_table_body">
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half"><input type="checkbox" class="checkthis" style="margin-top: 10px;" /></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half">
                                                            <div id=spinner1>
                                                                <div class="input-group spinner1">
                                                                    <input type="text" maxlength="3" class="form-control txtinput" value="0%" style="padding-left: 5px;">
                                                                    <div class="input-group-btn-vertical" style="position: absolute; right: 0; padding: 0px 5px;">
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-up" style="color: #C41C01"></i>
                                                                        </button>
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-down" style="color: #20AD4E"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half"></td>
                                                    </tr>
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half"><input type="checkbox" class="checkthis" style="margin-top: 10px;" /></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half">
                                                            <div id=spinner1>
                                                                <div class="input-group spinner1">
                                                                    <input type="text" maxlength="3" class="form-control txtinput" value="0%" style="padding-left: 5px;">
                                                                    <div class="input-group-btn-vertical" style="position: absolute; right: 0; padding: 0px 5px;">
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-up" style="color: #C41C01"></i>
                                                                        </button>
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-down" style="color: #20AD4E"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half"></td>
                                                    </tr>
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half"><input type="checkbox" class="checkthis" style="margin-top: 10px;" /></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half">
                                                            <div id=spinner1>
                                                                <div class="input-group spinner1">
                                                                    <input type="text" maxlength="3" class="form-control txtinput" value="0%" style="padding-left: 5px;">
                                                                    <div class="input-group-btn-vertical" style="position: absolute; right: 0; padding: 0px 5px;">
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-up" style="color: #C41C01"></i>
                                                                        </button>
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-down" style="color: #20AD4E"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half"></td>
                                                    </tr>
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half"><input type="checkbox" class="checkthis" style="margin-top: 10px;" /></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half">
                                                            <div id=spinner1>
                                                                <div class="input-group spinner1">
                                                                    <input type="text" maxlength="3" class="form-control txtinput" value="0%" style="padding-left: 5px;">
                                                                    <div class="input-group-btn-vertical" style="position: absolute; right: 0; padding: 0px 5px;">
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-up" style="color: #C41C01"></i>
                                                                        </button>
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-down" style="color: #20AD4E"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half"></td>
                                                    </tr>
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half"><input type="checkbox" class="checkthis" style="margin-top: 10px;" /></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half">
                                                            <div id=spinner1>
                                                                <div class="input-group spinner1">
                                                                    <input type="text" maxlength="3" class="form-control txtinput" value="0%" style="padding-left: 5px;">
                                                                    <div class="input-group-btn-vertical" style="position: absolute; right: 0; padding: 0px 5px;">
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-up" style="color: #C41C01"></i>
                                                                        </button>
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-down" style="color: #20AD4E"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half"></td>
                                                    </tr>
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half"><input type="checkbox" class="checkthis" style="margin-top: 10px;" /></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half">
                                                            <div id=spinner1>
                                                                <div class="input-group spinner1">
                                                                    <input type="text" maxlength="3" class="form-control txtinput" value="0%" style="padding-left: 5px;">
                                                                    <div class="input-group-btn-vertical" style="position: absolute; right: 0; padding: 0px 5px;">
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-up" style="color: #C41C01"></i>
                                                                        </button>
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-down" style="color: #20AD4E"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half"></td>
                                                    </tr>
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half"><input type="checkbox" class="checkthis" style="margin-top: 10px;" /></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half">
                                                            <div id=spinner1>
                                                                <div class="input-group spinner1">
                                                                    <input type="text" maxlength="3" class="form-control txtinput" value="0%" style="padding-left: 5px;">
                                                                    <div class="input-group-btn-vertical" style="position: absolute; right: 0; padding: 0px 5px;">
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-up" style="color: #C41C01"></i>
                                                                        </button>
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-down" style="color: #20AD4E"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half"></td>
                                                    </tr>
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half"><input type="checkbox" class="checkthis" style="margin-top: 10px;" /></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half">
                                                            <div id=spinner1>
                                                                <div class="input-group spinner1">
                                                                    <input type="text" maxlength="3" class="form-control txtinput" value="0%" style="padding-left: 5px;">
                                                                    <div class="input-group-btn-vertical" style="position: absolute; right: 0; padding: 0px 5px;">
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-up" style="color: #C41C01"></i>
                                                                        </button>
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-down" style="color: #20AD4E"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half"></td>
                                                    </tr>
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half"><input type="checkbox" class="checkthis" style="margin-top: 10px;" /></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half">
                                                            <div id=spinner1>
                                                                <div class="input-group spinner1">
                                                                    <input type="text" maxlength="3" class="form-control txtinput" value="0%" style="padding-left: 5px;">
                                                                    <div class="input-group-btn-vertical" style="position: absolute; right: 0; padding: 0px 5px;">
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-up" style="color: #C41C01"></i>
                                                                        </button>
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-down" style="color: #20AD4E"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half"></td>
                                                    </tr>
                                                    <tr style="padding-top:10px; padding-bottom:10px;">
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half" contenteditable="true"></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half"><input type="checkbox" class="checkthis" style="margin-top: 10px;"/></td>
                                                        <td style="margin-bottom:0px;" class="pt-3-half">
                                                            <div id=spinner1>
                                                                <div class="input-group spinner1">
                                                                    <input type="text" maxlength="3" class="form-control txtinput" value="0%" style="padding-left: 5px;">
                                                                    <div class="input-group-btn-vertical" style="position: absolute; right: 0; padding: 0px 5px;">
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-up" style="color: #C41C01"></i>
                                                                        </button>
                                                                        <button class="btn btn-default" type="button" style="line-height: 0; padding: 0; display: block;"><i class="fa fa-caret-down" style="color: #20AD4E"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="pt-3-half"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="form-group" id="contractual_totalprice">
                                            <div class="form-group">
                                                <label for="total_linear_feet" class="form-label">Total linear feet of fencing / deck glass</label>
                                                <input type="number" name="total_linear_feet" id="total_linear_feet" value="" />
                                            </div>
                                            <div class="form-group">
                                                <label for="height_fence" class="form-label">Height of fence / deck glass</label>
                                                <input type="number" name="height_fence" id="height_fence" value="" />
                                            </div>
                                            <div class="form-group">
                                                <label for="fence_one_both" class="form-label">One side or both sides?</label>
                                                <input type="number" name="fence_one_both" id="fence_one_both" value=""/>
                                            </div>
                                            <input id="fence_calc" type="button" class="btn btn-primary btn-sm" value="confirm fence cleaning prices" onclick="calc_fence_price();" />
                                        </div>
                                        </div>
                                    </div>
                                <div>
                            </div>
                        </div>

                        <!-- Submit Quote -->
                        <!-- <button style="text-align: center;" class="btn btn-success btn-lg" type="post" name="login">Submit Quote</button> -->
                        <input hidden type="text" name="condosheet" id="condosheet"/>
                        <input hidden type="text" name="reviewtable" id="reviewtable"/>
                        <input hidden type="text" name="pressuretable" id="pressuretable"/>
                        <input hidden type="text" name="otherservicetable" id="otherservicetable"/>
                        <input hidden type="text" name="fencetable" id="fencetable"/>                        
                        <button style="text-align: center;" class="btn btn-primary btn-sm" type="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="login">Submit</button>
                    </fieldset>

                    <!-- <h3>
                        <span class="icon"><i class="ti-credit-card"></i></span>
                        <span class="title_text">Edit & Submit</span>
                    </h3>
                    <fieldset>
                        <legend>
                            <span class="step-heading">Edit Informaltion: </span>
                            <span class="step-number">Step 4 / 4</span>
                        </legend>
                        
                        <div class="form-group">                                   
                            <label><strong>Your Final Proposal</strong></label>
                        </div>

                        <div class="form-group">
                            <label for="final_property_name" class="form-label required">Property name</label>
                            <input type="text" name="final_property_name" id="final_property_name" value=""/>
                        </div>
                        
                        <div class="form-group">
                            <label for="final_email_addr" class="form-label required">Email Address</label>
                            <input type="email" name="final_email_addr" id="final_email_addr" value="a@jodoex.ca"/>
                        </div>

                        <div class="form-group">
                            <label for="final_property_addr" class="form-label required">Property Address</label>
                            <input type="text" name="final_property_addr" id="final_property_addr" />
                        </div>

                        <div class="form-select">
                            <label for="property_city" class="form-label">Property city</label>
                            <div class="select-list-city">
                                <select name="final_property_city" id="final_property_city" required="">
                                    <option value="">Choose</option>
                                    <option value="Abbotsford">Abbotsford</option>
                                    <option value="Burnaby">Burnaby</option>
                                    <option value="Chilliwack">Chilliwack</option>
                                    <option value="Conquitlam">Conquitlam</option>
                                    <option value="Delta">Delta</option>
                                    <option value="Maple Ridge">Maple Ridge</option>
                                    <option value="Mission">Mission</option>
                                    <option value="New Westminster">New Westminster</option>
                                    <option value="North Vancouver">North Vancouver</option>
                                    <option value="Port Conquitlam">Port Conquitlam</option>
                                    <option value="Port Moody">Port Moody</option>
                                    <option value="Richmond">Richmond</option>
                                    <option value="Surrey">Surrey</option>
                                    <option value="Vancouver">Vancouver</option>
                                    <option value="West Vancouver">West Vancouver</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="final_service_request" class="form-label required">Service Requested</label>
                            <input type="text" name="final_service_request" id="final_service_request" value="" />
                        </div>

                        <div class="form-group">
                            <label for="final_service_recommend" class="form-label required">Services Recommended</label>
                            <input type="text" name="final_service_recommend" id="final_service_recommend" />
                        </div>

                        <div class="form-select">
                            <label for="final_boom_lift" class="form-label required">Boom lift</label>
                            <div class="select-list">
                                <select name="final_boom_lift" id="final_boom_lift">
                                    <option value="not needed (2 storeys or less)" checked>not needed (2 storeys or less)</option>
                                    <option value="recommended (3 storeys and boom lift accessible)">recommended (3 storeys and boom lift accessible)</option>
                                    <option value="necessary">necessary</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="price1" class="form-label">price for service1</label>
                            <input type="text" name="price1" id="price1" />
                        </div>

                        <div class="form-group">
                            <label for="price2" class="form-label">price for service2</label>
                            <input type="text" name="price2" id="price2" />
                        </div>

                        <div class="form-group">
                            <label for="price3" class="form-label">price for service3</label>
                            <input type="text" name="price3" id="price3" />
                        </div>

                        <div class="form-group">
                            <label for="price4" class="form-label">price for service4</label>
                            <input type="text" name="price4" id="price4" />
                        </div>

                        <div class="form-group">
                            <label for="price5" class="form-label">price for service5</label>
                            <input type="text" name="price5" id="price5" />
                        </div>

                        <div class="form-group">
                            <label for="price6" class="form-label">price for service6</label>
                            <input type="text" name="price6" id="price6" />
                        </div>                        
                        <input hidden type="text" name="condosheet" id="condosheet"/>
                        <input hidden type="text" name="reviewtable" id="reviewtable"/>
                        <input hidden type="text" name="pressuretable" id="pressuretable"/>
                        <input hidden type="text" name="otherservicetable" id="otherservicetable"/>
                        <input hidden type="text" name="fencetable" id="fencetable"/>
                        <input hidden type="text" name="abc" value = "<?php echo (isset($abc))?$abc:'';?>" >
                        <button style="text-align: center;" class="btn btn-primary btn-sm" type="post" name="login">Submit another proposal</button>
                    </fieldset> -->
            </form>
        </div>
    </div>

    
    <!-- <script src="vendor/jquery-3.2.1.min.js"></script> -->
    <script src="vendor/jquery/jquery.min.js"></script>    
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="vendor/jquery-steps/jquery.steps.js"></script>
    <script src="vendor/minimalist-picker/dobpicker.js"></script>
    <script src="js/jquery.json-2.4.min.js"></script>
    <script src="js/jquery.collapsable.js"></script>    

    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js"> </script>
    
    <script src="js/main.js"></script>    

</body>

</html>

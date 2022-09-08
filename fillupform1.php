<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="fillupform.css" />
    <script src="script.js" defer></script>
    <title>Registration Form</title>
  </head>
  <body>
  <section class="header">
        <nav>
            <a href="index.php"><img class="logo" src="roadar_logo_name_white.png" alt=""></a>
            <div class="nav-links" id="navLinks">
            <img class="fa ico-close" src="xmark-solid.svg" onclick="hideMenu()" alt="close icon"></img>
                <ul>
                    <li><a href="/">About</a></li>
                    <li><a href="/">Service</a></li>
                    <li><a href="/">City</a></li>
                    <li><a href="/">Contact</a></li>
                    <li><a href="user/user_login.php">Sign in</a></li>
                </ul>
            </div>
            <img class="fa ico-menu" src="resources/icons/bars-solid.svg" onclick="showMenu()" alt="menu icon"></img>
        </nav>
    </section>
  <h1>Incident Report Management Form</h1>

    <form action="#" class="form">
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        
        <div
          class="progress-step progress-step-active"
          data-title="Step 1"
        ></div>
        <div class="progress-step" data-title="Step 2"></div>
        <div class="progress-step" data-title="Step 3"></div>
        <div class="progress-step" data-title="Step 4"></div>
        <div class="progress-step" data-title="Step 5"></div>
      </div>

      <!-- Steps -->
      <div class="form-step form-step-active">
      <div class="fields">
                        <div class="input-field1">
                            <label>Report No.</label>
                            <input type="number" placeholder="Enter Report No."  required>
                        </div>

                        <div class="input-field1">
                            <label>Time</label>
                            <input type="time"  min="0:00" max = "24:00" required>
                        </div>

</div>
<div class="fields">
                        <div class="input-field1">
                            <label>Incident Date</label>
                            <input type="date" placeholder="Enter Report No."  required>
                        </div>

                        <div class="input-field1">
                            <label>Day of the Week</label>
                            <input type="text" placeholder="Enter Day of the Week."  >
                        </div>

</div>


<div class="fields">
                      
                        <div class="input-field">
                            <label>Police Station</label>
                            <input type="text" placeholder="Input your Police Station."  >
                        </div>
                        
                        <div class="input-field">
                            <label>Regional Office</label>
                            <input type="text" placeholder="Input your Regional Office."  >
                        </div>
                        
                        <div class="input-field">
                            <label>Provincial office</label>
                            <input type="text" placeholder="Input your Provincial Office."  >
                        </div>


</div>
<div class="fields">
                      
                        <div class="input-field3">
                            <label>Number of Vehicles involved:</label>
                            <input type="number" placeholder="Enter Here...." >
                        </div>
                        
                        <div class="input-field3">
                            <label>Number of Drivers Involved:</label>
                            <input type="number" placeholder="Enter Here...."  >
                        </div>
                        
                        <div class="input-field3">
                            <label>Number of Passenger Casualties:</label>
                            <input type="number" placeholder="Enter Here...."  >
                        </div>
                        <div class="input-field3">
                            <label>Number of Pedestrian Casualties:</label>
                            <input type="number" placeholder="Enter Here...."  >
                        </div>



</div>


       
        <div class="buttons">
          <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
        </div>
        
      </div>
      <div class="form-step">
        <div class="fields">
        <div class="input-field3">
          <label for="accsev">Accident Severity</label>
          <select name = "" id = "" onClick = "filter();">
          <option disabled selected>Enter Accident Severerity</option>
            <option value = "accsev1">Fatal Accident</option>
            <option value = "accsev2">Serious Injury Accident</option>
            <option value = "accsev3">Minor Injury Accident</option>
            <option value = "accsev4"> Property Damage Only</option>
</select>
        </div>
        <div class="input-field3">
          <label for="junctype">Junction (TYPE)</label>
          <select name = "" id = "" onClick = "filter();">
            <option value = "junctype1">0</option>
            <option value = "junctype2">0</option>
</select>
        </div>
        <div class="input-field3">
          <label for="trafcon">Traffic Control</label>
          <select name = "" id = "" onClick = "filter();">
          <option disabled selected>Enter Traffic Control</option>
            <option value = "trafcon2">Centerline</option>
            <option value = "trafcon3">Pedestrian Crossing</option>
            <option value = "trafcon4">School Crossing</option>
            <option value = "trafcon5">Police Controlled</option>
            <option value = "trafcon6">Traffic Lights</option>
            <option value = "trafcon7">Stop Sign</option>
            <option value = "trafcon8">Give Way</option>
            <option value = "trafcon9">Other</option>

</select>
        </div>
        <div class="input-field3">
          <label for="coltype">Collision Type </label>
          <select name = "" id = "" onClick = "filter();">
          <option disabled selected>Enter Collision Type...</option>
            <option value = "coltype1">Head on</option>
            <option value = "coltype2">Rear End</option>
            <option value = "coltype3">Right Angle</option>
            <option value = "coltype4">Side Swipe</option>
            <option value = "coltype5">Overturned Vehicle</option>
            <option value = "coltype6">Hit Object in Road</option>
            <option value = "coltype7"> Hit Object Off Road</option>
            <option value = "coltype8"> Hit Parked Vehicle</option>
            <option value = "coltype9"> Hit Pedestrian</option>
            <option value = "coltype10"> Hit Animal</option>
</select>
        </div>




        

        <div class="input-field3">
          <label for="movement">Movement </label>
          <select name = "" id = "" onClick = "filter();">
          <option disabled selected>Enter Movement...</option>
            <option value = "movement1">1-way</option>
            <option value = "movement2">2-way</option>
</select>
        </div>

  <div class="input-field3">
          <label for="weather">Weather</label>
          <select name = "" id = "" onClick = "filter();">
          <option disabled selected>Enter Weather Type...</option>
            <option value = "weather1">Fair</option>
            <option value = "weather2">Rain</option>
            <option value = "weather3">Wind</option>
            <option value = "weather4">Smoke</option>
            <option value = "weather5">Fog</option>
            <option value = "weather6">Dazzle</option>
            <option value = "weather7">Storm</option>
</select>
        </div>
        <div class="input-field3">
          <label for="light">Light</label>
          <select name = "" id = "" onClick = "filter();">
          <option disabled selected>What kind of light possess?</option>
            <option value = "light1">Daylight</option>
            <option value = "light2">Dawn/Dust</option>
            <option value = "light3">Night(lit)</option>
            <option value = "light4">Night(unlit)</option>
</select>
        </div>

        <div class="input-field3">
          <label for="roadchar">Road Character</label>
          <select name = "" id = "" onClick = "filter();">
          <option disabled selected>Enter Road Character...</option>
            <option value = "roadchar1">Straight+Flat</option>
            <option value = "roadchar2">Curve Only</option>
            <option value = "roadchar3">Incline Only</option>
            <option value = "roadchar4">Curve+incline</option>
            <option value = "roadchar5">Bridge</option>
            <option value = "roadchar6">Crest</option>
</select>
        </div>
        

      

<div class="input-field3">
          <label for="sep">Seperation</label>
          <select name = "" id = "" onClick = "filter();">
          <option value = " "> </option>
          <option disabled selected>Enter Seperation...</option>
            <option value = "sep1">Median</option>
            <option value = "sep2">Not Median</option>
</select>
        </div>
        <div class="input-field3">
          <label for="surcon">Surface Condition</label>
          <select name = "" id = "" onClick = "filter();">
          <option disabled selected>Enter Surface Condition</option>
            <option value = "surcon1">Dry</option>
            <option value = "surcon2">Wet</option>
            <option value = "surcon3">Muddy</option>
            <option value = "surcon4">Flooded</option>
            <option value = "surcon5">Other</option>
</select>
        </div>


        <div class="input-field3">
          <label for="surtype">Surface Type</label>
          <select name = "" id = "" onClick = "filter();">
          <option disabled selected>Enter Surface Type</option>
            <option value = "surtype1">Concrete</option>
            <option value = "surtype2">Asphalt</option>
            <option value = "surtype3">Gravel</option>
            <option value = "surtype4">Earth</option>
</select>
        </div>

        <div class="input-field3">
          <label for="mainclause">Main Clause</label>
          <select name = "" id = "" onClick = "filter();">
          <option disabled selected>Enter Main Clause...</option>
            <option value = "mainclause1">Vehicle Defect</option>
            <option value = "mainclause2">Road Defect</option>
            <option value = "mainclause3">Human Error</option>
            <option value = "mainclause4">Other</option>
</select>
        </div>
     



<div class="input-field3">
          <label for="roadclass">Road Class</label>
          <select name = "" id = "" onClick = "filter();">
          <option disabled selected>Enter Road Class...</option>
            <option value = "roadclass1">National</option>
            <option value = "roadclass2">Provincial</option>
            <option value = "roadclass3">City</option>
            <option value = "roadclass4">Municipality</option>
            <option value = "roadclass5">Barangay</option>
</select>
</div>
<div class="input-field3">
          <label for="roadrep">Road Repairs</label>
          <select name = "" id = "" onClick = "filter();">
          <option disabled selected>Have Road Repairs?</option>
            <option value = "roadrep1">Yes</option>
            <option value = "roadrep2">No</option>
</select>
</div>
<div class="input-field3">
          <label for="hitnrun">Hit and Run</label>
          <select name = "" id = "" onClick = "filter();">
          <option disabled selected>Hit and Run?</option>
            <option value = "hitnrun1">Yes</option>
            <option value = "hitnrun2">No</option>
</select>
</div>
<div class="input-field3">
          <label for="loctype">Location Type</label>
          <select name = "" id = "" onClick = "filter();">
          <option disabled selected>Have Location Type?</option>
            <option value = "loctype1">Yes</option>
            <option value = "loctype2">No</option>
</select>
</div>


</div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>
      <div class="form-step">
      <h2>Location</h2>
      <div class="fields">
        <div class="input-field3">
          <label>Name of City</label>
          <input type="text" name="noc" id="" />
        </div>
        <div class="input-field3">
          <label>Town</label>
          <input type="text" name="twn" id="" />
        </div>
        <div class="input-field3">
          <label>Barangay</label>
          <input type="text" name="brgy" id="" />
        </div>
        <div class="input-field3">
          <label>Distance</label>
          <input type="text" name="dst"  />
          
        </div>
    
     
        <div class="input-field1">
          <label for="ID">Landmark 1</label>
          <input type="text" name="phone"  />
        </div>
        <div class="input-field1">
          <label for="ID">Distance</label>
          <input type="text" name="phone"  />
          
        </div>
      
        <div class="input-field1">
          <label for="dob">Name of City</label>
          <input type="text" name="phone"  />
        </div>
        <div class="input-field1">
          <label for="ID">Town</label>
          <input type="text" name="phone"  />
        </div>
       
        <div class="input-field1">
          <label for="ID">Landmark 1</label>
          <input type="text" name="phone"  />
        </div>
        <div class="input-field1">
          <label for="ID">Distance</label>
          <input type="text" name="phone" />
          
</div>
</div>
        <h2> JUNCTION ACCIDENT ONLY </h2>
   <div class="fields">
        <div class="input-field1">
          <label for="dob">Name of Second Road</label>
          <input type="text" name="phone" id=/>
        </div>
        <div class="input-field1">
          <label for="ID">Distance</label>
          <input type="text" name="phone" id=/>
          
        </div>
  </div>
 <div class="table">
<table class="table-light">
<thead class="table-dark">
    <th>Documents needed</th>
    <th>Files uploaded</th>
</thead>
<tr class="table-light">
    <td class ="tablename">Location Map Sketch</td>
    <td><input type = "file" id = "file" class = "file" name = "item_image"></td>
</tr>
<tr class="table-secondary">
    <td  class="tablename">Collision Diagram Sketch</td>
    <td><input type = "file" id = "file" class = "file" name = "item_image"></td>
</tr>
<tr class="table-light">
    <td  class="tablename">Accident Photo</td>
    <td><input type = "file" id = "file" class = "file" name = "item_image"></td>
</tr>
<tr class="table-secondary">
    <td class="tablename">Police description of Accident</td>
    <td><input type = "file" id = "file" class = "file" name = "item_image"></td>
</tr>


</table>
</div>             
<div class ="input-field">
<label for ="right"> Recommendation </label>
<textarea rows = "5" cols = "50" name = "description">
</textarea>
</div>
<div class ="input-field">
<label for ="right"> Action Taken</label>
<<textarea rows = "5" cols = "50" name = "description">
</textarea>
</div>
<div class ="input-field">
<label for ="right"> Status of Case </label>
<textarea rows = "5" cols = "50" name = "description">
</textarea>
</div>

<h3> Witnesses </h3>
<div class="fields">

<div class ="input-field3">
<input class = "textbox" type = "text" id = "name" name = "username" value = "" placeholder = "">
<label for = "name">Mr./Ms./Mrs.</label>
</div>
<div class ="input-field3">
<input class = "bname" type = "text" id = "name" name = "username" value = "" placeholder = "">
<label for = "name">First Name </label>
</div>
<div class ="input-field3">
<input class = "bname" type = "text" id = "name" name = "username" value = "" placeholder = "">
<label for = "name"> Middle Name </label>
</div>
<div class ="input-field3">
<input class = "bname" type = "text" id = "name" name = "username" value = "" placeholder = "">
<label for = "name"> Last Name </label>
</div>
</div>
<div class ="input-field">
<label for ="right"> Address </label>
<textarea rows = "5" cols = "50" name = "description">
</textarea>
</div>

<div class="fields">

<div class ="input-field3">
<input class = "textbox" type = "text" id = "name" name = "username" value = "" placeholder = "">
<label for = "name">Mr./Ms./Mrs.</label>
</div>
<div class ="input-field3">
<input class = "bname" type = "text" id = "name" name = "username" value = "" placeholder = "">
<label for = "name">First Name </label>
</div>
<div class ="input-field3">
<input class = "bname" type = "text" id = "name" name = "username" value = "" placeholder = "">
<label for = "name"> Middle Name </label>
</div>
<div class ="input-field3">
<input class = "bname" type = "text" id = "name" name = "username" value = "" placeholder = "">
<label for = "name"> Last Name </label>
</div>

</div>
<div class ="input-field">
<label for ="right"> Address </label>
<textarea rows = "5" cols = "50" name = "description">
</textarea>
</div>



<h3>Driver Statement</h3>

<div class ="input-field1">
<label for ="right"> Statement 1 </label>
<textarea rows = "5" cols = "50" name = "description">
</textarea>
</div>
<div class ="input-field1">
<label for ="right"> Statement 2 </label>
<textarea rows = "5" cols = "50" name = "description">
</textarea>
</div>




<div class="fields">
        <div class="input-field1">
          <label for="dob">Investigating Officer</label>
          <input type="text" name="dob" id="io" />
        </div>
        <div class="input-field1">
          <label for="dtw">Supervising Officer</label>
          <input type="text" name="phone" id="spv" />
        </div>

        

        </div>
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="#" class="btn btn-next">Next</a>
        </div>
      </div>


</div>

</div>
        <!--PAGE 4 -->

 <div class="form-step">
 <h4>Additional Form(s) will needed if there are more than 2 vehicles; more than 4 passenger casualties or more than 2 pedestrian casualties.
 </br>Fill in the report no, provincial office, police station and dates and fix forms together securely.</h4>
   
 <div class="fields">
      <div class="input-field1">
        <label for="rn">Report No.</label>
        <input type="number" name="rn" id="rn" />
      </div>
    <div class="input-field1">
        <label for ="time">Time</label>
        <input type="time" name="time" id="time" min="0:00" max = "24:00"/>
    </div>
  
    

  <div class="input-field">
    <label for="plc">Police Station</label>
    <input type="text" name="phone" id="dtw" />
  </div>

  <div class="input-field">
    <label for="rof">Regional Office</label>
    <input type="text" name="phone" id="ro" />
  </div>

  <div class="input-field">
      <label for="pof">Provincial Office </label>
      <input type="text" name="phone" id="ro" />
    </div>
 
    </div>
  <h2>VEHICLE 1</h2>
  <div class="fields">
  <div class="input-field3">
          <label for="vehiclepn">Vehicle Plate Number</label>
          <input type="text" name="vehicle_plate_no" id="vehicle_plate_no" />
        </div>
  <div class="input-field3">
          <label for="owname&ad">Owner's name & Address</label>
          <input type="text" name="owner_name_address" id="owner_name_address" />
        </div>
        <div class="input-field3">
          <label for="chasisno">Chasis/Number</label>
          <input type="text" name="chasis_number" id="chasis_number" />
        </div>
        <div class="input-field3">
          <label for="engineno">Engine Number</label>
          <input type="text" name="engine_number" id="engine_number" />
        </div>


  <div class="input-field3">
          <label for="dob">Insurance</label>
          <input type="text" name="insurance" id="insurance" />
        </div>
        <div class="input-field3">
          <label for="ID">OC/CR Details</label>
          <input type="text" name="occrdetails" id="occrdetails" />
        </div>
        <div class="input-field3">
          <label for="ID">Manufacturer</label>
          <input type="text" name="manufacturer" id="manufacturer" />
        </div>
        <div class="input-field3">
          <label for="ID">Model/Year</label>
          <input type="text" name="model_year" id="model_year" />
        </div>
       

  

  <div class="input-field">
    <label for="vehicle_type">Vehicle Type</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected>Enter Vehicle Type...</option>
          <option value = "vehicle_type1">Bicycle</option>
          <option value = "vehicle_type2">Pedicab</option>
          <option value = "vehicle_type3">Motorcycle</option>
          <option value = "vehicle_type4">Tricycle</option>
          <option value = "vehicle_type5">Car</option>
          <option value = "vehicle_type6">Jeepney</option>
          <option value = "vehicle_type7">Bus</option>
          <option value = "vehicle_type8">Truck(Rigid)</option>
          <option value = "vehicle_type9">Truck(Artic)</option>
          <option value = "vehicle_type10">Van</option>
          <option value = "vehicle_type11">Animal</option>
          <option value = "vehicle_type12">Other</option>
        </select>
  </div>
  <div class="input-field">
    <label for="vehicle_maneuver">Vehicle Maneuver</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected>Enter Vehicle Maneuver...</option>
          <option value = "vehicle_maneuver1">Left Turn</option>
          <option value = "vehicle_maneuver2">Right Turn</option>
          <option value = "vehicle_maneuver3">"U" Turn</option>
          <option value = "vehicle_maneuver4">Cross Traffic</option>
          <option value = "vehicle_maneuver5">Merging</option>
          <option value = "vehicle_maneuver6">Diverging</option>
          <option value = "vehicle_maneuver7">Overtaking</option>
          <option value = "vehicle_maneuver8">Going Ahead</option>
          <option value = "vehicle_maneuver9">Reversing</option>
          <option value = "vehicle_maneuver10">Sudden Start</option>
          <option value = "vehicle_maneuver11">Sudden Stop</option>
          <option value = "vehicle_maneuver12">Parked Off Road</option>
          <option value = "vehicle_maneuver13">Parked On Road</option>
          <option value = "vehicle_maneuver14">Other</option>
        </select>
  </div>
  <div class="input-field">
    <label for="loading">Loading</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected>Enter Loading...</option>
          <option value = "loading1">Legal</option>
          <option value = "loading2">Over Load</option>
          <option value = "loading3">Unsafe Load</option>
        </select>
  </div>



  <div class="input-field">
    <label for="direction">Direction</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected>Enter Direction...</option>
          <option value = "direction1">North</option>
          <option value = "direction2">South</option>
          <option value = "direction3">East</option>
          <option value = "direction4">West</option>
        </select>
  </div>
  <div class="input-field">
    <label for="vehicle_defect">Vehicle Defect</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected>Enter Vehicle Defect...</option>
          <option value = "vehicle_defect1">None</option>
          <option value = "vehicle_defect2">Lights</option>
          <option value = "vehicle_defect3">Brakes</option>
          <option value = "vehicle_defect4">Steering</option>
          <option value = "vehicle_defect1">Tire</option>
          <option value = "vehicle_defect2">Multiple</option>
          <option value = "vehicle_defect3">Other</option>
        </select>
  </div>
  <div class="input-field">
    <label for="vehicle_damage">Vehicle Damage</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected>Enter Vehicle Damage...</option>
          <option value = "vehicle_damage1">None</option>
          <option value = "vehicle_damage2">Front</option>
          <option value = "vehicle_damage3">Rear</option>
          <option value = "vehicle_damage4">Right</option>
          <option value = "vehicle_damage5">Left</option>
          <option value = "vehicle_damage6">Multiple</option>
          <option value = "vehicle_damage7">Other</option>
        </select>
  </div>
  </div>

<h2>DRIVER 1</h2>
<div class="fields">
  <div class="input-field3">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" />
        </div>
  <div class="input-field3">
          <label for="address">Address</label>
          <input type="text" name="address" id="address" />
        </div>
        <div class="input-field3">
          <label for="lcnseno">License Number</label>
          <input type="text" name="license_number" id="license_number" />
        </div>
        <div class="input-field3">
          <label for="lcnsetype">License Type</label>
          <input type="text" name="license_type" id="license_type" />
        </div>

</div>
<div class="fields">

  <div class="input-field">
          <label for="expirydate">Expiry Date</label>
          <input type="date" name="expiry_date" id="expiry_date" />
        </div>
  <div class="input-field">
          <label for="drvrsex">Driver Sex</label>
          <select name = "" id = "pg3" onClick = "filter();">
          <option disabled selected>Sana all</option>
          <option value = "driver_injury1">Everyday</option>
          <option value = "driver_injury1">Occasional</option>
          <option value = "driver_injury1">Every week</option>
          <option value = "driver_injury1">Sometimes</option>
          
        </select>
        </div> 
        <div class="input-field">
          <label for="drvrage">Driver Age</label>
          <input type="number" name="driver_age" id="driver_age" />
        </div>
        </div>
        <div class="input-fields3">
          <label for="expirydate">Hospital</label>
          <input type="text" name="expiry_date" id="expiry_date" />
        </div>
        
        <div class="fields">
<div class="input-field3">
        <label for="driver_injury">Driver Injury</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected> Input Driver Injury...</option>
          <option value = "driver_injury1">Fatal</option>
          <option value = "driver_injury2">Serious</option>
          <option value = "driver_injury3">Minor</option>
          <option value = "driver_injury4">Not injured</option>
        </select>
</div>
<div class="input-field3">
    <label for="driver_error">Driver Error</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected> Input Driver Error...</option>
          <option value = "driver_error1">None</option>
          <option value = "driver_error2">Fatigue/Sleep</option>
          <option value = "driver_error3">Inattentive</option>
          <option value = "driver_error4">Too Fast</option>
          <option value = "driver_error5">Too Close</option>
          <option value = "driver_error6">No Signal</option>
          <option value = "driver_error7">Bad Overtaking</option>
          <option value = "driver_error8">Bad Turning</option>
          <option value = "driver_error9">Using Cellphone</option>
          <option value = "driver_error10">Other</option>
        </select>
  </div>
  <div class="input-field3">
    <label for="alcohol_drugs">Alcohol/Drugs</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected> Have Drugs or Alcohol?...</option>
          <option value = "alcohol_drugs1">Alcohol Suspected</option>
          <option value = "alcohol_drugs2">Drug Suspected</option>
          <option value = "alcohol_drugs3">Both Suspected</option>
          <option value = "alcohol_drugs4">Not Suspected</option>
        </select>
  </div>
  <div class="input-field3">
    <label for="seatbelt_helmet">Seatbelt/Helmet</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected> Seatbelt/Helmet Worn</option>
          <option value = "seatbelt_helmet2">Not Worn</option>
          <option value = "seatbelt_helmet3">Not Worn Correctly</option>
        </select>
  </div>

  </div>

    <div class="btns-group">
            <a href="#" class="btn btn-prev">Previous</a>
            <a href="#" class="btn btn-next">Next</a>
    </div>
  </div>




  <div class="form-step">

  <h2>VEHICLE 2</h2>
  <div class="fields">
  <div class="input-field3">
          <label for="vehiclepn">Vehicle Plate Number</label>
          <input type="text" name="vehicle_plate_no" id="vehicle_plate_no" />
        </div>
  <div class="input-field3">
          <label for="owname&ad">Owner's name & Address</label>
          <input type="text" name="owner_name_address" id="owner_name_address" />
        </div>
        <div class="input-field3">
          <label for="chasisno">Chasis/Number</label>
          <input type="text" name="chasis_number" id="chasis_number" />
        </div>
        <div class="input-field3">
          <label for="engineno">Engine Number</label>
          <input type="text" name="engine_number" id="engine_number" />
        </div>


  <div class="input-field3">
          <label for="dob">Insurance</label>
          <input type="text" name="insurance" id="insurance" />
        </div>
        <div class="input-field3">
          <label for="ID">OC/CR Details</label>
          <input type="text" name="occrdetails" id="occrdetails" />
        </div>
        <div class="input-field3">
          <label for="ID">Manufacturer</label>
          <input type="text" name="manufacturer" id="manufacturer" />
        </div>
        <div class="input-field3">
          <label for="ID">Model/Year</label>
          <input type="text" name="model_year" id="model_year" />
        </div>
       

  
        <div class="input-field">
    <label for="vehicle_type">Vehicle Type</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected>Enter Vehicle Type...</option>
          <option value = "vehicle_type1">Bicycle</option>
          <option value = "vehicle_type2">Pedicab</option>
          <option value = "vehicle_type3">Motorcycle</option>
          <option value = "vehicle_type4">Tricycle</option>
          <option value = "vehicle_type5">Car</option>
          <option value = "vehicle_type6">Jeepney</option>
          <option value = "vehicle_type7">Bus</option>
          <option value = "vehicle_type8">Truck(Rigid)</option>
          <option value = "vehicle_type9">Truck(Artic)</option>
          <option value = "vehicle_type10">Van</option>
          <option value = "vehicle_type11">Animal</option>
          <option value = "vehicle_type12">Other</option>
        </select>
  </div>
  <div class="input-field">
    <label for="vehicle_maneuver">Vehicle Maneuver</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected>Enter Vehicle Maneuver...</option>
          <option value = "vehicle_maneuver1">Left Turn</option>
          <option value = "vehicle_maneuver2">Right Turn</option>
          <option value = "vehicle_maneuver3">"U" Turn</option>
          <option value = "vehicle_maneuver4">Cross Traffic</option>
          <option value = "vehicle_maneuver5">Merging</option>
          <option value = "vehicle_maneuver6">Diverging</option>
          <option value = "vehicle_maneuver7">Overtaking</option>
          <option value = "vehicle_maneuver8">Going Ahead</option>
          <option value = "vehicle_maneuver9">Reversing</option>
          <option value = "vehicle_maneuver10">Sudden Start</option>
          <option value = "vehicle_maneuver11">Sudden Stop</option>
          <option value = "vehicle_maneuver12">Parked Off Road</option>
          <option value = "vehicle_maneuver13">Parked On Road</option>
          <option value = "vehicle_maneuver14">Other</option>
        </select>
  </div>
  <div class="input-field">
    <label for="loading">Loading</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected>Enter Loading...</option>
          <option value = "loading1">Legal</option>
          <option value = "loading2">Over Load</option>
          <option value = "loading3">Unsafe Load</option>
        </select>
  </div>



  <div class="input-field">
    <label for="direction">Direction</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected>Enter Direction...</option>
          <option value = "direction1">North</option>
          <option value = "direction2">South</option>
          <option value = "direction3">East</option>
          <option value = "direction4">West</option>
        </select>
  </div>
  <div class="input-field">
    <label for="vehicle_defect">Vehicle Defect</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected>Enter Vehicle Defect...</option>
          <option value = "vehicle_defect1">None</option>
          <option value = "vehicle_defect2">Lights</option>
          <option value = "vehicle_defect3">Brakes</option>
          <option value = "vehicle_defect4">Steering</option>
          <option value = "vehicle_defect1">Tire</option>
          <option value = "vehicle_defect2">Multiple</option>
          <option value = "vehicle_defect3">Other</option>
        </select>
  </div>
  <div class="input-field">
    <label for="vehicle_damage">Vehicle Damage</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected>Enter Vehicle Damage...</option>
          <option value = "vehicle_damage1">None</option>
          <option value = "vehicle_damage2">Front</option>
          <option value = "vehicle_damage3">Rear</option>
          <option value = "vehicle_damage4">Right</option>
          <option value = "vehicle_damage5">Left</option>
          <option value = "vehicle_damage6">Multiple</option>
          <option value = "vehicle_damage7">Other</option>
        </select>
  </div>
  </div>

<h2>DRIVER 2</h2>
<div class="fields">
  <div class="input-field3">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" />
        </div>
  <div class="input-field3">
          <label for="address">Address</label>
          <input type="text" name="address" id="address" />
        </div>
        <div class="input-field3">
          <label for="lcnseno">License Number</label>
          <input type="text" name="license_number" id="license_number" />
        </div>
        <div class="input-field3">
          <label for="lcnsetype">License Type</label>
          <input type="text" name="license_type" id="license_type" />
        </div>

</div>
<div class="fields">

  <div class="input-field">
          <label for="expirydate">Expiry Date</label>
          <input type="date" name="expiry_date" id="expiry_date" />
        </div>
  <div class="input-field">
          <label for="drvrsex">Driver Sex</label>
          <select name = "" id = "pg3" onClick = "filter();">
          <option value = "driver_injury1">Everyday</option>
          <option value = "driver_injury1">Occasional</option>
          <option value = "driver_injury1">Every week</option>
          <option value = "driver_injury1">Sometimes</option>
          
        </select>
        </div> 
        <div class="input-field">
          <label for="drvrage">Driver Age</label>
          <input type="number" name="driver_age" id="driver_age" />
        </div>
        </div>
        <div class="input-fields">
          <label for="expirydate">Hospital</label>
          <input type="text" name="expiry_date" id="expiry_date" />
        </div>
       
      <div class="fields">

  <div class="input-field">
          <label for="expirydate">Expiry Date</label>
          <input type="date" name="expiry_date" id="expiry_date" />
        </div>
  <div class="input-field">
          <label for="drvrsex">Driver Sex</label>
          <select name = "" id = "pg3" onClick = "filter();">
          <option disabled selected>Sana all</option>
          <option value = "driver_injury1">Everyday</option>
          <option value = "driver_injury1">Occasional</option>
          <option value = "driver_injury1">Every week</option>
          <option value = "driver_injury1">Sometimes</option>
          
        </select>
        </div> 
        <div class="input-field">
          <label for="drvrage">Driver Age</label>
          <input type="number" name="driver_age" id="driver_age" />
        </div>
        </div>
        <div class="input-fields3">
          <label for="expirydate">Hospital</label>
          <input type="text" name="expiry_date" id="expiry_date" />
        </div>
        
        <div class="fields">
<div class="input-field3">
        <label for="driver_injury">Driver Injury</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected> Input Driver Injury...</option>
          <option value = "driver_injury1">Fatal</option>
          <option value = "driver_injury2">Serious</option>
          <option value = "driver_injury3">Minor</option>
          <option value = "driver_injury4">Not injured</option>
        </select>
</div>
<div class="input-field3">
    <label for="driver_error">Driver Error</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected> Input Driver Error...</option>
          <option value = "driver_error1">None</option>
          <option value = "driver_error2">Fatigue/Sleep</option>
          <option value = "driver_error3">Inattentive</option>
          <option value = "driver_error4">Too Fast</option>
          <option value = "driver_error5">Too Close</option>
          <option value = "driver_error6">No Signal</option>
          <option value = "driver_error7">Bad Overtaking</option>
          <option value = "driver_error8">Bad Turning</option>
          <option value = "driver_error9">Using Cellphone</option>
          <option value = "driver_error10">Other</option>
        </select>
  </div>
  <div class="input-field3">
    <label for="alcohol_drugs">Alcohol/Drugs</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected> Have Drugs or Alcohol?...</option>
          <option value = "alcohol_drugs1">Alcohol Suspected</option>
          <option value = "alcohol_drugs2">Drug Suspected</option>
          <option value = "alcohol_drugs3">Both Suspected</option>
          <option value = "alcohol_drugs4">Not Suspected</option>
        </select>
  </div>
  <div class="input-field3">
    <label for="seatbelt_helmet">Seatbelt/Helmet</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected> Seatbelt/Helmet Worn</option>
          <option value = "seatbelt_helmet2">Not Worn</option>
          <option value = "seatbelt_helmet3">Not Worn Correctly</option>
        </select>
  </div>

  </div>



  <h2>Passenger Casualties</h2>

<div class="fields">

<div class="input-field3">
          <label for="name">1.Name</label>
          <input type="text" name="name" id="name" />
        </div>
  <div class="input-field3">
          <label for="address">Address</label>
          <input type="text" name="address" id="address" />
        </div>
 <div class="input-field3">
          <label for="address">Veh No.</label>
          <input type="number" name="address" id="address" />
 </div>
 <div class="input-field3">
          <label for="address">Age</label>
          <input type="number" name="address" id="address" />
 </div>
 <div class="input-field">
 <label for="address">Injury</label>
 <select name = "" id = "pg3" onClick = "filter();">
 <option disabled selected> Input Injury...</option>
          <option value = "seatbelt_helmet1">Fatal</option>
          <option value = "seatbelt_helmet2">Minor</option>
          <option value = "seatbelt_helmet3">Serious</option>
        </select>
  </div>


 <div class="input-field">
  <label>Position </label>
 <select name = "" id = "" onClick = "filter();">
 <option disabled selected> Input Passenger Position</option>
          <option value = "seatbelt_helmet1">Front Seat</option>
          <option value = "seatbelt_helmet2">Rear Seat</option>
          <option value = "seatbelt_helmet3">M/C Passenger</option>
          <option value = "seatbelt_helmet1">Bus Passenger</option>
          <option value = "seatbelt_helmet2">Outside Sitting</option>
          <option value = "seatbelt_helmet3">Outside Standing</option>
        </select>
        </div>

<div class="input-field">
<label>Action</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected> Inpuit the Action...</option>
          <option value = "seatbelt_helmet1">None</option>
          <option value = "seatbelt_helmet2">Boarding</option>
          <option value = "seatbelt_helmet3">Alighting</option>
          <option value = "seatbelt_helmet1">Falling</option>
        </select>
</div>

<div class="input-field3">
          <label for="name">2.Name</label>
          <input type="text" name="name" id="name" />
        </div>
  <div class="input-field3">
          <label for="address">Address</label>
          <input type="text" name="address" id="address" />
        </div>
 <div class="input-field3">
          <label for="address">Veh No.</label>
          <input type="number" name="address" id="address" />
 </div>
 <div class="input-field3">
          <label for="address">Age</label>
          <input type="number" name="address" id="address" />
 </div>
 <div class="input-field">
 <label for="address">Injury</label>
 <select name = "" id = "pg3" onClick = "filter();">
 <option disabled selected> Input Injury...</option>
          <option value = "seatbelt_helmet1">Fatal</option>
          <option value = "seatbelt_helmet2">Minor</option>
          <option value = "seatbelt_helmet3">Serious</option>
        </select>
  </div>


 <div class="input-field">
  <label>Position </label>
 <select name = "" id = "" onClick = "filter();">
 <option disabled selected> Input Passenger Position</option>
          <option value = "seatbelt_helmet1">Front Seat</option>
          <option value = "seatbelt_helmet2">Rear Seat</option>
          <option value = "seatbelt_helmet3">M/C Passenger</option>
          <option value = "seatbelt_helmet1">Bus Passenger</option>
          <option value = "seatbelt_helmet2">Outside Sitting</option>
          <option value = "seatbelt_helmet3">Outside Standing</option>
        </select>
        </div>

<div class="input-field">
<label>Action</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected> Inpuit the Action...</option>
          <option value = "seatbelt_helmet1">None</option>
          <option value = "seatbelt_helmet2">Boarding</option>
          <option value = "seatbelt_helmet3">Alighting</option>
          <option value = "seatbelt_helmet1">Falling</option>
        </select>
</div>
<div class="input-field3">
          <label for="name">3.Name</label>
          <input type="text" name="name" id="name" />
        </div>
  <div class="input-field3">
          <label for="address">Address</label>
          <input type="text" name="address" id="address" />
        </div>
 <div class="input-field3">
          <label for="address">Veh No.</label>
          <input type="number" name="address" id="address" />
 </div>
 <div class="input-field3">
          <label for="address">Age</label>
          <input type="number" name="address" id="address" />
 </div>
 <div class="input-field">
 <label for="address">Injury</label>
 <select name = "" id = "pg3" onClick = "filter();">
 <option disabled selected> Input Injury...</option>
          <option value = "seatbelt_helmet1">Fatal</option>
          <option value = "seatbelt_helmet2">Minor</option>
          <option value = "seatbelt_helmet3">Serious</option>
        </select>
  </div>


 <div class="input-field">
  <label>Position </label>
 <select name = "" id = "" onClick = "filter();">
 <option disabled selected> Input Passenger Position</option>
          <option value = "seatbelt_helmet1">Front Seat</option>
          <option value = "seatbelt_helmet2">Rear Seat</option>
          <option value = "seatbelt_helmet3">M/C Passenger</option>
          <option value = "seatbelt_helmet1">Bus Passenger</option>
          <option value = "seatbelt_helmet2">Outside Sitting</option>
          <option value = "seatbelt_helmet3">Outside Standing</option>
        </select>
        </div>

<div class="input-field">
<label>Action</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected> Inpuit the Action...</option>
          <option value = "seatbelt_helmet1">None</option>
          <option value = "seatbelt_helmet2">Boarding</option>
          <option value = "seatbelt_helmet3">Alighting</option>
          <option value = "seatbelt_helmet1">Falling</option>
        </select>
</div>

</div>
<h2>Pedestrian Casualties</h2>
<div class="fields">

<div class="input-field3">
          <label for="name">1.Name</label>
          <input type="text" name="name" id="name" />
        </div>
  <div class="input-field3">
          <label for="address">Address</label>
          <input type="text" name="address" id="address" />
        </div>
 <div class="input-field3">
          <label for="address">Sex</label>
          <select name = "" id = "pg3" onClick = "filter();">
          <option disabled selected>Purity</option>
          <option value = "driver_injury1">Everyday</option>
          <option value = "driver_injury1">Occasional</option>
          <option value = "driver_injury1">Every week</option>
          <option value = "driver_injury1">Sometimes</option>
          
        </select>
 </div>
 <div class="input-field3">
          <label for="address">Age</label>
          <input type="number" name="address" id="address" />
 </div>
 <div class="input-field">
 <label for="address">Injury</label>
 <select name = "" id = "pg3" onClick = "filter();">
 <option disabled selected> Input Injury...</option>
          <option value = "seatbelt_helmet1">Fatal</option>
          <option value = "seatbelt_helmet2">Minor</option>
          <option value = "seatbelt_helmet3">Serious</option>
        </select>
  </div>


 <div class="input-field">
  <label>Position </label>
 <select name = "" id = "" onClick = "filter();">
 <option disabled selected> Input Passenger Position</option>
          <option value = "seatbelt_helmet1">Front Seat</option>
          <option value = "seatbelt_helmet2">Rear Seat</option>
          <option value = "seatbelt_helmet3">M/C Passenger</option>
          <option value = "seatbelt_helmet1">Bus Passenger</option>
          <option value = "seatbelt_helmet2">Outside Sitting</option>
          <option value = "seatbelt_helmet3">Outside Standing</option>
        </select>
        </div>

<div class="input-field">
<label>Action</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected> Input the Action...</option>
          <option value = "seatbelt_helmet1">None</option>
          <option value = "seatbelt_helmet2">Boarding</option>
          <option value = "seatbelt_helmet3">Alighting</option>
          <option value = "seatbelt_helmet1">Falling</option>
        </select>
</div>
<div class="input-field3">
          <label for="name">1.Name</label>
          <input type="text" name="name" id="name" />
        </div>
  <div class="input-field3">
          <label for="address">Address</label>
          <input type="text" name="address" id="address" />
        </div>
 <div class="input-field3">
          <label for="address">Sex</label>
          <select name = "" id = "pg3" onClick = "filter();">
          <option disabled selected>Purity</option>
          <option value = "driver_injury1">Everyday</option>
          <option value = "driver_injury1">Occasional</option>
          <option value = "driver_injury1">Every week</option>
          <option value = "driver_injury1">Sometimes</option>
          
        </select>
 </div>
 <div class="input-field3">
          <label for="address">Age</label>
          <input type="number" name="address" id="address" />
 </div>
 <div class="input-field">
 <label for="address">Injury</label>
 <select name = "" id = "pg3" onClick = "filter();">
 <option disabled selected> Input Injury...</option>
          <option value = "seatbelt_helmet1">Fatal</option>
          <option value = "seatbelt_helmet2">Minor</option>
          <option value = "seatbelt_helmet3">Serious</option>
        </select>
  </div>


 <div class="input-field">
  <label>Position </label>
 <select name = "" id = "" onClick = "filter();">
 <option disabled selected> Input Passenger Position</option>
          <option value = "seatbelt_helmet1">Front Seat</option>
          <option value = "seatbelt_helmet2">Rear Seat</option>
          <option value = "seatbelt_helmet3">M/C Passenger</option>
          <option value = "seatbelt_helmet1">Bus Passenger</option>
          <option value = "seatbelt_helmet2">Outside Sitting</option>
          <option value = "seatbelt_helmet3">Outside Standing</option>
        </select>
        </div>

<div class="input-field">
<label>Action</label>
        <select name = "" id = "pg3" onClick = "filter();">
        <option disabled selected> Input the Action...</option>
          <option value = "seatbelt_helmet1">None</option>
          <option value = "seatbelt_helmet2">Boarding</option>
          <option value = "seatbelt_helmet3">Alighting</option>
          <option value = "seatbelt_helmet1">Falling</option>
        </select>
</div>
</div>




<div class="btns-group">
            <a href="#" class="btn btn-prev">Previous</a>
            <a href="#" class="btn btn-submit">Submit</a>
    </div>
    
  </div>

    </form>
    </div>
  </body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href='../assets/css/all.min.css' rel='stylesheet'>
<link rel="stylesheet" href="../styles/welcome.css">
<script src="../scripts/script.js" defer></script>
<title>welcome - roadar</title>

</head>
<body>
  <div class="container">
    <nav>
      <ul>
        <a href="#" class="logo">
          <img src="../resources/logo/Roadar-logo-name-a.png">
        </a>
        <li><a href="#" class="a a-menu-active" id="overview">
          <i class="fa-solid fa-gauge fas"></i>
          <span class="nav-item lock">Overview</span>
        </a></li>
        <li><a href="#"  class="a" id="mail">
          <i class="fa-solid fa-envelope fas"></i>
          <span class="nav-item">Messages</span>
        </a></li>
        <li><a href="#" class="a" id="timeline">
          <i class="fa-solid fa-timeline fas"></i>
          <span class="nav-item">Timeline</span>
        </a></li>
        <li><a href="#" class="a" id="application">
          <i class="fa-solid fa-file fas"></i>
          <span class="nav-item">Report</span>
        </a></li>
        <li><a href="#" class="a" id="myaccount">
          <i class="fa-solid fa-user fas"></i>
          <span class="nav-item">My Account</span>
        </a></li>

        <li><a href="#" class="logout a" onclick="openForm()">
          <i class="fa-solid fa-right-from-bracket fas"></i>
          <span class="nav-item">Log out</span>
        </a></li>
      </ul>
    </nav>

<!-- Menu -->
    <!-- Overview -->
    <div class="main main-active">
      <div class="main-body">
        <h2 class="text">Overview</h2>
        <div class="promo_card">
          <h1>Welcome to Roadar</h1>
          <span>Lorem ipsum dolor sit amet.</span>
          <button class="report">Report Now</button>
        </div>

        <h2 class="text">Reports</h2>
        <div class="holder">
          <div class="cards">
            <div class="card card-1">
              <div class="card__icon"><h2 class="card__title">25</h2></i></div>
              <h2 class="card__bot">Total Report</h2>
              <p class="card__apply">
                <a class="card__link" href="#">View<i class="fa-solid fa-arrow-right fas right"></i></a>
              </p>
            </div>
          </div>
          <div class="cards">
            <div class="card card-2">
              <div class="card__icon"><h2 class="card__title">13</h2></i></div>
              <h2 class="card__bot">Successful</h2>
              <p class="card__apply">
                <a class="card__link" href="#">View<i class="fa-solid fa-arrow-right fas right"></i></i></a>
              </p>
            </div>
          </div>
          <div class="cards">
            <div class="card card-3">
              <div class="card__icon"><h2 class="card__title">3</h2></i></div>
              <h2 class="card__bot">Decline</h2>
              <p class="card__apply">
                <a class="card__link" href="#">View<i class="fa-solid fa-arrow-right fas right"></i></i></a>
              </p>
            </div>
          </div>
          <div class="cards">
            <div class="card card-4">
              <div class="card__icon"><h2 class="card__title">9</h2></i></div>
              <h2 class="card__bot">Pending</h2>
              <p class="card__apply">
                <a class="card__link" href="#">View<i class="fa-solid fa-arrow-right fas right" ></i></i></a>
              </p>
            </div>
          </div>
        </div>
      </div> <!--main-body-->
    </div><!--end of main-->
    <!-- End of Dashboard -->

    <!-- Announcement -->
    <div class="main">
      <div class="main-body">
        <h2 class="text">Announcement</h2>
        
      </div> <!--main-body-->
    </div><!--end of main-->

    <!-- History -->
    <div class="main">
      <div class="main-body">
        <h2 class="text">History</h2>
        
      </div> <!--main-body-->
    </div><!--end of main-->

    <!-- Report -->
    <div class="main">
      <div class="main-body">
        <div class="form-container">
        <header>Incident Road Management Form</header>
        <form action="#">
          <div class="form forms secActive">
            <div class="part">
              <span class="inform">
                <h2>Good day!</h2><br>
                Something happened? Make your report right away!<br>
              </span>
            </div><!-- end of form part II-->
            <div class="part">
              <button class="nextBtn">
                <span class="btnText">Let's get started!</span>
              </button>
            </div>
          </div>
         
          <div class="form forms">
            <div class="report_details">
              <span class="title">Report Details <i class="fa-solid fa-circle-info info"></i></span>
              <label class="note">
                Note: Please fill in all information.
              </label>
              <div class="fields">
                <div class="input-field">
                  <label>Incident Date</label>
                  <input type="date" placeholder="Enter incident date" required>
                </div>

                <div class="input-field">
                  <label>Time</label>
                  <input type="time" placeholder="Military Time" required>
                </div>

                <div class="input-field">
                  <label>Day of the Week</label>
                  <select required>
                    <option disabled selected>Select day</option>
                    <option>Monday</option>
                    <option>Tuesday</option>
                    <option>Wednesday</option>
                    <option>Thursday</option>
                    <option>Friday</option>
                    <option>Saturday</option>
                    <option>Sunday</option>
                  </select> 
                </div>

                <div class="input-field">
                  <label>Report No.</label>
                  <input type="text" placeholder="Auto generated and not clickable" required>
                </div>

                <div class="input-field">
                  <label>Police Station</label>
                  <input type="text" placeholder="generated station not clickable" required>
                </div>

                <div class="input-field">
                  <label>Accident Severity</label>
                  <select required>
                    <option disabled selected>Select accident severity</option>
                    <option>Fatal Accident</option>
                    <option>Non-Fatal Accident</option>
                    <option>Damage to Property</option>
                  </select>
                </div>

                <div class="input-field">
                  <label>Accident Causation</label>
                  <select required>
                    <option disabled selected>Select accident causation</option>
                    <option>Human Error</option>
                    <option>Road Defect</option>
                    <option>Vehicle Defect</option>
                    <option>Other</option>
                  </select>
                </div>

                <div class="input-field">
                  <label>Specific Cause</label>
                  <input type="text" placeholder="Enter specified cause" required>
                </div>

                <div class="input-field">
                  <label>Number of Vehicles Involved</label>
                  <input type="number" placeholder="0" required>
                </div>

                <div class="input-field">
                  <label>Number of Driver Casualties</label>
                  <input type="number" placeholder="0" required>
                </div>

                <div class="input-field">
                  <label>Number of Passenger Casualties</label>
                  <input type="number" placeholder="0" required>
                </div>

                <div class="input-field">
                  <label>Number of Pedestrian Casualties</label>
                  <input type="number" placeholder="0" required>
                </div>

              </div><!-- end of fields-->
              <div class="buttons" style="margin-top: 40px;">
                <button class="nextBtn">
                  <span class="btnText">Next</span>
                </button>
              </div>
            </div><!-- end of details personal -->
          </div><!-- end of form first -->

          <div class="form forms">
            <div class="accident_details">
              <span class="title">Accident Details <i class="fa-solid fa-circle-info info"></i></span>
              <label class="note">
                Note: Please fill in all information.
              </label>
              <div class="fields">
                <div class="input-field">
                  <label>Junction Type</label>
                  <select required>
                    <option disabled selected>Select junction type</option>
                    <option> Not at junction</option>
                    <option>T-junction</option>
                    <option>Y-junction</option>
                    <option>Staggered junction</option>
                    <option>Crossroads</option>
                    <option>Roundabouts</option>
                    <option>Railway</option>
                    <option>Other</option>
                  </select> 
                </div>

                <div class="input-field">
                  <label>Traffic Control</label>
                  <select required>
                    <option disabled selected>Select traffic control</option>
                    <option>None</option>
                    <option>Centerline</option>
                    <option>Pedestrian Crossing</option>
                    <option>School Crossing</option>
                    <option>Police Controlled</option>
                    <option>Traffic Lights</option>
                    <option>Stop Sign</option>
                    <option>Give Way</option>
                    <option>Other</option>
                  </select> 
                </div>

                <div class="input-field">
                  <label>Collision Type</label>
                  <select required>
                    <option disabled selected>Select collision type</option>
                    <option>Head On</option>
                    <option>Rear End</option>
                    <option>Right Angle</option>
                    <option>Side Swipe</option>
                    <option>Overturned Vehicle</option>
                    <option>Hit Object In Road</option>
                    <option>Hit Object Off Road</option>
                    <option>Hit Parked Vehicle</option>
                    <option>Hit Pedestrian</option>
                    <option>Hit Animal</option>
                    <option>Other</option>
                  </select> 
                </div>

                <div class="input-field">
                  <label>Movement</label>
                  <select required>
                    <option disabled selected>Select movement</option>
                    <option>1-Way</option>
                    <option>2-Way</option>
                  </select> 
                </div>

                <div class="input-field">
                  <label>Separation</label>
                  <select required>
                    <option disabled selected>Select separation</option>
                    <option>Median</option>
                    <option>Not Median</option>
                  </select> 
                </div>

                <div class="input-field">
                  <label>Weather</label>
                  <select required>
                    <option disabled selected>Select weather</option>
                    <option>Fair</option>
                    <option>Rain</option>
                    <option>Wind</option>
                    <option>Smoke</option>
                    <option>Fog</option>
                    <option>Dizzle</option>
                    <option>Storm</option>
                  </select> 
                </div>

                <div class="input-field">
                  <label>Light</label>
                  <select required>
                    <option disabled selected>Select light</option>
                    <option>Daylight</option>
                    <option>Dawn/Dust</option>
                    <option>Night(lit)</option>
                    <option>Night(unlit)</option>
                  </select> 
                </div>

                <div class="input-field">
                  <label>Road Character</label>
                  <select required>
                    <option disabled selected>Select road character</option>
                    <option>Straight+Flat</option>
                    <option>Curve Only</option>
                    <option>Incline Only</option>
                    <option>Curve+Incline</option>
                    <option>Bridge</option>
                    <option>Crest</option>
                  </select> 
                </div>

                <div class="input-field">
                  <label>Surface Condition</label>
                  <select required>
                    <option disabled selected>Select surface condition</option>
                    <option>Dry</option>
                    <option>Wet</option>
                    <option>Muddy</option>
                    <option>Flooded</option>
                    <option>Other</option>
                  </select> 
                </div>

                <div class="input-field">
                  <label>Surface Type</label>
                  <select required>
                    <option disabled selected>Select surface type</option>
                    <option>Concrete</option>
                    <option>Asphalt</option>
                    <option>Gravel</option>
                    <option>Earth</option>
                  </select> 
                </div>

                <div class="input-field">
                  <label>Road Repairs</label>
                  <select required>
                    <option disabled selected>Select road repairs</option>
                    <option>Yes</option>
                    <option>No</option>
                  </select> 
                </div>

                <div class="input-field">
                  <label>Hit & Run</label>
                  <select required>
                    <option disabled selected>Select hit & run</option>
                    <option>Yes</option>
                    <option>No</option>
                  </select> 
                </div>
  
              </div><!-- end of fields -->
            </div><!-- end of details address -->
            <div class="buttons" style="margin-top: 40px;">
              <button class="backBtn">
                <span class="btnText">Back</span>
              </button>

              <button class="nextBtn">
                <span class="btnText">Next</span>
              </button>
            </div><!-- end of buttons -->
          </div><!-- end of form second -->

          <div class="form forms">
            <div class="location_details">
              <span class="title">Location Details <i class="fa-solid fa-circle-info info"></i></span>
              <label class="note">
                Note: Please fill in all information.
              </label>
              <div class="fields">
                <div class="input-field">
                  <label>Province</label>
                  <input type="text" placeholder="Enter Province" required>
                </div>

                <div class="input-field">
                  <label>City</label>
                  <input type="text" placeholder="Enter city" required>
                </div>

                <div class="input-field">
                  <label>Barangay</label>
                  <input type="text" placeholder="Enter barangay" required>
                </div>

                <div class="input-field">
                  <label>Name of Road</label>
                  <input type="text" placeholder="Enter road name" required>
                </div>

                <div class="input-field">
                  <label>Landmark</label>
                  <input type="text" placeholder="Enter landmark" required>
                </div>

                <div class="input-field">
                  <label>Distance</label>
                  <input type="number" placeholder="Enter distance in km/m" required>
                </div>

                <div class="input-field">
                  <span class="title">Junction Accident Only</span>
                </div>

                <div class="input-field">
                </div>

                <div class="input-field">
                </div>

                <div class="input-field">
                  <label>Name of Second Road</label>
                  <input type="text" placeholder="Enter second road name" required>
                </div>

                <div class="input-field">
                  <label>Landmark</label>
                  <input type="text" placeholder="Enter landmark" required>
                </div>

                <div class="input-field">
                  <label>Distance</label>
                  <input type="number" placeholder="Enter distance in km/m" required>
                </div>
  
              </div><!-- end of fields -->
            </div><!-- end of details address -->
            <div class="buttons" style="margin-top: 80px;">
              <button class="backBtn">
                <span class="btnText">Back</span>
              </button>

              <button class="nextBtn">
                <span class="btnText">Next</span>
              </button>
            </div><!-- end of buttons -->
          </div><!-- end of form third -->

          <div class="form forms" id="prsn_invlvd">
            <div class="person_involved">
              <span class="title">Person Involved <i class="fa-solid fa-circle-info info"></i></span>
              <label class="note">
                Note: Please fill in all information.
              </label>
              <div class="fields">
                <div class="input-field">
                  <label>Investigating Officer</label>
                  <input type="text" placeholder="Enter investigating officer" required>
                </div>

                <div class="input-field">
                  <label>Supervising Officer</label>
                  <input type="text" placeholder="Enter supervising officer" required>
                </div>

                <div class="input-field">
                  <label>Witness Name</label>
                  <input type="text" placeholder="Enter witness name" required>
                </div>

                <div class="input-field">
                  <label>Police Description of Accident</label>
                  <textarea name="police_desc" form="prson_invlvd" rows="5" placeholder="Enter text here..."></textarea>
                </div>

                <div class="input-field">
                  <label>Driver 1 Statement</label>
                  <textarea name="drvr1_sttmnt" form="prson_invlvd" rows="5" placeholder="Enter text here..."></textarea>
                </div>

                <div class="input-field">
                  <label>Driver 2 Statement</label>
                  <textarea name="drvr2_sttmnt" form="prson_invlvd" rows="5" placeholder="Enter text here..."></textarea>
                </div>           

                <div class="input-field">
                  <span class="title">Accident Image & Coordinates Details</span>
                </div>

                <div class="input-field">
                </div>

                <div class="input-field">
                </div>

                <div class="input-field">
                  <label>Photo of Accident</label>
                  <input type="file" name="myImage" accept="image/png, image/gif, image/jpeg" class="img" />
                </div>

                <div class="input-field">
                  <label>Latitude</label>
                  <input type="text" placeholder="" required>
                </div>

                <div class="input-field">
                  <label>Longitude</label>
                  <input type="text" placeholder="" required>
                </div>
  
              </div><!-- end of fields -->
            </div><!-- end of details address -->
            <div class="buttons">
              <button class="backBtn">
                <span class="btnText">Back</span>
              </button>

              <button class="nextBtn">
                <span class="btnText">Next</span>
              </button>
            </div><!-- end of buttons -->
          </div><!-- end of form fourth -->

          <div class="form forms">
            <div class="vehicle_details">
              <div class="fields">
              <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Vehicle Detail <i class="fa-sharp fa-solid fa-square-plus upload addVehicleBtn"></i></h3>
                        </div>
                        
                    </div>
                </div>
                <table class="table table-striped table-hover" id="vehicleTable">
                    <thead>
                        <tr>
                          <td class="thead"> No. </td>
                          <td class="thead"> Plate No. </td>
                          <td class="thead"> Chasis No. </td>
                          <td class="thead"> Engine No. </td>
                          <td class="thead"> Insurance </td>
                          <td class="thead"> OR/CR</td>
                          <td class="thead"> Model </td>
                          <td class="thead"> Type</td>
                          <td class="thead"> Defect </td>
                          <td class="thead"> Damage </td>
                        </tr>
                    </thead>
                    <tbody id="tbVehicle">
                      
                    </tbody>
                </table>
              </div>
              </div><!-- end of fields-->
              <div class="buttons" style="margin-top: 15px;">
                <button class="backBtn">
                  <span class="btnText">Back</span>
                </button>

                <button class="nextBtn">
                  <span class="btnText">Next</span>
                </button>
  
              </div><!-- end of buttons -->
            </div><!-- end of details personal -->

          </div><!-- end of form fifth vehicle -->

          <div class="form forms">
            <div class="driver_details">
              <div class="fields">
              <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Driver Details <i class="fa-sharp fa-solid fa-square-plus upload addDriverBtn"></i></h3>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover" id="driverTable">
                    <thead>
                        <tr>
                          <td class="thead"> No. </td>
                          <td class="thead"> Name </td>
                          <td class="thead"> Address </td>
                          <td class="thead"> License No. </td>
                          <td class="thead"> License Type </td>
                          <td class="thead"> Age </td>
                          <td class="thead"> Injury </td>
                          <td class="thead"> Error</td>
                          <td class="thead"> Alcohol/Drugs </td>
                          <td class="thead"> SeatBelt/Helmet </td>
                        </tr>
                    </thead>
                    <tbody id="tbDriver">
                      
                    </tbody>
                </table>
              </div>
              </div><!-- end of fields-->
              <div class="buttons" style="margin-top: 15px;">
                <button class="backBtn">
                  <span class="btnText">Back</span>
                </button>

                <button class="nextBtn">
                  <span class="btnText">Next</span>
                </button>
  
              </div><!-- end of buttons -->
            </div><!-- end of details personal -->
          </div><!-- end of form sixth driver -->

          <div class="form forms">
            <div class="passenger_details">
              <div class="fields">
              <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Passenger Casualties Details <i class="fa-sharp fa-solid fa-square-plus upload addPassengerBtn"></i></h3>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover" id="passengerTable">
                    <thead>
                        <tr>
                          <td class="thead"> No. </td>
                          <td class="thead"> Name </td>
                          <td class="thead"> Address </td>
                          <td class="thead"> Vehicle No. </td>
                          <td class="thead"> Sex </td>
                          <td class="thead"> Age </td>
                          <td class="thead"> Injury </td>
                          <td class="thead"> Position </td>
                          <td class="thead"> Action </td>
                        </tr>
                    </thead>
                    <tbody id="tbPassenger">
                      
                    </tbody>
                </table>
              </div>
              </div><!-- end of fields-->
              <div class="buttons" style="margin-top: 15px;">
                <button class="backBtn">
                  <span class="btnText">Back</span>
                </button>

                <button class="nextBtn">
                  <span class="btnText">Next</span>
                </button>
  
              </div><!-- end of buttons -->
            </div><!-- end of details passenger -->
          </div><!-- end of form seventh passenger -->

          <div class="form forms">
            <div class="pedestrian_details">
              <div class="fields">
              <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Pedestrian Casualties Details <i class="fa-sharp fa-solid fa-square-plus upload addPedestrianBtn"></i></h3>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover" id="pedestrianTable">
                    <thead>
                        <tr>
                          <td class="thead"> No. </td>
                          <td class="thead"> Name </td>
                          <td class="thead"> Address </td>
                          <td class="thead"> Sex </td>
                          <td class="thead"> Age </td>
                          <td class="thead"> Injury </td>
                          <td class="thead"> Position </td>
                          <td class="thead"> Action </td>
                        </tr>
                    </thead>
                    <tbody id="tbPedestrian">
                      
                    </tbody>
                </table>
              </div>
              </div><!-- end of fields-->
              <div class="buttons" style="margin-top: 15px;">
                <button class="backBtn">
                  <span class="btnText">Back</span>
                </button>

                <button class="nextBtn">
                  <span class="btnText">Next</span>
                </button>
  
              </div><!-- end of buttons -->
            </div><!-- end of details passenger -->
          </div><!-- end of form seventh pedestrian -->

          <div class="form forms">
            <div class="part">
              <span class="inform">
                <h2>Attention!</h2><br><br>
                By checking the box below, you certify that you have read, understood, 
                and agree to the Roadar terms and conditions, that you are dedicated 
                in providing thruthful data, and will not alter any accident related information.<br><br>
                <input type="checkbox" class="cbTerms" value="yes">
              <span>I have read, understand and agreed to the <a href="#" class="tp">Terms of Service</a> and <a href="#" class="tp">Privacy Policy</a>.</span>
              </span>
            </div><!-- end of form part II-->
            <div class="part">
              <button class="submitBtn">
                <span class="btnText">I Agree</span>
              </button>
            </div>
          </div>


        </form>
        </div><!-- end of form-container -->
      </div><!-- main-body -->
    </div><!-- end of main -->

    <!-- My Account -->
    <div class="main">
      <div class="main-body">
        <h2 class="text">My Account</h2>
        
      
      </div> <!--main-body-->
    </div><!--end of main-->

    <!-- End of Overview -->

  </div><!--end of container -->




</body>
</html>

<!-- <button class="sumbit">
                  <span class="btnText">Submit</span>
                  <i class="uil uil-navigator"></i>
              </button> -->
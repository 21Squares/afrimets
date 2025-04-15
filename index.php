<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>AFRIMETS </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <link rel="icon" href="assets/images/user/AFRIMETS.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/plugins/prism-coy.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar theme-horizontal menu-light brand-blue">
        <div class="navbar-wrapper">
            <div class="navbar-content sidenav-horizontal" id="layout-sidenav">
                <ul class="nav pcoded-inner-navbar sidenav-inner">
                    <li class="nav-item pcoded-menu-caption">
                    	<label>Navigation</label>
                    </li>
                    <li class="nav-item">
                    	<a href="index.php" class="nav-link "><span class="pcoded-micon">
                            <i class="feather icon-cloud"></i></span><span class="pcoded-mtext">18th AFRIMETS GA Registration form</span></a>
                    </li>
                </ul>
            </div>    
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg header-blue navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
            <a href="#!" class="b-brand">
                <!-- <img src="assets/images/user/gsa_logo.jpg" alt="" style="width: 100px; height: 40px;" class="logo"> -->
                <img src="assets/images/user/AFRIMETS.png" alt="" style="width: 40px; height: 40px;" class="logo">
                <img src="assets/images/user/AFRIMETS.png" alt="" class="logo-thumb" style="width: 30px; height: 40px;">
            </a>
            <!-- GHANS -->
            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>
        
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                        </div>
                    </div>
                </div>
			<div class="row">
                    <div class="col-sm-12">
                        <div class="row">
							<div class="col-xl-4 col-md-6">
								<div class="card user-card user-card-1">
									<div class="card-header border-0 p-2 pb-0">
										<div class="cover-img-block">
											<img src="assets/images/user/AFRIMETS GA n Technical Meetings 2025 02.png" alt="" class="img-fluid">
										</div>
									</div>
									<div class="card-body pt-0">
										<div class="text-center">
											<h6 class="mb-1 mt-3">Registration for the 18th AFRIMETS GA events from 21st to 25th July 2025 is now open.</h6>
											<!--<h5 class="mb-3 text-muted"> Theme:                                            </h5>-->
											
										</div>
										<hr class="wid-80 b-wid-3 my-4">
									</div>
								</div>
							</div>
                            <!-- tabs data -->
                        <div class="col-xl-8 col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content" id="myTabContent">
                                        <!-- <div class="tab-pane fade show active" id="sectionA-tab" role="tabpanel" aria-labelledby="sectionA-tab"> -->
                                        <div class="tab-pane fade show active" id="sectionA" role="tabpanel" aria-labelledby="sectionA-tab">
                                            <p class="mb-0">
                                            <form id="section-a-form" method="POST" action="register.php">
                                                <div class="row">
													<div class="col-md-12">
														&nbsp;
													</div>
													<div class="col-md-12">
														<label class="form-label"><h4>Identity</h4></label>
													</div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label class="form-label"><b>Title </b><span style="color: red;">*</span></label>
                                                            <select class="form-control" name="title" >
                                                                <option value>Select title...</option>
                                                                    <option value="Prof.">Prof.</option>
                                                                    <option value="Dr.">Dr.</option>
                                                                    <option value="Ing.">Ing.</option>
                                                                    <option value="Mr.">Mr.</option>
                                                                    <option value="Mrs.">Mrs.</option>
                                                                    <option value="Ms.">Ms.</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="form-label"><b>Last Name (as written in your passport)</b> <span style="color: red;">*</span></label>
                                                            <input type="text" class="form-control" name="last_name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label class="form-label"><b>First Name (as written in your passport)</b> <span style="color: red;">*</span></label>
                                                            <input type="text" class="form-control" name="first_name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label"><b>Passport Number </b><span style="color: red;"></span></label>
                                                            <input type="text" class="form-control" name="passport_number" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-label"><b>Nationality</b> <span style="color: red;">*</span></label>
                                                            <input type="text" class="form-control" name="nationality" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label"><b>Institution</b> <span style="color: red;">*</span></label>
                                                            <input type="text" class="form-control" name="institution" required>
                                                        </div>
                                                    </div>
													<div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label"><b>Position</b> <span style="color: red;">*</span></label>
                                                            <input type="text" class="form-control" name="position" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"> 
                                                            <label class="form-label"><b>Country </b><span style="color: red;">*</span></label>
                                                            <input type="text" class="form-control" name="country" placeholder="Enter Country" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group"> 
                                                            <label class="form-label"><b>Email Address </b><span style="color: red;">*</span></label>
                                                            <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label"><b>Telephone Number (WhatsApp) </b><span style="color: red;">*</span></label>
                                                            <input type="text" class="form-control" name="phone"  data-mask="(999) 999-9999" max-length="14" required>
                                                        </div>
                                                    </div>
													<div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label"><b>Special Dietary Requirements</b><span style="color: red;"></span></label>
															<input type="text" class="form-control" name="dietary_preferences" >
                                                        </div>
                                                    </div>
													<div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="form-label"><b>Will you be attending physically, or online? </b><span style="color: red;">*</span></label>
															<div class="col-sm-3">
																<div class="form-check">
																	<input class="form-check-input" type="radio" name="attendance_type" id="attendance_type_physical" value="Physical">
																	<label class="form-check-label" for="attendance_type_physical">Physical</label>
																</div>
																<div class="form-check">
																	<input class="form-check-input" type="radio" name="attendance_type" id="attendance_type_online" value="Online">
																	<label class="form-check-label" for="attendance_type_online">Online</label>
																</div>
															</div>
                                                        </div>
                                                    </div>
													<div class="col-md-12">
                                                        <div class="form-group">
                                                            <label class="form-label"><b>I will be attending: </b></label>
															<label class="form-label">TC Meetings</label>
                                                            <div class="list-group">
															  <label class="list-group-item">
																<input class="form-check-input me-1" type="checkbox" name="tc_meetings[]" value="TC - Electromagnetic">
																TC - Electromagnetic
															  </label>
															  <label class="list-group-item">
																<input class="form-check-input me-1" type="checkbox" name="tc_meetings[]" value="TC - Length">
																TC - Length
															  </label>
															  <!--<label class="list-group-item">
																<input class="form-check-input me-1" type="checkbox" name="tc_meetings[]" value="TC - Acoustics, Ultrasound & Vibration">
																TC - Acoustics, Ultrasound & Vibration  Time & Frequency
															  </label>-->
															  <label class="list-group-item">
																<input class="form-check-input me-1" type="checkbox" name="tc_meetings[]" value="TC - Legal">
																TC - Legal
															  </label>
															  <label class="list-group-item">
																<input class="form-check-input me-1" type="checkbox" name="tc_meetings[]" value="TC - Mass and Related Quantities">
																TC - Mass & Related Quantities
															  </label>
															  <label class="list-group-item">
																<input class="form-check-input me-1" type="checkbox" name="tc_meetings[]" value="TC - QS">
																TC - QS
															  </label>
															  <!--<label class="list-group-item">
																<input class="form-check-input me-1" type="checkbox" name="tc_meetings[]" value="TC - Photometry & Radiometry">
																TC - Photometry & Radiometry
															  </label>
															  <label class="list-group-item">
																<input class="form-check-input me-1" type="checkbox" name="tc_meetings[]" value="TC - Ionizing Radiation">
																TC - Ionizing Radiation
															  </label>-->
															  <label class="list-group-item">
																<input class="form-check-input me-1" type="checkbox" name="tc_meetings[]" value="TC - Temperature">
																TC - Temperature
															  </label>
															  <!--<label class="list-group-item">
																<input class="form-check-input me-1" type="checkbox" name="tc_meetings[]" value="TC - Chemical Metrology">
																TC - Chemical Metrology
															  </label>
															  <label class="list-group-item">
																<input class="form-check-input me-1" type="checkbox" name="tc_meetings[]" value="Other">
																Other
															  </label> -->
															</div>
                                                        </div>
                                                    </div>
													<hr/>
													<div class="col-md-12">
														<label class="form-label"><h4>Other Meetings</h4></label><br/>
													</div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
															<div class="list-group">
															  <label class="list-group-item">
																<input class="form-check-input me-1" type="checkbox" name="other_meetings[]" value="EXCOM - Executive Commitee Meeting">
																EXCOM - Executive Commitee Meeting
															  </label>
															  <label class="list-group-item">
																<input class="form-check-input me-1" type="checkbox" name="other_meetings[]" value="NMI/LMB Directors Meeting">
																NMI/LMB Directors Meeting
															  </label>
															  <label class="list-group-item">
																<input class="form-check-input me-1" type="checkbox" name="other_meetings[]" value="General Assembly Closed Session">
																General Assembly Closed Session
															  </label>
															  <label class="list-group-item">
																<input class="form-check-input me-1" type="checkbox" name="other_meetings[]" value="General Assembly Open Session">
																General Assembly Open Session
															  </label>
															  <label class="list-group-item">
																<input class="form-check-input me-1" type="checkbox" name="other_meetings[]" value="Sustainability Workshop">
																 Workshop - 150 years of the Metre Convension: Prospects of Metrology in the AfCFTA framework
															  </label>
															  <label class="list-group-item">
																<input class="form-check-input me-1" type="checkbox" name="other_meetings[]" value="GSA Laboratories / Industrial Tour">
																GSA Laboratories / Industrial Tour
															  </label>
															</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                            </p>
										     
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabs data ends -->
						<div class="col-12">
							<div class = "row">
							<div class="card">
                                <div class="card-body">
							<div class="col-md-12">
                                <div class="text-center">
									<h6 class="mb-1 mt-3">Invitation letters/Visa assistance:</h6>
									<p class="mb-3 text-muted">Should you need an official letter for travel authority/visa purposes kindly send a request with the full details (copy of passport 
showing full name/s and passport number) via email to: <a href="mailto:bani.eyram@gsa.gov.gh">bani.eyram@gsa.gov.gh</a> | <a href="mailto:striggner.bedu-addo@gsa.gov.gh">striggner.bedu-addo@gsa.gov.gh</a>
                                            </p>
											
								</div>
								<div class="text-center">
								<!--	<p class="mb-3 text-muted">For entry requirements, please visit the <a href="https://gis.gov.gh/getting-a-visa-to-ghana-a-comprehensive-guide/" target="blank">Requirements for entry into Ghana</a> for guidance. </p>-->
											
								</div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="form-label"><b>Will you require a visa? </b><span style="color: red;">*</span></label>
								<div class="col-sm-3">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="require_visa" id="require_visa_yes" value="Yes">
										<label class="form-check-label" for="require_visa_yes">Yes</label>
									</div>
								    <div class="form-check">
										<input class="form-check-input" type="radio" name="require_visa" id="require_visa_no" value="No">
										<label class="form-check-label" for="require_visa_no">No</label>
									</div>
								</div>
                                </div>
                            </div>
                            </div></div>
							<div class="card">
                                <div class="card-body">
									<div class="col-12">
										<div class="text-center">
											<h6 class="mb-1 mt-3">Hotel Bookings:</h6>
											<p class="mb-3 text-muted">La-Palm Royal Beach Hotel, Accra is the official venue for the GA, and it is therefore recommended that delegates stay at this venue.</p>
											<div class="form-group">
											 <label class="form-label"><b>La-Palm Royal Beach Hotel, Accra</b> </label>
											 <label class="form-label"><b>Address: </b> No. 1 LA-BY-PASS ROAD </label>
											 <label class="form-label"><b>Location: </b> La Palm Royal Beach Hotel, 1 Labadi Road, Accra</label><br>
											 <label class="form-label"><b>Telephone: </b> +233 302215100/11</label>
										<!--	 <label class="form-label"><b>Email: </b> <a href="mailto:groupsales@lapalm.net">groupsales@lapalm.net</a> and indicate that you will be attending AFRIMETS GA for negotiated rate</label>-->
											 <label class="form-label"><b>Email: </b> <a href="mailto:groupsales@lapalm.net">groupsales@lapalm.net</a> and indicate <b>AFRIMETS - STD</b> for negotiated rate</label>
											 <label class="form-label"><b>Contact Person: </b> Rose (+233 2702260255) </label>
											 <label class="form-label"><b>The negotiated rate is USD 140 per night (inclusive of bed and breakfast, and airport transfer)</b></label>
											</div>		
										</div>
									</div>
								</div>
							</div>
							
							<div class="card">
                                <div class="card-body">
									<div class="col-md-6">
										<div class="form-group">
										 <label class="form-label"><b>Labadi Beach Hotel</b> </label><br >
										 <label class="form-label"><b>Address:</b> Number one, La Rd, Accra </label>
										 <label class="form-label"><b>Phone: </b>  +233 30 274 2060 </label>
										 <label class="form-label"><b>Email for reservations: </b> <a href="mailto:reservations@labadibeachhotelgh.com">reservations@labadibeachhotelgh.com</a> </label>
										 <label class="form-label"><b>Website: </b> <a href="https://labadibeachhotelgh.com/">https://labadibeachhotelgh.com/</a> </label>
										 <label class="form-label"><b>Distance to La Palm Royal Beach Hotel: </b> 1min (350.0 m) via La Rd </label>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
                                <div class="card-body">
									<div class="col-md-6">
										<div class="form-group">
										 <label class="form-label"><b>Asa Royal Hotel</b> </label>
										 <label class="form-label"><b>Price:</b> Standard $45, Classic $55, Deluxe $65, Executive $75 </label>
										 <label class="form-label"><b>Phone: </b>  +233 24 927 1703 </label>
										 <label class="form-label"><b>Email for reservations: </b> <a href="mailto:asaroyalhotel@gmail.com">asaroyalhotel@gmail.com</a> </label>
										 <label class="form-label"><b>Reference: </b> AFRIMETS 2025 </label>
										 <label class="form-label"><b>Distance to La Palm Royal Beach Hotel: </b> 700m (1min Drive) </label>
										</div>
									</div>
								</div>
							</div>
							<div class="card">
                                <div class="card-body">
									<div class="col-md-6">
										<div class="form-group">
										 <label class="form-label"><b>His Majesty Hotel</b> </label>
										 <label class="form-label"><b>Price:</b> Standard $55, Executive $60, Deluxe $70, Suite $80 </label>
										 <label class="form-label"><b>Phone: </b>  +233 24 431 5380 </label>
										 <label class="form-label"><b>Email for reservations: </b> <a href="mailto:hmapartments@yahoo.com"> hmapartments@yahoo.com</a> </label>
										 <label class="form-label"><b>Reference: </b> AFRIMETS 2025 </label>
										 <label class="form-label"><b>Distance to La Palm Royal Beach Hotel: </b> 700m (1min Drive) </label>
										</div>
									</div>
								</div>
							</div>
                            
							<div class="card">
                                <div class="card-body">
									<div class="col-12">
										<div class="form-group">
                                            <label class="form-label"><b>Please select your preferred hotel: </b><span style="color: red;">*</span></label>
											<div class="col-12">
												<div class="form-check">
													<input class="form-check-input" type="radio" name="preferred_hotel" id="Palm_Royal_Beach_Hotel" value="La-Palm Royal Beach Hotel" required>
													<label class="form-check-label" for="La-Palm_Royal_Beach_Hotel">La-Palm Royal Beach Hotel (Recommended)</label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="radio" name="preferred_hotel" id="Labadi_Beach_Hotel" value="Labadi Beach Hotel">
													<label class="form-check-label" for="Labadi_Beach_Hotel">Labadi Beach Hotel</label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="radio" name="preferred_hotel" id="Asa_Royal_Hotel" value="Asa Royal Hotel">
													<label class="form-check-label" for="Asa_Royal_Hotel">Asa Royal Hotel</label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="radio" name="preferred_hotel" id="His_Majesty_Hotel" value="His Majesty Hotel">
													<label class="form-check-label" for="His_Majesty_Hotel">His Majesty Hotel</label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="radio" name="preferred_hotel" id="None" value="None">
													<label class="form-check-label" for="None">None</label>
												</div>
											</div>
                                        </div>
									</div>
									<button type="submit" class="btn  btn-outline-success float-right" data-bs-toggle="modal" data-bs-target="#staticBackdrop"name="reg"><i class="feather mr-2 icon-check-circle">Send</i></button>
                                  </form>
								</div>
							</div>
							
							</div>
                        </div> 
						</div>
						</div>
                        </div>   
                        
                        
                    </div>
                    <!-- [ horizontal-layout ] end -->
                </div>
                <!-- [ Main Content ] end -->
            </div>
			</div>
    </div>
    <!-- [ Main Content ] end -->
        <script src="assets/js/vendor-all.min.js"></script>
        <script src="assets/js/plugins/bootstrap.min.js"></script>
        <script src="assets/js/ripple.js"></script>
        <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/plugins/prism.js"></script>
    <script src="assets/js/horizontal-menu.js"></script>
	
    <script src="assets/js/analytics.js"></script>

</body>

</html>

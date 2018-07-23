<div class="row">
                            <div class="col-sm-12">
                                <div class="page-title">
                                    

                                        <h4 class="float-left">Add Jobs</h4>


                                        <ol class="breadcrumb float-left float-md-right">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);"><i class="fa fa-home"></i></a></li>
											<li class="breadcrumb-item"><a href="jobs">Jobs</a></li>
                                            <li class="breadcrumb-item">Add Jobs</li>
                                        </ol>

                                    
                                </div>
                            </div>
                        </div>

				
									
									     
                        <div class="row">
							<div class="col-sm-12">
								<div class="card-box">
									
									<form id="wizard-validation-form" action="#">
                                        <div>
                                            <h3>Customer Details</h3>
                                            <section>
											
											<div class="row justify-content-md-center">
										 <div class="col-md-12 col-lg-6 col-lg-offset-3">
										 <h4>Customer Details</h4></br>
										 <div class="row">
                                                <label class="col-lg-3 col-md-3 form-control-label">Customer Name</label>
                                                <div class="col-lg-9 col-md-9">
												<div class="form-group input-group" id="customers">
                                                   <select class="form-control select2">
                                                      
                                                            <option value="">Select Customer</option>
                                                            <option value="" selected>George</option>
                                                            <option value="">Harry</option>
                                                            <option value="">Nevada</option>
                                                            <option value="">Jack</option>
                                                            <option value="">Jacob</option>
                                                            <option value="AZ">Noah</option>
                                                            <option value="CO">Charlie</option>
                                                            
                                                       
                                                        
                                                    </select> 													
													<div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" id="newCustomor"><i class="fa fa-plus"></i></button>
  </div>
  
  
  
                                                </div>
												<div class="form-group" id="newCustomerInput" style="display:none">
												<input type="text" name="" class="form-control newCustomerInput">
                                                </div>
                                                </div>
                                                </div>
                                           
									
											<div class="row" id="contactDropdown">
												<label class="col-lg-3 control-label " for="jobLocation"> Contact <span class="text-danger">*</span></label>
												<div class="col-lg-9">
												<div class="form-group input-group clearfix">
													<select class="form-control fancy-select required" id=""> 
                                                      
                                                            <option value="Default">Select Contact Person</option>
															 <option value="John Smith">John Smith (Default)</option>
															 <option value="John Smith">John Doe</option>
                                                           
                                                    </select>
												
													<div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" id="newContact"><i class="fa fa-plus"></i></button>
  </div>
												</div>
										
											</div>
											</div>
											<div class="row">
											
												<label class="col-lg-3 control-label " for="client">Name <span class="text-danger">*</span></label>
												<div class="col-lg-9">
												<div class="form-group clearfix" id="newContactInput">
												<input type="text" name="" value="John Doe" class="form-control contact-value newContactInput">
												
												</div>
											</div>
											</div>
											<div class="row">
											
												<label class="col-lg-3 control-label " for="client">Email</label>
												<div class="col-lg-9">
												<div class="form-group clearfix">
												<input type="email" name="" value="johndoe@gmail.com" class="form-control contact-value">
												
												</div>
											</div>
											</div>
											<div class="row">
											
												<label class="col-lg-3 control-label " for="client">Phone</label>
												<div class="col-lg-9">
												<div class="form-group clearfix">
												<input type="text" name="" value="097-0124538" class="form-control contact-value">
												
												
												</div>
											</div>
											</div>
											<div class="row" id="markAsDefault" style="display:none">
											<label class="col-lg-3 control-label " for="client">Make Default</label>
											<div class="col-lg-9">
											<div class="form-group clearfix"><input type="checkbox" name="" checked id="markdefault">&nbsp;<label for="markdefault">Mark as Default</label> </div>
											</div>
											</div>
											
											<div class="row">
											
												<label class="col-lg-3 control-label " for="client">Address <span class="text-danger">*</span></label>
												<div class="col-lg-9">
												<div class="form-group clearfix">
												<input type="text" name="" value="9838 Mulberry Lane" class="form-control input-value">
												
												</div>
											</div>
											</div>
											<div class="row">
											
												<label class="col-lg-3 control-label " for="client">City</label>
												<div class="col-lg-9">
												<div class="form-group clearfix">
												<input type="text" name="" value="Washington" class="form-control input-value">
												
												</div>
											</div>
											</div>
											<div class="row">
											
												<label class="col-lg-3 control-label " for="client">Postcode</label>
												<div class="col-lg-9">
												<div class="input-group form-group">
												<input type="text" name="" value="" class="form-control">
												 <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#search_postcode"><i class="fa fa-search"></i></button>
  </div>
												</div>
											</div>
											
											</div>
											<div class="row">
											
												<label class="col-lg-3 control-label " for="client">Country</label>
												<div class="col-lg-9">
												<div class="form-group clearfix">
												 <select class="form-control select2">
												 <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
				</select>
												
												</div>
											</div>
											</div>
										
											</div>
											
						
											
											
											</div>
											
										</section>
										
                                            <h3>Site Details</h3>
                                            <section>
											<div class="row justify-content-md-center">
                                            <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
											<h4>Site Details</h4></br>
										 <div class="row">
                                                <label class="col-lg-3 col-md-3 form-control-label">Site</label>
                                                <div class="col-lg-9 col-md-9">
												<div class="form-group">
                                                  
													 <select class="fancy-select form-control">
                                                        <option value="None">None</option>
                                                        <option value="Same as customer">Same as customer</option>
                                                        <option value="site visited 1">site visited 1</option>
                                                        <option value="site visited 1">site visited 1</option>
                                                       
                                                    </select>
													
                                                </div>
                                                </div>
                                                </div>
                                           
											<div class="row">
												<label class="col-lg-3 control-label " for="jobTitle">Region <span class="text-danger">*</span></label>
												<div class="col-lg-9">
												<div class="form-group clearfix">
													<select class="form-control fancy-select required">
                                                      
                                                            <option value="None">None</option>
															 <option value="Region 1">Region 1</option>
                                                            <option value="Region 2">Region 2</option>
                                                            <option value="Region 3">Region 3</option>
                                                  
                                                    </select>
												</div>
											</div>
											</div>
											<div class="row">
												<label class="col-lg-3 control-label " for="jobTitle">Company <span class="text-danger">*</span></label>
												<div class="col-lg-9">
												<div class="form-group clearfix">
													<input type="text" name="" class="form-control" placeholder="Site Company Name">
												</div>
											</div>
											</div>
											<div class="row">
												<label class="col-lg-3 control-label " for="jobLocation"> Contact <span class="text-danger">*</span></label>
												<div class="col-lg-9">
												<div class="form-group clearfix">
													<select class="form-control fancy-select">
                                                      
                                                            <option value="Default">Default</option>
															 <option value="John Smith">John Smith</option>
                                                           
                                                    </select>
													
												</div>
											</div>
											</div>
											<div class="row">
											
												<label class="col-lg-3 control-label " for="client">Name <span class="text-danger">*</span></label>
												<div class="col-lg-9">
												<div class="form-group clearfix">
												<input type="text" name="" value="" class="form-control">
												
												</div>
											</div>
											</div>
											<div class="row">
											
												<label class="col-lg-3 control-label " for="client">Email</label>
												<div class="col-lg-9">
												<div class="form-group clearfix">
												<input type="email" name="" value="" class="form-control">
												
												</div>
											</div>
											</div>
											<div class="row">
											
												<label class="col-lg-3 control-label " for="client">Phone</label>
												<div class="col-lg-9">
												<div class="form-group clearfix">
												<input type="text" name="" value="" class="form-control">
												
												</div>
											</div>
											</div>
											<div class="row">
											
												<label class="col-lg-3 control-label " for="client">Address <span class="text-danger">*</span></label>
												<div class="col-lg-9">
												<div class="form-group clearfix">
												<textarea name="" class="form-control required"></textarea>
												
												</div>
											</div>
											</div>
											<div class="row">
											
												<label class="col-lg-3 control-label " for="client">City</label>
												<div class="col-lg-9">
												<div class="form-group clearfix">
												<input type="text" name="" value="" class="form-control">
												
												</div>
											</div>
											</div>
											<div class="row">
											
												<label class="col-lg-3 control-label " for="client">Postcode</label>
												<div class="col-lg-9">
												<div class="input-group form-group">
												<input type="text" name="" value="" class="form-control">
												 <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" data-toggle="modal" data-target="#search_postcode_site"><i class="fa fa-search"></i></button>
  </div>
												</div>
											</div>
											</div>
											<div class="row">
											
												<label class="col-lg-3 control-label " for="client">Country</label>
												<div class="col-lg-9">
												<div class="form-group clearfix">
												 <select class="form-control select2">
												 <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
				</select>
												
												</div>
											</div>
											</div>
										
											</div>
											</div>
                                            </section>
                                            <h3>Job Details</h3>
                                           <section>
										  
											 <div class="row justify-content-md-center">
											 
											<div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
											 <h4>Job Details</h4></br>
											 <div class="row">
                                                <label class="col-lg-3 col-md-3 form-control-label">Job Ref.</label>
                                                <div class="col-lg-9 col-md-9">
												<div class="form-group">
                                                  
													CM55334875
													
                                                </div>
                                                </div>
                                                </div>
                                           
											<!--<div class="row">
												<label class="col-lg-3 control-label " for="jobTitle">Customer Ref. <span class="text-danger">*</span></label>
												<div class="col-lg-9">
												<div class="form-group clearfix">
													<input type="text" name="" class="form-control">
												</div>
											</div>
											</div>-->
											<div class="row">
												<label class="col-lg-3 control-label " for="jobTitle">Job Title<span class="text-danger">*</span></label>
												<div class="col-lg-9">
												<div class="form-group clearfix">
													<input type="text" name="" class="form-control">
												</div>
											</div>
											</div>
											<div class="row">
												<label class="col-lg-3 control-label " for="jobLocation"> Job Type <span class="text-danger">*</span></label>
												<div class="col-lg-9">
												<div class="form-group clearfix">
													<select class="form-control fancy-select">
                                                      
                                                            <option value="">Select Job Type</option>
															 <option value="Job Type 1">Full Time General Cleaning</option>
															 <option value="Job Type 2">Housekeeping</option>
															 <option value="Contract Jobs">Contract Jobs</option>
															 <option value="Indivisual Jobs">Indivisual Jobs</option>
                                                           
                                                    </select>
												</div>
											</div>
											</div>
											<div class="row">
											
												<label class="col-lg-3 control-label " for="client">Start Date <span class="text-danger">*</span></label>
												<div class="col-lg-9">
												<div class="form-group clearfix">
												<input type="text" name="" value="" class="form-control form_datetime">
												
												</div>
											</div>
											</div>
											<div class="row">
											
												<label class="col-lg-3 control-label " for="client">End Date <span class="text-danger">*</span></label>
												<div class="col-lg-9">
												<div class="form-group clearfix">
												<input type="text" name="" value="" class="form-control form_datetime">
												
												</div>
											</div>
											</div>
											
										
										</section>
                                            <h3>Assign Job to the Team</h3>
                                            <section>
											<div class="form-group row">
												<div class="col-md-4 text-center">
												
												<div id='external-events'>
<h4>Draggable Jobs</h4>
<div class='external-event'>Job 1</div>
<div class='external-event'>Job 2</div>
<div class='external-event'>Job 3</div>
<div class='external-event'>Job 4</div>
<div class='external-event'>Job 5</div>
<p>
<input type='checkbox' id='drop-remove' /> <label for='drop-remove'>remove after drop</label>
</p>
</div>
</div>
<div class="col-md-8 text-center">
<div id='calendar'></div>
													<!--<h1 class="text-success" style="font-size:150px;"><i class="fa fa-check-circle" aria-hidden="true"></i></h1>
													<h3>Your Job has been added Successfully.</h3>-->
												</div>
												</div>
											
										</section>
                                        </div>
                                    </form>
								</div>
							</div>
						</div>
						
						
						<!--Postcode Search Modal-->
						<div class="modal fade" id="search_postcode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Find Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">House NO. or name:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Select Adress:</label>
           <select class="form-control fancy-select required">
                                                      
                                                            <option value="">Select Job Type</option>
															 <option value="Job Type 1">address 1</option>
															 <option value="Job Type 2">address 2</option>
															 <option value="Job Type 3">address 3</option>
															 <option value="Job Type 4">address 4</option>
															 <option value="Job Type 5">address 5</option>
                                                           
                                                    </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
	<!--Postcode Search Modal End-->	


						<!--Site Postcode Search Modal-->
						<div class="modal fade" id="search_postcode_site" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Find Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">House NO. or name:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Select Adress:</label>
           <select class="form-control fancy-select required">
                                                      
                                                            <option value="">Select Job Type</option>
															 <option value="Job Type 1">address 1</option>
															 <option value="Job Type 2">address 2</option>
															 <option value="Job Type 3">address 3</option>
															 <option value="Job Type 4">address 4</option>
															 <option value="Job Type 5">address 5</option>
                                                           
                                                    </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
	<!--Postcode Search Modal End-->		

@include('applicants.includes.header')
@include('applicants.includes.navbar')
  <!-- BEGIN: Content -->
  
  <link rel="stylesheet" href="{{asset('applicant/dist/app.css')}}" >
    
<div class="content"  >
    
  
@include('applicants.includes.topbar')
@if(!isset($_GET['page']))

<style>

body {
	font-family: 'Varela Round', sans-serif;
}
.modal-confirm {		
	color: #434e65;
	width: 525px;
}
.modal-confirm .modal-content {
	padding: 20px;
	font-size: 16px;
	border-radius: 5px;
	border: none;
}
.modal-confirm .modal-header {
	background: #81d831c7;
	border-bottom: none;   
	position: relative;
	text-align: center;
	margin: -20px -20px 0;
	border-radius: 5px 5px 0 0;
	padding: 35px;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 36px;
	margin: 10px 0;
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-confirm .close {
	position: absolute;
	top: 15px;
	right: 15px;
	color: #fff;
	text-shadow: none;
	opacity: 0.5;
}
.modal-confirm .close:hover {
	opacity: 0.8;
}
.modal-confirm .icon-box {
	color: #fff;		
	width: 95px;
	height: 95px;
	display: inline-block;
	border-radius: 50%;
	z-index: 9;
	border: 5px solid #fff;
	padding: 15px;
	text-align: center;
}
.modal-confirm .icon-box i {
	font-size: 64px;
	margin: -4px 0 0 -4px;
}
.modal-confirm.modal-dialog {
	margin-top: 80px;
}
.modal-confirm .btn, .modal-confirm .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #eeb711 !important;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border-radius: 30px;
	margin-top: 10px;
	padding: 6px 20px;
	border: none;
}
.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	background: #eda645 !important;
	outline: none;
}
.modal-confirm .btn span {
	margin: 1px 3px 0;
	float: left;
}
.required {
  color: red;
}
.modal-confirm .btn i {
	margin-left: 1px;
	font-size: 20px;
	float: right;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>

<section id="personal_address">
<div class="">
    <div class="">
        <h3 style="font-size: 1.5em;" align="center" class="font-weight-bold">Personal Information</h3>
        <h3 align="center"><span style=" font-size: 0.9em;">(As indicated on your passport)</span></h3><br>
        
        
        <div class="intro-y box py-10 sm:py-20 mt-5">
                    <div class="wizard flex flex-col lg:flex-row justify-center px-5 sm:px-20">
                        <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full btn btn-primary">1</button>
                            <div class="lg:w-32 font-medium text-base lg:mt-3 ml-3 lg:mx-auto">Setup Your Profile</div>
                        </div>
                        <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full btn text-gray-600 bg-gray-200 dark:bg-dark-1">2</button>
                            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Setup Your Educational Background</div>
                        </div>
                          <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full btn text-gray-600 bg-gray-200 dark:bg-dark-1">3</button>
                            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Test Score</div>
                        </div>
                        
                          <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full btn text-gray-600 bg-gray-200 dark:bg-dark-1">4</button>
                            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Background Information</div>
                        </div>
                       
                       
                        <div class="wizard__line hidden lg:block w-2/3 bg-gray-200 dark:bg-dark-1 absolute mt-5"></div>
                    </div>
                    
                    <br>
                    <br>
                    <br>
                    
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{url('applicants/submit_personal_info')}}">
                @csrf
                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <div class="row">
                <div class="col-xl-4">
                    <label>First Name</label><span class="required">*</span>
                    <input type="text" name="first_name" placeholder="First Name" class="form-control" value="{{Auth::user()->first_name}}" ><br>
                </div>

                <div class="col-xl-4">
                    <label>Middle Name</label><span class="required">*</span>
                    <input type="text" name="middle_name" placeholder="Middle Name" class="form-control" value="{{Auth::user()->middle_name}}"><br>
                </div>

                <div class="col-xl-4">
                    <label>Last Name</label><span class="required">*</span>
                    <input type="text" name="last_name" placeholder="Last Name" class="form-control" value="{{Auth::user()->last_name}}"><br>
                </div>

                <div class="col-xl-4">
                    <label>Date of Birth</label><span class="required">*</span>
                    <input type="text" name="d_o_b" placeholder="YYYY-MM-DD" class="form-control" value="{{date('Y-m-d',strtotime(Auth::user()->d_o_b))}}"  pattern="(?:19|20)(?:(?:[13579][26]|[02468][048])-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))|(?:[0-9]{2}-(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-8])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:29|30))|(?:(?:0[13578]|1[02])-31)))">        
                </div>

                <div class="col-xl-4">
                    <label>First Language</label><span class="required">*</span>
                    <input type="text" name="first_language" placeholder="Enter First Language" class="form-control" value="{{Auth::user()->first_language}}"><br>
                </div>

                <div class="col-xl-4">
                    <label>Country of citizenship</label><span class="required">*</span>
                    <input list="country" name="country" placeholder="" class="form-control" value="{{Auth::user()->country_of_citizenship}}">
        <datalist id="country">
        <option value="Afghanistan" />
        <option value="Albania" />
        <option value="Algeria" />
        <option value="American Samoa" />
        <option value="Andorra" />
        <option value="Angola" />
        <option value="Anguilla" />
        <option value="Antarctica" />
        <option value="Antigua and Barbuda" />
        <option value="Argentina" />
        <option value="Armenia" />
        <option value="Aruba" />
        <option value="Australia" />
        <option value="Austria" />
        <option value="Azerbaijan" />
        <option value="Bahamas" />
        <option value="Bahrain" />
        <option value="Bangladesh" />
        <option value="Barbados" />
        <option value="Belarus" />
        <option value="Belgium" />
        <option value="Belize" />
        <option value="Benin" />
        <option value="Bermuda" />
        <option value="Bhutan" />
        <option value="Bolivia" />
        <option value="Bosnia and Herzegovina" />
        <option value="Botswana" />
        <option value="Bouvet Island" />
        <option value="Brazil" />
        <option value="British Indian Ocean Territory" />
        <option value="Brunei Darussalam" />
        <option value="Bulgaria" />
        <option value="Burkina Faso" />
        <option value="Burundi" />
        <option value="Cambodia" />
        <option value="Cameroon" />
        <option value="Canada" />
        <option value="Cape Verde" />
        <option value="Cayman Islands" />
        <option value="Central African Republic" />
        <option value="Chad" />
        <option value="Chile" />
        <option value="China" />
        <option value="Christmas Island" />
        <option value="Cocos (Keeling) Islands" />
        <option value="Colombia" />
        <option value="Comoros" />
        <option value="Congo" />
        <option value="Congo, The Democratic Republic of The" />
        <option value="Cook Islands" />
        <option value="Costa Rica" />
        <option value="Cote D'ivoire" />
        <option value="Croatia" />
        <option value="Cuba" />
        <option value="Cyprus" />
        <option value="Czech Republic" />
        <option value="Denmark" />
        <option value="Djibouti" />
        <option value="Dominica" />
        <option value="Dominican Republic" />
        <option value="Ecuador" />
        <option value="Egypt" />
        <option value="El Salvador" />
        <option value="Equatorial Guinea" />
        <option value="Eritrea" />
        <option value="Estonia" />
        <option value="Ethiopia" />
        <option value="Falkland Islands (Malvinas)" />
        <option value="Faroe Islands" />
        <option value="Fiji" />
        <option value="Finland" />
        <option value="France" />
        <option value="French Guiana" />
        <option value="French Polynesia" />
        <option value="French Southern Territories" />
        <option value="Gabon" />
        <option value="Gambia" />
        <option value="Georgia" />
        <option value="Germany" />
        <option value="Ghana" />
        <option value="Gibraltar" />
        <option value="Greece" />
        <option value="Greenland" />
        <option value="Grenada" />
        <option value="Guadeloupe" />
        <option value="Guam" />
        <option value="Guatemala" />
        <option value="Guinea" />
        <option value="Guinea-bissau" />
        <option value="Guyana" />
        <option value="Haiti" />
        <option value="Heard Island and Mcdonald Islands" />
        <option value="Holy See (Vatican City State)" />
        <option value="Honduras" />
        <option value="Hong Kong" />
        <option value="Hungary" />
        <option value="Iceland" />
        <option value="India" />
        <option value="Indonesia" />
        <option value="Iran, Islamic Republic of" />
        <option value="Iraq" />
        <option value="Ireland" />
        <option value="Israel" />
        <option value="Italy" />
        <option value="Jamaica" />
        <option value="Japan" />
        <option value="Jordan" />
        <option value="Kazakhstan" />
        <option value="Kenya" />
        <option value="Kiribati" />
        <option value="Korea, Democratic People's Republic of" />
        <option value="Korea, Republic of" />
        <option value="Kuwait" />
        <option value="Kyrgyzstan" />
        <option value="Lao People's Democratic Republic" />
        <option value="Latvia" />
        <option value="Lebanon" />
        <option value="Lesotho" />
        <option value="Liberia" />
        <option value="Libyan Arab Jamahiriya" />
        <option value="Liechtenstein" />
        <option value="Lithuania" />
        <option value="Luxembourg" />
        <option value="Macao" />
        <option value="Macedonia, The Former Yugoslav Republic of" />
        <option value="Madagascar" />
        <option value="Malawi" />
        <option value="Malaysia" />
        <option value="Maldives" />
        <option value="Mali" />
        <option value="Malta" />
        <option value="Marshall Islands" />
        <option value="Martinique" />
        <option value="Mauritania" />
        <option value="Mauritius" />
        <option value="Mayotte" />
        <option value="Mexico" />
        <option value="Micronesia, Federated States of" />
        <option value="Moldova, Republic of" />
        <option value="Monaco" />
        <option value="Mongolia" />
        <option value="Montserrat" />
        <option value="Morocco" />
        <option value="Mozambique" />
        <option value="Myanmar" />
        <option value="Namibia" />
        <option value="Nauru" />
        <option value="Nepal" />
        <option value="Netherlands" />
        <option value="Netherlands Antilles" />
        <option value="New Caledonia" />
        <option value="New Zealand" />
        <option value="Nicaragua" />
        <option value="Niger" />
        <option value="Nigeria" />
        <option value="Niue" />
        <option value="Norfolk Island" />
        <option value="Northern Mariana Islands" />
        <option value="Norway" />
        <option value="Oman" />
        <option value="Pakistan" />
        <option value="Palau" />
        <option value="Palestinian Territory, Occupied" />
        <option value="Panama" />
        <option value="Papua New Guinea" />
        <option value="Paraguay" />
        <option value="Peru" />
        <option value="Philippines" />
        <option value="Pitcairn" />
        <option value="Poland" />
        <option value="Portugal" />
        <option value="Puerto Rico" />
        <option value="Qatar" />
        <option value="Reunion" />
        <option value="Romania" />
        <option value="Russian Federation" />
        <option value="Rwanda" />
        <option value="Saint Helena" />
        <option value="Saint Kitts and Nevis" />
        <option value="Saint Lucia" />
        <option value="Saint Pierre and Miquelon" />
        <option value="Saint Vincent and The Grenadines" />
        <option value="Samoa" />
        <option value="San Marino" />
        <option value="Sao Tome and Principe" />
        <option value="Saudi Arabia" />
        <option value="Senegal" />
        <option value="Serbia and Montenegro" />
        <option value="Seychelles" />
        <option value="Sierra Leone" />
        <option value="Singapore" />
        <option value="Slovakia" />
        <option value="Slovenia" />
        <option value="Solomon Islands" />
        <option value="Somalia" />
        <option value="South Africa" />
        <option value="South Georgia and The South Sandwich Islands" />
        <option value="Spain" />
        <option value="Sri Lanka" />
        <option value="Sudan" />
        <option value="Suriname" />
        <option value="Svalbard and Jan Mayen" />
        <option value="Swaziland" />
        <option value="Sweden" />
        <option value="Switzerland" />
        <option value="Syrian Arab Republic" />
        <option value="Taiwan, Province of China" />
        <option value="Tajikistan" />
        <option value="Tanzania, United Republic of" />
        <option value="Thailand" />
        <option value="Timor-leste" />
        <option value="Togo" />
        <option value="Tokelau" />
        <option value="Tonga" />
        <option value="Trinidad and Tobago" />
        <option value="Tunisia" />
        <option value="Turkey" />
        <option value="Turkmenistan" />
        <option value="Turks and Caicos Islands" />
        <option value="Tuvalu" />
        <option value="Uganda" />
        <option value="Ukraine" />
        <option value="United Arab Emirates" />
        <option value="United Kingdom" />
        <option value="United States" />
        <option value="United States Minor Outlying Islands" />
        <option value="Uruguay" />
        <option value="Uzbekistan" />
        <option value="Vanuatu" />
        <option value="Venezuela" />
        <option value="Viet Nam" />
        <option value="Virgin Islands, British" />
        <option value="Virgin Islands, U.S" />
        <option value="Wallis and Futuna" />
        <option value="Western Sahara" />
        <option value="Yemen" />
        <option value="Zambia" />
        <option value="Zimbabwe" />
    </datalist><br>
                </div>

                <div class="col-xl-4">
                    <label>Passport Number</label><span class="required">*</span>
                    <input type="number" name="passport_number" placeholder="Enter Passport Number" value="{{Auth::user()->passport_number}}" class="form-control"><br>
                </div>

                <div class="col-xl-4">
                    <label>Gender</label><span class="required">*</span><br>
                    
                    <h3 class="font-weight-bold"></h3>
                   
                    <input type="radio" name="gender" value="female"> Female &nbsp; <input type="radio" name="gender" value="male"> Male<br>
                  
                </div>
             
             
             <div class="col-xl-4">
                    <label>Marital status</label><span class="required">*</span><br>
                   
                    <h3 class="font-weight-bold"></h3>
                   
                    <input type="radio" name="marital_status" value="single"> Single &nbsp; <input type="radio" name="marital_status" value="married"> Married<br>
                   
                </div>





<!-----


                <div>
                    <label>Marital status</label><br>
                    @if(isset(Auth::user()->marital_status))
                    <h3 class="font-weight-bold">{{Auth::user()->marital_status}}</h3>
                    @else
                    <input type="radio" name="marital_status" value="married"> Married &nbsp; <input type="radio" name="marital_status" value="single"> Single
                    @endif  
                </div>
          
       ------>   
          

          
          
          
          
          
          
          
          
          
          
          
           
            </div>
            
            <br>
           <br>
             <button class="btn btn-success btn-block">Submit Personal details</button>
           
                </form>
            </div>
        </div><br>



<!-- =================Address Details=============================== -->
        <h3 style="font-size: 1.5em;" align="center" class="font-weight-bold">Address Details</h3><br>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{url('applicants/submit_address_details')}}">
                    @csrf
                    <div class="row">
                    <div class="col-xl-8">
                        <label>Address</label><span class="required">*</span>
                        <input type="text" name="address" placeholder="Enter Address" class="form-control" value="{{Auth::user()->address}}"><br>
                    </div>

                    <div class="col-xl-4">
                        <label>City/Town</label><span class="required">*</span>
                        <input type="text" name="city" placeholder="Enter City/Town" class="form-control" value="{{Auth::user()->city}}"><br>
                    </div>

                    <div class="col-xl-4">
                        <label>Country</label><span class="required">*</span>
                        <input list="country" name="country" class="form-control" value="{{Auth::user()->country_of_citizenship}}">
        <datalist id="country">
        <option value="Afghanistan" />
        <option value="Albania" />
        <option value="Algeria" />
        <option value="American Samoa" />
        <option value="Andorra" />
        <option value="Angola" />
        <option value="Anguilla" />
        <option value="Antarctica" />
        <option value="Antigua and Barbuda" />
        <option value="Argentina" />
        <option value="Armenia" />
        <option value="Aruba" />
        <option value="Australia" />
        <option value="Austria" />
        <option value="Azerbaijan" />
        <option value="Bahamas" />
        <option value="Bahrain" />
        <option value="Bangladesh" />
        <option value="Barbados" />
        <option value="Belarus" />
        <option value="Belgium" />
        <option value="Belize" />
        <option value="Benin" />
        <option value="Bermuda" />
        <option value="Bhutan" />
        <option value="Bolivia" />
        <option value="Bosnia and Herzegovina" />
        <option value="Botswana" />
        <option value="Bouvet Island" />
        <option value="Brazil" />
        <option value="British Indian Ocean Territory" />
        <option value="Brunei Darussalam" />
        <option value="Bulgaria" />
        <option value="Burkina Faso" />
        <option value="Burundi" />
        <option value="Cambodia" />
        <option value="Cameroon" />
        <option value="Canada" />
        <option value="Cape Verde" />
        <option value="Cayman Islands" />
        <option value="Central African Republic" />
        <option value="Chad" />
        <option value="Chile" />
        <option value="China" />
        <option value="Christmas Island" />
        <option value="Cocos (Keeling) Islands" />
        <option value="Colombia" />
        <option value="Comoros" />
        <option value="Congo" />
        <option value="Congo, The Democratic Republic of The" />
        <option value="Cook Islands" />
        <option value="Costa Rica" />
        <option value="Cote D'ivoire" />
        <option value="Croatia" />
        <option value="Cuba" />
        <option value="Cyprus" />
        <option value="Czech Republic" />
        <option value="Denmark" />
        <option value="Djibouti" />
        <option value="Dominica" />
        <option value="Dominican Republic" />
        <option value="Ecuador" />
        <option value="Egypt" />
        <option value="El Salvador" />
        <option value="Equatorial Guinea" />
        <option value="Eritrea" />
        <option value="Estonia" />
        <option value="Ethiopia" />
        <option value="Falkland Islands (Malvinas)" />
        <option value="Faroe Islands" />
        <option value="Fiji" />
        <option value="Finland" />
        <option value="France" />
        <option value="French Guiana" />
        <option value="French Polynesia" />
        <option value="French Southern Territories" />
        <option value="Gabon" />
        <option value="Gambia" />
        <option value="Georgia" />
        <option value="Germany" />
        <option value="Ghana" />
        <option value="Gibraltar" />
        <option value="Greece" />
        <option value="Greenland" />
        <option value="Grenada" />
        <option value="Guadeloupe" />
        <option value="Guam" />
        <option value="Guatemala" />
        <option value="Guinea" />
        <option value="Guinea-bissau" />
        <option value="Guyana" />
        <option value="Haiti" />
        <option value="Heard Island and Mcdonald Islands" />
        <option value="Holy See (Vatican City State)" />
        <option value="Honduras" />
        <option value="Hong Kong" />
        <option value="Hungary" />
        <option value="Iceland" />
        <option value="India" />
        <option value="Indonesia" />
        <option value="Iran, Islamic Republic of" />
        <option value="Iraq" />
        <option value="Ireland" />
        <option value="Israel" />
        <option value="Italy" />
        <option value="Jamaica" />
        <option value="Japan" />
        <option value="Jordan" />
        <option value="Kazakhstan" />
        <option value="Kenya" />
        <option value="Kiribati" />
        <option value="Korea, Democratic People's Republic of" />
        <option value="Korea, Republic of" />
        <option value="Kuwait" />
        <option value="Kyrgyzstan" />
        <option value="Lao People's Democratic Republic" />
        <option value="Latvia" />
        <option value="Lebanon" />
        <option value="Lesotho" />
        <option value="Liberia" />
        <option value="Libyan Arab Jamahiriya" />
        <option value="Liechtenstein" />
        <option value="Lithuania" />
        <option value="Luxembourg" />
        <option value="Macao" />
        <option value="Macedonia, The Former Yugoslav Republic of" />
        <option value="Madagascar" />
        <option value="Malawi" />
        <option value="Malaysia" />
        <option value="Maldives" />
        <option value="Mali" />
        <option value="Malta" />
        <option value="Marshall Islands" />
        <option value="Martinique" />
        <option value="Mauritania" />
        <option value="Mauritius" />
        <option value="Mayotte" />
        <option value="Mexico" />
        <option value="Micronesia, Federated States of" />
        <option value="Moldova, Republic of" />
        <option value="Monaco" />
        <option value="Mongolia" />
        <option value="Montserrat" />
        <option value="Morocco" />
        <option value="Mozambique" />
        <option value="Myanmar" />
        <option value="Namibia" />
        <option value="Nauru" />
        <option value="Nepal" />
        <option value="Netherlands" />
        <option value="Netherlands Antilles" />
        <option value="New Caledonia" />
        <option value="New Zealand" />
        <option value="Nicaragua" />
        <option value="Niger" />
        <option value="Nigeria" />
        <option value="Niue" />
        <option value="Norfolk Island" />
        <option value="Northern Mariana Islands" />
        <option value="Norway" />
        <option value="Oman" />
        <option value="Pakistan" />
        <option value="Palau" />
        <option value="Palestinian Territory, Occupied" />
        <option value="Panama" />
        <option value="Papua New Guinea" />
        <option value="Paraguay" />
        <option value="Peru" />
        <option value="Philippines" />
        <option value="Pitcairn" />
        <option value="Poland" />
        <option value="Portugal" />
        <option value="Puerto Rico" />
        <option value="Qatar" />
        <option value="Reunion" />
        <option value="Romania" />
        <option value="Russian Federation" />
        <option value="Rwanda" />
        <option value="Saint Helena" />
        <option value="Saint Kitts and Nevis" />
        <option value="Saint Lucia" />
        <option value="Saint Pierre and Miquelon" />
        <option value="Saint Vincent and The Grenadines" />
        <option value="Samoa" />
        <option value="San Marino" />
        <option value="Sao Tome and Principe" />
        <option value="Saudi Arabia" />
        <option value="Senegal" />
        <option value="Serbia and Montenegro" />
        <option value="Seychelles" />
        <option value="Sierra Leone" />
        <option value="Singapore" />
        <option value="Slovakia" />
        <option value="Slovenia" />
        <option value="Solomon Islands" />
        <option value="Somalia" />
        <option value="South Africa" />
        <option value="South Georgia and The South Sandwich Islands" />
        <option value="Spain" />
        <option value="Sri Lanka" />
        <option value="Sudan" />
        <option value="Suriname" />
        <option value="Svalbard and Jan Mayen" />
        <option value="Swaziland" />
        <option value="Sweden" />
        <option value="Switzerland" />
        <option value="Syrian Arab Republic" />
        <option value="Taiwan, Province of China" />
        <option value="Tajikistan" />
        <option value="Tanzania, United Republic of" />
        <option value="Thailand" />
        <option value="Timor-leste" />
        <option value="Togo" />
        <option value="Tokelau" />
        <option value="Tonga" />
        <option value="Trinidad and Tobago" />
        <option value="Tunisia" />
        <option value="Turkey" />
        <option value="Turkmenistan" />
        <option value="Turks and Caicos Islands" />
        <option value="Tuvalu" />
        <option value="Uganda" />
        <option value="Ukraine" />
        <option value="United Arab Emirates" />
        <option value="United Kingdom" />
        <option value="United States" />
        <option value="United States Minor Outlying Islands" />
        <option value="Uruguay" />
        <option value="Uzbekistan" />
        <option value="Vanuatu" />
        <option value="Venezuela" />
        <option value="Viet Nam" />
        <option value="Virgin Islands, British" />
        <option value="Virgin Islands, U.S" />
        <option value="Wallis and Futuna" />
        <option value="Western Sahara" />
        <option value="Yemen" />
        <option value="Zambia" />
        <option value="Zimbabwe" />
    </datalist><br>
                    </div>

                    <div class="col-xl-4">
                        <label>Province/State</label><span class="required">*</span>
                        <input type="text" name="province" placeholder="Enter Province..." class="form-control" value="{{Auth::user()->state}}"><br>
                    </div>

                    <div class="col-xl-4">
                        <label>Postal/Zip Code</label><span class="required">*</span>
                        <input type="number" name="postal_code" placeholder="Enter Postal/Zip code..." value="{{Auth::user()->postal_code}}" class="form-control"><br>
                    </div>

                    <div class="col-xl-4">
                        <label>Email</label><span class="required">*</span>
                        <input type="email" name="email" placeholder="Enter Email" class="form-control" value="{{Auth::user()->email}}"><br>
                    </div>

                    <div class="col-xl-4">
                        <label>Phone Number</label><span class="required">*</span>
                        <input name="phone" class="form-control" type="tel" id="telephone3" value="{{Auth::user()->phone}}">
                    </div><hr><br>
                    
                     <div class="col-xl-12">
                      <h3 class="font-weight-bold" align="center">Emergency Information</h3><br>  
                    </div>

                    <div class="col-xl-4">
                        <label>Name </label><span class="required">*</span>
                        <input type="text" name="emergency_name" placeholder="Enter emergency name" class="form-control" value="{{Auth::user()->emergency_name}}"><br>
                    </div>

                    <div class="col-xl-4">
                        <label>Phone Number</label><span class="required">*</span>
                        <input name="emergency_phone" class="form-control" type="tel" id="telephone2" value="{{Auth::user()->emergency_phone}}">
                    </div>

                    <div class="col-xl-4">
                        <label>Email Address</label><span class="required">*</span>
                        <input type="email" name="emergency_email" placeholder="Enter emergency email" class="form-control" value="{{Auth::user()->emergency_email}}"><br>
                    </div>

                    <div class="col-xl-4">
                        <label>Relationship</label><span class="required">*</span>
                        <input type="text" name="emergency_relationship" placeholder="What's your relationship with he/she?" class="form-control" value="{{Auth::user()->emergency_relationship}}"><br>
                    </div>

                </div><br>

                <button class="btn btn-success btn-block">Submit Address details</button>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<a href="{{url('/eligibility?page=2')}}" class="btn btn-primary w-24 mr-1 mb-2" style="float: right;">Next</a>
</section>



















<!-- Education summarry -->











@elseif(isset($_GET['page']))
@if($_GET['page'] == 2)
<section id="education_history">
    <h3 style="font-size: 1.5em;" align="center" class="font-weight-bold">Education Summary</h3>
    
    
         <div class="intro-y box py-10 sm:py-20 mt-5">
                    <div class="wizard flex flex-col lg:flex-row justify-center px-5 sm:px-20">
                        
                        
                        <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full btn btn-primary">1</button>
                            <div class="lg:w-32 font-medium text-base lg:mt-3 ml-3 lg:mx-auto">Setup Your Profile</div>
                        </div>
                        <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full btn btn-primary">2</button>
                            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Setup Your Educational Background</div>
                        </div>
                        <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full btn text-gray-600 bg-gray-200 dark:bg-dark-1">3</button>
                            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Test Score</div>
                        </div>
                        
                          <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full btn text-gray-600 bg-gray-200 dark:bg-dark-1">4</button>
                            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Background Information</div>
                        </div>
                       
                        <div class="wizard__line hidden lg:block w-2/3 bg-gray-200 dark:bg-dark-1 absolute mt-5"></div>
                        
                    </div>
                    
                    <br>
                    <br>
                    <br>
                    
                    
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{url('applicants/submit_education_summary')}}">
                @csrf
                <div class="row">
                <div class="col-xl-4">
                    <label>Country of Education</label><span class="required">*</span>
        <select name="country" class="form-control" onchange="togglegrading(this);" id="country" required="">
        <option value="@if(isset($education_summary->country)){{$education_summary->country}}@endif">@if(isset($education_summary->country)){{$education_summary->country}}@endif</option>
        <option value="Afghanistan">Afghanistan</option>
        <option value="Albania">Albania</option>
        <option value="Algeria">Algeria</option>
        <option value="American_Samoa">American Samoa</option>
        <option value="Andorra">Andorra</option>
        <option value="Angola">Angola</option>
        <option value="Anguilla">Anguilla</option>
        <option value="Antarctica">Antarctica</option>
        <option value="Antigua_and_Barbuda">Antigua and Barbuda</option>
        <option value="Argentina">Argentina</option>
        <option value="Armenia">Armenia</option>
        <option value="Aruba">Aruba</option>
        <option value="Australia">Australia</option>
        <option value="Austria">Austria</option>
        <option value="Azerbaijan">Azerbaijan</option>
        <option value="Bahamas">Bahamas
        <option value="Bahrain">Bahrain
        <option value="Bangladesh">Bangladesh</option>
        <option value="Barbados">Barbados</option>
        <option value="Belarus">Belarus</option>
        <option value="Belgium">Belgium</option>
        <option value="Belize">Belize</option>
        <option value="Benin">Benin</option>
        <option value="Bermuda">Bermuda</option>
        <option value="Bhutan">Bhutan</option>
        <option value="Bolivia">Bolivia</option>
        <option value="Bosnia_and_Herzegovina">Bosnia and Herzegovina</option>
        <option value="Botswana">Botswana</option>
        <option value="Bouvet_Island">Bouvet Island</option>
        <option value="Brazil">Brazil</option>
        <option value="British_Indian_Ocean_Territory">British Indian Ocean Territory</option>
        <option value="Brunei_Darussalam">Brunei Darussalam</option>
        <option value="Bulgaria">Bulgaria</option>
        <option value="Burkina_Faso">Burkina Faso</option>
        <option value="Burma_Myarma">Burma (Myarma)</option>
        <option value="Burundi">Burundi</option>
        <option value="Cambodia">Cambodia</option>
        <option value="Cameroon">Cameroon</option>
        <option value="Canada">Canada</option>
        <option value="Cape_Verde">Cape Verde</option>
        <option value="Cayman_Islands">Cayman Islands</option>
        <option value="Central_African_Republic">Central African Republic</option>
        <option value="Chad">Chad</option>
        <option value="Chile">Chile</option>
        <option value="China">China</option>
        <option value="Christmas_Island">Christmas Island</option>
        <option value="Cocos_Keeling_Islands">Cocos (Keeling) Islands</option>
        <option value="Colombia">Colombia</option>
        <option value="Comoros">Comoros</option>
        <option value="Congo">Congo</option>
        <option value="Congo_The_Democratic_Republic_of_The">Congo, The Democratic Republic of The</option>
        <option value="Cook_Islands">Cook Islands</option>
        <option value="Costa_Rica">Costa Rica</option>
        <option value="Cote_D_ivoire">Cote D ivoire</option>
        <option value="Croatia">Croatia</option>
        <option value="Cuba">Cuba</option>
        <option value="Cyprus">Cyprus</option>
        <option value="Czech_Republic">Czech Republic</option>
        <option value="Denmark">Denmark</option>
        <option value="Djibouti">Djibouti</option>
        <option value="Dominica">Dominica</option>
        <option value="Dominican_Republic">Dominican Republic</option>
        <option value="Ecuador">Ecuador</option>
        <option value="Egypt">Egypt</option>
        <option value="El_Salvador">El Salvador</option>
        <option value="Equatorial_Guinea">Equatorial Guinea</option>
        <option value="Eritrea" >Eritrea</option>
        <option value="Estonia" >Estonia</option>
        <option value="Ethiopia" >Ethiopia</option>
        <option value="Falkland_Islands" >Falkland Islands</option>
        <option value="Faroe_Islands" >Faroe Islands</option>
        <option value="Fiji" >Fiji</option>
        <option value="Finland" >Finland</option>
        <option value="France" >France</option>
        <option value="French_Guiana" >French Guiana</option>
        <option value="French_Polynesia" >French Polynesia</option>
        <option value="French_Southern_Territories" >French Southern Territories</option>
        <option value="Gabon" >Gabon</option>
        <option value="Gambia" >Gambia</option>
        <option value="Georgia" >Georgia</option>
        <option value="Germany" >Germany</option>
        <option value="Ghana" >Ghana</option>
        <option value="Gibraltar" >Gibraltar</option>
        <option value="Greece" >Greece</option>
        <option value="Greenland" >Greenland</option>
        <option value="Grenada" >Grenada</option>
        <option value="Guadeloupe" >Guadeloupe</option>
        <option value="Guam" >Guam</option>
        <option value="Guatemala" >Guatemala</option>
        <option value="Guinea" >Guinea</option>
        <option value="Guinea_bissau" >Guinea-bissau</option>
        <option value="Guyana" >Guyana</option>
        <option value="Haiti">Haiti</option>
        <option value="Heard_Island_and_Mcdonald_Islands" >Heard Island and Mcdonald Islands</option>
        <option value="Holy_See" >Holy See</option>
        <option value="Honduras" >Honduras</option>
        <option value="Hong_Kong" >Hong Kong</option>
        <option value="Hungary" >Hungary</option>
        <option value="Iceland" >Iceland</option>
        <option value="India" >India</option>
        <option value="Indonesia" >Indonesia</option>
        <option value="Iran" >Iran</option>
        <option value="Iraq" >Iraq</option>
        <option value="Ireland" >Ireland</option>
        <option value="Israel" >Israel</option>
        <option value="Italy" >Italy</option>
        <option value="Jamaica" >Jamaica</option>
        <option value="Japan" >Japan</option>
        <option value="Jordan" >Jordan</option>
        <option value="Kazakhstan" >Kazakhstan</option>
        <option value="Kenya" >Kenya</option>
        <option value="Kiribati" >Kiribati</option>
        <option value="Korea_North" >Korea North</option>
        <option value="Korea_South" >Korea South</option>
        <option value="Kuwait" >Kuwait</option>
        <option value="Kyrgyzstan" >Kyrgyzstan</option>
        <option value="Lao" >Lao</option>
        <option value="Latvia" >Latvia</option>
        <option value="Lebanon" >Lebanon</option>
        <option value="Lesotho" >Lesotho</option>
        <option value="Liberia" >Liberia</option>
        <option value="Libyan" >Libyan</option>
        <option value="Liechtenstein" >Liechtenstein</option>
        <option value="Lithuania" >Lithuania</option>
        <option value="Luxembourg" >Luxembourg</option>
        <option value="Macao" >Macao</option>
        <option value="Macedonia" >Macedonia</option>
        <option value="Madagascar" >Madagascar</option>
        <option value="Malawi" >Malawi</option>
        <option value="Malaysia" >Malaysia</option>
        <option value="Maldives" >Maldives</option>
        <option value="Mali" >Mali</option>
        <option value="Malta" >Malta</option>
        <option value="Marshall_Islands">Marshall Islands</option>
        <option value="Martinique" >Martinique</option>
        <option value="Mauritania">Mauritania</option>
        <option value="Mauritius">Mauritius</option>
        <option value="Mayotte">Mayotte</option>
        <option value="Mexico" >Mexico</option>
        <option value="Micronesia" >Micronesia</option>
        <option value="Moldova" >Moldova</option>
        <option value="Monaco" >Monaco</option>
        <option value="Mongolia" >Mongolia</option>
        <option value="Montserrat" >Montserrat</option>
        <option value="Morocco" >Morocco</option>
        <option value="Mozambique" >Mozambique</option>
        <option value="Myanmar" >Myanmar</option>
        <option value="Namibia" >Namibia"</option>
        <option value="Nauru" >Nauru</option>
        <option value="Nepal" >Nepal</option>
        <option value="Netherlands" >Netherlands</option>
        <option value="Netherlands_Antilles" >Netherlands Antilles</option>
        <option value="New_Caledonia" >New Caledonia</option>
        <option value="New_Zealand" >New Zealand</option>
        <option value="Nicaragua" >Nicaragua</option>
        <option value="Niger" >Niger</option>
        <option value="Nigeria" >Nigeria</option>
        <option value="Niue" >Niue</option>
        <option value="Norfolk_Island" >Norfolk Island</option>
        <option value="Northern_Mariana_Islands" >Northern Mariana Islands</option>
        <option value="Norway" >Norway</option>
        <option value="Oman" >Oman</option>
        <option value="Pakistan" >Pakistan</option>
        <option value="Palau" >Palau</option>
        <option value="Palestinian_Territory" >Palestinian Territory</option>
        <option value="Panama" >Panama</option>
        <option value="Papua_New_Guinea" >Papua New Guinea</option>
        <option value="Paraguay" >Paraguay</option>
        <option value="Peru" >Peru</option>
        <option value="Philippines" >Philippines</option>
        <option value="Pitcairn" >Pitcairn</option>
        <option value="Poland">Poland</option>
        <option value="Portugal" >Portugal</option>
        <option value="Puerto_Rico" >Puerto Rico</option>
        <option value="Qatar">Qatar</option>
        <option value="Reunion" >Reunion</option>
        <option value="Romania" >Romania</option>
        <option value="Russian_Federation" >Russian Federation</option>
        <option value="Rwanda" >Rwanda</option>
        <option value="Saint_Helena" >Saint Helena</option>
        <option value="Saint_Kitts_and_Nevis" >Saint Kitts and Nevis</option>
        <option value="Saint_Lucia" >Saint Lucia</option>
        <option value="Saint_Pierre_and_Miquelon" >Saint Pierre and Miquelon</option>
        <option value="Saint_Vincent_and_The_Grenadines" >Saint Vincent and The Grenadines</option>
        <option value="Samoa" >Samoa</option>
        <option value="San_Marino" >San Marino</option>
        <option value="Sao_Tome_and_Principe" >Sao Tome and Principe</option>
        <option value="Saudi_Arabia" >Saudi Arabia</option>
        <option value="Senegal" >Senegal</option>
        <option value="Serbia_and_Montenegro" >Serbia and Montenegro</option>
        <option value="Seychelles" >Seychelles</option>
        <option value="Sierra_Leone" >Sierra Leone</option>
        <option value="Singapore" >Singapore</option>
        <option value="Slovakia" >Slovakia</option>
        <option value="Slovenia" >Slovenia</option>
        <option value="Solomon_Islands" >Solomon Islands</option>
        <option value="Somalia" >Somalia</option>
        <option value="South_Africa" >South Africa</option>
        <option value="South_Georgia_and_The_South_Sandwich_Islands" >South Georgia and The South Sandwich Islands</option>
        <option value="Spain" >Spain</option>
        <option value="Sri_Lanka" >Sri Lanka</option>
        <option value="Sudan" >Sudan</option>
        <option value="Suriname" >Suriname</option>
        <option value="Svalbard_and_Jan_Mayen" >Svalbard and Jan Mayen</option>
        <option value="Swaziland" >Swaziland</option>
        <option value="Sweden" >Sweden</option>
        <option value="Switzerland" >Switzerland</option>
        <option value="Syrian_Arab_Republic" >Syrian Arab Republic</option>
        <option value="Taiwan" >Taiwan</option>
        <option value="Tajikistan" >Tajikistan</option>
        <option value="Tanzania" >Tanzania</option>
        <option value="Thailand" >Thailand</option>
        <option value="Timor_leste" >Timor-leste</option>
        <option value="Togo" >Togo</option>
        <option value="Tokelau" >Tokelau</option>
        <option value="Tonga">Tonga</option>
        <option value="Trinidad_and_Tobago" >Trinidad and Tobago</option>
        <option value="Tunisia" >Tunisia</option>
        <option value="Turkey" >Turkey</option>
        <option value="Turkmenistan" >Turkmenistan</option>
        <option value="Turks_and_Caicos_Islands" >Turks and Caicos Islands</option>
        <option value="Tuvalu" >Tuvalu</option>
        <option value="Uganda" >Uganda</option>
        <option value="Ukraine" >Ukraine</option>
        <option value="United_Arab_Emirates" >United Arab Emirates</option>
        <option value="United_Kingdom" >United Kingdom</option>
        <option value="United_States" >United States</option>
        <option value="United_States_Minor_Outlying_Islands" >United States Minor Outlying Islands</option>
        <option value="Uruguay" >Uruguay</option>
        <option value="Uzbekistan" >Uzbekistan</option>
        <option value="Vanuatu" >Vanuatu</option>
        <option value="Venezuela" >Venezuela</option>
        <option value="Viet Nam" >Viet Nam</option>
        <option value="Virgin_Islands_British" >Virgin Islands, British</option>
        <option value="Virgin_Islands_US" >Virgin Islands, U.S</option>
        <option value="Wallis_and_Futuna" >Wallis and Futuna</option>
        <option value="Western_Sahara" >Western Sahara</option>
        <option value="Yemen" >Yemen</option>
        <option value="Zambia" >Zambia</option>
        <option value="Zimbabwe" >Zimbabwe</option>
    </select><br>
                </div>


                <div class="col-xl-4">
                    <label>Highest Level of Education</label><span class="required">*</span>
                    <select required="" name="level_of_education" class="form-control">
                        <option disabled="" style="background-color: brown; color: #fff;">Primary</option>
                        @if($education_summary->highest_level_of_education === 'grade_1')
                        <option value="{{$education_summary ->highest_level_of_education}}">Grade 1</option>

                        @elseif($education_summary ?? ''->highest_level_of_education === 'grade_2')
                        <option value="{{$education_summary ->highest_level_of_education}}">Grade 2</option>

                        @elseif($education_summary->highest_level_of_education === 'grade_3')
                         <option value="{{$education_summary ->highest_level_of_education}}">Grade 3</option>

                        @elseif($education_summary->highest_level_of_education === 'grade_4')
                         <option value="{{$education_summary ->highest_level_of_education}}">Grade 4</option>

                        @elseif($education_summary->highest_level_of_education === 'grade_5')
                         <option value="{{$education_summary ->highest_level_of_education}}">Grade 5</option>

                        @elseif($education_summary->highest_level_of_education === 'grade_6')
                         <option value="{{$education_summary->highest_level_of_education}}">Grade 6</option>

                        @elseif($education_summary->highest_level_of_education === 'grade_7')
                         <option value="{{$education_summary->highest_level_of_education}}">Grade 7</option>

                        @elseif($education_summary->highest_level_of_education === 'grade_8')
                         <option value="{{$education_summary->highest_level_of_education}}">Grade 8</option>

                        @elseif($education_summary->highest_level_of_education === 'year_1')
                         <option value="{{$education_summary->highest_level_of_education}}">1 Year Post-Secondary Certificate</option>

                        @elseif($education_summary->highest_level_of_education === 'year_2')
                        <option value="{{$education_summary->highest_level_of_education}}">2-Year Undergraduate Diploma</option>

                        @elseif($education_summary->highest_level_of_education === 'year_3')
                        <option value="{{$education_summary->highest_level_of_education}}">3-Year Undergraduate Advanced Diploma</option>

                        @elseif($education_summary->highest_level_of_education === 'year_3_d')
                         <option value="{{$education_summary->highest_level_of_education}}">3-Year Bachelor's Degree</option>


                        @elseif($education_summary->highest_level_of_education === 'year_4')
                        <option value="{{$education_summary->highest_level_of_education}}">4-Year Bachelor's Degree</option>

                        @elseif($education_summary->highest_level_of_education === 'post_graduate')
                        <option value="{{$education_summary->highest_level_of_education}}">Postgraduate/Diploma</option>

                        @elseif($education_summary->highest_level_of_education === 'masters')
                        <option value="{{$education_summary->highest_level_of_education}}">Master Degree</option>

                        @elseif($education_summary->highest_level_of_education === 'doctoral')
                        <option value="{{$education_summary->highest_level_of_education}}">Doctoral Degree(Phd,M.D,...)</option>

                        @endif

                        <option value="grade_1">Grade 1</option>
                        <option value="grade_2">Grade 2</option>
                        <option value="grade_3">Grade 3</option>
                        <option value="grade_4">Grade 4</option>
                        <option value="grade_5">Grade 5</option>
                        <option value="grade_6">Grade 6</option>
                        <option value="grade_7">Grade 7</option>
                        <option value="grade_8">Grade 8</option>
                        <option  disabled="" style="background-color: brown; color: #fff;" >Secondary</option>
                        <option value="year_1">1 Year Post-Secondary Certificate</option>
                        <option value="year_2">2-Year Undergraduate Diploma</option>
                        <option value="year_3">3-Year Undergraduate Advanced Diploma</option>
                        <option value="year_3_d">3-Year Bachelor's Degree</option>
                        <option value="year_4">4-Year Bachelor's Degree</option>
                        <option disabled=""  style="background-color: brown; color: #fff;">Postgraduate</option>
                        <option value="post_graduate">Postgraduate/Diploma</option>
                        <option value="masters">Master Degree</option>
                        <option value="doctoral">Doctoral Degree(Phd,M.D,...)</option>
                    </select>
                </div>

                <div class="col-xl-4">
                    <label>Grading Scheme</label>
                    <select required="" name="grading_scheme" id="grading_scheme" class="form-control select-grading-scheme"  required>
                    @if(!isset($education_summary->grading_scheme))
                    <option value="" selected="selected">- Select Grading Scheme  -</option>
                    @else
                    <option value="{{$education_summary->grading_scheme}}">{{$education_summary->grading_scheme}}</option>
                    @endif
                    </select><br>
                </div>

                <div class="col-xl-6">
                    <label>Grade Scale(out of)-(only for those who chose <b>Others)</b> </label>
                    <select name="grade_scale" class="form-control">
                        <option value="{{$education_summary->grade_scale ?? ''}}" selected="">{{$education_summary->grade_scale ?? ''}}</option
                        <option>Select Grade</option>
                        <option value="4">4</option>
                        <option value="7">7</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="100">100</option>
                    </select>
                </div>

                <div class="col-xl-4">
                    <label>Grading Average</label><span class="required">*</span>
                    <input required="" placeholder="Enter Grading Average" type="text" name="grading_average" class="form-control" value="{{$education_summary->grade_average ?? ''}}">
                </div>

                </div>  <br><br>
                <button class="btn btn-success btn-block">Submit Education Summary</button>
            </form>
        
        </div>
    </div><br>

    <!-- Schools attended -->
        <h3 style="font-size: 1.5em;" align="center" class="font-weight-bold">Schools attended</h3>
    <div class="card">
        <div class="card-body">
            <h3 align="center"></h3>
            
                <div class="row">
                    <div class="col-xl-6">
                        <p class="font-weight-bold">Enter the school attended for Postgraduate Certificate/Diploma&nbsp; <br> <br><button class="btn btn-success post_graduate" >Add Now </button></p>
                    </div><br>
                    <div class="col-xl-6">
                        <p class="font-weight-bold">Enter the school attended for Grade 12 / High School &nbsp; <br> <br><button class="btn btn-success grade">Add Now </button></p>
                    </div><br> <br> <br>
                    
                     
                    <div class="col-xl-6"><br>
                        <p  class="font-weight-bold">Enter the school attended for 4-Year Bachelor's Degree&nbsp; <br><br> <button class="btn btn-success  bachelor">Add Now </button></p>
                    </div><br>
                </div>  
            
        </div>
    </div><br>
    <a href="{{url('/eligibility')}}" class="btn btn-dark w-24 mr-1 mb-2" style="float: left;">Previous</a>
    <a href="{{url('/eligibility?page=3')}}" class="btn btn-primary w-24 mr-1 mb-2" style="float: right;">Next</a>
</section>

































<!-- page3 -->
@elseif($_GET['page']==3)

         <div class="intro-y box py-10 sm:py-20 mt-5">
                    <div class="wizard flex flex-col lg:flex-row justify-center px-5 sm:px-20">
                        
                        
                        <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full btn btn-primary">1</button>
                            <div class="lg:w-32 font-medium text-base lg:mt-3 ml-3 lg:mx-auto">Setup Your Profile</div>
                        </div>
                        <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full btn btn-primary">2</button>
                            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Setup Your Educational Background</div>
                        </div>
                        <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full btn btn-primary">3</button>
                            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Test Score</div>
                        </div>
                        
                          <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full btn text-gray-600 bg-gray-200 dark:bg-dark-1">4</button>
                            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Background Information</div>
                        </div>
                       
                        <div class="wizard__line hidden lg:block w-2/3 bg-gray-200 dark:bg-dark-1 absolute mt-5"></div>
                        
                    </div>
                    
                    <br>
                    <br>
                    <br>
         
<div >
  
            
         



           <h3 align="center" style="font-size: 1.5em;" class="font-weight-bold">Additional Qualifications</h3><hr><br>

           <div  class="col-xl-12">
            <form method="post" action="{{url('applicants/additional_qualification')}}">
                @csrf
                <label>I have GRE exam scores</label>
               <label class="switch">
                  <input type="checkbox" id="gre">
                  <span class="slider round"></span>
                </label>
           </div>
           
               <div id="select_gre" style="display: none;" class="col-xl-9">
                <div class="row">
                   <div class="col-xl-3">
                    <label>GRE Exam Date</label>
                       <input class="form-control" type="text" placeholder="YYYY-MM-DD" name="exam_date" value="@if(isset($gre->date_of_exam)){{date('Y-m-d',strtotime($gre->date_of_exam))}}@endif"><br>
                   </div>
               

               <div class="col-xl-3">
                   <label>Verbal Score</label>
                   <input type="number" name="verbal_score" placeholder="Verbal Score" class="form-control" value="@if(isset($gre->verbal_score)){{$gre->verbal_score}}@endif"><br>
               </div>

               <div class="col-xl-3">
                   <label>Verbal Rank</label>
                   <input type="number" name="verbal_rank" placeholder="Verbal Rank" class="form-control" value="@if(isset($gre->verbal_rank)){{$gre->verbal_rank}}@endif"><br>
               </div>

                <div class="col-xl-3">
                   <label>Quantitative Score</label>
                   <input type="number" name="q_score" placeholder="Quantitative Score" class="form-control" value="@if(isset($gre->quantitiative_score)){{$gre->quantitiative_score}}@endif"><br>
               </div>

                <div class="col-xl-3">
                   <label>Quantitative Rank</label>
                   <input type="number" name="q_rank" placeholder="Quantitative Rank" class="form-control" value="@if(isset($gre->quantitiative_rank)){{$gre->quantitiative_rank}}@endif"><br>
               </div>

                <div class="col-xl-3">
                   <label>Writing Score</label>
                   <input type="number" name="w_score" placeholder="Writing Score" class="form-control" value="@if(isset($gre->writing_score)){{$gre->writing_score}}@endif"><br>
               </div>

                <div class="col-xl-3">
                   <label>Writing Rank</label>
                   <input type="number" name="w_rank" placeholder="Writing Rank" class="form-control" value="@if(isset($gre->writing_rank)){{$gre->writing_rank}}@endif"><br>
               </div>

               <div class="col-xl-3">
                   <label>ID</label>
                   <input class="form-control" type="text" readonly="" name="id_1" value="@if(isset($gre->id)){{$gre->id}}@endif">
               </div>
           </div>
       </div>
       <button class="btn btn-success ">Submit GRE Scores</button>
    </form>

<!-- ============================== GMAT============================== -->
 <form method="post" action="{{url('applicants/additional_qualification_2')}}">
                @csrf
             <div class="col-xl-3">
                 <br>
                 <br>
            <label>I have GMAT exam scores</label>
                  <input type="checkbox" id="gmat">
           </div>


           
               <div id="select_gmat" style="display: none;">
                <div class="row">
                   <div class="col-xl-3">
                    <label>GMAT Exam Date</label>
                       <input class="form-control" type="text" placeholder="YYYY-MM-DD" name="exam_date_2" value="@if(isset($gmat->date_of_exam)){{date('Y-m-d',strtotime($gmat->date_of_exam))}}@endif"><br>
                   </div>
               

               <div class="col-xl-3">
                   <label>Verbal Score</label>
                   <input type="number" name="verbal_score_2" placeholder="Verbal Score" class="form-control" value="@if(isset($gmat->verbal_score)){{$gmat->verbal_score}}@endif"><br>
               </div>

               <div class="col-xl-3">
                   <label>Verbal Rank</label>
                   <input type="number" name="verbal_rank_2" placeholder="Verbal Rank" class="form-control" value="@if(isset($gmat->verbal_rank)){{$gmat->verbal_rank}}@endif"><br>
               </div>

                <div class="col-xl-3">
                   <label>Quantitative Score</label>
                   <input type="number" name="q_rank_2" placeholder="Quantitative Score" class="form-control" value="@if(isset($gmat->quantitiative_score)){{$gmat->quantitiative_score}}@endif"><br>
               </div>

                <div class="col-xl-3">
                   <label>Quantitative Rank</label>
                   <input type="number" name="q_rank_2" placeholder="Quantitative Rank" class="form-control" value="@if(isset($gmat->quantitiative_rank)){{$gmat->quantitiative_rank}}@endif"><br>
               </div>

                <div class="col-xl-3">
                   <label>Writing Score</label>
                   <input type="number" name="w_score_2" placeholder="Writing Score" class="form-control" value="@if(isset($gmat->writing_score)){{$gmat->writing_score}}@endif"><br>
               </div>

                <div class="" ass="col-xl-3">
                   <label>Writing Rank</label>
                   <input type="number" name="w_rank_2" placeholder="Writing Rank" class="form-control" value="@if(isset($gmat->writing_rank)){{$gmat->writing_rank}}@endif"><br>
               </div>

               <div class="col-xl-3">
                   <label>ID</label>
                   <input type="text" class="form-control" readonly="" name="id" value="@if(isset($gmat->id)){{$gmat->id}}@endif"><br>
               </div>
           </div>
        </div>
        <button class="btn btn-success ">Submit GMT Scores</button>
    </form>
    </div>
    
    <br>
    <br>
     <div >
        <div class="">
            <form method="post" action="{{url('applicants/submit_test_scores')}}">
                @csrf

            <div class="row">
            <div class="col-xl-3">
                <label>Exam Type</label>
                <select  class="form-control" name ="exam_type" id="second">
                    <option value="I don't have this">I don't have this</option>
                    <option value="TOEFL">TOEFL</option>
                    <option value="IELTS">IELTS</option>
                    <!--<option value="Duolingo_English_Test" >Duolingo English Test</option>-->
                </select><br>
            </div>
<!-- Second Section -->

            <div class="col-xl-9" id="second_section" style="display: none;">
            <div class="row">

            <div class="col-xl-3" >
                <label>Date Of Exam</label>
                <input  class="form-control" type="text" name="date_of_exam_1" placeholder="YYYY-MM-DD" value="@if(isset($exam_detail_1->date_of_exam)){{date('Y-m-d',strtotime($exam_detail_1->date_of_exam))}}@endif" pattern="(?:19|20)(?:(?:[13579][26]|[02468][048])-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))|(?:[0-9]{2}-(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-8])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:29|30))|(?:(?:0[13578]|1[02])-31)))"><br>
            </div><br>

            <div class="col-xl-3">
                <label>Reading Scores</label>
                <input type="number"  class="form-control" name="reading_score_1" placeholder="Reading Scores" value="@if(isset($exam_detail_1->reading_score)){{$exam_detail_1->reading_score}}@endif"><br>
            </div><br>

            <div class="col-xl-3">
                <label>Listening Scores</label>
                <input type="number"  class="form-control" name="listening_scores_1" placeholder="Listening Scores" value="@if(isset($exam_detail_1->listening_score)){{$exam_detail_1->listening_score}}@endif"><br>
            </div><br>

            <div class="col-xl-3">
                <label>Speaking Scores</label>
                <input  type="number" class="form-control" name="speaking_scores_1" placeholder="Speaking Scores" value="@if(isset($exam_detail_1->speaking_score)){{$exam_detail_1->speaking_score}}@endif"><br>
            </div><br>

            <div class="col-xl-3">
                <label>Writing Scores</label>
                <input type="number" class="form-control" name="writing_scores_1" placeholder="Writing Scores" value="@if(isset($exam_detail_1->writing_score)){{$exam_detail_1->writing_score}}@endif"><br>
            </div><br>

            </div>
            </div>
            


            <!-- Third section -->
            <div class="col-xl-9" id="third_section" style="display: none;">
            <div class="row">

            <div class="col-xl-3" >
                <label>Date Of Exam</label>
                <input class="form-control" type="text" name="date_of_exam_2" placeholder="YYYY-MM-DD" value="@if(isset($exam_detail_2->date_of_exam)){{date('Y-m-d',strtotime($exam_detail_2->date_of_exam))}}@endif" pattern="(?:19|20)(?:(?:[13579][26]|[02468][048])-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))|(?:[0-9]{2}-(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-8])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:29|30))|(?:(?:0[13578]|1[02])-31)))"><br>
            </div><br>

            <div class="col-xl-3">
                <label>Enter Overall Scores</label>
                <input type="number" class="form-control" name="overall_scores" placeholder="Overall Scores" value="@if(isset($exam_detail_2->overall_scores)){{$exam_detail_2->overall_scores}}@endif"><br>
            </div><br>

        </div>
        </div>

        <!-- Fourth Section -->
        <div class="col-xl-9" id="fourth_section" style="display: none;">
            <div class="row">

             <div class="col-xl-3" >
                <label>Date Of Exam</label>
                <input  class="form-control" type="text" name="date_of_exam" placeholder="YYYY-MM-DD" value="@if(isset($exam_detail->date_of_exam)){{date('Y-m-d',strtotime($exam_detail->date_of_exam))}}@endif" pattern="(?:19|20)(?:(?:[13579][26]|[02468][048])-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))|(?:[0-9]{2}-(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-8])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:29|30))|(?:(?:0[13578]|1[02])-31)))"><br>
            </div><br>

            <div class="col-xl-3">
                <label>Reading Scores</label>
                <input type="number"  class="form-control" name="reading_score" placeholder="Reading Scores" value="@if(isset($exam_detail->reading_score)){{$exam_detail->reading_score}}@endif"><br>
            </div><br>

            <div class="col-xl-3">
                <label>Listening Scores</label>
                <input type="number"  class="form-control" name="listening_scores" placeholder="Listening Scores" value="@if(isset($exam_detail->listening_score)){{$exam_detail->listening_score}}@endif"><br>
            </div><br>

            <div class="col-xl-3">
                <label>Speaking Scores</label>
                <input  type="number" class="form-control" name="speaking_scores" placeholder="Speaking Scores" value="@if(isset($exam_detail->speaking_score)){{$exam_detail->speaking_score}}@endif"><br>
            </div><br>

            <div class="col-xl-3">
                <label>Writing Scores</label>
                <input type="number" class="form-control" name="writing_scores" placeholder="Writing Scores" value="@if(isset($exam_detail->writing_score)){{$exam_detail->writing_score}}@endif"><br>
            </div><br>
           

            </div>
            </div>
           <center>
                  
              <br> <button class="btn btn-success "> Submit Test Scores</button>
            </center>
            </form>
            </div>
            
         
   <br>
   <br>
   <br>



       <br>   <br>
       <a href="{{url('/eligibility?page=2')}}" class="btn btn-dark w-24 mr-1 mb-2" style="float: left;">Previous</a>
       <a href="{{url('/eligibility?page=4')}}" class="btn btn-primary w-24 mr-1 mb-2" style="float: right;">Next</a>
</section>


@elseif($_GET['page'] == 4)

  <div class="intro-y box py-10 sm:py-20 mt-5">
                    <div class="wizard flex flex-col lg:flex-row justify-center px-5 sm:px-20">
                        
                        
                        <div class="intro-x lg:text-center flex items-center lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full btn btn-primary">1</button>
                            <div class="lg:w-32 font-medium text-base lg:mt-3 ml-3 lg:mx-auto">Setup Your Profile</div>
                        </div>
                        <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full btn btn-primary">2</button>
                            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Setup Your Educational Background</div>
                        </div>
                        <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full btn btn-primary">3</button>
                            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Test Score</div>
                        </div>
                        
                          <div class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10">
                            <button class="w-10 h-10 rounded-full btn text-gray-600 bg-gray-200 dark:bg-dark-1"><img src="/applicant/images/green-checkmark.svg"  height="680px" width="680px" alt="testscore"></button>
                            <div class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-gray-700 dark:text-gray-600">Background Information</div>
                        </div>
                       
                        <div class="wizard__line hidden lg:block w-2/3 bg-gray-200 dark:bg-dark-1 absolute mt-5"></div>
                        
                    </div>
                    
                    <br>
                    <br>
                    <br>
         
<section id="background_information">
    <h3 style="font-size: 1.5em;" class="font-weight-bold">Background Information</h3><br>
<div class="card">
    <div class="card-body">
        <form method="post" action="{{url('applicants/submit_background_informations')}}">
            @csrf
        <div class="row">
            <div class="col-xl-12">
                <p class="font-weight-bold">Have you been refused a visa from Canada, the USA, the United Kingdom, New Zealand or Australia?</p>
            </div>
            <div class="col-xl-3">
                <input type="radio" name="refused_visa" value="yes">Yes
            </div>
            <div class="col-xl-3">
                <input type="radio" name="refused_visa" value="no" >No
            </div><br><br>

            <div class="row">

            <div class="col-xl-12">
                <p class="font-weight-bold">Selected Options</p>
              <input type="text" name="visa_permit" class="form-control"><br>  
            </div><br>
            
            
            <div class="col-xl-6">
                <p class="font-weight-bold">Do you have a valid Study Permit / Visa?</p>
                <select class="tom-select w-full" class="form-control" name="visa_permit"  multiple>
                    <option value="I don't have this ">I don't have this </option>
                    <option value="USA F1 Visa ">USA F1 Visa </option>
                    <option value="Canadian Study Permit or Visitor Visa">Canadian Study Permit or Visitor Visa</option>
                    <option value="UK Student Visa (Tier 4) or Short Term Study Visa">UK Student Visa (Tier 4) or Short Term Study Visa</option>
                    <option value="Australian Student Visa" >Australian Student Visa</option>
                </select>
            </div>
        </div>
        </div><br><br>
        
  
        
        
        <button class="btn btn-success btn-block">Submit  Background Info</button>
    </form>
    </div>
    
</div>
 <br>
 <br>
       <a href="{{url('/eligibility?page=3')}}" class="btn btn-dark w-24 mr-1 mb-2" style="float: left;">Previous</a>
</section>
@endif
@endif







</div>
</div>
</div>
</div>




<?php if(isset($_GET['success'])): ?>
  <!-- BEGIN: Modal Content --> 
 
     
     <!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header justify-content-center">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body text-center">
				<h4>Great! </h4>	
				<p>{{$_GET['success']}}</p>
			
			</div>
		</div>
	</div>
</div>     
     
     
     
     
     
     
     
     
  
  <!-- END: Modal Content
    <div id="myModal"  class="modal" tabindex="-1" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-body p-0">  <div class="p-5 text-center"> <i data-feather="check-circle" class="w-16 h-16 text-theme-9 mx-auto mt-3"><center> <h2>Status</h2></center> </i> <div class="text-3xl mt-5">{{$_GET['success']}}</div> <div class="text-gray-600 mt-2"> <H4></H4></div> </div> <div class="px-5 pb-8 text-center"> <button type="button" data-dismiss="modal" class="btn btn-primary w-24">Ok</button> </div> </div> </div> </div> </div> 
  
  
  
  --> 
 
 


<?php endif; ?>
@include('applicants.sections.attended_school_modal')
@include('applicants.includes.footer')


<script>

    // first modal
  $(document).on('click', '.post_graduate', function(e){
    e.preventDefault();
    $('.initial_postgraduate').modal('show');

  });

        // second modal
  $(document).on('click', '.grade', function(e){
    e.preventDefault();
    $('.initial_first_grade').modal('show');

  });

        // first modal
  $(document).on('click', '.bachelor', function(e){
    e.preventDefault();
    $('.initial_bachelor').modal('show');

  });

  $('#gre').change(function(e){
    $('#gre').append('<input type="hidden" name="type" value="gre"></input>');
 
    var x = document.getElementById("select_gre");
    if(x.style.display ==='none')
    {
        x.style.display = 'block';
        
    }
    else
    {
        x.style.display = 'none';
    }
  });

    $('#gmat').change(function(e){
         $('#gmat').append('<input type="hidden" name="type" value="gmat"></input>');
      
    var x = document.getElementById("select_gmat");
    if(x.style.display ==='none')
    {
        x.style.display = 'block';
       
    }
    else
    {
        x.style.display = 'none';
    }
  });

    $('#second').change(function(e){
    e.preventDefault();
    var x = document.getElementById("second_section");
    var y = document.getElementById("third_section");
    var z = document.getElementById("fourth_section");
    var value = document.getElementById("second").selectedOptions[0].value;
    
    if (value === 'Duolingo_English_Test')
    {
           if (y.style.display === "none") 
            {
                y.style.display = "block";
                x.style.display = "none";
                z.style.display = "none";
                $('#second').append('<input type="hidden" name="id" value="@if(isset($exam_detail_2->id)){{$exam_detail_2->id}}@endif">');
           

            } 
            else 
            {
                 y.style.display = "none";
                 x.style.display = "none";
                 z.style.display = "none";
            }       
    }
    else if(value === 'TOEFL')
    {
         if (x.style.display === "none") 
            {
             x.style.display = "block";
             y.style.display = "none";
              z.style.display = "none";
                $('#second').append('<input type="hidden" name="id" value="@if(isset($exam_detail_1->id)){{$exam_detail_1->id}}@endif">');
                 
            } 
            else
            {
                 x.style.display = "none";
                 y.style.display = "none";
                 z.style.display = "none";
            }  
    }
    else if(value === "IELTS")
    {
         if (z.style.display === "none") 
            {
             z.style.display = "block";
             y.style.display = "none";
             x.style.display = "none";
             $('#second').append('<input type="hidden" name="id" value="@if(isset($exam_detail->id)){{$exam_detail->id}}@endif">');
           
            
            } 
            else
            {
             x.style.display = "none";
             y.style.display = "none";
             z.style.display = "none";
            } 
    }
    else if(value === "I don't have this")
    {
        x.style.display = "none";
        y.style.display = "none";
         z.style.display = "none";
    } 
 

  

  });

var sel = document.getElementsByName('visa_permits')[0];
sel.onclick = function () {
    document.getElementsByName('visa_permit')[0].value += this.value + ' ';
}





</script>


<!-- post graduate -->
<div  class="modal fade initial_postgraduate" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 align="center" class="modal-title font-weight-bold">Schools Attended(PostGraduate)</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                    <div class="">  
                        <div class="">
                    <form action="{{url('applicants/submit_postgraduate_school')}}" method="post">
                                @csrf
                    <input type="hidden" name="type" value="post_graduate">
                    <input type="hidden" name="id" value="@if(isset($attended_school_post->id)){{$attended_school_post->id}}@endif">
                                <div class="row">
                    <div class="col-xl-6">
                    <label> Level of Education</label>
                    <select required="" name="level_of_education" class="form-control">
                        <option disabled="" style="background-color: brown; color: #fff;">Primary</option>
                        @if(isset($attended_school_post->level_of_education))

                         @if($attended_school_post->level_of_education === 'grade_1')
                    
                        <option value="{{$attended_school_post->level_of_education}}">Grade 1</option>

                        @elseif($attended_school_post->level_of_education === 'grade_2')
                        <option value="{{$attended_school_post->level_of_education}}">Grade 2</option>

                        @elseif($attended_school_post->level_of_education === 'grade_3')
                         <option value="{{$attended_school_post->level_of_education}}">Grade 3</option>

                        @elseif($attended_school_post->level_of_education === 'grade_4')
                         <option value="{{$attended_school_post->level_of_education}}">Grade 4</option>

                        @elseif($attended_school_post->level_of_education === 'grade_5')
                         <option value="{{$attended_school_post->level_of_education}}">Grade 5</option>

                        @elseif($attended_school_post->level_of_education=== 'grade_6')
                         <option value="{{$attended_school->level_of_education}}">Grade 6</option>

                        @elseif($attended_school_post->level_of_education === 'grade_7')
                         <option value="{{$attended_school_post->level_of_education}}">Grade 7</option>

                        @elseif($attended_school_post->level_of_education === 'grade_8')
                         <option value="{{$attended_school_post->level_of_education}}">Grade 8</option>

                        @elseif($attended_school_post->level_of_education === 'year_1')
                         <option value="{{$attended_school_post->level_of_education}}">1 Year Post-Secondary Certificate</option>

                        @elseif($attended_school_post->level_of_education === 'year_2')
                        <option value="{{$attended_school_post->level_of_education}}">2-Year Undergraduate Diploma</option>

                        @elseif($attended_school_post->level_of_education === 'year_3')
                        <option value="{{$attended_school_post->level_of_education}}">3-Year Undergraduate Advanced Diploma</option>

                        @elseif($attended_school_post->level_of_education === 'year_3_d')
                         <option value="{{$attended_school_post->level_of_education}}">3-Year Bachelor's Degree</option>


                        @elseif($attended_school_post->level_of_education === 'year_4')
                        <option value="{{$attended_school_post->level_of_education}}">4-Year Bachelor's Degree</option>

                        @elseif($attended_school_post->level_of_education === 'post_graduate')
                        <option value="{{$attended_school_post->level_of_education}}">Postgraduate/Diploma</option>

                        @elseif($attended_school_post->level_of_education === 'masters')
                        <option value="{{$attended_school_post->level_of_education}}">Master Degree</option>

                        @elseif($attended_school_post->level_of_education === 'doctoral')
                        <option value="{{$attended_school_post->level_of_education}}">Doctoral Degree(Phd,M.D,...)</option>
                        
                        @endif
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
                    </select><br> 
                    </div>

                        <div class="col-xl-6">
                        <label>Country of Institution</label>
         <input list="country_insti" name="country" placeholder="Select Country" class="form-control" value="@if(isset($attended_school_post->country)){{$attended_school_post->country}}@endif">
        <datalist id="country_insti">
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

             <div class="col-xl-6">
                <label>Name of Institution</label>
         <input placeholder="Enter Name of Institution" type="text" name="institution" class="form-control" required  value="@if(isset($attended_school_post->institution)){{$attended_school_post->institution}} @endif"><br>
            </div>

            <div class="col-xl-6">
                <label>Primary Language of Instruction</label>
             <input placeholder="Enter Language of Instruction" type="text" name="language" class="form-control" required value="@if(isset($attended_school_post->language)){{ $attended_school_post->language}}@endif"><br> 
          </div>

          <div class="col-xl-6">
            <label>Attended Institution From</label>
        <input placeholder="YYYY-MM-DD" type="text" name="institution_from" class="form-control" required value="@if(isset($attended_school_post->from)){{date('Y-m-d',strtotime($attended_school_post->from))}}@endif" pattern="(?:19|20)(?:(?:[13579][26]|[02468][048])-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))|(?:[0-9]{2}-(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-8])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:29|30))|(?:(?:0[13578]|1[02])-31)))"  ><br>
        </div>

        <div class="col-xl-6">
            <label>Attended Institution To</label>
        <input placeholder="YYYY-MM-DD" type="text" name="institution_to" class="form-control" required  value="@if(isset($attended_school_post->to)){{date('Y-m-d',strtotime($attended_school_post->to))}}@endif" pattern="(?:19|20)(?:(?:[13579][26]|[02468][048])-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))|(?:[0-9]{2}-(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-8])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:29|30))|(?:(?:0[13578]|1[02])-31)))"><br>
        </div>

        <div class="col-xl-6">
         <label>Degree Awarded</label>
        <input placeholder="Enter Degree Awarded" type="text" name="degree_awarded" class="form-control"  required value="@if(isset($attended_school_post->degree_awarded)){{$attended_school_post->degree_awarded}} @endif" ><br>
        </div>

         <div class="col-xl-6">
         <label>Degree Awarded On</label>
        <input placeholder="YYYY-MM-DD" type="text" name="degree_awarded_on" class="form-control" required  value="@if(isset($attended_school_post->degree_awarded_on)){{date('Y-m-d',strtotime($attended_school_post->degree_awarded_on))}}@endif" pattern="(?:19|20)(?:(?:[13579][26]|[02468][048])-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))|(?:[0-9]{2}-(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-8])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:29|30))|(?:(?:0[13578]|1[02])-31)))"><br>
        </div>

<div class="col-xl-12">
    <h4 align="center" class="modal-title font-weight-bold">School Address</h4><hr>
</div>
     <div class="col-xl-6">
         <label>Address</label>
        <input placeholder="Enter Address" type="text" name="school_address" class="form-control" required value="@if(isset($attended_school_post->school_address)){{$attended_school_post->school_address}} @endif" ><br>
        </div>

       <div class="col-xl-6">
         <label>City/Town</label>
        <input placeholder="Enter City/Town" type="text" name="city" class="form-control" required value="@if(isset($attended_school_post->city)){{$attended_school_post->city}} @endif"><br>
        </div>

         <div class="col-xl-6">
         <label>Province</label>
        <input placeholder="Enter Province" type="text" name="province" class="form-control" required value="@if(isset($attended_school_post->province)){{$attended_school_post->province}} @endif" ><br>
        </div>

      <div class="col-xl-6">
         <label>Postal/Zip Code</label>
        <input placeholder="Enter Postal/Zip Code" type="text" name="postal_code" class="form-control" required value="@if(isset($attended_school_post->postal_code)){{$attended_school_post->postal_code}} @endif"><br>
        </div>
      </div>                          
                                <button  class="btn btn-primary btn-block btn-color" type="submit">
                                    Submit
                                </button>       
                            </form>
               </div>
        </div>
      </div>
    </div>
</div>
</div>








































<div  class="modal fade initial_first_grade" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 align="center" class="modal-title font-weight-bold">Schools Attended(Grade)</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                    <div class="">  
                        <div class="">
                    <form action="{{url('applicants/submit_postgraduate_school')}}" method="post">
                                @csrf
                    <input type="hidden" name="type" value="grade">
                    <input type="hidden" name="id" value="@if(isset($attended_school_grade->id)){{$attended_school_grade->id}}@endif">
                                <div class="row">
                    <div class="col-xl-6">
                    <label> Level of Education</label>
                    <select required="" name="level_of_education" class="form-control">
                        <option disabled="" style="background-color: brown; color: #fff;">Primary</option>
                        @if(isset($attended_school_grade->level_of_education))

                         @if($attended_school_grade->level_of_education === 'grade_1')
                    
                        <option value="{{$attended_school_grade->level_of_education}}">Grade 1</option>

                        @elseif($attended_school_grade->level_of_education === 'grade_2')
                        <option value="{{$attended_school_grade->level_of_education}}">Grade 2</option>

                        @elseif($attended_school_grade->level_of_education === 'grade_3')
                         <option value="{{$attended_school_grade->level_of_education}}">Grade 3</option>

                        @elseif($attended_school_grade->level_of_education === 'grade_4')
                         <option value="{{$attended_school_grade->level_of_education}}">Grade 4</option>

                        @elseif($attended_school_grade->level_of_education === 'grade_5')
                         <option value="{{$attended_school_grade->level_of_education}}">Grade 5</option>

                        @elseif($attended_school_grade->level_of_education=== 'grade_6')
                         <option value="{{$attended_school_grade->level_of_education}}">Grade 6</option>

                        @elseif($attended_school_grade->level_of_education === 'grade_7')
                         <option value="{{$attended_school_grade->level_of_education}}">Grade 7</option>

                        @elseif($attended_school_grade->level_of_education === 'grade_8')
                         <option value="{{$attended_school_grade->level_of_education}}">Grade 8</option>

                        @elseif($attended_school_grade->level_of_education === 'year_1')
                         <option value="{{$attended_school_grade->level_of_education}}">1 Year Post-Secondary Certificate</option>

                        @elseif($attended_school_grade->level_of_education === 'year_2')
                        <option value="{{$attended_school_grade->level_of_education}}">2-Year Undergraduate Diploma</option>

                        @elseif($attended_school_grade->level_of_education === 'year_3')
                        <option value="{{$attended_school_grade->level_of_education}}">3-Year Undergraduate Advanced Diploma</option>

                        @elseif($attended_school_grade->level_of_education === 'year_3_d')
                         <option value="{{$attended_school_grade->level_of_education}}">3-Year Bachelor's Degree</option>


                        @elseif($attended_school_grade->level_of_education === 'year_4')
                        <option value="{{$attended_school_grade->level_of_education}}">4-Year Bachelor's Degree</option>

                        @elseif($attended_school_grade->level_of_education === 'post_graduate')
                        <option value="{{$attended_school_grade->level_of_education}}">Postgraduate/Diploma</option>

                        @elseif($attended_school_grade->level_of_education === 'masters')
                        <option value="{{$attended_school_grade->level_of_education}}">Master Degree</option>

                        @elseif($attended_school_grade->level_of_education === 'doctoral')
                        <option value="{{$attended_school_grade->level_of_education}}">Doctoral Degree(Phd,M.D,...)</option>
                        
                        @endif
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
                    </select><br> 
                    </div>

                        <div class="col-xl-6">
                        <label>Country of Institution</label>
         <input list="country_insti" name="country" placeholder="Select Country" class="form-control" value="@if(isset($attended_school_grade->country)){{$attended_school_grade->country}}@endif">
        <datalist id="country_insti">
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

             <div class="col-xl-6">
                <label>Name of Institution</label>
         <input placeholder="Enter Name of Institution" type="text" name="institution" class="form-control" required  value="@if(isset($attended_school_grade->institution)){{$attended_school_grade->institution}}@endif"><br>
            </div>

            <div class="col-xl-6">
                <label>Primary Language of Instruction</label>
             <input placeholder="Enter Language of Instruction" type="text" name="language" class="form-control" required value="@if(isset($attended_school_grade->language)){{ $attended_school_grade->language}}@endif"><br> 
          </div>

          <div class="col-xl-6">
            <label>Attended Institution From</label>
        <input placeholder="YYYY-MM-DD" type="text" name="institution_from" class="form-control" required value="@if(isset($attended_school_grade->from)){{date('Y-m-d',strtotime($attended_school_grade->from))}}@endif" pattern="(?:19|20)(?:(?:[13579][26]|[02468][048])-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))|(?:[0-9]{2}-(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-8])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:29|30))|(?:(?:0[13578]|1[02])-31)))"  ><br>
        </div>

        <div class="col-xl-6">
            <label>Attended Institution To</label>
        <input placeholder="YYYY-MM-DD" type="text" name="institution_to" class="form-control" required  value="@if(isset($attended_school_grade->to)){{date('Y-m-d',strtotime($attended_school_grade->to))}}@endif" pattern="(?:19|20)(?:(?:[13579][26]|[02468][048])-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))|(?:[0-9]{2}-(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-8])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:29|30))|(?:(?:0[13578]|1[02])-31)))"><br>
        </div>

        <div class="col-xl-6">
         <label>Degree Awarded</label>
        <input placeholder="Enter Degree Awarded" type="text" name="degree_awarded" class="form-control"  required value="@if(isset($attended_school_grade->degree_awarded)){{$attended_school_grade->degree_awarded}} @endif" ><br>
        </div>

         <div class="col-xl-6">
         <label>Degree Awarded On</label>
        <input placeholder="YYYY-MM-DD" type="text" name="degree_awarded_on" class="form-control" required  value="@if(isset($attended_school_grade->degree_awarded_on)){{date('Y-m-d',strtotime($attended_school_grade->degree_awarded_on))}}@endif" pattern="(?:19|20)(?:(?:[13579][26]|[02468][048])-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))|(?:[0-9]{2}-(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-8])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:29|30))|(?:(?:0[13578]|1[02])-31)))"><br>
        </div>

<div class="col-xl-12">
    <h4 align="center" class="modal-title font-weight-bold">School Address</h4><hr>
</div>
     <div class="col-xl-6">
         <label>Address</label>
        <input placeholder="Enter Address" type="text" name="school_address" class="form-control" required value="@if(isset($attended_school_grade->school_address)){{$attended_school_grade->school_address}} @endif" ><br>
        </div>

       <div class="col-xl-6">
         <label>City/Town</label>
        <input placeholder="Enter City/Town" type="text" name="city" class="form-control" required value="@if(isset($attended_school_grade->city)){{$attended_school_grade->city}} @endif"><br>
        </div>

         <div class="col-xl-6">
         <label>Province</label>
        <input placeholder="Enter Province" type="text" name="province" class="form-control" required value="@if(isset($attended_school_grade->province)){{$attended_school_grade->province}} @endif" ><br>
        </div>

      <div class="col-xl-6">
         <label>Postal/Zip Code</label>
        <input placeholder="Enter Postal/Zip Code" type="text" name="postal_code" class="form-control" required value="@if(isset($attended_school_grade->postal_code)){{$attended_school_grade->postal_code}} @endif"><br>
        </div>
      </div>                          
                                <button  class="btn btn-primary btn-block btn-color" type="submit">
                                    Submit
                                </button>       
                            </form>
               </div>
        </div>
      </div>
    </div>
</div>
</div>






































<div  class="modal fade initial_bachelor" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 align="center" class="modal-title font-weight-bold">Schools Attended(Bachelor's degree)</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                    <div class="">  
                        <div class="">
                    <form action="{{url('applicants/submit_postgraduate_school')}}" method="post">
                                @csrf
                    <input type="hidden" name="type" value="bachelor">
                    <input type="hidden" name="id" value="@if(isset($attended_school_bachelor->id)){{$attended_school_bachelor->id}}@endif">
                                <div class="row">
                    <div class="col-xl-6">
                    <label> Level of Education</label>
                    <select required="" name="level_of_education" class="form-control">
                        <option disabled="" style="background-color: brown; color: #fff;">Primary</option>
                        @if(isset($attended_school_bachelor->level_of_education))

                         @if($attended_school_bachelor->level_of_education === 'grade_1')
                      
                        <option value="{{$attended_school_bachelor->level_of_education}}">Grade 1</option>

                        @elseif($attended_school_bachelor->level_of_education === 'grade_2')
                        <option value="{{$attended_school_bachelor->level_of_education}}">Grade 2</option>

                        @elseif($attended_school_bachelor->level_of_education === 'grade_3')
                         <option value="{{$attended_school_bachelor->level_of_education}}">Grade 3</option>

                        @elseif($attended_school_bachelor->level_of_education === 'grade_4')
                         <option value="{{$attended_school_bachelor->level_of_education}}">Grade 4</option>

                        @elseif($attended_school_bachelor->level_of_education === 'grade_5')
                         <option value="{{$attended_school_bachelor->level_of_education}}">Grade 5</option>

                        @elseif($attended_school_bachelor->level_of_education=== 'grade_6')
                         <option value="{{$attended_school_bachelor->level_of_education}}">Grade 6</option>

                        @elseif($attended_school_bachelor->level_of_education === 'grade_7')
                         <option value="{{$attended_school_post->level_of_education}}">Grade 7</option>

                        @elseif($attended_school_bachelor->level_of_education === 'grade_8')
                         <option value="{{$attended_school_bachelor->level_of_education}}">Grade 8</option>

                        @elseif($attended_school_bachelor->level_of_education === 'year_1')
                         <option value="{{$attended_school_bachelor->level_of_education}}">1 Year Post-Secondary Certificate</option>

                        @elseif($attended_school_bachelor->level_of_education === 'year_2')
                        <option value="{{$attended_school_bachelor->level_of_education}}">2-Year Undergraduate Diploma</option>

                        @elseif($attended_school_bachelor->level_of_education === 'year_3')
                        <option value="{{$attended_school_bachelor->level_of_education}}">3-Year Undergraduate Advanced Diploma</option>

                        @elseif($attended_school_bachelor->level_of_education === 'year_3_d')
                         <option value="{{$attended_school_bachelor->level_of_education}}">3-Year Bachelor's Degree</option>


                        @elseif($attended_school_bachelor->level_of_education === 'year_4')
                        <option value="{{$attended_school_bachelor->level_of_education}}">4-Year Bachelor's Degree</option>

                        @elseif($attended_school_bachelor->level_of_education === 'post_graduate')
                        <option value="{{$attended_school_bachelor->level_of_education}}">Postgraduate/Diploma</option>

                        @elseif($attended_school_bachelor->level_of_education === 'masters')
                        <option value="{{$attended_school_bachelor->level_of_education}}">Master Degree</option>

                        @elseif($attended_school_bachelor->level_of_education === 'doctoral')
                        <option value="{{$attended_school_bachelor->level_of_education}}">Doctoral Degree(Phd,M.D,...)</option>
                        
                        @endif
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
                    </select><br> 
                    </div>

                        <div class="col-xl-6">
                        <label>Country of Institution</label>
         <input list="country_insti" name="country" placeholder="Select Country" class="form-control" value="@if(isset($attended_school_bachelor->country)){{$attended_school_bachelor->country}}@endif">
        <datalist id="country_insti">
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

             <div class="col-xl-6">
                <label>Name of Institution</label>
         <input placeholder="Enter Name of Institution" type="text" name="institution" class="form-control" required  value="@if(isset($attended_school_bachelor->institution)){{$attended_school_bachelor->institution}} @endif"><br>
            </div>

            <div class="col-xl-6">
                <label>Primary Language of Instruction</label>
             <input placeholder="Enter Language of Instruction" type="text" name="language" class="form-control" required value="@if(isset($attended_school_bachelor->language)){{ $attended_school_bachelor->language}} @endif"><br> 
          </div>

          <div class="col-xl-6">
            <label>Attended Institution From</label>
        <input placeholder="YYYY-MM-DD" type="text" name="institution_from" class="form-control" required value="@if(isset($attended_school_bachelor->from)){{date('Y-m-d',strtotime($attended_school_bachelor->from))}}@endif" pattern="(?:19|20)(?:(?:[13579][26]|[02468][048])-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))|(?:[0-9]{2}-(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-8])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:29|30))|(?:(?:0[13578]|1[02])-31)))"  ><br>
        </div>

        <div class="col-xl-6">
            <label>Attended Institution To</label>
        <input placeholder="YYYY-MM-DD" type="text" name="institution_to" class="form-control" required  value="@if(isset($attended_school_bachelor->to)){{date('Y-m-d',strtotime($attended_school_bachelor->to))}}@endif" pattern="(?:19|20)(?:(?:[13579][26]|[02468][048])-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))|(?:[0-9]{2}-(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-8])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:29|30))|(?:(?:0[13578]|1[02])-31)))"><br>
        </div>

        <div class="col-xl-6">
         <label>Degree Awarded</label>
        <input placeholder="Enter Degree Awarded" type="text" name="degree_awarded" class="form-control"  required value="@if(isset($attended_school_bachelor->degree_awarded)){{$attended_school_bachelor->degree_awarded}}@endif" ><br>
        </div>

         <div class="col-xl-6">
         <label>Degree Awarded On</label>
        <input placeholder="YYYY-MM-DD" type="text" name="degree_awarded_on" class="form-control" required  value="@if(isset($attended_school_bachelor->degree_awarded_on)){{date('Y-m-d',strtotime($attended_school_bachelor->degree_awarded_on))}}@endif" pattern="(?:19|20)(?:(?:[13579][26]|[02468][048])-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))|(?:[0-9]{2}-(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-8])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:29|30))|(?:(?:0[13578]|1[02])-31)))"><br>
        </div>

<div class="col-xl-12">
    <h4 align="center" class="modal-title font-weight-bold">School Address</h4><hr>
</div>
     <div class="col-xl-6">
         <label>Address</label>
        <input placeholder="Enter Address" type="text" name="school_address" class="form-control" required value="@if(isset($attended_school_bachelor->school_address)){{$attended_school_bachelor->school_address}} @endif" ><br>
        </div>

       <div class="col-xl-6">
         <label>City/Town</label>
        <input placeholder="Enter City/Town" type="text" name="city" class="form-control" required value="@if(isset($attended_school_bachelor->city)){{$attended_school_bachelor->city}} @endif"><br>
        </div>

         <div class="col-xl-6">
         <label>Province</label>
        <input placeholder="Enter Province" type="text" name="province" class="form-control" required value="@if(isset($attended_school_bachelor->province)){{$attended_school_bachelor->province}} @endif" ><br>
        </div>

      <div class="col-xl-6">
         <label>Postal/Zip Code</label>
        <input placeholder="Enter Postal/Zip Code" type="text" name="postal_code" class="form-control" required value="@if(isset($attended_school_bachelor->postal_code)){{$attended_school_bachelor->postal_code}} @endif"><br>
        </div>
      </div>                          
                                <button  class="btn btn-primary btn-block btn-color" type="submit">
                                    Submit
                                </button>       
                            </form>
               </div>
        </div>
      </div>
    </div>
</div>
</div>



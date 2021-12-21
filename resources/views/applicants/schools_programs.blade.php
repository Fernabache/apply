@include('applicants.includes.header')
<style>
.line-border {
    border-bottom: 0.1em solid blue;
}

.text-deco {
    font-size: 20px;
    letter-spacing: 3px;
    color: blue;
}

.round {
    position: relative;
}

.round label {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 50%;
    cursor: pointer;
    height: 28px;
    left: 0;
    position: absolute;
    top: 0;
    width: 28px;
}

p {
    font-weight: 600;
}

label {
    font-weight: 600;
}

.round label:after {
    border: 2px solid #fff;
    border-top: none;
    border-right: none;
    content: "";
    height: 6px;
    left: 7px;
    opacity: 0;
    position: absolute;
    top: 8px;
    transform: rotate(-45deg);
    width: 12px;
}

.round input[type="radio"] {
    visibility: hidden;
}

.round input[type="radio"]:checked+label {
    background-color: #66bb6a;
    border-color: #66bb6a;
}

.round input[type="radio"]:checked+label:after {
    opacity: 1;
}

.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 20%;
}

[data-from-dependent] {
    display: none;
}

[data-from-dependent].display {
    display: initial;
}

#slider {
    width: 400px;
    height: 17px;
    position: relative;
    margin: 30px auto;
    background: #10171D;
    -webkit-border-radius: 40px;
    -moz-border-radius: 40px;
    border-radius: 40px;
    -webkit-box-shadow: inset 0px 0px 1px 1px rgba(0, 0, 0, 0.9), 0px 1px 1px 0px rgba(255, 255, 255, 0.13);
    -moz-box-shadow: inset 0px 0px 1px 1px rgba(0, 0, 0, 0.9), 0px 1px 1px 0px rgba(255, 255, 255, 0.13);
    box-shadow: inset 0px 0px 1px 1px rgba(0, 0, 0, 0.9), 0px 1px 1px 0px rgba(255, 255, 255, 0.13);
}

#slider .bar {
    width: 388px;
    height: 5px;
    background: #333;
    position: relative;
    top: -4px;
    left: 4px;
    background: #1d2e38;
    background: -moz-linear-gradient(left, #1d2e38 0%, #2b4254 50%, #2b4254 100%);
    background: -webkit-gradient(linear, left top, right top, color-stop(0%, #1d2e38), color-stop(50%, #2b4254), color-stop(100%, #2b4254));
    background: -webkit-linear-gradient(left, #1d2e38 0%, #2b4254 50%, #2b4254 100%);
    background: -o-linear-gradient(left, #1d2e38 0%, #2b4254 50%, #2b4254 100%);
    background: -ms-linear-gradient(left, #1d2e38 0%, #2b4254 50%, #2b4254 100%);
    background: linear-gradient(left, #1d2e38 0%, #2b4254 50%, #2b4254 100%);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#1d2e38', endColorstr='#2b4254', GradientType=1);
    -webkit-border-radius: 40px;
    -moz-border-radius: 40px;
    border-radius: 40px;
}

@media only screen and (max-width: 600px) {
    #slider {
        width: 200px;
        height: 17px;
        position: relative;
        margin: 30px auto;
        background: #10171D;
        -webkit-border-radius: 40px;
        -moz-border-radius: 40px;
        border-radius: 40px;
        -webkit-box-shadow: inset 0px 0px 1px 1px rgba(0, 0, 0, 0.9), 0px 1px 1px 0px rgba(255, 255, 255, 0.13);
        -moz-box-shadow: inset 0px 0px 1px 1px rgba(0, 0, 0, 0.9), 0px 1px 1px 0px rgba(255, 255, 255, 0.13);
        box-shadow: inset 0px 0px 1px 1px rgba(0, 0, 0, 0.9), 0px 1px 1px 0px rgba(255, 255, 255, 0.13);
    }


    #slider .bar {
        width: 194px;
        height: 5px;
        background: #333;
        position: relative;
        top: -4px;
        left: 4px;
        background: #1d2e38;
        background: -moz-linear-gradient(left, #1d2e38 0%, #2b4254 50%, #2b4254 100%);
        background: -webkit-gradient(linear, left top, right top, color-stop(0%, #1d2e38), color-stop(50%, #2b4254), color-stop(100%, #2b4254));
        background: -webkit-linear-gradient(left, #1d2e38 0%, #2b4254 50%, #2b4254 100%);
        background: -o-linear-gradient(left, #1d2e38 0%, #2b4254 50%, #2b4254 100%);
        background: -ms-linear-gradient(left, #1d2e38 0%, #2b4254 50%, #2b4254 100%);
        background: linear-gradient(left, #1d2e38 0%, #2b4254 50%, #2b4254 100%);
        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#1d2e38', endColorstr='#2b4254', GradientType=1);
        -webkit-border-radius: 40px;
        -moz-border-radius: 40px;
        border-radius: 40px;
    }



    #slider .highlight {
        height: 2px;
        position: fixed;
        width: 388px;
        top: 6px;
        left: 6px;
        -webkit-border-radius: 40px;
        -moz-border-radius: 40px;
        border-radius: 40px;
    }




}

@media only screen and (min-width: 600px) {
    #slider .highlight {
        height: 2px;
        position: absolute;
        width: 388px;
        top: 6px;
        left: 6px;
        -webkit-border-radius: 40px;
        -moz-border-radius: 40px;
        border-radius: 40px;
        background: rgba(255, 255, 255, 0.25);
    }
}

input[type="range"] {
    -webkit-appearance: none;
    background-color: black;
    height: 2px;
}

input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none;
    position: relative;
    top: 0px;
    z-index: 1;
    width: 20px;
    height: 20px;
    cursor: pointer;
    -webkit-box-shadow: 0px 6px 5px 0px rgba(0, 0, 0, 0.6);
    -moz-box-shadow: 0px 6px 5px 0px rgba(0, 0, 0, 0.6);
    box-shadow: 0px 6px 5px 0px rgba(0, 0, 0, 0.6);
    -webkit-border-radius: 40px;
    -moz-border-radius: 40px;
    border-radius: 40px;
    background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ebf1f6), color-stop(50%, #abd3ee), color-stop(51%, #89c3eb), color-stop(100%, #d5ebfb));
}

input[type="range"]:hover~#rangevalue,
input[type="range"]:active~#rangevalue {
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
    opacity: 1;
    top: -75px;
}

input[type="range"]:hover~#rangevalue1,
input[type="range"]:active~#rangevalue1 {
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
    opacity: 1;
    top: -75px;
}

/* Tool Tip */

#rangevalue1 {
    color: white;
    font-size: 10px;
    text-align: center;
    font-family: Arial, sans-serif;
    display: block;
    color: #fff;
    margin: 20px 0;
    position: relative;
    left: 44.5%;
    padding: 6px 12px;
    border: 1px solid black;
    -webkit-box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0, 0, 0, 0.4);
    -moz-box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0, 0, 0, 0.4);
    box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0, 0, 0, 0.4);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #222931), color-stop(100%, #181D21));
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    width: 58px;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    opacity: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    transition: all 0.5s ease;
    top: -95px;
}

#rangevalue {
    color: white;
    font-size: 10px;
    text-align: center;
    font-family: Arial, sans-serif;
    display: block;
    color: #fff;
    margin: 20px 0;
    position: relative;
    left: 44.5%;
    padding: 6px 12px;
    border: 1px solid black;
    -webkit-box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0, 0, 0, 0.4);
    -moz-box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0, 0, 0, 0.4);
    box-shadow: inset 0px 1px 1px 0px rgba(255, 255, 255, 0.2), 0px 2px 4px 0px rgba(0, 0, 0, 0.4);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #222931), color-stop(100%, #181D21));
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    width: 58px;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
    filter: alpha(opacity=0);
    opacity: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    transition: all 0.5s ease;
    top: -95px;
}

input[type="range"]:focus {
    outline: none;
}
</style>
<div class="posts">
    @include('applicants.includes.navbar')
    <!-- BEGIN: Content -->
    <div class="content">
        @include('applicants.includes.topbar')




        <div class="container">
            <form method="POST" action="{{url('search')}}">
                @csrf
                <div class="row">
                    <div class="col-xl-12 ">
                        <br>



                        <h3 style="font-size: 1.5em;" align="center" class="font-weight-bold">School & Programs Filter
                        </h3><br>

                        <br>
                        <div class="container">
                            <div class="row">
                                    <div class="col-sm">
                                    <h3 style="font-size: 1.2em;" align="left" class="font-weight-thin">Schools</h3>
                                        <br>
                                        <input class="form-control" list="schools" name="school" placeholder="Select...">
                                                <datalist id="schools">

                                                    @foreach($school_filters as $school_filter)
                                                    <option value="{{$school_filter->school_name}}" />
                                                    @endforeach


                                                </datalist>

                                        <br>
                                    </div>

                                    <div class="col-sm">
                                    <h3 style="font-size: 1.2em;" align="left" class="font-weight-thin">Country</h3>
                                    <br>
                                    <input class="form-control" type="text" name="country" placeholder="Enter name of country">
                                    </div>

                                    <div class="col-sm">
                                    <h3 style="font-size: 1.2em;" align="left" class="font-weight-thin">Programs</h3>
                                    <br>
                                        <input class="form-control" list="programs" name="program" placeholder="Select...">
                                                <datalist id="programs">

                                                    @foreach($program_filters as $program_filter)
                                                    <option value="{{strip_tags($program_filter->program_name)}}" />
                                                    @endforeach


                                                </datalist>
                                        <br>
                                    </div>
                            </div>

                        </div>


                        <div style="margin-bottom:1em;" class="row justify-content-center">
                            <button type="submit" class="btn btn-primary btn-block">Search</button>
                        </div>


                    </div>
            </form>
            <hr>

            <div class="col-xl-12">
                @if(!empty($school) || !empty($program) || !empty($country))
                <h3 style="font-size: 1.5em;" align="center" class="">Search Result for
               @if(isset($school)) {!! 'School: <b>'.$school .'</b>'!!} @endif  @if(isset($country)){!!'Country: <b>'.$country .'</b>'!!}@endif
                    @if(isset($program)){!!'Program: <b>'. $program. '</b>'!!}@endif </h3><hr>
                @endif
            </div>

            <div class="col-xl-12">
            <!-- @if(!empty($filter_school) || !empty($filter_program) || !empty($filter_country) || !empty($filter_school_type) || !empty($filter_state)
            || !empty($filter_program_level) || !empty($filter_post_sub_category) || !empty($filter_tuition_fee) || !empty($filter_application_fee) )
                <h3 style="font-size: 1.5em;" align="center" class="">Filter Results for
               @if(isset($filter_school)) {{ 'School: '.$filter_school .', '}} @endif  @if(isset($filter_country)){{'Country: '.$filter_country .', '}}@endif
                    @if(isset($filter_program)){{'Program: '. $filter_program.', '}}@endif
                    @if(isset($filter_program_level)){{'Program Level: '. $filter_program_level.', '}}@endif
                    @if(isset($filter_state)){{'State: '. $filter_state.', '}}@endif
                    @if(isset($filter_school_type)){{'School Type: '. $filter_school_type}}@endif
                    @if(isset($filter_application_fee)){{'Application fee: $'. $filter_application_fee.', '}}@endif
                    @if(isset($filter_tuition_fee)){{'Tuition Fee: $'. number_format($filter_tuition_fee).', '}}@endif
                    @if(isset($filter_post_sub_category)){{'Post Sub Category: '. $filter_post_sub_category}}@endif </h3><hr>
                @endif -->
            </div>

            <!-- Filter section -->

            <br>
            <br>
            <br>

            <div class="col-xl-6">
                <form class="form-row" method="post" action="{{url('/applicants/apply-filter')}}" novalidate>
                    @csrf
                     <h3 style="font-size: 1.5em;" align="center" class="font-weight-bold">School & Programs Filter
                        </h3>

                        <br>
                        <br>
                        <br>
                    <div class="card">
                        <div class="card-body">

                            <div class="col-9">
                                <p class="text-deco">School Filters</p>
                            </div>
                            <br>
                            <div class="col-12">
                                <label>Countries</label>
                                <input placeholder="Enter name of Country" name="country" style="margin-bottom:1em;" class="form-control">
                                <!-- <select name="country" style="margin-bottom:1em;" class="form-control">
                                    <option readonly value="">Select...</option>
                                    <option value="Canada">Canada</option>
                                    <option value="United Kingdom">United Kingdom(UK)</option>
                                    <option value="United States of America">United States of America(USA)</option>
                                    <option value="Australia">Australia</option>
                                </select> -->
                                <hr>

                                <!-- <div class="round" style="display: inline; margin-right: 1em; margin-top:1em;">
                                    <input class="special" required type="radio" id="radio_16"
                                        name="post-grad-work-permit" />
                                    <label for="radio_16"></label>
                                </div>

                                <label style="display: inline; margin-left: 0.3em;  margin-top:1em;"
                                    for="radio_16">Post-Graduation
                                    Work Permit Available.</label> -->


                                <label style="margin-top: 1em;">Provinces/States</label>
                                <input list="states" name="state" placeholder="Select..." class="form-control">
                                <datalist id="states" style="margin-top:1em;">
                                    <option value="Alabama" />
                                    <option value="Alaska" />
                                    <option value="Arizona" />
                                    <option value="Arkansas" />
                                    <option value="California" />
                                    <option value="Colorado" />
                                    <option value="Connecticut" />
                                    <option value="Dist. Columbia" />
                                    <option value="Delaware" />
                                    <option value="Florida" />
                                    <option value="Georgia" />
                                    <option value="Hawaii" />
                                    <option value="Idahio" />
                                    <option value="Illinois" />
                                    <option value="Indiana" />
                                    <option value="Iowa" />
                                    <option value="Kansas" />
                                    <option value="Kentucky" />
                                    <option value="Louisiana" />
                                    <option value="Maine" />
                                    <option value="Maryland" />
                                    <option value="Massachussets" />
                                    <option value="Michigan" />
                                    <option value="Minnesota" />
                                    <option value="Mississippi" />
                                    <option value="Missouri" />
                                    <option value="Montana" />
                                    <option value="Nebraska" />
                                    <option value="Nevada" />
                                    <option value="New Hampshire" />
                                    <option value="New Jersey" />
                                    <option value="New Mexico" />
                                    <option value="New York" />
                                    <option value="North Carolina" />
                                    <option value="North Dakota" />
                                    <option value="North Carolina" />
                                    <option value="North Dasoka" />
                                    <option value="Oklahoma" />
                                    <option value="Oregon" />
                                    <option value="Pennsylvania" />
                                    <option value="Rhode Island" />
                                    <option value="South Carolina" />
                                    <option value="Tennessee" />
                                    <option value="Texas" />
                                    <option value="Utah" />
                                    <option value="Vermont" />
                                    <option value="Virginia" />
                                    <option value="Washington" />
                                    <option value="West Virginia" />
                                    <option value="Wisconsin" />
                                    <option value="Wyoming" />
                                    <option value="Alberta" />
                                    <option value="British Columbia" />
                                    <option value="Manitoba" />
                                    <option value="New Brunswick" />
                                    <option value="Newfoundland and Labrador" />
                                    <option value="Nova Scotia" />
                                    <option value="Ontario" />
                                    <option value="Prince Edward Island" />
                                    <option value="Quebec" />
                                    <option value="Saskatchewan" />
                                    <option value="Northwest Territories" />
                                    <option value="Nunavut" />
                                    <option value="Yukon" />
                                    <option value="Scotland" />
                                    <option value="Northern Ireland" />
                                    <option value="Wales" />
                                    <option value="North East" />
                                    <option value="North West" />
                                    <option value="Yorkshire and the Humber" />
                                    <option value="West Midlands" />
                                    <option value="East Midlands" />
                                    <option value="South West" />
                                    <option value="South East" />
                                    <option value="East of England" />
                                    <option value="South West" />
                                    <option value="South East " />
                                    <option value="East of England" />
                                    <option value="Greater London" />
                                    <option value="Australia Capital Territory " />
                                    <option value="New South Wales" />
                                    <option value="Northern Territory" />
                                    <option value="Queensland" />
                                    <option value="South Australia" />
                                    <option value="Tasmania" />
                                    <option value="Victoria" />
                                    <option value="Western Australia" />

                                </datalist>

                                <label style="margin-top:1em; ">School Types</label>
                                <div class="row" style="margin-bottom:1em;">

                                    <div style=" margin-top: 1em;" class="col-xl-6">
                                        <div class="round" style="display: inline; margin-right: 1em;">
                                            <input class="special" type="radio" id="radio_17" name="school_type"
                                                value="University" />
                                            <label for="radio_17"></label>
                                        </div>
                                        <label style="display: inline; margin-right: 0em;" for="radio_17">
                                            University</label>
                                    </div>

                                    <div style=" margin-top: 2em;" class="col-xl-6">
                                        <div class="round" style="display: inline; margin-right: 1em;">
                                            <input class="special" type="radio" id="radio_18" name="school_type"
                                                value="English Institute" />
                                            <label for="radio_18"></label>
                                        </div>
                                        <label style="display: inline; margin-right: 0em;" for="radio_18">
                                            English Institute</label>
                                    </div>


                                    <div style=" margin-top: 2em;" class="col-xl-6">
                                        <div class="round" style="display: inline; margin-right: 1em;">
                                            <input class="special" type="radio" id="radio_15" name="school_type"
                                                value='College' />
                                            <label for="radio_15"></label>
                                        </div>
                                        <label style="display: inline; margin-right: 0em;" for="radio_15">
                                            College</label>
                                    </div>

                                    <div style=" margin-top: 2em;" class="col-xl-6">
                                        <div class="round" style="display: inline; margin-right: 1em;">
                                            <input class="special" type="radio" id="radio_14" name="school_type"
                                                value="High School" />
                                            <label for="radio_14"></label>
                                        </div>
                                        <label style="display: inline; margin-right: 0em;" for="radio_14">
                                            High School</label>
                                    </div>

                                </div>


                                <!-- <label style="margin-top:1em;">Schools</label>
                                <input class="form-control" list="schools" name="school" placeholder="Select...">
                                <datalist id="schools">

                                    @foreach($school_filters as $school_filter)
                                    <option value="{{$school_filter->school_name}}" />
                                    @endforeach


                                </datalist> -->



                            </div>

                            <div class="col-9">
                                <p class="text-deco">Program Filters</p>
                            </div>

                             <div class="col-12">

   <!--
                                <label>Program Levels</label>
                                <input name="program_level" list="program_levels" class="form-control" name=""
                                    placeholder="Select...">
                                <datalist id="program_levels">
                                    <option value="Diploma" />
                                    <option value="Bachelor of Science" />
                                    <option value="Bachelor of Arts" />
                                    <option value="Bachelor of Business Administration" />
                                    <option value="Bachelor of Education" />
                                    <option value="Graduate Certificate"/>
                                    <option value="Master of Arts" />
                                    <option value="Master of Science" />
                                    <option value="Master of Business Administration" />
                                    <option value="Master of Education" />
                                </datalist>

                                <!-- <label style="margin-top:1em;">Intakes</label>
                                <input list="intakes" class="form-control" name="" placeholder="Select.."
                                    name="intakes">
                                <datalist id="intakes">
                                    @for($i=0; $i
                                    <=2; $i++) @for($m=0; $m<12; $m++) <?php $y = $i + 51;?> <option
                                        value="{{date('M-Y', strtotime("+$m month +$i year"))}}" />
                                    @endfor
                                    @endfor
                                </datalist> 

                                <label style="margin-top:1em;">Post-Secondary Discipline</label>

                                <select name="post_discipline" class="form-control" data-dependent-selector="#sub">
                                    <option readonly value="">Select...</option>
                                    <option data-dependent-opt="Engineering and Technology"" value=" Engineering and
                                        Technology">Engineering and Technology</option>
                                    <option data-dependent-opt="Sciences" value="Sciences">Sciences</option>
                                    <option data-dependent-opt="Arts" value="Arts">Arts</option>
                                    <option data-dependent-opt="Business, Management and Economics"
                                        value="Business, Management and Economics">Business, Management and Economics
                                    </option>
                                    <option data-dependent-opt="Law"
                                        value="Law, Politics, Social, Community Service and Teaching">Law, Politics,
                                        Social, Community Service and Teaching</option>
                                    <option data-dependent-opt="English for Academic Studies"
                                        value="English for Academic Studies">English for Academic Studies</option>
                                    <option
                                        data-dependent-opt="Health Sciences, Medicine, Nursing, Paramedic and Kinesiology"
                                        value="Health Sciences, Medicine, Nursing, Paramedic and Kinesiology">Health
                                        Sciences, Medicine, Nursing, Paramedic and Kinesiology</option>

                                </select>

                                <label style="margin-top:1em;">Post-Secondary Sub-Categories</label>

                                <select name="post_sub_category" id="sub" class="form-control">
                                    <option readonly value="">Select...</option>
                                    <optgroup label="Engineering and Technology">
                                        <option data-from-dependent="Engineering and Technology"
                                            value="Aero Space, Aviation and Pilot Technology ">Aero Space, Aviation and
                                            Pilot Technology </option>
                                        <option data-from-dependent="Engineering and Technology" value=" Agriculture">
                                            Agriculture</option>
                                        <option data-from-dependent="Engineering and Technology"
                                            value=" Biomedical Engineering">Biomedical Engineering</option>
                                        <option data-from-dependent="Engineering and Technology"
                                            value=" Chemical Engineering">Chemical Engineering</option>
                                        <option data-from-dependent="Engineering and Technology"
                                            value=" Civil Engineering, Construction">Civil Engineering, Construction
                                        </option>
                                        <option data-from-dependent="Engineering and Technology"
                                            value=" Electrical Engineering">Electrical Engineering</option>
                                        <option data-from-dependent="Electronics" value="Electronics ">Electronics
                                        </option>
                                        <option data-from-dependent="Environmental Enginnering"
                                            value="Environmental Enginnering ">Environmental Enginnering</option>
                                        <option data-from-dependent="Game Design, Game Animation, Game Creation"
                                            value="Game Design, Game Animation, Game Creation ">Game Design, Game
                                            Animation, Game Creation</option>
                                        <option data-from-dependent="Industrial" value="Industrial ">Industrial</option>
                                        <option data-from-dependent="Material Engineering"
                                            value="Material Engineering ">Material Engineering</option>
                                        <option data-from-dependent="Mechanical, Manufacturing, Robotic Engineering"
                                            value="Mechanical, Manufacturing, Robotic Engineering ">Mechanical,
                                            Manufacturing, Robotic Engineering</option>
                                        <option data-from-dependent="Radiography" value="Radiography ">Radiography
                                        </option>
                                        <option data-from-dependent="Technology, Software, Computer, IT"
                                            value=" Technology, Software, Computer, IT">Technology, Software, Computer,
                                            IT</option>



                                    </optgroup>

                                    <optgroup label="Sciences">

                                        <option data-from-dependent="Sciences" value="Astronomy ">Astronomy</option>
                                        <option data-from-dependent="Sciences" value="Biochemistry ">Biochemistry
                                        </option>
                                        <option data-from-dependent="Sciences" value="Chemistry ">Chemistry</option>
                                        <option data-from-dependent="Sciences" value="Computer Science ">Computer
                                            Science</option>
                                        <option data-from-dependent="Sciences" value="Dental ">Dental</option>
                                        <option data-from-dependent="Sciences" value="Environmental, Earth Sciences ">
                                            Environmental, Earth Sciences</option>
                                        <option data-from-dependent="Sciences" value="Food Nutrition, Exercise ">Food
                                            Nutrition, Exercise</option>
                                        <option data-from-dependent="Sciences" value="General ">General</option>
                                        <option data-from-dependent="Sciences" value="Geology ">Geology</option>
                                        <option data-from-dependent="Sciences" value="Humanitarian Sciences ">
                                            Humanitarian Sciences</option>
                                        <option data-from-dependent="Sciences" value="Mathematics ">Mathematics</option>
                                        <option data-from-dependent="Sciences" value="Optometry ">Optometry</option>
                                        <option data-from-dependent="Sciences" value="Pharmacy ">Pharmacy</option>
                                        <option data-from-dependent="Sciences" value="Physics ">Physics </option>
                                        <option data-from-dependent="Sciences" value="Political ">Political</option>
                                        <option data-from-dependent="Sciences" value="Psychology, Philosophy, Therapy ">
                                            Psychology, Philosophy, Therapy</option>
                                        <option data-from-dependent="Sciences" value="Veterinarian ">Veterinarian
                                        </option>



                                    </optgroup>

                                    <optgroup label="Arts">
                                        <option data-from-dependent="Arts" value="Animation ">Animation </option>
                                        <option data-from-dependent="Arts" value="Anthropology ">Anthropology </option>
                                        <option data-from-dependent="Arts" value="communication">communication</option>
                                        <option data-from-dependent="Arts" value="English Literature">English Literature
                                        </option>
                                        <option data-from-dependent="Arts" value="Fashion, Esthetics">Fashion, Esthetics
                                        </option>
                                        <option data-from-dependent="Arts" value="Fine Arts">Fine Arts</option>
                                        <option data-from-dependent="Arts" value="Food and Culinary">Food and Culinary
                                        </option>
                                        <option data-from-dependent="Arts" value="Gender Studies">Gender Studies
                                        </option>
                                        <option data-from-dependent="Arts" value="General ">General</option>
                                        <option data-from-dependent="Arts" value="Geography ">Geography </option>
                                        <option data-from-dependent="Arts" value="Global Studies ">Global Studies
                                        </option>
                                        <option data-from-dependent="Arts" value="Graphic Design, Interior Design ">
                                            Graphic Design, Interior Design </option>
                                        <option data-from-dependent="Arts" value="History">History</option>
                                        <option data-from-dependent="Arts" value="Journalism">Journalism</option>
                                        <option data-from-dependent="Arts" value="Languages">Languages</option>
                                        <option data-from-dependent="Arts" value="Liberal Arts">Liberal Arts</option>
                                        <option data-from-dependent="Arts"
                                            value="Animation Media, Photography, film, theatre, Performance ">Animation
                                            Media, Photography, film, theatre, Performance </option>
                                        <option data-from-dependent="Arts" value="Music, Audio">Music, Audio</option>
                                        <option data-from-dependent="Arts" value="Planning(Urban) ">Planning(Urban)
                                        </option>
                                        <option data-from-dependent="Arts" value="Religion">Religion</option>
                                        <option data-from-dependent="Arts" value="Sociology">Sociology</option>

                                    </optgroup>


                                    <optgroup label="Business, Management and Economics">
                                        <option data-from-dependent="Business, Management and Economics"
                                            value="Accounting">Accounting</option>
                                        <option data-from-dependent="Business, Management and Economics"
                                            value="Entrepreneurship">Entrepreneurship</option>
                                        <option data-from-dependent="Business, Management and Economics"
                                            value="Finance, Economics">Finance, Economics</option>
                                        <option data-from-dependent="Business, Management and Economics"
                                            value="Hospitality and Tourism, Recreation">Hospitality and Tourism,
                                            Recreation</option>
                                        <option data-from-dependent="Business, Management and Economics"
                                            value="Human Resources">Human Resources</option>
                                        <option data-from-dependent="Business, Management and Economics"
                                            value="International Business">International Business</option>
                                        <option data-from-dependent="Business, Management and Economics"
                                            value="Management, Administration, General">Management, Administration,
                                            General</option>
                                        <option data-from-dependent="Business, Management and Economics"
                                            value="Marketing, analyst, Advertising">Marketing, analyst, Advertising
                                        </option>
                                        <option data-from-dependent="Business, Management and Economics"
                                            value="Public Relation">Public Relation</option>
                                        <option data-from-dependent="Business, Management and Economics"
                                            value="Supply Chain">Supply Chain</option>



                                    </optgroup>


                                    <optgroup label="Law, Politics,Social, Community Service and Teaching">
                                        <option data-from-dependent="Law" value="Community, Social Service">Community,
                                            Social Service</option>
                                        <option data-from-dependent="Law" value="Law, Police, Security">Law, Police,
                                            Security</option>
                                        <option data-from-dependent="Law"
                                            value="Teaching, Early Development, Child Care">Teaching, Early Development,
                                            Child Care</option>

                                    </optgroup>

                                </select>


 -->
                                <p style="margin-top:1em;">All amounts are listed in the currency charged by the school.
                                    For best results, please specify a country of the school.</p>
                                <div class="row" style="margin-top:1.5em;">
                                    <div class="col-xl-4">
                                        <label>Tuition Fee (0$-$100K)</label>
                                    </div>

                                   <div class="col-xl-8">
                                        <div class="round" style="display: inline; margin-right: 1em;">
                                            <input class="special" type="radio" id="radio_10" />
                                            <label for="radio_10"></label>
                                        </div>
                                        <label style="display: inline; margin-right: 0em;" for="radio_10">
                                            Include living costs</label> 
                                    </div> 
                                </div>


                                <div id="slider">

                                    <input name="tuition_fee" class="bar" type="range" id="rangeinput" value="0"
                                        onchange="rangevalue1.value=value" />
                                    <span class="highlight"></span>
                                    <output id="rangevalue1">0</output>
                                </div>




                                <label style="margin-top:1em;">Application Fee($0-$1000)</label>
                                <div id="slider">

                                    <input name="application_fee" class="bar" type="range" id="rangeinput" value="0"
                                        max="1000" onchange="rangevalue.value=value" />
                                    <span class="highlight"></span>
                                    <output id="rangevalue">0</output>
                                </div>





                            </div>
                                                 <br>
                                                 <br>


                            <button type="submit" class="btn btn-primary btn-block">Apply Filters</button>
                        </div>
                    </div>

                </form>
            </div>
            @if(!isset($search_programs) || !isset($search_schools))
            <br>
            <div class="col-xl-6 ">
                <br>
                <div class="row">
                    <div id="sec_program" class="col-6 line-border" onclick="changeSectionProgram()">
                        <h3 style="font-size: 1.5em; " align="center" class="font-weight-bold ">Programs</h3><br>
                    </div>

                    <div id="sec_school" class="col-6" onclick="changeSectionSchool()">
                        <h3 style="font-size: 1.5em; " align="center" class="font-weight-bold">Schools
                        </h3>
                    </div>
                </div>


                <div class="card order-last" id="programs-section" style="display: block; margin-top:1em;">
                    <div class="card-body">
                        @foreach($programs as $search_program)
                        <?php
$image = Storage::url($search_program->school_image);
?>
                        <img style="border-radius: 3em; " height="60px" width="60px"
                            src="{{ asset('/public/'.$image) }}"><a
                            href="{{url('school_programs/'.$search_program->school_id)}}">
                            <h4 style="font-size: 1.3em; display: inline;">{{$search_program->school_name}}</h4>
                        </a>
                        <h5 align="center">{{$search_program->location}}</h5>
                        <a href="{{url('school/'.$search_program->program_id)}}">
                            <p>{{strip_tags($search_program->program_name)}}</p>
                        </a><br>
                        <div class="row">
                            <div class="col-xl-4">
                                <p>TUITION FEE</p>
                                <p>${{$search_program->tution_fee}}</p>
                            </div>
                            <div class="col-xl-5">
                                <p>APPLICATION FEE</p>
                                <p>${{$search_program->application_fee}}</p>
                            </div>
                        </div>
                        <hr>

                        @endforeach
                        <br>



                    </div><br>
                    {{$programs->appends(Request::except('page'))->render()}}
                </div> <br>


                <!-- School section -->
                <div id="schools-section" class="order-first" style="display: none;">
                    <div class="row">
                        @foreach($schools as $school)
                        <div class="col-xl-6" style="margin-top:1em;">
                            <div class="card">
                                <div class="card-body">

                                    <?php
$image = Storage::url($school->school_image);
?>
                                    <img style="border-radius: 3em; " height="60px" width="60px"
                                        src="{{ asset('/public/'.$image) }}"><a
                                        href="{{url('school_programs/'.$school->id)}}">
                                        <h4 style="font-size: 1.3em; display: inline;">{{$school->school_name}}</h4><hr>
                                        <p style="display: inline">{{$school->location}}</p>
                                    </a>

                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                    <br>
                    {{$schools->appends(Request::except('page'))->render()}}



                </div>



            </div>
        </div>





    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="loadMe" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xl-lg" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="loader"></div>
                <div clas="loader-txt">
                    <h3 class="font-weight-bold">LOADING...</h3><br>
                    <p class="font-weight-bold">Please wait.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('applicants.includes.footer')

<script>
function changeSectionSchool() {
    var x = document.getElementById("schools-section");
    var y = document.getElementById("programs-section");
    var sec_school = document.getElementById("sec_school");
    var sec_program = document.getElementById("sec_program");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
        sec_program.classList.remove("line-border");
        sec_school.classList.add("line-border");

    }
}

function changeSectionProgram() {
    var x = document.getElementById("programs-section");
    var y = document.getElementById("schools-section");
    var sec_school = document.getElementById("sec_school");
    var sec_program = document.getElementById("sec_program");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
        sec_program.classList.add("line-border");
        sec_school.classList.remove("line-border");
    }
}

document.addEventListener("change", checkSelect);

function checkSelect(evt) {
    const origin = evt.target;

    if (origin.dataset.dependentSelector) {
        const selectedOptFrom = origin.querySelector("option:checked")
            .dataset.dependentOpt || "n/a";
        const addRemove = optData => (optData || "") === selectedOptFrom ?
            "add" : "remove";
        document.querySelectorAll(`${origin.dataset.dependentSelector} option`)
            .forEach(opt =>
                opt.classList[addRemove(opt.dataset.fromDependent)]("display"));
    }
}
</script>
</div>





























<!-- ================ For searched programs and school========================  -->
@elseif(isset($search_programs) || isset($search_schools))
<div class="col-xl-6">
    <div class="row">
        <div id="sec_program" class="col-6 line-border" onclick="changeSectionProgram()">
            <h3 style="font-size: 1.5em; " align="center" class="font-weight-bold ">Programs</h3><br>
        </div>

        <div id="sec_school" class="col-6" onclick="changeSectionSchool()">
            <h3 style="font-size: 1.5em; " align="center" class="font-weight-bold">Schools
            </h3>
        </div>
    </div>

    <div class="card" id="programs-section" style="display: block; margin-top:1em;">
        <div class="card-body">
        @if(count($search_programs) == 0 )
        <h4 style="font-size: 1.3em; display: inline;" align="center">No result found.</h4>
        @endif
            @foreach($search_programs as $search_program)
            <?php
$image = Storage::url($search_program->school_image);
?>
            <img style="border-radius: 3em; " height="60px" width="60px" src="{{ asset('/public/'.$image) }}"><a
                href="{{url('school_programs/'.$search_program->school_id)}}">
                <h4 style="font-size: 1.3em; display: inline;">{{$search_program->school_name}}</h4>
            </a>
            <h5 align="center">{{$search_program->location}}</h5>
            <a href="{{url('school/'.$search_program->program_id)}}">
                <p>{{strip_tags($search_program->program_name)}}</p>
            </a><br>
            <div class="row">
                <div class="col-xl-4">
                    <p>TUITION FEE</p>
                    <p>${{$search_program->tution_fee}}</p>
                </div>
                <div class="col-xl-5">
                    <p>APPLICATION FEE</p>
                    <p>${{$search_program->application_fee!==null ? $search_program->program_id: '0'}}</p>
                </div>
            </div>
            <hr>

            @endforeach
            <br>
            {{$search_programs->appends(request()->input())->links()}}

        </div>
    </div>


<div id="schools-section" style="display: none;">
        @if(count($search_schools) == 0 )
        <h4 style="font-size: 1.3em; display: inline;" align="center">No result found.</h4>
        @endif
    <div class="row">

        @foreach($search_schools as $search_school)


        <div class="col-xl-6" style="margin-top:1em;">
            <div class="card">
                <div class="card-body">

                    <?php
$image = Storage::url($search_school->school_image);
?>
                    <img style="border-radius: 3em; " height="60px" width="60px" src="{{ asset('/public/'.$image) }}"><a
                        href="{{url('school_programs/'.$search_school->id)}}">
                        <h4 style="font-size: 1.3em; display: inline;">{{$search_school->school_name}}</h4><hr>
                        <p style="display: inline">{{$search_school->location}}</p>
                    </a>

                </div>
            </div>
        </div>
        @endforeach
    </div><br>
    {{$search_schools->appends(request()->input())->links()}}
</div>
</div>
</div>
</div>








</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="loadMe" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xllg" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="loader"></div>
                <div clas="loader-txt">
                    <h3 class="font-weight-bold">LOADING...</h3><br>
                    <p class="font-weight-bold">Please wait.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@include('applicants.includes.footer')

<script>
function changeSectionSchool() {
    var x = document.getElementById("schools-section");
    var y = document.getElementById("programs-section");
    var sec_school = document.getElementById("sec_school");
    var sec_program = document.getElementById("sec_program");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
        sec_program.classList.remove("line-border");
        sec_school.classList.add("line-border");

    }
}

function changeSectionProgram() {
    var x = document.getElementById("programs-section");
    var y = document.getElementById("schools-section");
    var sec_school = document.getElementById("sec_school");
    var sec_program = document.getElementById("sec_program");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
        sec_program.classList.add("line-border");
        sec_school.classList.remove("line-border");
    }
}

document.addEventListener("change", checkSelect);

function checkSelect(evt) {
    const origin = evt.target;

    if (origin.dataset.dependentSelector) {
        const selectedOptFrom = origin.querySelector("option:checked")
            .dataset.dependentOpt || "n/a";
        const addRemove = optData => (optData || "") === selectedOptFrom ?
            "add" : "remove";
        document.querySelectorAll(`${origin.dataset.dependentSelector} option`)
            .forEach(opt =>
                opt.classList[addRemove(opt.dataset.fromDependent)]("display"));
    }
}
</script>

</div>
@endif

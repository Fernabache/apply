@include('applicants.includes.header')
@include('applicants.includes.navbar')
<!-- BEGIN: Content -->
<div class="content">
    @include('applicants.includes.topbar')
    <div class="container">
         <?php
                        
                            
                            
                            $result = strpos($last_application->location,'United Kingdom');
                            if($result)
                            {

                                $last_application_payment = 'PAID';
                            }
                            else{
                                
                                
                                $last_application_payment = $last_application->payment;
                            }
                        
                        
                        ?>
        <?php if($result === true || $last_application_payment === "PAID"): ?>
        <br>
<br>
        <button id="docs" class="btn btn-success"> Upload Documents</button>
        <?php endif; ?>
        <div class="row">

<br>
<br>
<br>

            <div class="col-xl-12">
                {{-- Application section --}}
                
<br>
<br>
<br>
                <h3 style="font-size: 1.5em;" align="center" class="font-weight-bold">Applications</h3><br>

                @forelse($applications as $application )
                <div class="card" style="width: 100%;">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-xl-8">
                                <?php  
            $image = Storage::url($application->school_image);

        ?>
                                <img style="border-radius: 3em; " height="60px" width="60px" src="{{ asset('/public/'.$image) }}">
                                <h4 style="font-size: 1.3em; display: inline;">{{$application->school_name}}</h4>
                                <h4 class="font-weight-bold">{{strip_tags($application->program_name)}}</h4><br>
                                <h4 class="font-weight-bold">Application Fee: ${{$application->application_fee}}</h4>
                            </div>

                            <div class="col-xl-4" style="margin-top: 2em;">
                                <h4 class="font-weight-bold">Payment: {{$application->payment}}</h4><br>
                                <?php if($application->admission_status==="PROCESSING..."): ?>
                                <h4 class="font-weight-bold">Admission status: <button class="btn btn btn-info"
                                        disabled="">{{$application->admission_status}}</button></h4>


                                <?php elseif($application->admission_status==="SUBMITTED") :?>
                                <h4 class="font-weight-bold">Admission status: <button disabled=""
                                        style="background-color: #FF4500; color: #fff;"
                                        class="btn ">{{$application->admission_status}}</button></h4>


                                <?php elseif($application->admission_status==="VISA"): ?>
                                <h4 class="font-weight-bold">Admission status: <button class="btn btn btn-success"
                                        disabled="">READY FOR {{$application->admission_status}}</button></h4>

                                                               <?php elseif($application->admission_status==="ADMITTED"): ?>
                                <h4 class="font-weight-bold">Admission status: <button class="btn btn btn-success"
                                        disabled="">YOU ARE NOW {{$application->admission_status}}</button></h4>


                                <?php elseif($application->admission_status==="CANCELLED"):?>
                                <h4 class="font-weight-bold">Admission status: <button class="btn btn "
                                        style="background-color: red; color: #fff;"
                                        disabled="">{{$application->admission_status}}</button></h4>
                                <?php endif; ?>


                            </div>
                        </div><br>
                        
                        <?php
                        
                            
                            
                            $result = strpos($application->location,'United Kingdom');
                            if($result)
                            {
                                $result = true;
                                $application_payment = 'PAID';
                              
                            }
                            else{
                                
                                $result = false;
                                $application_payment = $application->payment;
                            }
                        
                        
                        ?>
                        
                        
                        @if($result == false || $application_payment !== 'PAID')

                        <input id="stack_action" type="hidden" name="application_fee"
                            value="{{$application->application_fee}}">
                        <input type="hidden" name="application_id" value="{{$application->application_id}}">

                        <button class="btn btn-info paystack_terms" style="margin-top:1em;"
                            data-id="{{$application->application_id}}"> Pay via Paystack <img
                                style="border-radius: 5em;" src="{{asset('applicant/images/stack.png')}}"
                                width="25px" /></button>


                        <input type="hidden" name="application_fee" value="{{$application->application_fee}}"
                            id="application_fee_pal">
                        <input type="hidden" name="application_id" value="{{$application->application_id}}"
                            id="application_id_pal">

                        <button class="btn btn-success paypal_terms" style="margin-top:1em;"
                            data-id="{{$application->application_id}}">Pay via Paypal <img style="border-radius: 5em;"
                                src="{{asset('applicant/images/pay.jpg')}}" width="25px" /></button>
                        @endif
                    </div>
                </div>
                @empty
                <h5 align="center">You have 0 Applications for now</h5>
                @endforelse
            </div><br><br>
            
            

            {{-- Uploaded documents--}}
            <?php if(isset($uploaded_documents_un->user_id)):?>
            <div style="margin: 1em;" class="col-xl-12">
                <div style="margin: 1em;" class="card">
                    <div class="card-body">
                        <h3 style="font-size: 1.5em;" align="center" class="font-weight-bold">Uploaded
                            Documents(Undergraduate)</h3><br>
                        <div class="row">

                            <div style="margin-top: 1em;" class="col-xl-3">
                                <h4 align="center">Resume</h4>
                                <img style="margin-top: 1em;" onerror="this.style.display='none'"
                                    src="{{asset('public/storage/docs/'.$uploaded_documents_un->resume)}}"
                                    class="img-fluid">
                            </div>

                            <div style="margin-top: 1em;" class="col-xl-3">
                                <h4 align="center">International Passport</h4>
                                <img style="margin-top: 1em;" onerror="this.style.display='none'"
                                    src="{{asset('public/storage/docs/'.$uploaded_documents_un->passport)}}"
                                    class="img-fluid">
                            </div>

                            <div style="margin-top: 1em;" class="col-xl-3">
                                <h4 align="center">WAEC Result</h4>
                                <img style="margin-top: 1em;"
                                    src="{{asset('public/storage/docs/'.$uploaded_documents_un->waec)}}"
                                    onerror="this.style.display='none'" class="img-fluid">
                            </div>

                            <div style="margin-top: 1em;" class="col-xl-3">
                                <h4 align="center">WAEC Scratch Card</h4>
                                <img style="margin-top: 1em;"
                                    src="{{asset('public/storage/docs/'.$uploaded_documents_un->waec_scratch_card)}}"
                                    onerror="this.style.display='none'" class="img-fluid">
                            </div>

                            <div style="margin-top: 1em;" class="col-xl-6">
                                <h4 align="center">SS1-SS3 Transcripts(Optional)</h4>
                                <?php $transcripts = json_decode($uploaded_documents_un->transcripts,true); ?>
                                <?php if(isset($transcripts)): ?>
                                <div class="row">

                                    <?php for($i =0; $i<count($transcripts) ;++$i ): ?>
                                    <div style="margin-top: 1em;" class="col-xl-4">
                                        <img onerror="this.style.display='none'"
                                            src="{{asset('public/storage/docs/'.$transcripts[$i])}}" class="img-fluid">
                                    </div>
                                    <?php endfor; ?>
                                </div>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>

                </div>
                <?php elseif(isset($uploaded_documents_pos->user_id)):?>
                <div style="margin-top: 1em;" class="col-xl-12">
                    <div class="card">
                        <h3 style="font-size: 1.5em;" align="center" class="font-weight-bold">Uploaded
                            Documents(Postgraduate)</h3><br>
                        <div class="row">
                            <div style="margin-top: 1em;" class="col-xl-3">
                                <h4 align="center">Resume</h4>
                                <img style="margin-top: 1em;" onerror="this.style.display='none'"
                                    src="{{asset('public/storage/docs/'.$uploaded_documents_pos->resume)}}"
                                    class="img-fluid">
                            </div>

                            <div style="margin-top: 1em;" class="col-xl-3">
                                <h4 align="center">WAEC Result</h4>
                                <img style="margin-top: 1em;"
                                    src="{{asset('public/storage/docs/'.$uploaded_documents_pos->waec)}}"
                                    onerror="this.style.display='none'" class="img-fluid">
                            </div>

                            <div style="margin-top: 1em;" class="col-xl-3">
                                <h4 align="center">Bachelor's certificate</h4>
                                <img style="margin-top: 1em;" onerror="this.style.display='none'"
                                    src="{{asset('public/storage/docs/'.$uploaded_documents_pos->bsc_certificate)}}"
                                    class="img-fluid">
                            </div>

                            <div style="margin-top: 1em;" class="col-xl-3">
                                <h4 align="center">International Passport</h4>
                                <img style="margin-top: 1em;" onerror="this.style.display='none'"
                                    src="{{asset('public/storage/docs/'.$uploaded_documents_pos->passport)}}"
                                    class="img-fluid">
                            </div>

                            <div style="margin-top: 1em;" class="col-xl-3">
                                <h4 align="center">Emergency Contact</h4>
                                <input style="margin-top: 1em;" type="text" disabled="" class="form-control"
                                    value="{{$uploaded_documents_pos->emergency_contact}}">
                            </div>

                            <div style="margin-top: 1em;" class="col-xl-6">
                                <h4 align="center">Bachelor's transcripts</h4>
                                <?php $bsc_transcripts = json_decode($uploaded_documents_pos->bsc_transcripts,true); ?>

                                <div class="row">
                                    <?php for($i =0; $i<count($bsc_transcripts) ;++$i ): ?>
                                    <div style="margin-top: 1em;" class="col-xl-4">
                                        <img onerror="this.style.display='none'"
                                            src="{{asset('public/storage/docs/'.$bsc_transcripts[$i])}}"
                                            class="img-fluid">
                                    </div>
                                    <?php endfor; ?>
                                </div>

                            </div>

                            <div style="margin-top: 1em;" class="col-xl-6">
                                <h4 align="center">References</h4>
                                <?php $references = json_decode($uploaded_documents_pos->references,true); ?>

                                <div class="row">
                                    <?php for($i =0; $i<count($references) ;++$i ): ?>
                                    <div style="margin-top: 1em;" class="col-xl-4">
                                        <img onerror="this.style.display='none'"
                                            src="{{asset('public/storage/docs/'.$references[$i])}}" class="img-fluid">
                                    </div>
                                    <?php endfor; ?>
                                </div>
                            </div>

                            <div style="margin-top: 1em;" class="col-xl-6">
                                <h4 align="center">SS1-SS3 Transcripts(Optional)</h4>
                                <?php $transcripts = json_decode($uploaded_documents_pos->transcripts,true); ?>
                                <?php if(isset($transcripts)): ?>
                                <div class="row">
                                    <?php for($i =0; $i<count($transcripts) ;++$i ): ?>
                                    <div style="margin-top: 1em;" class="col-xl-4">
                                        <img onerror="this.style.display='none'"
                                            src="{{asset('public/storage/docs/'.$transcripts[$i])}}" class="img-fluid">
                                    </div>
                                    <?php endfor; ?>
                                </div>
                                <?php endif; ?>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

        </div>


    </div>
</div>

<!-- Uploading modal -->
<div class="modal fade" id="loadMe" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xl-lg" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div class="loader"></div>
                <div clas="loader-txt">
                    <h3 class="font-weight-bold">UPLOADING FILES...</h3><br>
                    <p class="font-weight-bold">Please wait...</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- modal page -->

<div id="myodal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 align="center" class="modal-title">Status</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <h4 align="center">Files Uploaded successfully.Kindly reload the page.&nbsp;<img
                        src="{{ asset('admin/assets/img/icons/common/checked.png') }}" width="40px"></h4>
                <hr>
            </div>
        </div>
    </div>
</div>


@include('applicants.includes.footer')
@include('applicants.sections.documents_modal')
<script>
$(document).on('click', '.paypal_terms', function(e) {
    e.preventDefault();
    var id = $(this).attr("data-id");
    $('#terms_conds_form').attr('action', '/payment');
    getRow(id);
});

$(document).on('click', '.paystack_terms', function(e) {
    e.preventDefault();
    var id = $(this).attr("data-id");
    $('#terms_conds_form').attr('action', '/paystack');
    getRow(id);
});

function getRow(id) {
    $.ajax({
        type: 'GET',
        url: '{{ url("applications_details") }}',
        data: {
            id: id
        },
        dataType: 'json',
        success: function(response) {
            $('#application_fee_form').val(response.application_fee);
            $('#application_id_form').val(response.application_id);
            $('.prodid').val(response.user_id);
            $("#terms_conds").modal('show');



        }
    });
}
</script>
<?php if($result === true || $last_application->payment === "PAID"): ?>
<script>
$(".submitbtn").on("click", function(e) {



    if ($(form).valid()) {
        $.ajax({
            type: "POST",
            url: $(form).prop("action"),
            //dataType: 'json', //not sure but works for me without this
            data: formData,
            contentType: false, //this is requireded please see answers above
            processData: false, //this is requireded please see answers above
            //cache: false, //not sure but works for me without this
            error: ErrorHandler,
            success: successHandler
        });
    }
});
//Submit undergraduate files on click.
$(document).on('submit', '#submit_undergraduate', function(e) {
    e.preventDefault();
    $("#document").modal('hide');
    $("#loadMe").modal('show');
    var post_url = $(this).attr("action");
    var request_method = $(this).attr("method");
    var form = $("#submit_undergraduate");

    // you can't pass Jquery form it has to be javascript form object
    var formData = new FormData(form[0]);


    Submit_undergraduate_form_on_click(post_url, request_method, formData);
});

function Submit_undergraduate_form_on_click(post_url, request_method, formData) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/applicants/submit_undergraduate_docs',
        type: "POST",
        data: formData,
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
        cache: false,
        dataType: 'html',
        success: function() {

            $("#loadMe").modal('hide');
            $('.modal-backdrop').remove();
            $("#myodal").modal('show');

        },
        error: function() {
            $("#loadMe").modal('hide');
            $('.modal-backdrop').remove();
            alert('An undefined error was encountered while uploading files. Kindly reupload your files.');
        }
    });
}


// submit postgraduate files on click 
$(document).on('submit', '#submit_postgraduate', function(e) {
    e.preventDefault();
    $("#document").modal('hide');
    $("#loadMe").modal('show');
    var post_url = $(this).attr("action");
    var request_method = $(this).attr("method");
    var form = $("#submit_postgraduate");

    // you can't pass Jquery form it has to be javascript form object
    var formData = new FormData(form[0]);


    Submit_postgraduate_form_on_click(post_url, request_method, formData);
});

function Submit_postgraduate_form_on_click(post_url, request_method, formData) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/applicants/submit_postgraduate_docs',
        type: "POST",
        data: formData,
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
        cache: false,
        dataType: 'html',
        success: function() {

            $("#loadMe").modal('hide');
            $('.modal-backdrop').remove();
            $("#myodal").modal('show');

        },
        error: function() {
            $("#loadMe").modal('hide');
            $('.modal-backdrop').remove();
            alert('An undefined error was encountered while uploading files. Kindly reupload your files.');
        }

    });
}


// show the doc pop up modal on load
$(document).ready(function() {
    Check_if_user_doc_exists();
});


function Check_if_user_doc_exists() {

    $.ajax({
        type: 'GET',
        url: '{{ url("check_if_docs_exists") }}',
        data: {
            user_id: "{{Auth::user()->id}}"
        },
        success: function(result) {
            if (result === "failed") {
                $("#document").modal('show');
            }
        }
    });


}

// show the doc pop up modal on click
$(document).on('click', '#docs', function() {
    Check_if_user_doc_exists_on_click();
});


function Check_if_user_doc_exists_on_click() {

    $.ajax({
        type: 'GET',
        url: '{{ url("check_if_docs_exists") }}',
        data: {
            user_id: "{{Auth::user()->id}}"
        },
        success: function(result) {
            if (result === "failed") {
                $("#document").modal('show');
            } else {
                $("#docs").html('Files already uploaded to Skyned Consults.');
            }
        }
    });


}
</script>
<?php endif; ?>
<script>
$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img width="100px" height="100px" >')).attr('src', event.target
                        .result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#transcript_1').on('change', function() {
        imagesPreview(this, 'div.transcript_1');
    });

    $('#transcript').on('change', function() {
        imagesPreview(this, 'div.transcript');
    });

    $('#references').on('change', function() {
        imagesPreview(this, 'div.references');
    });

    $('#bsc_transcript').on('change', function() {
        imagesPreview(this, 'div.bsc_transcript');
    });
});
</script>
<script>
$("#bsc_transcript").on("change", function() {
    if ($("#bsc_transcript")[0].files.length < 4) {
        document.getElementById("bsc_transcript").value = null;
        alert("You can only select a minimum 4 images");
    };
});

$("#transcript").on("change", function() {
    if ($("#transcript")[0].files.length < 3) {
        document.getElementById("transcript").value = null;
        alert("You can only select a minimum 3 images");
    }

});

$("#transcript_1").on("change", function() {
    if ($("#transcript_1")[0].files.length < 3) {
        document.getElementById("transcript_1").value = null;
        alert("You can only select a minimum 3 images");
    };
});

$("#references").on("change", function() {
    if ($("#references")[0].files.length < 2) {
        document.getElementById("references").value = null;
        alert("You can only select a minimum 2 images");
    };
});
</script>
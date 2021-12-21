<!-- post graduate -->
<div  class="modal fade" id="document">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 align="center" class="modal-title font-weight-bold">Upload Documents</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <h3 align="center">{{Session::get('success')}}&nbsp;<img src="{{ asset('admin/assets/img/icons/common/checked.png') }}" width="40px"></h3>
                    <div class="">  
                        <div class="">
                    <form id="submit_undergraduate" method="POST" action="{{url('applicants/submit_undergraduate_docs')}}"  enctype="multipart/form-data">
                    @csrf
                    <h2 align="center" class="font-weight-bold">For Undergraduate Applicants(Only) </h2><br>
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="type" value="undergraduate">
                    <div class="row">

                    <div style="margin-top: 1em;" class="col-xl-6 card">
                    <label>Resume</label>
                    <input required="" type="file" name="resume"     onchange="document.getElementById('resume').src = window.URL.createObjectURL(this.files[0])" accept=".png, .jpg, .jpeg"></input>
                    <img  id="resume" alt="" onerror="this.style.display='none'"  width="100" height="100" />
                    <br> 
                    </div>

                     <div style="margin-top: 1em;" class="col-xl-6 card">
                    <label>WAEC Result</label>
                    <input  required="" type="file" name="waec_result"  onchange="document.getElementById('waec_result').src = window.URL.createObjectURL(this.files[0])" accept=".png, .jpg, .jpeg"></input>
                    <img id="waec_result" alt="" onerror="this.style.display='none'" width="100" height="100" />
                    <br> 
                    </div>

                     <div style="margin-top: 1em;" class="col-xl-6 card">
                    <label>WAEC Scrath card</label>
                    <input type="file" required="" name="waec_card"  onchange="document.getElementById('waec_card').src = window.URL.createObjectURL(this.files[0])" accept=".png, .jpg, .jpeg"></input>
                    <img id="waec_card" alt="" onerror="this.style.display='none'" width="100" height="100" />
                    <br> 
                    </div>

                     <div style="margin-top: 1em;" class="col-xl-6 card">
                    <label>International Passport</label>
                    <input required="" type="file" name="passport"  onchange="document.getElementById('passport').src = window.URL.createObjectURL(this.files[0])" accept=".png, .jpg, .jpeg"></input>
                    <img id="passport" alt="" onerror="this.style.display='none'" width="100" height="100" />
                    <br> 
                    </div>

                    <div style="margin-top: 1em;" class="col-xl-6 card">
                    <label>High School Transcripts(Optional)</label>
                    <input  id="transcript" multiple="" type="file" name="transcripts[]"></input>
                    <div class="row">
                        <div class="transcript" style="margin: 0.4em;"></div></div>
                    </div>
                    <br> 
                    </div>                       



      </div><br>                          
                        <button   class="btn btn-primary btn-block btn-color" type="submit">
                                    Submit
                                </button>       
                            </form>
<hr><br><br>


                  <form id="submit_postgraduate" action="{{url('applicants/submit_postgraduate_docs')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <h2 align="center" class="font-weight-bold">For Postgraduate Applicants(Only) </h2><br>
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="type" value="postgraduate">
                    <div class="row">

                    <div style="margin-top: 1em;" class="col-xl-6 card">
                    <label>Resume</label>
                    <input required="" type="file" name="resume" onchange="document.getElementById('resume_1').src = window.URL.createObjectURL(this.files[0])" accept=".png, .jpg, .jpeg"></input>
                    <img id="resume_1" alt="" onerror="this.style.display='none'" width="100" height="100" />
                    <br> 
                    </div>

                  <!--   <div style="margin-top: 1em;" class="col-xl-6 card">
                    <label>WAEC Result</label>
                    <input type="file" name="waec_result"  onchange="document.getElementById('waec_result_1').src = window.URL.createObjectURL(this.files[0])" accept=".png, .jpg, .jpeg"></input>
                    <img id="waec_result_1" alt="" onerror="this.style.display='none'" width="100" height="100" />
                    <br> 
                    </div>-->

                     <div style="margin-top: 1em;" class="col-xl-6 card">
                    <label>Bachelor's certificate</label>
                    <input required=""  type="file" name="bsc_certificate" onchange="document.getElementById('bsc_certificate').src = window.URL.createObjectURL(this.files[0])" accept=".png, .jpg, .jpeg"></input>
                    <img id="bsc_certificate" alt="" onerror="this.style.display='none'" width="100" height="100" />
                    <br> 
                    </div>

                     <div style="margin-top: 1em;" class="col-xl-6 card">
                    <label>Bachelor's transcripts</label>
                    <input required="" id="bsc_transcript"  multiple=""  type="file" name="bsc_transcripts[]">  </input>
                    <div class="row">
                        <div class="bsc_transcript"  style="margin: 0.4em;"></div>
                    </div>
                    <br> 
                    </div>

                     <div style="margin-top: 1em;" class="col-xl-6 card">
                    <label>Emergency Contact</label>
                    <input required="" type="text" name="emergency_contact" class="form-control"></input>
                    <br> 
                    </div>

                     <div style="margin-top: 1em;" class="col-xl-6 card">
                    <label>2 References</label>
                    <input required="" id="references" multiple=""  type="file" name="references[]" ></input>
                    <div class="row">
                        <div class="references"  style="margin: 0.4em;"></div>
                    </div>
                    <br> 
                    </div>

                     <div style="margin-top: 1em;" class="col-xl-6 card">
                    <label>International Passport</label>
                    <input required="" type="file" name="passport"  onchange="document.getElementById('passport_1').src = window.URL.createObjectURL(this.files[0])" accept=".png, .jpg, .jpeg"></input>
                    <img id="passport_1" alt="" onerror="this.style.display='none'" width="100" height="100" />
                    <br> 
                    </div>

                    <div style="margin-top: 1em;" class="col-xl-6 card">
                    <label>SS1-SS3 Transcripts(Optional)</label>
                    <input id="transcript_1" multiple="" type="file" name="transcripts[]"></input>
                    <div class="row">
                        <div class="transcript_1" style="margin: 0.4em;"></div>
                    </div>
                    <br> 
                    </div> <br>                        



      </div> <br>                         
                          <button   class="btn btn-success btn-block btn-color" type="submit">
                                    Submit
                                </button>       
                            </form>
               </div>
        </div>
      </div>
    </div>
</div>










<!-- Terms and conditions modal -->
<div  class="modal fade" id="terms_conds">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 align="center" class="modal-title font-weight-bold">Terms and conditions</h4>

                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class="container">
                
                 <p>Last updated: February 19, 2021</p><br>
                <p>Please read these terms and conditions carefully before using Our Service.</p><br>
                <h1  class="font-weight-bold">Interpretation and Definitions</h1><br>
                <h2  class="font-weight-bold">Interpretation</h2><br>
                <p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p><br>
                <h2  class="font-weight-bold">Definitions</h2><br>
                <p>For the purposes of these Terms and Conditions:</p><br>
                <ul style="list-style-type: disc;">
                <li>
                <p><strong>Affiliate</strong> means an entity that controls, is controlled by or is under common control with a party, where &quot;control&quot; means ownership of 50% or more of the shares, equity interest or other securities entitled to vote for election of directors or other managing authority.</p>
                </li><br>
                <li>
                <p><strong>Country</strong> refers to: Nova Scotia,  Canada</p>
                </li><br>
                <li>
                <p><strong>Company</strong> (referred to as either &quot;the Company&quot;, &quot;We&quot;, &quot;Us&quot; or &quot;Our&quot; in this Agreement) refers to Skyned Educational Consults, Halifax.</p>
                </li><br>
                <li>
                <p><strong>Device</strong> means any device that can access the Service such as a computer, a cellphone or a digital tablet.</p>
                </li><br>
                <li>
                <p><strong>Service</strong> refers to the Website.</p>
                </li><br>
                <li>
                <p><strong>Terms and Conditions</strong> (also referred as &quot;Terms&quot;) mean these Terms and Conditions that form the entire agreement between You and the Company regarding the use of the Service. This Terms and Conditions agreement has been created with the help of the <a href="https://www.termsfeed.com/terms-conditions-generator/" target="_blank">Terms and Conditions Generator</a>.</p>
                </li><br>
                <li>
                <p><strong>Third-party Social Media Service</strong> means any services or content (including data, information, products or services) provided by a third-party that may be displayed, included or made available by the Service.</p>
                </li><br>
                <li>
                <p><strong>Website</strong> refers to Skyned Educational Consults, accessible from <a href="www.skynedconsults.com" rel="external nofollow noopener" target="_blank">www.skynedconsults.com</a></p>
                </li><br>
                <li>
                <p><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>
                </li><br>
                </ul>
                <h1  class="font-weight-bold">Acknowledgment</h1><br>
                <p>These are the Terms and Conditions governing the use of this Service and the agreement that operates between You and the Company. These Terms and Conditions set out the rights and obligations of all users regarding the use of the Service.</p><br>
                <p>Your access to and use of the Service is conditioned on Your acceptance of and compliance with these Terms and Conditions. These Terms and Conditions apply to all visitors, users and others who access or use the Service.</p><br>
                <p>By accessing or using the Service You agree to be bound by these Terms and Conditions. If You disagree with any part of these Terms and Conditions then You may not access the Service.</p><br>
                <p>You represent that you are over the age of 18. The Company does not permit those under 18 to use the Service.</p><br>
                <p>Your access to and use of the Service is also conditioned on Your acceptance of and compliance with the Privacy Policy of the Company. Our Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your personal information when You use the Application or the Website and tells You about Your privacy rights and how the law protects You. Please read Our Privacy Policy carefully before using Our Service.</p><br>
                <h1  class="font-weight-bold">Links to Other Websites</h1><br>
                <p>Our Service may contain links to third-party web sites or services that are not owned or controlled by the Company.</p><br>
                <p>The Company has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that the Company shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with the use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>
                <p>We strongly advise You to read the terms and conditions and privacy policies of any third-party web sites or services that You visit.</p><br>
                <h1  class="font-weight-bold">Termination</h1>
                <p>We may terminate or suspend Your access immediately, without prior notice or liability, for any reason whatsoever, including without limitation if You breach these Terms and Conditions.</p><br>
                <p>Upon termination, Your right to use the Service will cease immediately.</p><br>
                <h1  class="font-weight-bold">Limitation of Liability</h1><br>
                <p>Notwithstanding any damages that You might incur, the entire liability of the Company and any of its suppliers under any provision of this Terms and Your exclusive remedy for all of the foregoing shall be limited to the amount actually paid by You through the Service or 100 USD if You haven't purchased anything through the Service.</p><br>
                <p>To the maximum extent permitted by applicable law, in no event shall the Company or its suppliers be liable for any special, incidental, indirect, or consequential damages whatsoever (including, but not limited to, damages for loss of profits, loss of data or other information, for business interruption, for personal injury, loss of privacy arising out of or in any way related to the use of or inability to use the Service, third-party software and/or third-party hardware used with the Service, or otherwise in connection with any provision of this Terms), even if the Company or any supplier has been advised of the possibility of such damages and even if the remedy fails of its essential purpose.</p><br>
                <p>Some states do not allow the exclusion of implied warranties or limitation of liability for incidental or consequential damages, which means that some of the above limitations may not apply. In these states, each party's liability will be limited to the greatest extent permitted by law.</p><br>
                <h1  class="font-weight-bold">&quot;AS IS&quot; and &quot;AS AVAILABLE&quot; Disclaimer</h1><br>
                <p>The Service is provided to You &quot;AS IS&quot; and &quot;AS AVAILABLE&quot; and with all faults and defects without warranty of any kind. To the maximum extent permitted under applicable law, the Company, on its own behalf and on behalf of its Affiliates and its and their respective licensors and service providers, expressly disclaims all warranties, whether express, implied, statutory or otherwise, with respect to the Service, including all implied warranties of merchantability, fitness for a particular purpose, title and non-infringement, and warranties that may arise out of course of dealing, course of performance, usage or trade practice. Without limitation to the foregoing, the Company provides no warranty or undertaking, and makes no representation of any kind that the Service will meet Your requirements, achieve any intended results, be compatible or work with any other software, applications, systems or services, operate without interruption, meet any performance or reliability standards or be error free or that any errors or defects can or will be corrected.</p><br>
                <p>Without limiting the foregoing, neither the Company nor any of the company's provider makes any representation or warranty of any kind, express or implied: (i) as to the operation or availability of the Service, or the information, content, and materials or products included thereon; (ii) that the Service will be uninterrupted or error-free; (iii) as to the accuracy, reliability, or currency of any information or content provided through the Service; or (iv) that the Service, its servers, the content, or e-mails sent from or on behalf of the Company are free of viruses, scripts, trojan horses, worms, malware, timebombs or other harmful components.</p><br>
                <p>Some jurisdictions do not allow the exclusion of certain types of warranties or limitations on applicable statutory rights of a consumer, so some or all of the above exclusions and limitations may not apply to You. But in such a case the exclusions and limitations set forth in this section shall be applied to the greatest extent enforceable under applicable law.</p><br>
                <h1  class="font-weight-bold">Governing Law</h1><br>
                <p>The laws of the Country, excluding its conflicts of law rules, shall govern this Terms and Your use of the Service. Your use of the Application may also be subject to other local, state, national, or international laws.</p>
                <h1  class="font-weight-bold">Disputes Resolution</h1><br>
                <p>If You have any concern or dispute about the Service, You agree to first try to resolve the dispute informally by contacting the Company.</p><br>
                <h1  class="font-weight-bold">For European Union (EU) Users</h1><br>
                <p>If You are a European Union consumer, you will benefit from any mandatory provisions of the law of the country in which you are resident in.</p><br>
                <h1  class="font-weight-bold">United States Legal Compliance</h1><br>
                <p>You represent and warrant that (i) You are not located in a country that is subject to the United States government embargo, or that has been designated by the United States government as a &quot;terrorist supporting&quot; country, and (ii) You are not listed on any United States government list of prohibited or restricted parties.</p>
                <h1  class="font-weight-bold">Severability and Waiver</h1><br>
                <h2  class="font-weight-bold">Severability</h2><br>
                <p>If any provision of these Terms is held to be unenforceable or invalid, such provision will be changed and interpreted to accomplish the objectives of such provision to the greatest extent possible under applicable law and the remaining provisions will continue in full force and effect.</p><br>
                <h2  class="font-weight-bold">Waiver</h2><br>
                <p>Except as provided herein, the failure to exercise a right or to require performance of an obligation under this Terms shall not effect a party's ability to exercise such right or require such performance at any time thereafter nor shall be the waiver of a breach constitute a waiver of any subsequent breach.</p>
                <h1  class="font-weight-bold">Translation Interpretation</h1><br>
                <p>These Terms and Conditions may have been translated if We have made them available to You on our Service.
                You agree that the original English text shall prevail in the case of a dispute.</p><br>
                <h1  class="font-weight-bold">Changes to These Terms and Conditions</h1><br>
                <p>We reserve the right, at Our sole discretion, to modify or replace these Terms at any time. If a revision is material We will make reasonable efforts to provide at least 30 days' notice prior to any new terms taking effect. What constitutes a material change will be determined at Our sole discretion.</p>
                <p>By continuing to access or use Our Service after those revisions become effective, You agree to be bound by the revised terms. If You do not agree to the new terms, in whole or in part, please stop using the website and the Service.</p>
                <h1 class="font-weight-bold">Contact Us</h1<br>
                <p>If you have any questions about these Terms and Conditions, You can contact us:</p><br>
                <ul style="list-style-type: disc">
                <li>By email: admissions@skynedconsults.com</li><br>
                </ul>      
           <form  id="terms_conds_form" method="POST">
              @csrf
          <input  type="hidden" name="application_fee" id="application_fee_form">
            <input type="hidden" name="application_id" id="application_id_form">
                <button class="btn btn-primary btn-block">I agree</button>
           </form>
               </div>
               </div>
        </div>
      </div>
    </div>
















@include('applicants.includes.header')
@include('applicants.includes.navbar')
  <!-- BEGIN: Content -->
<div class="content">
@include('applicants.includes.topbar')


 <div class="overflow-x-auto"> 
 <table class="table"> 
 <thead>
      <tr> 
      <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap"><b>ID</b></th> <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap"><b>Payment ID</b></th>
       <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap"> <b>Amount</b></th> 
       <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap"><b>Payment Mode</b></th>
        <th class="border border-b-2 dark:border-dark-5 whitespace-nowrap"><b>Date</b></th>
       </tr> </thead>
       <tbody>
           	@foreach($payments as $key=>$payment)
            <tr> 
            <td class="border">{{$key+1}}</td>
            <td class="border">{{$payment->payment_id}}</td>
            <td class="border">${{number_format($payment->amount,2)}}</td>
            <td class="border">{{$payment->payment_mode}}</td> 
            <td class="border">{{$payment->created_at}}</td>
            </tr>
            	@endforeach
                      </tbody>
                      </table>
                      </div> 
@include('applicants.includes.footer')
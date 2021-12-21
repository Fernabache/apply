@include('admin.sections.header')
@include('admin.sections.sidebar')
@include('admin.sections.navbar')


<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Payments</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="ni ni-istanbul"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Payments</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
 <div class="container-fluid mt--6">
	 <div class="row justify-content-center">
        <div class=" col-xl-12 ">
          <div class="card">
	
 <div class="">
 <div class="">
 <div class="">
 <div class="">

 <div class ="box-body">
 <div class="">
<div class="col-xl-6" style="margin-top: 1em;">
	<button id="add" class="btn btn-primary">Add New Program</button><hr>
</div>
</div>
</div>
			<div class="table-responsive">
			<table  id="example1" class=" table  table-bordered align-items-center table-flush table-dark" >
		 <thead>
		  <th>Id</th>
          <th>Email</th>
          <th>Payment ID</th>
		  <th>Amount Paid</th>
		  <th>Payment Mode</th>
          <th>Date</th>
		 </thead>
		<tbody>
          @foreach($payments as $key=>$payment)
             
        <tr>
          
          <td>{{ $key+1 }}</td>
          <td>{{ $payment->email }}</td>
          <td>{{ $payment->payment_id}}</td>
          <td>${{number_format($payment->amount,2)}}</td>
          <td>{{$payment->payment_mode}}</td>
          <td>{{$payment->created_at}}</td>
                    
        </tr>
        @endforeach
				</tbody>
      </table>

    
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
@include('admin.sections.footer')







@extends('admin.admin_master')
@section('admin')


@php
    $totalPaid = App\Models\Payment::sum('paid_amount');
    $totalDue = App\Models\Payment::sum('due_amount');
    $totalUsers = App\Models\User::count();
    $totalPurchases = App\Models\Purchase::count();
    $totalSells = App\Models\InvoiceDetail::count(); // Count of all rows in the table
    $totalSellingQty = App\Models\InvoiceDetail::sum('selling_qty'); // Sum of selling_qty column
    $latestInvoices = App\Models\Invoice::latest()->take(5)->get(); // Get the latest 5 invoices
    $latestInvoices = App\Models\Invoice::with(['customer', 'payment'])->latest()->take(5)->get();

@endphp

<div class="page-content">
<div class="container-fluid">

<!-- start page title -->
<div class="row">
<div class="col-12">
<div class="page-title-box d-sm-flex align-items-center justify-content-between">
    <h4 class="mb-sm-0">Dashboard</h4>

    <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div>

</div>
</div>
</div>
<!-- end page title -->

<div class="row">
<div class="col-xl-3 col-md-6">
<div class="card">
    <div class="card-body">
        <div class="d-flex">
            <div class="flex-grow-1">
                <p class="text-truncate font-size-14 mb-2">Total Sales</p>
                <h4 class="mb-2">{{ number_format($totalPaid, 2) }}</h4>
                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>9.23%</span>from previous period</p>
            </div>
            <div class="avatar-sm">
                <span class="avatar-title bg-light text-primary rounded-3">
                    <i class="ri-shopping-cart-2-line font-size-24"></i>  
                </span>
            </div>
        </div>                                            
    </div><!-- end cardbody -->
</div><!-- end card -->
</div><!-- end col -->
<div class="col-xl-3 col-md-6">
<div class="card">
    <div class="card-body">
        <div class="d-flex">
            <div class="flex-grow-1">
                <p class="text-truncate font-size-14 mb-2">New Due</p>
                <h4 class="mb-2">{{ number_format($totalDue, 2) }}</h4>
                <p class="text-muted mb-0"><span class="text-danger fw-bold font-size-12 me-2"><i class="ri-arrow-right-down-line me-1 align-middle"></i>1.09%</span>from previous period</p>
            </div>
            <div class="avatar-sm">
                <span class="avatar-title bg-light text-success rounded-3">
                    <i class="mdi mdi-currency-ngn font-size-24"></i>  
                </span>
            </div>
        </div>                                              
    </div><!-- end cardbody -->
</div><!-- end card -->
</div><!-- end col -->
<div class="col-xl-3 col-md-6">
<div class="card">
    <div class="card-body">
        <div class="d-flex">
            <div class="flex-grow-1">
                <p class="text-truncate font-size-14 mb-2">Total Users</p>
                <h4 class="mb-2">{{$totalUsers}}</h4>
                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>16.2%</span>from previous period</p>
            </div>
            <div class="avatar-sm">
                <span class="avatar-title bg-light text-primary rounded-3">
                    <i class="ri-user-3-line font-size-24"></i>  
                </span>
            </div>
        </div>                                              
    </div><!-- end cardbody -->
</div><!-- end card -->
</div><!-- end col -->
<div class="col-xl-3 col-md-6">
<div class="card">
    <div class="card-body">
        <div class="d-flex">
            <div class="flex-grow-1">
                <p class="text-truncate font-size-14 mb-2">Number of Purchases </p>
                <h4 class="mb-2">{{$totalPurchases}} Items</h4>
                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>11.7%</span>from previous period</p>
            </div>
            <div class="avatar-sm">
                <span class="avatar-title bg-light text-success rounded-3">
                    <i class="mdi mdi-currency-btc font-size-24"></i>  
                </span>
            </div>
        </div>                                              
    </div><!-- end cardbody -->
</div><!-- end card -->
</div><!-- end col -->


<div class="col-xl-3 col-md-6">
<div class="card">
    <div class="card-body">
        <div class="d-flex">
            <div class="flex-grow-1">
                <p class="text-truncate font-size-14 mb-2">Number of Sell  </p>
                <h4 class="mb-2">{{$totalSells}} Items</h4>
                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>11.7%</span>from previous period</p>
            </div>
            <div class="avatar-sm">
                <span class="avatar-title bg-light text-success rounded-3">
                    <i class="mdi mdi-currency-btc font-size-24"></i>  
                </span>
            </div>
        </div>                                              
    </div><!-- end cardbody -->
</div><!-- end card -->
</div><!-- end col -->


<div class="col-xl-3 col-md-6">
<div class="card">
    <div class="card-body">
        <div class="d-flex">
            <div class="flex-grow-1">
                <p class="text-truncate font-size-14 mb-2">Number of Product Sell </p>
                <h4 class="mb-2">{{$totalSellingQty}} Items</h4>
                <p class="text-muted mb-0"><span class="text-success fw-bold font-size-12 me-2"><i class="ri-arrow-right-up-line me-1 align-middle"></i>11.7%</span>from previous period</p>
            </div>
            <div class="avatar-sm">
                <span class="avatar-title bg-light text-success rounded-3">
                    <i class="mdi mdi-currency-btc font-size-24"></i>  
                </span>
            </div>
        </div>                                              
    </div><!-- end cardbody -->
</div><!-- end card -->
</div><!-- end col -->


</div><!-- end row -->

<div class="row">
 

<div class="row">
<div class="col-xl-12">
<div class="card">
    <div class="card-body">
        <div class="dropdown float-end">
            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-dots-vertical"></i>
            </a>
         
        </div>

      <!-- Latest Invoices Section -->
<div class="row">
<div class="col-xl-12">
<div class="card">
    <div class="card-body">
        <h4 class="card-title mb-4">Latest Invoices</h4>
        <div class="table-responsive">
        <table class="table table-centered mb-0 align-middle table-hover table-nowrap">
    <thead class="table-light">
        <tr>
            <th>Invoice ID</th>
            <!-- <th>Customer Name</th> -->
            <th>Amount</th>
            <th>Date</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($latestInvoices as $invoice)
        <tr>
            <td>{{ $invoice->id }}</td>
            <!-- <td>{{ $invoice->customer->name ?? 'N/A' }}</td> -->
            <td>{{ number_format($invoice->payment->paid_amount ?? 0, 2) }}</td>
            <td>{{ $invoice->created_at->format('d-m-Y') }}</td>
            <td>
                @if($invoice->status == 1)
                    <span class="badge bg-success">Paid</span>
                @else
                    <span class="badge bg-warning">Unpaid</span>
                @endif
            </td>
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
@endsection
index.blade.php
Displaying index.blade.php.
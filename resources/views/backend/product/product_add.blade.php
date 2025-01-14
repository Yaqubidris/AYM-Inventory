@extends('admin.admin_master')
@section('admin')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Add Product Page</h4><br><br>

            <form method="post" action="{{ route('product.store') }}" id="myForm">
                @csrf

                <!-- Product Name -->
                <div class="row mb-3">
                    <label for="product-name" class="col-sm-2 col-form-label">Product Name</label>
                    <div class="form-group col-sm-10">
                        <input name="name" class="form-control" type="text" id="product-name">
                    </div>
                </div>

                <!-- Supplier Name -->
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Supplier Name</label>
                    <div class="form-group col-sm-10">
                        <select name="supplier_id" class="form-select">
                            <option value="" disabled selected>Select a Supplier</option>
                            @foreach($supplier as $supp)
                            <option value="{{ $supp->id }}">{{ $supp->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Unit Name -->
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Unit Name</label>
                    <div class="form-group col-sm-10">
                        <select name="unit_id" class="form-select">
                            <option value="" disabled selected>Select a Unit</option>
                            @foreach($unit as $uni)
                            <option value="{{ $uni->id }}">{{ $uni->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div> 

                <!-- Category Name -->
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Category Name</label>
                    <div class="form-group col-sm-10">
                        <select name="category_id" class="form-select">
                            <option value="" disabled selected>Select a Category</option>
                            @foreach($category as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Quantity -->
                

                <!-- Price -->
                               <input type="submit" class="btn btn-info waves-effect waves-light" value="Add Product">
            </form>

        </div>
    </div>
</div>
</div>
</div>
</div>

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: { required: true },
                supplier_id: { required: true },
                unit_id: { required: true },
                category_id: { required: true },
                quantity: { required: true, min: 1 },
                price: { required: true, min: 0 }
            },
            messages: {
                name: { required: 'Please enter the product name' },
                supplier_id: { required: 'Please select a supplier' },
                unit_id: { required: 'Please select a unit' },
                category_id: { required: 'Please select a category' },
                quantity: { required: 'Please enter a quantity', min: 'Quantity should be at least 1' },
                price: { required: 'Please enter a price', min: 'Price cannot be negative' }
            },
            errorElement: 'span', 
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            },
        });
    });
</script>

@endsection

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> Gateway Integration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<script>
 headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
</script>
<body>
    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-3 col-md-offset-6">
                        @if($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Error!</strong> {{ $message }}
                            </div>
                        @endif
                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Success!</strong> {{ $message }}
                            </div>
                        @endif
                        <div class="card card-default">
                            <div class="card-header">
                                 Razorpay Payment Gateway 
                            </div>

                            <div class="card-body text-center">
							<form action="{{ Route('payment') }}" method="POST">
							 @csrf
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_test_WSAbXSPoJM3HVC" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="500" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-order_id=""  // Replace with the order_id generated by you in the backend.
    data-buttontext="Pay Now"
    data-name="Asamicon"
    data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"
    data-image="https://asamicon2023.in/images/logo.png"
    data-prefill.name="Raj"
    data-prefill.email="rajrgpv143@gmail.com"
    data-theme.color="blue"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>
							{{-- <form action="{{ route('payment') }}" method="POST" >
                                    @csrf
                                    <script src="https://checkout.razorpay.com/v1/checkout.js"
                                            data-key="{{ env('RAZOR_KEY') }}"
                                            data-amount="100"
                                            data-buttontext="Pay 1 INR"
                                            data-name="Demo Payment Page"
                                            data-description="CodeHunger"
                                            data-image="{{ asset('/image/nice.png') }}"
                                            data-prefill.name="name"
                                            data-prefill.email="email"
                                            data-theme.color="#212529">
                                    </script>
								
                                </form>---}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
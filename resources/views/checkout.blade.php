@extends('layouts.app')



@section('content')
<!---------------------------------------------------------------------------------->
<style>
    :root{
    --lg-font: 'Kaisei Tokumin', serif;
    --sm-font: 'Poppins', sans-serif;
    --pink: #e5345b;
}
body{
    font-family: var(--sm-font);
}

/* button */
.bg-primary{
    background-color: var(--pink)!important;
}

.btn:not(.nav-btns button){
    background-color: #fff;
    color: rgb(85, 85, 85);
    padding: 10px 28px;
    border-radius: 25px;
    border: 1px solid rgb(85, 85, 85);
}
.btn:not(.nav-btns button):hover{
    background-color: var(--pink);
    color: #fff;
    border-color: var(--pink);
}

/* text color */
.text-primary{
    color: var(--pink)!important;
}

/* navbar */
.navbar{
    -webkit-box-shadow: 0 3px 9px 3px rgba(0, 0, 0, 0.1);
            box-shadow: 0 3px 9px 3px rgba(0, 0, 0, 0.1);
}
.navbar-brand img{
    width: 30px;
}
.navbar-brand span{
    letter-spacing: 2px;
    font-family: var(--lg-font);
}
.nav-link:hover{
    color: var(--pink)!important;
}
.nav-item{
    border-bottom: 0.5px solid rgba(0, 0, 0, 0.05);
}

/* header */
#header{
    background: url("https://smartchoice.pk/blog/wp-content/uploads/2022/01/224B6C4A-0DBA-4EB5-9DCD-5D49BD5B779A.jpeg") top/cover no-repeat;
}
.carousel-inner h1{
    font-size: 60px;
    font-family: var(--lg-font);
}
.carousel-item .btn{
    border-color: #fff!important;
}
.carousel-item .btn:hover{
    border-color: var(--pink)!important;
}

/* title */
.title h2::before{
    position: absolute;
    content: "";
    width: 4px;
    height: 50px;
    background-color: var(--pink);
    left: -20px;
    top: 50%;
    -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
}
</style>
<!---------------------------------------------------------------------------------->
    <!-- header -->
    <header id = "header" class = "vh-100 carousel slide" data-bs-ride = "carousel" style = "padding-top: 104px;">
        <div class = "container h-100 d-flex align-items-center carousel-inner">
            <div class = "text-center carousel-item active">
                <h2 class = "text-capitalize text-primery fw-bold"> PhoneApp متجر</h2>
                <h1 class = "text-uppercase py-2 fw-bold text-white">أهلا بكم في صفحة تأكيد الشراء</h1>
            </div>
            <div class = "text-center carousel-item">
                <h2 class = "text-capitalize fw-bold text-darck">Welcome to the purchase confirmation page</h2>
            </div>
        </div>

        <button class = "carousel-control-prev" type = "button" data-bs-target="#header" data-bs-slide = "prev">
            <span class = "carousel-control-prev-icon"></span>
        </button>
        <button class = "carousel-control-next" type = "button" data-bs-target="#header" data-bs-slide = "next">
            <span class = "carousel-control-next-icon"></span>
        </button>
    </header>
    <!-- end of header -->
</header>
<!----------------------------------------------------------------------------------->


<div class="container">
    <div class="py-5 text-center">
    <a href="{{ route('getlist') }}" class="btn btn-secondary">العودة لقائمة المنتجات</a>
            <br>
            <br>
    </div>
    <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3 sticky-top">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{$phone->Name}}</h6>
                    </div>
                    <span class="text-muted">{{$phone->Price}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Tax</h6>
                    </div>
                    <span class="text-muted">{{$phone->Price*0.15}}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (SAR)</span>
                    <strong>{{ $phone->Price + $phone->Price * 0.15}}
                    </strong>
                </li>
            </ul>
        </div>
        <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Checkout address</h4>
    <form method="POST" action="{{ route('getinvoice')}}">
           @csrf

           <input type="hidden" id="productname" name="productname" value="{{$phone->Name}}">
           <input type="hidden" id="price" name="price" value="{{$phone->Price}}">
           
       <!-- Name input -->
       <div class="form-outline mb-4">
          <input type="text" id="form2Example1" class="form-control" name="name"/>
          <label class="form-label" for="form2Example1">Enter Your Name</label>
       </div>

       <!-- Address input -->
       <div class="form-outline mb-4">
          <input type="text" id="form2Example2" class="form-control" name="address" />
          <label class="form-label" for="form2Example2">Enter Your Address</label>
        </div>
  
        <!-- Email input -->
        <div class="form-outline mb-4 ">
          <input type="email" id="form2Example3" class="form-control" name="email" />
          <label class="form-label" for="form2Example3">Enter Your Email</label>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-danger btn-block">Buy Now</button>
    </form>
        </div>
    </div>
</div>
<!---------------------------------------------------------------------------------->
@endsection
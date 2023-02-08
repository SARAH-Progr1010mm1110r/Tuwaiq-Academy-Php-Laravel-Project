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
    background: url("https://www.wellybox.com/wp-content/uploads/2021/05/Depositphotos_88210670_l-2015-1024x717.jpg") top/cover no-repeat;
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
                <h2 class = "text-capitalize fw-bold text-darck"> PhoneApp متجر</h2>
                <h1 class = "text-uppercase py-2 fw-bold text-danger">شكرا لإختياركم متجرنا</h1>
            </div>
            <div class = "text-center carousel-item">
                <h2 class = "text-capitalize fw-bold text-darck">Thank you for choosing our store</h2>
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



<!--------------------------------------------------------------------------------------------->
<div class="card">
  <div class="card-body mx-4">
    <div class="container">
      <p class="my-5 mx-5" style="font-size: 30px;">Invoice</p>
      <div class="row">
        <ul class="list-unstyled">
          <li class="text-black">Name : {{$inv->CostName}}</li>
          <li class="text-muted mt-1"><span class="text-black">Invoice Number : </span>{{$inv->Id}}</li>
          <li class="text-black mt-1">Date : {{$inv->InvDate}}</li>
        </ul>
        <hr>
        <div class="col-xl-10">
          <p>{{$inv->ProductName}}</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">{{$inv->Price}}</p>
        </div>
        <hr>
      </div>

      <div class="row">
        <div class="col-xl-10">
          <p>Tax</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">{{$inv->Tax}}</p>
        </div>
        <hr>
      </div>

      <div class="row">
        <div class="col-xl-10">
          <p>Total</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">{{$inv->Net}}</p>
        </div>
        <hr>
      </div>


    </div>
  </div>
</div>

@endsection
<!--------------------------------------------------------------------------------------------->





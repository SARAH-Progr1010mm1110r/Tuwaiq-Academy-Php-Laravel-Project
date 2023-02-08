@extends('layouts.app')

@section('content')

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
    background: url(https://m-cdn.phonearena.com/images/article/145355-wide-two_800/Galaxy-S23-and-iPhone-15-Dont-buy-an-Ultra-in-2023-theres-a-better-option.webp?1675784561) top/cover no-repeat;
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

<!-------------------------------------------------------------------------------------------------->
<!-- header -->
<header id = "header" class = "vh-100 carousel slide" data-bs-ride = "carousel" style = "padding-top: 104px;">
        <div class = "container h-100 d-flex align-items-center carousel-inner">
            <div class = "text-center carousel-item active">
                <h2 class = "text-capitalize text-white fw-bold">best collection</h2>
                <h1 class = "text-uppercase py-2 fw-bold text-primary">PhoneApp</h1>
            </div>
            <div class = "text-center carousel-item">
                <h2 class = "text-capitalize text-white fw-bold">best price & offer</h2>
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
<!-------------------------------------------------------------------------------------------------->
<div class="container">
            <div class = "title text-center py-5">
                <h2 class = "position-relative d-inline-block">Products</h2>
            </div>
@foreach($phone as $items)
<div class="mb-5">
    <div class="row">


    <div class="col-sm-4">
            <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-4 ">
                  <img hieght="200" width="200" src="https://media.istockphoto.com/photos/mobile-phone-top-view-with-white-screen-picture-id1161116588?b=1&k=20&m=1161116588&s=612x612&w=0&h=HIf75MYnzs3K_iuY89Gm-Q5vaApqaCS1NVLJAeoTCsc=">
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
           <p class = "text-capitalize mt-3 mb-1">{{$items->Name}}</p>
           <span class = "fw-bold d-block">Price: {{$items->Price}}</span>
           <a href ="{{ route('getlistid',[$items->id]) }}" class = "btn btn-primary mt-3">Add to Cart</a>
        </div>
    </div>
        </div>


        <div class="col-sm-4">
            <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-4 ">
                  <img hieght="200" width="200" src="https://media.istockphoto.com/photos/mobile-phone-top-view-with-white-screen-picture-id1161116588?b=1&k=20&m=1161116588&s=612x612&w=0&h=HIf75MYnzs3K_iuY89Gm-Q5vaApqaCS1NVLJAeoTCsc=">
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
           <p class = "text-capitalize mt-3 mb-1">{{$items->Name}}</p>
           <span class = "fw-bold d-block">Price: {{$items->Price}}</span>
           <a href ="{{ route('getlistid',[$items->id]) }}" class = "btn btn-primary mt-3">Add to Cart</a>
        </div>
    </div>
        </div>


        <div class="col-sm-4">
            <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-4 ">
                  <img hieght="200" width="200" src="https://media.istockphoto.com/photos/mobile-phone-top-view-with-white-screen-picture-id1161116588?b=1&k=20&m=1161116588&s=612x612&w=0&h=HIf75MYnzs3K_iuY89Gm-Q5vaApqaCS1NVLJAeoTCsc=">
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
           <p class = "text-capitalize mt-3 mb-1">{{$items->Name}}</p>
           <span class = "fw-bold d-block">Price: {{$items->Price}}</span>
           <a href ="{{ route('getlistid',[$items->id]) }}" class = "btn btn-primary mt-3">Add to Cart</a>
        </div>
    </div>
        </div>



    </div>
    </div>
@endforeach
</div>

<!-------------------------------------------------------------------------------------------------->


@endsection
<!doctype html>
<html lang="ar" dir="rtl">
  <head>
      <meta charset="utf-8">
          <title>جمعيةالشباب الخيرية</title>

      <link href="{{asset('css/bootstrap.rtl.min.css')}}" rel="stylesheet">
      <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>
      <!-- Custom styles for this template -->
      <link href="{{asset('css/dashboard.rtl.css')}}" rel="stylesheet">
      <link href="{{asset('css/all.css')}}" rel="stylesheet">
      <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet">

      <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>


<style>
  .TableOrBtn{
    background-color: #023e8aad; color:white;

  }
input{
  background-color:rgba(0, 0, 0, 0);
  width: 75%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=text]:focus {
  background-color: #023e8aad;
}
input[type=checkbox] {
width: 2%;}

label{
font-size: 16px;
}
select{
  background-color:rgba(0, 0, 0, 0);

}
textarea{
  background-color:rgba(0, 0, 0, 0);

}
.progressbar{
  counter-reset: step;
}
.progressbar li{
  list-style-type: none;
  float: left;
  width: 33%;
  position: relative;
  text-align: center;
}
.progressbar li::before{
  content: counter(step);
  counter-increment: step;
  width: 45px;
  height: 45px;
  line-height: 45px;
  border: 1px solid #ddd;
  display: block;
  text-align: center;
  margin: 0 auto 10px auto;
  border-radius: 50%;
  background-color: white;
}
.progressbar li::after{
  content: '';
  position: absolute;
  width: 100%;
  height: 1px;
  background-color: #ddd;
  top: 22.5px;
  z-index: -200;
}
.progressbar li:first-child::after{
  content: none;
}
.progressbar li.active{
  color: #023e8a;
}
.progressbar li.active::before{
  border-color: #023e8a;
}
.progressbar li.active + li::after{
  background-color: #023e8a;
}
.progressbar1{
  counter-reset: step;
  margin-left:16%;
}
.progressbar1 li{
  list-style-type: none;
  float: left;
  width: 12%;
  position: relative;
  text-align: center;
}
.progressbar1 li::before{
  content: counter(step);
  counter-increment: step;
  width: 45px;
  height: 45px;
  line-height: 45px;
  border: 1px solid #ddd;
  display: block;
  text-align: center;
  margin: 0 auto 10px auto;
  border-radius: 50%;
  background-color: white;
}
.progressbar1 li::after{
  content: '';
  position: absolute;
  width: 100%;
  height: 1px;
  background-color: #ddd;
  top: 22.5px;
  z-index: -200;
}
.progressbar1 li:first-child::after{
  content: none;
}
.progressbar1 li.active{
  color: #023e8a;
}
.progressbar1 li.active::before{
  border-color: #023e8a;
}
.progressbar1 li.active + li::after{
  background-color: #023e8a;
}
i{
  font-size: 20px;
}
.circle{
  right: 21px;
    border: 1px solid white;
    background-color: #4f6598;
    position: relative;
    border-radius: 50%;
    height: 23px;
    width: 23px;
    text-align: center;
    display: inline-block;
}
  </style>
    
  </head>
  <body>
    

@php
use App\Models\WarrantyRequest;

              $name=Auth::user()->name;
              $Request = WarrantyRequest::all()->where('status', 'none')->count();
              $OnHold = WarrantyRequest::all()->where('status', 'OnHold')->count();


@endphp
  <div class="container-fluid">
    <div class="row">
      
      <nav id="sidebarMenu" class="col-md-3 col-lg-2  bg-light sidebar ">
        <div class="py-4 px-3 mb-4 bg-light">
      <div class="media d-flex  align-items-center">
        <img loading="lazy" src="{{asset('male.png')}}" alt="..." width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        <div class="media-body" style="padding: 4%;">
          <h4 class="m-0" >{{$name}}</h4>
          <p class="font-weight-normal text-muted mb-0">موظف ادخال</p>
        </div>
      </div>
    </div>
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link link1" aria-current="page" href="{{route('Enterer_Page')}}">
              <i class="fas fa-home"></i>
              <span> الصفحة الرئيسية</span> 
            </a>
            
          </li>
          <li class="nav-item">
            <a class="nav-link link2" href="{{ route('warranty_request_page') }}">
              <i class="fas fa-plus-square"></i>
                            <span>اضافة طلب كفالة</span> 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link3" href="{{ route('warranty_requests_display') }}">
              <i class="fas fa-file-archive"></i>
              
            <span>طلبات الكفالة </span>  
            <span class="circle" style="right: 20%">{{$Request}}</span>

            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link3" href="{{ route('OnHold_warranty_request_page') }}">
              <i class="fas fa-file-prescription "></i>
            <span>الطلبات المعلقة</span>  
            <span class="circle">{{$OnHold}}</span>

            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link3" href={{ route('enter_warranty_request_id_for_confirm') }}>
              <i class="fas fa-plus-square"></i>
            <span> اضافة استمارة كشف</span>  
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link3" href={{ route('correct_on_hold') }}>
              <i class="fas fa-tools"></i>
                          <span>تصحيح طلب</span>  
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link3" href={{ route('donor.create') }}>
              <i class="fas fa-plus-square"></i>
            <span>اضافة استمارة يتيم</span>  
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link3" href={{ route('search') }}>
              <i class="fas fa-hand-holding-usd"></i>
            <span>تعديل استمارة اليتيم / دفعات</span>  
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link3" href={{ route('health_help',['flag'=>0]) }}>
              <i class="fas fa-hands-helping"></i>
            <span>مساعدات صحية </span>  
            </a>
          </li>
          <li class="nav-item">
            {{-- <a class="nav-link link3" href={{ route('another_help',['flag'=>0]) }}> --}}
            <span>مساعدات أخرى </span>  
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link3" href={{ route('Show_Enterer_Info') }}>
              <i class="fas fa-user-circle"></i>
            <span>معلوماتي</span>  
            </a>
          </li>
          </ul>
        <ul class="nav flex-column mb-2">
          <li class="nav-item" >
            <a class="nav-link " href={{ route('Enterer_logout') }} style="color: red">
              <i class="fas fa-sign-out-alt"></i>
              <span> تسجيل خروج
              </span>
            </a>
          </li>
        </ul>
      </div>
   </nav>
   <div class="img2" style=" left: 5%;
   margin: auto;
   height: 100%;
   padding: 0;
   position: fixed;
   top: 0;
   width: 75%;
   opacity: 0.15;
   z-index: -1;  ">
     <img src="{{asset('img/logo.png')}}" >
   </div>
    <div class="col-md-3 col-lg-2 contentPage  " style="  width: 85%;  right: 16%; padding:3%; ">
      @yield('content')

  </div>
  
  </div>

  </body>
</html>

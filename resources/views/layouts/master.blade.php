<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewpoint" content="width-device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield("title","BikeShop | จำหน่ายอะไหร่จักรยานออนไลน์")</title>
    <link rel = "stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel = "stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel = "stylesheet" href="{{asset('css/style.css')}}">

   
    <script src = "{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src = "{{asset('js/angular.min.js')}}"></script>
    </head>
    <body >
            <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

            <link rel="stylesheet" href="{{asset('vendor/toastr/toastr.min.css')}}">
            <script src="{{asset('vendor/toastr/toastr.min.js')}}"></script>
            
            <script src="{{asset('vendor/chartjs/chart.min.js')}}"></script>



        <nav class="navbar-default navbar-static-top">
            <div class = "navbar-header">
                <a href="#" class="navbar-brand">BikeShop</a>
            </div>
            <div id ="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('home') }}">หน้าแรก</a></li>
                    @guest
                    @else
                    <li><a href="{{ URL::to('product') }}">ข้อมูลสินค้า</a></li>
                    <li><a href="{{ URL::to('chart') }}">รายงาน</a></li>
                    @endguest
                </ul>
                {{-- Cart ตะกร้าสินค้า --}}
                <ul class="nav navbar-nav navbar-right">
                        @guest
                            <li><a href="{{ route('login') }}"> ล็อกอิน</a></li>
                            <li><a href="{{ route('register') }}"> ลงทะเบียน</a></li>
                        @else
                            <li><a href="#"><i class="fa fa-shopping-cart"></i>
                                ตะกร้า <span class="label label-danger">
                                {!! count(Session::get('cart_items')) !!}
                            </span></a></li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    {{ Auth::user()->name }}<span class="raret"></span>
                                </a>
                                <li><a href="{{ route('logout')}}">ลงชื่อออก</a></li>
                            </li>
                            
                            
                        @endguest
                </ul>
            </div>
        </nav>

        @yield("content")

        @if(session('msg'))
            @if(session('OK'))
                <script>toastr.success("{{session ('msg') }}")</script>
            @else
                <script>toastr.error("{{session ('msg') }}")</script>
        @endif
     @endif

        
        
    </body>
</html>
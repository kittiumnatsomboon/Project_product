<!DOCTYPE html>
<html lang="en">
    <head>
        <title>สมัครสมาชิก</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta name="description" content="">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{URL::TO('css/vendor.css')}}">
        <link rel="stylesheet" type="text/css" href="{{URL::TO('style.css')}}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    </head>
<body>
    @extends('layouts.header')
        @section('content')
    <section class="py-5">
        <div class="container-fluid">

            <div class="bg-secondary py-5 my-5 rounded-5" style="background: url('images/bg-leaves-img-pattern.png') no-repeat;">
                <div class="container my-5">
                    <div class="row">
                    <div class="col-md-6 p-5">
                        <div class="section-header">
                        <h2 class="section-title display-4">สมัครสมาชิกกับระบบเพื่อใช้งานและทำการสั่งซื้อสินค้า</h2>
                        </div>
                        <p>ถ้าหากต้องการสั่งสินค้าต้องทำการสมัครสมาชิกและเข้าสู่ระบบเพื่อดำเนินการสั่งสินค้าต่อไป</p>
                    </div>
                    <div class="col-md-6 p-5">
                        <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">ชื่อ-นามสกุล</label>
                            <input type="text"
                            class="form-control form-control-lg" name="fullname" id="fullname" placeholder="กรุณาระบุชื่อ-นามสกุล">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">วันเดือปีเกิด</label>
                            <input type="text"
                            class="form-control form-control-lg" name="dateofbrith" id="dateofbrith" placeholder="กรุณาระบุวันเดือนปีเกิด">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">เบอร์โทรศัพท์</label>
                            <input type="text"
                            class="form-control form-control-lg" name="telephone" id="telephone" placeholder="กรุณาระบุเบอร์โทรศัพท์">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">บ้านเลขที่</label>
                            <input type="text"
                            class="form-control form-control-lg" name="housenumber" id="housenumber" placeholder="กรุณาระบุบ้านเลขที่">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="abc@mail.com">
                        </div>
                        <div class="form-check form-check-inline mb-3">
                            <label class="form-check-label" for="subscribe">
                            <input class="form-check-input" type="checkbox" id="subscribe" value="subscribe">
                            Subscribe to the newsletter</label>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-dark btn-lg">Submit</button>
                        </div>
                        </form>
                        
                    </div>
                    
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    @endsection


    <script src="{{asset('js/jquery-1.11.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="{{asset('js/dropdown.js')}}"></script>
    <script src="{{asset('js/menu_dropdown.js')}}"></script>
</body>
</html>
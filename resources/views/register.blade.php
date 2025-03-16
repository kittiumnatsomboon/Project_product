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

            <div class="bg-secondary py-5 my-5 rounded-5" style="background: url('{{URL::TO('images/bg-leaves-img-pattern.png')}}') no-repeat;">
                <div class="container my-5">
                    <div class="row">
                        <div class="col-md-6 p-5">
                            <div class="section-header">
                            <h2 class="section-title display-4">สมัครสมาชิกกับระบบเพื่อใช้งานและทำการสั่งซื้อสินค้า</h2>
                            </div>
                            <p>ถ้าหากต้องการสั่งสินค้าต้องทำการสมัครสมาชิกและเข้าสู่ระบบเพื่อดำเนินการสั่งสินค้าต่อไป</p>
                        </div>
                        <div class="col-md-6 p-5">
                            <form action="{{URL::TO('/customer/Signup')}}" method="post">
                                @csrf
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
                                    <label for="name" class="form-label">หมู่ที่</label>
                                    <input type="text"
                                    class="form-control form-control-lg" name="VillageNumber" id="VillageNumber" placeholder="กรุณาระบุหมู่ที่ของบ้าน">
                                </div>
                                <div class="mb-3">

                                    <label for="name" class="form-label">จังหวัด</label>
                                    <select  class="form-select" name="province" id="province" aria-label="Default select example">
                                        <option value="">-- กรุณาเลือกจังหวัด --</option>
                                        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                        <option value="กระบี่">กระบี่</option>
                                        <option value="กาญจนบุรี">กาญจนบุรี</option>
                                        <option value="กาฬสินธุ์">กาฬสินธุ์</option>
                                        <option value="กำแพงเพชร">กำแพงเพชร</option>
                                        <option value="ขอนแก่น">ขอนแก่น</option>
                                        <option value="จันทบุรี">จันทบุรี</option>
                                        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
                                        <option value="ชลบุรี">ชลบุรี</option>
                                        <option value="ชัยนาท">ชัยนาท</option>
                                        <option value="ชัยภูมิ">ชัยภูมิ</option>
                                        <option value="ชุมพร">ชุมพร</option>
                                        <option value="เชียงราย">เชียงราย</option>
                                        <option value="เชียงใหม่">เชียงใหม่</option>
                                        <option value="ตรัง">ตรัง</option>
                                        <option value="ตราด">ตราด</option>
                                        <option value="ตาก">ตาก</option>
                                        <option value="นครนายก">นครนายก</option>
                                        <option value="นครปฐม">นครปฐม</option>
                                        <option value="นครพนม">นครพนม</option>
                                        <option value="นครราชสีมา">นครราชสีมา</option>
                                        <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
                                        <option value="นครสวรรค์">นครสวรรค์</option>
                                        <option value="นนทบุรี">นนทบุรี</option>
                                        <option value="นราธิวาส">นราธิวาส</option>
                                        <option value="น่าน">น่าน</option>
                                        <option value="บึงกาฬ">บึงกาฬ</option>
                                        <option value="บุรีรัมย์">บุรีรัมย์</option>
                                        <option value="ปทุมธานี">ปทุมธานี</option>
                                        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
                                        <option value="ปราจีนบุรี">ปราจีนบุรี</option>
                                        <option value="ปัตตานี">ปัตตานี</option>
                                        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
                                        <option value="พะเยา">พะเยา</option>
                                        <option value="พังงา">พังงา</option>
                                        <option value="พัทลุง">พัทลุง</option>
                                        <option value="พิจิตร">พิจิตร</option>
                                        <option value="พิษณุโลก">พิษณุโลก</option>
                                        <option value="เพชรบุรี">เพชรบุรี</option>
                                        <option value="เพชรบูรณ์">เพชรบูรณ์</option>
                                        <option value="แพร่">แพร่</option>
                                        <option value="ภูเก็ต">ภูเก็ต</option>
                                        <option value="มหาสารคาม">มหาสารคาม</option>
                                        <option value="มุกดาหาร">มุกดาหาร</option>
                                        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
                                        <option value="ยโสธร">ยโสธร</option>
                                        <option value="ยะลา">ยะลา</option>
                                        <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
                                        <option value="ระนอง">ระนอง</option>
                                        <option value="ระยอง">ระยอง</option>
                                        <option value="ราชบุรี">ราชบุรี</option>
                                        <option value="ลพบุรี">ลพบุรี</option>
                                        <option value="ลำปาง">ลำปาง</option>
                                        <option value="ลำพูน">ลำพูน</option>
                                        <option value="เลย">เลย</option>
                                        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                        <option value="สกลนคร">สกลนคร</option>
                                        <option value="สงขลา">สงขลา</option>
                                        <option value="สตูล">สตูล</option>
                                        <option value="สมุทรปราการ">สมุทรปราการ</option>
                                        <option value="สมุทรสงคราม">สมุทรสงคราม</option>
                                        <option value="สมุทรสาคร">สมุทรสาคร</option>
                                        <option value="สระแก้ว">สระแก้ว</option>
                                        <option value="สระบุรี">สระบุรี</option>
                                        <option value="สิงห์บุรี">สิงห์บุรี</option>
                                        <option value="สุโขทัย">สุโขทัย</option>
                                        <option value="สุพรรณบุรี">สุพรรณบุรี</option>
                                        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                                        <option value="สุรินทร์">สุรินทร์</option>
                                        <option value="หนองคาย">หนองคาย</option>
                                        <option value="หนองบัวลำภู">หนองบัวลำภู</option>
                                        <option value="อำนาจเจริญ">อำนาจเจริญ</option>
                                        <option value="อุดรธานี">อุดรธานี</option>
                                        <option value="อุตรดิตถ์">อุตรดิตถ์</option>
                                        <option value="อุทัยธานี">อุทัยธานี</option>
                                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                                        <option value="อ่างทอง">อ่างทอง</option>
                                    </select>   
                                </div>
                                <div class="mb-3">

                                    <label for="name" class="form-label">ซอย</label>
                                    <input type="text"
                                    class="form-control form-control-lg" name="Alley" id="Alley" placeholder="กรุณาระบุหมู่ที่ของบ้าน">
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">ถนน</label>
                                    <input type="text"
                                    class="form-control form-control-lg" name="Road" id="Road" placeholder="กรุณาระบุถนนสายอะไรหรือเส้นอะไร">
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">ตำบล/แขวง</label>
                                    <select  class="form-select" name="Subdistrict" id="Sub-district" aria-label="Default select example">
                                        <option value="">-- กรุณาแขวงหรือตำบล --</option>
                                    </select>
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">อำเภอ/เขต</label>
                                    <select  class="form-select" name="District" id="District" aria-label="Default select example">
                                        <option value="0" id="defualt_district">-- กรุณาเขตและอำเภอ --</option>
                                        <option value="" id="option_district"></option>
                                        <option value="" id="option_district_2"></option>
                                        <option value="" id="option_district_3"></option>
                                        <option value="" id="option_district_4"></option>
                                        <option value="" id="option_district_5"></option>
                                        <option value="" id="option_district_6"></option>
                                        <option value="" id="option_district_7"></option>
                                        <option value="" id="option_district_8"></option>
                                        <option value="" id="option_district_9"></option>
                                    </select>
                                    
                                </div>
                                
                                <div class="mb-3">
                                    <label for="" class="form-label">รหัสไปษรณี</label>
                                    <select  class="form-select" name="PostalCode" id="PostalCode" aria-label="Default select example">
                                        <option value="">--กรุณาเลือกรหัสไปษรณี--</option>
                                    </select> 
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="example@mail.com">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="กรุณาระบุรหัสผ่าน">
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">confirm password</label>
                                    <input type="password" class="form-control form-control-lg" name="confirmpassword" id="confirm password" placeholder="กรุณาระบุรหัสผ่านอีกครั้ง">
                                </div>
                                <div class="form-check form-check-inline mb-3">
                                    <label class="form-check-label" for="subscribe">
                                    <input class="form-check-input" type="checkbox" id="subscribe" value="subscribe">
                                    ยืนยันให้ทำการจัดเก็บข้อมูลข้างต้น</label>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-dark btn-lg">สมัครสมาชิก</button>
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
    <script src="{{asset('js/address-select.js')}}"></script>
</body>
</html>
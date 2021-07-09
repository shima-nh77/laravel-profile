@extends('layouts.master')

@section('content')
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <ul>
                        <li><a href="index.html">خانه</a></li>
                        <li>حساب کاربری</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!-- my account start  -->
<div class="account_page_bg">
    <div class="container">
        <section class="main_content_area">
            <div class="account_dashboard">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button">
                            <ul role="tablist" class="nav flex-column dashboard-list">
                                <li><img src="/../assets/iconfinder_Jee-61_2180756.png" alt=""
                                         id="profilepic"></li>
                                <br>

                                <span class="UserName" style="text-align: center;">{{$user->name}} {{$user->last_Name}}</span>
                                <span class="phoneNumber" style="text-align: center;">{{$user->mobile}}</span>
                                <span style="text-align: center;">کل سفارشات:<span class="ordersCount" style="color: #c40316;">5</span></span>

                                <li><a href="#dashboard" data-toggle="tab" class="nav-link active">
                                        <i class=" zmdi zmdi-account-circle myicon"></i> اطلاعات حساب کاربری</a></li>
                                <li><a href="#changepassword" data-toggle="tab" class="nav-link">
                                        <i class=" zmdi zmdi-lock myicon"></i> تغییر رمز عبور</a></li>
                                <li> <a href="#orders" data-toggle="tab" class="nav-link">
                                        <i class=" zmdi zmdi-shopping-cart myicon"></i> سفارش های من</a></li>
                                <li><a href="#addresses" data-toggle="tab" class="nav-link">
                                        <i class=" zmdi zmdi-account-calendar myicon"></i>آدرس های من</a></li>
                                <li><a href="#favoritessection" data-toggle="tab" class="nav-link">
                                        <i class=" zmdi zmdi-favorite myicon"></i> علاقه مندی های من</a></li>
                                <li><a href="{{route('login')}}" class="nav-link"><i class=" zmdi zmdi-sign-in">
                                        </i> خروج</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->

                        <div class="tab-content dashboard_content">

                            <!-- صفحه ی اطلاعات حساب کاربری -->
                            <div class="tab-pane fade show active" id="dashboard">
                                <h3>اطلاعات حساب کاربری </h3>
                                <div class="row align-items-center"></div>
                                <!-- فرم اطلاعات حساب کاربری -->
{{--                                <form action="{{route('profileUpdate',$user)}}" method="POST">--}}
{{--                                    @csrf--}}
                                    <div class="row ">
                                        <div class="col-lg-6">
                                            <div class="user-info-box">
                                                <div class="user-info-title" style="color: darkgray;">نام و نام خانوادگی:
                                                    <span id="editBD" class="" >
                                                        <i class="fa fa-edit" style="font-size: 20px; cursor: pointer"
                                                           data-toggle="modal" data-target="#myModalName"></i>
                                                    </span>
                                                </div>
                                                <div class="user-info-data">{{$user->name}} {{$user->last_Name}}</div>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="user-info-box">
                                                <div class="user-info-title" style="color: darkgray;">شماره تماس:
                                                    <span id="editBD" class="">
                                                        <i class="fa fa-edit" style="font-size: 20px;cursor: pointer"
                                                           data-toggle="modal" data-target="#myModalNumber"></i>
                                                    </span>
                                                </div>
                                                <div class="user-info-data">{{$user->mobile}} </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-lg-6">
                                            <div class="user-info-box">
                                                <div class="user-info-title" style="color: darkgray;">ایمیل:
                                                     <span id="editBD" class="">
                                                        <i class="fa fa-edit" style="font-size: 20px; cursor: pointer"
                                                           data-toggle="modal" data-target="#myModalEmail"></i>
                                                    </span>
                                                    </div>
                                                <div class="user-info-data">{{$user->email}} </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                                <div class="user-info-box">
                                                    <div class="user-info-title" style="color: darkgray;">تاریخ تولد:
                                                         <span id="editBD" class="">
                                                        <i class="fa fa-edit" style="font-size: 20px;"
                                                           data-toggle="modal" data-target="#myModalBirthDate"></i>
                                                    </span></div>
                                                    <div class="user-info-data">{{$user->BirthDay}}/
                                                        {{$user->BirthYear}}/{{$user->BirthMonth}}</div>
                                                </div>
                                            </div>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-lg-6">
                                            <div class="user-info-box">
                                                <div class="user-info-title" style="color: darkgray;">شماره شبا:
                                                    <span id="editBD" class="">
                                                        <i class="fa fa-edit" style="font-size: 20px; cursor: pointer"
                                                           data-toggle="modal" data-target="#myModalSheba"></i>
                                                    </span>
                                                </div>
                                                <div class="user-info-data">{{$user->sheba}} </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="user-info-box">
                                                <div class="user-info-title" style="color: darkgray;"> شماره کارت:
                                                     <span id="editBD" class="">
                                                        <i class="fa fa-edit" style="font-size: 20px;"></i>
                                                    </span></div>
                                                <div class="user-info-data">{{$user->email}} </div>
                                            </div>
                                        </div>
                                    </div>

                            <div id="myModalName" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">نام و نام خانوادگی</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('profileUpdate',$user)}}" method="POST">
                                                        @csrf
                                                        <div class="form-group focused">
                                                            <label class="form-control-label" for="input-name">نام <span style="color: #c40316;">*</span></label>
                                                            <input name="name" type="text" id="input-name" class="form-control form-control-alternative"  value="{{$user->name}}">
                                                            <label class="form-control-label mt-2" for="input-lastName">نام خانوداگی <span style="color: #c40316;">*</span></label>
                                                            <input name="lastName" type="text" id="input-lastName" class="form-control form-control-alternative"  value="{{$user->last_Name}}">
                                                        </div>
                                                        <div class="save_button primary_btn default_button" style="padding: 10px;">
                                                            <button type="submit">ذخیره</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                            </div>


                            <div id="myModalEmail" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">ایمیل</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('profileUpdate',$user)}}" method="POST">
                                                @csrf
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-email">آدرس ایمیل<span style="color: #c40316;">*</span></label>
                                                <input name="email" type="email" id="input-email" class="form-control form-control-alternative"
                                                       placeholder="ایمیل" value="{{$user->email}}">
                                            </div>
                                             <div class="save_button primary_btn default_button" style="padding: 10px;">
                                                <button type="submit">ذخیره</button>
                                             </div>
                                            </form>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           <div id="myModalNumber" class="modal fade" role="dialog">
                               <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">شماره تلفن</h4>
                                                </div>
                                                   <div class="modal-body">
                                                    <form action="{{route('profileUpdate',$user)}}" method="POST">--}}
                                                        @csrf
                                                        <div class="form-group focused">
                                                            <label class="form-control-label" for="input-phone">شماره تلفن<span style="color: #c40316;">*</span></label>
                                                            <input name="phone" type="text" id="input-phone" class="form-control form-control-alternative" value="{{$user->mobile}}">
                                                        </div>
                                                            <div class="save_button primary_btn default_button" style="padding: 10px;">
                                                                <button type="submit">ذخیره</button>
                                                            </div>
                                                    </form>
                                                   </div>
                                               </div>
                                            </div>
                               </div>
                           </div>

                        <div id="myModalBirthDate" class="modal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">تاریخ تولد</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('profileUpdate',$user)}}" method="POST">
                                            @csrf
                                        <div class="form-group focused">
                                            <div class="col-md-12 myRow" >
                                                <div class="row">
                                                    <select name="birthday" type="select" id="birthday"  class="form-control col-md-3" >
                                                        <option value="" selected >روز</option>
                                                        @foreach(range(1,31) as $x)
                                                            <option @if($user->BirthDay == $x) selected @endif value="{{$x}}">{{$x}}</option>
                                                        @endforeach
                                                    </select>
                                                    <select name="birthmonth" type="select" id="birthmonth" class="form-control col-md-3">
                                                                                                                            <option value="" disabled  >{{$user->BirthMonth}}</option>
                                                                                                                            <option value='01'>فروردین</option>
                                                                                                                            <option value='02'>اردیبهشت</option>
                                                                                                                            <option value='03'>خرداد</option>
                                                                                                                            <option value='04'>تیر</option>
                                                                                                                            <option value='05'>مرداد</option>
                                                                                                                            <option value='06'>شهریور</option>
                                                                                                                            <option value='07'>مهر</option>
                                                                                                                            <option value='08'>آبان</option>
                                                                                                                            <option value='09'>آذر</option>
                                                                                                                            <option value='10'>دی</option>
                                                                                                                            <option value='11'>بهمن</option>
                                                                                                                            <option value='12'>اسفند</option>
                                                                                                                        </select>
                                                    <select name="birthyear" id="birthyear" class="form-control col-md-3"  type="select">
                                                        <option value="" selected>سال</option>
                                                        @foreach(range(1300 ,1400 ) as $x)
                                                                                                                                <option @if($user->BirthYear == $x) selected @endif value="{{ $x }}">{{ $x }}</option>
                                                                                                                            @endforeach

                                                        {{-- @for ($x='1320'; $x <= $birthyear; $x++)
                                                             <option value="{{ $x }}">{{ $x }}</option>
                                                                  @endfor--}}
                                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="save_button primary_btn default_button" style="padding: 10px;">
                                                <button type="submit">ذخیره</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                           </div>
                        </div>

                         <div id="myModalSheba" class="modal fade" role="dialog">
                             <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">شماره شبا</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group focused">
                                                        <label class="form-control-label" for="input-sheba">شماره شبا<span style="color: #c40316;">*</span></label>
                                                        <input name="sheba" type="text" id="input-sheba" class="form-control form-control-alternative" value="{{$user->sheba}}">
                                                        <div class="save_button primary_btn default_button" style="padding: 10px;">
                                                            <button type="submit">ذخیره</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                           </div>

                          <br><br><br>
                              <span class="custom_checkbox ">
                                  <label><input type="checkbox" value="1"  name="pish"  @if($user->pish == 1) checked @endif > دریافت پیشنهادات
                                        ویژه</label>
                              </span>
                          <br><br>
                              <span class="custom_checkbox">
                                  <label><input type="checkbox" value="1" name="khabar" @if($user->khabar == 1) checked @endif> عضویت در خبرنامه
                                        ما</label>
                              </span>

                                </form>
                            </div>

                            <!-- صفحه ی تغییر رمز عبور -->
                            <div class="tab-pane fade" id="changepassword">
                                <h3>تغییر رمز عبور </h3>
                                <form action="" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group ">
                                                <label class="form-control-label" for="input-pass">رمز عبور جدید</label>
                                                <input name="newpass" type="password" class="form-control form-control-alternative"
                                                       id="input-pass" placeholder="******">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group ">
                                                <label class="form-control-label" for="input-pass">تکرار رمز عبور جدید
                                                </label>
                                                <input name="newpassagain" type="password" class="form-control form-control-alternative"
                                                       id="input-pass" placeholder="******">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="save_button primary_btn default_button">
                                        <button type="submit">ذخیره</button>
                                    </div>
                                </form>
                            </div>

                            <!-- صفحه ی آدرس ها -->
                            <div class="tab-pane fade" id="addresses">
                                <h3>آدرس ها <span>(آدرس محل تحویل سفارش خود را انتخاب و یا آدرس جدید اضافه کنید)</span></h3>
                                <!-- آدرس موجود -->
                                <div class="currentAddress">
                                    <ul id="addressLisBox">
                                        <li class="active" id="existsAddress">
                                            <label>
                                                <input id="userAddress" data-address-id="150919" type="radio"name="userAddress" checked>
                                                <div style="padding: 5px;">
                                                    <div>
                                                        <span class="title"> گیرنده: </span>
                                                        <b><span class="value">علی رضایی</span></b>
                                                    </div>

                                                    <div>
                                                            <span>
                                                                گیشا-خ1400-پ1400-واحد300
                                                            </span>
                                                    </div>

                                                    <div class="postal-code">
                                                        <span>کد پستی: </span>
                                                        <span>1447686565</span>
                                                    </div>

                                                    <div class="phone">
                                                        <span>تلفن:</span>
                                                        <span>09102020200</span>
                                                    </div>
                                                </div>

                                                <div class="address-options" style="padding: 5px;">
                                                    <div>
                                                            <span class="delivery_btn" >

                                                                تحویل به این
                                                                آدرس
                                                            </span>
                                                    </div>

                                                </div>
                                            </label>
                                        </li>



                                    </ul>
                                </div>
                                <button class="btn-default addingaddressbtn" >افزودن+</button>

                                <!-- آدرس جدید -->
                                <form action="" method="POST">
                                    <div class="addresstable">
                                        <div class="row tableaddressrow">
                                            <div class="col-lg-6">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="ostan">استان  <span style="color: #c40316;">*</span></label>
                                                    <select  type="select" name="ostan" required id="ostan" class="form-control form-control-alternative" >
                                                        <option value="">انتخاب استان </option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="city">شهر <span style="color: #c40316;">*</span></label>
                                                    <select name="city" id="city" class="form-control form-control-alternative">
                                                        <option value="">انتخاب شهر</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row tableaddressrow">
                                            <div class="col-lg-8">
                                                <div class="form-group focused">
                                                    <label class="form-control-label" for="input-address">    پستی آدرس <span style="color: #c40316;">*</span></label>
                                                    <input name="exactAddress" type="text" id="input-address"
                                                           class="form-control form-control-alternative" placeholder="  را به صورت کامل وارد کنید آدرس">
                                                </div>
                                            </div>


                                            <div class="col-lg-4">
                                                <div class="form-group focused">
                                                    <label class="form-control-label"
                                                           for="input-postalcod">کدپستی <span style="color: #c40316;">*</span></label>
                                                    <input name="postalCode" type="text" id="input-postalcod" class="form-control form-control-alternative" placeholder="کدپستی">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="save_button primary_btn default_button tableaddressrow">
                                            <button type="submit">ذخیره</button>
                                        </div>
                                    </div>

                                </form> </div>


                            <!-- صفحه ی سفارشات -->
                            <div class="tab-pane fade" id="orders">
                                <h3>سفارشات</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="tab">
                                            <button class="tablinks" onclick="openTab(event, 'done')" id="defaultOpen">تحویل شده</button>
                                            <button class="tablinks" onclick="openTab(event, 'processing')">در حال پردازش</button>
                                            <button class="tablinks" onclick="openTab(event, 'returned')">مرجوع شده</button>
                                        </div>
                                        <hr>

                                        <!-- جدول سفارشات تکمیل شده -->
                                        <div id="done" class="tabcontent">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr class="tblOrderRow">
                                                        <th>شماره سفارش</th>
                                                        <th> تاریخ سفارش</th>
                                                        <th>مبلغ کل سفارش</th>
                                                        <th>وضعیت پرداخت</th>
                                                        <th>جزئیات سفارش</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="doneorders">
                                                    <tr>
                                                        <td>MO99-82403</td>
                                                        <td>1399/11/19</td>
                                                        <td>132,150 تومان</td>
                                                        <td> پرداخت شده</td>
                                                        <td><a class=" orderdetails" >مشاهده <span><i class=" zmdi zmdi-caret-down-circle" ></i></span></a></td>
                                                    </tr>
                                                    <!-- جدول مشاهده جزییات -->
                                                    <tr class="tblorderdetail" style="display: none;">
                                                        <td colspan="5">
                                                            <div class="subitems">
                                                                <table class="tblOrderNested" cellspacing="0">
                                                                    <thead class="tblOrderNestedHead">
                                                                    <tr class="tblOrderNestedRowHead">
                                                                        <th class="tblOrderNestedColHead text-center"> تصویر محصول</th>
                                                                        <th class="tblOrderNestedColHead text-center">نام محصول</th>
                                                                        <th class="tblOrderNestedColHead text-center">تعداد</th>
                                                                        <th class="tblOrderNestedColHead text-center">تخفیف</th>
                                                                        <th class="tblOrderNestedColHead text-center">قیمت واحد</th>
                                                                        <th class="tblOrderNestedColHead text-center">قیمت کل</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody id="detailstable">
                                                                    <tr class="tblOrderNestedRow">
                                                                        <td class="tblOrderNestedCol text-center">
                                                                            <div class="pic">
                                                                                <img src="assets/img/product/product14.jpg"  alt="iphone x mobilephone" title="iphone x mobilephone">
                                                                            </div>
                                                                        </td>

                                                                        <td class="tblOrderNestedCol tblOrderNestedPrdName text-right">
                                                                            <div class="desc" style="margin-top: 39px;">
                                                                                <span>گوشی موبایل iphone x</span>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <div style="margin-top: 54px;"> <span class="count">1</span></div>

                                                                        </td>
                                                                        <td class="tblOrderNestedCol text-center">
                                                                            <div class="discount" style="margin-top: 54px;">
                                                                                <b class="price">100,000</b>
                                                                            </div>
                                                                        </td>
                                                                        <td
                                                                            class="tblOrderNestedCol text-center">
                                                                            <div class="unitprice" style="margin-top: 54px;">
                                                                                <b class="price">20,000,000</b>
                                                                            </div>
                                                                        </td>
                                                                        <td
                                                                            class="tblOrderNestedCol text-center">
                                                                            <div class="totalprice" style="margin-top: 54px;">
                                                                                <b class="price">1,900,000</b>
                                                                                <span class="currency">تومان</span>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="tblOrderNestedDeliveryTitle">
                                                                        <td colspan="6" style="text-align: right;">  اطلاعات تکمیلی
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="tblOrderNestedDelivery">
                                                                        <td colspan="2" style="text-align: right;">
                                                                            <span >تحویل گیرنده:</span>
                                                                            <span >علی رضایی</span>
                                                                        </td>
                                                                        <td colspan="2" style="text-align: right;">
                                                                            <span >تلفن همراه:</span>
                                                                            <span>09102020200</span>
                                                                        </td>
                                                                        <td colspan="2" style="text-align: right;">
                                                                            <span >کد پستی:</span>
                                                                            <span >1447686565</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="tblOrderNestedDelivery">
                                                                        <td colspan="6" style="text-align: right;">
                                                                            <span >آدرس:</span>
                                                                            <span >گیشا-خ1400-پ1400-واحد300</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr class="tblOrderNestedDelivery">
                                                                        <td colspan="3" style="text-align: right;">
                                                                            <span style="text-align: right;">روش ارسال:</span>
                                                                            <span style="text-align: right;">پیک موتوری</span>
                                                                        </td>

                                                                        <td colspan="3" style="text-align: right;">
                                                                            <span>هزینه ارسال:</span>
                                                                            <span>0</span>
                                                                        </td>
                                                                    </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <!-- ادامه ی سفارشات تکمیل شده -->
                                                    <tr>
                                                        <td>MO99-82403</td>
                                                        <td>1399/11/19</td>
                                                        <td>132,150 تومان</td>
                                                        <td> پرداخت شده</td>
                                                        <td><a >مشاهده <span><i class=" zmdi zmdi-caret-down-circle" ></i></span></a></td></td>

                                                    </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- جدول سفارشات در حال پردازش -->
                                        <div id="processing" class="tabcontent">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr  class="tblOrderRow">

                                                        <th>شماره سفارش</th>
                                                        <th> تاریخ سفارش</th>
                                                        <th>مبلغ کل سفارش</th>
                                                        <th>وضعیت پرداخت</th>
                                                        <th>جزئیات سفارش</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody  id="processingorders">
                                                    <tr>
                                                        <td>MO99-82403</td>
                                                        <td>1399/11/19</td>
                                                        <td>132,150 تومان</td>
                                                        <td> پرداخت شده</td>
                                                        <td><a class=" orderdetails" >مشاهده <span><i class=" zmdi zmdi-caret-down-circle" ></i></span></a></td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>MO99-82403</td>
                                                        <td>1399/11/19</td>
                                                        <td>132,150 تومان</td>
                                                        <td> پرداخت شده</td>
                                                        <td><a class=" orderdetails" >مشاهده <span><i class=" zmdi zmdi-caret-down-circle" ></i></span></a></td></td>

                                                    </tr>
                                                    <tr>
                                                        <td>MO99-82403</td>
                                                        <td>1399/11/19</td>
                                                        <td>132,150 تومان</td>
                                                        <td> پرداخت شده</td>
                                                        <td><a class=" orderdetails" >مشاهده <span><i class=" zmdi zmdi-caret-down-circle" ></i></span></a></td></td>

                                                    </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <!-- جدول سفارشات مرجوع شده -->
                                        <div id="returned" class="tabcontent">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr  class="tblOrderRow">
                                                        <th>شماره سفارش</th>
                                                        <th> تاریخ سفارش</th>
                                                        <th>مبلغ کل سفارش</th>
                                                        <th>وضعیت پرداخت</th>
                                                        <th>جزئیات سفارش</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody  id="returnedorders">
                                                    <tr>
                                                        <td>MO99-82403</td>
                                                        <td>1399/11/19</td>
                                                        <td>132,150 تومان</td>
                                                        <td> پرداخت شده</td>
                                                        <td><a class=" orderdetails" >مشاهده <span><i class=" zmdi zmdi-caret-down-circle" ></i></span></a></td></td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- صفحه ی علاقه مندی ها -->
                            <div class="tab-pane fade" id="favoritessection">
                                <h3>علاقه مندی ها</h3>
                                <div class="list-group">
                                    <div class="list-group-item list-group-item-action">
                                        <a href="file:///C:/Users/lenovo/Desktop/antomi/Theme/product-countdown.html">
                                            <img class="favoritegoods" src="assets/img/s-product/product.jpg" alt=""></a>
                                        <a href="file:///C:/Users/lenovo/Desktop/antomi/Theme/product-countdown.html"
                                        >ماشین ظرف شویی سامسونگ DM2019</a>
                                    </div>
                                    <div class="list-group-item list-group-item-action">
                                        <a href="file:///C:/Users/lenovo/Desktop/antomi/Theme/product-countdown.html">
                                            <img class="favoritegoods" src="assets/img/s-product/product.jpg" alt=""></a>
                                        <a href="file:///C:/Users/lenovo/Desktop/antomi/Theme/product-countdown.html"
                                        >ماشین ظرف شویی سامسونگ DM2019</a>
                                    </div>
                                    <div class="list-group-item list-group-item-action">
                                        <a href="file:///C:/Users/lenovo/Desktop/antomi/Theme/product-countdown.html">
                                            <img class="favoritegoods" src="assets/img/s-product/product.jpg" alt=""></a>
                                        <a href="file:///C:/Users/lenovo/Desktop/antomi/Theme/product-countdown.html"
                                        >ماشین ظرف شویی سامسونگ DM2019</a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- my account end   -->





@endsection

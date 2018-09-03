@extends('layout.master')
@section('content')
    <div class="right_col" role="main">
        @include('layout.applications')
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>مشاهده اسناد</h3>
                </div>
                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="جست و جو برای...">
                            <span class="input-group-btn">
                        <button class="btn btn-default" type="button">برو!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>اسناد
                                <small>ثبت و مشاهده اسناد</small>
                            </h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br/>
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                <div class="row">
                                    <div class="col-md-1 "> <button type="submit" class="btn btn-success" ><i class="fa fa-refresh"></i> بازسازی</button></div>
                                    <div class="col-md-1 "> <button type="submit" class="btn btn-success" style="margin-right: 12px"><i class="fa fa-plus-square "></i>مجموع</button></div>
                                    <div class="col-md-1 "> <button type="submit" class="btn btn-success" style="margin-right: 10px"><i class=" fa fa-sort-amount-desc"></i> ترتیب</button></div>
                                    <div class="col-md-1 " ><button type="submit" class="btn btn-success" style="margin-right: 10px"><i class="fa fa-table"></i> جدول</button></div>
                                    <div class="col-md-1 "> <button type="submit" class="btn btn-success" style="margin-right: 10px"><i class="fa fa-paste"></i> الحاق</button></div>
                                    <div class="col-md-1 "> <button type="submit" class="btn btn-success" style="margin-right: 10px"><i class="fa fa-copy"></i>کپی</button></div>
                                    <div class="col-md-1 "> <button type="submit" class="btn btn-success" style="margin-left: 15px"><i class="fa fa-copy"></i> کپی</button></div>
                                    <a href="#" class="btn btn-success" style="margin-right: 10px" data-toggle="modal" data-target="#mymodal2"><i class="fa fa-print"></i>  چاپ </a>
                                    <div class="col-md-1 "> <button type="submit" class="btn btn-success" style="margin-left: 15px"><i class="fa fa-search"></i>  جستجو </button></div>
                                    <a class="btn btn-success" title="ایجاد" data-toggle="modal" id="m" data-target="#Create" style="margin-right: 20px"><i class="fa fa-plus" ></i> ایجاد  </a>
                                </div>
                                <hr>
                                <div >
                                    <div class="row">
                                        <ul style="list-style-type: none;" class="col-md-12">
                                            <li  style="float: right ; margin-right: 10px" >عطف: <label>123</label></li>
                                            <li  style="float: right; margin-right: 20px">تاریخ <label>5424</label></li>
                                            <li  style="float: right; margin-right: 30px">تعداد پیوست<label>668565</label></li>
                                            <li  style="float: right ; margin-right: 40px" >شرح پیوست <label>123</label></li>
                                        </ul>
                                        <ul style="list-style-type: none;" class="col-md-12">
                                            <li  style="float: right ; margin-left: 60px ;margin-top: 30px">شماره: <label>123</label></li>
                                            <li  style="float: right; margin-left: 30px;margin-top: 30px">شعبه: <label>5424</label></li>
                                            <li  style="float: right; margin-left: 30px;margin-top: 30px">موضوع:<label>668565</label></li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <fieldset>
                                    <legend> </legend>
                                    <div class="row"  style="border: #0D3349  " >
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr style=" border-bottom: #0b97c4 solid 3px " >
                                                    <th  width="40px" >
                                                        رج
                                                    </th>
                                                    <th width="80px">
                                                        معین
                                                    </th>
                                                    <th width="80px">
                                                        تفصیل1
                                                    </th>
                                                    <th width="80px">
                                                        تفصیل 2
                                                    </th>
                                                    <th width="80px">
                                                        تفصیل 3
                                                    </th>
                                                    <th width="80px">
                                                        شرح
                                                    </th>
                                                    <th width="80px">
                                                        بدهکار
                                                    </th>
                                                    <th width="80px">
                                                        بستانکار
                                                    </th>
                                                    <th width="80px">
                                                        پیوست
                                                    </th>
                                                    <th width="80px">
                                                        شماره
                                                    </th>
                                                    <th width="80px">
                                                        تاریخ
                                                    </th>
                                                    <th width="80px">
                                                        عملیات
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td  width="40px">
                                                        1
                                                    </td>
                                                    <td width="80px">
                                                        10501
                                                    </td>
                                                    <td width="80px">
                                                        20312
                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">
                                                        10درصد بایت
                                                    </td>
                                                    <td width="80px">
                                                        1,800,00
                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">
                                                    </td>
                                                    <td width="150px">
                                                        <a href="#" class="btn btn-danger" title="حذف" ><i class="fa fa-trash"></i>  </a>
                                                        <a href="#" class="btn btn-info" title="ویرایش" data-toggle="modal" data-target="#mymodal"><i class="fa fa-edit"></i>  </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td  width="40px">
                                                        2
                                                    </td>
                                                    <td width="80px">
                                                        60101
                                                    </td>
                                                    <td width="80px">
                                                        30001
                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">
                                                        10درصد بایت
                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">
                                                        500,0000
                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">
                                                        <a href="#" class="btn btn-danger" title="حذف"><i class="fa fa-trash"></i>  </a>
                                                        <a href="#" class="btn btn-info" title="ویرایش"  data-toggle="modal" data-target="#mymodal"><i class="fa fa-edit"></i>  </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td  width="40px">
                                                        3
                                                    </td>
                                                    <td width="80px">
                                                        60101
                                                    </td>
                                                    <td width="80px">
                                                        30002
                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">
                                                        10درصد بایت
                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">
                                                        400,000
                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">
                                                        <a href="#" class="btn btn-danger" title="حذف"><i class="fa fa-trash"></i>  </a>
                                                        <a href="#" class="btn btn-info" title="ایجاد"  data-toggle="modal" data-target="#mymodal"><i class="fa fa-edit"></i>  </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td  width="40px">
                                                        4
                                                    </td>
                                                    <td width="80px">
                                                        60101
                                                    </td>
                                                    <td width="80px">
                                                        30003
                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">
                                                        10درصد بایت
                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">
                                                        400,000
                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">
                                                        <a href="#" class="btn btn-danger" title="حذف"><i class="fa fa-trash"></i>  </a>
                                                        <a href="#" class="btn btn-info" title="ویرایش" data-toggle="modal" data-target="#mymodal"><i class="fa fa-edit"></i>  </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td  width="40px">
                                                        5
                                                    </td>
                                                    <td width="80px">
                                                        60101
                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">
                                                        10درصد بایت
                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">
                                                        500,000
                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">

                                                    </td>
                                                    <td width="80px">
                                                        <a href="#" class="btn btn-danger" title="حذف"><i class="fa fa-trash"></i>  </a>
                                                        <a href="#" class="btn btn-info" title="ویرایش"><i class="fa fa-edit" title="ایجاد"  data-toggle="modal" data-target="#mymodal"></i>  </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend> </legend>
                                    <div class="row" >
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tr>
                                                    <td  width="40px" >
                                                        <label>  نوع سند:</label>
                                                        <input type="text" class="form-control">
                                                    </td>
                                                    <td width="80px">
                                                        <label> عطف مبدا:</label>
                                                        <input type="text" class="form-control">
                                                    </td>
                                                    <td width="80px">
                                                        <label>  مرجع سند:</label>
                                                        <input type="text" class="form-control">
                                                    </td>
                                                    <td width="80px" >
                                                        <input style="margin-top: 23px" type="text" class="form-control">
                                                    </td>
                                                    <td width="80px">
                                                        <input style="margin-top: 23px" type="text" class="form-control">
                                                    </td>
                                                    <td width="80px">
                                                        <input style="margin-top: 23px" type="text" class="form-control">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="Create" tabindex="-1" role="dialog" aria-labelledby="Create" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width: 90%; height: 30%" >
            <div class="modal-content">
                <div class="modal-body">
                    <div class="" role="main">
                        <div class="">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2> ایجاد سند جدید</h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <br/>
                                            <form data-parsley-validate class="form-horizontal form-label-left">
                                                <div class="row">
                                                    <div class="col-md-1 "> <button type="submit" class="btn btn-success hidden-print" ><i class="fa fa-refresh"></i> بازسازی</button></div>
                                                    <div class="col-md-1 "> <button type="submit" class="btn btn-success hidden-print" style="margin-right: 12px"><i class="fa fa-plus-square "></i>مجموع</button></div>
                                                    <div class="col-md-1 "> <button type="submit" class="btn btn-success hidden-print" style="margin-right: 10px"><i class=" fa fa-sort-amount-desc"></i> ترتیب</button></div>
                                                    <div class="col-md-1 " ><button type="submit" class="btn btn-success hidden-print" style="margin-right: 10px"><i class="fa fa-table"></i> جدول</button></div>
                                                    <div class="col-md-1 "> <button type="submit" class="btn btn-success hidden-print" style="margin-right: 10px"><i class="fa fa-paste"></i> الحاق</button></div>
                                                    <div class="col-md-1 "> <button type="submit" class="btn btn-success hidden-print" style="margin-right: 10px"><i class="fa fa-copy"></i>کپی</button></div>
                                                    <div class="col-md-1 "> <button type="submit" class="btn btn-success hidden-print" style="margin-left: 15px"><i class="fa fa-copy"></i> کپی</button></div>
                                                    <div class="col-md-1 "> <button type="submit" class="btn btn-success hidden-print" onclick="window.print()" style="margin-left: 15px"><i class="fa fa-print"></i> چاپ</button></div>
                                                    <div class="col-md-1 "> <button type="submit" class="btn btn-success hidden-print" style="margin-left: 15px"><i class="fa fa-search"></i>  جستجو </button></div>
                                                    <div class="col-md-1 "> <button type="submit" class="btn btn-success hidden-print" style="margin-left: 15px"><i class="fa fa-check"></i>  تایید </button></div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <ul style="list-style-type: none;" class="col-md-12">
                                                        <li  style="float: right ; margin-right: 10px" >عطف: <label>123</label></li>
                                                        <li  style="float: right; margin-right: 20px">تاریخ <label>5424</label></li>
                                                        <li  style="float: right; margin-right: 30px">تعداد پیوست<label>668565</label></li>
                                                        <li  style="float: right ; margin-right: 40px" >شرح پیوست <label>123</label></li>
                                                    </ul>
                                                    <ul style="list-style-type: none;" class="col-md-12">
                                                        <li  style="float: right ; margin-left: 60px ;margin-top: 30px">شماره: <label>123</label></li>
                                                        <li  style="float: right; margin-left: 30px;margin-top: 30px">شعبه: <label>5424</label></li>
                                                        <li  style="float: right; margin-left: 30px;margin-top: 30px">موضوع:<label>668565</label></li>
                                                    </ul>
                                                    <div class="clearfix"></div>
                                                </div>
                                                    <div class="row">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <tr style=" border-bottom: #0b97c4 solid 3px; background-color: #55efc4;" >
                                                                    <th style="width: 20px; text-align: center"> رج </th>
                                                                    <th style="width: 150px; text-align: center"> معین</th>
                                                                    <th style="width: 100px; text-align: center"> تفضیل 1</th>
                                                                    <th style="width: 100px; text-align: center"> تفضیل 2</th>
                                                                    <th style="width: 100px; text-align: center">تفضیل 3</th>
                                                                    <th style="width: 150px; text-align: center"> شرح</th>
                                                                    <th style="width: 150px; text-align: center">بدهکار </th>
                                                                    <th style="width: 150px; text-align: center">بستانکار </th>
                                                                    <th style="width: 100px; text-align: center"> پیوست</th>
                                                                    <th style="width: 100px; text-align: center">شماره</th>
                                                                    <th style="width: 100px; text-align: center"> تاریخ</th>
                                                                    <th colspan="2" style="text-align: center"> عملیات</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        1
                                                                    </td>
                                                                    <td>
                                                                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right">
                                                                            <div class="input-group">
                                                                                <input class="form-control" type="number" id="Code" style="width: 100px" name="Helper" placeholder="معین">
                                                                                <span class="input-group-btn">
                                                                                    <a class="btn btn-default" data-toggle="modal" data-target="#tree"><i class="fa fa-arrow-down"></i> </a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right">
                                                                            <div class="input-group">
                                                                                <input class="form-control" type="number" id="DetailedOne" style="width: 100px;" name="DetailedOne" placeholder="تفضیلی یک">
                                                                                <span class="input-group-btn">
                                                                                    <a class="btn btn-default click" name="DetailedOne" data-toggle="modal" data-target="#selectDetailed"><i class="fa fa-arrow-down"></i> </a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right">
                                                                            <div class="input-group">
                                                                                <input class="form-control" type="number" id="DetailedTwo" style="width: 100px;" name="DetailedTwo" placeholder="تفضیلی دو">
                                                                                <span class="input-group-btn">
                                                                                    <a class="btn btn-default click" name="DetailedTwo" data-toggle="modal" data-target="#selectDetailed"><i class="fa fa-arrow-down"></i> </a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right">
                                                                            <div class="input-group">
                                                                                <input class="form-control" type="number" id="DetailedTree" name="DetailedTree" style="width: 100px;" placeholder="تفضیلی سه">
                                                                                <span class="input-group-btn">
                                                                                    <a class="btn btn-default click" name="DetailedTree" data-toggle="modal" data-target="#selectDetailed"><i class="fa fa-arrow-down"></i> </a>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <input class="form-control" type="text" name="Description" style="width: 150px;" placeholder="شرح">
                                                                    </td>
                                                                    <td>
                                                                        <input class="form-control" style="width: 150px;" type="number" name="Debtor" placeholder="بدهکار">
                                                                    </td>
                                                                    <td>
                                                                        <input class="form-control" style="width: 150px;" type="number" name="Creditor" placeholder="بستانکار">
                                                                    </td>
                                                                    <td>
                                                                        <input class="form-control" style="width: 100px;" type="text" name="Attach" placeholder="پیوست">
                                                                    </td>
                                                                    <td>
                                                                        <input class="form-control" style="width: 100px;" type="number" name="Number" placeholder="شماره">
                                                                    </td>
                                                                    <td>
                                                                        <input class="form-control" style="width: 100px;" type="text" name="DocumentsDate" placeholder="تاریخ">
                                                                    </td>
                                                                    <td>
                                                                        <a href="#" class="btn btn-danger" title="حذف" style="display: inline-block" ><i class="fa fa-trash"></i></a>
                                                                    </td>
                                                                    <td>
                                                                        <a href="#" class="btn btn-info" title="تایید" style="display: inline-block" data-toggle="modal" data-target="#s"><i class="fa fa-check"></i></a>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                <fieldset>
                                                    <legend> </legend>
                                                    <div class="row" >
                                                        <div class="table-responsive">
                                                            <table class="table table-striped">
                                                                <tr>
                                                                    <td  width="40px" >
                                                                        <label>  نوع سند:</label>
                                                                        <input type="text" class="form-control">
                                                                    </td>
                                                                    <td width="80px">
                                                                        <label> عطف مبدا:</label>
                                                                        <input type="text" class="form-control">
                                                                    </td>
                                                                    <td width="80px">
                                                                        <label>  مرجع سند:</label>
                                                                        <input type="text" class="form-control">
                                                                    </td>
                                                                    <td width="80px" >
                                                                        <input style="margin-top: 23px" type="text" class="form-control">
                                                                    </td>
                                                                    <td width="80px">
                                                                        <input style="margin-top: 23px" type="text" class="form-control">
                                                                    </td>
                                                                    <td width="80px">
                                                                        <input style="margin-top: 23px" type="text" class="form-control">
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="tree" tabindex="-1" role="dialog" aria-labelledby="tree" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>طبقه بندی حسابهای کل و معین
                                    </h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="row hidden-print">
                                        <button type="submit" id="view" class="btn btn-success col-md-1 customDisable" style="display: none"><i class="fa fa-eye"></i> مشاهده</button>
                                        <button type="submit" id="delete" class="btn btn-danger col-md-1 customDisable" style="display: none"><i class="fa fa-trash"></i> حذف</button>
                                        <button type="submit" id="update" class="btn btn-success customDisable" style="display: none"><i class="fa fa-edit"></i> ویرایش </button>
                                        <a href="#" class="btn btn-success customDisable" style="margin-right: 10px ; display: none" data-toggle="modal" id="m" data-target="#selectTotal"><i class="fa fa-plus"></i>  ایجاد حساب کل </a>
                                        <a href="#" class="btn btn-success customDisable" style="margin-right: 10px; display: none" data-toggle="modal" id="h" data-target="#selectHelper"><i class="fa fa-plus"></i>  ایجاد حساب معین </a>
                                        <button id="SelectCode" class="btn btn-primary" data-dismiss="modal">انتخاب</button>
                                    </div>
                                    <br>
                                    <h4>گروه حساب ها</h4>
                                    <br>
                                    <ul id="tree1" >
                                        @foreach($Group as $category)
                                            <li class="list-group-item activeThis" onclick="level1()" id="{{ $category->Id }}">
                                                {{ $category->Code }} - {{ $category->Name }}
                                                <span class="badge pull-left"> {{ count($category->childs) }} </span>
                                                @if(count($category->childs))
                                                    @include('financial.total.manageChild',['childs' => $category->childs])
                                                @endif
                                            </li>
                                        @endforeach
                                        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
                                        <script>
                                            $(".activeThis").click(function() {
                                                $(".activeThis").css("background-color", "white")
                                                $( this ).css("background-color", "greenyellow");
                                            });
                                            function level1() {
                                                $(".customDisable").fadeOut(0);
                                                $("#m").fadeIn();
                                                $("#print").fadeIn();
                                            }
                                        </script>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="helper" tabindex="-1" role="dialog" aria-labelledby="helper" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h6>ایجاد حساب معین</h6>
                    <form id="demo-form3" method="post" action="{{ route('add.helper') }}" data-parsley-validate class="form-horizontal form-label-left">
                        {{ csrf_field() }}
                        <input type="hidden" name="ParentId" id="Id" value="">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Code">کد حساب
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <input type="text" id="Code" name="Code" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Name">شرح حساب
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-8 col-sm-6 col-xs-12">
                                <input type="text" id="Name" name="Name" class="form-control col-md-8 col-xs-12">
                            </div>
                        </div>
                        <hr>
                        <div >
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <td width="100px">تفضیلی اول:</td>
                                            <td width="100px">
                                                گروه تفضیلی
                                            </td>
                                            <td width="400px">
                                                <input class="form-control col-md-8 col-xs-12 flat" type="text" placeholder="گروه تفضیلی" name="DetailedOne" id="One" />
                                            </td>
                                            <td width="80px">
                                                <a class="btn btn-primary" id="DetailedOne" name="One" style="padding-top:2mm;"  data-toggle="modal" data-target="#mymodal3"><i class="fa fa-plus"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>تفضیلی دوم:</td>
                                            <td>گروه تفضیلی</td>
                                            <td> <input class="form-control col-md-8 col-xs-12 flat" type="text" placeholder="گروه تفضیلی" name="DetailedTwo" id="Two" /></td>
                                            <td>
                                                <a class="btn btn-primary" id="DetailedTwo" name="Two" style="padding-top:2mm;" data-toggle="modal" data-target="#mymodal3"><i class="fa fa-plus" ></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>تفضیلی سوم:</td>
                                            <td> گروه تفضیلی</td>
                                            <td><input class="form-control col-md-8 col-xs-12 flat" type="text" placeholder="گروه تفضیلی" name="DetailedTree" id="Tree" /></td>
                                            <td>
                                                <a class="btn btn-primary" id="DetailedTree" name="Tree" data-toggle="modal" data-target="#mymodal3" style="padding-top:2mm;"><i class="fa fa-plus"></i> </a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <fieldset>
                            <legend> </legend>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div id="gender" class="btn-group" data-toggle="buttons">
                                                    <span >
                                                        سررسید دار است
                                                        <input  type="checkbox" class="flat" value="1" name="Arrived"/>
                                                    </span>
                                            <span style="margin-right: 10px">پیگیری دارد
                                                        <input type="checkbox" class="flat" value="1" name="Follow"/>
                                                    </span>
                                        </div>
                                        <input type="hidden" name="Type" value="2">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button class="btn btn-success" id="h" type="submit">ثبت</button>
                                <button type="submit" class="btn btn-primary" data-dismiss="modal" >انصراف</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="selectTotal" tabindex="-1" role="dialog" aria-labelledby="selectTotal" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width: 80%; height: 30%" >
            <div class="modal-content">
                <div class="modal-body">
                    <div class="" role="main">
                        <div class="">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2> ایجاد حساب کل جدید</h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <br/>
                                            <form id="demo-form2" method="post" action="{{ route('add.group') }}" data-parsley-validate class="form-horizontal form-label-left">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="ParentId" id="Id" value="">
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Code">کد حساب
                                                        <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                        <input type="text" id="Code" name="Code" required="required"
                                                               class="form-control col-md-7 col-xs-12">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Name">شرح حساب
                                                        <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                                        <input type="text" id="Name" name="Name" required="required"
                                                               class="form-control col-md-8 col-xs-12">
                                                    </div>
                                                </div>
                                                <fieldset class="form-group">
                                                    <legend>ماهیت مانده حساب</legend>
                                                    <div >
                                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <span style="margin-left: 10px">
                                                            بدون کنترل:
                                                            <input  type="radio" class="flat " name="TheNatureOfTheAccountBalance" id="genderM" value="1" checked=""
                                                                    required/>
                                                        </span>
                                                            <span style=" margin-left: 10px">
                                                            بدهکار:
                                                            <input type="radio" class="flat" name="TheNatureOfTheAccountBalance" id="genderF" value="2"/>
                                                        </span>
                                                            <span style="margin-left: 10px">
                                                            بستانکار:
                                                            <input type="radio" class="flat" name="TheNatureOfTheAccountBalance" id="genderM" value="3" checked=""
                                                                   required/>
                                                        </span>
                                                            <span style=" margin-left: 10px">
                                                            اکیدا بدهکار:
                                                            <input type="radio" class="flat" name="TheNatureOfTheAccountBalance" id="genderM" value="4" checked=""
                                                                   required/>
                                                        </span>
                                                            <span style=" margin-left: 10px">اکیدا بستانکار:
                                                            <input type="radio" class="flat" name="TheNatureOfTheAccountBalance" id="genderF" value="5"/>
                                                        </span>
                                                        </div>
                                                    </div>
                                                </fieldset></br>
                                                <fieldset>
                                                    <legend>عامل هزینه</legend>

                                                    <div class="form-group">
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <span >
                                                        مواد:
                                                        <input  type="radio" class="flat"  name="CostFactor" id="genderM" value="1" checked=""
                                                                required/>
                                                    </span>
                                                            <span style="margin-right: 10px">دستمزد:
                                                        <input type="radio" class="flat"  name="CostFactor" id="genderF" value="2"/>
                                                    </span>
                                                            <span style="margin-right: 10px">
                                                        سربار:
                                                        <input type="radio" class="flat" name="CostFactor" id="genderM" value="3" checked=""
                                                               required/>
                                                    </span>
                                                            <span style="margin-right: 10px">
                                                        سایر:
                                                        <input type="radio" class="flat" name="CostFactor" id="genderM" value="4" checked=""
                                                               required/>
                                                    </span>
                                                        </div>
                                                        <input type="hidden" name="Type" value="1">
                                                    </div>
                                                </fieldset>
                                                <div class="ln_solid"></div>
                                                <div class="form-group">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                        <button type="submit" class="btn btn-success">ثبت</button>
                                                        <button type="submit" class="btn btn-primary" data-dismiss="modal">انصراف</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="selectHelper" tabindex="-1" role="dialog" aria-labelledby="selectHelper" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h6>ایجاد حساب معین</h6>
                    <form id="demo-form3" method="post" action="{{ route('add.helper') }}" data-parsley-validate class="form-horizontal form-label-left">
                        {{ csrf_field() }}
                        <input type="hidden" name="ParentId" id="Id" value="">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Code">کد حساب
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <input type="text" id="Code" name="Code" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Name">شرح حساب
                                <span class="required">*</span>
                            </label>
                            <div class="col-md-8 col-sm-6 col-xs-12">
                                <input type="text" id="Name" name="Name" class="form-control col-md-8 col-xs-12">
                            </div>
                        </div>
                        <hr>
                        <div >
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <td width="100px">تفضیلی اول:</td>
                                            <td width="100px">
                                                گروه تفضیلی
                                            </td>
                                            <td width="400px">
                                                <input class="form-control col-md-8 col-xs-12 flat" type="text" placeholder="گروه تفضیلی" name="DetailedOne" id="One" />
                                            </td>
                                            <td width="80px">
                                                <a class="btn btn-primary" id="DetailedOne" name="One" style="padding-top:2mm;"  data-toggle="modal" data-target="#selectDetailed"><i class="fa fa-plus"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>تفضیلی دوم:</td>
                                            <td>گروه تفضیلی</td>
                                            <td> <input class="form-control col-md-8 col-xs-12 flat" type="text" placeholder="گروه تفضیلی" name="DetailedTwo" id="Two" /></td>
                                            <td>
                                                <a class="btn btn-primary" id="DetailedTwo" name="Two" style="padding-top:2mm;" data-toggle="modal" data-target="#selectDetailed"><i class="fa fa-plus" ></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>تفضیلی سوم:</td>
                                            <td> گروه تفضیلی</td>
                                            <td><input class="form-control col-md-8 col-xs-12 flat" type="text" placeholder="گروه تفضیلی" name="DetailedTree" id="Tree" /></td>
                                            <td>
                                                <a class="btn btn-primary" id="DetailedTree" name="Tree" data-toggle="modal" data-target="#selectDetailed" style="padding-top:2mm;"><i class="fa fa-plus"></i> </a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <fieldset>
                            <legend> </legend>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div id="gender" class="btn-group" data-toggle="buttons">
                                                    <span >
                                                        سررسید دار است
                                                        <input  type="checkbox" class="flat" value="1" name="Arrived"/>
                                                    </span>
                                            <span style="margin-right: 10px">پیگیری دارد
                                                        <input type="checkbox" class="flat" value="1" name="Follow"/>
                                                    </span>
                                        </div>
                                        <input type="hidden" name="Type" value="2">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button class="btn btn-success" id="h" type="submit">ثبت</button>
                                <button type="submit" class="btn btn-primary" data-dismiss="modal" >انصراف</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="selectDetailed" tabindex="-1" role="dialog" aria-labelledby="selectDetailed" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>طبقه بندی حسابهای تفضیلی
                                    </h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="row hidden-print">
                                        <a href="#" class="btn btn-success" style="margin-right: 10px" data-toggle="modal" id="m" data-target="#mymodal"><i class="fa fa-plus"></i>  ایجاد حساب تفضیلی </a>
                                        <button id="SelectDetailedOne" class="btn btn-primary" data-dismiss="modal">انتخاب</button>
                                        <button type="submit" class="btn btn-primary" data-dismiss="modal">انصراف</button>
                                    </div>
                                    </div>
                                    <br>
                                    <h4>گروه حساب ها</h4>
                                    <br>
                                    <ul id="tree2">
                                        @foreach($Detailed as $category)
                                            <li class="list-group-item" id="{{ $category->Id }}">
                                                {{ $category->Code }} - {{ $category->Name }}
                                                <span class="badge pull-left"> {{ count($category->childs) }} </span>
                                                @if(count($category->childs))
                                                    @include('financial.detailed.manageChild',['childs' => $category->childs])
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{ url('/') }}/js/treeview.js"></script>
    <script>
        $("#tree1 li").on('click', function(e) {
            let Id = '';
            Id = this.id;
            e.stopPropagation();
            $("#m").click(function () {
                $("#demo-form2 #Id").val( Id );
            })
        });
        $(function(){
            let Code = '';
            let CodeDetailOne = '';
            let selectName = '';
            $('.click').click(function () {
                selectName = this.name;
            })
            $('#save_value').click(function(){
                var final = '';
                $(':checkbox:checked').each(function(){
                    var values = $(this).val();
                    final += values + ', ';
                });
            });
            $("#tree1 li").on('click', function(e) {
                Code = $("#"+this.id).attr("Code")
                e.stopPropagation();
                $("#SelectCode").click(function () {
                    if(Code === undefined){
                        alert("مقدار انتخابی معین نیست");
                    }
                    $("#Create #Code").val( Code );
                })
            });
            $("#tree2 li").on('click', function(e) {
                CodeDetailOne = this.title;
                e.stopPropagation();
                $("#SelectDetailedOne").click(function () {
                    if(CodeDetailOne === undefined || CodeDetailOne === ''){
                        alert("مقدار انتخابی تفضیلی نیست");
                    }
                    if(selectName === 'DetailedOne') {
                        $("#Create #DetailedOne").val(CodeDetailOne);
                    }else if(selectName === 'DetailedTwo') {
                        $("#Create #DetailedTwo").val(CodeDetailOne);
                    }else if(selectName === 'DetailedTree') {
                        $("#Create #DetailedTree").val(CodeDetailOne);
                    }
                })
            });
        });

    </script>
@endsection
@section('style')
    <link href="{{url('/')}}/css/treeview.css" rel="stylesheet">
@endsection
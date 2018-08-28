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
                                    <a href="create.php" class="btn btn-success" title="ایجاد"  style="margin-right: 20px"><i class="fa fa-plus" ></i> ایجاد  </a>
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
                                                        <a href="#" class="btn btn-info" title="ویرایش" title="ایجاد"  data-toggle="modal" data-target="#mymodal"><i class="fa fa-edit"></i>  </a>
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
@endsection
@section('script')
    <script src="/js/treeview.js"></script>
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
            $('#save_value').click(function(){
                var final = '';
                $(':checkbox:checked').each(function(){
                    var values = $(this).val();
                    final += values + ', ';
                });
            });
        });
    </script>
@endsection
@section('style')
    <link href="/css/treeview.css" rel="stylesheet">
@endsection
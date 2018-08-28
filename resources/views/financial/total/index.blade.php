@extends('layout.master')
@section('content')
<div class="right_col" role="main">
    @include('layout.applications')
    <div class="">
        <div class="page-title hidden-print">
            <div class="title_left">
                <h3>درخت حساب های معین و کل</h3>
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
                        <h2>طبقه بندی حسابهای کل و معین
                        </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row hidden-print">
                            <button type="submit" id="print" onclick="window.print();" class="btn btn-success col-md-1 customDisable" ><i class="fa fa-print"></i> چاپ</button>
                            <button type="submit" id="view" class="btn btn-success col-md-1 customDisable"><i class="fa fa-eye"></i> مشاهده</button>
                            <button type="submit" id="delete" class="btn btn-danger col-md-1 customDisable"><i class="fa fa-trash"></i> حذف</button>
                            <button type="submit" id="update" class="btn btn-success customDisable"><i class="fa fa-edit"></i> ویرایش </button>
                            <a href="#" id="total" class="btn btn-success customDisable" style="margin-right: 10px" data-toggle="modal" id="m" data-target="#mymodal"><i class="fa fa-plus"></i>  ایجاد حساب کل </a>
                            <a href="#" id="limit" class="btn btn-success customDisable" style="margin-right: 10px" data-toggle="modal" id="m" data-target="#mymodal2"><i class="fa fa-plus"></i>  ایجاد حساب معین </a>
                        </div>
                        <br>
                        <h4>گروه حساب ها</h4>
                        <br>
                        <ul id="tree1">
                            @foreach($Group as $category)
                                <li class="list-group-item" onclick="level1()" id="{{ $category->Id }}">
                                    {{ $category->Code }} - {{ $category->Name }}
                                    <span class="badge pull-left"> {{ count($category->childs) }} </span>
                                    @if(count($category->childs))
                                        @include('financial.total.manageChild',['childs' => $category->childs])
                                    @endif
                                </li>
                            @endforeach
                            <script>
                                function level1() {
                                    $(".customDisable").hide();
                                    $("#total").show();
                                    $("#print").show();
                                }
                            </script>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--start lightbox edite-->
<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="mymodallabel" aria-hidden="true" style="display: none;">
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
<div class="modal fade" id="mymodal2" tabindex="-1" role="dialog" aria-labelledby="mymodallabel2" aria-hidden="true" style="display: none;">
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
<div class="modal fade" id="mymodal3" tabindex="-1" role="dialog" aria-labelledby="mymodallabel3" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <table class="table table-bordered" id="detailed">
                    <thead>
                    <tr class="danger">
                        <td>شرح گروه</td>
                        <td>کد گروه</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>بانکها</td>
                        <td>10
                            <input value="10" type="checkbox" class="flat"/>
                        </td>
                    </tr>
                    <tr>
                        <td>صندوق</td>
                        <td>20
                            <input value="20" type="checkbox" class="flat"/>
                        </td>
                    </tr>
                    <tr>
                        <td>اشخاص حقیقی</td>
                        <td>30
                            <input value="30" type="checkbox" class="flat"/>
                        </td>
                    </tr>
                    <tr>
                        <td>اشخاص حقوقی</td>
                        <td>40
                            <input value="40" type="checkbox" class="flat"/>
                        </td>
                    </tr>
                    <tr>
                        <td>هزینه ها</td>
                        <td>60
                            <input value="60" type="checkbox" class="flat"/>
                        </td>
                    </tr>
                    <tr>
                        <td>داراییهای ثابت</td>
                        <td>70
                            <input value="70" type="checkbox" class="flat"/>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <div>
                        <button type="submit" id="save_value" class="btn btn-success" data-dismiss="modal">ثبت</button>
                        <button type="submit" class="btn btn-primary" data-dismiss="modal">انصراف</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end light box-->
@endsection
@section('script')
    <script src="/js/treeview.js"></script>
    <script>
        var val = '';
        $('#DetailedOne').click(function() {
            val = $(this).attr('name')
        });
        $('#DetailedTwo').click(function() {
            val = $(this).attr('name')
        });
        $('#DetailedTree').click(function() {
            val = $(this).attr('name')
        });
        $("#tree1 li").on('click', function(e) {
            let Id = '';
            Id = this.id;
            e.stopPropagation();
            $("#m").click(function () {
                $("#demo-form2 #Id").val( Id );
            })
        });
        $("#tree1 li").on('click', function(e) {
            let Id = '';
            Id = this.id;
            e.stopPropagation();
            $("#h").click(function () {
                $("#demo-form3 #Id").val( Id );
            })
        });
        $(function(){
            $('#save_value').click(function(){
                var final = [];
                $('#detailed :checkbox:checked').each(function(){
                    final.push($(this).val());
                    $("#"+val).val( final );
                });
            });
        });
    </script>
@endsection
@section('style')
    <link href="/css/treeview.css" rel="stylesheet">
@endsection
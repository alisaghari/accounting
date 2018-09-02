@extends('layout.master')
@section('content')
    <div class="right_col" role="main">
        @include('layout.applications')
        <div class="">
            <div class="page-title hidden-print">
                <div class="title_left">
                    <h3>درخت حساب های تفضیلی</h3>
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
                            <h2>طبقه بندی حسابهای تفضیلی
                            </h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row hidden-print">
                                <button type="submit" onclick="window.print();" class="btn btn-success col-md-1" ><i class="fa fa-print"></i> چاپ</button>
                                <button type="submit" class="btn btn-success col-md-1"><i class="fa fa-eye"></i> مشاهده</button>
                                <button type="submit" class="btn btn-danger col-md-1"><i class="fa fa-trash"></i> حذف</button>
                                <button type="submit" class="btn btn-success"><i class="fa fa-edit"></i> ویرایش </button>
                                <a href="#" class="btn btn-success" style="margin-right: 10px" data-toggle="modal" id="m" data-target="#mymodal"><i class="fa fa-plus"></i>  ایجاد حساب تفضیلی </a>
                            </div>
                            <br>
                            <h4>گروه حساب ها</h4>
                            <br>
                            <ul id="tree1">
                                @foreach($Detailed as $category)
                                    <li class="list-group-item" id="{{ $category->Id }}">
                                        {{ $category->Code }} - {{ $category->Name }}
                                        <span class="badge pull-left"> {{ count($category->childs) }} </span>
                                        @if(count($category->childs))
                                            @include('financial.total.manageChild',['childs' => $category->childs])
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
                                            <h2>مشخصات حساب</h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <br/>
                                            <form id="demo-form2" method="post" action="{{ route('add.detailed') }}" data-parsley-validate class="form-horizontal form-label-left">
                                                {{ csrf_field() }}
                                                <div class="form-group">
                                                    <input type="hidden" name="ParentId" id="Id" value="">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Code">کد حساب
                                                        <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                                        <input type="text" id="Code" name="Code" required="required"
                                                               class="form-control col-md-7 col-xs-12" placeholder="کد حساب">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Name">شرح حساب
                                                        <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                                        <input type="text" id="Name" name="Name" required="required"
                                                               class="form-control col-md-8 col-xs-12" placeholder="شرح حساب">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-lg-1 col-lg-offset-2">
                                                        <label class="control-label" for="Helper">حساب معین: </label>
                                                    </div>

                                                    <div class="col-md-3 col-sm-1 col-xs-12 col-lg-3">
                                                        <input type="text" id="Helper" name="Helper" required="required"  class="form-control col-md-3 col-xs-12" placeholder="حساب معین">
                                                        <button class="btn btn-primary"><i class="fa fa-plus"></i> </button>
                                                    </div>
                                                    <div class="col-md-3 col-sm-1 col-xs-12 col-lg-5">
                                                        <input type="text" id="AccountingRecaive" name="AccountingRecaive" required="required"  class="form-control col-md-6 col-xs-12" placeholder="حسابهای دریافتی تجاری">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class=" col-md-offset-2 col-md-1 col-sm-3 col-xs-12">
                                                        <label class="control-label" for="Sets">مجموعه ها:  </label>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i></button>
                                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                                        <input type="text" id="Sets" name="Sets" required="required"
                                                               class="form-control col-md-7 col-xs-12" placeholder="مجموعه ها">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class=" col-md-offset-2 col-md-10 col-sm-6 col-xs-12">
                                                        <input type="text" id="first-name" required="required"
                                                               class="form-control col-md-7 col-xs-12" placeholder="اشخاص حقوقی">
                                                    </div>
                                                </div>
                                                <div class="ln_solid"></div>
                                                <div class="form-group">
                                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                        <button type="submit" id="save_value" class="btn btn-success" >ثبت</button>
                                                        <button type="submit" class="btn btn-primary"  data-dismiss="modal">انصراف</button>
                                                    </div>
                                                </div>
                                            </form>
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
    </div>
    <div class="modal fade" id="mymodal3" tabindex="-1" role="dialog" aria-labelledby="mymodallabel3" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <table class="table table-bordered">
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
                                <input value="10" type="checkbox" class="flat" name="selector[]"/>
                            </td>
                        </tr>
                        <tr>
                            <td>صندوق</td>
                            <td>20
                                <input value="20" type="checkbox" class="flat" name="selector[]"/>
                            </td>
                        </tr>
                        <tr>
                            <td>اشخاص حقیقی</td>
                            <td>30
                                <input value="30" type="checkbox" class="flat" name="selector[]"/>
                            </td>
                        </tr>
                        <tr>
                            <td>اشخاص حقوقی</td>
                            <td>40
                                <input value="40" type="checkbox" class="flat" name="selector[]"/>
                            </td>
                        </tr>
                        <tr>
                            <td>هزینه ها</td>
                            <td>60
                                <input value="60" type="checkbox" class="flat" name="selector[]"/>
                            </td>
                        </tr>
                        <tr>
                            <td>داراییهای ثابت</td>
                            <td>70
                                <input value="70" type="checkbox" class="flat" name="selector[]"/>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="form-group">
                        <div>
                            <button type="submit" id="save_value" class="btn btn-success" >ثبت</button>
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
    <script src="{{url("/")}}/js/treeview.js"></script>
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
    <link href="{{url("/")}}/css/treeview.css" rel="stylesheet">
@endsection
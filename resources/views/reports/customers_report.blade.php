@extends('layouts.master')
@section('css')
<!--- Internal Select2 css-->
<link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
<!---Internal Fancy uploader css-->
<link href="{{ URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
<!--Internal Sumoselect css-->
<link rel="stylesheet" href="{{ URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css') }}">
<!--Internal  TelephoneInput css-->
<link rel="stylesheet" href="{{ URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css') }}">
@endsection
@section('title')
تقارير المستخدمين
@stop

@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">تقارير المستخدمين </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                 الأرباح </span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
@if (session()->has('Add'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{ session()->get('Add') }}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<!-- row -->
<div class="col-lg-12 col-md-12">
    <div class="card">
        <div class="card-body">
            <form action="/search_customers" method="post" enctype="multipart/form-data" autocomplete="off">
                {{ csrf_field() }}
                {{-- 1 --}}

                {{-- 2 --}}
                <div class="row">
                    <div class="col">
                            <label for="inputName" class="control-label">القسم</label>
                            <select name="provider_id" class="form-control SlectBox" onclick="console.log($(this).val())" onchange="console.log('change is firing')">
                                <!--placeholder-->
                                <option value="" selected disabled>حدد الاسم</option>
                                @foreach ($providers as $provider)
                                <option value="{{ $provider->id }}"> {{ $provider->name }}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
                {{-- 3 --}}
               <br>
                <div class="row">
                        <div class="col-sm-1 col-md-1">
                            <button type="submit" class="btn btn-primary btn-block">بحث</button>
                        </div>
                    </div>
            </form>
            <div class="row total" style=" background-color: #ccccb3 !important;padding: 14px;margin-top:5px;border-radius: 5px;">
                    <div class="col">
                        <label for="exampleTextarea">إجمالي الأرباح</label>
                        <br>
                        <span></span>

                    </div>
                </div><br>
        </div>
        <div class="card-body">
                <div class="table-responsive">
                        <table id="example" class="table key-buttons text-md-nowrap" style=" text-align: center">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">رقم الطلب  </th>
                                    <th class="wd-20p border-bottom-0">تاريخ الطلب </th>
                                    <th class="wd-15p border-bottom-0">تاريخ التسليم</th>
                                    <th class="wd-20p border-bottom-0">الخدمة </th>                                      
                                    <th class="wd-15p border-bottom-0"> الإجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                </div>
            </div>
    </div>
</div>
</div>


</div>

<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Select2 js-->
<script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
<!--Internal Fileuploads js-->
<script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
<!--Internal Fancy uploader js-->
<script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
<!--Internal  Form-elements js-->
<script src="{{ URL::asset('assets/js/advanced-form-elements.js') }}"></script>
<script src="{{ URL::asset('assets/js/select2.js') }}"></script>
<!--Internal Sumoselect js-->
<script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
<!--Internal  Datepicker js -->
<script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
<!--Internal  jquery.maskedinput js -->
<script src="{{ URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
<!--Internal  spectrum-colorpicker js -->
<script src="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
<!-- Internal form-elements js -->
<script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>
<script>
    var date = $('.fc-datepicker').datepicker({
        dateFormat: 'yy-mm-dd'
    }).val();
</script>



@endsection
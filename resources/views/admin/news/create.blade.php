@extends('layouts.admin')
@section('extraCSS')
    <link href="/panel/css/persian-datepicker.css" rel="stylesheet">
@endsection
@section('content')
    <div class="container-fluid mt-5">
        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">
            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">
                <h4 class="mb-2 mb-sm-0 pt-1">
                    <a href="#" target="_blank">صفحه اصلی</a>
                    <span>/</span>
                    <span>ثبت خبر</span>
                </h4>
            </div>
        </div>
    </div>
    <form action="{{route('admin.news.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="container-fluid mt-5">

            <section class="section card mb-5">
                <div class="card-body">
                    <h4 class="pb-5">خبر جدید</h4>
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="md-form">
                                <input type="text" id="form1" name="title"  class="form-control">
                                <label for="form1" class="">تیتر خبر :</label>

                                @if($errors->has('title'))
                                    <span class="help-block sub-error " >
                                       {{$errors->first('title')}}
                                </span>
                                @endif
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </section>
            <section class="section card mb-5">
                <div class="card-body">
                    <div class="col-md-12 mb-4">
                        <h5 class="pb-5">متن خبر</h5>
                        <section id="editor">
                            <textarea style="height: 400px" class="form-control  ckeditor" id="description"  name="description"></textarea>
                        </section>
                        @if($errors->has('description'))
                            <span class="help-block sub-error " >
                               {{$errors->first('description')}}
                        </span>
                        @endif
                    </div>
                </div>
            </section>

            <section class="section card mb-5">
                <div class="card-body">
                    <div class="col-md-4 mb-4">
                        <label for="form2" class="">تاریخ خبر</label>
                        <input type="text" id="form2" name="date" required="required" class="form-control dateRequest">
                    </div>
                </div>
            </section>

            <button type="submit" class="btn btn-info">ثبت خبر</button>
        </div>
    </form>
    <br>
@endsection
@section('extraCSS')

@endsection
@section('extraJS')

    <script type="text/javascript" src="/panel/js/persian-date.js"></script>
    <script type="text/javascript" src="/panel/js/persian-datepicker.js"></script>
    <script>
        var today = new Date();
        today.setDate(today.getDate());
        $(".dateRequest").pDatepicker({
            format: 'YYYY/MM/DD',
            minDate: today,

            defaultDate: today,
            useCurrent: false
        });
    </script>

@endsection

@extends('layouts.home')
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
                    <span target="_blank">نمایش خبر</span>

                </h4>
            </div>
        </div>
    </div>

        <div class="container-fluid mt-5">

            <section class="section card mb-5">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h5 class="pb-5">{{$news->title}}</h5>
                            <section id="editor" class="form-control ">
                                <p >{!! $news->description  !!}</p>
                                <br>
                                <p>
                                   {{$news->date}}
                                </p>
                            </section>

                        </div>

                        <br>
                        <br>
                    </div>
                </div>
            </section>


        </div>

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

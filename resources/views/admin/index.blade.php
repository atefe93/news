
@extends('layouts.admin')
@section('content')


    <!-- Heading -->

    <br>
    <div class="card mb-4 wow fadeIn">
        <br>
        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between text-center">
            <div class="row">
                <div class="col-md-12 mb-4">
                    <a href="{{route('admin.news.index')}}" type="button" class="btn btn-primary px-5">لیست اخبار</a>
                    <a href="{{route('admin.news.create')}}" class="btn btn-default px-5">افزودن خبر</a>
                    <a href="{{route('index')}}" type="button" class="btn btn-warning px-7">سایت</a>

                </div>
            </div>
        </div>
    </div>


@endsection
@section('extraCSS')

@endsection
@section('extraJS')
@endsection



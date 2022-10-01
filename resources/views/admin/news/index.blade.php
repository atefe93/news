@extends('layouts.admin')
@section('content')
    <div class="container-fluid mt-5">
        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">
            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">
                <h4 class="mb-2 mb-sm-0 pt-1">
                    <a href="{{route('admin.index')}}" target="_blank">صفحه اصلی پنل</a>
                    <span>/</span>
                    <span>لیست اخبار</span>
                </h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-hover table-striped table-striped--vertical">
                    <thead>
                    <tr>
                        <th>
                            ردیف
                        </th>

                        <th>
                            عنوان
                        </th>

                        <th>
                            تاریخ
                        </th>
                        <th>
                            تعداد بازدید
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($items as $key=>$item)
                        <tr>
                            <td>
                                {{$key+1}}
                            </td>
                            <td>
                            <span class="u-bold">{{$item->title}}
                            </span>
                            </td>

                            <td>
                                {{$item->date}}
                            </td>
                            <td>
                                {{$item->view}}
                            </td>


                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <div style="  height:400px"></div>
@endsection
@section('extraCSS')

@endsection
@section('extraJS')

@endsection


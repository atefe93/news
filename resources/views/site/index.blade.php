
@extends('layouts.home')
@section('content')








    <!-- Heading -->

    <br>
    <div class="card mb-4 wow fadeIn">
        <br>
        <!--Card content-->
        <div class="card-body d-sm-flex justify-content-between text-center">
            <div class="row">
                <div class="col-md-12 mb-4" id="message"></div>
                <div class="col-md-12 mb-4">
                    <a href="{{route('news.index')}}" type="button" class="btn btn-primary px-7">لیست اخبار</a>
                    <a href="{{route('admin.index')}}" type="button" class="btn btn-warning px-7">پنل ادمین</a>

                </div>
            </div>
        </div>
    </div>


@endsection
@section('extraCSS')

@endsection
@section('extraJS')
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('97b4caefe7f50274e971', {
            cluster: 'eu'
        });

        var channel = pusher.subscribe('message-channel');
        channel.bind('message-event', function(data) {
            let messageSection=$('#message');
            messageSection.append(`<div class="alert alert-primary">${data.message}</div>`)

        });
    </script>
@endsection



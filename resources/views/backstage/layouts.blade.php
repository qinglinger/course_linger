@extends("layout.layouts")

@section("content")

    <div class="col-md-2">
        {{--<input type="button" class="btn-default" onclick="window.location.href('/backstage')" value="用户">--}}
        <input type=button  class="btn-default" onclick="window.location.href='/backstage/user'" value="用户">
        {{--<a href="/backstage">用户</a>--}}
        <br>
        {{--<button class="btn-default">课程</button>--}}
        <input type="button" class="btn-default" onclick="window.location.href='/backstage/course'" value="课程">
    </div>
    <div class="col-md-8">
        @yield("custom")
    </div>
    <div class="col-md-2"></div>
@endsection
@extends("layout.layouts")

@section("content")

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <button class="btn-default">用户</button>
                <br>
                <button class="btn-default">课程</button>
            </div>
            <div class="col-md-8">
                <div class="panel-heading">
                    <div class="col-md-4">
                        BackStage Form
                    </div>
                    <div class="col-md-4">
                        {{--<button onclick="downloadExcel()">Download Excel</button>--}}
                    </div>
                    <div class="col-md-4">
                        <a href="logoutEmailAdmin">Logout</a>
                    </div>
                </div>
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>password</th>
                        <th>gender</th>
                        <th>identity</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->userID }}</td>
                            <td>{{ $post->userName }}</td>
                            <td>{{ $post->password }}</td>
                            <td>{{ $post->gender }}</td>
                            <td>{{ $post->identity }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{--{!! $posts->links() !!}--}}
                <div class="col-md-2"></div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
@endsection
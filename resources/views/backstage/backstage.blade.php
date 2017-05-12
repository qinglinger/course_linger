@extends("backstage.layouts")

@section("custom")
    <div class="panel-heading">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            课程列表
        </div>
        <div class="col-md-4">
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
    <div class="col-md-2"></div>
@endsection
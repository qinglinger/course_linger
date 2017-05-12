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
            <th>courseID</th>
            <th>cover</th>
            <th>courseName</th>
            <th>teacherID</th>
            <th>introduction</th>
            <th>visit</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->courseID }}</td>
                <td><img src="{{ $post->cover }}" height="100"></td>
                <td>{{ $post->courseName }}</td>
                <td>{{ $post->teacherID }}</td>
                <td>{{ $post->introduction }}</td>
                <td>{{ $post->visit }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{--{!! $posts->links() !!}--}}
    <div class="col-md-2"></div>
@endsection
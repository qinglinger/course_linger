@extends('layout.layouts')

@section('content')
    <div class="row bg-success"">
        <div class="col-md-2">
            <input type="text" class="form-control" id=homeSearch" placeHolder="输入搜索的内容">
        </div>
        <div class="col-md-2">
            <img  height="20" class="img-round" src="data:image/png;base64,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">
        </div>
        <div class="col-md-4">课程管理</div>
        <div class="col-md-4">用户名 登录</div>
    </div>
    <div>
        课程
    </div>
    <div>
        动态
    </div>
@endsection
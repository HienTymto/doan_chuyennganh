@extends('admin.adminPage')
@section('content')
    <h1>Chỉnh sửa bài viết</h1>
    @if ($message = Session::get('success'))
    <p>{{$message}}</p>
    @endif
    <form action="{{ route('edit',['id'=>$tintuc->id]) }}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group mt-3 mt-3">
            <label for="my-input">Tiêu đề:</label>
            <input id="my-input" class="form-control" type="text" name="tieude" value="{{ $tintuc->tieude }}">
            @if ($errors->has('tieude'))
                       <p class="text-danger"> {{$errors->get('tieude')[0]}} </p>
                    @endif
        </div>
        <div class="form-group mt-3">
            <label for="my-input">Ảnh:</label>
            <input type="file" name="anh" id="anh" class="form-control">
            <img id="preview-image" class="mt-3 " src="{{ Storage::url($tintuc->anh) }}" alt="Ảnh sản phẩm"
                style="max-width: 200px; border-radius:5px; height:150px">
        </div>
        <div class="form-group mt-3">
            <label for="my-input">Tóm tắt bài viết:</label>
            <input id="my-input" class="form-control" type="text" name="tomtat" value="{{ $tintuc->tomtat }}">
        </div>
        <div class="form-group mt-3">
            <label for="my-input">Nội dung:</label>
            <input id="my-input" class="form-control" type="text" name="noidung" value="{{ $tintuc->noidung }}">
            @if ($errors->has('noidung'))
                    <p class="text-danger"> {{$errors->get('noidung')[0]}} </p>
                    @endif
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection

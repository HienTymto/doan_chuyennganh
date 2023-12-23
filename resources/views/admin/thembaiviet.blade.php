@extends('admin.adminPage')
@section('content')
    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('css/welcome.css') }}">

    <!-- Styles -->

    <div>
        <p class="fs-1 text-center fw-bold text-success">Thêm bài viết</p>

        @if ($message = Session::get('success'))
            <p>{{ $message }}</p>
        @endif

        <form action="{{ route('thembaiviet') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="container form-group pt-5">
                        <label for="exampleFormControlInput1" class="form-label">Tiêu đề:</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="tieude">
                        @if ($errors->has('tieude'))
                            <p class="text-danger"> {{ $errors->get('tieude')[0] }} </p>
                        @endif
                    </div>
                    <div class="form-group container pt-5">
                        <label for="exampleFormControlTextarea1" class="form-label">Nội dung:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="noidung"></textarea>
                        @if ($errors->has('noidung'))
                            <p class="text-danger"> {{ $errors->get('noidung')[0] }} </p>
                        @endif
                    </div>
                </div>
                <div class="form-group container pt-5">
                    <label for="exampleFormControlTextarea1" class="form-label">Tóm tắt bài viết:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tomtat"></textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="my-input">Ảnh:</label>
                    <input type="file" name="anh" id="anh" class="form-control">
                    <img id="preview-image" class="mt-3 " src="#" alt="Ảnh sản phẩm"
                        style="max-width: 200px; border-radius:5px; height:150px">
                </div>
                <div class="form-group mt-3">
                    <select name="danhmuc" id="">
                        <option value=""></option>
                    </select>
                </div>
                <div class="form-group btn-them-bai-viet container pt-5">
                    <button type="submit" class="btn btn-primary">Đăng bài</button>
                </div>
        </form>
    </div>


    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection

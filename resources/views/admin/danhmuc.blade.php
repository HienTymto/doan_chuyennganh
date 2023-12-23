@extends('admin.adminPage')
@section('content')
    <p class="fs-1 text-center fw-bold text-success">Danh mục</p>
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-outline-success me-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Thêm danh mục
        </button>
    </div>
    @if ($message = Session::get('success'))
        <p class="text-success">{{ $message }}</p>
    @endif
    <table class="table table-striped text-center" id="mytable">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên danh mục</th>
                <th >Hành động</th>
            </tr>
        </thead>
        @foreach ($danhmuc as $dm)
            <tr>
                <td>{{ $dm->id }}</td>
                <td>{{ $dm->tendm }}</td>
                <td><a class="btn btn-outline-success me-1" href="{{ route('dmdelete', ['id' => $dm->id]) }}">Xóa</a></td>
            </tr>
        @endforeach
    </table>
    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title " id="exampleModalLabel">Thêm danh mục</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('themdanhmuc') }}" method="POST">
                        @csrf
                        <div class="text-center mb-3">
                            <input type="text" class="form-control" placeholder="Tên danh mục"
                                aria-label="Recipient's username" aria-describedby="button-addon2" name="tendanhmuc">
                            <button class=" btn btn-outline-success me-1" type="submit" id="buttonadd">Thêm danh
                                mục</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class=" btn btn-outline-secondary me-1" data-bs-dismiss="modal">Đóng</button>

                </div>
            </div>
        </div>
    </div>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection

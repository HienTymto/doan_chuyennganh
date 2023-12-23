@extends('admin.adminPage')
@section('content')
    <p class="fs-1 text-center fw-bold text-success">Danh sách sản phẩm</p>
    <div class="d-flex justify-content-end">
        <td><a class="btn btn-outline-success me-1" href="{{route('thembaiviet')}}">Thêm bài viết</a></td>
    </div>
    @if ($message = Session::get('success'))
    <p class="text-success">{{$message}}</p>
    @endif       
    <table class="table table-striped text-center" id="mytable">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tiêu đề</th>
                <th colspan="2">Hành động</th>
            </tr>
        </thead>
        @foreach ($tintuc as $tt)
        <tr>
            <td>{{ $tt->id }}</td>
            <td>{{ $tt->tieude }}</td>
            <td><a class="btn btn-outline-success me-1" href="{{ route('edit', ['id' => $tt->id]) }}">sửa</a></td>
            <td><a class="btn btn-outline-success me-1" href="{{ route('delete', ['id' => $tt->id]) }}">Xóa</a></td>
        </tr>
        @endforeach
    </table>

    <!-- Modal xác nhận xóa -->
    {{-- <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmDeleteModalLabel">Xác nhận xóa sản phẩm</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Bạn có chắc chắn muốn xóa sản phẩm này?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy bỏ</button>
                    <!-- Thêm ID để xác định nút xác nhận trong JavaScript -->
                    <button type="button" class="btn btn-primary" id="confirmDeleteButton">Xác nhận</button>
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <p class="h1 text-primary text-center">Danh Sách Bài Viết</p> 
@if ($message = Session::get('success'))
    <p>{{$message}}</p>
    @endif       
  <table class="table table-striped">
    <thead>
        <tr><a href="{{route('thembaiviet')}}" class="btn btn-primary mt-5">Thêm bài viết</a></tr>
      <tr>
        <th>STT</th>
        <th>Tiêu đề</th>
        <th colspan="2">Hành động</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($tintuc as $tt)
      <tr>
        <td>{{$tt->id}}</td>
        <td>{{$tt->tieude}}</td>
        <td><a href="{{route('edit',['id' => $tt->id])}}">sửa</a></td>
        <td><a href="{{route('delete',['id' => $tt->id])}}">Xóa</a></td>
      </tr>
      @endforeach
    </tbody>
  </table> --}}
  <script>
    $(document).ready(function() {
      $('#mytable').DataTable();
    });
  
    // Hàm xác nhận xóa
  </script>
@endsection

<div class="left-sidebar bg-success">
    <h3>Admin Panel</h3>
    <ul class="nav flex-column collapsible mt-4">

        <!--- Dashboard--->
        <li class="nav-item flex-column collapsible mt-4">
            <a href="index.php" class="nav-link">
                <i class="bi bi-person-vcard"></i></i> Dashboard
            </a>
        </li>

        <!--- Website content--->
        <li class="nav-item flex-column collapsible mt-4">
            <a class="nav-link" href="{{ route('danhsach') }}"><i class="bi bi-blockquote-right"></i> Danh sách</a>
        </li>
        <li class="nav-item flex-column collapsible mt-4">
            <a class="nav-link" href="{{ route('thembaiviet') }}"><i class="bi bi-database-add"></i> Thêm bài viết</a>
        </li>
    </ul>
   
            {{-- <div class="container p-2 m-2 bg-white rounded text-center " >
                <a  class=" text-secondary text-decoration-none h6">Danh mục</a>
            </div> --}}

</div>

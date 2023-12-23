<nav class="navbar navbar-expand-sm bg-light navbar-light mb-3">
    <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.php">HC NEWS</a>
  
        <!-- right nav--->
        <ul class="navbar-nav justify-content-end">
            @if (Route::has('login'))
            <div class="container p-2 m-2 bg-white rounded text-center ">
                @auth
                    <a href="{{ url('/dashboard') }}" class=" text-secondary text-decoration-none h6">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Đăng
                        nhập</a>
                @endauth
            </div>
        @endif
        </ul>
      <!-- right nav--->
    </div>
  </nav>
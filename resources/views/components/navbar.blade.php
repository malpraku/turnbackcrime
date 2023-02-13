<header class="p-3 bg-secondary text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/01/Lambang_Polda_Jabar.png/800px-Lambang_Polda_Jabar.png" width="40"></li>
                    <li><a  style="font-size:22px;font-weight: bold;margin-left:20px" class="nav-link px-2 text-white">SISPROPEL</a></li>
                    <li><a style="font-size:20px;margin-right:20px;margin-left:20px" href="../" class="nav-link px-2 text-white">Home</a></li>
                    <li><a style="font-size:20px;" href="tasks" class="nav-link px-2 text-white">Kasus</a></li>
                    <li><a style="font-size:20px;margin-left:20px" href="tasks" class="nav-link px-2 text-white">Cek Status</a></li>
                </ul>
                <div class="text-end">
                    @guest
                    <a href="{{ route('login') }}" type="button" class="btn btn-outline-light me-2">Masuk</a>
                    <a href="/lapor" type="button" class="btn btn-warning">Laporkan!</a>
                    @else
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" type="button" class="btn btn-danger">Logout from {{ Auth::user()->name }}</a>
                    
                    <form action="{{ route ('logout') }}" id="logout-form" method="POST">
                        @csrf
                    </form>
                    @endguest
                    

                </div>
            </div>
        </div>
    </header>
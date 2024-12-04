<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{route('home')}}">
                <i class="bi bi-house-fill"></i>
                <spann>Home</spann>
            </a>

        </li><!-- End Dashboard Nav -->


       
        <li class="nav-item">
            <a class="nav-link" href="{{route('category.index')}}">
                <i class="bi bi-diagram-2-fill"></i>
                <span>Category</span>
            </a>

        </li>
        <li class="nav-item">
            <a class="nav-link mt-2" href="{{route('masuk.index')}}">
                <i class="bi bi-envelope-fill"></i>
                <span>Surat Masuk</span>
            </a>

        </li>
       
        <!-- news -->
        <li class="nav-item">
            <a class="nav-link " href="{{route('keluar.index')}}">
                <i class="bi bi-envelope-open-fill"></i>
                <span>Surat Keluar</span>
            </a>

        </li><!-- End Dashboard Nav -->

    </ul>

</aside>
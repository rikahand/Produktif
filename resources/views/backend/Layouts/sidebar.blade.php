<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="index.html">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

<!-- Sidebar Nav -->
<ul class="sidebar-nav" id="sidebar-nav">

    <!-- Riwayat Hidup Nav -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#riwayat-hidup-nav" aria-expanded="false">
            <i class="bi bi-file-earmark"></i><span>Riwayat Hidup</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="riwayat-hidup-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
                <a href="{{ url('pendidikan') }}">
                    <i class="bi bi-circle"></i><span>Pendidikan</span>
                </a>
            </li>
            <li>
                <a href="{{ url('pengalaman_kerja') }}">
                    <i class="bi bi-circle"></i><span>Pengalaman Kerja</span>
                </a>
            </li>
        </ul>
    </li><!-- End Riwayat Hidup Nav -->

</ul><!-- End Sidebar Nav -->


</aside><!-- End Sidebar-->
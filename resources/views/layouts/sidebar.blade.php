<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="{{ (request()->is('dashboard*')) ? 'active' : '' }}"> <a href="{{ url('/dashboard') }}"><i
                            class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span></a> </li>
                <li class="list-divider"></li>
                <li class="{{ (request()->is('admin/pembayaran*')) ? 'active' : '' }}"> <a href="/admin/pembayaran"><i
                            class="fas fa-credit-card"></i> <span> Pembayaran
                            Siswa
                        </span></a>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Manajemen Data </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ (request()->is('management/periode*')) ? 'active' : '' }}"
                                href="/management/periode">Tahun Ajaran </a></li>
                        <li><a class="{{ (request()->is('management/kelas*')) ? 'active' : '' }}"
                                href="/management/kelas">
                                Kelas </a></li>
                        <li><a class="{{ (request()->is('management/siswa*')) ? 'active' : '' }}"
                                href="/management/siswa">
                                Siswa </a></li>
                        <li><a class="{{ (request()->is('management/kelulusan*')) ? 'active' : '' }}"
                                href="/management/kelulusan"> Kelulusan </a></li>
                        <li><a class="{{ (request()->is('management/kenaikan*')) ? 'active' : '' }}"
                                href="/management/kenaikan"> Kenaikan Kelas </a></li>
                    </ul>
                </li>
                <li class="{{ (request()->is('kalender*')) ? 'active' : '' }}"> <a href="/kalender"><i
                            class="fas fa-calendar-alt"></i> <span>Kalender</span></a> </li>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-book"></i> <span> Laporan </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a class="{{ (request()->is('admin/laporan/keuangan*')) ? 'active' : '' }}"
                                href="/admin/laporan/keuangan"><span> Laporan Keuangan </span></a></li>
                        <li><a class="{{ (request()->is('admin/laporan/rekapitulasi*')) ? 'active' : '' }}"
                                href="/admin/laporan/rekapitulasi"><span> Rekapitulasi </span></a>
                        </li>
                    </ul>
                </li>
                <li class="{{ (request()->is('management/user*')) ? 'active' : '' }}"> <a href="/management/user"><i
                            class="fas fa-users-cog"></i> <span> Manajemen Pengguna
                        </span></a>
                <li class="{{ (request()->is('admin/cities*')) ? 'active' : '' }}"> <a href=""><i
                            class="fas fa-cog"></i>
                        <span>Settings</span></a> </li>
                <li class="list-divider"></li>
                @auth
                <li class=""> <a href="/logout" method="post"><i class="fas fa-sign-out-alt"></i> <span> Logout
                        </span></a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</div>
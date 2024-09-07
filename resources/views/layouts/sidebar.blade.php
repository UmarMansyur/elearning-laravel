<aside class="sidebar">
  <!-- sidebar close btn -->
  <button type="button"
    class="sidebar-close-btn text-gray-500 hover-text-white hover-bg-main-600 text-md w-24 h-24 border border-gray-100 hover-border-main-600 d-xl-none d-flex flex-center rounded-circle position-absolute"><i
      class="ph ph-x"></i></button>
  <!-- sidebar close btn -->
  <a href="index.html"
    class="sidebar__logo text-center p-20 position-sticky inset-block-start-0 bg-white w-100 z-1 pb-10">
    <img src="/assets/images/logo/logo.svg" alt="Logo" width="190">
  </a>

  <div class="sidebar-menu-wrapper overflow-y-auto scroll-sm">
    <div class="p-20 pt-10">
      <ul class="sidebar-menu">
        <li class="sidebar-menu__item {{ request()->is('teacher/dashboard') ? 'activePage' : '' }}">
          <a href="/teacher/dashboard" class="sidebar-menu__link">
            <span class="icon"><i class="ph ph-squares-four"></i></span>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li class="sidebar-menu__item has-dropdown">
          <a href="javascript:void(0)" class="sidebar-menu__link">
            <span class="icon"><i class="ph ph-books"></i></span>
            <span class="text">Modul Ajar</span>
          </a>
          <!-- Submenu start -->
          <ul class="sidebar-submenu">
            <li class="sidebar-submenu__item {{ request()->is('teacher/modul') ? 'activePage' : '' }}">
              <a href="/teacher/modul" class="sidebar-submenu__link"> Modul Saya </a>
            </li>
            <li class="sidebar-submenu__item">
              <a href="create-course.html" class="sidebar-submenu__link"> Tambah Modul </a>
            </li>
          </ul>
          <!-- Submenu End -->
        </li>
        {{-- <li class="sidebar-menu__item">
          <a href="/teacher/modul" class="sidebar-menu__link {{ request()->is('teacher/modul') ? 'activePage' : '' }}">
            <span class="icon"><i class="ph ph-books"></i></span>
            <span class="text">Modul</span>
          </a>
        </li> --}}
        <li class="sidebar-menu__item">
          <a href="javascript:void(0)" class="sidebar-menu__link">
            <span class="icon"><i class="ph ph-clipboard-text"></i></span>
            <span class="text">Penugasan</span>
          </a>
        </li>
        <li class="sidebar-menu__item">
          <a href="javascript:void(0)" class="sidebar-menu__link">
            <span class="icon"><i class="ph ph-chart-bar"></i></span>
            <span class="text">Penilaian</span>
          </a>
        </li>
        <li class="sidebar-menu__item">
          <a href="javascript:void(0)" class="sidebar-menu__link">
            <span class="icon"><i class="ph ph-monitor-play"></i></span>
            <span class="text">Konferensi</span>
          </a>
        </li>
        <li class="sidebar-menu__item">
          <a href="javascript:void(0)" class="sidebar-menu__link">
            <span class="icon"><i class="ph ph-calendar-star"></i></span>
            <span class="text">Plotting Guru Mengajar</span>
          </a>
        </li>
        <li class="sidebar-menu__item">
          <a href="javascript:void(0)" class="sidebar-menu__link">
            <span class="icon"><i class="ph ph-arrow-up"></i></span>
            <span class="text">Kenaikan Kelas</span>
          </a>
        </li>

        <li class="sidebar-menu__item has-dropdown">
          <a href="javascript:void(0)" class="sidebar-menu__link">
            <span class="icon"><i class="ph ph-users-three"></i></span>
            <span class="text">Data Pengguna</span>
          </a>
          <!-- Submenu start -->
          <ul class="sidebar-submenu">
            <li class="sidebar-submenu__item">
              <a href="create-course.html" class="sidebar-submenu__link"> Siswa </a>
            </li>
            <li class="sidebar-submenu__item">
              <a href="create-course.html" class="sidebar-submenu__link"> Guru </a>
            </li>
          </ul>
          <!-- Submenu End -->
        </li>
        <li class="sidebar-menu__item has-dropdown">
          <a href="javascript:void(0)" class="sidebar-menu__link">
            <span class="icon"><i class="ph ph-database"></i></span>
            <span class="text">Data Master</span>
          </a>
          <!-- Submenu start -->
          <ul class="sidebar-submenu">
            <li class="sidebar-submenu__item">
              <a href="student-courses.html" class="sidebar-submenu__link">Mata Pelajaran</a>
            </li>
            <li class="sidebar-submenu__item">
              <a href="student-courses.html" class="sidebar-submenu__link">Fase</a>
            </li>
            <li class="sidebar-submenu__item">
              <a href="mentor-courses.html" class="sidebar-submenu__link">Kelas</a>
            </li>
          </ul>
          <!-- Submenu End -->
        </li>
        <li class="sidebar-menu__item has-dropdown">
          <a href="javascript:void(0)" class="sidebar-menu__link">
            <span class="icon"><i class="ph ph-grains"></i></span>
            <span class="text">Pembelajaran</span>
          </a>
          <!-- Submenu start -->
          <ul class="sidebar-submenu">
            <li class="sidebar-submenu__item">
              <a href="student-courses.html" class="sidebar-submenu__link">Tahun Akademik</a>
            </li>
          </ul>
          <!-- Submenu End -->
        </li>
        <li class="sidebar-menu__item">
          <a href="javascript:void(0)" class="sidebar-menu__link">
            <span class="icon"><i class="ph ph-keyhole"></i></span>
            <span class="text">Manajemen Hak Akses</span>
          </a>
        </li>
        <li class="sidebar-menu__item">
          <a href="javascript:void(0)" class="sidebar-menu__link">
            <span class="icon"><i class="ph ph-gear"></i></span>
            <span class="text">Pengaturan Akun</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</aside>
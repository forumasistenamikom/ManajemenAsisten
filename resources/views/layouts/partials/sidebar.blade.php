<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('message.online') }}</a>
            </div>
        </div>
        @endif

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">NAVIGASI UTAMA</li>
            <li id="dashboard" >
                <a href="{{ url('dasbor') }}">
                    <i class="fa fa-dashboard"></i> <span>Dasbor</span>
                </a>
            </li>
            <li id="matakuliah" >
                <a href="{{ url('matakuliah') }}">
                    <i class="fa fa-file"></i> <span>Matakuliah</span>
                </a>
            </li>
            <li id="mahasiswa" >
                <a href="{{ url('mahasiswa') }}">
                    <i class="fa fa-users"></i> <span>Mahasiswa</span>
                </a>
            </li>
            <li id="asisten" class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Asisten</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li ><a href="{{ url('asisten') }}"><i class="fa fa-circle-o"></i> List Asisten</a></li>
                    <li ><a href="{{ url('asisten/tambah/kolektif') }}"><i class="fa fa-circle-o"></i> Menambahkan (Kol)</a></li>
                    <li ><a href="{{ url('asisten/hapus/kolektif') }}"><i class="fa fa-circle-o"></i> Menghapus (Kol)</a></li>
                </ul>
            </li>
            <li id="history" >
                <a href="{{ url('history') }}">
                    <i class="fa fa-user"></i> <span>History Asisten</span>
                </a>
            </li>
            <li id="presensi" >
                <a href="{{ url('presensi') }}">
                    <i class="fa fa-calendar"></i> <span>Presensi</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

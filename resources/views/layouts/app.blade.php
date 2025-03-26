<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/css/adminlte.min.css"
        integrity="sha512-IuO+tczf4J43RzbCMEFggCWW5JuX78IrCJRFFBoQEXNvGI6gkUw4OjuwMidiS4Lm9Q2lILzpJwZuMWuSEeT9UQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    <link rel="shortcut icon" href="{{ asset('img/attendance.ico') }}" type="image/x-icon">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed text-sm">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-info navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown user user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="/img/profile.jpg" class="user-image img-circle" alt="User Image">
                        <span class="d-none d-lg-inline-block d-md-inline-block">Alexander Pierce</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <li class="user-header bg-info">
                            <img src="/img/profile.jpg" class="img-circle" alt="User Image">
                            <p>
                                Alexander Pierce
                                <small>Administrator</small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="float-left">
                                <a href="#" class="btn btn-info btn-flat">Profile</a>
                            </div>
                            <div class="float-right">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" onclick="return confirm('Yakin ingin logout?')"
                                        class="btn btn-danger btn-flat">Sign out</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-info elevation-3">
            <div class="brand-link bg-info">
                <img src="{{ asset('img/attendance.png') }}" alt="AdminLTE Logo" class="brand-image">
                <span class="brand-text font-weight-bold">Presensi App</span>
            </div>

            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-flat nav-child-indent" data-widget="treeview"
                        role="menu" data-accordion="false">
                        <li class="nav-header">Menu Utama</li>
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}"
                                class="nav-link active">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href=""
                                class="nav-link">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                                <p>Absensi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Data Pegawai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Data User</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- CONTENT -->
        <div class="content-wrapper">
            <section class="content pt-2">
                <div class="container-fluid">

                    @yield('content')

                </div>
            </section>
        </div>
        <!-- /CONTENT -->

        <footer class="main-footer text-center">
            <strong>Copyright &copy; 2025</strong> Company
        </footer>

    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.2.0/js/adminlte.min.js"
        integrity="sha512-KBeR1NhClUySj9xBB0+KRqYLPkM6VvXiiWaSz/8LCQNdRpUm38SWUrj0ccNDNSkwCD9qPA4KobLliG26yPppJA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
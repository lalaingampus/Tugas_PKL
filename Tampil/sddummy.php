<head>
    <link rel="stylesheet" href="../aset/css/style2.css">
    <!-- Font Awesome JS -->
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

 

</head>
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Project X</h3>
        </div>
        <ul class="list-unstyled">
            <!--<li>
                <a href="index.php?page=home"><i class="fa fa-home"></i> Home</a>
            </li>-->
            <li>
               <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-folder"></i> Refrensi</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="?page=lihat_cluster">Ref. Cluster</a>
                    </li>
                    <li>
                        <a href="?page=lihat_apk">Ref. Aplikasi</a>
                    </li>
                    <li>
                        <a href="?page=lihat_websrv">Ref. Web Server</a>
                    </li>
                    <li>
                        <a href="?page=lihat_db">Ref. Database</a>
                    </li>
                    <li>
                        <a href="?page=lihat_login">Ref. Login</a>
                    </li>
                    <li>
                        <a href="#">Ref. System Update</a>
                    </li>
                    <li>
                        <a href="#">Ref. User</a>
                    </li>
                    <li>
                        <a href="?page=input_cluster">Input Cluster</a>
                    </li>
                </ul>
            </li>    
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-file"></i> Aplikasi</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="?page=lihat_apk">Daftar Aplikasi</a>
                    </li>
                    <li>
                        <a href="?page=input_apk">Input Aplikasi</a>
                    </li>
                </ul>
            </li>
            <li>
               <a href="#WebSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-globe"></i> Web Server</a>
                <ul class="collapse list-unstyled" id="WebSubmenu">
                    <li>
                        <a href="?page=lihat_websrv">Daftar Web Server</a>
                    </li>
                    <li>
                        <a href="?page=input_websrv">Input Web Server</a>
                    </li>
                </ul>
            </li>
            <li>
               <a href="#dbSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-database"></i> Database</a>
                <ul class="collapse list-unstyled" id="dbSubmenu">
                    <li>
                        <a href="?page=lihat_db">Daftar Database</a>
                    </li>
                    <li>
                        <a href="?page=input_db">Input Database</a>
                    </li>
                </ul>
            </li>
            <li>
               <a href="#lgSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-id-card"></i> login</a>
                <ul class="collapse list-unstyled" id="lgSubmenu">
                    <li>
                        <a href="?page=lihat_login">Daftar Login</a>
                    </li>
                    <li>
                        <a href="?page=input_login">Input Login</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

<!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
           <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });
        });
    </script>
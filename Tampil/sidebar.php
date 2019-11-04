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
                        <a href="?page=lihat_login">Ref. User</a>
                    </li>
                    <li>
                        <a href="#">Ref. System Update</a>
                    </li>
                </ul>
            </li>    
            <li>
                <a href="index.php?page=a"><i class="fa fa-id-card"></i> Transaksi</a>
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
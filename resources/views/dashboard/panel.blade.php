@include('includs.h_panel')

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="/panel_d">لوحة تحكم الموقع</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">

                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/assets/images/11.png" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">majed elfarra </h5>
                                </div>
                                <a class="dropdown-item" href="/user/view"><i class="fas fa-user mr-2"></i>الحساب</a>
                                <a class="dropdown-item" href="/setting/create"><i class="fas fa-cog mr-2"></i>إعدادات الموقع</a>
                                <a class="dropdown-item" href="/logout"><i class="fas fa-power-off mr-2"></i>الخروج</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                القائمة
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="/panel_d" data-toggle="" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>التحكم <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">

                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>نشر المواضيع</a>
                                <div id="submenu-2" class="collapse submenu" style="">

                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/post/index">إضافة</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/post/view_data">جميع المنشورات</a>
                                        </li>

                                    </ul>

                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>الأقسام</a>
                                <div id="submenu-3" class="collapse submenu" style="">

                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/category/create">إضافة</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/category/index">جميع الأقسام</a>
                                        </li>

                                    </ul>

                                </div>
                            </li>


                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>السيرة الذاتية</a>
                                <div id="submenu-5" class="collapse submenu" style="">

                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/download/index">إضافة</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/download/view_data">تعديل</a>
                                        </li>

                                    </ul>

                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/setting/create" data-toggle="" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>إعدادت الموقع</a>
                                <div id="submenu-6" class="collapse submenu" style="">

                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/contact/view" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> الإتصال </a>
                                <div id="submenu-7" class="collapse submenu" style="">


                                    <ul class="nav flex-column">

                                        <li class="nav-item">
                                            <a class="nav-link" href="/contactpersonal/create">إضافة</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/contact/view">بيانات المتصلين</a>
                                        </li>

                                    </ul>


                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">

                            @yield('conection')



                        </div>
                      </div>


                    </div>
                </div>
            </div>

        </div>

    </div>




    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="/assets/libs/js/dashboard-ecommerce.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.20/datatables.min.css"/>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.20/datatables.min.js"></script>
<script>
    $('table').DataTable();
</script>

<script>

$(document).ready(function() {
	var showChar = 60;
	var ellipsestext = "...";
	var moretext = "more";
	var lesstext = "less";
	$('.more').each(function() {
		var content = $(this).html();

		if(content.length > showChar) {

			var c = content.substr(0, showChar);
			var h = content.substr(showChar-1, content.length - showChar);

			var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

			$(this).html(html);
		}

	});

	$(".morelink").click(function(){
		if($(this).hasClass("less")) {
			$(this).removeClass("less");
			$(this).html(lesstext);
		} else {
			$(this).addClass("less");
			$(this).html(moretext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
	});
});



</script>

</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <base href="{{ asset('') }}">
    <!-- BEGIN PLUGIN CSS -->
    <link href="admin-template/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="admin-template/assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css"
        media="screen" />
    <link href="admin-template/assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet"
        type="text/css" />
    <link href="admin-template/assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet"
        type="text/css" media="screen" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN PLUGIN CSS -->
    <link href="admin-template/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css"
        media="screen" />
    <link href="admin-template/assets/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="admin-template/assets/plugins/bootstrapv3/css/bootstrap-theme.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="admin-template/assets/plugins/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="admin-template/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="admin-template/webarch/css/webarch.css" rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="">
    <!-- BEGIN HEADER -->
    @include('admin.layouts.header')
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container row-fluid">
        <!-- BEGIN SIDEBAR -->

        @include('admin.layouts.sidebar')

        <!-- END SIDEBAR -->
        <!-- BEGIN PAGE CONTAINER-->
        <div class="page-content">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div id="portlet-config" class="modal hide">
                <div class="modal-header">
                    <button data-dismiss="modal" class="close" type="button"></button>
                    <h3>Widget Settings</h3>
                </div>
                <div class="modal-body"> Widget settings form goes here </div>
            </div>
            <div class="clearfix"></div>
            <div class="content sm-gutter">
                <div class="page-title">
                </div>
                <!-- BEGIN DASHBOARD TILES -->
                @yield('content')
            </div>
        </div>
        <!-- BEGIN CHAT -->

        <!-- END CHAT -->
    </div>
    <!-- END CONTAINER -->
    <script src="admin-template/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN JS DEPENDECENCIES-->
    <script src="admin-template/assets/plugins/jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/jquery-block-ui/jqueryblockui.min.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript">
    </script>
    <script src="admin-template/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript">
    </script>
    <script src="admin-template/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript">
    </script>
    <script src="admin-template/assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
    <!-- END CORE JS DEPENDECENCIES-->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="admin-template/webarch/js/webarch.js" type="text/javascript"></script>
    <script src="admin-template/assets/js/chat.js" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="admin-template/assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
    <script src="admin-template/assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript">
    </script>
    <script src="admin-template/assets/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js"
        type="text/javascript"></script>
    <script type="text/javascript"
        src="admin-template/assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
    <script type="text/javascript" src="admin-template/assets/plugins/datatables-responsive/js/lodash.min.js"></script>
    <!-- END PAGE LEVEL JS INIT -->
    <script src="admin-template/assets/js/datatables.js" type="text/javascript"></script>



    {{-- ckfinder --}}
    <script src="{{ asset('ckfinder/ckfinder.js') }}"></script>
    <script src="admin-template/assets/ckfinder/ckfinder.js" type="text/javascript"></script>
    <script src="admin-template/assets/ckeditor/ckeditor.js" type="text/javascript"></script>



            <script>
                CKEDITOR.replace('content');
                CKEDITOR.replace('content1');
                CKEDITOR.replace('content2');
                CKEDITOR.replace('content3');
                CKEDITOR.replace('content4');
                CKEDITOR.replace('content5');
                CKEDITOR.replace('introduce_content');
                CKEDITOR.replace('intro_content');
                CKEDITOR.replace('polycies_content');
                CKEDITOR.replace('question_content');
                CKEDITOR.replace('promotion_content');

               
            </script>
            
   
 @yield('script')
    <script>
        function changeImg(input){

               //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
               if(input.files && input.files[0]){
                   var reader = new FileReader();
                   //Sự kiện file đã được load vào website
                   reader.onload = function(e){
                       //Thay đổi đường dẫn ảnh
                       $('#avatar').attr('src',e.target.result);
                   }
                   reader.readAsDataURL(input.files[0]);
               }
           }
           $(document).ready(function() {
               $('#avatar').click(function(){
                   $('#img').click();
            });
        });
    </script>

    <script>
        function changeVideo(input){

               //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
               if(input.files && input.files[0]){
                   var reader = new FileReader();
                   //Sự kiện file đã được load vào website
                   reader.onload = function(e){
                       //Thay đổi đường dẫn ảnh
                       $('#avatarVideo').attr('src',e.target.result);
                   }
                   reader.readAsDataURL(input.files[0]);
               }
           }
           $(document).ready(function() {
               $('#avatarVideo').click(function(){
                   $('#vdeo').click();
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
             $('#example').dataTable({

                "oLanguage": {
                    sSearch: "Tìm kiếm:",
                    "oPaginate": {
                        sNext:    "Sau",
                        sPrevious: "Trước",
                    },
                    EmptyTable:     "Không có dữ liệu trong bảng",
                    sInfo:           "Hiển thị _START_ đến _END_ trong tổng số _TOTAL_ dữ liệu",
                    sInfoEmpty:      "Hiển thị 0 dữ liệu",
                    sInfoFiltered:   "(lọc từ toàn bộ _MAX_ dữ liệu)",
                    sLengthMenu:     "HIển Thị _MENU_ dữ liệu",
                    sLoadingRecords: "Đang Tải...",
                    sProcessing:     "Đang Xử Lí...",
                    sZeroRecords:    "Không tìm thấy dữ liệu",
                },
                 "bDestroy": true,
            });
        });
    </script>
</body>

</html>

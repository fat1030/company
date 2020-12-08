@extends("backend.app")
@section("içerik")
    <h2 class="page-header">AdminLTE Custom Tabs</h2>
    <link rel="stylesheet" href="/backend/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/backend/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/backend/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/backend/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/backend/dist/css/skins/_all-skins.min.css">



    <!-- Horizontal Form -->
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">PERSON</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label"> Name</label>

                    <div class="col-sm-10">
                        <input type="" class="form-control" id="Name" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Last Name</label>

                    <div class="col-sm-10">
                        <input type="" class="form-control" id="LastName" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Title</label>

                    <div class="col-sm-10">
                        <input type="" class="form-control" id="Title" placeholder="Title">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">E-Mail Adress</label>

                    <div class="col-sm-10">
                        <input type="" class="form-control" id="E-Mail Adress" placeholder="E-Mail Adress">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Phone Number</label>

                    <div class="col-sm-10">
                        <input type="" class="form-control" id="Phone Number" placeholder="Phone Number">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">

                    </div>
                </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-default" style=" float: right; margin-top: 20px; margin-right: 20px;">Save</button>

            </div>
            <!-- /.box-footer -->
        </form>
    </div>
@endsection

@section("css")



@endsection

@section("js")

    <script src="/backend/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="/backend/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/backend/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/backend/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/backend/dist/js/demo.js"></script>
    <![endif]-->


@endsection

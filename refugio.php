<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>#UnaSolaFuerza</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
        <!-- FontAwesome 4.3.0 -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons 2.0.0 -->
        <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
        <!-- Theme style -->
        <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins 
             folder instead of downloading all of them to reduce the load. -->
        <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
        <!-- iCheck -->
        <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <div class="wrapper">


            <!-- Left side column. contains the logo and sidebar -->

            <!-- sidebar: style can be found in sidebar.less -->
            <?php
            include './menu.php';
            ?>

            <!-- /.sidebar -->


            <!-- Right side column. Contains the navbar and content of the page -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Refugios
                        <small>Control panel</small>
                    </h1>          
                </section>

                <!-- Main content -->
                <section class="content">

                    <div class="row">
                        <div class="col-md-12">
                            <!-- Default box -->
                            <div role="tabpanel">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#seccion1" aria-controls="seccion1" data-toggle="tab" role="tab">Listado</a></li>
                                    <li role="presentation"><a href="#seccion2" aria-controls="seccion2" data-toggle="tab" role="tab">Agregar</a></li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="seccion1">
                                        <h3>Listado de Refugios </h3>
                                        <table id="example2" class="table table-responsive dataTable" aria-describedby="example2_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                                        Nombre
                                                    </th>
                                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                                                        Ubicación
                                                    </th>
                                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                                        Encargado
                                                    </th>
                                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
                                                        Personas
                                                    </th>
                                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                                        Opcion
                                                    </th>
                                                </tr>
                                            </thead>


                                            <tbody role="alert" aria-live="polite" aria-relevant="all"><tr class="odd">
                                                    <td class="  sorting_1">Gecko</td>
                                                    <td class=" ">Firefox 1.0</td>
                                                    <td class=" ">Win 98+ / OSX.2+</td>
                                                    <td class=" ">1.7</td>
                                                    
                                                    <td class=" "><button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                                                </tr><tr class="even">
                                                    <td class="  sorting_1">Gecko</td>
                                                    <td class=" ">Firefox 1.5</td>
                                                    <td class=" ">Win 98+ / OSX.2+</td>
                                                    <td class=" ">1.8</td>
                                                    
                                                    <td class=" "><button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                                                </tr><tr class="odd">
                                                    <td class="  sorting_1">Gecko</td>
                                                    <td class=" ">Firefox 2.0</td>
                                                    <td class=" ">Win 98+ / OSX.2+</td>
                                                    <td class=" ">1.8</td>
                                                    
                                                    <td class=" "><button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                                                </tr><tr class="even">
                                                    <td class="  sorting_1">Gecko</td>
                                                    <td class=" ">Firefox 3.0</td>
                                                    <td class=" ">Win 2k+ / OSX.3+</td>
                                                    <td class=" ">1.9</td>
                                                    
                                                    <td class=" "><button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                                                </tr><tr class="odd">
                                                    <td class="  sorting_1">Gecko</td>
                                                    <td class=" ">Camino 1.0</td>
                                                    <td class=" ">OSX.2+</td>
                                                    <td class=" ">1.8</td>
                                                    
                                                    <td class=" "><button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                                                </tr><tr class="even">
                                                    <td class="  sorting_1">Gecko</td>
                                                    <td class=" ">Camino 1.5</td>
                                                    <td class=" ">OSX.3+</td>
                                                    <td class=" ">1.8</td>
                                                    
                                                    <td class=" "><button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                                                </tr><tr class="odd">
                                                    <td class="  sorting_1">Gecko</td>
                                                    <td class=" ">Netscape 7.2</td>
                                                    <td class=" ">Win 95+ / Mac OS 8.6-9.2</td>
                                                    <td class=" ">1.7</td>
                                                    
                                                    <td class=" "><button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                                                </tr><tr class="even">
                                                    <td class="  sorting_1">Gecko</td>
                                                    <td class=" ">Netscape Browser 8</td>
                                                    <td class=" ">Win 98SE+</td>
                                                    <td class=" ">1.7</td>
                                                    
                                                    <td class=" "><button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                                                </tr><tr class="odd">
                                                    <td class="  sorting_1">Gecko</td>
                                                    <td class=" ">Netscape Navigator 9</td>
                                                    <td class=" ">Win 98+ / OSX.2+</td>
                                                    <td class=" ">1.8</td>
                                                    
                                                    <td class=" "><button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                                                </tr><tr class="even">
                                                    <td class="  sorting_1">Gecko</td>
                                                    <td class=" ">Mozilla 1.0</td>
                                                    <td class=" ">Win 95+ / OSX.1+</td>
                                                    <td class=" ">1</td>
                                                    
                                                    <td class=" "><button class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                                    <button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                                                </tr></tbody></table><div class="row"><div class="col-xs-6"><div class="dataTables_info" id="example2_info">Showing 1 to 10 of 57 entries</div></div><div class="col-xs-6"><div class="dataTables_paginate paging_bootstrap"><ul class="pagination"><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li><a href="#">5</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>

                                    <div role="tabpanel" class="tab-pane" id="seccion2">
                                        <h3>Agregar Refugio</h3>
                                        <form role="form">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" class="form-control" id="name" placeholder="Escriba el nombre">
                                                </div>
                                                <div class="form-group">
                                                    <label>Ubicación</label>
                                                    <input type="text" class="form-control" id="place" placeholder="Escriba la Ubicación">
                                                </div>
                                                <div class="form-group">
                                                    <label>Encargado</label>
                                                    <input type="text" class="form-control" id="person" placeholder="Escriba Encargado">
                                                </div>
                                                <div class="form-group">
                                                    <label>Personas</label>
                                                    <input type="number" class="form-control" id="number_person" placeholder="Escriba el numero de personas">
                                                </div>
                                            </div>

                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-primary">Agregar</button>
                                                <button type="reset" class="btn btn-danger">Cancelar</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div><!-- /.col -->

                    </div>

                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.0
                </div>
                <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
            </footer>
        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.3 -->
        <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
        <!-- jQuery UI 1.11.2 -->
        <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    

        <!-- Sparkline -->
        <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- datepicker -->
        <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- Slimscroll -->
        <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- FastClick -->
        <script src='plugins/fastclick/fastclick.min.js'></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

        <!-- DataTables -->
        <script src="plugins/datatables/jquery.dataTables.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js" type="text/javascript"></script>
        <script>
            $(function () {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });
        </script>
    </body>
</html>
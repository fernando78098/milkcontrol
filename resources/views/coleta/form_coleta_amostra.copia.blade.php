

                <!DOCTYPE html>
                <html lang="pt-br">
                <head>
                    <meta charset="UTF-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
                    <title>{{  $final ?? null }}</title>
                    <meta name="description" content="Grandin is a Dashboard & Admin Site Responsive Template by hencework." />
                    <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Grandin Admin, Grandinadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
                    <meta name="author" content="hencework"/>

                    <!-- Favicon -->
                    <link rel="shortcut icon" href="favicon.ico">
                    <link rel="icon" href="favicon.ico" type="image/x-icon">
                    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
                    <!-- Data table CSS -->
                    <link href=" {{ asset('vendors2/bower_components/datatables/media/css/jquery.dataTables.min.css') }} " rel="stylesheet" type="text/css"/>

                    <!-- Custom CSS   -->
                    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">
                </head>

                <body>
                        <!-- Main Content -->

                            <div class="container-fluid">
                                <center><h1>coleta de Leite</h1></center>

                                <!-- Row -->
                                <div class="row">

                                    <div class="panel panel-default card-view">





                                            <form action=" {{ route('coletado') }} " method="POST">
                                                @csrf
                                                <thead>
                                                    <tr class="row">
                                                        <th class="col-xs-12 col-md-3 "><center>Vaca</center></th>
                                                        <th class="col-xs-12 col-md-2 "><center>AE</center></th>
                                                        <th class="col-xs-12 col-md-2"><center>AD</center></th>
                                                        <th class="col-xs-12 col-md-2"><center>PE</center></th>
                                                        <th class="col-xs-12 col-md-2"><center>PD</center></th>

                                                    </tr>
                                                </thead>

                                                <tbody>

                                                    @for ($i = 0; $i < $total_vacas; $i++)

                                                        <tr class="row">
                                                            <td class="col-md-3 col-xs-7"><input type="text" class="form-control col-xs-7" value=" {{ $vaca['vaca'][$i] }} " placeholder="N° BRINCO" name="vaca[]"></td>
                                                            <td class="col-md-2 col-xs-4">
                                                                @if (in_array($vaca['vaca'][$i], $set))

                                                                    <input type="text" class="form-control col-xs-15" value="  " placeholder="N°" name="coleta_ae[]">

                                                                @else

                                                                    <input type="hidden" class="form-control" value="  " placeholder="N°" name="coleta_ae[]">

                                                                @endif
                                                            </td>
                                                            <td class="col-md-2 col-xs-4">
                                                                @if (in_array($vaca['vaca'][$i], $set))

                                                                    <input type="text" class="form-control" value="  " placeholder="N°" name="coleta_ae[]">

                                                                @else

                                                                    <input type="hidden" class="form-control" value="  " placeholder="N°" name="coleta_ae[]">

                                                                @endif
                                                            </td>
                                                            <td class="col-md-2 col-xs-4">
                                                                @if (in_array($vaca['vaca'][$i], $set))

                                                                    <input type="text" class="form-control" value="  " placeholder="N°" name="coleta_ae[]">

                                                                @else

                                                                    <input type="hidden" class="form-control" value="  " placeholder="N°" name="coleta_ae[]">

                                                                @endif
                                                            </td>
                                                            <td class="col-md-2 col-xs-4">
                                                                @if (in_array($vaca['vaca'][$i], $set))

                                                                    <input type="text" class="form-control" value="  " placeholder="N°" name="coleta_ae[]">

                                                                @else

                                                                    <input type="hidden" class="form-control" value="  " placeholder="N°" name="coleta_ae[]">

                                                                @endif
                                                            </td>


                                                        </tr>
                                                    @endfor
                                                </tbody>
                                            </form>

                                                            <div class="col-md-12 col-xs-12">

                                                                <center><button type="submit" class="btn btn-primary">Salvar</button></center>

                                                            </div>




                                        </div>

                                </div>
                                <!-- /Row -->
                            </div>

                            <!-- Footer -->
                            <footer class="footer container-fluid pl-30 pr-30">
                                <div class="row">
                                            <div class="pull-right hidden-xs">
                                                <b>Versão</b> 1.0
                                            </div>

                                              <div class="col-sm-8">
                                                    <p>2019-2025 &copy; Luiz Fernando. Todos os direitos reservados</p>
                                                </div>

                                </div>
                            </footer>
                            <!-- /Footer -->


                        <!-- /Main Content -->

                    </div>
                    <!-- /#wrapper -->

                    <!-- JavaScript -->

                    <!-- jQuery -->
                    <script src=" {{ asset('vendors2/bower_components/jquery/dist/jquery.min.js') }}"></script>

                    <!-- Bootstrap Core JavaScript -->
                    <script src="{{ asset('vendors2/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

                    <!-- Data table JavaScript -->
                    <script src="{{ asset('vendors2/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
                    <script src="{{ asset('vendors2/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
                    <script src="{{ asset('vendors2/bower_components/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
                    <script src="{{ asset('vendors2/bower_components/jszip/dist/jszip.min.js') }}"></script>
                    <script src="{{ asset('vendors2/bower_components/pdfmake/build/pdfmake.min.js') }}"></script>
                    <script src="{{ asset('vendors2/bower_components/pdfmake/build/vfs_fonts.js') }}"></script>

                    <script src="{{ asset('vendors2/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
                    <script src="{{ asset('vendors2/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
                    <script src="{{ asset('dist/js/export-table-data.js') }}"></script>

                    <!-- Slimscroll JavaScript -->
                    <script src="{{ asset('dist/js/jquery.slimscroll.js') }}"></script>

                    <!-- Owl JavaScript -->
                    <script src="{{ asset('vendors2/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>

                    <!-- Switchery JavaScript -->
                    <script src="{{ asset('vendors2/bower_components/switchery/dist/switchery.min.js') }}"></script>


                    <!-- Fancy Dropdown JS -->
                    <script src="{{ asset('dist/js/dropdown-bootstrap-extended.js') }}"></script>

                    <!-- Init JavaScript -->
                    <script src="{{ asset('dist/js/init.js') }}"></script>

                </body>

                </html>



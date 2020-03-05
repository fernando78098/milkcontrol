@extends('layouts.dashboard')

    @section('content')



                                        <!-- Main content -->
                            <section class="content">
                                    <center><div class="row">
                                        <!-- left column -->
                                        <div class="col-md-6 col-xs-12">
                                        <!-- general form elements -->
                                        <div class="box box-primary">
                                            <form action=" {{ route('procurando') }} " method="POST" >
                                                @csrf
                                                <div class="box-header with-border">
                                                    <h3 class="box-title">TRATAMENTO MASTITE</h3>
                                                </div>
                                                    <div class="box-body">
                                                        <div class="form-group col-md-6 col-xs-6">
                                                        <label>VACA</label>
                                                        <input type="number" class="form-control"  placeholder="N° BRINCO" name="vaca[]">
                                                        <input type="number" class="form-control"  placeholder="N° BRINCO" name="vaca[]">
                                                        <input type="number" class="form-control"  placeholder="N° BRINCO" name="vaca[]">
                                                        <input type="number" class="form-control"  placeholder="N° BRINCO" name="vaca[]">
                                                        <input type="number" class="form-control"  placeholder="N° BRINCO" name="vaca[]">
                                                        <input type="number" class="form-control"  placeholder="N° BRINCO" name="vaca[]">
                                                        <input type="number" class="form-control"  placeholder="N° BRINCO" name="vaca[]">
                                                        <input type="number" class="form-control"  placeholder="N° BRINCO" name="vaca[]">
                                                        <input type="number" class="form-control"  placeholder="N° BRINCO" name="vaca[]">
                                                        <input type="number" class="form-control"  placeholder="N° BRINCO" name="vaca[]">
                                                        <input type="number" class="form-control"  placeholder="N° BRINCO" name="vaca[]">
                                                        <input type="number" class="form-control"  placeholder="N° BRINCO" name="vaca[]">

                                                    </div>
                                                    <div class="form-group col-md-6 col-xs-6">
                                                        <label >Massa</label>
                                                        <select class="form-control" name="massa[]"><option></option><option>sim</option><option>não</option></select>
                                                        <select class="form-control" name="massa[]"><option></option><option>sim</option><option>não</option></select>
                                                        <select class="form-control" name="massa[]"><option></option><option>sim</option><option>não</option></select>
                                                        <select class="form-control" name="massa[]"><option></option><option>sim</option><option>não</option></select>
                                                        <select class="form-control" name="massa[]"><option></option><option>sim</option><option>não</option></select>
                                                        <select class="form-control" name="massa[]"><option></option><option>sim</option><option>não</option></select>
                                                        <select class="form-control" name="massa[]"><option></option><option>sim</option><option>não</option></select>
                                                        <select class="form-control" name="massa[]"><option></option><option>sim</option><option>não</option></select>
                                                        <select class="form-control" name="massa[]"><option></option><option>sim</option><option>não</option></select>
                                                        <select class="form-control" name="massa[]"><option></option><option>sim</option><option>não</option></select>
                                                        <select class="form-control" name="massa[]"><option></option><option>sim</option><option>não</option></select>
                                                        <select class="form-control" name="massa[]"><option></option><option>sim</option><option>não</option></select>







                                                    </div>
                                                    </div>
                                                    <div class="box-footer">

                                                        <button type="submit" class="btn btn-primary">Procurar</button>

                                                    </div>
                                            </form>
                                        </div>
                                        <!-- /.box -->
                                    </div>
                                <!-- /.row -->
                                </section>

        <!-- /Main Content -->
        @endsection

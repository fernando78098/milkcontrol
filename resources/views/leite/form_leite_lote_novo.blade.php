@extends('layouts.dashboard')

    @section('content')
        <section class="content">
            <center><div class="row">
                <!-- left column -->
                <div class="col-md-6 col-xs-12">
                        @if($errors->any())
                        @foreach($errors->all() as $error)      {{ $error }} @endforeach 
                    @elseif(session()->has('success'))
                        {{ session('success') }}
                    @endif
                <!-- general form elements -->
                <div class="box box-primary">
                    <form action=" {{ action('LeiteController@store') }} " method="POST" >
                        @csrf
                        <div class="box-header with-border">
                            <h3 class="box-title">PESAGEM LEITE</h3>
                        </div>
                            <div class="box-body">
                                <div class="form-group col-md-4 col-xs-4">
                                    <label>VACA</label>
                                    <input type="number" class="form-control"  placeholder="Vaca 1" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 2" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 3" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 4" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 5" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 6" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 7" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 8" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 9" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 10" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 11" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 12" name="vaca[]">

                                </div>
                                <div class="form-group col-md-4 col-xs-4">
                                    <label >LEITE</label>
                                    <input type="number" class="form-control"  placeholder="LEITE 1" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 2" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 3" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 4" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 5" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 6" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 7" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 8" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 9" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 10" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 11" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 12" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">


                                </div>
                                <div class="form-group col-md-4 col-xs-4">
                                    <label >Lote</label>
                                    <input type="number" class="form-control"  placeholder="Lote 1" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 2" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 3" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 4" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 5" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 6" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 7" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 8" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 9" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 10" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 11" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 12" name="lote[]">

                                </div>
                            </div>


                            <div class="box-body">
                                <div class="form-group col-md-4 col-xs-4">
                                    <label>VACA</label>
                                    <input type="number" class="form-control"  placeholder="Vaca 1" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="vaca 2" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 3" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 4" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 5" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 6" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 7" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 8" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 9" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 10" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 11" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 12" name="vaca[]">

                                </div>
                                <div class="form-group col-md-4 col-xs-4">
                                    <label >LEITE</label>
                                    <input type="number" class="form-control"  placeholder="LEITE 1" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 2" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 3" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 4" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 5" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 6" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 7" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 8" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 9" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 10" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 11" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 12" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">

                                </div>
                                <div class="form-group col-md-4 col-xs-4">
                                    <label >Lote</label>
                                    <input type="number" class="form-control"  placeholder="Lote 1" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 2" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 3" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 4" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 5" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 6" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 7" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 8" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 9" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 10" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 11" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 12" name="lote[]">

                                </div>
                            </div>





                            <div class="box-footer">

                                <button type="submit" class="btn btn-primary">SALVAR</button>

                            </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        <!-- /.row -->
        </section>
    
    @endsection
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
                                    <input type="number" class="form-control"  placeholder="Vaca 1 -- '0'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 2 --'1'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 3 --'2'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 4 --'3'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 5 --'4'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 6 --'5'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 7 --'6'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 8 --'7'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 9 --'8'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 10 --'9'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 11 --'10'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 12 --'11'" name="vaca[]">

                                </div>
                                <div class="form-group col-md-4 col-xs-4">
                                    <label >LEITE</label>
                                    <input type="number" class="form-control"  placeholder="LEITE 1 --'0'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 2 --'1'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 3 --'2'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 4 --'3'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 5 --'4'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 6 --'5'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 7 --'6'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 8 --'7'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 9 --'8'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 10 --'9'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 11 --'10'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 12 --'11'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">


                                </div>
                                <div class="form-group col-md-4 col-xs-4">
                                    <label >Lote</label>
                                    <input type="number" class="form-control"  placeholder="Lote 1 --'0'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 2 --'1'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 3 --'2'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 4 --'3'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 5 --'4'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 6 --'5'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 7 --'6'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 8 --'7'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 9 --'8'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 10 --'9'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 11 --'10'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 12 --'11'" name="lote[]">

                                </div>
                            </div>


                            <div class="box-body">
                                <div class="form-group col-md-4 col-xs-4">
                                    <label>VACA</label>
                                    <input type="number" class="form-control"  placeholder="Vaca 1 --'12'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="vaca 2 --'13'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 3 --'14'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 4 --'15'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 5 --'16'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 6 --'17'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 7 --'18'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 8 --'19'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 9 --'20'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 10 --'21'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 11 --'22'" name="vaca[]">
                                    <input type="number" class="form-control"  placeholder="Vaca 12 --'23'" name="vaca[]">

                                </div>
                                <div class="form-group col-md-4 col-xs-4">
                                    <label >LEITE</label>
                                    <input type="number" class="form-control"  placeholder="LEITE 1 --'12'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 2 --'13'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 3 --'14'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 4 --'15'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 5 --'16'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 6 --'17'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 7 --'18'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 8 --'19'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 9 --'20'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 10 --'21'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 11 --'22'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">
                                    <input type="number" class="form-control"  placeholder="LEITE 12 --'23'" name="leite[]" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any">

                                </div>
                                <div class="form-group col-md-4 col-xs-4">
                                    <label >Lote</label>
                                    <input type="number" class="form-control"  placeholder="Lote 1 --'12'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 2 --'13'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 3 --'14'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 4 --'15'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 5 --'16'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 6 --'17'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 7 --'18'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 8 --'19'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 9 --'20'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 10 --'21'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 11 --'22'" name="lote[]">
                                    <input type="number" class="form-control"  placeholder="Lote 12 --'23'" name="lote[]">

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
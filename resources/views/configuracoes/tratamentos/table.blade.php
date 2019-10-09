@extends('layouts.dashboard')

    @section('content')
        <!-- Row -->
				<div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default card-view">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">Lista de tratamentos</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="table-wrap">
                                            <div class="mt-40">
                                                <table class="tablesaw table-bordered table-hover table" data-tablesaw-mode="swipe">
                                                    <thead>
                                                        <tr>
                                                          <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Nome do tratamento</th>
                                                          <th scope="col" data-tablesaw-sortable-col data-tablesaw-sortable-default-col data-tablesaw-priority="3">Medicamento</th>
                                                          <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="2">minimo</th>
                                                          <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="1"><abbr title="Rotten Tomato Rating">Maximo</abbr></th>
                                                          <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="4">Carencia</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($dados as $item)

                                                            <tr>
                                                                <td class="title"><a href="javascript:void(0)">{{ $item->nome }}</a></td>
                                                                <td> {{ $item->medicamento }} </td>
                                                                <td> {{ $item->min }} </td>
                                                                <td> {{ $item->max }} </td>
                                                                <td> {{ $item->carencia }} </td>
                                                            </tr>

                                                        @endforeach


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->
    @endsection

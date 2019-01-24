@extends('adminlte::page')
@section('title','Lista de  Instituições')
@section('content_header')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Registro de Presença</h3>

                </div>
                <div class="box-body">
                    <div class="row-fluid"></div>
                    <table class="table table-bordered table-hover table-striped table-condensed">
                        <tbody>
                        <tr>
                            <th class="text-center">Nome</th>
                            <th colspan="2" class="text-center">Ações</th>
                        </tr>
                        <!-- foreach-->
                        <tr>
                            <td class="text-center">Fagner Vieira de Almeida</td>
                            <td class="text-center"><label class=" ">
                                    <div class="checked">
                                        <input type="checkbox" checked="checked"> Presença
                                        <input type="checkbox" checked="checked"> Falta
                                    </div>
                                </label>
                            </td>
                        </tr>
                            <td class="text-center">Joao da silva</td>
                        <td class="text-center"><label class=" ">
                                <div class="checked">
                                    <input type="checkbox" checked="checked"> Presença
                                    <input type="checkbox" checked="checked"> Falta
                                </div>
                            </label>
                        </td>
                        <tr>
                            <td class="text-center">Thales Ataíde</td>
                            <td class="text-center"><label class=" ">
                                    <div class="checked">
                                        <input type="checkbox" checked="checked"> Presença
                                        <input type="checkbox" checked="checked"> Falta
                                    </div>
                                </label>
                            </td>
                        </tr>


                        <td class="text-center">Thaís Barbosa</td>
                        <td class="text-center"><label class=" ">
                                <div class="checked">
                                    <input type="checkbox"  checked="checked"> Presença
                                    <input type="checkbox" checked="checked"> Falta
                                </div>
                            </label>
                        </td>
                        <tr>
                            <td class="text-center">Felipe dos Santos</td>
                            <td class="text-center"><label class=" ">
                                    <div class="checked">
                                        <input type="checkbox" checked="checked"> Presença
                                        <input type="checkbox" checked="checked"> Falta
                                    </div>
                                </label>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">Giovanni Silva</td>
                            <td class="text-center"><label class=" ">
                                    <div class="checked">
                                        <input type="checkbox" checked="checked"> Presença
                                        <input type="checkbox" checked="checked"> Falta
                                    </div>
                                </label>
                            </td>
                        </tr>

                        <!--endforeach -->
                        </tbody>
                    </table>
                </div>
                <div class="box-footer clearfix">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
            <div align="right">
                <button class="btn btn-success" type="submit">Salvar</button>

            </div>

            <!-- /.box --><!-- /.box -->
        </div>

        <!-- /.col -->

        <!-- /.box -->

        <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
@endsection
@stop
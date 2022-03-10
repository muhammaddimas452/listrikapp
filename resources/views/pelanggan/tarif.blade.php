@extends('layouts.user')

@section('content')
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div>
                                <div id="toolbar">
                                    <select class="form-control dt-tb">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>
                                <button type="button" class="btn btn-custon-rounded-four btn-primary" 
                                data-toggle="modal" data-target="#addModal">Tambah Data</button>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="id">No</th>
                                        <th data-field="daya" data-editable="true">Daya</th>
                                        <th data-field="tarifperkwh" data-editable="true">Tarif Per-Kwh</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tarif as $item)
                                    <tr>
                                        <td></td>
                                        <td>{{ $item->daya }}</td>
                                        <td>{{ $item->tarifperkwh }}</td>
                                        <td>
                                            <a href="{{ route('deleteTarif', $id = $item->id) }}"><button class="btn btn-danger"><i class="fa fas-trash"></i> Delete</button></a>
                                            <a href="{{ route('editTarif', $id = $item->id) }}"><button class="btn btn-success"><i class="fa fas-edit"></i>Edit</button></a>
                                        </td>
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
<div id="addModal" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
                <h4 class="modal-title">Tarif</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <div class="modal-body">
                <form action="{{ route('saveTarif') }}" method="post">
                    @csrf
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label class="login2">Daya</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" name="daya" placeholder="Masukkan Daya" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label class="login2">Tarif Per-Kwh</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <input type="number" class="form-control" name="tarifperkwh" placeholder="Masukkan Tarif" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-custon-rounded-four btn-primary">Proses</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- 
<div id="editModal" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header header-color-modal bg-color-1">
                <h4 class="modal-title">Update</h4>
                <div class="modal-close-area modal-close-df">
                    <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                </div>
            </div>
            <div class="modal-body">
                <form action="{{ route('updateTarif', $id = $item->id) }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $item->id }}">
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label class="login2">Daya</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" name="daya" id="daya" value="{{ $item->daya }}" placeholder="Masukkan Daya" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label class="login2">Tarif Per-Kwh</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <input type="number" class="form-control" name="tarifperkwh" id="tarifperkwh" value="{{ $item->tarifperkwh }}" placeholder="Masukkan Tarif" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-custon-rounded-four btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}

@endsection()
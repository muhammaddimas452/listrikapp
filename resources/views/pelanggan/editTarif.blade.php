@extends('layouts.user')

@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="sparkline10-list mt-b-30">
            <div class="sparkline10-hd">
                <div class="main-sparkline10-hd">
                    <h1>Inline Login <span class="basic-ds-n">Form</span></h1>
                </div>
            </div>
            <div class="sparkline10-graph">
                <div class="basic-login-form-ad">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="basic-login-inner inline-basic-form">
                                <form action="{{ route('updateTarif', $id = $tarif->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $tarif->id }}">
                                    <div class="form-group-inner">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <input type="text" class="form-control basic-ele-mg-b-10 responsive-mg-b-10" 
                                                name="daya"
                                                placeholder="Enter Daya" 
                                                value="{{ $tarif->daya }}"/>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                <input type="number" class="form-control basic-ele-mg-b-10 responsive-mg-b-10" 
                                                name="tarifperkwh"
                                                placeholder="Tarif" 
                                                value="{{ $tarif->tarifperkwh }}"/>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="login-btn-inner">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-5 col-sm-5 col-xs-12">
                                                            <div class="login-horizental lg-hz-mg"><button class="btn btn-sm btn-primary login-submit-cs" type="submit">Update</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()
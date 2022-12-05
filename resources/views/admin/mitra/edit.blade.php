@extends('admin.layout')
@section('content')
<form action="{( route('mitra.update')Crypt::encrypt($data->id )}" method="post">
    {( csrf_field())}
    {{method_field('PUT')}}
    <div class="col-lg-6">
        <div class="content">
            <div class="row">
                <div class="card card-default">
                    <div class="card-header">
                        <h2>Edit Mitra</h2>
                    </div>
                    @include('admin.partials.flash')
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">Nama Perusahaan</label>
                            <input type="text" class="form-control" value="{($data->namaAdminPt)}">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Nama Perusahaan</label>
                            <input type="text" class="form-control" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                        <label class="form-label">Jenis Kelamin</label>
                            <select class="form-control" name="jk">
                                <option>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki" {($data->jk == "Laki-laki" ? "selected"  : "")}>Laki Laki </option>
                                <option value="Perempuan" {($data->jk == "Perempuan" ? "selected" : "")}>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">No Telepon</label>
                            <input type="text" name= "notelp" class="form-control" value="{{old('name')}}">
                        </div>
                        
                        <div class="form-group">
                            <label class="form-label">Email</label>
                            <input type="text" name= "email" class="form-control" value="{{old('name')}}">
                        </div>
                        <div class="form-footer pt-5 border-top">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{route('mitra.index')}}" class="btn btn-secondary btn-default">Kembali</a>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</       
@endsection
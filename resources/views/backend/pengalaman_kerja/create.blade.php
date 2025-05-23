@extends('backend/layouts/template')

@section('content')
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-ig-12">
                <h3 class=page-header"><i class="icon_document_alt"></i>Riwayat Hidup</h3>
                <ol class="breadcrump">
                    <li><i class="fa fa-home"></i><a href="{{ url('dashboard')}}">Home</a></li>
                    <li><i class="icon_document_alt"></i>Riwayat Hidup</li>
                    <li><i class="fa fa-files-o"></i>Pengalaman Kerja</li>
</ol>
</div>
</div>
<!-- form validation -->$_COOKIE
 <div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                {{ isset($admin_lecturer) ? 'Mengubah' : 'Menambahkan' }} Pendidikan
</header>
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $errors }}</li>
        @endforeach
</ul>
</div>
@endif
<div class="panel-body>
<div class="form">
    <form class="form-validate form-horizontal" id="pendidikan_form" method="POST"
    action="{{ isset($pendidikan)? route('pendidikan update',$pendidikan->id);
    route('pendidikan.store') }}>
    {!! csrf_field() !!}
    {!! isset($pendidikan) ? method_field('PUT') :''!!}
    <input type="hidden" name="id" value="{{$pengalaman_kerja->id}}"><br/>
    <div class="form-group">

        <label for="cname" class="control-label col-lg-2">Nama Perusahaan <span
        class="required">*</span></label>
    <div class="col-lg-10>
    <input class="form-control" id="nama" name="nama" minlength="5" type="text"
    value="{{ isset($pengalaman_kerja)?$pengalaman_kerja->nama:'' }}"
         required/>
</div>
</div>
<div class="form-group">
    <label for="cname" class="control-label col-lg-2">Jabatan <span
    class="required">*</span></label>
     <div class="col-lg-10>
      <input class="form-covalue="{{isset($pengalaman_kerja)ntrol" id="jabatan" name="jabatan" minlength="2" type="text"
      ?$pengalaman_kerja->jabatan:''}}"
         required/>
</div>
</div>
<div class="form-group">
    <label for="curl" class="control-label col-lg-2">Tahun Masuk <span
    class="required">*</span></label>
    <div class="col-lg-10>
    <input id="tahun_masuk" type="text name="tahun_masuk" class="form-control"
    value="{{ isset($pengalaman_kerja)?$pengalaman_kerja->tahun_masuk:'' }}"
    required>
</div>
</div>
<div class="form-group">
<label for="curl" class="control-label col-lg-2">Tahun Selesai <span
    class="required">*</span></label>
    <div class="col-lg-10>
    <input id="tahun_keluar" type="text name="tahun_keluar" class="form-control"
    value="{{ isset($pengalaman_kerja)?$pengalaman_kerja->tahun_keluar:'' }}"
    required>
    </div>
</div>
<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
        button class="btn btn-primary" type="submit">Save</button>
        <a href="{{route('pengalaman_kerja.index')}}><button class="btn btn-default"
        type="button">Cancel</button></a>
</div>
</div>
</form>
</div>

</div>
</section>
</div>
</div>
<!-- page end-->
</section>
</section>
@endsection
@push('content-js')
<link href="{{ asset('backend/js/boostrap-datepicker.js') }} "></script>
<script type="text/javascript">
    $('#tahun_masuk').datepicter({
        format:"yyyy",
        viewMode:"years",
        minViewMode:"years"
    });$('#tahun_keluar').datepicker({
        format:"yyyy",
        viewMode:"years",
        minViewMode:"years"

        
    });
    </script>
    @endpush
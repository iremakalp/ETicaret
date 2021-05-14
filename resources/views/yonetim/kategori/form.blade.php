@extends('yonetim.layouts.master')
@section('title', 'Kategori Yönetimi')
@section('content')
    <form method="post" action="{{ route('yonetim.kategori.kaydet', $kategori->id) }}">
        {{ csrf_field() }}
        <h3 class="sub-header" style="margin: 15px;">
            Kategori {{ $kategori->id > 0 ? "Düzenle" : "Ekle" }}
        </h3>
        @include('layouts.partials.error')
        @include('layouts.partials.alert')
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card" style="width: 400px; margin-left: 20px;">
                            <div class="card-header">
                                <strong>Kategori Bilgileri</strong>
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="ust_id">Üst Kategori</label>
                                    <select name="ust_id" id="ust_id" class="form-control">
                                        <option value="">Ana Kategori</option>
                                        @foreach($seckategoriler as $kategori1)
                                            <option value="{{ $kategori1->id }}" {{ $kategori1->id == old('ust_id', $kategori->ust_id) ? 'selected' : '' }}>{{ $kategori1->kategori_adi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="kategori_adi">Kategori Adı</label>
                                    <input type="text" class="form-control" id="kategori_adi" name="kategori_adi" placeholder="Kategori Adı" value="{{ old('kategori_adi', $kategori->kategori_adi) }}">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="hidden" name="original_slug" value="{{ old('slug', $kategori->slug) }}">
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{ old('slug', $kategori->slug) }}">
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm"
                                        style="border: none; background-color:#D10024; float: right; height: 40px; width: 100px; border-radius: 30px;">
                                    {{ $kategori->id > 0 ? "Güncelle" : "Kaydet" }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

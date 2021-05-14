@extends('yonetim.layouts.master')
@section('title', 'Ürün Yönetimi')
@section('content')
    <form method="post" action="{{ route('yonetim.urun.kaydet', $entry->id) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('layouts.partials.error')
        @include('layouts.partials.alert')
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card" style="width: 800px; margin-left: 20px;">
                            <div class="card-header">
                                <strong>Ürün Bilgileri</strong>
                            </div>
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label for="urun_adi">Ürün Adı</label>
                                    <input type="text" class="form-control" id="urun_adi" name="urun_adi"
                                           placeholder="Ürün Adı" value="{{ old('urun_adi', $entry->urun_adi) }}">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="hidden" name="original_slug" value="{{ old('slug', $entry->slug) }}">
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug"
                                           value="{{ old('slug', $entry->slug) }}">
                                </div>
                                <div class="form-group">
                                    <label for="aciklama">Açıklama</label>
                                    <textarea class="form-control" id="aciklama" name="aciklama"
                                              placeholder="Açıklama">{{ old('aciklama', $entry->aciklama) }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="fiyati">Fiyatı</label>
                                    <input type="text" class="form-control" id="fiyati" name="fiyati"
                                           placeholder="Fiyatı" value="{{ old('fiyati', $entry->fiyati) }}">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="hidden" name="goster_one_cikan" value="0">
                                            <input type="checkbox" name="goster_one_cikan"
                                                   value="1" {{ old('goster_one_cikan', $entry->detay->goster_one_cikan) ? 'checked' : '' }}>
                                            Öne Çıkan Alanında Göster
                                        </label>
                                        <label>
                                            <input type="hidden" name="goster_cok_satan" value="0">
                                            <input type="checkbox" name="goster_cok_satan"
                                                   value="1" {{ old('goster_cok_satan', $entry->detay->goster_cok_satan) ? 'checked' : '' }}>
                                            Çok Satan Ürünlerde Göster
                                        </label>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="kategoriler">Kategoriler</label>
                                    <select name="kategoriler[]" class="form-control" id="kategoriler" multiple>
                                        @foreach($selectkategori as $kategori)
                                            <option
                                                value="{{ $kategori->id }}" {{ collect(old('kategoriler', $urun_kategorileri))->contains($kategori->id) ? 'selected': '' }}>{{ $kategori->kategori_adi }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    @if ($entry->detay->urun_resmi!=null)
                                        <img src="/uploads/urunler/{{ $entry->detay->urun_resmi }}"
                                             style="height: 100px; margin-right: 20px;" class="thumbnail pull-left">
                                    @endif
                                    <label for="urun_resmi">Ürün Resmi</label>
                                    <input type="file" id="urun_resmi" name="urun_resmi">
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm"
                                        style="border: none; background-color:#D10024; float: right; height: 40px; width: 100px; border-radius: 30px;">
                                    {{ $entry->id > 0 ? "Güncelle" : "Kaydet" }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
@endsection
@section('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
@endsection
@section('footer')
    <script src="//cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.9.2/plugins/autogrow/plugin.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $(function () {
            $('#kategoriler').select2({
                placeholder: 'Lütfen kategori seçiniz'
            });

        });
    </script>
@endsection

@extends('yonetim.layouts.master')
@section('title', 'Kategori Yönetimi')
@section('content')
    <div class="well" style="margin-top: 15px; margin-left: 20px;">
        <div class="btn-group pull-right">
            <a href="{{ route('yonetim.urun.yeni') }}" class="btn btn-primary"
               style="background-color:#0d152a; border: none; margin-left: 5px;margin-right: 5px; ">Ürün Ekle</a>
        </div>
        <form method="post" action="{{ route('yonetim.urun') }}" class="form-inline">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="aranan">Ara</label>
                <input type="text" class="form-control form-control-sm" name="aranan" id="aranan" placeholder="Ürün Ara" value="{{ old('aranan') }}">
            </div>
            <button type="submit" class="btn btn-primary"
                    style="background-color:#0d152a; border: none; margin-left: 5px;margin-right: 5px; ">Ara
            </button>
            <a href="{{  route('yonetim.urun') }}" class="btn btn-primary"
               style="background-color:#0d152a; border: none; margin-left: 5px;margin-right: 5px; ">Temizle</a>
        </form>
    </div>
    @include('layouts.partials.alert')
    <div class="content mt-3" style="width: 100%; height: 100%; @media(max-width: 1368px){ width: 10%; height: 20%; }">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Kategori Tablosu</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead style="background-color: #273340; color: whitesmoke;">
                                <tr>
                                    <th>#</th>
                                    <th>Resim</th>
                                    <th>Slug</th>
                                    <th>Ürün Adı</th>
                                    <th>Fiyatı</th>
                                    <th>Kayıt Tarihi</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if (count($list) == 0)
                                    <tr>
                                        <td colspan="7" class="text-center">Kayıt bulunamadı!</td>
                                    </tr>
                                @endif
                                @foreach ($list as $urun)
                                    <tr>
                                        <td>{{ $urun->id }}</td>
                                        <td class="text-center">
                                            <img src="{{ $urun->detay->urun_resmi!=null ? asset($urun->detay->urun_resmi) : 'http://via.placeholder.com/120x120?text=UrunResmi' }}" style="width: 120px;">
                                        </td>
                                        <td>{{ $urun->slug }}</td>
                                        <td>{{ $urun->urun_adi }}</td>
                                        <td>{{ round($urun->fiyati, 2) }} ₺</td>
                                        <td>{{ $urun->olusturma_tarihi }}</td>
                                        <td>
                                            <a href="{{ route('yonetim.urun.duzenle', $urun->id) }}"
                                               class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top"
                                               title="Düzenle" style="background-color: #0d152a; border: none;">
                                                <span class="fa fa-pencil"></span>
                                            </a>
                                            <a href="{{ route('yonetim.urun.sil', $urun->id) }}"
                                               class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top"
                                               title="Sil" onclick="return confirm('Emin misiniz?')"
                                               style="background-color:#D10024;border: none; ">
                                                <span class="fa fa-trash"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $list->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .animated -->
@endsection
@section('footer')
    <script>
        setTimeout(function () {
            $('.alert').slideUp("slow");
        }, 3000);


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    </script>
    <script src="/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="/vendors/jszip/dist/jszip.min.js"></script>
    <script src="/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="/assets/js/init-scripts/data-table/datatables-init.js"></script>
@endsection

@extends('yonetim.layouts.master')
@section('title', 'Kategori Yönetimi')
@section('content')
    <div class="well" style="margin-top: 15px; margin-left: 20px;">
        <div class="btn-group pull-right">
            <a href="{{ route('yonetim.kategori.yeni') }}" class="btn btn-primary"
               style="background-color:#0d152a; border: none; margin-left: 5px;margin-right: 5px; ">Kategori Ekle</a>
        </div>
        <form method="post" action="{{ route('yonetim.kategori') }}" class="form-inline">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="aranan">Ara</label>
                <input type="text" class="form-control form-control-sm" name="aranan" id="aranan" placeholder="Kategori Ara..." value="{{ old('aranan') }}">
                <label for="ust_id">Üst Kategori</label>
                <select name="ust_id" id="ust_id" class="form-control">
                    <option value="">Seçiniz</option>
                    @foreach($anakategoriler as $kategori)
                        <option value="{{ $kategori->id }}" {{ old('ust_id') == $kategori->id ? 'selected' : '' }}>{{ $kategori->kategori_adi }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary"
                    style="background-color:#0d152a; border: none; margin-left: 5px;margin-right: 5px; ">Ara
            </button>
            <a href="{{  route('yonetim.kategori') }}" class="btn btn-primary"
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
                                    <th>Üst Kategori</th>
                                    <th>Slug</th>
                                    <th>Kategori Adı</th>
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
                                @foreach ($list as $kategori)
                                    <tr>
                                        <td>{{ $kategori->id }}</td>
                                        <td>{{ $kategori->ust_kategori->kategori_adi }}</td>
                                        <td>{{ $kategori->slug }}</td>
                                        <td>{{ $kategori->kategori_adi }}</td>
                                        <td>{{ $kategori->olusturma_tarihi }}</td>
                                        <td>
                                            <a href="{{ route('yonetim.kategori.duzenle', $kategori->id) }}"
                                               class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top"
                                               title="Düzenle" style="background-color: #0d152a; border: none;">
                                                <span class="fa fa-pencil"></span>
                                            </a>
                                            <a href="{{ route('yonetim.kategori.sil', $kategori->id) }}"
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

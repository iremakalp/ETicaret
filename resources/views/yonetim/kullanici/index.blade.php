@extends('yonetim.layouts.master')
@section('title', 'Kullanıcı Yönetimi')
@section('content')
    <div class="well" style="margin-top: 15px; margin-left: 20px;">
        <div class="btn-group pull-right">
            <a href="{{ route('yonetim.kullanici.yeni') }}" class="btn btn-primary"
               style="background-color:#0d152a; border: none; margin-left: 5px;margin-right: 5px; ">Yeni</a>
        </div>
        <form method="post" action="{{ route('yonetim.kullanici') }}" class="form-inline">
            {{ csrf_field() }}
            <div class="form-group">
                <div id="bootstrap-data-table-export_filter" class="dataTables_filter">
                    <label>Kullanıcı Ara
                        <input type="text" class="form-control form-control-sm" name="aranan" id="aranan" placeholder="Ad, Email Ara..." value="{{ old('aranan') }}" style="margin-left: 10px;">
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary"
                    style="background-color:#0d152a; border: none; margin-left: 5px;margin-right: 5px; ">Ara
            </button>
            <a href="{{ route('yonetim.kullanici') }}" class="btn btn-primary"
               style="background-color:#0d152a; border: none; margin-left: 5px;margin-right: 5px; ">Temizle</a>
        </form>
    </div>
    @include('layouts.partials.alert')
    <div class="content mt-3" style="width: 100%; height: 100%; @media(max-width: 999px){ width: 10%; height: 20%; }">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Kullanıcı Tablosu</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead style="background-color: #273340; color: whitesmoke;">
                                <tr>
                                    <th>#</th>
                                    <th>Ad Soyad</th>
                                    <th>Email</th>
                                    <th>Kullanıcı Tipi</th>
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
                                @foreach ($list as $entry)
                                    <tr>
                                        <td>{{ $entry->id }}</td>
                                        <td>{{ $entry->adsoyad }}</td>
                                        <td>{{ $entry->email }}</td>
                                        <td>
                                            @if ($entry->yonetici_mi)
                                                <span class="label label-success">Yönetici</span>
                                            @else
                                                <span class="label label-warning">Müşteri</span>
                                            @endif
                                        </td>
                                        <td>{{ $entry->olusturma_tarihi }}</td>
                                        <td>
                                            <a href="{{ route('yonetim.kullanici.duzenle', $entry->id) }}"
                                               class="btn btn-xs btn-success" data-toggle="tooltip" data-placement="top"
                                               title="Düzenle" style="background-color: #0d152a; border: none;">
                                                <span class="fa fa-pencil"></span>
                                            </a>
                                            <a href="{{ route('yonetim.kullanici.sil', $entry->id) }}"
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

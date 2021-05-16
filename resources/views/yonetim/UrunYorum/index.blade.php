@extends('yonetim.layouts.master')
@section('title', 'Kategori Yönetimi')
@section('content')
    @include('layouts.partials.alert')
    <div class="content mt-3" style="width: 100%; height: 100%; @media(max-width: 1368px){ width: 10%; height: 20%; }">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Ürün Yorumları</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                <thead style="background-color: #273340; color: whitesmoke;">
                                <tr>
                                    <th>#</th>
                                    <th>Resim</th>
                                    <th>Ürün Adı</th>
                                    <th>Ad Soyad</th>
                                    <th>Email</th>
                                    <th>Yorum</th>
                                    <th>Tarih</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if (count($yorumlar) == 0)
                                    <tr>
                                        <td colspan="7" class="text-center">Kayıt bulunamadı!</td>
                                    </tr>
                                @endif
                                @foreach ($yorumlar as $yorum)
                                    <tr>
                                        <td><img src="{{ $yorum->urun->detay->urun_resmi!=null ? asset($yorum->urun->detay->urun_resmi) : 'http://via.placeholder.com/120x120?text=UrunResmi' }}" alt="" style="width: 180px;"></td>
                                        <td>{{ $yorum->id }}</td>
                                        <td>{{$yorum->urun->urun_adi}}</td>
                                        <td>
                                            {{ $yorum->adsoyad}}
                                        </td>
                                        <td>
                                            {{ $yorum->email}}
                                        </td>
                                        <td>
                                            {{ $yorum->yorum}}
                                        </td>
                                        <td>{{ $yorum->olusturma_tarihi }}</td>
                                        <td>
                                            <a href="{{ route('yonetim.yorum.sil', $yorum->id) }}"
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
                            {{ $yorumlar->links() }}
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

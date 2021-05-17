@extends('layouts.master')
@section('title','Ödeme') {{-- degistirilebilir alanı degistirmek icin--}}
@section('content')

    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <form action="{{ route('odemeyap') }}" method="post">
                    {{ csrf_field() }}
                    <div class="col-md-5" style="margin: 5px;">
                        <div class="billing-details">
                            <div class="section-title">
                                <h3 class="title">İletişim ve Fatura Bilgileri</h3>
                            </div>
                            <div class="form-group">
                                <input type="text" class="input" name="adsoyad" id="adsoyad" placeholder="Ad Soyad"
                                       value="{{ auth()->user()->adsoyad }}" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="input" name="adres" id="adres"
                                       value="{{ $kullanici_detay->adres }}" placeholder="Adres">
                            </div>
                            <div class="form-group">
                                <input type="text" class="input telefon" name="telefon" id="telefon"
                                       value="{{ $kullanici_detay->telefon }}" placeholder="Telefon">
                            </div>
                        </div>
                    </div>
                    <div class="bg-content">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="section-title">
                                    <h3 class="title">Ödeme Bilgileri</h3>
                                </div>
                                <div class="section-title">
                                    <strong>Ödenecek Tutar:</strong>
                                    <span class="price"><strong class="order-total">{{Cart::total()}}₺</strong></span>
                                </div>
                                <div class="form-group">
                                    <label for="kartno">Kredi Kartı Numarası</label>
                                    <input type="text" class="form-control kredikarti" id="kartno" name="cardnumber"
                                           style="font-size:20px;" required>
                                </div>
                                <div class="form-group">
                                    <label for="son_kullanma_tarihi_ay">Son Kullanma Tarihi</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            Ay
                                            <select name="son_kullanma_tarihi_ay" id="son_kullanma_tarihi_ay"
                                                    class="form-control" required>
                                                @for ($i=1;$i<13;$i++)
                                                    <option >{{$i}}</option>
                                                @endfor

                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            Yıl
                                            <select id="son_kullanma_tarihi_yil" name="son_kullanma_tarihi_yil"
                                                    class="form-control" required>

                                                @foreach (range(2000, $currentYear) as $value)
                                                    <option >{{$value}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cardcvv2">CVV (Güvenlik Numarası)</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <input type="text" class="form-control kredikarti_cvv" name="cardcvv2"
                                                   id="cardcvv2" required>
                                        </div>
                                    </div>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label><input type="checkbox" checked> Ön bilgilendirme formunu okudum ve
                                                kabul ediyorum.</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label><input type="checkbox" checked> Mesafeli satış sözleşmesini okudum ve
                                                kabul ediyorum.</label>
                                        </div>
                                    </div>
                                </form>
                                <button type="submit" class="primary-btn order-submit"
                                        style="width: 200px; float: left;">Ödeme Yap
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.js"></script>
    <script>
        $('.kredikarti').mask('0000-0000-0000-0000', {placeholder: "____-____-____-____"});
        $('.kredikarti_cvv').mask('000', {placeholder: "___"});
        $('.telefon').mask('(000) 000-00-00', {placeholder: "(___) ___-__-__"});
    </script>
@endsection

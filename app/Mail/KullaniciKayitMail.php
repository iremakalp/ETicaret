<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Kullanici;

class KullaniciKayitMail extends Mailable
{
    use Queueable, SerializesModels;
    public $kullanici;
    public function __construct(Kullanici $kullanici)
    {
        $this->kullanici = $kullanici;
    }
    public function build()
    {
        return $this
            ->subject(config('app.name') . ' - Kullanıcı Kaydı')
            ->view('mails.kullanici_kayit');
    }
}

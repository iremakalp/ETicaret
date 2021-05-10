@if (session()->has('mesaj'))
    <div class="alert alert-{{ session('mesaj_tur') }}" style="padding-top: 15px; color: #a94442; background-color: #1E1F29;">{{ session('mesaj') }}</div>
@endif

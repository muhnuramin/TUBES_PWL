@extends('layouts/manage')
@section('content2')
<div class="container">
<br><h1>Welcome <B>{{ Auth::user()->name }}</b></h1>
<br><br>
<img class="jadwal"src="{{ asset('image/jadwal.png') }}" alt=""><br><br>
<p><b>Keterangan:</b></P>
<p>Jam kerja shift fleksibel. Shift 1 bisa dimulai pada pukul 06.00 atau 07.00</p>
<p>Rotasi shift dimulai dari shift 3 dan dapat diterapkan pada model 2 grup 2 shift</p>
<p>Khusus shift 1 dapat diberlakukan long shift (07.00 – 19.00), dengan istirahat, selama maksimal 15 jam/orang per-minggu.</p>
</p>
</div>
@endsection
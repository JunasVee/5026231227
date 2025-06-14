@extends('template')

@section('content')
    <h3>Frontend Links</h3>
    <br><br>
    <div class="d-flex flex-column align-items-center justify-content-center vh-100">
        <a href="{{ url('/js1') }}" class="btn btn-primary link-btn mb-3">js1.php</a>
        <a href="{{ url('/js2') }}" class="btn btn-secondary link-btn mb-3">js2.php</a>
        <a href="{{ url('/input') }}" class="btn btn-success link-btn mb-3">input.php</a>
        <a href="{{ url('/bootstrap1') }}" class="btn btn-info link-btn mb-3">bootstrap1.php</a>
        <a href="{{ url('/pertemuan8') }}" class="btn btn-dark link-btn mb-3">pertemuan8.php</a>
        <a href="{{ url('/linktree') }}" class="btn btn-primary link-btn mb-3">linktree.php</a>
    </div>
@endsection

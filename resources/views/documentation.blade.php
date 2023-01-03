@extends('layouts.app')
@section('content')
<section class="py-5 mt-5">
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 gy-md-0">
            <div
                class="col-md-6 col-xl-5 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                <div style="max-width: 350px;">
                    <h1 class="display-6 fw-bold mb-4">EverywhereBooks&nbsp;<br><span
                            class="underline">Dokumentasi</span>.</h1>
                    <p class="my-4">Baca dokumentasi kami dalam mengakses data ke API EverywhereBooks</p>
                </div>
            </div>
            <div class="col-md-6">
                <div><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;height: 289.758px;"
                        src="assets/img/illustrations/ranking.svg"></div>
            </div>
        </div>
    </div>
    <div class="container">
        <h1><strong>Judul Buku</strong></h1>
        <div class="row">
            <div class="col">
                <div style="text-align: center;">
                    <ul class="nav nav-tabs" role="tablist" style="text-align: center;">
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab"
                                href="#tab-1"><strong>URL</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab"
                                href="#tab-2"><strong>Parameter</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" role="tab"
                                data-bs-toggle="tab" href="#tab-3"><strong>Response</strong></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" role="tabpanel" id="tab-1">
                            <p style="margin: 30px;">Judul Buku menampilkan berbagai daftar judul buku yang tersimpan
                                dalam database EverywhereBooks</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr style="background: rgb(36,40,91);">
                                            <th style="width: 325.414px;color: rgb(255,255,255);">Method</th>
                                            <th style="color: rgb(255,255,255);">URL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>GET</td>
                                            <td>http://everywherebooks.salahjurusan.com/api/v1/books</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-2">
                            <p style="margin: 30px;">Parameter yang digunakan dalam pengambilan data judul buku</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr style="background: rgb(36,40,91);">
                                            <th style="width: 133.289px;color: #FFFFFF;">Method</th>
                                            <th style="color: #FFFFFF;">Parameter</th>
                                            <th style="color: #FFFFFF;">Wajib</th>
                                            <th style="color: #FFFFFF;">Tipe</th>
                                            <th style="color: #FFFFFF;">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>GET</td>
                                            <td>id</td>
                                            <td>Tidak</td>
                                            <td>String</td>
                                            <td>ID Judul Buku</td>
                                        </tr>
                                        <tr>
                                            <td>GET</td>
                                            <td>title</td>
                                            <td>Tidak</td>
                                            <td>String</td>
                                            <td>Judul Buku</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane active" role="tabpanel" id="tab-3">
                            <p style="margin: 30px;">Berikut adalah response ketika melakukan koneksi ke judul buku</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr style="background: rgb(36,40,91);">
                                            <th style="color: rgb(255,255,255);">Status</th>
                                            <th style="color: rgb(255,255,255);">Response</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Sukses</td>
                                            <td style="text-align: left;"><code><br>{<br>&nbsp; "data": [<br>&nbsp; &nbsp; &nbsp; {<br>&nbsp; &nbsp; &nbsp; &nbsp; "id": "1",<br>&nbsp; &nbsp; &nbsp; &nbsp; "type": "Books",<br>&nbsp; &nbsp; &nbsp; &nbsp; "attributes": {<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; "name": "Leslie Herman"<br>&nbsp; &nbsp; &nbsp; &nbsp; }<br>&nbsp; &nbsp; &nbsp; }<br>&nbsp; ]<br>}<br><br></code></td>
                                        </tr>
                                        <tr>
                                            <td>Gagal</td>
                                            <td style="text-align: left;"><code><br><span
                                                        style="color: rgb(255 255 255 / var(--tw-text-opacity)); background-color: rgb(17 24 39 / var(--tw-bg-opacity));">{</span><br><span
                                                        style="color: rgb(255 255 255 / var(--tw-text-opacity)); background-color: rgb(17 24 39 / var(--tw-bg-opacity));">
                                                        "message": "Unauthenticated."</span><br><span
                                                        style="color: rgb(255 255 255 / var(--tw-text-opacity)); background-color: rgb(17 24 39 / var(--tw-bg-opacity));">}</span><br><br></code>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><code style="text-align: left;"></code>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 20px;">
        <h1><strong>Author Buku</strong></h1>
        <div class="row">
            <div class="col">
                <div style="text-align: center;">
                    <ul class="nav nav-tabs" role="tablist" style="text-align: center;">
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab"
                                href="#tab-1-author"><strong>URL</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-bs-toggle="tab"
                                href="#tab-2-author"><strong>Parameter</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" role="tab"
                                data-bs-toggle="tab" href="#tab-3-author"><strong>Response</strong></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" role="tabpanel" id="tab-1-author">
                            <p style="margin: 30px;">Penulis Buku menampilkan berbagai penulis buku yang tersimpan
                                dalam database EverywhereBooks</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr style="background: rgb(36,40,91);">
                                            <th style="width: 325.414px;color: rgb(255,255,255);">Method</th>
                                            <th style="color: rgb(255,255,255);">URL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>GET</td>
                                            <td>http://everywherebooks.salahjurusan.com/api/v1/authorbuku<br></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-2-author">
                            <p style="margin: 30px;">Parameter yang digunakan dalam pengambilan data author buku<br>
                            </p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr style="background: rgb(36,40,91);">
                                            <th style="width: 133px;color: rgb(255,255,255);">Method</th>
                                            <th style="color: rgb(255,255,255);">Parameter</th>
                                            <th style="color: rgb(255,255,255);">Wajib</th>
                                            <th style="color: rgb(255,255,255);">Tipe</th>
                                            <th style="color: rgb(255,255,255);">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>GET</td>
                                            <td>id</td>
                                            <td>Tidak</td>
                                            <td>String</td>
                                            <td>ID Author Buku</td>
                                        </tr>
                                        <tr>
                                            <td>GET</td>
                                            <td>nama</td>
                                            <td>Tidak</td>
                                            <td>String</td>
                                            <td>Nama Author Buku</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane active" role="tabpanel" id="tab-3-author">
                            <p style="margin: 30px;">Berikut adalah response ketika melakukan koneksi ke author
                                buku<br></p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr style="background: rgb(36,40,91);">
                                            <th style="color: rgb(255,255,255);">Status</th>
                                            <th style="color: rgb(255,255,255);">Response</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Sukses</td>
                                            <td style="text-align: left;"><code>{ <br>&nbsp; "data": [<br>&nbsp; &nbsp; &nbsp; {<br>&nbsp; &nbsp; &nbsp; &nbsp; "id": "1",<br>&nbsp; &nbsp; &nbsp; &nbsp; "type": "Authors",<br>&nbsp; &nbsp; &nbsp; &nbsp; "attributes": {<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; "name": "Prof. Harvey Little"<br>&nbsp; &nbsp; &nbsp; &nbsp; }<br>&nbsp; &nbsp; &nbsp; }<br>&nbsp; ]<br>}<br></code><code>{ <br>&nbsp; "data": [<br>&nbsp; &nbsp; &nbsp; {<br>&nbsp; &nbsp; &nbsp; &nbsp; "id": "1",<br>&nbsp; &nbsp; &nbsp; &nbsp; "type": "Authors",<br>&nbsp; &nbsp; &nbsp; &nbsp; "attributes": {<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; "name": "Prof. Harvey Little"<br>&nbsp; &nbsp; &nbsp; &nbsp; }<br>&nbsp; &nbsp; &nbsp; }<br>&nbsp; ]<br>}<br></code><code>{ <br>&nbsp; "data": [<br>&nbsp; &nbsp; &nbsp; {<br>&nbsp; &nbsp; &nbsp; &nbsp; "id": "1",<br>&nbsp; &nbsp; &nbsp; &nbsp; "type": "Authors",<br>&nbsp; &nbsp; &nbsp; &nbsp; "attributes": {<br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; "name": "Prof. Harvey Little"<br>&nbsp; &nbsp; &nbsp; &nbsp; }<br>&nbsp; &nbsp; &nbsp; }<br>&nbsp; ]<br>}<br></code></td>
                                        </tr>
                                        <tr>
                                            <td>Gagal</td>
                                            <td style="text-align: left;"><code><br><span
                                                        style="color: rgb(255 255 255 / var(--tw-text-opacity)); background-color: rgb(17 24 39 / var(--tw-bg-opacity));">{</span><br><span
                                                        style="color: rgb(255 255 255 / var(--tw-text-opacity)); background-color: rgb(17 24 39 / var(--tw-bg-opacity));">
                                                        "message": "Unauthenticated."</span><br><span
                                                        style="color: rgb(255 255 255 / var(--tw-text-opacity)); background-color: rgb(17 24 39 / var(--tw-bg-opacity));">}</span><br></code>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container" style="margin-top: 20px;">
        <h1><strong>Kategori Buku</strong></h1>
        <div class="row">
            <div class="col">
                <div style="text-align: center;">
                    <ul class="nav nav-tabs" role="tablist" style="text-align: center;">
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab"
                                data-bs-toggle="tab" href="#tab-1-kategori"><strong>URL</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" role="tab"
                                data-bs-toggle="tab" href="#tab-2-kategori"><strong>Parameter</strong></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link active" role="tab"
                                data-bs-toggle="tab" href="#tab-3-kategori"><strong>Response</strong></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" role="tabpanel" id="tab-1-kategori">
                            <p style="margin: 30px;">Kategori Buku menampilkan berbagai daftar kategori buku yang
                                tersimpan dalam database EverywhereBooks</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr style="background: rgb(36,40,91);">
                                            <th style="width: 325.414px;color: rgb(255,255,255);">Method</th>
                                            <th style="color: rgb(255,255,255);">URL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>GET</td>
                                            <td>https://everywherebooks.salahjurusan.com/api/kategoribuku<br></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-2-kategori">
                            <p style="margin: 30px;">Judul Buku menampilkan berbagai daftar judul buku yang tersimpan
                                dalam database EverywhereBooks</p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr style="background: rgb(36,40,91);">
                                            <th style="width: 325.414px;color: rgb(255,255,255);">Method</th>
                                            <th style="color: rgb(255,255,255);">URL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>GET</td>
                                            <td>Cell 2</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                        <div class="tab-pane active" role="tabpanel" id="tab-3-kategori">
                            <p style="margin: 30px;">Berikut adalah response ketika melakukan koneksi ke kategori
                                buku<br></p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr style="background: rgb(36,40,91);">
                                            <th style="color: rgb(255,255,255);">Status</th>
                                            <th style="color: rgb(255,255,255);">Response</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Sukses</td>
                                            <td style="text-align: left;"><code>Text</code></td>
                                        </tr>
                                        <tr>
                                            <td>Gagal</td>
                                            <td style="text-align: left;"><code><br><span
                                                        style="color: rgb(255 255 255 / var(--tw-text-opacity)); background-color: rgb(17 24 39 / var(--tw-bg-opacity));">{</span><br><span
                                                        style="color: rgb(255 255 255 / var(--tw-text-opacity)); background-color: rgb(17 24 39 / var(--tw-bg-opacity));">
                                                        "result": "Invalid API Key"</span><br><span
                                                        style="color: rgb(255 255 255 / var(--tw-text-opacity)); background-color: rgb(17 24 39 / var(--tw-bg-opacity));">}</span><br><br></code>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</section>
@endsection

@extends('adminlte.layouts.dasar')
@section('isinya')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabel Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tabel Barang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              @if (session('sukses'))
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                  {{ session('sukses')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              @endif
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                 + Tambah Data
                </button>
              </div>

              
                <!-- Modal Tambah-->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Data Barang</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <form action="/barang/tambah" method="post">
                        {{ csrf_field() }}
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
                          <input type="text" name="kodebrg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                          <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Stok</label>
                          <input type="text" name="stok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Harga</label>
                          <input type="text" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Gambar</label>
                          <input type="text" name="gambar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                      </form>
                    </div>
                  </div>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Kode Barang</th>
                      <th>Nama</th>
                      <th>Stok</th>
                      <th>Harga</th>
                      <th>Gambar</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($barang_arr as $data)
                    <tr>
                      <td>{{ $data->kodebrg}}</td>
                      <td>{{ $data->nama}}</td>
                      <td>{{ $data->stok}}</td>
                      <td>{{ $data->harga}}</td>
                      <td>{{ $data->gambar}}</td>
                      <td>
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#editModal"
                        data-id="{{ $data->id}}"
                        data-kodebrg="{{ $data->kodebrg}}"
                        data-nama="{{ $data->nama}}"
                        data-stok="{{ $data->stok}}"
                        data-harga="{{ $data->harga}}"
                        data-gambar="{{ $data->gambar}}"
                        data-toggle="modal" data-target="#editModal">
                      <i class="bi bi-pencil-square"></i></button>

                      <button type="button" class="btn btn-warning"
                        data-id="{{ $data->id}}"
                        data-kodebrg="{{ $data->kodebrg}}"
                        data-nama="{{ $data->nama}}"
                        data-stok="{{ $data->stok}}"
                        data-harga="{{ $data->harga}}"
                        data-gambar="{{ $data->gambar}}"
                        data-toggle="modal" data-target="#deleteModal">
                      <i class="bi bi-trash"></i></button>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>

              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
                <!-- Modal Edit-->
                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data Barang</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <form action="/barang/update" method="post">
                        {{ csrf_field() }}
                        <div class="mb-3">
                          <input type="hidden" name="id" class="form-control" id="id" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
                          <input type="text" name="kodebrg" class="form-control" id="kodebrg" aria-describedby="emailHelp" readonly>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                          <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Stok</label>
                          <input type="text" name="stok" class="form-control" id="stok" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Harga</label>
                          <input type="text" name="harga" class="form-control" id="harga" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Gambar</label>
                          <input type="text" name="gambar" class="form-control" id="gambar" aria-describedby="emailHelp">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                      </form>
                    </div>
                  </div>
              </div>

                <!-- Modal Delete-->
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Barang</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                      <form action="/barang/delete" method="post">
                        {{ csrf_field() }}
                        <div class="mb-3">
                          <input type="hidden" name="id" class="form-control" id="id" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Kode Barang</label>
                          <input type="text" name="kodebrg" class="form-control" id="kodebrg" aria-describedby="emailHelp" readonly>
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                          <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Stok</label>
                          <input type="text" name="stok" class="form-control" id="stok" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Harga</label>
                          <input type="text" name="harga" class="form-control" id="harga" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Gambar</label>
                          <input type="text" name="gambar" class="form-control" id="gambar" aria-describedby="emailHelp">
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                      </div>
                      </form>
                    </div>
                  </div>
              </div>
  @endsection

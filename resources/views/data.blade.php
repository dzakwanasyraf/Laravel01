@extends('layouts.app')

@section('content')

   <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3><br>
                <a href="addLatihan"><button class="btn btn-default">Add Data</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nama Murid</th>
                    <th>Status Murid</th>
                    <th>Nilai Tugas</th>
                    <th>Nilai PTS</th>
                    <th>Nilai UAS</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{$item->nama_murid}}</td>
                            <td>{{$item->status_murid == 0 ? "Tidak Aktif" : "Aktif"}}
                            </td>
                            <td>{{$item->nilai_tugas}}</td>
                            <td>{{$item->nilai_pts}}</td>
                            <td>{{$item->nilai_uas}}</td>
                            <td>
                                <a href="editLatihan\{{$item->id}}"><button class="btn-primary btn">edit</button></a>
                                <a href="deleteLatihan\{{$item->id}}"><button class="btn-danger btn">delete</button></a>
                            </td>
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
@endsection
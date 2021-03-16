@extends('layouts.app')

@section('content')

    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="saveLatihan" method="POST">
                  {{-- PENTING!! --}}
                  @csrf
                <div class="card-body">
                    {{-- nama murid --}}
                  <div class="form-group">
                    <label for="nama_murid">Nama Murid</label>
                    <input type="text" class="form-control" id="nama_murid" placeholder="Enter Name" name="nama_murid">
                  </div>
                  {{-- status --}}
                  <div class="form-group">
                    <label for="status_murid">Status Murid</label>
                    <select name="status_murid" id="status_murid" class="form-control">
                        <option value="">Pilih Status</option>
                        <option value="0">Tidak Aktif</option>
                        <option value="1">Aktif</option>
                    </select>
                  </div>
                  {{-- nilai tugas --}}
                  <div class="form-group">
                    <label for="nilai_tugas">Nilai Tugas</label>
                    <input type="number" max="100" class="form-control" id="nilai_tugas" placeholder="Enter Nilai" name="nilai_tugas">
                  </div>
                  {{-- nilai pts --}}
                  <div class="form-group">
                    <label for="nilai_pts">Nilai PTS</label>
                    <input type="number" max="100" class="form-control" id="nilai_pts" placeholder="Enter Nilai" name="nilai_pts">
                  </div>
                  {{-- nilai uas --}}
                  <div class="form-group">
                    <label for="nilai_uas">Nilai UAS</label>
                    <input type="number" max="100" class="form-control" id="nilai_uas" placeholder="Enter Nilai" name="nilai_uas">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

@endsection
@extends('layouts.app')

@section('content')

    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->

              <form role="form" action="/updateLatihan" method="POST">
                  {{-- PENTING!! --}}
                  @csrf
                  <input type="hidden" name="id" value="{{$data->id}}">
                <div class="card-body">

                    {{-- nama murid --}}
                  <div class="form-group">
                    <label for="nama_murid">Nama Murid</label>
                    <input type="text" class="form-control" id="nama_murid" placeholder="Enter Name" name="nama_murid" value="{{ $data->nama_murid }}">
                  </div>

                  {{-- status --}}
                  <div class="form-group">
                    <label for="status_murid">Status Murid</label>
                    <select name="status_murid" id="status_murid" class="form-control">
                        <option value="0" {{$data->status_murid == 0 ? "selected" : ""}}>Tidak Aktif</option>
                        <option value="1" {{$data->status_murid == 1 ? "selected" : ""}}>Aktif</option>
                    </select>
                  </div>

                  {{-- nilai tugas --}}
                  <div class="form-group">
                    <label for="nilai_tugas">Nilai Tugas</label>
                    <input type="number" max="100" class="form-control" id="nilai_tugas" placeholder="Enter Nilai" name="nilai_tugas" value="{{ $data->nilai_tugas }}">
                  </div>

                  {{-- nilai pts --}}
                  <div class="form-group">
                    <label for="nilai_pts">Nilai PTS</label>
                    <input type="number" max="100" class="form-control" id="nilai_pts" placeholder="Enter Nilai" name="nilai_pts" value="{{ $data->nilai_pts }}">
                  </div>

                  {{-- nilai uas --}}
                  <div class="form-group">
                    <label for="nilai_uas">Nilai UAS</label>
                    <input type="number" max="100" class="form-control" id="nilai_uas" placeholder="Enter Nilai" name="nilai_uas" value="{{ $data->nilai_uas }}">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Cabin</h1>
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
                <h3 class="card-title"><a href="{{url('backend/kamar-add')}}" class="btn btn-info">Add</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover" align="center">
                  <thead>
                    <tr>
                      <center>
                      <th>No</th>
                      <th>Tipe Cabin</th>
                      <th>Gambar</th>
                      <th>Status</th>
                      <th>Created At</th>
                      <th colspan="2">Action</th>
                      </center>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data_kamar as $row)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$row->tipe}}</td>
                      <td>{{$row->gambar}}</td>
                      <td>{{$row->status}}</td>
                      <td>{{$row->created_at}}</td> 
                      <td><a href="/backend/kamar-edit/{{$row->id_kamar}}" class="btn btn-success btn-update">Ubah</a></td>
                      <td><a href="/backend/kamar-hapus/{{$row->id_kamar}}" class="btn btn-success btn-danger" onclick="return confirm('Anda yakin menghapusnya?')">Hapus</a></td>
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
@endsection
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Reservasi</h1>
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
                <h3 class="card-title"><a href="{{url('backend/reservasi-add')}}" class="btn btn-info">Add</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Reservasi</th>
                    <th>Tgl Check In</th>
                    <th>Tgl Check Out</th>
                    <th>Dewasa</th>
                    <th>Anak - anak</th>
                    <th>ID Kamar</th>
                    <th>ID Customer</th>
                    <th>Tambahan</th>
                    <th>Status</th>
                    <th>Harga</th>
                    <th colspan="2">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($data_member as $row)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$row->id_reservasi}}</td>
                      <td>{{$row->checkin}}</td>
                      <td>{{$row->checkout}}</td>
                      <td>{{$row->adult}}</td>
                      <td>{{$row->child}}</td>
                      <td>{{$row->id_kamar}}</td>
                      <td>{{$row->id_customer}}</td>
                      <td>{{$row->tambahan}}</td>
                      <td>{{$row->status}}</td>
                      <td>{{$row->harga}}</td>
                      <td><a href="/backend/reservasi-edit/{{$row->id_customer}}" class="btn btn-success btn-update">Ubah</a></td>
                      <td><a href="/backend/reservasi-hapus/{{$row->id_customer}}" class="btn btn-success btn-danger">Hapus</a></td>
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
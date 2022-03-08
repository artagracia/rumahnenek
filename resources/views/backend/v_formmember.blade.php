@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Member</h1>
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
              <!-- /.card-header -->
              <div class="card-body">
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Member</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="proses-member" class="member">
                @CSRF
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputName1">Nama Lengkap</label>
                    <input type="text" class="form-control" id="TxtNama" name="TxtNama" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="TxtEmail" name="TxtEmail" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNomor1">No Handphone</label>
                    <input type="text" class="form-control" id="TxtNohp" name="TxtNohp" placeholder="Nomor Handphone">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputStatus1">Status</label>
                    <input type="text" class="form-control" id="TxtStatus" name="TxtStatus" placeholder="Status">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" onclick="return confirm('Data sudah ditambahkan')" >Submit</button>
                </div>
              </form>
            </div>
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
<script type=text/javascript>
  $(function (){
    $('.member').on("submit", function (e) {
      e.preventDefault();
      var formData = new FormData($(this)[0]);
      $.ajax({
        url: $(this).attr('action'),
        type: 'POST',
        data: formData,
        cache: false,
        dataType: 'json',
        contentType: false,
        processData: false,
        beforeSend: function () {
            $('.error').remove();
            $('.tombol').text('loading..');
            $('.tombol').prop('disabled', true);
        },      
        success: function (response) {
          swal({title: response.msg.title, type: response.msg.type, text: response.msg.text, timer: 2000, showConfirmButton: false});
          setTimeout(function () {
            window.location = response.msg.link;
          }, 2000);
        },
        error: function (data) {
          var errors = data.responseJSON;
          console.log(errors);
          if ($.isEmptyObject(errors) == false) {
            $.each(errors.errors, function (key, value) {
                $("#" + key).addClass('is-invalid');
                $("#" + key).after(value);
                $('.error').css("color","dc3545");
            })
          }
          $('.tombol').text('Simpan');
          
        }
      });
    });

  });
</script>
@endsection
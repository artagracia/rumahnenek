@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Cabin</h1>
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
                <h3 class="card-title">Cabin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="proses-kamar" class="kamar">
                @CSRF
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputKamar1">Tipe Cabin</label>
                    <input type="text" class="form-control" id="TxtKamar" name="TxtKamar" placeholder="Tipe Kamar">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputGambar1">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Gambar">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" onclick="return confirm('Data sudah ditambahkan')">Submit</button>
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
    $('.kamar').on("submit", function (e) {
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
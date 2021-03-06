<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Form Kelola Mahasiswa</a></li>
              <li class="breadcrumb-item active">Data Mahasiswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        
        NIM             : <?=$mhs1->nim?> <br/>
        Nama Lengkap    : <?=$mhs1->nama?> <br/>
        Jenis Kelamin   : <?=$mhs1->gender?> <br/>
        Program Studi   : <?=$mhs1->prodi?> <br/>
        IPK             : <?=$mhs1->ipk?> <br/>
        Predikat        : <?=$mhs1->predikat()?> <br/>
        
        </div>
        
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>


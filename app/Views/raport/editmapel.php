 <main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Data Mapel</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home/dashboard">Home</a></li>
          <li class="breadcrumb-item">Data Master</li>
          <li class="breadcrumb-item active">Mapel</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Data Mapel</h5>

    <form action="<?= base_url('home/savemapel')?>" method="POST">
      <table>
        
        <tr>
          <td>Nama Mapel:</td>
          <td><input type="text" class="form-control" id="nama"name="nama" value="<?= $anjas->nama_mapel ?>"></td>
        </tr>
      
        <tr>
          <td></td>
          <td>
            <input type="hidden" value="<?=$anjas->id_mapel?>" name="id">
            <button type="submit" class="btn btn-primary">Simpan</button>
            
          </td>
        </tr>
      </table>
    </form>
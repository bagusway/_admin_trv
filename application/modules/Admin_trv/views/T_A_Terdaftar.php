<!DOCTYPE html>
<html>
<head>
 <?php include 'head.php'; ?>

</head>


 <?php include 'header.php' ; ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include 'side_bar.php'; ?>
  <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
        Travel Agent Baru
        <small>Version 2.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-address-book"></i> Travel Agent</a></li>
        <li class="active">Travel Agent Terdaftar</li>
      </ol>
    </section>    


          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="T_A_Terdaftar" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Travel</th>
                  <th>Instagram Travel</th>
                  <th>Nama Pendaftar</th>
                  <th>No HP</th>
                  <th>Provinsi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <td>Kuylah</td>
                <td>Instagram.com/kuylah_travel</td>
                <td>Ghulam Halim</td>
                <td>0811976112</td>
                <td>Kab Bogor</td>
                <td><button type="button" id='tombollihat' data-toggle='modal' data-target='#modallihat'
                          class='btn btn-info btn-xs'>Lihat Trip</button>
                    <button type="button" id='tombolterima' data-toggle='modal' data-target='#modalblokir'
                          class='btn btn-success btn-xs'> Terima</button>
                    
                        </td>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nama Travel</th>
                  <th>Instagram Travel</th>
                  <th>Nama Pendaftar</th>
                  <th>No HP</th>
                  <th>Provinsi</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
<!-- Box -->

  </div>
<!-- modal lihat -->
<div class="modal fade" id="modallihat">
   <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Kuylah Travel</h4>
                    </div>
                    <div class="modal-body">
                      
                </div>
                </div>
              
            </div>
          </div>



 
 <?php include 'wrapper.php';?>
</body>
</html>

<div class="container">
    <div class="row" style="margin-top: 15px;">
        <div class="col-md-12">
            <div class="tabs">
                <ul class="nav nav-tabs nav-justified">
                    <li class="active">
                        <a href="#pemesananTempat" data-toggle="tab"><i class="fa fa-upload"></i> Tempat Diajukan</a>
                    </li>
                    <li>
                        <a href="#menungguKonfirmasi" data-toggle="tab" style="color: #ED9C28"> <i class="fa fa-clock-o"></i> Menunggu Konfirmasi</a>
                    </li>
                    <li>
                        <a href="#pemesananDikonfirmasi" data-toggle="tab" style="color: rgb(77, 164, 71)"><i class="fa fa-check"></i> Tempat Disetujui</a>
                    </li>
                    <li>
                        <a href="#pemesananDitolak" data-toggle="tab" style="color: #fa3e3e"> <i class="fa fa-close"></i> Tempat Ditolak</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="pemesananTempat" class="tab-pane active">
                        <div class="featured-boxes">
                            <a href="<?=base_url('user/penyedia/tempat/tambah')?>" class="btn btn-primary btn-lg"> <i class="fa fa-plus"></i>  Tambah tempat </a>
                            <?php for ($i=0; $i < count($tempat); $i++) { 
                                if($tempat[$i]['status_t']=='menunggu'){?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="featured-box featured-box-primary align-left mt-xlg" >
                                        <div class="box-content">
                                            <h3 class="heading-primary text-uppercase mb-md"><i class="fa fa-building-o"></i> <?=$tempat[$i]['nama_tempat']?> <small>(<?=ucfirst($tempat[$i]['jenis_tempat'])?>)</small></h3>
                                            
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img class="img-responsive img-thumbnail" src="<?=base_url()?>assets/images/tempat/dp/<?=$tempat[$i]['gambar_dp']?>">
                                                </div>
                                                <div class="col-md-8">
                                                    <table class="cart-totals">
                                                        <tbody>
                                                            <tr class="cart-subtotal">
                                                                <th style="color:#0088cc !important">Harga</th>
                                                                <td><?=ucfirst($tempat[$i]['harga'])?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tipe</th>
                                                                <td>
                                                                    <?=ucfirst($tempat[$i]['jenis_tempat'])?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Lokasi</th>
                                                                <td><?=ucfirst($tempat[$i]['lokasi'])?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <a href="<?=$tempat[$i]['link']?>" class="btn btn-primary btn-lg pull-right" style="margin-top: 15px;">
                                                        Detail
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }} ?>
                        </div>
                    </div>
                    <div id="menungguKonfirmasi" class="tab-pane">
                        <div class="featured-boxes">
                            <?php for ($i=0; $i < count($tempat); $i++) { 
                                if($tempat[$i]['status_t']=='diproses'){?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="featured-box featured-box-secondary align-left mt-xlg" >
                                        <div class="box-content">
                                            <h3 class="heading-primary text-uppercase mb-md"><i class="fa fa-building-o"></i> <?=$tempat[$i]['nama_tempat']?> <small>(<?=ucfirst($tempat[$i]['jenis_tempat'])?>)</small></h3>
                                            
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img class="img-responsive img-thumbnail" src="<?=base_url()?>assets/images/tempat/dp/<?=$tempat[$i]['gambar_dp']?>">
                                                </div>
                                                <div class="col-md-8">
                                                    <table class="cart-totals">
                                                        <tbody>
                                                            <tr class="cart-subtotal">
                                                                <th style="color:#0088cc !important">Harga</th>
                                                                <td><?=ucfirst($tempat[$i]['harga'])?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tipe</th>
                                                                <td>
                                                                    <?=ucfirst($tempat[$i]['jenis_tempat'])?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Lokasi</th>
                                                                <td><?=ucfirst($tempat[$i]['lokasi'])?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <a href="<?=$tempat[$i]['link']?>" class="btn btn-primary btn-lg pull-right" style="margin-top: 15px;">
                                                        Detail
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }} ?>
                        </div>
                    </div>
                    <div id="pemesananDikonfirmasi" class="tab-pane">
                        <div class="featured-boxes">
                            <?php for ($i=0; $i < count($tempat); $i++) { 
                                if($tempat[$i]['status_t']=='diterima'){?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="featured-box featured-box-tertiary align-left mt-xlg" >
                                        <div class="box-content">
                                            <h3 class="heading-primary text-uppercase mb-md"><i class="fa fa-building-o"></i> <?=$tempat[$i]['nama_tempat']?> <small>(<?=ucfirst($tempat[$i]['jenis_tempat'])?>)</small></h3>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img class="img-responsive img-thumbnail" src="<?=base_url()?>assets/images/tempat/dp/<?=$tempat[$i]['gambar_dp']?>">
                                                </div>
                                                <div class="col-md-8">
                                                    <table class="cart-totals">
                                                        <tbody>
                                                            <tr class="cart-subtotal">
                                                                <th style="color:#0088cc !important">Harga</th>
                                                                <td><?=ucfirst($tempat[$i]['harga'])?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tipe</th>
                                                                <td>
                                                                    <?=ucfirst($tempat[$i]['jenis_tempat'])?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Lokasi</th>
                                                                <td><?=ucfirst($tempat[$i]['lokasi'])?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <a href="<?=$tempat[$i]['link']?>" class="btn btn-primary btn-lg pull-right" style="margin-top: 15px;">
                                                        Detail
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }} ?>
                        </div>
                    </div>
                    <div id="pemesananDitolak" class="tab-pane">
                        <div class="featured-boxes">
                            <?php for ($i=0; $i < count($tempat); $i++) { 
                                if($tempat[$i]['status_t']=='ditolak'){?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="featured-box featured-box-secondary align-left mt-xlg" >
                                        <div class="box-content">
                                            <h3 class="heading-primary text-uppercase mb-md"><i class="fa fa-building-o"></i> <?=$tempat[$i]['nama_tempat']?> <small>(<?=ucfirst($tempat[$i]['jenis_tempat'])?>)</small></h3>
                                            
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img class="img-responsive img-thumbnail" src="<?=base_url()?>assets/images/tempat/dp/<?=$tempat[$i]['gambar_dp']?>">
                                                </div>
                                                <div class="col-md-8">
                                                    <table class="cart-totals">
                                                        <tbody>
                                                            <tr class="cart-subtotal">
                                                                <th style="color:#0088cc !important">Harga</th>
                                                                <td><?=ucfirst($tempat[$i]['harga'])?></td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tipe</th>
                                                                <td>
                                                                    <?=ucfirst($tempat[$i]['jenis_tempat'])?>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Lokasi</th>
                                                                <td><?=ucfirst($tempat[$i]['lokasi'])?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <a href="<?=$tempat[$i]['link']?>" class="btn btn-primary btn-lg pull-right" style="margin-top: 15px;">
                                                        Detail
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }} ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
function viewDataPembayaran(idPendaftaran){
    $.ajax({
        type:"POST",
        url: "<?=base_url().'U_daftar_tempat/select_data_pendaftaran'?>",
        data:"idPendaftaran="+idPendaftaran,
        success: function(hasil) {
            // alert(hasil);
            var Jhasil = $.parseJSON(hasil);
            
            $('#namaTempat').html(Jhasil.nama_tempat);
            $('#uangMuka').html(Jhasil.uang_muka);
            $('#rekening').html(Jhasil.no_rekening);
        }
    });
}
</script>
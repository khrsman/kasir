<script>
    $(document).ready(function() {
        $("#datatable").DataTable();
    });
</script>
<div class="row">
    <div class="col-md-12">
        <H2><?php echo $title ?></H2>
        <center><a href="barang/add" class="btn btn-success">Tambah data</a> </center>
        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <th>Nama</th>
                <th>Satuan</th>
                <th>Kategori</th>
                <th>Action</th>
                <thead>
                    <tbody>
                        <?php foreach ($table_content as $key => $value) {    ?>
                            <tr>
                                <td>
                                    <?php echo $value["nama"] ?>
                                </td>
                                <td>
                                    <?php echo $value["satuan"] ?>
                                </td>
                                <td>
                                    <?php echo $value["kategori"] ?>
                                </td>
                                <td> <a class="btn btn-info btn-xs" href="barang/edit?id=<?php echo $value["id_barang"] ?>"><i class="fa fa-pencil-square"></i> Edit</a>
                                    <a class="btn btn-danger btn-xs" href="barang/delete?id=<?php echo $value["id_barang"] ?>"> <i class="fa fa-close"></i> Hapus</a>
                                </td>
                            </tr>
                            <?php } ?>
                    <tbody>
        </table>
    </div>
</div>

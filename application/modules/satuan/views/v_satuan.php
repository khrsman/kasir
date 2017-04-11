<script>
    $(document).ready(function() {
        $("#datatable").DataTable();
    });
</script>
<div class="row">
    <div class="col-md-12">
    
        <center><a href="satuan/add" class="btn btn-success">Tambah data</a> </center>
        <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
            <thead>
                <th>Nama</th>
                <th>Action</th>
                <thead>
                    <tbody>
                        <?php foreach ($table_content as $key => $value) {    ?>
                            <tr>
                                <td>
                                    <?php echo $value["nama"] ?>
                                </td>
                                <td> <a class="btn btn-info btn-xs" href="satuan/edit?id=<?php echo $value["id_satuan"] ?>"><i class="fa fa-pencil-square"></i> Edit</a>
                                    <a class="btn btn-danger btn-xs" href="satuan/delete?id=<?php echo $value["id_satuan"] ?>"> <i class="fa fa-close"></i> Hapus</a>
                                </td>
                            </tr>
                            <?php } ?>
                    <tbody>
        </table>
    </div>
</div>

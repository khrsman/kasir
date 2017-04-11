<div class="row">
    <div class="col-md-6">
        <H2><?php echo $title ?></H2>
        <div class="row" style="padding-top: 20px">
            <div class="col-md-12" id="form_panel">
                <form class="form-horizontal" role="form">
                    <div class="input-group">
                        <span class="input-group-addon">Id supplier</span>
                        <input type="text" class="form-control" placeholder="" name="id_supplier" id="id_supplier" value="<?php echo $table_content[0]["id_supplier"]; ?> ">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">Nama</span>
                        <input type="text" class="form-control" placeholder="" name="nama" id="nama" value="<?php echo $table_content[0]["nama"]; ?> ">
                    </div>
                </form>
                <button type="button" id="btnSave" class="btn btn-primary" style="float: right">Simpan</button>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    $(document).ready(function() {
        $("#btnSave").click(function() {
            var data = $('form').serialize();
            $.ajax({
                type: "POST",
                url: "supplier/update",
                data: {
                    data: data
                },
                //dataType: "JSON",
                success: function(resdata) {
                    alert("Berhasil diupdate");
                    window.location.href = 'supplier';
                },
                error: function(jqXHR, exception) {
                    alert("Terjadi kesalahan");
                }
            });
        });
    });
</script>
<style>
    .input-group-addon {
        min-width: 150px; // if you want width please write here //
        text-align: left;
    }

    .input-group {
        padding: 5px;
    }
</style>';

<div class="row">
    <div class="col-md-12">
        <H2><?php echo $title ?></H2>
        <div class="col-md-12">
<hr />
          <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label class="col-md-3 control-label">Nomor Invoice</label>
                  <div class="col-md-9">
                    <div class="input-group">
                      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label">Supplier</label>
                  <div class="col-md-9">
                    <div class="input-group">
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label class="col-md-5 control-label">Tanggal</label>
                  <div class="col-md-7">
                    <div class="input-group">
                      <input type="text" class="form-control" >
                    </div>
                  </div>
                </div>
                <div class="col-md-offset-8">
                  <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#myModal">Proses</button>
                </div>
              </div>
          </div>
          <hr />
          <table class="table">
            <thead>
              <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>

                <th style="width:5%">Jumlah</th>
                <th>Sub Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input class="form-control" placeholder="" type="text" disabled="" value="12345678"></td>
                <td><input class="form-control" placeholder="" type="text" disabled="" value="Bengbeng"></td>
                <td><input class="form-control" placeholder="" type="text" disabled="" value="4.000" style="text-align:right;"></td>
                <td><input class="form-control" placeholder="" type="text" disabled="" value="1"></td>
                <td><input class="form-control" placeholder="" value="4.000" disabled="" style="text-align:right;"></td>
              </tr>
              <tr>
                <td><input class="form-control" placeholder="" type="text" disabled="" value="12345678"></td>
                <td><input class="form-control" placeholder="" type="text" disabled="" value="Mie Sedap Ayam Bawang"></td>
                <td><input class="form-control" placeholder="" type="text" disabled="" value="2.500" style="text-align:right;"></td>
                <td><input class="form-control" placeholder="" type="text" disabled="" value="1"></td>
                <td><input class="form-control" placeholder="" value="2.500" disabled="" style="text-align:right;"></td>
              </tr>
              <tr>
                <td><input class="form-control" placeholder="kode" type="text"></td>
                <td><input class="form-control" placeholder="nama" type="text"></td>
                <td><input class="form-control" placeholder="harga" type="text"  style="text-align:right;"></td>
                <td><input class="form-control" placeholder="jml" type="text"></td>
                <td><input class="form-control" placeholder="subtotal"  style="text-align:right;"></td>
              </tr>
            </tbody>
          </table>

        </div>
    </div>
</div>





<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Pembayaran</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label class="col-md-2 control-label">Total</label>
          <div class="col-md-10">
            <div class="input-group">
              <span class="input-group-addon">Rp.</span>
              <input type="text" class="form-control" disabled="" value="11.500" style="color:red;font-size:large;text-align:right;font-weight: bold;">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label">Tunai:</label>
          <div class="col-md-10">
            <div class="input-group">
              <span class="input-group-addon">Rp.</span>
              <input type="text" class="form-control" disabled="" value="11.500" style="color:red;font-size:large;text-align:right;font-weight: bold;">
            </div>
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label">Kembalian:</label>
          <div class="col-md-8">
            <div class="input-group">
              <span class="input-group-addon">Rp.</span>
              <input type="text" class="form-control" disabled="" value="11.500" style="color:red;font-size:large;text-align:right;font-weight: bold;">
            </div>
          </div>
        </div>
        <p>-</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sm btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>

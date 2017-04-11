<aside class="app-sidebar" id="sidebar"  >
  <div class="sidebar-header">
    <a class="sidebar-brand" href="#"><span class="highlight">Nama Toko</span> </a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">


      <li class="@@menu.messaging">
        <a href="<?php echo site_url() ?>/penjualan">
          <div class="icon">
            <i class="fa fa-paper-plane" aria-hidden="true"></i>
          </div>
          <div class="title">Penjualan</div>
        </a>
      </li>
      <li class="dropdown">
        <a href="<?php echo site_url() ?>/pembelian">
          <div class="icon">
            <i class="fa fa-gear" aria-hidden="true"></i>
          </div>
          <div class="title">Pembelian</div>
        </a>
      </li>
      <li class="dropdown ">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-database" aria-hidden="true"></i>
          </div>
          <div class="title">Data Master</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> UI Kits</li>
            <li><a href="<?php echo site_url() ?>/barang">Barang</a></li>
            <li><a href="<?php echo site_url() ?>/supplier">Supplier</a></li>
            <li><a href="<?php echo site_url() ?>/satuan">Satuan</a></li>
            <li><a href="<?php echo site_url() ?>/kategori">Kategori</a></li>
          </ul>
        </div>
      </li>

      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-folder-open" aria-hidden="true"></i>
          </div>
          <div class="title">Laporan</div>
        </a>
      </li>
    </ul>
  </div>
  <div class="sidebar-footer">
    <ul class="menu">
      <li>
        <a href="/" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-cogs" aria-hidden="true"></i>
        </a>
      </li>
    </ul>
  </div>
</aside>
<script type="text/ng-template" id="sidebar-dropdown.tpl.html">
    <div class="dropdown-background">
        <div class="bg"></div>
    </div>
    <div class="dropdown-container">
        {{list}}
    </div>
</script>

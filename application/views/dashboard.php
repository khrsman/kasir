<!DOCTYPE html>

<html>
<head>
    <?php $this->load->view('header.php',array('title'=>$title)); ?>
</head>
<body>
    <div class="app app-default">
        <?php $this->load->view('sidebar.php'); ?>
            <div class="app-container">
              <?php $this->load->view('navbar.php',array('title'=>$title)); ?>
          
                                    <?php $this->load->view($page); ?>

            </div>
    </div>
</body>
<footer>
    <?php $this->load->view('footer.php'); ?>
</footer>

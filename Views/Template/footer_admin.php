<script>
  const base_url = "<?= base_url(); ?>";
</script>



<!-- Essential javascripts for application to work-->
<script src="<?php echo media(); ?>/admin/vali-admin-master/docs/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo media(); ?>/admin/vali-admin-master/docs/js/popper.min.js"></script>
<script src="<?php echo media(); ?>/admin/vali-admin-master/docs/js/bootstrap.min.js"></script>
<script src="<?php echo media(); ?>/admin/vali-admin-master/docs/js/main.js"></script>
<script src="<?php echo media(); ?>/admin/vali-admin-master/docs/js/functions_admin.js"></script>
    <!-- The javascript plugin to display page loading on top-->
<script src="<?php echo media(); ?>/admin/vali-admin-master/docs/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->

<script type="text/javascript" src="<?php echo media(); ?>/admin/vali-admin-master/docs/js/plugins/sweetalert.min.js"></script>

<script type="text/javascript" src="<?php echo media(); ?>/admin/vali-admin-master/docs/js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo media(); ?>/admin/vali-admin-master/docs/js/plugins/dataTables.bootstrap.min.js"></script>



    <script src="<?php echo media(); ?>/admin/vali-admin-master/docs/js/<?= $data['page_functions_js']; ?>"></script>
    

  </body>
</html>
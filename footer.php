  <script>
var options = {
onKeyPress: function (cpf, ev, el, op) {
var masks = ['000.000.000-000', '00.000.000/0000-00'];
$('.CpfCnpj').mask((cpf.length > 14) ? masks[1] : masks[0], op);
}
}

$('.CpfCnpj').length > 11 ? $('.CpfCnpj').mask('00.000.000/0000-00', options) : $('.CpfCnpj').mask('000.000.000-00#', options);
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>



 
  <!-- Vendor JS Files -->
  <script src="<?php echo $url ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo $url ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $url ?>assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?php echo $url ?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo $url ?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?php echo $url ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo $url ?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo $url ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo $url ?>assets/js/main.js"></script>
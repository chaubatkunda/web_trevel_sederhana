<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.1
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url('public/assets/back/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('public/assets/back/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('public/assets/back/'); ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('public/assets/back/'); ?>dist/js/demo.js"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo base_url('public/assets/back/'); ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('public/assets/back/'); ?>plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url('public/assets/back/'); ?>plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
        $("#jml-wisata").on("keyup", function() {
            var jml = $(this).val();
            // var hgto = $(this).val("#hrgtotal");
            var hrg = $(this).data("hargawisata");
            var bilangan = hrg * jml;
            var r = "Rp";

            var number_string = bilangan.toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{1,3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }
            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            hasil = r + rupiah;

            $("#hrgtotal").val(bilangan);
            $("#totalby").text(hasil);

        });
    });
</script>
</body>

</html>
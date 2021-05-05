<!-- Footer -->
<footer class="sticky-footer bg-white justify-content-center">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Sistem Informasi Penggalangan dan Pendistribusian Bantuan Covid-19 <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/admin_templates/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/admin_templates/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/admin_templates/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/admin_templates/'); ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/admin_templates/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/admin_templates/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/admin_templates/'); ?>js/bootstrap-datetimepicker.min.js"></script>


<!-- Page level custom scripts -->
<script src="<?= base_url('assets/admin_templates/'); ?>js/demo/datatables-demo.js"></script>
<script src="<?= base_url('assets/admin_templates/'); ?>js/jquery.fancybox.min.js"></script>
<script src="<?= base_url('assets/admin_templates/'); ?>js/jquery-ui.min.js"></script>
<script src="<?= base_url('assets/admin_templates/'); ?>js/script.js"></script>
<script>
    $(document).ready(function() {
        $('#id_kategori').on('change', function() {
            const id = $('#id_kategori').val();
            // console.log(id);
            $.ajax({
                url: "<?= base_url('admin/penyaluran/cekKategori'); ?>",
                type: 'post',
                dataType: "json",
                data: {
                    id_kategori: id
                },
                success: function(data) {
                    // console.log(data);
                    $('#id_keterangan').val(data['id_keterangan']);
                    $('#nama_keterangan').val(data['nama_keterangan']);
                }
            })
        })
    })

    $().fancybox({
        selector: '.thumbnails a:visible',
        thumbs: {
            autoStart: true
        }
    });

    $().fancybox({
        selector: '.konten a:visible',
        thumbs: {
            autoStart: true
        }
    });

    $().fancybox({
        selector: '.mg-image a:visible',
        thumbs: {
            autoStart: true
        }
    });

    function success() {
        Swal.fire(
            'Good job!',
            'You clicked the button!',
            'success'
        )
    }
</script>
</body>

</html>
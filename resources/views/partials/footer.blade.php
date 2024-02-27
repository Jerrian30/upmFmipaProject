            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; UPM FMIPA UNIB</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sbadmin/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('sbadmin/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('sbadmin/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('sbadmin/js/demo/chart-pie-demo.js') }}"></script>
    @yield('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    var dropdowns = document.querySelectorAll('.dropdown-toggle');

    dropdowns.forEach(function(dropdown) {
        dropdown.addEventListener('click', function(event) {
            var dropdownMenu = this.nextElementSibling;
            if (dropdownMenu.classList.contains('show')) {
                // Dropdown sedang dibuka, reset posisi
                dropdownMenu.style.position = 'absolute';
                dropdownMenu.style.top = '50%';
            } else {
                // Dropdown akan dibuka, atur posisi
                var rect = dropdown.getBoundingClientRect();
                dropdownMenu.style.position = 'fixed';
                dropdownMenu.style.top = rect.bottom + 'px';
                dropdownMenu.style.left = rect.left + 'px';
            }
        });
    });
});
</script>

<script>
    document.getElementById('checkAll').onclick = function() {
        var checkboxes = document.querySelectorAll('#dataTable input[type="checkbox"]');
        for (var checkbox of checkboxes) {
            checkbox.checked = this.checked;
        }
    }

    function confirmDelete() {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm').submit();
            }
        });
    }
</script>

<script>
    document.querySelector('.delete-confirm').addEventListener('click', function(event) {
    event.preventDefault();

    Swal.fire({
        title: "Apakah Anda yakin?",
        text: "Anda tidak akan dapat mengembalikan ini!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, hapus saja!"
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('deleteForm').submit(); // Submit form jika konfirmasi di-klik
        }
    });
});

</script>

<script>
        // Pastikan DOM telah siap sebelum menjalankan script
        document.addEventListener('DOMContentLoaded', function () {
        // Cek jika ada session flash message 'success'
        @if(session('success'))
            Swal.fire({
            position: 'center',
            icon: 'success',
            title: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 1500
            });
        @endif
        });
</script>

<script>
    function confirmDelete() {
    // Cek apakah ada checkbox yang dipilih
    var selected = document.querySelectorAll('#dataTable input[type="checkbox"]:checked').length;

    // Jika tidak ada yang dipilih, tampilkan SweetAlert
    if(selected === 0) {
        Swal.fire({
            title: 'Peringatan!',
            text: 'Tidak ada data yang dipilih untuk dihapus.',
            icon: 'warning',
            confirmButtonText: 'OK'
        });
    } else {
        // Jika ada yang dipilih, tampilkan konfirmasi penghapusan
        Swal.fire({
            title: "Kamu yakin ingin hapus data?",
            text: "Anda tidak akan dapat mengembalikan ini!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Hapus data"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm').submit();
            }
        });
    }
}

</script>

</body>

</html>
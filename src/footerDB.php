        <div class="text-center py-2" style="background-color: rgba(0, 0, 0, 0.03);">
            © Copyright <?php echo date('Y'); ?>
            <a class="text-reset fw-bold" href="https://www.linkedin.com/in/mmsalmanfaris/">mmsalmanfaris.com</a>
        </div>


        <!-- sweet alert-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Dashboard -->
        <script src="./assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="./assets/js/sidebarmenu.js"></script>
        <script src="./assets/js/app.min.js"></script>
        <script src="./assets/libs/apexcharts/dist/apexcharts.min.js"></script>
        <script src="./assets/libs/simplebar/dist/simplebar.js"></script>
        <script src="./assets/js/dashboard.js"></script>

        <!--jquery & datatable-->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>

        <script>
            let table = new DataTable('#myTable');
        </script>


    </body>
</html>

<?php
    if($fnctn_msg == "success"){
        echo"
            <script>
                const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
                });
                Toast.fire({
                icon: 'success',
                title: 'Registered successfully'
                });
             </script>";
    };
?> 
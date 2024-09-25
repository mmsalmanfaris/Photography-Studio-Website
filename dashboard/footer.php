        <div class="text-center py-2 mt-4" style="background-color: rgba(0, 0, 0, 0.03);">
            Copyright @ <?php echo date('Y'); ?> Esai Studio - All Right Reserved. Design & Development by
            <a class="text-reset fw-bold" href="https://www.cense7.com" target="_blank">Cense7.com</a>
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
            $(document).ready(function() {
                let table = new DataTable('#myTable', {
                    layout: {
                        topStart: {
                            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                        }
                    }
                });
            });
        </script>


        <!--Data table Export Buttons-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/v/bs5/jszip-3.10.1/b-3.0.2/b-html5-3.0.2/b-print-3.0.2/datatables.min.js"></script>


        </body>
        <?php
        // if (isset(msg == "success")) {
        //     $msg = $_GET['msg'];
        if ($msg == "adminUpdated") {
            echo "
                    <script>
                    Swal.fire({
                    title: 'Update Successfull!',
                    text: 'Data Updated to Database!',
                    icon: 'success'
                    });

                    window.location.href = 'admindetailsDB.php';
                    </script>";
        } elseif ($msg == "inquiryUpdated") {
            echo "
                    <script>
                    Swal.fire({
                    title: 'Update Successfull!',
                    text: 'Data Updated to Database!',
                    icon: 'success'
                    });

                    window.location.href = 'inquiryDB.php';
                    </script>";
        } elseif ($msg == "Deleted") {
            echo "
                    <script>
                    Swal.fire({
                    title: 'Delete Successfull!',
                    text: 'Data Deleted from Database!',
                    icon: 'warning'
                    });

                    window.location.href = 'admindetailsDB.php';
                    
                    </script>";
        } elseif ($msg == "packagedeleted") {
            echo "
                    <script>
                    Swal.fire({
                    title: 'Delete Successfull!',
                    text: 'Package Deleted from Database!',
                    icon: 'warning'
                    });

                    window.location.href = 'packageDB.php';

                    </script>";
        }
        if ($msg == "Succsss") {
            echo "
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
                            title: 'Updated successfully'
                            });
                        </script>";
        }
        // }
        ?>

        </html>
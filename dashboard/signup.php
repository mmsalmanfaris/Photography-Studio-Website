<?php

require_once '../includes/config_session.inc.php';
require_once '../includes/signup_view.inc.php';
require_once 'headerDB.php';

?>


<!-- <div class="row"> -->
<div class="container py-5">
    <div class="row justify-content-center pt-5">
        <div class="col-12 col-lg-9 col-xl-7">
            <div class="card rounded-5">
                <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                    <form action="../includes/signup.inc.php" method="post">
                        
                    <?php 
                        signup_inputs();
                    ?>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-12"> </div>
                                <input class="btn btn-primary btn-lg btn-block" type="submit" value="Register" name="submit" />
                            </div>
                        </div>
                        <?php
                    check_signup_errors();
                ?>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include './footerDB.php';
?>
</div>
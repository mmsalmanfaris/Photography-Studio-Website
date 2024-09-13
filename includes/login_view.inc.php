<?php

declare(strict_types=1);

function check_login_errors()
{
    if (isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];

        foreach ($errors as $error) {
            echo "<p class='alert alert-warning'> $error </p>";
        }
        unset($_SESSION["errors_login"]);
    } else if (isset($_GET['login']) && $_GET['login'] === "success") {
        echo '<div class="card w-100">
    <div class="card-body">
        <p class="card-text text-center">Correct Login Credentials. Login Success.</p>
        <div class="d-flex justify-content-center">
            <a href="./dashboard/" class="btn btn-primary">Go to Dashboard</a>
        </div>
    </div>
</div>
';
    }
}

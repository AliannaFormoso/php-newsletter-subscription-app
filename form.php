<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("includes/head-imports.php"); ?>
    <title>Register form</title>
</head>

<body>

    <?php include("includes/header.php"); ?>
    <?php include("includes/navigation.php"); ?>

    <div class="container" id="main-content">
        <h2 class="mb-3 text-center">Register to our newsletter </h2>

        <br>


        <form action="submit.php" method="post"
            class="w-75 p-5 border shadow-sm rounded form form-group mx-auto needs-validation">

            <h3 class="mb-3">Fill in this form</h3>
            <label for="first_name" class="form-label">First Name <sup>*</sup></label> <br>
            <input type="text" name="first_name" placeholder="John" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Looks good!
            </div><br><br>
            <label for="last_name" class="form-label">Last Name<sup>*</sup></label><br>
            <input type="text" name='last_name' placeholder="Doe" class="form-control form-control-lg" required>
            <div class="valid-feedback">
                Looks good!
            </div><br><br>
            <label for="email" class="form-label">Email<sup>*</sup></label><br>
            <input type="email" name='email' placeholder="example@email.com" class="form-control form-control-lg mb-1"
                required>
            <div class="valid-feedback">
                Looks good!
            </div>
            <p><em>(*) Required fields.</em></p>

            <div class="form-check mt-4">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label mb-3" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>


            <input type="submit" name="submit" value="SUBSCRIBE"
                class="btn btn-secondary btn-lg opacity-75 w-100 fw-bold mx-auto shadow rounded "><br>
        </form>
    </div>
    <?php include("includes/script-imports.php"); ?>
    <?php include("includes/footer.php"); ?>

</body>

</html>
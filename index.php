<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card my-5">
                <h4 class="text-center mt-3 mb-0 ">Verify Your Phone Number</h4>
                <form method="get" action="verify.php" class="card-body p-lg-5">
                    <div class="text-center">
                        <img src="images/smartphone.png" class="border-0 mb-3" width="150px" alt="Phone Photo">
                    </div>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Phone Number" name="phone_number" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success px-5 mb-5 w-100">Verify</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/adminLogin_styles.css">
    <link rel="stylesheet" href="styles/getInvolved_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- datatables.net -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <title>Kent Outreach Program</title>
    <!--Favicon-->
    <link rel="icon" href="images/stjames_logo1.png">
</head>
<body data-spy="scroll" data-target="#navbar-site" data-offset="80">

<!--##################    NAVBAR    ##################-->

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" id="navbar-site">
    <a class="navbar-brand" href="<? echo $navbar_link ?>">St. James Episcopal Church</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
            aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-auto">
                <a class="nav-link font-weight-bold" href="<? echo $about_link ?>">About Us<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ml-auto">
                <a class="nav-link font-weight-bold" href="<? echo $services_link ?>">Services</a>
            </li>
            <li class="nav-item ml-auto">
                <a class="nav-link font-weight-bold" href="<? echo $contact_link ?>">Contact Us</a>
            </li>
            <li class="nav-item ml-auto">
                <a class="nav-link font-weight-bold" href="<? echo $getInvolved_link ?>">Get Involved</a>
            </li>
            <?php
            if (isset($_SESSION['loggedin'])) {
                echo '<li id="logout" class="nav-item ml-auto">
                <a href="logout.php"><span class="fa fa-sign-out"></span> Logout</a>
            </li>';
            }
            ?>
        </ul>
    </div>
</nav>



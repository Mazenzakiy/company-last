
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>company | Dashboard</title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.css')}}">

    <style>
        /* Flexbox layout for full height and sticky footer */
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content {
            flex: 1;
        }

        .footer {
            background-color: #343a40;
            /* Dark background */
            color: #ffffff;
            /* White text color */
            text-align: center;
            padding: 1rem;
            margin-top: auto;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{route('admins.home')}}">company</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('admins.employee.index')}}">Employees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admins.department.index')}}">Departments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admins.project.index')}}">Projects</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admins.index')}}">Admins</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto mr-5">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Name of Admin
                            <?php
                            // echo $_SESSION['user_email'];
                            ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('admins.profile')}}">Profile</a>
                            <a class="dropdown-item"
                                href="http://localhost:3000/admin/handlers/handle-logout.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <title>User Input Form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <div class="container-fluid text-center bg-secondary-subtle display-3 py-4">
            Data Input Form
        </div>
    </header>
    <main>


        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <?php

                        if (isset($_POST["count"])) {

                    ?>
                        <form id="myform" action="user-display.php" method="post">
                        <?php

                            for ($i = 1; $i <= $_POST["count"]; $i++) {

                                echo

                                    "<div class=\"mb-3\">
                                        <label for=\"name{$i}\" class=\"form-label\">Name {$i}</label>
                                        <input
                                        type=\"text\"
                                        class=\"form-control\"
                                        name=\"name{$i}\"
                                        id=\"name{$i}\"
                                        aria-describedby=\"helpId\"
                                        />
            
                                    </div>";

                            }
                        ?>

                        </form>
                        <?php



                        } else {
                            echo 'Please re-enter the number at <a href="index.html" class="btn">HomePage</a>';
                        }

                    ?>

                </div>
            </div>
        
            <div class="row justify-content-center">
                <div class="col-sm-8 d-flex justify-content-end">
                    <button type="submit" form="myform" class="btn btn-info px-5 py-2">
                        Print
                    </button>
                </div>
            </div>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>
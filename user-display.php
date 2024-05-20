<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
    <title>User Data Display</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <div class="container-fluid text-center bg-secondary-subtle display-3 py-4">
            User Data Display
        </div>
    </header>

    <main class="container mt-5">

        <div class="row justify-content-center">
            <div class="table-responsive-sm col-sm-8">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr class="table-light">
                            <th scope="col" class="w-25 py-3">S.No.</th>
                            <th scope="col" class="py-3">Name</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        <?php
                            $i = 1;
                            foreach ($_POST as $name) {
                                echo "
                                        <tr>
                                            <td scope=\"row\" class=\"py-3\">$i</td>
                                            <td class=\"py-3\">$name</td>
                                        </tr>
                                    ";
                                # code...
                            $i++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8 d-flex justify-content-end">
                <a
                    name="home"
                    id="home"
                    class="btn btn-info px-5 py-2"
                    href="index.html"
                    role="button"
                    >Retry</a
                >
                
                
            </div>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>
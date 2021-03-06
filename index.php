<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Newsletter - Sign Up!</title>
    <meta name="description" content="using PDO - saving to MySQL DB">
    <meta name="keywords" content="php, PDO, connecting, MySQL">
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">

    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">

        <header>
            <h1>Newsletter</h1>
        </header>

        <main>
            <article>
                <form method="post" action="save.php">
                    <label>Submit an e-mail adress
                        <input type="email" name="email" >
                    </label>
                    <input type="submit" value="Sign up!">

                    <?php
                        if (isset($_SESSION['given_email'])) {
                            echo '<p>This email address is incorrect!</p>';
                            unset($_SESSION['given_email']);
                        }
                    ?>
                </form>
            </article>
        </main>

    </div>
</body>
</html>
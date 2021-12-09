<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glimma Twitter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link  rel="stylesheet" type="text/css" href="css/glimworks_css/main.css"/> -->
    <link  rel="stylesheet" type="text/css" href="/css/main.min.css"/>
</head>

<body>
<?=
    $this->include("/partials/header");
?>

    <?=
    $this->include("/partials/profileBig");
?>

    <?=
    $this->include("/partials/profileSmall");
?>

    <?=
   $this->include("/partials/post");
?>

    <?=
   $this->include("/partials/postForm");
?>


    <div id="loginPartialContainer" class="hidden">
        <section>
            <p>You need to log in! <span id="closeLoginPartialContainer">X</span></p>
            <?= $this->include("/partials/loginPartial"); ?>
        </section>
    </div>
    <script src="/javascript/clientfunctions.js"></script>
    <script src="/javascript/header.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="/assets/file/system/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/custom.css">
    <title><?= $title ? $title : WEB_NAME ?></title>
</head>

<?= toast_show() // Hiện thị toast nếu có ?>

<style>
    .img-heading {
        filter: drop-shadow(0.2px 0.3px 0.5px #000000);
    }
</style>

<body>
<div class="container d-flex flex-column align-items-center">
    <div class="col-6 col-lg-1 mt-5">
            <img class="w-100" src="<?= URL_STORAGE ?>system/logo.png" alt="logo.png">
    </div>
    <div class="col-12 col-lg-4 mt-3">
            <img class="w-100 img-heading" src="<?= URL_STORAGE ?>system/heading_1.png" alt="heading_1.png">
    </div>
    <div class="col-12 col-lg-6 mt-5">
            <img class="w-100 img-heading" src="<?= URL_STORAGE ?>system/heading_2.png" alt="heading_2.png">
    </div>
</div>
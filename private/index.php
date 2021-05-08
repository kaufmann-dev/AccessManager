<?php
    $objectAarray = glob("*", GLOB_ONLYDIR);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Private</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../js/search.js"></script>
</head>

<body class="bg-dark">
    <div class="container py-3">
        <h1 class="text-danger pb-3"><i class="bi bi-shield-lock"></i> Private</h1>
        
        <div class="form-floating">
            <input type="text" class="form-control" id="searchInput" placeholder=" ">
            <label for="searchInput">Filter <?php echo count($objectAarray); ?> projects</label>
        </div>

        <div class="row row-cols-1 row-cols-md-3">
        <?php foreach($objectAarray as $x) { ?>
            <div class="col mt-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $x; ?></h5>
                        <p class="card-text"><?php echo file_get_contents($x . '/desc'); ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo $x; ?>" class="card-link">Open in Browser</a>
                        <a href="<?php echo file_get_contents($x . '/github'); ?>" class="card-link">View on GitHub</a>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
</body>

</html>
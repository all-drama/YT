<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube To Mp3 or Mp3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
        <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">YouTube Downloader</h1>
      <p class="lead">Free Ads YouTube Downloader</p>
      <form method="POST">
            <div class="input-group mb-3">
                <input type="url" class="form-control" name="url" placeholder="https://www.youtube.com/watch?v=XXYlFuWEuKI" aria-describedby="button-addon2" required>
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Download</button>
            </div>
      </form>
    <?php
        require_once 'YouTube.php';
    ?>
    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted">2021</span>
      </div>
    </footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
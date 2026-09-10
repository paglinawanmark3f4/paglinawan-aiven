<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Product Desk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<main class="container min-vh-100 d-flex align-items-center justify-content-center py-4">
    <div class="card border-0 shadow-sm" style="max-width: 420px; width: 100%;">
        <div class="card-body p-4 p-md-5">
            <h1 class="h3 mb-1">Product Desk</h1>
            <p class="text-secondary mb-4">Sign in to manage your products.</p>
            <?php if (!empty($error)): ?><div class="alert alert-danger"><?= htmlspecialchars($error) ?></div><?php endif; ?>
            <form method="post" action="<?= site_url('login') ?>">
                <div class="mb-3"><label class="form-label" for="username">Username</label><input class="form-control" id="username" name="username" value="<?= htmlspecialchars($username ?? '') ?>" required autofocus></div>
                <div class="mb-4"><label class="form-label" for="password">Password</label><input class="form-control" id="password" name="password" type="password" required></div>
                <button class="btn btn-primary w-100" type="submit">Sign in</button>
            </form>
        </div>
    </div>
</main>
</body>
</html>
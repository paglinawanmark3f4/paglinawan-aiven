<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products | Product Desk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-dark bg-dark">
    <div class="container"><a class="navbar-brand fw-semibold" href="<?= site_url('products') ?>">Product Desk</a><form method="post" action="<?= site_url('logout') ?>"><button class="btn btn-outline-light btn-sm" type="submit">Sign out</button></form></div>
</nav>
<main class="container py-4">
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4"><div><h1 class="h3 mb-1">Products</h1><p class="text-secondary mb-0">Manage your inventory in one place.</p></div><a class="btn btn-primary" href="<?= site_url('products/create') ?>">Add product</a></div>
    <?php foreach (['success' => 'success', 'error' => 'danger'] as $key => $class): ?><?php if (!empty($$key)): ?><div class="alert alert-<?= $class ?>"><?= htmlspecialchars($$key) ?></div><?php endif; ?><?php endforeach; ?>
    <div class="card border-0 shadow-sm"><div class="table-responsive"><table class="table table-hover align-middle mb-0"><thead class="table-dark"><tr><th>ID</th><th>Product</th><th>Description</th><th>Price</th><th>Quantity</th><th>Created</th><th class="text-end">Actions</th></tr></thead><tbody>
    <?php if (empty($products)): ?><tr><td class="text-center text-secondary py-5" colspan="7">No products yet.</td></tr><?php else: ?>
        <?php foreach ($products as $product): ?><?php $value = fn($key) => htmlspecialchars((string) ($product->$key ?? $product[$key] ?? '')); ?><tr><td><?= $value('id') ?></td><td class="fw-semibold"><?= $value('product_name') ?></td><td><?= $value('description') ?></td><td>₱<?= $value('price') ?></td><td><?= $value('quantity') ?></td><td><?= $value('created_at') ?></td><td class="text-end text-nowrap"><a class="btn btn-sm btn-outline-primary" href="<?= site_url('products/edit/' . $value('id')) ?>">Edit</a> <form class="d-inline" method="post" action="<?= site_url('products/delete/' . $value('id')) ?>" onsubmit="return confirm('Delete this product?');"><button class="btn btn-sm btn-outline-danger" type="submit">Delete</button></form></td></tr><?php endforeach; ?>
    <?php endif; ?></tbody></table></div></div>
</main>
</body>
</html>

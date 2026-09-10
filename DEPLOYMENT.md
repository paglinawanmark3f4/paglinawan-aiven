# Product Desk deployment

## Local setup

1. Copy `.env.example` to `.env` and fill in the Aiven MySQL connection values.
2. Create the schema with the migrations, or run the products SQL below.
3. Point Apache or Laragon at `public/` and open `/products`.

```sql
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    quantity INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## Aiven MySQL

Use the Aiven service's host, port, database name, username, and password. Keep TLS enabled according to your Aiven connection requirements. Never commit `.env` or credentials.

## Render

1. Push this repository to GitHub.
2. In Render, create a Blueprint and select the repository. Render will read `render.yaml` and build the supplied Docker image.
3. Set the `DB_HOST`, `DB_PORT`, `DB_NAME`, `DB_USER`, and `DB_PASS` secret values in the Render dashboard from Aiven.
4. Deploy, then run the migrations against Aiven using the repository's LavaLust migration command or apply the SQL directly.
5. Confirm the service opens `/products` and test create, edit, and delete flows over HTTPS.

## GitHub commands

```bash
git add .
git commit -m "Add product CRUD"
git branch -M main
git remote add origin https://github.com/USER/REPOSITORY.git
git push -u origin main
```

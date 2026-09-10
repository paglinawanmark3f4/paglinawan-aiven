<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
        $this->call->model('ProductModel');
    }

    public function index()
    {
        $data['products'] = $this->ProductModel->order_by('created_at', 'DESC');
        $data['success'] = $this->pull_flash('success');
        $data['error'] = $this->pull_flash('error');
        $this->call->view('products/index', $data);
    }

    public function create()
    {
        $this->call->view('products/create', [
            'errors' => [],
            'old' => ['product_name' => '', 'description' => '', 'price' => '', 'quantity' => ''],
        ]);
    }

    public function store()
    {
        $data = $this->validated_input();
        if ($data['errors']) {
            $this->call->view('products/create', $data);
            return;
        }

        $this->ProductModel->insert($data['values']);
        $this->flash('success', 'Product created successfully.');
        redirect('products');
        exit;
    }

    public function edit($id)
    {
        $product = $this->ProductModel->find((int) $id);
        if (!$product) {
            show_404();
            return;
        }

        $this->call->view('products/edit', ['product' => $product, 'errors' => []]);
    }

    public function update($id)
    {
        $product = $this->ProductModel->find((int) $id);
        if (!$product) {
            show_404();
            return;
        }

        $data = $this->validated_input();
        if ($data['errors']) {
            $product = (object) array_merge((array) $product, $data['old']);
            $this->call->view('products/edit', ['product' => $product, 'errors' => $data['errors']]);
            return;
        }

        $this->ProductModel->update((int) $id, $data['values']);
        $this->flash('success', 'Product updated successfully.');
        redirect('products');
        exit;
    }

    public function delete($id)
    {
        $this->ProductModel->delete((int) $id);
        $this->flash('success', 'Product deleted successfully.');
        redirect('products');
        exit;
    }

    private function validated_input()
    {
        $old = [
            'product_name' => trim((string) $this->io->post('product_name')),
            'description' => trim((string) $this->io->post('description')),
            'price' => trim((string) $this->io->post('price')),
            'quantity' => trim((string) $this->io->post('quantity')),
        ];
        $errors = [];

        if ($old['product_name'] === '' || strlen($old['product_name']) > 100) {
            $errors[] = 'Product name is required and must be 100 characters or fewer.';
        }
        if ($old['price'] === '' || !is_numeric($old['price']) || (float) $old['price'] < 0) {
            $errors[] = 'Price must be a non-negative number.';
        }
        if ($old['quantity'] === '' || filter_var($old['quantity'], FILTER_VALIDATE_INT) === false || (int) $old['quantity'] < 0) {
            $errors[] = 'Quantity must be a non-negative whole number.';
        }

        return [
            'errors' => $errors,
            'old' => $old,
            'values' => [
                'product_name' => $old['product_name'],
                'description' => $old['description'],
                'price' => number_format((float) $old['price'], 2, '.', ''),
                'quantity' => (int) $old['quantity'],
            ],
        ];
    }

    private function flash($key, $message)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['flash'][$key] = $message;
    }

    private function pull_flash($key)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $message = $_SESSION['flash'][$key] ?? null;
        unset($_SESSION['flash'][$key]);
        return $message;
    }
}

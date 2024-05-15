<?php

class Home extends Controller {
    public function index() {
        $itemModel = $this->model('Item');
        $items = $itemModel->getAllItems();
        $this->view('home/index', ['items' => $items]);
    }

    public function show($id) {
        $itemModel = $this->model('Item');
        $item = $itemModel->getItemById($id);
        $this->view('home/show', ['item' => $item]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description']
            ];
            $itemModel = $this->model('Item');
            $itemModel->createItem($data);
            header('Location: /');
        } else {
            $this->view('home/create');
        }
    }

    public function edit($id) {
        $itemModel = $this->model('Item');
        $item = $itemModel->getItemById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description']
            ];
            $itemModel->updateItem($id, $data);
            header('Location: /');
        } else {
            $this->view('home/edit', ['item' => $item]);
        }
    }

    public function delete($id) {
        $itemModel = $this->model('Item');
        $itemModel->deleteItem($id);
        header('Location: /');
    }
}

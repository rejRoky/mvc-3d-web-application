<?php

class Home extends Controller {
    public function index() {
        $modelModel = $this->model('Model');
        $models = $modelModel->getAllModels();
        $this->view('home/index', ['models' => $models]);
    }

    public function show($id) {
        $modelModel = $this->model('Model');
        $model = $modelModel->getModelById($id);
        $this->view('home/show', ['model' => $model]);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description']
            ];
            $modelModel = $this->model('Model');
            $modelModel->createModel($data);
            header('Location: /');
        } else {
            $this->view('home/create');
        }
    }

    public function edit($id) {
        $modelModel = $this->model('Model');
        $model = $modelModel->getModelById($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'name' => $_POST['name'],
                'description' => $_POST['description']
            ];
            $modelModel->updateModel($id, $data);
            header('Location: /');
        } else {
            $this->view('home/edit', ['model' => $model]);
        }
    }

    public function delete($id) {
        $modelModel = $this->model('Model');
        $modelModel->deleteModel($id);
        header('Location: /');
    }
}

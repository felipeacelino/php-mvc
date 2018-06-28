<?php

namespace app\controllers\portal;

use app\controllers\ContainerController;

class CursoController extends ContainerController {

    public function index() {

        dd('index');

    }

    public function show($request) {

        //dd($request->next);

        $this->view([
            'title' => 'Curso MVC',
            'curso' => 'Curso MVC'
        ], 'portal.curso');

    }

    public function create() {

        

    }

    public function store() {

        

    }

    public function edit($id) {

        

    }

    public function update($id) {

        

    }

    public function destroy($id) {

        

    }

}
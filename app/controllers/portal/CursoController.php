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
            'curso' => 'PHP MVC'
        ], 'portal.cursos');

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
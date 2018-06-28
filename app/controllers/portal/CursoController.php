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
            'curso' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt reiciendis exercitationem veniam, quas ad est nam saepe aperiam quisquam, quam fugit consequuntur ipsa recusandae! Exercitationem aperiam earum numquam minus pariatur perspiciatis rerum alias sint! Voluptates similique cum dolorem voluptate, beatae saepe fugiat. Ut numquam explicabo aliquam neque amet dignissimos, optio minus. Porro nulla eum doloremque fuga laudantium reiciendis exercitationem cum suscipit recusandae maxime laboriosam reprehenderit nihil vero error doloribus itaque sapiente sequi, accusantium hic omnis at aliquam officiis magni nemo. Velit, accusamus perferendis. Voluptate veniam ipsa dolore fugiat corporis, officiis ea sapiente, dignissimos enim quas facere quibusdam autem accusamus cumque!'
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
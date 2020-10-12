<?php namespace App\Http\Controllers\Admin;

use App\Models\Disciplines;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class DisciplinesCrudController extends CrudController
{

    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel(Disciplines::class);
        $this->crud->setRoute(backpack_url('disciplines'));
        $this->crud->setEntityNameStrings('disciplines', 'Disciplines');
    }

    public function setupListOperation()
    {

        $this->crud->addColumn([
            'name' => 'name',
            'type' => 'text',
            'label' => 'Предмет'
        ]);
    }

    public function setupCreateOperation()
    {
        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "Предмет"
        ]);
    }

    public function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
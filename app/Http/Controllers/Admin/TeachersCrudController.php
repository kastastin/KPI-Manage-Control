<?php namespace App\Http\Controllers\Admin;

use App\Models\Teachers;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class TEachersCrudController extends CrudController
{

    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel(Teachers::class);
        $this->crud->setRoute(backpack_url('teachers'));
        $this->crud->setEntityNameStrings('teachers', 'Teachers');
    }

    public function setupListOperation()
    {

        $this->crud->addColumn([
            'name' => 'name',
            'type' => 'text',
            'label' => 'Ім`я'
        ]);

        $this->crud->addColumn([
            'name' => 'surname',
            'type' => 'text',
            'label' => 'Прізвище'
        ]);

        $this->crud->addColumn([
            'name' => 'email',
            'type' => 'text',
            'label' => "Пошта"
        ]);

        $this->crud->addColumn([
            'name' => 'phone',
            'type' => 'text',
            'label' => "Мобільний телефон"
        ]);
    }

    public function setupCreateOperation()
    {
        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "Ім`я"
        ]);
        $this->crud->addField([
            'name' => 'surname',
            'type' => 'text',
            'label' => "Прізвище"
        ]);    
        $this->crud->addField([
            'name' => 'email',
            'type' => 'text',
            'label' => "Пошта"
        ]);

        $this->crud->addField([
            'name' => 'phone',
            'type' => 'text',
            'label' => "Мобільний телефон"
        ]);
    }

    public function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
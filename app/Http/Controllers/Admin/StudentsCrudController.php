<?php namespace App\Http\Controllers\Admin;

use App\Models\Students;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class StudentsCrudController extends CrudController
{

    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel(Students::class);
        $this->crud->setRoute(backpack_url('students'));
        $this->crud->setEntityNameStrings('students', 'Students');
    }

    public function setupListOperation()
    {

        $this->crud->addColumn([
            'name' => 'name',
            'type' => 'text',
            'label' => 'Студент'
        ]);

        $this->crud->addColumn([
            'name' => 'group.name',
            'type' => 'text',
            'label' => 'Група',
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
            'label' => "Студент"
        ]);
        $this->crud->addField(
            [
                'name' => 'group_id',
                'label' => 'Група',
                'type' => 'select',
                'entity' => 'group',
                'attributes' => [
                    'required' => true,
                ],
                'attribute' => 'name',
            ]

        );
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
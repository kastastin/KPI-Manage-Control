<?php namespace App\Http\Controllers\Admin;

use App\Models\Department;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class DepartmentCrudController extends CrudController
{

    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel(Department::class);
        $this->crud->setRoute(backpack_url('department'));
        $this->crud->setEntityNameStrings('department', 'Departments');
    }

    public function setupListOperation()
    {

        $this->crud->addColumn([
            'name' => 'name',
            'type' => 'text',
            'label' => "Кафедра"
        ]);

        $this->crud->addColumn([
            'name' => 'faculty.short_name',
            'type' => 'text',
            'label' => 'Факультет',
            'function_name' => 'showFacultyName',
        ]);

        $this->crud->addColumn([
            'name' => 'short_name',
            'type' => 'text',
            'label' => "Коротка назва"
        ]);
    }

    public function setupCreateOperation()
    {
        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "Name"
        ]);
        $this->crud->addField(
            [
                'name' => 'faculty_id',
                'label' => trans('admin.faculty'),
                'type' => 'select',
                'entity' => 'faculty',
                'attributes' => [
                    'required' => true,
                ],
                'attribute' => 'name',
            ]

        );
        $this->crud->addField([
            'name' => 'short_name',
            'type' => 'text',
            'label' => "Short name"
        ]);
    }

    public function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
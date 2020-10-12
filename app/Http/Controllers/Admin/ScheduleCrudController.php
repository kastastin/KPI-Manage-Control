<?php namespace App\Http\Controllers\Admin;

use App\Models\Schedule;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class ScheduleCrudController extends CrudController
{

    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel(Schedule::class);
        $this->crud->setRoute(backpack_url('schedule'));
        $this->crud->setEntityNameStrings('schedule', 'Schedule');
    }

    public function setupListOperation()
    {

        $this->crud->addColumn([
            'name' => 'name',
            'type' => 'text',
            'label' => "Рік"
        ]);

        $this->crud->addColumn([
            'name' => 'teachers.surname',
            'type' => 'text',
            'label' => 'Викладач',
        ]);

        $this->crud->addColumn([
            'name' => 'disciplines.name',
            'type' => 'text',
            'label' => 'Предмет',
        ]);

        $this->crud->addColumn([
            'name' => 'group.name',
            'type' => 'text',
            'label' => 'Група',
        ]);

        $this->crud->addColumn([
            'name' => 'time',
            'type' => 'text',
            'label' => "Час"
        ]);
        
        $this->crud->addColumn([
            'name' => 'classroom',
            'type' => 'text',
            'label' => "Кабінет"
        ]);
    }

    public function setupCreateOperation()
    {
        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "Рік"
        ]);

        $this->crud->addField(
            [
                'name' => 'teachers_id',
                'label' => 'Викладач',
                'type' => 'select',
                'entity' => 'teachers',
                'attributes' => [
                    'required' => true,
                ],
                'attribute' => 'surname',
            ]

        );

        $this->crud->addField(
            [
                'name' => 'disciplines_id',
                'label' => 'Предмет',
                'type' => 'select',
                'entity' => 'disciplines',
                'attributes' => [
                    'required' => true,
                ],
                'attribute' => 'name',
            ]

        );

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
            'name' => 'time',
            'type' => 'text',
            'label' => "Час"
        ]);

        $this->crud->addField([
            'name' => 'classroom',
            'type' => 'text',
            'label' => "Кабінет"
        ]);
    }

    public function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
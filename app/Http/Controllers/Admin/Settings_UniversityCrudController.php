<?php namespace App\Http\Controllers\Admin;

use App\Models\Settings_university;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class Settings_UniversityCrudController extends CrudController
{

    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel(Settings_university::class);
        $this->crud->setRoute(backpack_url('settings_university'));
        $this->crud->setEntityNameStrings('settings_university', 'Settings_university');
    }

    public function setupListOperation()
    {

        $this->crud->addColumn([
            'name' => 'name',
            'type' => 'text',
            'label' => "Назва"
        ]);

        $this->crud->addColumn([
            'name' => 'short_name',
            'type' => 'text',
            'label' => "Коротка назва"
        ]);

        $this->crud->addColumn([
            'name' => 'address',
            'type' => 'text',
            'label' => "Адреса"
        ]);

        $this->crud->addColumn([
            'name' => 'phone',
            'type' => 'text',
            'label' => "Мобільний телефон"
        ]);

        $this->crud->addColumn([
            'name' => 'site',
            'type' => 'text',
            'label' => "Сайт"
        ]);

    }

    public function setupCreateOperation()
    {
        $this->crud->addField([
            'name' => 'name',
            'type' => 'text',
            'label' => "Назва"
        ]);

        $this->crud->addField([
            'name' => 'short_name',
            'type' => 'text',
            'label' => "Коротка назва"
        ]);
     
        $this->crud->addField([
            'name' => 'address',
            'type' => 'text',
            'label' => "Адреса"
        ]);

        $this->crud->addField([
            'name' => 'phone',
            'type' => 'text',
            'label' => "Мобільний телефон"
        ]);

        $this->crud->addField([
            'name' => 'site',
            'type' => 'text',
            'label' => "Сайт"
        ]);

    }

    public function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
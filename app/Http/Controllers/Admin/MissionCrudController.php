<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MissionRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MissionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MissionCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Mission::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/mission');
        CRUD::setEntityNameStrings('mission', 'missions');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('club');
        CRUD::column('classe');
        // CRUD::column('created_at');
        CRUD::column('debut');
        CRUD::column('fin');
        // CRUD::column('description');
        // CRUD::column('lien');
        // CRUD::column('pcc');
        CRUD::addColumn(['name' => 'pcc', 'type' => 'text','label'=>'Recompense']);

        // CRUD::column('updated_at');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(MissionRequest::class);

        CRUD::addField(['name' => 'club',
        'type' => 'select_from_array',
        'options' => ['python'=>'python','java'=>'java','web'=>'web','arduino'=>'arduino']
        ]);

        CRUD::addField(['name' => 'classe', 'type' => 'select_from_array', "label"=>"classe de la mission ",
        'options' => ['D'=>'D','B'=>'B','A'=>'A','S'=>'S','I'=>'I']]);
        CRUD::addField(['name' => 'debut', 'type' => 'text', "label"=>"Debut"]);
        CRUD::addField(['name' => 'fin', 'type' => 'text', "label"=>"Fin"]);
        CRUD::addField(['name' => 'description', 'type' => 'textarea', "label"=>"Description"]);

        CRUD::addField(
            [   // Upload
                'name'      => 'lien',
                'label'     => 'Document',
                'type'      => 'upload',
                'upload'    => true,
                // 'disk'      => 'docs', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
                // optional:
                'temporary' => 10 // if using a service, such as S3, that requires you to make temporary URLs this will make a URL that is valid for the number of minutes specified
            ],
        );

        CRUD::field('pcc');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}

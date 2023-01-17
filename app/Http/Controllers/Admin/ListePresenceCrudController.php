<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ListePresenceRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ListePresenceCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ListePresenceCrudController extends CrudController
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
        CRUD::setModel(\App\Models\ListePresence::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/liste-presence');
        CRUD::setEntityNameStrings('liste presence', 'liste presences');
        $this->crud->denyAccess('create');
        $this->crud->addButtonFromModelFunction('top', 'open_presence', 'openPresence', 'beginning');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {

        CRUD::column('nom');
        CRUD::column('seance_id');
        CRUD::column('date');

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
        CRUD::setValidation(ListePresenceRequest::class);

        CRUD::addField(['name' => 'club',
        'type' => 'select_from_array',
        'options' => ['python'=>'python','java'=>'java','web'=>'web','arduino'=>'arduino']
        ]);
        $this->crud->addField(
            [
                'name' => 'nom',
                'type' => 'select',
                'label' => 'membre',
                // 'entity'=> 'type_annonces',
                'model' => 'App\Models\User',
                'attribute' => 'name',

            ]
        );
        $this->crud->addField(
            [
                'name' => 'seance_id',
                'type' => 'select',
                'label' => 'Seance',
                // 'entity'=> 'type_annonces',
                'model' => 'App\Models\Seances',
                'attribute' => 'date',

            ]
        );
        // CRUD::field('seance_id');
        CRUD::field('date');

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

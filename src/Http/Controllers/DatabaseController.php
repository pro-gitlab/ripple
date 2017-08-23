<?php

namespace GitLab\Ripple\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use GitLab\Ripple\Traits\DatabaseTables;
use Illuminate\Support\Facades\Schema;
use GitLab\Ripple\Schema\Table;

class DatabaseController extends Controller {

    use DatabaseTables;

    public function database() {
        $tables = self::tables();
        return view('Ripple::database.database-view', compact('tables'));
    }

    public function createTable() {



        if (request()->has('create-table')):
            
            dump(request('columns'));
            $table = new Table(request('table'));
//            $table->tablxe(request('table'));
            $table->columns(request('columns'));
//            $table->create();
            
            dd($table);
            dd(request('columns')[1]);
            dd(request()->all(), request('columns')[1], $this->checkTableColumns());
        endif;
        return view("Ripple::database.database-create");
    }

    public function checkTableColumns() {

//        dd($column);
        dd(request()->all());
        Schema::create('cars', function ($table) {
            $column = array();
            $attributes = array();
            foreach (request('columns') as $columns):
                $column['name'] = $columns['name'];
                $column['type'] = strtolower($columns['type']);
                foreach ($columns['attributes'] as $name => $value):
                    if ($name == 'type') {
                        if ($value != '') {
                            $column['attributes'][strtolower($value)] = true;
                        }
                        continue;
                    }
                    if ($value == 'on') {
                        $column['attributes'][$name] = true;
                        continue;
                    }
                    $column['attributes'][$name] = $value;
                endforeach;

//                dd($column);
                $table->addColumn($column['type'], $column['name'], $column['attributes']);
            endforeach;
//            dd($column);
//            $table->bigIncrements('id')->index()->primary()->nullable()->unique()->after('column')->default('')->unsigned();
//            $table->bigInteger('votes');
//            $table->binary('data');
//            $table->boolean('confirmed');
//            $table->char('name', 4);
//            $table->date('created_at');
//            $table->dateTime('created_at');
//            $table->dateTimeTz('created_at');
//            $table->decimal('amount', 5, 2);
//            $table->double('column', 15, 8);
//            $table->enum('choices', ['foo', 'bar']);
//            $table->float('amount', 8, 2);
            $table->increments('id');
//            $table->integer('votes');
//            $table->ipAddress('visitor');
//            $table->json('options');
//            $table->jsonb('options');
//            $table->longText('description');
//            $table->macAddress('device');
//            $table->mediumIncrements('id');
//            $table->mediumInteger('numbers');
//            $table->mediumText('description');
//            $table->morphs('taggable');
//            $table->nullableMorphs('taggable');
//            $table->nullableTimestamps();
//            $table->rememberToken();
//            $table->smallIncrements('id');
//            $table->smallInteger('votes');
//            $table->softDeletes();
//            $table->string('email');
//            $table->string('name', 100);
//            $table->text('description');
//            $table->time('sunrise');
//            $table->timeTz('sunrise');
//            $table->tinyInteger('numbers');
//            $table->timestamp('added_on');
//            $table->timestampTz('added_on');
//            $table->timestamps();
//            $table->timestampsTz();
//            $table->unsignedBigInteger('votes');
//            $table->unsignedInteger('votes');
//            $table->unsignedMediumInteger('votes');
//            $table->unsignedSmallInteger('votes');
//            $table->unsignedTinyInteger('votes');
//            $table->uuid('id');
            dd($table->getColumns());
        });
    }

}

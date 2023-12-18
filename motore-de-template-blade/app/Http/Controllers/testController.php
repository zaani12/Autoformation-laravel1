<?php

namespace App\Http\Controllers;
use App\Models\tables1;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Nette\Utils\Paginator;
use Illuminate\View\View;


class testController extends Controller
{
    public function index() :view{
        // $tables = tables1::paginate(3);
        // return (['tables' => $tables]);
        // dd($request->validated());
        return view('test.index',[
            $tables = tables1::paginate(1),
            'tables' => $tables
        ]);

    }
  
    public function show(string $test , string $id): RedirectResponse | tables1
    {
        $table =tables1::find($id);
        if($table->test != $test){
            return to_route('blog.show', ['test'=> $table->test, 'id'=> $table ->id]);
        }
        return $table;
    }
    public function createRecords()
    {
        // Create a new record
        $tables1Record = tables1::create([
            'test' => 'test2',
            'name' => 'test name',
            'content' => 'Lorem ipsum dolor sit amet.',
        ]);

        // You can create additional records as needed
        $tables1Record2 = tables1::create([
            'test' => 'test3',
            'name' => 'test name',
            'content' => 'Consectetur adipiscing elit.',
        ]);

        // ... add more records as necessary

        // To retrieve all records from the 'tables1' table
        $allRecords = tables1::all();

        // To retrieve a specific record by ID
        $specificRecord = tables1::find(1); // Replace 1 with the actual ID

        // To update a record
        $specificRecord->update([
            'content' => 'Updated content.',
        ]);

        // To delete a record
        $specificRecord->delete();

        // If you want to perform these operations when accessing the URL associated with this method, add a route to call this method.
    }
}
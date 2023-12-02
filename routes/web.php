<?php

use Illuminate\Support\Facades\Route;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\QueryBuilder;
use App\Models\test;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $result = QueryBuilder::for(test::class)
                             ->allowedFilters(['name',
                             'email',
                             AllowedFilter::exact('id'),AllowedFilter::scope('verified')])

                             ->allowedSorts(['name'])
                             ->allowedFields(['name','email'])
                            ->where('active',1)
                            ->allowedIncludes(['stests'])
                            //  ->toSql();
                             ->get();
                             return   $result;
    // return view('welcome');
});

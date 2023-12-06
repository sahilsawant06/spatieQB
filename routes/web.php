<?php

use App\Models\Shopper;
use Illuminate\Support\Facades\Route;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\AllowedSort;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\AllowedInclude;


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

Route::get('/shopper', function () {
    // dd("hello");
    $result = QueryBuilder::for(Shopper::class)
                             ->allowedFilters(['name',
                             'id',
                            //  AllowedFilter::exact('id'),AllowedFilter::scope('verified')
                             ])

                            //  ->allowedSorts(['name'])
                            //  ->allowedFields(['name'])
                            // ->where('active',1)
                            ->allowedIncludes(['buyers',
                            AllowedInclude::count('ProductsCount')])
                             ->with('buyers')

                             ->withCount('buyers')
                             ->withExists('buyers')



                            //   ->toSql();
                                 ->get();
                                 return '<pre>' . json_encode($result, JSON_PRETTY_PRINT) . '</pre>';
    // return view('welcome');
});

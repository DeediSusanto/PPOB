<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard'], function() {
    Route::group(['prefix' => 'data', ], function() {
        Route::get('index','DataController@index')->name('dashboard.data.index');
        
        Route::get('create','DataController@create')->name('dashboard.data.create');
        Route::get('edit/{id}','DataController@edit')->name('dashboard.data.edit');
        Route::delete('delete/{id}','DataController@destroy')->name('dashboard.data.destroy');  
        
        Route::post('store','DataController@store')->name('dashboard.data.store'); 
        Route::post('update/{id}','DataController@update')->name('dashboard.data.update');
        
        Route::get('detail-json/{id}','DataController@detailJson')->name('dashboard.data.detail-json');

    });
    Route::group(['prefix' => 'informasi', ], function() {
        Route::get('index','InformasiController@index')->name('dashboard.informasi.index');
        
        Route::get('create','InformasiController@create')->name('dashboard.informasi.create');
        Route::get('edit/{id}','InformasiController@edit')->name('dashboard.informasi.edit');
        Route::delete('delete/{id}','InformasiController@destroy')->name('dashboard.informasi.destroy');  
        
        Route::post('store','InformasiController@store')->name('dashboard.informasi.store'); 
        Route::post('update/{id}','InformasiController@update')->name('dashboard.informasi.update');
        
        Route::get('detail-json/{id}','InformasiController@detailJson')->name('dashboard.informasi.detail-json');
    
    });
    Route::group(['prefix' => 'kategori', ], function() {
        Route::get('index','KategoriController@index')->name('dashboard.kategori.index');
        
        Route::get('create','KategoriController@create')->name('dashboard.kategori.create');
        Route::get('edit/{id}','KategoriController@edit')->name('dashboard.kategori.edit');
        Route::delete('delete/{id}','KategoriController@destroy')->name('dashboard.kategori.destroy');  
        
        Route::post('store','KategoriController@store')->name('dashboard.kategori.store'); 
        Route::post('update/{id}','KategoriController@update')->name('dashboard.kategori.update');
        
        Route::get('detail-json/{id}','KategoriController@detailJson')->name('dashboard.kategori.detail-json');
    
    });
    Route::group(['prefix' => 'nominal', ], function() {
        Route::get('index','NominalController@index')->name('dashboard.nominal.index');
        
        Route::get('create','NominalController@create')->name('dashboard.nominal.create');
        Route::get('edit/{id}','NominalController@edit')->name('dashboard.nominal.edit');
        Route::delete('delete/{id}','NominalController@destroy')->name('dashboard.nominal.destroy');  
        
        Route::post('store','NominalController@store')->name('dashboard.nominal.store'); 
        Route::post('update/{id}','NominalController@update')->name('dashboard.nominal.update');
        
        Route::get('detail-json/{id}','NominalController@detailJson')->name('dashboard.nominal.detail-json');
    
    });
    Route::group(['prefix' => 'nominal-pln', ], function() {
        Route::get('index','NominalPlnController@index')->name('dashboard.nominal-pln.index');
        
        Route::get('create','NominalPlnController@create')->name('dashboard.nominal-pln.create');
        Route::get('edit/{id}','NominalPlnController@edit')->name('dashboard.nominal-pln.edit');
        Route::delete('delete/{id}','NominalPlnController@destroy')->name('dashboard.nominal-pln.destroy');  
        
        Route::post('store','NominalPlnController@store')->name('dashboard.nominal-pln.store'); 
        Route::post('update/{id}','NominalPlnController@update')->name('dashboard.nominal-pln.update');
        
        Route::get('detail-json/{id}','NominalPlnController@detailJson')->name('dashboard.nominal-pln.detail-json');
    
    });
    Route::group(['prefix' => 'paket-data', ], function() {
        Route::get('index','PaketDataController@index')->name('dashboard.paket-data.index');
        
        Route::get('create','PaketDataController@create')->name('dashboard.paket-data.create');
        Route::get('edit/{id}','PaketDataController@edit')->name('dashboard.paket-data.edit');
        Route::delete('delete/{id}','PaketDataController@destroy')->name('dashboard.paket-data.destroy');  
        
        Route::post('store','PaketDataController@store')->name('dashboard.paket-data.store'); 
        Route::post('update/{id}','PaketDataController@update')->name('dashboard.paket-data.update');
        
        Route::get('detail-json/{id}','PaketDataController@detailJson')->name('dashboard.paket-data.detail-json');
    
    });
    Route::group(['prefix' => 'pln', ], function() {
        Route::get('index','PlnController@index')->name('dashboard.pln.index');
        
        Route::get('create','PlnController@create')->name('dashboard.pln.create');
        Route::get('edit/{id}','PlnController@edit')->name('dashboard.pln.edit');
        Route::delete('delete/{id}','PlnController@destroy')->name('dashboard.pln.destroy');  
        
        Route::post('store','PlnController@store')->name('dashboard.pln.store'); 
        Route::post('update/{id}','PlnController@update')->name('dashboard.pln.update');
        
        Route::get('detail-json/{id}','PlnController@detailJson')->name('dashboard.pln.detail-json');
    
    });
    Route::group(['prefix' => 'provider', ], function() {
        Route::get('index','ProviderController@index')->name('dashboard.provider.index');
        
        Route::get('create','ProviderController@create')->name('dashboard.provider.create');
        Route::get('edit/{id}','ProviderController@edit')->name('dashboard.provider.edit');
        Route::delete('delete/{id}','ProviderController@destroy')->name('dashboard.provider.destroy');  
        
        Route::post('store','ProviderController@store')->name('dashboard.provider.store'); 
        Route::post('update/{id}','ProviderController@update')->name('dashboard.provider.update');
        
        Route::get('detail-json/{id}','ProviderController@detailJson')->name('dashboard.provider.detail-json');
    
    });
    Route::group(['prefix' => 'pulsa', ], function() {
        Route::get('index','PulsaController@index')->name('dashboard.pulsa.index');
        
        Route::get('create','PulsaController@create')->name('dashboard.pulsa.create');
        Route::get('edit/{id}','PulsaController@edit')->name('dashboard.pulsa.edit');
        Route::delete('delete/{id}','PulsaController@destroy')->name('dashboard.pulsa.destroy');  
        
        Route::post('store','PulsaController@store')->name('dashboard.pulsa.store'); 
        Route::post('update/{id}','PulsaController@update')->name('dashboard.pulsa.update');
        
        Route::get('detail-json/{id}','PulsaController@detailJson')->name('dashboard.pulsa.detail-json');
    
    });
    
});


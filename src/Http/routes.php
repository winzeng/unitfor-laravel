<?php
/**
 * @Author: anchen
 * @Date:   2019-07-30 08:53:07
 * @Last Modified by:   anchen
 * @Last Modified time: 2019-07-30 18:59:17
 */


Route::get('/', 'UnitforController@index')->name('test.store');
// Route::get('test', 'TestController@index');

Route::post('/', 'UnitforController@store')->name('zeng.store');
?>
<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::post('/register-user', function (Request $request) {

    $name     = $request->input('name');
    $email    = $request->input('email');
    $password = $request->input('password');    

    // save new user
    $user = \App\User::create([
      'name'     => $name,
      'email'    => $email,
      'password' => bcrypt($password),
    ]);


    // create oauth client
    $oauth_client = \App\OauthClient::create([
        'user_id'                => $user->id,
        'id'                     => $email,
        'name'                   => $name,
        'secret'                 => base64_encode(hash_hmac('sha256',$password, 'secret', true)),
        'password_client'        => 1,
        'personal_access_client' => 0,
        'redirect'               => '',
        'revoked'                => 0,
    ]);

    return [
        'message' => 'user successfully created.'
    ];
});
*/


Route::resource('/users', 'Api\UsuariosController');
Route::post('/estabelecimentos', 'Api\EstabelecimentoController@store');
Route::post('/tutores', 'Api\TutoresController@store');

Route::group(['middleware' => ['auth:api']], function() {
	Route::group(['prefix' => 'v1'], function () {
		Route::resource('/pets', 'Api\PetsController');
		Route::resource('/tutores', 'Api\TutoresController');
		Route::resource('/enderecos', 'Api\EnderecosController');
		Route::resource('/especies', 'Api\EspeciesController');
		Route::resource('/racas', 'Api\RacasController');
        Route::resource('/estabelecimentos', 'Api\EstabelecimentoController');
        Route::resource('/servicos', 'Api\ServicosController');
	});
});
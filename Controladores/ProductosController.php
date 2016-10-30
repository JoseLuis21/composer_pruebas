<?php

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;




class ProductosController extends BaseController
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index($id)
    {
        $request = new Illuminate\Http\Request();
  		// $producto = Product::find(1);
		// $producto->descripcion = 'Nueva descripción del producto';
		// $producto->save();

		// return Product::get();
		return json_encode($request);
    }

}
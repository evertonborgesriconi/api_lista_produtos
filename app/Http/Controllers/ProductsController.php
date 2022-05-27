<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductsController extends Controller
{
    public function index() {

        $products= Products::all();

        return response($products, 200);
    }

    public function destroy($id) {
        $product= Products::find($id)->delete();

        if($product) {
            return response("deletado com sucesso", 200);
        } else {
            return ('Error ao deletar o produto');
        } 
    }
}

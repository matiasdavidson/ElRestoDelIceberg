<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
      //para que agrege al carrito debo antes estar logueado,use middleware(auth) corre bien:)
        $product = Product::find($id);

        $userLogueado =  Auth::user()->id; //traer usuario que esta comprando.

        $cart = new Cart;

        $cart->name = $product->productName;
        $cart->description = $product->productDescription;
        $cart->price = $product->price;
        $cart->featured_img = $product->img1;
        $cart->cant = 1;
        $cart->user_id = $userLogueado;

        $cart->save();

        return redirect('/');
    }

    public function store2($id)
    {
      //para que agrege al carrito debo antes estar logueado,use middleware(auth) corre bien:)
        $product = Product::find($id);

        $userLogueado =  Auth::user()->id; //traer usuario que esta comprando.

        $cart = new Cart;

        $cart->name = $product->productName;
        $cart->description = $product->productDescription;
        $cart->price = $product->price;
        $cart->featured_img = $product->img1;
        $cart->cant = 1;
        $cart->user_id = $userLogueado;

        $cart->save();

        return redirect('/cart');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $userLogueado =  Auth::user()->id;
      $cart = Cart::where('user_id','=',$userLogueado)->where('status','=', 0)->get();

      $total = $cart->reduce(function($suma, $item){
        $suma += $item->price * $item->cant;
        return $suma;
      });

      return view('cart', compact('cart', 'total'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $cart = Cart::find($id);
      $cart->cant = $request->cant ;
      $cart->save();
      return redirect('/cart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $cart = Cart::find($id);
      $cart->delete();

      return redirect('/cart');
    }

    public function destroycart()
    {
      $cart = Cart::all();
      // dd($cart);
      foreach ($cart as $id) {
        $id->delete();
      }

      // flash('Su compra a sido realizada con exito');
      return redirect('/');
    }

    public function buy(){
//darle a todas las compras un id_carrito incremental al anterior
    //campiarle a todos estos el estado a 1(comprado)
    $userLogueado =  Auth::user()->id;
    $cart_Usuario = Cart::where('user_id','=',$userLogueado)->where('status','=', 0)->get();
    $cartNumber = Cart::max('cart_number');
    foreach ( $cart_Usuario as $elem) {
      $elem->cart_number = $cartNumber + 1;
      $elem->status =  1;
      $elem->save();
    }

    //esta es mi solucion ,no se que pedo cuando 2 personas entren
//por javascript se le debe mostrar un resumen de todo el carrito en simples filas(opcional)
     return redirect('/welcome');
    }

    public function showforpurchase(){
      $userLogueado =  Auth::user()->id;
      $cart = Cart::where('user_id','=',$userLogueado)->where('status','=', 0)->get();

      $total = $cart->reduce(function($suma, $item){
        $suma += $item->price * $item->cant;
        return $suma;
      });

      return view('purchase', compact('cart', 'total'));
    }
}

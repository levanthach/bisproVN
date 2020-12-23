<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Node;
use App\Models\Category;
use App\Models\ReleaseNode;
use App\User;
use App\Models\PriceList;

class UserController extends Controller
{
    // Index
    public function index(){
        $products = Product::all();
        //Price List
        $price_list_tab = Category::all();
        $price_list = PriceList::all();
        // Release Nodes
        $nodes = Node::all();
        $node_details = ReleaseNode::all();
        return view('web.index', compact('price_list', 'price_list_tab', 'nodes', 'node_details', 'products') );

    }

    // Register
    public function register(){
        return view('web.register');
    }

    public function saveUser(Request $request){
        $this->validate($request,
        [

        ], [

        ]);

        $user = new User;

        $user->save();

        return redirect()->route('web.index');
    }

    // Reset password
    public function resetPassword(){
        return view('web.reset');
    }

    public function sendMail(Request $request){

    }

    public function editPassword(){

    }

    public function updatePassword(){

    }

    // Login
    public function login(Request $request){
        
        $user = User::where('username', $request->username)->first();
        if($user){
            if(Auth::attempt(['email' => $user->email, 'password' => $request->password]) && $user->role == 0){
                die (json_encode(['check' => true, 'username' => $user->username])); 
            }
        }
        die (json_encode(['check' => false])); 
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('web.index');
    }
}

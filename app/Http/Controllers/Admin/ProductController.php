<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Session;
session_start();

class ProductController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('admin.account.index');
        }
        else {
            return Redirect::to('admin.auth.index')->send();
        }
    }
    
    // index
    public function index(){
        $products = Product::all();
        return view('admin.product.index', ['products' => $products ]);
    }

    // Create product
    public function createProduct(){
        $product = Product::all();
        return view('admin.product.create', ['product' => $product]);
    }

    public function saveProduct(Request $request){
        $this->validate($request,
        [
            'name' => 'required|max:200',
            'description' => 'required|max:200',
            'content' => 'required',
        ], [
            'name.required' => 'Bạn chưa nhập tên',
            'name.max' => "Tên tối đa 200 kí tự",
            'description.required' => 'Bạn chưa nhập mô tả',
            'description.max' => "Mô tả tối đa 200 kí tự",
            'content.required' => 'Bạn chưa nhập nội dung'
        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->content = $request->content;
        if($request->hasFile('images')){
            $file = $request->file('images');
            //Lay ten hinh de kiem tra
            $name = $file->getClientOriginalName();
            $type = $file->getClientOriginalExtension();
            if($type != 'jpg' && $type != 'png' && $type != 'jpeg' ){
                return redirect()->route('admin.product.create-product')->with('loi', 'Bạn chỉ được thêm ảnh có đuôi là jpg, png, jpeg');
            }
            $image = Str::random(4)."_".$name;
            while(file_exists("images".$image)){
                $image = Str::random(4).$name;
            }
            $file->move("images", $image);
            $product->images = $image;
        }
        $product->save();

        return redirect()->route('admin.product.create-product')->with('success', 'Tạo thành công!');
    }

    // Edit release-node
    public function editProduct($id){
        $product = Product::find($id);
        return view('admin.product.edit', ['product'=>$product]);
    }

    public function updateProduct(Request $request, $id){
        $this->validate($request,
        [
            'name' => 'required|max:200',
            'description' => 'required|max:200',
            'content' => 'required'
        ], [
            'name.required' => 'Bạn chưa nhập tên',
            'name.max' => "Tên tối đa 200 kí tự",
            'description.required' => 'Bạn chưa nhập mô tả',
            'description.max' => "Mô tả tối đa 200 kí tự",
            'content.required' => 'Bạn chưa nhập nội dung',
        ]);



        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->content = $request->content;
        if($request->hasFile('images')){
            $file = $request->file('images');
            //Lay ten hinh de kiem tra
            $name = $file->getClientOriginalName();
            $type = $file->getClientOriginalExtension();
            if($type != 'jpg' && $type != 'png' && $type != 'jpeg' ){
                return redirect()->route('admin.product.create-product')->with('loi', 'Bạn chỉ được thêm ảnh có đuôi là jpg, png, jpeg');
            }
            $image = Str::random(4)."_".$name;
            while(file_exists("images".$image)){
                $image = Str::random(4).$name;
            }
            $file->move("images", $image);
            $product->images = $image;
        }
        $product->save();
        $product->save();

        return redirect()->route('admin.product.edit-product', $id)->with('success', 'Cập nhật thành công!');
    }

    // Delete
    public function deleteProduct($id){
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('admin.product.index')->with('success', 'Xóa thành công!');
    }
}

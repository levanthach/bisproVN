<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Session;
session_start();

class CategoryController extends Controller
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

    public function index(){
        $categories = Category::all();
        return view('admin.category.index', ['categories'=>$categories]);
    }

    // Create Category
    public function createCategory(){
        return view('admin.category.create');
    }

    public function saveCategory(Request $request){
        $this->validate($request, 
        [
            'name' => 'required|max:100'
        ], [
            'name.required' => 'Bạn chưa nhập thể loại',
            'name.max' => 'Loại chứa tối đa 100 kí tự'
        ]);

        $categories = new Category;
        $categories->name = $request->name;

        $categories->save();

        return redirect()->route('admin.category.create-category')->with('success', 'Tạo thành công!');
    }

    // Edit Category
    public function editCategory($id){
        $category = Category::find($id);
        return view('admin.category.edit', ['category'=>$category]);
    }

    public function updateCategory(Request $request, $id){
        $this->validate($request, 
        [
            'name' => 'required|max:100'
        ], [
            'name.required' => 'Bạn chưa nhập thể loại',
            'name.max' => 'Loại chứa tối đa 100 kí tự'
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();

        return redirect()->route('admin.category.edit-category', $id)->with('success', 'Cập nhật thành công!');
    }

    // Delete
    public function deleteCategory($id){
        $category = Category::find($id);
        $category->delete();
        
        return redirect()->route('admin.category.index')->with('success', 'Xóa thành công!');
    }
}

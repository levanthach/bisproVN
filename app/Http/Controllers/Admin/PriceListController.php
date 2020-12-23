<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PriceList;
use App\Models\Category;
use Session;
session_start();

class PriceListController extends Controller
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
        $price_list = PriceList::all();
        return view('admin.price-list.index', ['price_list' => $price_list]);
    }

    // Create PriceList
    public function createPriceList(){
        $category = Category::all();
        return view('admin.price-list.create', ['category'=>$category]);
    }

    public function savePriceList(Request $request){
        $this->validate($request,
        [
            'industry' => 'required|max:200',
            'modules' => 'required|max:1000',
            'price' => 'required|max:10',
            'min' => 'required|max:2',
            'max' => 'required|max:3',
        ], [
            'industry.required' => 'Bạn chưa nhập industry',
            'industry.max' => "Industry tối đa 200 kí tự",
            'modules.required' => 'Bạn chưa nhập modules',
            'modules.max' => "Modules tối đa 1000 kí tự",
            'price.required' => 'Bạn chưa nhập price',
            'price.max' => "Price tối đa 1.000.000.000 đ",
            'min.required' => 'Bạn chưa nhập min',
            'min.max' => "Min tối đa 99 ",
            'max.required' => 'Bạn chưa nhập max',
            'max.max' => "Max tối đa 999",
        ]);

        $price_list = new PriceList;
        $price_list->industry = $request->industry;
        $price_list->modules = $request->modules;
        $price_list->category_id = $request->category_id;
        $price_list->price = $request->price;
        $price_list->min = $request->min;
        $price_list->max = $request->max;
        $price_list->save();

        return redirect()->route('admin.price-list.create-price-list')->with('success', 'Tạo thành công!');
    }

    // Edit Product
    public function editPriceList($id){
        $category = Category::all();
        $price_list = PriceList::find($id);
        return view('admin.price-list.edit' , ['price_list' => $price_list, 'category' => $category] );
    }

    public function updatePriceList(Request $request, $id){
        $this->validate($request,
        [
            'industry' => 'required|max:200',
            'modules' => 'required|max:1000',
            'price' => 'required|max:10',
            'min' => 'required|max:2',
            'max' => 'required|max:3',
        ], [
            'industry.required' => 'Bạn chưa nhập industry',
            'industry.max' => "Industry tối đa 200 kí tự",
            'modules.required' => 'Bạn chưa nhập modules',
            'modules.max' => "Modules tối đa 1000 kí tự",
            'price.required' => 'Bạn chưa nhập price',
            'price.max' => "Price tối đa 1.000.000.000 đ",
            'min.required' => 'Bạn chưa nhập min',
            'min.max' => "Min tối đa 99 ",
            'max.required' => 'Bạn chưa nhập max',
            'max.max' => "Max tối đa 999",
        ]);

        $price_list = PriceList::find($id);
        $price_list->industry = $request->industry;
        $price_list->modules = $request->modules;
        $price_list->category_id = $request->category_id;
        $price_list->price = $request->price;
        $price_list->min = $request->min;
        $price_list->max = $request->max;
        $price_list->save();

        return redirect()->route('admin.price-list.edit-price-list', $id)->with('success', 'Cập nhật thành công!');
    }

    // Delete
    public function deletePriceList($id){
        $price_list = PriceList::find($id);
        $price_list->delete();

        return redirect()->route('admin.price-list.index')->with('success', 'Xóa thành công!');
    }
}

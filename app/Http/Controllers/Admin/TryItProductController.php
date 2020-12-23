<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TryItProduct;
use Session;
session_start();

class TryItProductController extends Controller
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

    //
    public function index(){
        $try_product = TryItProduct::where('type',TryItProduct::product)->get();
        return view('admin.try-product.index', ['try_product' => $try_product]);
    }

    public function saveTryProduct(Request $request){
        $this->validate($request,
        [
            'full_name' => 'required|max:30',
            'phone' => 'required|max:30',
            'email' => 'required',
            'position' => 'required',
            'business_name' => 'required|max:30',
            'business_field' => 'required',
            'try_product' => 'required'
        ], [
            'full_name.required' => 'Bạn chưa nhập fullname',
            'full_name.max' => "Fullname tối đa 30 kí tự",
            'phone.required' => "Bạn chưa nhập số Phone",
            'phone.max' => "Phone tối đa 30 kí tự",
            'email.required' => 'Bạn chưa nhập email',
            'position.required' => 'Bạn chưa nhập message',
            'business_name.required' => 'Bạn chưa nhập business name',
            'business_name.max' => "Business name tối đa 30 kí tự",
            'business_field.required' => 'Bạn chưa nhập business field',
            'try_product.required' => 'Bạn chưa nhập dịch vụ dùng thử'
        ]);

        $try_product = new TryItProduct;
        $try_product->name = $request->full_name;
        $try_product->phone = $request->phone;
        $try_product->email = $request->email;
        $try_product->position = $request->position;
        $try_product->product_try = $request->product;
        $try_product->business_name = $request->business_name;
        $try_product->business_field = $request->business_field;
        $try_product->product_try = $request->try_product;
        $try_product->type = $request->type;
        $try_product->save();
        return redirect()->route('web.index')->with('success', 'Cảm ơn bạn đã đăng ký dịch vụ. Chúng tôi sẽ liên lạc bạn sớm!');
    }

     // View try_product
    public function viewTryProduct($id){
        $try_product = TryItProduct::find($id);
        return view('admin.try-product.view-tryproduct', ['try_product' => $try_product]);
    }

    // Delete
    public function deleteTryProduct($id){
        $try_product = TryItProduct::find($id);
        $try_product->delete();

        return redirect()->route('admin.try-product.index')->with('success', 'Xóa thành công!');
    }


    public function indexService(){
        $try_service = TryItProduct::where('type', TryItProduct::service)->get();
        return view('admin.try-service.index', ['try_service' => $try_service]);
    }

    // View try_product
    public function viewTryService($id){
        $try_service = TryItProduct::find($id);
        return view('admin.try-service.view-service', ['try_service' => $try_service]);
    }

    // Delete
    public function deleteTryService($id){
        $try_service = TryItProduct::find($id);
        $try_service->delete();

        return redirect()->route('admin.try-service.index')->with('success', 'Xóa thành công!');
    }
}

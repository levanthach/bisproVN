<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use Session;
session_start();

class ContactController extends Controller
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
        $contact = Contact::all();
        return view('admin.contact.index', ['contact' => $contact]);
    }

    public function saveContact(Request $request){
        $this->validate($request, 
        [
            'fullname' => 'required|max:30',
            'company_name' => 'required|max:100',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ], [
            'fullname.required' => 'Bạn chưa nhập fullname',
            'fullname.max' => "Fullname tối đa 30 kí tự",
            'company_name.required' => 'Bạn chưa nhập Company Name ',
            'company_name.max' => "Company Name tối đa 100 kí tự",
            'email.required' => 'Bạn chưa nhập email',
            'phone.required' => "Bạn chưa nhập số Phone",
            'message.required' => 'Bạn chưa nhập message',
        ]);

        $contact = new Contact;
        $contact->name = $request->fullname;
        $contact->company = $request->company_name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->content = $request->message;
        $contact->save();


        Mail::send('admin.mail.contact', ['HoTen' => $request->fullname, 'Phone' =>  $request->phone, 'Email' =>  $request->email, 'Company' =>  $request->company_name, 'Content' => $request->message ], function($message) {
            $message->from('info@bispro.vn','BISPRO.VN');
            $message->to('info@bispro.vn', 'BISPRO.VN')
                    ->subject('[BISPRO.VN] Thông Tin Khách Hàng Cần Tư Vấn');

        });

        return redirect()->route('web.index')->with('success', 'Cảm ơn bạn đã đăng ký nhận tư vấn. Chúng tôi sẽ liên lạc bạn sớm!');
    }

     // View contact
     public function viewContact($id){
        $contact = Contact::find($id);
        return view('admin.contact.view-contact', ['contact' => $contact]);
    }

    // Delete
    public function deleteContact($id){
        $contact = Contact::find($id);
        $contact->delete();
        
        return redirect()->route('admin.contact.index')->with('success', 'Xóa thành công!');
    }
}

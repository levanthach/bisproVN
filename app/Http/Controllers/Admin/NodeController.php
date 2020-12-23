<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Node;
use Session;
session_start();

class NodeController extends Controller
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
        $nodes = Node::all();
        return view('admin.node.index', ['nodes'=>$nodes]);
    }

    // Create node
    public function createNode(){
        return view('admin.node.create');
    }

    public function saveNode(Request $request){
        $this->validate($request, 
        [
            'name' => 'required|max:200'
        ], [
            'name.required' => 'Bạn chưa nhập node',
            'name.max' => 'Tối đa 200 kí tự'
        ]);

        $node = new Node;
        $node->name = $request->name;
        $node->save();

        return redirect()->route('admin.node.create-node')->with('success', 'Tạo thành công!');
    }

    // Edit node
    public function editNode($id){
        $node = Node::find($id);
        return view('admin.node.edit', ['node'=>$node]);
    }

    public function updateNode(Request $request, $id){
        $this->validate($request, 
        [
            'name' => 'required|max:200'
        ], [
            'name.required' => 'Bạn chưa nhập node',
            'name.max' => 'Tối đa 200 kí tự'
        ]);

        $node = Node::find($id);
        $node->name = $request->name;
        $node->save();

        return redirect()->route('admin.node.edit-node', $id)->with('success', 'Cập nhật thành công!');
    }

    // Delete
    public function deleteNode($id){
        $Node = node::find($id);
        $Node->delete();
        
        return redirect()->route('admin.node.index')->with('success', 'Xóa thành công!');
    }
}

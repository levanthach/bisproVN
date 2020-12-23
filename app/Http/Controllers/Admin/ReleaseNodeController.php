<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReleaseNode;
use App\Models\Node;
use Session;
session_start();

class ReleaseNodeController extends Controller
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
        $releaseNode = ReleaseNode::all();
        return view('admin.release-node.index', ['releaseNode'=>$releaseNode ]);
    }

    // Create release-node
    public function createReleaseNode(){
        $node = Node::all();
        return view('admin.release-node.create', ['node'=>$node]);
    }

    public function saveReleaseNode(Request $request){
        $this->validate($request, 
        [
            'name' => 'required|max:200',
            'content' => 'required'
        ], [
            'name.required' => 'Bạn chưa nhập name',
            'name.max' => 'Name chứa tối đa 200 kí tự',
            'content' => 'Bạn chưa nhập nội dung'
        ]);

        $releaseNode = new ReleaseNode;
        $releaseNode->name = $request->name;
        $releaseNode->content = $request->content;
        $releaseNode->node_id = $request->node_id;
        $releaseNode->save();

        return redirect()->route('admin.release-node.create-release-node')->with('success', 'Tạo thành công!');
    }

    // Edit release-node
    public function editReleaseNode($id){
        $releaseNode = ReleaseNode::find($id);
        $node = Node::all();
        return view('admin.release-node.edit', ['releaseNode'=>$releaseNode, 'node'=>$node]);
    }

    public function updateReleaseNode(Request $request, $id){
        $this->validate($request, 
        [
            'name' => 'required|max:200',
            'content' => 'required'
        ], [
            'name.required' => 'Bạn chưa nhập name',
            'name.max' => 'Name chứa tối đa 200 kí tự',
            'content' => 'Bạn chưa nhập nội dung'
        ]);


        $releaseNode = ReleaseNode::find($id);
        $releaseNode->name = $request->name;
        $releaseNode->content = $request->content;
        $releaseNode->node_id = $request->node_id;
        $releaseNode->save();

        return redirect()->route('admin.release-node.edit-release-node', $id)->with('success', 'Cập nhật thành công!');
    }

    // Delete
    public function deleteReleaseNode($id){
        $releaseNode = Releasenode::find($id);
        $releaseNode->delete();
        
        return redirect()->route('admin.release-node.index')->with('success', 'Xóa thành công!');
    }
}

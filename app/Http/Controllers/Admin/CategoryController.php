<?php

namespace App\Http\Controllers\Admin;
 use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use App\Ah_categories;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
   public function addCategory(Request $request){
   	if($request->isMethod('post')){
	$data = $request->all();
	//var_dump($data);
	$category = new Ah_categories;
	$category->code = $data['category_name'];
	$category->orderNum = $data['order'];
	$category->save();
	// return redirect('/shop/admin/view-categories')->with('flash_message_success', 'Category has been added successfully');
	$message = ['Success' => 'The category is added'];
     return view('admin.categories.add_category')->with('message',$message);
	}
	
     return view('admin.categories.add_category');
   	
   }

   public function editCategory(Request $request, $id=null)
   {
      return redirect()->route('view')->with('status', 'Profile updated!');
   	if($request->isMethod('post')){
   		$data = $request->all();
   		Ah_categories::where(['id'=>$id])->update(['code'=>$data['category_name'],'orderNum'=>$data['order']]);
   	//	$text = session()->put('Success','Category updated!');
   		return redirect()->route('view')->with('status', 'Profile updated!');
   	}
   	$categoryDetails = Ah_categories::where(['id'=>$id])->first();
   	//return view('admin.categories.edit_category')->with(compact('categoryDetails'));

   }
   public function test1(Request $request){
    
       return redirect()->route('test2')->with('error', 'Вы пытаетесь запросить несуществующий тикет.');
    }

    public function test2(Request $request){
     return session('error');
    }
   public function deleteCategory($id = null){
   	if(!empty($id)){
   		Ah_categories::where(['id'=>$id])->delete();
   		return redirect()->back();
   	}
   }

   public function viewCategories(){

   	$categories = Ah_categories::get();
   	return view('admin.categories.view_categories')->with('categories',$categories);
    session()->forget('Success');
   }
}

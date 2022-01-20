<?php
namespace App\Http\Controllers\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoriesRequestForm;
class CategoriesController extends Controller
{
    public function index(request $request){
        $model = Category::orderBy('id','desc')->where('name','like', '%'.$request->key.'%')->paginate(8);
        return view('admin.categories.index',compact('model'));
    }
    public function Save(){
        return view('admin.categories.addForm');
    }
    public function remove($id){
        $modal = Category::destroy($id);
          return redirect()->route('categories.index')->with('remove','Xoá sản phẩm thành công');
    }
    public function CreateSave(CategoriesRequestForm $request){
            $model = new Category();
            $model->fill($request->all());
            $model->save();
            return redirect()->route('categories.index')->with('success','Thêm sản phẩm thành công');
    }
    public function Edit ($id){
        $cates = Category::find($id);
        if(!$cates){
            return redirect()->route('categories.index');
        }
        return view('admin.categories.edit-form', compact('cates'));
    }

    public function SaveEdit($id,request $request){
        $modal = Category::find($id);
        $modal->fill($request->all());
        if(!$modal){
            return redirect()->route('categories.index');
        }
        $modal->save();
        return redirect()->route('categories.index')->with('remove','Sửa sản phẩm thành công');
    }

}
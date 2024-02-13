<?php
// return __METHOD__;
//return all data in category
//return Category::all();

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
//1:01:40

class CategoriesController extends Controller
{
    protected $rules = [
        'name' => 'required|string|max:255|min:3',
        'description' => 'nullable|string|max:255',
        'parent_id' => 'nullable|exists:categories,id',
    ];
    public function __construct(){

        $this->middleware('auth');
    }


    //list all catigories
    public function index($id = null)
    {
        if ($id) {
            //return object from model vv
            $Category = Category::findOrFail($id);
            //$categories= Category::where('parent_id','=',$id)->get();
            $categories = $Category->children()->with('parent')->get();
            //or vv
            //$categories = $parent->children()->get();
        }
        /* vv main page */ else {
            $categories = Category::wherenull('parent_id')->with('parent')->get();
            $Category = null;
        }
        return view('admin.categories.index', [
            'categories' => $categories,
            'parent' => $Category,
        ]);
    }
    //show create form
    public function create()
    {

        return view('admin.categories.create');
    }
    //create category on submit
    //input will return in everything if it's in post or get
    public function store(Request $request)
    {

        $request->validate($this->rules);
        /* $validated= Validator::make($request->all(),$this->rules,[],[
        'name'=>'category name',
        'parent_id'=>'Id name',
    ]);
        if($validated->fails()){
            return
            redirect()
            ->back()
            ->withErrors($validated)
            ->withInput($request->all());
        } */
        $category = Category::create($request->all());
        $message = sprintf('%s created successfully', $category->name);
        return redirect()
            ->route('Categories')
            ->with('success', $message);
    }


    public function edit($id)
    {
        $category = Category::find($id);
        //حماية للموقع
        if (!$category) {
            abort(404);
        }
        //return $category;
        return view('admin.categories.edit', [
            'category' => $category
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = Validator::make(
            $request->all(),
            $this->rules,
            [
                'required' => 'the: attribute is required',
                'max' => 'you reached the maximum length for  :attribute',
                'min' => 'you don\'t reached the minimum length for :attribute',
            ]
        );
        $validated->validate();

        //Category::where('id',$id)->update($request->all()); <<هذه طريقة مشابهه للطريقة التي اسفلها

        $category = Category::findorfail($id);
        $category->update($request->all());
        /* $category = Category::findorfail($id);
        $category->name =$request->post('name');//$request->input('name');//$request->query('name')//$request->get('name');
        $category->description=$request->post('description');
        $category->parent_id=$request->post('parent_id');
        $category->save();  */
        $message = sprintf('%s update successfully', $category->name);
        return redirect()
            ->route('Categories')
            ->with('success', $message);
    }

    public function delete($id)
    {
        $category = Category::findorfail($id);
        $category->delete();
        $message = sprintf('%s deleted successfully', $category->name);
        return redirect()
            ->route('Categories')
            ->with('success', $message);
    }
}

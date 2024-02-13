<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class TagsController extends Controller
{
    protected $rules = [
        'name' => 'required|string|max:255|min:3',
        'description' => 'nullable|string|max:255',
        'parent_id' => 'nullable|exists:tags,id',
    ];
    //list all catigories
    public function index($id = null)
    {
        if ($id) {
            //return object from model vv
            $tag = tag::findOrFail($id);
            //$tags= tag::where('parent_id','=',$id)->get();
            $tags = $tag->children()->with('parentID')->get();
            //or vv
            //$tags = $parent->children()->get();
        }
        /* vv main page */ else {
            $tags = tag::wherenull('parent_id')->with('parentID')->get();
            $tag = null;
        }
        return view('admin.tags.index', [
            'tags' => $tags,
            'parent' => $tag,
        ]);
    }
    //show create form
    public function create()
    {

        return view('admin.tags.create');
    }
    //create tag on submit
    //input will return in everything if it's in post or get
    public function store(Request $request)
    {

        $request->validate($this->rules);
        /* $validated= Validator::make($request->all(),$this->rules,[],[
        'name'=>'tag name',
        'parent_id'=>'Id name',
    ]);
        if($validated->fails()){
            return
            redirect()
            ->back()
            ->withErrors($validated)
            ->withInput($request->all());
        } */
        $tag = tag::create($request->all());
        $message = sprintf('%s created successfully', $tag->name);
        return redirect()
            ->route('tags')
            ->with('success', $message);
    }


    public function edit($id)
    {
        $tag = tag::find($id);
        //حماية للموقع
        if (!$tag) {
            abort(404);
        }
        //return $tag;
        return view('admin.tags.edit', [
            'tag' => $tag
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

        //tag::where('id',$id)->update($request->all()); <<هذه طريقة مشابهه للطريقة التي اسفلها

        $tag = tag::findorfail($id);
        $tag->update($request->all());
        /* $tag = tag::findorfail($id);
        $tag->name =$request->post('name');//$request->input('name');//$request->query('name')//$request->get('name');
        $tag->description=$request->post('description');
        $tag->parent_id=$request->post('parent_id');
        $tag->save();  */
        $message = sprintf('%s update successfully', $tag->name);
        return redirect()
            ->route('tags')
            ->with('success', $message);
    }

    public function delete($id)
    {
        $tag = tag::findorfail($id);
        $tag->delete();
        $message = sprintf('%s deleted successfully', $tag->name);
        return redirect()
            ->route('tags')
            ->with('successs', $message);
    }
}

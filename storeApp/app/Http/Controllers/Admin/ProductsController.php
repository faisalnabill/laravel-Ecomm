<?php

namespace App\Http\Controllers\Admin;

use App\Models\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $rules = [
        'category_id' => 'required|int|exists:categories,id',
        'name' => 'required|string|max:255',
        'description' => 'nullable',
        'image' => 'required|image|dimensions:min_width=100,min_height=200',
        'price' => 'required|numeric',
    ];
    protected $update_rules = [
        'category_id' => 'required|int|exists:categories,id',
        'name' => 'required|string|max:255',
        'description' => 'nullable',
        'image' => 'image|dimensions:min_width=100,min_height=200',
        'price' => 'required|numeric',
    ];
    public function index()
    {
        $request = request();
        $perpage = $request->query('perpage');
        if ($perpage == 'all') {
            /* $products = product::join('categories', 'products.category_id' , '=' , 'categories.id')
            ->select([
                'products.*',
                'categories.name as category_name',
                ])
                ->toSql();*/
                $products = product::with('category')->get();
            //return $products;
        } else {
            $products = product::with('category')->simplePaginate($perpage);
        }
        return view('admin.products.index', [
            'products' => $products,

        ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate($this->rules);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image')->store('images', 'public');
            /* $file= $request->file('image');
            $filename = 'product-image' . date('Y-m-d-H-i-s').'.'. $file->getClientOriginalExtension();
            //بيرحع الحقل بنوع ملف و داخله صوره
            //images عباره عن ملف داخل الستوريج
            $image = $request->file('image')->storeAs('images',$filename );//$filename
                اسم ثابت*/
        }
        $data = array_merge($request->all(), [
            'image' => $image,
        ]);
        //return $data;
        $product = product::create($data);
        return redirect()
            ->route('products')
            ->with('success', "product {$product->name} created!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $product = product::findorfail($id);
        return view('admin.products.show', [
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $product = product::findorfail($id);
        return view('admin.products.edit', [
            'product' => $product,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $request->validate($this->update_rules);

        $product = product::findorfail($id);
        $image = $product->image;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image')->store('images', 'public');
            /* $file= $request->file('image');
            $filename = 'product-image' . date('Y-m-d-H-i-s').'.'. $file->getClientOriginalExtension();
            //بيرحع الحقل بنوع ملف و داخله صوره
            //images عباره عن ملف داخل الستوريج
            $image = $request->file('image')->storeAs('images',$filename );//$filename
                اسم ثابت*/
            //delete old image
            Storage::delete(storage_path('app/public/ ' . $product->image));
        }
        $data = array_merge($request->all(), [
            'image' => $image,
        ]);
        $product->update($data);
        return redirect()
            ->route('products')
            ->with('success', "product {$product->name} updated!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = product::findorfail($id);
        $product->delete();

        Storage::delete(storage_path('app/public/ ' . $product->image));

        return redirect()
            ->route('products')
            ->with('success', "product {$product->name} deleted!");
    }
    private function deleteProductImage(Product $product)
    {
        if ($product->image) {
            Storage::delete($product->image);
        }
    }
}

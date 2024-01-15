<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $categories = Category::all();
        return view('admin.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('admin.createCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Redirectresponse
     */
    public function store(Request $request)
    {
            $request->validate([
                'name' => 'required',
            ]);

            Category::create($request->all());

            return redirect()->route('admin.categories')
                            ->with('success','Category created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.showCategory', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.editCategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());
        return redirect()->route('admin.adminFaq')
                    ->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.adminFaq')
                        ->with('success', 'Category deleted successfully.');
    }

    public function faq()
{
  $categories = Category::with('questions')->get();
  return view('faq', compact('categories'));
}
}

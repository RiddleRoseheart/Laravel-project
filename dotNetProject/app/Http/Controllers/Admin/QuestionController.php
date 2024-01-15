<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Question;


class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::with('questions')->get();
   return view('admin.adminFaq', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.createQuestion', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'question' => 'required',
            'answer' => 'required',
        ]);
        Question::create($request->all());

   return redirect()->route('admin.adminFaq')
                  ->with('success', 'Question created successfully.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {
        $question = Question::findOrFail($id);
        return view('admin.show_question', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
    * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\Support\Renderable
     */
    public function edit($id)
    {
        $question = Question::findOrFail($id);
        $categories = Category::all();
        return view('admin.editQuestion', compact('question', 'categories'));
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
        $question = Question::findOrFail($id);
        $question->update($request->all());
        return redirect()->route('admin.adminFaq')
                  ->with('success', 'Question updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
            $question->delete();
            return redirect()->route('admin.adminFaq')
                            ->with('success', 'Question deleted successfully.');
    }
}

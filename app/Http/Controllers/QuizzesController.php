<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\Quiz;
use App\Category;
use App\Http\Requests\QuizRequest;

class QuizzesController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth', ['except' => ['index','show']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
        $quizzes = Quiz::latest()->published()->get();
        
        return view('quizzes.index',  compact('quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $cats = Category::latest('published_at')->published()->lists('title','id');
        return View('quizzes.create', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(QuizRequest $request)
    {
        
        $cat = Category::findOrFail($request->input('cat_list'));
        $quiz = $cat->quizzes()->create($request->all());
        
        flash()->success('New Quiz has been created!');
        
        return redirect('quizzes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $quiz = Quiz::findOrFail($id);
        
        return View('quizzes.show',compact('quiz'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $quiz = Quiz::findOrFail($id);
        $cats = Category::latest('published_at')->published()->lists('title','id');
        return View('quizzes.edit',compact('quiz','cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, QuizRequest $request)
    {
        
        $quiz = Quiz::findOrFail($id);
        $quiz->category_id = $request->input('cat_list');
        $quiz->update($request->all());
        
        flash()->success('New Quiz has been updated!');
        
        return redirect('quizzes');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

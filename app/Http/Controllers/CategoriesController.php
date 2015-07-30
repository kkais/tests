<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\Category;
use App\Http\Requests\CategoryRequest;

class CategoriesController extends Controller
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
        $categories = Category::latest('published_at')->published()->get();

        return view('categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CategoryRequest $request)
    {
        // validation
        $category = new Category($request->all());
        Auth::user()->categories()->save($category);

        return redirect('cats');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $category = Category::findOrFail($id);

        return view('categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, CategoryRequest $request)
    {
        $category = Category::findOrFail($id);

        $category->update($request->all());

        return redirect('cats');
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

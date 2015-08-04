<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
//use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use App\Category;
use App\Tag;
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
        
        $tags = Tag::lists('name', 'id');
        return view('categories.create',  compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(CategoryRequest $request)
    {
        // validation

        $this->createCategory($request);

        //\Session::flash('flash_message', 'New Category has been created!');
        //session()->flash('flash_message_important', true);
        
        // Laracasts Flash Package.
        
        flash('New Category has been created!')->important();
        
//        return redirect('cats')->with([
//            'flash_message' => 'New Category has been created!',
//            'flash_message_important' => true
//        ]);
        
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
        $tags = Tag::lists('name', 'id');
        $category = Category::findOrFail($id);

        return view('categories.edit',compact('category','tags'));
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
        
        $this->synTags($category, $request->input('tag_list'));
        
        //flash()->success('Category has been updated!')->important();
        flash()->overlay('Category has been updated!', 'Categories Notices');
        
        return redirect('cats');
    }

    private function synTags(Category $category, array $tags) {
        
        $category->tags()->sync($tags);
        
    }
    
    private function createCategory(CategoryRequest $request) {
        
        $category = Auth::user()->categories()->create($request->all());
        
        $this->synTags($category, $request->input('tag_list'));
        
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

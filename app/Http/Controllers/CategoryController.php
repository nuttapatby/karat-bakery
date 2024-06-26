<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;
use App\Models\Category;
use App\Models\MainCategory;
use App\Models\Product;

class CategoryController extends Controller
{
    public function categoryWelcomeView($main_category_slug){
        if (MainCategory::where('slug',$main_category_slug)->exists())
        {
            $maincategory = MainCategory::where('slug',$main_category_slug)->first();
//            dd($maincategory);
            $category = Category::where('main_category_id',$maincategory->id)->get();
//            dd($category);
            $products = [];
            foreach ($category as $item){
                $products[] = Product::where('category_id',$item->id)->get();
//                dd($products);
            }
//            dd($products);
//            $products = Product::where('category_id',$category->id)->get();
//            dd($products);
            $categories = Category::all();
            $maincategories = MainCategory::all();


            return view('category-welcome', compact('maincategory','category','products','categories','maincategories'));
        } else{
            return redirect('shop')->with('status,"No such category found');
        }
    }

    public function categoryView($category_slug)
    {

        if (Category::where('slug',$category_slug)->exists())
        {
            $category = Category::where('slug',$category_slug)->first();
            $products = Product::where('category_id',$category->id)->get();
            $categories = Category::all();
            $maincategories = MainCategory::all();

            return view('category', compact('category','products','categories','maincategories'));
        } else{
            return redirect('shop')->with('status,"No such category found');
        }
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecategoryRequest  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecategoryRequest $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Gate;
use Auth;
use Storage;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $categories = Category::all();
        return view('categories', compact('categories'));
    }
    public function viewForm()
    {
        return view("pages.add-category");
    }

    public function storeCategory(Request $request){
        $validate = $request->validate([
            'name' => 'required|max:255'
        ]);
        Category::create([
            'name' => request('name')
        ]);

        return redirect('/categories');
    }
    public function editCategory(Category $category){
        return view("pages.edit-category", compact('category'));
    }
    public function updateCategory(Request $request, Category $category) {
        $validated = $request->validate([
            'name' => 'required|max:255',
            ]);
        Category::where('id', $category->id)->update($request->only(['name']));
        return redirect('/categories');
    }
    public function categoryRemove(Category $category) {
        return view('pages.categoryRemove', compact('category'));
    }
    public function deleteCategory(Category $category){
            $category->delete();
            return redirect('/categories');
        $error = ['code' => 403, 'message' => 'ASD'];
        return view("pages.error", compact('error'));
    }
}
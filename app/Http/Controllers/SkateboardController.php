<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Skateboard;
use Illuminate\Http\Request;
use Auth;
use Gate;
use Storage;

class SkateboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=>
        ['index','showSkateboard']]);
    }
    public function index()
    {
        $skateboards = Skateboard::paginate(10)->withQueryString();
        return view('pages.home', compact('skateboards'));
    }

    public function viewUserSkateboard() {
        $skateboards = Skateboard::where('owner', Auth::id())->get();
        return view('dashboard', compact('skateboards'));
    }
    public function skateboardForm()
    {
        return view('pages.add-skateboard');
    }

    public function storeSkateboard(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required',
            'img' => 'mimes: jpg,jpeg,png|required|max:10000'
        ]);
        $path = $request->file('img')->store('public/images');
        $filename = str_replace('public/',"",$path);

        Skateboard::create([
            'title' => request('title'),
            'description' => request('description'),
            'price' => request('price'),
            'category' => request('category'),
            'img' => $filename,
            'owner' => Auth::id()
        ]);
        return redirect("/");
    }
    public function showSkateboard(Skateboard $skateboard){
        return view ("pages.show-skateboard", compact("skateboard"));
    }
    public function editSkateboard(Skateboard $skateboard){
        if (Gate::allows('edit', $skateboard)){
            return view("pages.edit-skateboard", compact('skateboard'));
        }
        $error = ['code' => 403, 'message' => 'ASD'];
        return view("pages.error", compact('error'));
    }
    
    public function updateSkateboard(Request $request, Skateboard $skateboard) {
        if (Gate::allows('edit', $skateboard)) {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);
        

        Skateboard::where('id', $skateboard->id)->update($request->only(['title', 'description','price','category']));
        
        if($request->file('img') != null) {
            Storage::delete('public/'.$skateboard->img);
            $path_to_img = $request->file('img')->store('public/images');
            $filename = str_replace('public/', '' , $path_to_img);
            Skateboard::where('id', $skateboard->id)->update(['img' => $filename]);
        }
        return redirect('/');
    }
        $error = ['code' => 403, 'message' => 'ASD'];
        return view("pages.error", compact('error'));
    }

    public function skateRemove(Skateboard $skateboard) {
        return view('pages.skateRemove', compact('skateboard'));
    }

    public function deleteSkateboard(Skateboard $skateboard){
        if (Gate::allows('delete', $skateboard)) {
            Storage::delete('public/'.$skateboard->img);
            $skateboard->delete();
            return redirect('/');
        }
        $error = ['code' => 403, 'message' => 'ASD'];
        return view("pages.error", compact('error'));
    }

    public function dashboard() {
        $userSkateboards = Skateboard::where('userID', Auth::id())->get();
        $skateboards = [];

        return view('dashboard', compact('skateboards'));
    }


    // TODO: Pasidaryt produktų rodymą pagal kategorijas
}

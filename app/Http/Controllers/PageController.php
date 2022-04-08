<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Pillar;
use App\Models\Jurusan;
use App\Models\Category;
use App\Models\Expertise;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function maintenance(){
        return view('maintenance');
    }

    public function mentors()
    {
        // $expertises = Expertise::with('category', 'user')->orderBy('category_id')->get();
        // $categories = Category::all();
        return view('mentors', ['expertises' => $expertises, 'categories' => $categories]);
    }

    public function guide()
    {
        return view('guide');
    }

    public function mentorDetail($id)
    {
        $user = User::find($id);
        // $expertises = Expertise::with('category')->where('user_id', $user->id)->get();
        return view('mentor-detail', ['user' => $user, 'expertises' => $expertises]);
    }


    public function settingProfile() {
        $user = Auth::user();
        // $expertises = Expertise::with('category')->where('user_id', $user->id)->get();
        // $categories = Category::all();
        // return view('settings.profile', ['user' => $user, 'expertises' => $expertises, 'categories' => $categories]);
    }

    public function settingAccount() {
        $user = Auth::user();
        return view('settings.account', compact('user'));
    }

    //qlp

    public function subcategory($pillar_id)
    {
        $subcategories = Expertise::where('pillar_id', $pillar_id)->get();
        return json_encode($subcategories);
    }

    public function searchmentor()
    {
        $pillars = Pillar::all();
        $jurusan = Jurusan::all();
        return view('qlp.searchmentor', compact('pillars', 'jurusan'));
    }


    public function e_formreview()
    {
        return view('qlp.e_formreview');
    }

    public function filterMentor(Request $request)
    {
        // $categories = Category::query();

        // if ($request->has('kategori'))
        // {
        //     $categories = Category::where('kategori', $request->kategori);
        // }

        // if ($request->has('sub_kategori'))
        // {
        //     $categories = Category::where('sub_kategori', $request->sub_kategori);
        // }

        // if ($request->has('jurusan'))
        // {
        //     $categories = Category::where('jurusan', $request->jurusan);
        // }

        // $categories = $categories->get();

        // return view('qlp.searchmentor', compact('categories'));
    }
}

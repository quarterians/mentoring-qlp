<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Pillar;
use App\Models\Jurusan;
use App\Models\Category;
use App\Models\Expertise;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

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

    public function showMentor($paramId) 
    {
        $user = User::find($paramId);

        $testimonials = Testimonial::join('users', 'testimonials.user_id', 'users.id')
        ->where('users.id', $paramId)
        ->get();
        
        return view('Mentor.index', compact('user', 'testimonials'));
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
        $expertises = 12;
        // $categories = Category::all();
        return view('settings.profile', ['user' => $user, 'expertises' => $expertises]);
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

        return $subcategories;
    }

    public function searchmentor(Request $request)
    {
        $pillars = Pillar::all();
        $jurusan = Jurusan::all();
        
        $user = User::where('name', 'like', '%' . $request->search . '%');

        if ($request->pillars) {
            if ($request->expertise) {
                $user->whereHas('expertise', function (Builder $query) use ($request){$query->where('expertises.id', $request->expertise);
                });
            } else {
                $user->whereHas('expertise', function (Builder $query) use ($request){$query->where('pillar_id', $request->pillars);
                });
            }

        }

        if ($request->jurusan) {
            $user->whereHas('jurusan', function (Builder $query) use ($request){$query->where('jurusan.id', $request->jurusan);
            });
        }

        $user = $user->get();

        return view('qlp.searchmentor', compact('pillars', 'jurusan', 'user'));
    }


    public function e_formreview()
    {
        return view('qlp.e_formreview');
    }

}

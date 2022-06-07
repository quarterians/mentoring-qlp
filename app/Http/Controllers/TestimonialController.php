<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Category;
use App\Models\Expertise;

class TestimonialController extends Controller
{
    public function createtestimonial()
    {
        $rating=User::all();
        // $category=Category::all();
        $category = Expertise::all();
        return view('mentee-ulasan', compact(
            'rating','category'
        ));
    }

    public function storetestimonial(Request $request)
    {
        //
        $testimonial=new Testimonial();
        $testimonial->namamentee=$request->namamentee;
        $testimonial->user_id=$request->user_id;
        $testimonial->jeniskelamin=$request->jeniskelamin;
        $testimonial->email=$request->email;
        $testimonial->alasan_consulting=$request->alasan_consulting;
        $testimonial->datetime_consulting=$request->datetime_consulting;
        $testimonial->feedback=$request->feedback;
        $testimonial->ingin_diikuti_lagi=$request->ingin_diikuti_lagi;
        $testimonial->durasi=$request->durasi;
        $testimonial->expertise=$request->expertise;
        $testimonial->durasi=$request->durasi;
        $testimonial->nilai1 = $request->nilai1;
        $testimonial->nilai2 = $request->nilai2;

        $rata2 = 0;
        $rata2= ($testimonial->nilai1+ $testimonial->nilai2)/2;


       //utk cari user_id
       // $modell = User::find( $model->user_id);
        $tb_user = User::find( $testimonial->user_id);
      //untuk mengambil data total_client di model user
        $temp=User::where('id',   $testimonial->user_id)->sum('total_client');
      //untuk mengambil data rating di model user
        $model_1= User::where('id',   $testimonial->user_id)->sum('rating');
      //untuk mencari total client + dr form yg diisi
        $total_client=$temp+1;
        //untuk mencari jumlah rata rata rating
        $jumlah=(($temp*$model_1)+$rata2)/$total_client;
        // menyimpan rating ke model user
        $tb_user->rating = $jumlah;

        // menyimpan total_client ke model user
        $tb_user->total_client=$total_client;

        //untuk mengambil data total session hour di model user
        $session_hour=User::where('id',   $testimonial->user_id)->sum('session_hour');
        $total_session=$session_hour+($testimonial->durasi/60);
        $tb_user->session_hour=$total_session;
        //$model_1;
        $testimonial->save();
        $tb_user->save();
        return redirect('formtestimonial')->with('success','Data berhasil Ditambahkan');
    }

}

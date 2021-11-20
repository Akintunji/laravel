   <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\User;


class thejobmart extends Controller
{
    public function showpost(){
        $Myjmart=DB::table('thejobmart')->paginate(20)->get();
         return view('continue', ['Myjmarts'=>$Myjmart]);
          }
    //

public function save(Request $req){
        
    $user= new User;
    $user->recfirm=$req->recfirm;
    $user->jobspec=$req->jobspec;
    $user->jobreq=$req->jobreq;
    $user->location=$req->location;
    $user->salary=$req->salary;
    $user->phonenumber=$req->phonenumber;
    $user->others=$req->others;
    $user->sourcemail=$req->sourcemail;
    $user->username=$req->username;
    $user->save();
    return view('continue');
}

public function savecomment(Request $req, $id ){
      $user=DB::table('comment');
      $user->comment=$req->comment;
    $user->poster=$req->poster;
    $user->id=$id;
    $user->save();
    return view('comment');
}
public function delete(Request $req, $id ){
  
    $poster=logtable::where("id", $id)->get();
    $authenticateduser=User::where("email",Auth::user()->email)->get();
   if(  $poster== $authenticateduser){
    $Myjmart->delete();
    return view('continue', 'Post deleted');
}
   else{ return view('continue', 'Post can not be deleted');}
}


public function showjobform( ){
       return view('', 'Post deleted');
}

    //
}
public function showcomment(Request $req, $id ){
       
    $id=$req->id;
        $mjmart=DB::table('comment')->where(['id', $id]);
    return view('comment' ['Myjmarts'=>$Myjmart]);
}

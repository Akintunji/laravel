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
        
    $user= new User;
    $user->comment=$req->comment;
    $user->poster=$req->poster;
    $user->jobreq=$id;
    $user->save();
    return view('comment');
}
public function delete(Request $req, $id ){
    $Myjmart=user::find($id);
    $Myjmart->delete();
    return view('continue', 'Post deleted');
}



public function showjobform( ){
       return view('dashboard', 'Post deleted');
}

    //
}

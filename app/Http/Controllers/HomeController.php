<?php
   
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Content ;
use App\Event;
use App\Evaluation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function user(Request $request)
    {
        
        return $request->user();
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return auth()->user();
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return auth()->user();
    }

    function trainee(Request $request){

        
   
            $image = $request->file('avatar');;
            $imagename = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imagename);
            $user = User::create($request->all());
            $user->avatar = $imagename;
            $user->save();

        return $user;
    }
  
    function edituser(Request $request , $id){

        $user = User::find($id);
        $image = $request->file('avatar');
        $user->update($request->all());
            if($image){
                $imagename = time() . '.' . $image->extension();
                $image->move(public_path('images'), $imagename);
                $user->avatar = $imagename;
                
            }
            $user->save();

        return $user;
    }

    function getTrainees(){

        $trainees = User::all() ;
        // dd($trainees);
        return $trainees;
    }

    function deleteUser($id){

        User::find($id)->delete() ;
        // dd($trainees);
        return "Done" ;
    }

    function addContent(Request $request){

        
        $content = Content::create($request->all());
         $image = $request->file('image');
         if($image){
             $imagename = time() . '.' . $image->extension();
             $image->move(public_path('images'), $imagename);
             $content->image = $imagename;
             $content->save();
         }
         return $content ;
     }

     function addevent(Request $request){
         return Event::create($request->all());
     }

     function addevaluation(Request $request ){
        $user =  User::find($request['user_id']);
 
        if($request['is_published'] == 1){
            
            $data = $request->all();
            $data['user'] = $user;
            Mail::send('emails.evaluation', $data, function($message) use ($user) {
            $message->to($user->email, $user->name)
            ->subject('Evaluation Result');
            $message->from('vpna3mar@gmail.com','Orange Coding Academy');
            });
       }
        return Evaluation::create($request->all()) ;
     }
     function getevaluation($id){
         
        return Evaluation::where('user_id' , $id)->get() ;
     }
     function editevaluation(Request $request ,$id){
      
        //  return view('emails.evaluation');

         $user =  Evaluation::find($id)->user ;
        if($request['is_published'] == 1){
            
             $data = $request->all();
             $data['user'] = $user;
             Mail::send('emails.evaluation', $data, function($message) use ($user) {
             $message->to($user->email, $user->name)
             ->subject('Evaluation Result');
             $message->from('vpna3mar@gmail.com','Orange Coding Academy');
             });
        }

        return Evaluation::find($id)->update($request->all()) ;
     }


     function changePassword(Request $request){
         $user= User::find($request->id) ;

        if (!Hash::check($request->old,  $user->password)) { 
            return ['old'=>['Password Incorrect']] ;
        }

        $validator = Validator::make($request->all(), [
            'old' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        $user->password = bcrypt($request->password);
        $user->save();
        return $user->save();
     }

     function contactUs(Request $request){

         $data = $request->all();
     
         Mail::send('emails.contactus', $data, function($message) use($data) {
        $message->to('ahmada3mar@gmail.com', 'Ahmad Emar')
        ->subject($data['subject']);
        $message->from('vpna3mar@gmail.com','Orange Coding Academy');
        });

        return true;
     }
   
    



    
    
}
<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Role;
use App\User;
use Gate;
use Illuminate\Http\Request;
// use Symfony\Component\HttpFoundation\Response;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;


class UsersController extends Controller
{
    public function index()
    {

        $users = User::all();
         $roles = Role::all()->pluck('title', 'id');
        return view('admin.users.index', compact(['users','roles']));
    }

    public function create()
    {

        $roles = Role::all()->pluck('title', 'id');

        return view('admin.users.create', compact('roles'));
    }

   
    public function store(StoreUserRequest $request)
    {
        // $data = $request->all();
        // dd($data);
        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index')->withSuccess(['User Added Successfully']);
    }

    public function edit(User $user)
    {

        $roles = Role::all()->pluck('title', 'id');

        $user->load('roles');

        return view('admin.users.edit', compact('roles', 'user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index')->withSuccess(['User Updated Successfully']);
    }

    public function show(User $user)
    {

        $user->load('roles');

        return view('admin.users.show', compact('user'));
    }

    public function destroy(User $user)
    {

        $user->delete();

        return back();
    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
     public function addUser(Request $request){

            // dd($request->all());
          $rules = array(
            'fname'      => 'required | string | min:3 | max :100 |',
            'lname'      => 'required | string | min:3 | max :100 |',
            'email'      => 'required | string | email | max:255 | unique:users',
            'password'   => 'required | string | min:8 ',
            'phone'      => 'required',
            'university' => 'required | min:5',
            'roles.*'    => 'integer',
            'roles'      => 'required | array',
            'phone'      => 'required',
            'status'     => 'required'
          );
        $validator = Validator::make ( Input::all(), $rules);
        if ($validator->fails())
            return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));

        else {
             $user = User::create($request->all());
            $user->roles()->sync($request->input('roles', []));

            // return redirect()->route('admin.users.index')->withSuccess(['User Added Successfully']);
          return response()->json(['user'=>$user ,'status'=>'success' , 'message' =>'User Added Successfully']);

        }
    }
     public function editUser(Request $request){

            $data = ($request->input());
            $user_email = $data['email'];
            $user = User::where('email', '=', $user_email)->firstOrFail();
          $rules = array(
            'fname'      => 'required | string | min:3 | max :100 |',
            'lname'      => 'required | string | min:3 | max :100 |',
            'email'      => 'required | string | email | max:255 | unique:users,email,'.$user->id,
            'password'   => 'required | string | min:8 ',
            'phone'      => 'required',
            'university' => 'required | min:5',
            
            'phone'      => 'required',
            'status'     => 'required'
          );
        $validator = Validator::make ( Input::all(), $rules);
        if ($validator->fails())
            return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));

        else {
             $user->update($request->all());
            $user->roles()->sync($request->input('roles', []));

            // return redirect()->route('admin.users.index')->withSuccess(['User Added Successfully']);
          return response()->json(['user'=>$user ,'status'=>'success' , 'message' =>'User Updated Successfully']);

        }
    }
    public function deleteUser(Request $request){
        $data = $request->input();
        $user_id = $data['user_id'];
        $user = User::where('id', '=', $user_id)->firstOrFail();

         $user->delete();
     return response()->json(['status'=>'success' , 'message' =>'User Deleted Successfully']);

    }
}

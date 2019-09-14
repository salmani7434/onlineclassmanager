<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Role;
use App\User;
use App\Course;
use App\Topic;
use Gate;
use Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Carbon;
use DateTime;
// use Symfony\Component\HttpFoundation\Response;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
class CourseTopicController extends Controller
{
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
     public function addTopic(Request $request){


          $rules = array(
            'name'  => 'required | string | min:3 | max :100 | unique:topics',
                   );
        $validator = Validator::make ( Input::all(), $rules);
        if ($validator->fails()){
            return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
        }

        else {
            $data = $request->input();
            $topic = new Topic();
            $topic->name = $data['name'];
            $topic->save();
            $course_id = $data['course_id'];
            $topic->courses()->sync($course_id, []);

            // return redirect()->route('admin.users.index')->withSuccess(['User Added Successfully']);
          return response()->json(['topic'=>$topic ,'status'=>'success' , 'message' =>'Course Added Successfully']);
      }

    }

}


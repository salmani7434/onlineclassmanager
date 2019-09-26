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
use App\Task;
use App\TaskTag;
use Gate;
use Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Carbon;
use DateTime;
// use Symfony\Component\HttpFoundation\Response;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
class TaskController extends Controller
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
        dd($request->all());
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

        $userId = Auth::id();
           $rules = array(
            'title'              => 'required | string | min:3 | max :100 | unique:tasks',
            'type'              => 'required | string | min:3 | max :100',
            'due_date'          => 'required ',
            'completion_date'  => 'required',
            'instruction'       => 'required',
            'amount'             => 'required',          );
        $validator = Validator::make ( Input::all(), $rules);
        if ($validator->fails()){
            return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
        }

        else {
            $data = $request->input();
            dd($data);
            $topic = new Topic();
            $topic->title = $data['title'];
            $topic->save();
            $course_id = $data['course_id'];
            $topic->courses()->sync($course_id, []);
            $topic->users()->sync($userId, []);
            // return redirect()->route('admin.users.index')->withSuccess(['User Added Successfully']);
          return response()->json(['topic'=>$topic ,'status'=>'success' , 'message' =>'Course Added Successfully']);
      }

    }
    public function addTask(Request $request){
                $userId = Auth::id();

        $rules = array(
            'title'              => 'required | string | min:3 | max :100 | unique:tasks',
            'type'              => 'required',
            'due_date'          => 'required ',
            'completion_date'  => 'required',
            'instruction'       => 'required',
            'amount'             => 'required',          
        );

         $validator = Validator::make ( Input::all(), $rules);
        
        if ($validator->fails()){
            return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
        }
         else {
                    $data = $request->input();

                    $task = new Task();
                    $task->title = $data['title'];
                    $task->type = $data['type'];
                    $task->due_date = $data['due_date'];
                    $task->is_completed = $data['is_completed'];
                    $task->completion_date = $data['completion_date'];
                    $task->instruction = $data['instruction'];
                    $task->amount = $data['amount'];
                    $task->save();
                    $course_id = $data['course_id'];
                    $topic_id = $data['topic_id'];
                    $task->topics()->sync($topic_id, []);
                    $task->courses()->sync($course_id, []);
                    $task->users()->sync($userId, []);

                  return response()->json(['task'=>$task ,'status'=>'success' , 'message' =>'Task Added Successfully']);

        }

    }
}

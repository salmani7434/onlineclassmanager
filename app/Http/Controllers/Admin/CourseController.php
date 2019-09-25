<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Role;
use App\User;
use App\Course;
use Gate;
use Auth;
use Illuminate\Http\Request;
use DB; 
use Illuminate\Support\Carbon;
use DateTime;
// use Symfony\Component\HttpFoundation\Response;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //
        // abort_if(Gate::denies('course_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if(Auth::check()){
            if (Auth::user()->isAdmin()){
                $courses = Course::all();
            }
            else{
                
                $course_ids = array();
                $current_user_id = Auth::user()->id;
                $course_user = DB::select("SELECT * FROM course_user where user_id ='$current_user_id'  ");
                foreach ($course_user as $key => $value) {
                 array_push($course_ids,$value->course_id);
                }
                
                 $courses = Course::whereIn('id', $course_ids)->get();

                // $courses = Auth::user()->courses(); 
                // // foreach($courses as $course){
                //     dd($courses);       
                // // }       
            }
            
        }
       

        return view('admin.courses.index',compact(['courses']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.courses.create');
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
        $course = Course::where('id', '=', $id)->firstOrFail();
        return view('admin.courses.show',compact(['course']));

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
        return view('admin.courses.edit');
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
     public function addCourse(Request $request){
        $userId = Auth::id();
          $rules = array(
            'name'              => 'required | string | min:3 | max :100 | unique:courses',
            'subject'           => 'required | string | min:3 | max :100 |',
            'start_date'        => 'required ',
            'completion_date'   => 'required',
            'course_objectives' => 'required',
            'setup'             => 'required',          );
        $validator = Validator::make ( Input::all(), $rules);
        if ($validator->fails()){
            return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));
        }

        else {
            $data = $request->input();
            $course = new Course();
            $course->name = $data['name'];
            $course->slug = str_slug($data['name']);
            $course->subject = $data['subject'];
            $course->is_important = $request->input('is_important') ? true : false;
            $course->course_objectives = $data['course_objectives'];
            $course->start_date = $data['start_date'];
            $course->completion_date = $data['completion_date'];
            $course->setup = $data['setup'];
            $course->save();
            $course->users()->sync($userId, []);

            // return redirect()->route('admin.users.index')->withSuccess(['User Added Successfully']);
          return response()->json(['course'=>$course ,'status'=>'success' , 'message' =>'Course Added Successfully']);

        }
    }
    public function editCourse(Request $request){
            $data = ($request->input());
            $course_id = $data['course_id'];
            $course = Course::where('id', '=', $course_id)->firstOrFail();

          $rules = array(
            'name'              => 'required | string | min:3 | max :100 | unique:courses,name,'.$course_id,
            'subject'           => 'required | string | min:3 | max :100 |',
            'start_date'        => 'required ',
            'completion_date'   => 'required',
            'course_objectives' => 'required',
          );
        $validator = Validator::make ( Input::all(), $rules);
        if ($validator->fails())
            return Response::json(array('errors'=> $validator->getMessageBag()->toarray()));

        else {
                 $data = $request->input();
                $course->name = $data['name'];
                $course->slug = str_slug($data['name']);
                $course->subject = $data['subject'];
                $course->is_important = $request->input('is_important') ? true : false;
                $course->course_objectives = $data['course_objectives'];

                $course->start_date = $data['start_date'];
                $course->completion_date = $data['completion_date'];
                $course->setup = $data['setup'];
                $course->save();

            // return redirect()->route('admin.users.index')->withSuccess(['User Added Successfully']);
          return response()->json(['course'=>$course ,'status'=>'success' , 'message' =>'Course Updated Successfully']);

        }
    }
     public function deleteCourse(Request $request){
        $data = $request->input();
        $course_id = $data['course_id'];
        $course = Course::where('id', '=', $course_id)->firstOrFail();

         $course->delete();
     return response()->json(['status'=>'success' , 'message' =>'Course Deleted Successfully']);

    }
    
}

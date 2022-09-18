<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    $tasks=DB::table('tasks')->latest()->get();
    return view('index',compact('tasks'));
});

Route::get('create-task', function () {
    return view('todos.create');
});
Route::post("create-task",function(Request $req){
    $detail=$req->input("detail");
    $status=$req->input("status");
    $data=compact("detail","status");
    if(DB::table('tasks')->insert($data))
        return redirect("/");
});
Route::get("task-edit/{id}",function($id){
    if(!$id) return abort(404);
    $task=DB::table('tasks')->where('id',$id)->first();
    if($task)
        return view("todos.edit")->with("task",$task);
});
Route::put("task-edit/{id}",function(Request $req,$id){
    $detail=$req->input("detail");
    $status=$req->input("status");
    $data=compact("detail","status");
    if(DB::table('tasks')->where('id',$id)->update($data));
        return redirect("/");
});

Route::delete("task-delete/{id}",function($id){
    if(DB::table('tasks')->where('id',$id)->delete())
        return redirect("/");
});
Route::get("tasks/{status?}",function($status='done'){
    $tasks=DB::table('tasks')->where('status',$status)->get();
    return view('index',compact('tasks'));
});

Route::get("task-detail/{id}",function($id){
    if(!$id) return abort(404);
    $task=DB::table('tasks')->where('id',$id)->first();
    if($task)
        return view("todos.detail")->with("task",$task);
});




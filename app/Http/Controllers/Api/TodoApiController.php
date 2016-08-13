<?php 

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoApiController extends Controller
{
    public function saveTodo(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:3'
        ]);

        if ($validator->fails()) {
            return response($validator->errors()->getMessages(), 422);
        }

        $todo = Todo::create([
            'title' => $request->input('title'),
            'user_id' => 1,
            'completed' => false,
        ]);

        return response($todo, 201);
    }

    public function deleteTodo(Request $request)
    {
        $id = $request->input('id');

        $todo = Todo::where('id', $id)->first();
        $todo->delete();

        return response($todo, 200);
    }

    public function changeTodoStatus(Request $request)
    {
        $id = $request->input('id');

        $todo = Todo::where('id', $id)->first();
        
        if ($todo->completed == true) {
            $todo->completed = false;
        } else {
            $todo->completed = true;
        }
        
        $todo->save();

        return response($todo, 200);
    }
}

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
}

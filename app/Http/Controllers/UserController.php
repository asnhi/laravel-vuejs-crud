<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\UserProjectPosition;
use App\Models\User;
use App\Models\UserStatus;
use App\Models\Position;

class UserController extends Controller
{

    public function index()
    {
        try {
            $users = UserProjectPosition::join('users', 'users.id', '=', 'user_project_positions.user_id')
                ->join('projects', 'projects.id', '=', 'user_project_positions.project_id')
                ->join('positions', 'positions.id', '=', 'user_project_positions.position_id')
                ->join('user_statuses', 'users.status_id', '=', 'user_statuses.id')
                ->select(
                    'users.*',
                    'projects.name as projects',
                    'positions.name as positions',
                    'user_statuses.name as status'
                )
                ->get();

            return response()->json($users);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        try {
            $user = User::findOrFail($id);
            return response()->json($user);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['error' => 'Không tìm thấy người dùng!'], 404);
        }
    }

    public function getSelectOptions()
    {
        try {
            $user_status = UserStatus::all();
            $position = Position::all();

            return response()->json([
                "user_status" => $user_status,
                "position" => $position
            ]);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return response()->json(['error' => 'Lỗi! Vui lòng thử lại sau.'], 500);
        }
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

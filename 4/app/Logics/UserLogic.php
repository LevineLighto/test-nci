<?php

namespace App\Logics;

use App\Models\User;
use App\Responses\Failed;
use App\Responses\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserLogic
{
    public function create(Request $request)
    {
        DB::beginTransaction();

        try {

            $emailExists = User::where('email', $request->email)->exists();
            if ($emailExists) {
                DB::rollBack();
                return Failed::parse('The email is currently being used by another user');
            }
            
            $user = User::create($request->validated());
            
            DB::commit();

            return Success::create($user);
            
        } catch (\Throwable $th) {
            
            Log::error($th);
            DB::rollBack();
            return Failed::parse('Unable to create user', 500);

        }
    }

    public function update(User $user, Request $request)
    {
        DB::beginTransaction();

        try {
            
            $emailExists = User::where('email', $request->email)
                ->where('id', '!=', $user->id)
                ->exists();
            if ($emailExists) {
                DB::rollBack();
                return Failed::parse('The email is currently being used by another user');
            }

            $user->update($request->validated());

            return Success::update($user);

        } catch (\Throwable $th) {
            
            Log::error($th);
            DB::rollBack();
            return Failed::parse('Unable to update user', 500);

        }
    }

    public function delete(User $user)
    {
        DB::beginTransaction();

        try {
            
            $user->delete();

            DB::commit();

            return Success::delete();

        } catch (\Throwable $th) {
            
            Log::error($th);
            DB::rollBack();
            return Failed::parse('Unable to delete user', 500);

        }
    }
}
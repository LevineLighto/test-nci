<?php

namespace App\Http\Controllers;

use App\Helpers\Pagination;
use App\Http\Requests\UserRequest;
use App\Logics\UserLogic;
use App\Models\User;
use App\Responses\Failed;
use App\Responses\Success;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function get (Request $request)
    {
        $query = User::query();
        
        $query->select([
            'id',
            'name',
            'email',
        ]);

        [
            'maxPage'   => $maxPage,
            'query'     => $query
        ] = Pagination::processRequest($query, $request);

        $users = $query->get();

        return Success::fetch($users, $maxPage);
    }

    public function find ($id)
    {
        $user = User::find($id);
        if (empty($user)) {
            return Failed::notFound();
        }

        return Success::fetch($user);
    }

    public function create(UserRequest $request)
    {
        return (new UserLogic)->create($request);
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        if (empty($user)) {
            return Failed::notFound();
        }

        return (new UserLogic)->update($user, $request);
    }

    public function delete($id)
    {
        $user = User::find($id);
        if (empty($user)) {
            return Failed::notFound();
        }

        return (new UserLogic)->delete($user);
    }
}

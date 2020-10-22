<?php namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupApiController extends ApiController
{
    public function getAll()
    {
        try {
            $groups = Group::all();
            $this->setData($groups);
            $this->setMessage('success');
        } catch (\Exception $e) {
            $this->setMessage(trans('error.error.get'));
            $this->setErrorStatus(401);
        }

        return $this->getResponse();
    }

    public function getById($id)
    {
        try {
            $groups = Group::find($id);
            $this->setData($groups);
            $this->setMessage('success');
        } catch (\Exception $e) {
            $this->setMessage(trans('error.error.get'));
            $this->setErrorStatus(401);
        }
        return $this->getResponse();
    }

}
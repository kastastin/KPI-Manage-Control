<?php namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersApiController extends ApiController
{
    public function getAll()
    {
        try {
            $teachers = Teachers::all();
            $this->setData($teachers);
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
            $teachers = Teachers::find($id);
            $this->setData($teachers);
            $this->setMessage('success');
        } catch (\Exception $e) {
            $this->setMessage(trans('error.error.get'));
            $this->setErrorStatus(401);
        }
        return $this->getResponse();
    }

}
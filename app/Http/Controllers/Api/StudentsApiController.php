<?php namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentsApiController extends ApiController
{
    public function getAll()
    {
        try {
            $students = Students::all();
            $this->setData($students);
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
            $students = Students::find($id);
            $this->setData($students);
            $this->setMessage('success');
        } catch (\Exception $e) {
            $this->setMessage(trans('error.error.get'));
            $this->setErrorStatus(401);
        }
        return $this->getResponse();
    }

}
<?php namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Disciplines;
use Illuminate\Http\Request;

class DisciplinesApiController extends ApiController
{
    public function getAll()
    {
        try {
            $disciplines = Disciplines::all();
            $this->setData($disciplines);
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
            $disciplines = Disciplines::find($id);
            $this->setData($disciplines);
            $this->setMessage('success');
        } catch (\Exception $e) {
            $this->setMessage(trans('error.error.get'));
            $this->setErrorStatus(401);
        }
        return $this->getResponse();
    }

}
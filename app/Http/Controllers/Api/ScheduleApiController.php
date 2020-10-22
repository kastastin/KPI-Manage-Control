<?php namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleApiController extends ApiController
{
    public function getAll()
    {
        try {
            $schedules = Schedule::all();
            $this->setData($schedules);
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
            $schedules = Schedule::find($id);
            $this->setData($schedules);
            $this->setMessage('success');
        } catch (\Exception $e) {
            $this->setMessage(trans('error.error.get'));
            $this->setErrorStatus(401);
        }
        return $this->getResponse();
    }

    public function save(Request $request) 
    {
        try {
            $data = $request->all();
            $schedules = Schedule::create($data);
            $this->setData($schedules);
            $this->setMessage('success');
        } catch (\Exception $e) {
            $this->setMessage(trans('error.error.get'));
            $this->setErrorStatus(401);
        }

        return $this->getResponse();
    }

    public function update($id, Request $request)
    {
        try {
            $data = $request->all();
            $schedules = Schedule::updateOrCreate(
                ['id' => $id], $data
            );
            $this->setData($schedules);
            $this->setMessage('success');
        } catch (\Exception $e) {
            $this->setMessage(trans('error.error.get'));
            $this->setErrorStatus(401);
        }
        return $this->getResponse();
    }

    public function delete($id)
    {
        try {
            $schedules = Schedule::find($id);
            $schedules->delete();
            $this->setData('delete');
            $this->setMessage('success');
        } catch (\Exception $e) {
            $this->setMessage(trans('error.error.get'));
            $this->setErrorStatus(401);
        }
        return $this->getResponse();    
    }

}
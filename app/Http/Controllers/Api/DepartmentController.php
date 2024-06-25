<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentRequest;
use App\Http\Resources\DeparmentResource;
use App\Http\Traits\CanLoadRelationships;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    use CanLoadRelationships;

    public function _construct(){
        $this->authorizeResource(Department::class, 'department');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $query = $this->loadRelationships(Department::query());

        return DeparmentResource::collection(
            $query->latest()->paginate()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DepartmentRequest $request)
    {
        $department = Department::create($request->validate());

        return new DeparmentResource($department);
    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        return new DeparmentResource(
            $this->loadRelationships($department)
        );
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();

        return response(status: 204);
    }
}

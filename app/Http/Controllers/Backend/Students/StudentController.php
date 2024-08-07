<?php

namespace App\Http\Controllers\Backend\Students;

use App\Http\Controllers\Controller;
// use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
// use App\Http\Requests\Backend\Students\AddNewRequest;
// use App\Http\Requests\Backend\Students\UpdateRequest;
use App\Http\Requests\Backend\User\AddNewRequest;
use App\Http\Requests\Backend\User\UpdateRequest;
use App\Models\Role;
use Exception;
use Illuminate\Support\Facades\Hash;
use File;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::where('role_id', 4)->paginate(10);
        return view('backend.student.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = Role::get();
        return view('backend.student.create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddNewRequest $request)
    {
        try {
            $student = new User();
            $student->name = $request->userName;
            $student->phone = $request->contactNumber;
            $student->email = $request->emailAddress;
            $student->role_id = 4;
            $student->date_of_birth = $request->birthDate;
            $student->gender = $request->gender;
            $student->status = $request->status;
            $student->password = Hash::make($request->password);

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/users'), $imageName);
                $student->image = $imageName;
            }
            if ($student->save())
                return redirect()->route('student.index')->with('success', 'Data Saved');
            else
                return redirect()->back()->withInput()->with('error', 'Please try again');
        } catch (Exception $e) {
            // dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $role = Role::get();
        $student = User::findOrFail(encryptor('decrypt', $id));

        return view('backend.student.edit', compact('role', 'student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        try {

            $student = User::findOrFail(encryptor('decrypt', $id));
            $student->name = $request->userName;
            $student->email = $request->emailAddress;
            $student->phone = $request->contactNumber;
            $student->date_of_birth = $request->birthDate;
            $student->gender = $request->gender;
            $student->status = $request->status;

            if ($request->password)
                $student->password = Hash::make($request->password);

            if ($request->hasFile('image')) {
                $imageName = rand(111, 999) . time() . '.' . $request->image->extension();
                $request->image->move(public_path('uploads/users'), $imageName);
                $student->image = $imageName;
            }
            if ($student->save())
                return redirect()->route('student.index')->with('success', 'Data Saved');
            else
                return redirect()->back()->withInput()->with('error', 'Please try again');
        } catch (Exception $e) {
            // dd($e);
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = User::findOrFail(encryptor('decrypt', $id));
        $image_path = public_path('uploads/users') . $data->image;

        if ($data->delete()) {
            if (File::exists($image_path))
                File::delete($image_path);

            return redirect()->back();
        }
    }
}

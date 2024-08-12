<?php

namespace App\Http\Controllers\Backend\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Exception;
use App\Models\User;

class AboutPageController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        // $role = Role::get();
        $student = '';

        return view('backend.pages.about', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {

            $student = User::get();
            $student->name = $request->userName;
            $student->email = $request->emailAddress;
            $student->phone = $request->contactNumber;
            $student->date_of_birth = $request->birthDate;
            $student->gender = $request->gender;
            $student->status = $request->status;

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
            return redirect()->back()->withInput()->with('error', 'Please try again');
        }
    }
}

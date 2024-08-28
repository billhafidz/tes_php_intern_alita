<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $employees = Employee::with('location');

        // cek parameter pencarian
        if ($request->has('age') && !empty($request->input('age'))) {
            $age = $request->input('age');

            // menghitung umur karyawan yang dikurangi 28 dari tanggal saat ini
            $birthDate = now()->subYears($age)->toDateString();

            // cek umur apakah >= 28
            if ($age >= 28) {
                // ambil data sesuai kriteria
                $employees->where('birth_date', '<=', $birthDate)
                    ->whereHas('location', function ($query) {
                        $query->where('name', 'Jakarta');
                    });
            } else {
                // jika umur kurang dari atau sama dengan 28, data tidak diambil
                $employees->where('id', null); // atau ambil data kosong
            }
        }

        // data karyawan menggunakan pagination
        $employees = $employees->paginate(4);

        return view('employees.index', ['employees' => $employees]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validasi
        $request->validate([
            'name' => 'required',
            'location_code' => 'required',
            'birth_date' => 'required'
        ]);

        // simpan
        employee::create($request->all());

        // redirect
        return redirect()->route('employee.index')->with('success', 'employee add successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(employee $employee)
    {
        return view('employees.show', ['employee' => $employee]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(employee $employee)
    {
        return view('employees.edit', ['employee' => $employee]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employee $employee)
    {
        // validasi
        $request->validate([
            'name' => 'required',
            'location_code' => 'required',
            'birth_date' => 'required'
        ]);

        // update
        $employee->update($request->all());

        // redirect
        return redirect()->route('employee.index')->with('success', 'employee updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index')->with('success', 'employee deleted successfully');
    }
}

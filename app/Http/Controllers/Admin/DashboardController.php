<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataPegawai;
use App\Models\RuangDosen;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $id = 1;
        $item = RuangDosen::findOrFail($id);
        $data = DataPegawai::count();
        $any_data = DataPegawai::where('status', 'ADA')->count();
        $not_any_data = DataPegawai::where('status', 'TIDAK ADA')->count();
        $study_data = DataPegawai::where('status', 'TUGAS BELAJAR')->count();
        $holiday_data = DataPegawai::where('status', 'LIBUR')->count();

        return view('pages.admin.dashboard', [
            'item' => $item,
            'data' => $data,
            'anyData' => $any_data,
            'notAny' => $not_any_data,
            'studyData' => $study_data,
            'holidayData' => $holiday_data,
        ]);
    }
    public function hello()
    {
        $id = 1;
        $item = RuangDosen::findOrFail($id);
        $data = DataPegawai::count();
        $any_data = DataPegawai::where('status', 'ADA')->count();
        $not_any_data = DataPegawai::where('status', 'TIDAK ADA')->count();
        $study_data = DataPegawai::where('status', 'TUGAS BELAJAR')->count();
        $holiday_data = DataPegawai::where('status', 'LIBUR')->count();

        return view('pages.admin.dashboard', [
            'item' => $item,
            'data' => $data,
            'anyData' => $any_data,
            'notAny' => $not_any_data,
            'studyData' => $study_data,
            'holidayData' => $holiday_data,
        ]);
    }
}

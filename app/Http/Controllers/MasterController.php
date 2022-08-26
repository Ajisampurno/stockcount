<?php

namespace App\Http\Controllers;

use App\Exports\MasterExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MasterImport;
use App\Models\Master;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnValue;

class MasterController extends Controller
{
    public function index()
    {
        $master = Master::latest();
        return view('index', [
            'master' => $master->get()->sortBy('id')
        ]);
    }

    public function tabel()
    {
        $master = Master::latest();

        if (request('search')) {
            $master->where('id', 'like', '%' . request('search') . '%')
                ->orwhere('desc', 'like', '%' . request('search') . '%')
                ->orwhere('lv3', 'like', '%' . request('search') . '%');
        }

        return view('tabel', [
            'master' => $master->get()->sortBy('id')
        ]);
    }

    public function sampling()
    {
        return view('/sampling');
    }

    public function exportmaster()
    {
        return Excel::download(new MasterExport, 'master.xlsx');
    }

    public function importmaster(Request $request)
    {
        Master::truncate();

        $file = $request->file('file');
        $nama_file = $file->getClientOriginalName();
        $file->move('DataMaster', $nama_file);

        Excel::import(new MasterImport, public_path('/DataMaster/' . $nama_file));
        return redirect('/index');
    }
    //public function importSOD(Request $request)
    //{
    //    SOD::truncate();
    //
    //    $file = $request->file('file');
    //    $nama_file = $file->getClientOriginalName();
    //    $file->move('DataSOD', $nama_file);
    //
    //    Excel::import(new SOD, public_path('/DataSOD/' . $nama_file));
    //    return redirect('/index');
    //}
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
class UserController extends Controller
{
    public function export_user(Request $request){
        // dd('export');
        return Excel::download(new UsersExport, 'users.xlsx');

    }
    public function import_user(Request $request){
        // dd('import');
        Excel::import(new UsersImport, $request->file('file'));
        return redirect('import-user')->with('success', 'All good!');


    }
}

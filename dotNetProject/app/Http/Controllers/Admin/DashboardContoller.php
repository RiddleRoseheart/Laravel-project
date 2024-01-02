<?php
// dashboard voor de admin!!!
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DashboardContoller extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
}

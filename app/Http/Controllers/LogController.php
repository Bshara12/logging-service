<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogController extends Controller
{
    public function index(Request $request)
    {
        $query = DB::table('logs');

        if ($request->module) {
            $query->where('module', $request->module);
        }

        if ($request->user_id) {
            $query->where('user_id', $request->user_id);
        }

        return $query
            ->orderBy('occurred_at','desc')
            ->limit(50)
            ->get();
    }

    public function auditLogs()
    {
        return DB::table('audit_logs')
            ->orderBy('occurred_at','desc')
            ->limit(50)
            ->get();
    }
}
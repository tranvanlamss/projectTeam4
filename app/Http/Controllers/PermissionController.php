<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index(Request $request){
        $roleList = DB::table('roles')->get();
        return view('admin.permission.index')->with([
                'roleList' => $roleList,
                'index'    => 0
            ]);
    }
    public function setting(Request $request){
        $routeList = DB::table('routes')->get();

        $permissionList = DB::table('permission')
            ->where('role_id', $request->id)
            ->get();

        $list = [];
        foreach ($routeList as $item) {
            $status = 0;
            foreach ($permissionList as $item2) {
                if ($item2->route_id == $item->id) {
                    $status = $item2->status;
                    break;
                }
            }
            $list[] = [
                'route_id'    => $item->id,
                'route_title' => $item->route_title,
                'route_name'  => $item->route_name,
                'status'      => $status
            ];
        }

        return view('admin.permission.setting')->with([
                'index'          => 0,
                'permissionList' => $list,
                'role_id'        => $request->id
            ]);
    }

    public function save(Request $request) {
        $status   = $request->status;
        $role_id  = $request->role_id;
        $route_id = $request->route_id;

        $data = DB::table('permission')
            ->where('route_id', $route_id)
            ->where('role_id', $role_id)
            ->get();

        if ($data != null && count($data) > 0) {
            DB::table('permission')
                ->where('route_id', $route_id)
                ->where('role_id', $role_id)
                ->update([
                    'status' => $status
                ]);
        } else {
            DB::table('permission')->insert([
                    'route_id' => $route_id,
                    'role_id'  => $role_id,
                    'status'   => $status
                ]);
        }
    }
}

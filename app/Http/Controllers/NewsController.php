<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $title = "Brandex";
        $keyword = "";
        $description = "";

        $users = DB::table('users')->get();

        return view("admin.pages.user.show", compact('title', 'keyword', 'description', 'users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $method = "Add";
        return view('admin.pages.user.form', compact('method'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'name' => 'required',
            'nickname' => 'required',
            'position' => 'required'
        ]);

        $name = $request->input("name");
        $nickname = $request->input("nickname");
        $username = $request->input("username");
        $password = $request->input("password");
        $level = $request->input("level");
        $is_manager = $request->input("is_manager");
        $is_active = $request->input("is_active");
        $position = $request->input("position");


        $params["username"] = $username;
        $params["name"] = $name;
        $params["nickname"] = $nickname;
        if (strlen($password) > 0){
            $params["password"] = Hash::make($password);
        }
        $params["level"] = $level;
        $params["is_manager"] = $is_manager;
        $params["is_active"] = $is_active;
        $params["position"] = $position;
        $params['created_at']= date('Y-m-d H:i:s');
        $params['created_by']= Auth::user()->name;
        $params['updated_at']= date('Y-m-d H:i:s');

        DB::table("users")->insert($params);
        return redirect("User");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = DB::table("users")->where('id', $id)->first();
        $method = "Edit";
        return view('admin.pages.user.form', compact('method', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'username' =>[
                'required',
                // Rule::unique('users')->ignore($id),
            ]
            ,
            'name' => 'required',
            'nickname' => 'required',
            'position' => 'required'
        ]);

        $name = $request->input("name");
        $nickname = $request->input("nickname");
        $username = $request->input("username");
        $password = $request->input("password");
        $level = $request->input("level");
        $is_manager = $request->input("is_manager");
        $is_active = $request->input("is_active");
        $position = $request->input("position");


        $params["username"] = $username;
        $params["name"] = $name;
        $params["nickname"] = $nickname;
        if (strlen($password) > 0)
            $params["password"] = Hash::make($password);

        $params["level"] = $level;
        $params["is_manager"] = $is_manager;
        $params["is_active"] = $is_active;
        $params["position"] = $position;
        $params['updated_by']= Auth::user()->name;
        $params['updated_at']= date('Y-m-d H:i:s');

        DB::table("users")
            ->where('id', $id)
            ->update($params);

        return redirect("User");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("users")
            ->where('id', $id)
            ->delete();
        return redirect("User");
    }
}

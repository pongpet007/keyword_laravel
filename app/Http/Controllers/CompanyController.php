<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $countrys = DB::table('country')->where('is_active',1)->get();
        $company = DB::table("company")->where('com_id', 1)->first();
        $languages = DB::table('company_language')->get();
        $data = array();
        foreach ($languages as $language) {
            $data[$language->country_id] = $language;
        }
        $method = "Edit";
        return view('admin.pages.company.form', compact('method', 'countrys','company'));


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
            ]
            ,
            'name' => 'required',
            'nickname' => 'required',
            'position' => 'required'
        ]);

        $com_id = $request->input("com_id");
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
        $params["level"] = $level;
        $params["is_manager"] = $is_manager;
        $params["is_active"] = $is_active;
        $params["position"] = $position;
        $params['updated_at']= date('Y-m-d H:i:s');

        DB::table("users")
            ->where('com_id', $com_id)
            ->update($params);

        return redirect("User");
    }

}

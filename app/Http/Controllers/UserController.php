<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Empresa;
use App\Models\IdentificacionRiesgo;
use App\Models\AnalisisValoracionRiesgo;
use App\Models\PlanAccion;
use App\Models\EmpresaRiesgo;
use App\Models\EmpresaContextoEmpresa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->email == 'admin@mail.com') {
            $users_companys = User::join('empresas', 'empresas.id_fk_user', '=', 'users.id')->get();
        } else {
            $users_companys = User::join('empresas', 'empresas.id_fk_user', '=', 'users.id')->where('id_fk_user', '=', $user->id)->get();
        }
        return view('view.register', compact(['user', 'users_companys']));;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $company = new Empresa;

        $user->id = $request->cedula;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Crypt::encryptString($request->password);
        $user->save();

        $company->id = $request->nit;
        $company->company_name = $request->company_name;
        $company->id_fk_user = $request->cedula;
        $company->save();

        // return redirect()->route('register');
        return redirect()->route('register')->with('success-tr', 'Usuario/Empresa agregados exitosamente.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        User::find($request->cedula)
            ->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => $request->password,
            ]);

        Empresa::find($request->nit)
            ->update([
                'company_name' => $request->company_name
            ]);

        return redirect()->route('register')->with('success-tr', 'Usuario/Empresa actualziados exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emp = Empresa::find($id);
        $user = User::find($emp->id_fk_user);  
        $ece = EmpresaContextoEmpresa::where('id_fk_empresa', $id);
        $er = EmpresaRiesgo::where('id_fk_empresa', $id);
        $ir = IdentificacionRiesgo::where('id_riesgo', $id);
        $avr = AnalisisValoracionRiesgo::where('id_fk_riesgo', $id);
        $pa = PlanAccion::where('id_fk_riesgo', $id);

        $pa->delete();
        $avr->delete();
        $ir->delete();
        $er->delete();
        $ece->delete();
        $emp->delete();
        $user->delete();

        return redirect()->route('register')->with('success-tr', 'Usuario/Empresa eliminados exitosamente.');
    }
}

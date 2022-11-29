<?php
namespace App\Http\Controllers\Auth;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
// use App\Models\rol;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;
use App\Models\entidad;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /*
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /*
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    function login(Request $request)
    {
        
        $cedula = $request->get('cedula');
        $password = $request->get('password');
        $data = entidad::select('*')->where('rutEntidad', '=', $cedula)->first();
        /* var_dump($data); */
        // dd($data)

        $user = entidad::where([['rutEntidad', '=', $cedula], ['estado', '=', 1]])->first();

        if ($user) {
            if (Hash::check($password, $data->contrasenaEntidad)) {
                Session::put('checkloged', 'logged');
                Session::put('usuario', $user->idEntidad);
                Session::put('rol', $user->rolEntidad);
                Session::put('cedulaUsuario', $user->rutEntidad);
                
                if ($user->rolEntidad == 1) {
                    $response = [
                        'data' => route('notario.index'),
                    ];
                } else if ($user->rolEntidad == 2) {
                    $response = [
                        'data' => route('conservador.index'),
                    ];
                } else if ($user->rolEntidad == 3) {
                    $response = [
                        'data' => route('cliente.index'),

                    ];
                } else if ($user->rolEntidad == 4) {
                    $response = [
                        'data' => route('trabajador.index'),

                    ];
                } else if ($user->rolEntidad == 5) {
                    $response = [
                        'data' => route('admin.index'),

                    ];
                }
                return response()->json($response);  // el usuario y passs son correctas, redirecciono a su view
            } else {

                $response = [
                    'err_msg' => 'usuario o contraseña incorrectos'
                ];
                return response()->json($response, 401);

            }
        } else {

            $response = [
                'err_msg' => 'El usuario no existe en el sistema',
            ];

            return response()->json($response, 400);

        }
    }


    function logout(Request $request)
    {
        Session::put('checkloged', '');
        return redirect()->route('login');
    }
}


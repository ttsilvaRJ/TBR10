<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = User::where('email', 'test@example.com')->first();
        return view('index', compact('user'));
    }

    public function store(Request $request)
    {
        // Validação dos dados
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max2:55|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Criação do usuário
        $user = new User();
        $user->name = $validated['username'];
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        $user->save();

        // Redirecionar após cadastro
        return redirect()->route('page')->with('success', 'Usuário cadastrado com sucesso!');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
{
    // Validação dos dados
    $validated = $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    // Autenticação
    if (Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
        // Redirecionar após login bem-sucedido
        return redirect()->route('dashboard')->with('success', 'Login realizado com sucesso!');
    }

    // Redirecionar de volta com erro
    return redirect()->route('user.login')->withErrors(['email' => 'As credenciais fornecidas estão incorretas.']);
}

public function historia(){

    return view ('historia');
}
public function clubes(){

    return view('club');
}
public function titulos (){
    return view('titulos');
}
public function acess(){
    return view('acess');
}
}

<?php
    namespace App\Http\Controllers;

    use App\Models\Usuario;
    use Illuminate\Http\Request;
    
    class UsuarioController extends Controller
    {
        public function registrar(Request $request)
        {
            $validatedData = $request->validate([
                'nombre' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:usuarios',
                'password' => 'required|string|min:8',
            ]);
    
            $usuario = Usuario::create($validatedData);
            return response()->json($usuario, 201);
        }
    
        public function login(Request $request)
        {
            $validatedData = $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);
    
            $usuario = Usuario::where('email', $validatedData['email'])
                              ->where('password', $validatedData['password'])
                              ->first();
    
            if ($usuario) {
                return response()->json($usuario, 200);
            } else {
                return response()->json(['message' => 'Credenciales incorrectas'], 401);
            }
        }
    
        public function obtenerUsuario($id)
        {
            $usuario = Usuario::find($id);
            return response()->json($usuario, 200);
        }
    }
?>    
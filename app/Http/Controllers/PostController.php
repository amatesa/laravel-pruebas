<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;
use App\Usuarioperfil;

use DB;

class PostController extends Controller
{

    public function crearPost(Request $request)
    {
      $this->validate($request, [
        'cuerpo' => 'required|max:1000'
      ]);
      $user = $request->user();
      $usuario = Usuarioperfil::findOrFail($user['id']);
      $post = new Post();
      $post->texto = $request['cuerpo'];
      $post->user_id = $user['id'];
      $mensaje = "Hubo un error al crear el post";
      if ($post->save()) {
        $mensaje = "Tu post se creo correctamente";
      }
      return redirect()->route('post_portal')->with(['mensaje' => $mensaje]);
    }
    public function borrarPost($id)
    {
      $post = Post::findOrFail($id);
      if (Auth::user() != $post->user) {
        return redirect()->back();
      }
      $post->delete();
      $mensaje = "Error al borrar el post";
      if ($post->save()) {
        $mensaje = "Tu post se borro correctamente";
      }
      return redirect()->route('post_portal')->with(['mensaje' => $mensaje]);
    }

}

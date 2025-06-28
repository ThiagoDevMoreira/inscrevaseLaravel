<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class SubscribeController extends Controller
{
    // inscreve novo aluno no curso
    public function subscribe(Course $course){
        $user = Auth::user();
        // valida duplicidade de inscrição
        if ($user->couses()->where('course_id', $course->id)->exists()) {
            return back->with('info', 'Você já está inscrito nesse curso.');
        }
        //inscreve no curso
        $user->courses()->attach($course->id, ['subscribed_at'=>now(), 'progess'=>0]);
        //retorno de sucesso
        return back()->with('sucess','Inscrição realizada com sucesso.');
    }

    // lista alunos do curso
    public function listStudentsByCourse(Course $course){
        $students = $couse->users()->get();
        return view('course.students', compact('course', 'students'));
    }

    // atualiza progresso de aluno no curso.
    //--- /!\ quando houver domínio "curso" migrar este método pra lá;
    public function progressUpdate(request $request, course $course){
        // valida entrada da requisição
        $request->validate(['progress' => 'required|integer|min:0|max:100']);
        $user = Auth::user();
        // valida se usuario pertence ao curso
        if (!$user->courses()->contains($course->id)){
            return back()->with('error','Você não está inscrito nesse curso.');
        }
        // atualiza progresso
        $user->courses()->updateExistingPivot($couse->id, ['progress'=>$request->input('preogress')]);
        //retorno de sucesso
        return back()->with('sucess', 'Seu progresso foi atualizado');
    }
}

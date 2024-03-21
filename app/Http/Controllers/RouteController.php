<?php

namespace App\Http\Controllers;

use App\Models\CArts;
use App\Models\computing;
use App\Models\french;
use App\Models\gh_language;
use App\Models\Maths;
use App\Models\results;
use App\Models\rme;
use App\Models\science;
use App\Models\socialstd;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RouteController extends Controller
{
    public function __construct()

    {
        $this->middleware(['auth']);
    }

    public function dashboard()
    {
        $students = student::select('name')->where('deleted', '0')
            ->with(
                'carts',
                'french',
                'english',
                'gh_lang',
                'maths',
                'rmes',
                'sciences',
                'socials',
                'computings'
            )->get();

        foreach ($students as $student) {
            $rawScore = 0;

            // Calculate raw score for carts
            foreach ($student->carts as $cart) {
                $rawScore += $cart->class_total + $cart->Exams;
            }

            // Calculate raw score for french
            foreach ($student->french as $french) {
                $rawScore += $french->class_total + $french->Exams;
            }

            foreach ($student->english as $english) {
                $rawScore += $english->class_total + $english->Exams;
            }

            foreach ($student->gh_lang as $gh_lang) {
                $rawScore += $gh_lang->class_total + $gh_lang->Exams;
            }

            foreach ($student->maths as $math) {
                $rawScore += $math->class_total + $math->Exams;
            }

            foreach ($student->rmes as $rme) {
                $rawScore += $rme->class_total + $rme->Exams;
            }

            foreach ($student->sciences as $science) {
                $rawScore += $science->class_total + $science->Exams;
            }

            foreach ($student->socials as $social) {
                $rawScore += $social->class_total + $social->Exams;
            }

            foreach ($student->computings as $computing) {
                $rawScore += $computing->class_total + $computing->Exams;
            }
            // Assign the raw score to the student
            $student->rawScore = $rawScore;
        }

        // Calculate raw score for each student
        foreach ($students as $student) {
            $rawScore = 0;

            // Calculate raw score for each subject and add to the total raw score
            $rawScore += $student->carts->sum('class_total') + $student->carts->sum('Exams');
            $rawScore += $student->french->sum('class_total') + $student->french->sum('Exams');
            $rawScore += $student->english->sum('class_total') + $student->english->sum('Exams');
            $rawScore += $student->gh_lang->sum('class_total') + $student->gh_lang->sum('Exams');
            $rawScore += $student->maths->sum('class_total') + $student->maths->sum('Exams');
            $rawScore += $student->rmes->sum('class_total') + $student->rmes->sum('Exams');
            $rawScore += $student->sciences->sum('class_total') + $student->sciences->sum('Exams');
            $rawScore += $student->socials->sum('class_total') + $student->socials->sum('Exams');
            $rawScore += $student->computings->sum('class_total') + $student->computings->sum('Exams');

            // Assign the raw score to the student
            $student->rawScore = $rawScore;
        }

        // Sort students based on raw score in descending order
        $students = $students->sortByDesc('rawScore');

        // Calculate position in class
        $position = 1;
        $prevScore = null;
        foreach ($students as $student) {
            if ($prevScore !== null && $student->rawScore < $prevScore) {
                $position++;
            }
            $prevScore = $student->rawScore;
            $student->position = $position;
        }

        $user = Auth::user();

        switch ($user->role) {
            case 'admin':
                return view('modules.admin.index');
                break;
            
            case 'staff':
                return view('modules.main.index', compact('students'));
                break;
        }
    }

    public function results()
    {
        $english = results::where('subject', 'ENG')
            ->where('deleted', '0')
            ->get();

        $maths = Maths::where('subject', 'MATHS')
            ->where('deleted', '0')
            ->get();

        $carts = CArts::where('subject', 'CART')
            ->where('deleted', '0')
            ->get();

        $french = french::where('subject', 'FRENCH')
            ->where('deleted', '0')
            ->get();

        $rme = rme::where('subject', 'RME')
            ->where('deleted', '0')
            ->get();

        $com = computing::where('subject', 'COM')
            ->where('deleted', '0')
            ->get();

        $science = science::where('subject', 'SCI')
            ->where('deleted', '0')
            ->get();

        $socialStd = socialstd::where('subject', 'SSTUD')
            ->where('deleted', '0')
            ->get();

        $ghLanguage = gh_language::where('subject', 'GHLANG')
            ->where('deleted', '0')
            ->get();
        return view('modules.results.index', [
            'english' => $english,
            'maths' => $maths,
            'carts' => $carts,
            'french' => $french,
            'rme' => $rme,
            'com' => $com,
            'science' => $science,
            'socialStd' => $socialStd,
            'ghLanguage' => $ghLanguage
        ]);
    }

    public function upload_results()
    {
        $student = student::select('name', 'student_no')->get();
        return view('modules.upload_results.index', [
            'student' => $student
        ]);
    }
}

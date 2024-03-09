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

class RouteController extends Controller
{
    public function __construct()

    {
        $this->middleware(['auth']);
    }

    public function dashboard(){
        return view('modules.main.index');
    }

    public function results(){
        $english = results::where('subject', 'ENG')
                    ->where('deleted', '0')
                    ->get();

        $maths = Maths::where('subject','MATHS')
                    ->where('deleted','0')
                    ->get();

        $carts = CArts::where('subject', 'CART')
                        ->where('deleted','0')
                        ->get();

        $french = french::where('subject','FRENCH')
                        ->where('deleted','0')
                        ->get();

        $rme = rme::where('subject','RME')
                    ->where('deleted','0')
                    ->get();

        $com = computing::where('subject','COM')
                        ->where('deleted','0')
                        ->get();

        $science = science::where('subject','SCI')
                        ->where('deleted','0')
                        ->get();

        $socialStd = socialstd::where('subject','SSTUD')
                            ->where('deleted','0')
                            ->get();

        $ghLanguage = gh_language::where('subject','GHLANG')
                            ->where('deleted','0')
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

    public function upload_results(){
        $student = student::select('name','student_no')->get();
        return view('modules.upload_results.index',[
            'student' => $student
        ]);
    }
}

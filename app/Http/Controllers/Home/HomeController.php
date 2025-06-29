<?php

namespace App\Http\Controllers\Home;

use App\Models\Order;
use App\Models\Course;
use App\Models\Category;
use App\Models\Formateur;
use App\Services\CourseService;
use App\Services\TeacherService;
use App\Services\CategoryService;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Models\CourseEssentielle;
use App\Models\Episode as ModelsEpisode;
use App\Models\Formation;
use App\Models\Level;
use App\Models\PerfomancePrestataire;
use App\Models\Prestataire;
use App\Models\Prestation;
use App\Models\Specialite;
use App\Models\TCandidat;
use App\Models\TLibelleSpecialite;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $courseService;
    protected $categoryService;
    protected $teacherService;
    public $codeCommande;


    // public function __construct(CourseService $courseService, CategoryService $categoryService, TeacherService $teacherService)
    // {
    //     $this->courseService = $courseService;
    //     $this->categoryService = $categoryService;
    //     $this->teacherService = $teacherService;
    //     $this->codeCommande = rand(1230, 15000) . 'SAS-FORMATION';
    // }



    public function home()
    {
        return view('welcome', [
            'listeformations' => Formation::all(),
        ]);
    }



    public function presentation()
    {
        return view('home.aboutdg');
    }





}

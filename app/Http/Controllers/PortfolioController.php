<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Study;

class PortfolioController extends Controller
{
    /**
     * Tampilkan halaman portofolio (single page).
     * Route: Route::get('/', [PortfolioController::class, 'index'])->name('portfolio');
     */
    public function index()
    {
        // Ambil 1 data profil (asumsi tabel about cuma punya 1 row)
        $about = About::first();

        // Skill dikelompokkan per kategori (misal: "Frontend", "Backend", "Tools", dst)
        $skills = Skill::all()->groupBy('category');

        // Experience diurutkan dari yang paling baru
        $experiences = Experience::orderByDesc('start_date')->get();

        // Riwayat pendidikan diurutkan dari yang paling baru
        $studies = Study::orderByDesc('start_date')->get();

        // Project terbaru di atas
        $projects = Project::latest()->get();

        return view('portfolio', compact('about', 'skills', 'experiences', 'studies', 'projects'));
    }
}
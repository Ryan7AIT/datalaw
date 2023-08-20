<?php

use App\Http\Controllers\AuditController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProceesController;
use App\Http\Controllers\RightController;
use App\Http\Controllers\SubcontractorController;
use App\Models\Article;
use App\Models\Audit;
use App\Models\Process;
use App\Models\Right;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lawtest', function() {
    return view('lawtest');
});

Route::get('/dashboard/traitment/add', [ProceesController::class, 'create']);
Route::get('/dashboard/traitment/{id}/audit', [ProceesController::class, 'show']);

Route::get('/dashboard/traitment/audit', [AuditController::class, 'index']);


Route::get('/dashboard/traitment/{id}/edit', [ProceesController::class, 'edit']);
Route::get('/dashboard/traitments', [ProceesController::class, 'index']);

Route::get('/dashboard/droits', [RightController::class, 'index']);


Route::get('/dashboard/soustraitants', [SubcontractorController::class, 'index']);




Route::get('/dashboard', function () {

    $proceessCount = Process::all()->count();
    $proceessCountAudit = Audit::distinct('process_id')->count('process_id');
    $rightsCount = Right::count();
    $transfer = Article::where('title', 'Transfert de données vers un pays étranger')->first()->id;
    $articlesCount = Article::count();

    $articleAuditsWithStatusZero = DB::table('article_audit')
    ->where('status', 1)
    ->count();

    $articleAudits = DB::table('article_audit')
    ->count();

    if($articleAudits === 0) {
        $confermityLvl = 100;
    }else {

        $confermityLvl =  (int) (($articleAuditsWithStatusZero * 100 ) / $articleAudits);
    }



    return view('dashboard', [
        'proceessCount' => $proceessCount,
        'proceessCountAudit' => $proceessCountAudit,
        'rightsCount' => $rightsCount,
        'confermityLvl' => $confermityLvl,



    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ShowAudiProcees extends Component
{

    public $showLeftBar = false;
    public $audit;
    public $articleStatuses;
    public $article;
    public function showSideBar($id) {
        $this->article = Article::where('id', $id)->first();

        $this->showLeftBar = true;
    }

    public function hideSideBar() {
        $this->showLeftBar = false;
    }

    public function toggleArticleStatus($articleid)
    {
        $article = Article::where('id', $articleid)->first();

        // dd($this->articleStatuses[$articleid]);
        if($this->articleStatuses[$articleid] == false) {
            $article->audits()->updateExistingPivot($this->audit->id, ['status' => 0]);
        }else {
            $article->audits()->updateExistingPivot($this->audit->id, ['status' => 1]);

        }


        // dd($article->audits());
        // $article->audits()->updateExistingPivot($id, ['status' => ! $article->audits()->pivot->status]);
    }

    public function mount(){
        // $this->article = Article::first();

        // foreach ($this->audit->articles as $audit) {
        //     $status = $audit->pivot->status;
        //     // Do something with the status...
        //     dd($status);

        // }

        $this->articleStatuses = $this->audit->articles()->pluck('status', 'article_id')->toArray();
        // dd($this->articleStatuses);

        // dd($this->audit->articles);
    }


    public function render()
    {
        $articles = Article::all();
        return view('livewire.show-audi-procees', [
            'audit'=> $this->audit,
            'articles' => $articles
        ]);
    }
}

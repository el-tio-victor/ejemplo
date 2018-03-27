<?php

    namespace App\Http\ViewComposers;

    use Illuminate\View\View;
    
    class IndexWorksComposer{

        protected $works;

        public function  __construct(){
            $this->works = \App\Work::orderBy('id','Desc')->get();
        }

        public function compose(View $view){
            

            $view->with('works',$this->works);
        }
    
    }
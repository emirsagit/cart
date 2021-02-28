<?php

namespace App\Scoping;

use App\Scoping\Contracts\Scope;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class Scoper
{
        protected $request;

        public function __construct(Request $request)
        {   
            $this->request = $request;
        } 

        public function apply(Builder $builder, $scopes = [])
        {
            foreach ($scopes as $key => $scope) {
                if(! $scope instanceof Scope) {
                    continue;
                }

                if(! $this->request->get($key)) {
                    continue;
                }
                
                $scope->apply($builder, $this->request->get($key));
            }

            return $builder;
        } 
    
}
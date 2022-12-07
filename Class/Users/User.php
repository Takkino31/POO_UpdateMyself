<?php

namespace Class\Users;

class User
{

    public int $id;

    public function __construc(){
        $this->id = rand();
    }
}
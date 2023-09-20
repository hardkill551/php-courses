<?php

class MyException extends DomainException{
public function displaysHugo(){
echo "Hugo";
}
}

try {
    throw new MyException();
} catch (\MyException $th) {
    $th->displaysHugo();
}

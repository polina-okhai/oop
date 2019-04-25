<?php
class Building {
  protected $name = 'Polina';
  private $surname = 'Okhai';

  public function fullName() {
  echo "{$this->name} {$this->surname} {$this->randomNumber()} {$this->randomLetter()}";
  }

  protected function randomNumber() {
    return rand(100, 999);
  }

  private function randomLetter() {
    return chr(rand(65, 90));
  }
}
 ?>

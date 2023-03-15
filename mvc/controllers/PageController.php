<?php
class PageController {
  public function home() {
    $content = 'home.php';
    require 'views/view.php';
  }

  public function folder1() {
    $content = 'folder1.php';
    require 'views/view.php';
  }

  public function folder2() {
    $content = 'folder2.php';
    require 'views/view.php';
  }
}

<?php

class CustomLayout extends ModuleLayout {

  public function title() {
    return i18n($this->page()->blueprint()->title());
  }

}

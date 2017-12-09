<?php
defined('BASEURL') OR exit('Direct script access is not allowed');

class Help extends Controller {
    public function getstarted(){
        $this->loadView('help/getstarted');
      }
    public function matters_help(){
        $this->loadView('help/matters_help');
      }
    public function members_help(){
        $this->loadView('help/members_help');
      }
    public function minutes_help(){
        $this->loadView('help/minutes_help');
      }
    public function notification_help(){
        $this->loadView('help/notification_help');
      }
    public function searching_process(){
        $this->loadView('help/searching_process');
      }
    public function settings_help(){
        $this->loadView('help/settings_help');
    }
}

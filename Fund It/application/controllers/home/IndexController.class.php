<?php

// application/controllers/home/IndexController.class.php


class IndexController extends BaseController{

    public function mainAction(){

        include CURR_VIEW_PATH . "main.html";

        // Load Captcha class

        $this->loader->library("Captcha");

        $captcha = new Captcha;

        $captcha->hello();

        $userModel = new UserModel("users");

        $users = $userModel->getUsers();

    }

    public function indexAction(){

        $campaignModel = new CampaignModel("campaign");

        $Campaigns = $campaignModel->getCampaigns();

        // Load View template

        include  CURR_VIEW_PATH . "index.php";

    }

    public function menuAction(){

        include CURR_VIEW_PATH . "menu.html";

    }

    public function dragAction(){

        include CURR_VIEW_PATH . "drag.html";

    }

    public function topAction(){

        include CURR_VIEW_PATH . "top.html";

    }

}
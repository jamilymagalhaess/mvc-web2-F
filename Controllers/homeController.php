<?php

class homeController extends Controller
{
    public function index()
    {
        // 1)chamar um model
        // 2) chamar uma view
        // 3) fazer junção de back e front
        $model = new Controller;
        $this->carregarTemplate('home', $model);
    }
}

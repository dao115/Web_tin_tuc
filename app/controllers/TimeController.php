<?php
namespace App\Controllers;
use App\Models\Time;
class TimeController extends BaseController
{
    public $time;
    public function __construct()
    {
        $this->time = new Time();
    }
    public function index()
    {
        $times = $this->time->getTime();
        return $this->render('time.list', compact('times'));
    }
    public function add()
    {
        return $this->render('time.add');
    }
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['tenca'];
            $tgian = $_POST['thoigian'];
        }
        $this->time->addTime($name, $tgian);
        header('Location:'.BASE_URL.'list-time');
    }
    public function edit($id){
        return $this->render('time.edit');
    }
    public function update($id){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['tenca'];
            $tgian = $_POST['thoigian'];
        }
        $this->time->updateTime($id, $name, $tgian);
        header('Location:'.BASE_URL.'list-time');
    }
}
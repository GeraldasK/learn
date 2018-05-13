<?php 
require "vendor/autoload.php";
use Person\Mark;
use Person\Student;
use Person\Module;
use Person\Data\Connect;

//$mark = new Mark("kakakka", "21115", "10");
//$mark->save();
//$mark->get();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body class="container">
        <div class="row">
            <div class="col-sm-4">
                <form method="POST">
                    <div class="form-group">
                        <label>Student no:</label>
                        <input type="text" class="form-control" name="student_no">
                    </div>
                    <div class="form-group">
                        <label>Surname:</label>
                        <input type="text" class="form-control" name="surname">
                    </div>
                    <div class="form-group">
                        <label>Forename:</label>
                        <input type="text" class="form-control" name="forename">
                    </div>
                    <button type="submit" class="btn btn-primary" name="add">Add student</button>
                        <?php
                            if(isset($_POST['add'])){
                                $student = new Student($_POST['student_no'],$_POST['surname'],$_POST['forename']);
                                $student ->save();}?>
                </form>
            </div>
            <div class="col-sm-4">
                <form method="POST">
                    <div class="form-group">
                        <label>Module code:</label>
                        <input type="text" class="form-control" name="module_code">
                    </div>
                    <div class="form-group">
                        <label>Module name:</label>
                        <input type="text" class="form-control" name="module_name">
                    </div>
                    <button type="submit" class="btn btn-primary" name="add2">Add module</button>
                        <?php if(isset($_POST['add2'])){
                            $module = new Module($_POST['module_code'], $_POST['module_name']);
                            $module -> save();}?>
                </form>
            </div>
            <div class="col-sm-4">
                <form method="POST">
                    <label>Studentas</label>
                    <select class="custom-select d-block w-100" name="student_no" required>
                        <?php
                            $sql = "SELECT student_no, surname FROM students";
                            $connect = new Connect;
                            $data = $connect->getData($sql);
                            foreach($data as $result){
                                echo "<option value=".$result['student_no'].">".$result['surname']."</option>";}?>
                    </select>
                    <label>Modulis</label>
                    <select class="custom-select d-block w-100" name="module_code" required>
                        <?php
                        $sql = "SELECT * FROM modules";
                        $connect = new Connect;
                        $data = $connect->getData($sql);
                        foreach($data as $result){
                            echo "<option value=".$result['module_code'].">".$result['module_name']."</option>";}?>
                    </select>
                    <label>Pazimys</label>
                    <input type="text" class="form-control" name="mark" id="">
                    <button type="submit" class="btn btn-primary" name="add3">Add mark</button>
                        <?php
                        if(isset($_POST['add3'])){
                            $mark = new Mark($_POST['student_no'], $_POST['module_code'], $_POST['mark']);
                            $mark ->save();}?>
                </form>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
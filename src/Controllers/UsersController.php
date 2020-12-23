<?php
namespace MyApp\Controllers;
use MyApp\Auth;
use MyApp\Models\History;

class UsersController extends Controller
{
    public function actionIndex(){
        $user = Auth::getUser();
        if(!user){
            $this->redirect('/users/login');
        }
       $this->render('users/index.twig', ['history'=>History::getLast($user['id']),]);

    }
    public function actionlogin(){
        $error = null;
        if(isset($_POST['login'], $_POST['pass']) ){
            if (Users::check($_POST['login'], $_POST['pass']) ){
                Auth::login($_POST['login']);
                $this->redirect('/users');
            }
            else {
                $error = true;
            }
        }
        $this->render('users/login.twig', [
            'error' => $error]);
    }
    public function actionLogout(){
        Auth::logout();
        $this->redirect('users/login');
    }
}

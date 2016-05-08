<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;



class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testIfFirstPageLoads()
    {
        $this->visit('/')->see('valgeranna');
    }

    public function testLoggingInWithRegisteredAccount()
    {
        $this->logIn();
    }

    public function testLoggingOut(){
        $this->logOut()->see('Kaunis merevaade');
    }

    public function testLoggingInWithNotRegisteredAccount()
    {
        $this->visit('/admin')
            ->type('kasutaja2@gmail.com', 'email')
            ->type('kasutaja', 'password')
            ->press('Logi sisse')
            ->see('These credentials do not match our records.');
    }

    public function testDeletePost(){
        $this->logIn()
            ->type('Test postituse pealkiri','title')
            ->type('Test postituse sisu','content')
            ->press('Lisa')
            ->see('Test postituse pealkiri')
            ->see('Test postituse sisu')
            ->deletePost()
            ->dontSee('Test postituse pealkiri')
            ->dontSee('Test postituse sisu')
            ->logOut();
    }

    public function testNewPostOnFirstPage(){
        $this->logIn()
            ->type('Test postituse pealkiri','title')
            ->type('Test postituse sisu','content')
            ->press('Lisa')
            ->visit('/')
            ->see("Test postituse pealkiri")
            ->deletePost()
            ->logOut();
    }

    public function testNewPostOnNewsPage(){
        $this->logIn()
            ->type('pika postituse pealkiri','title')
            ->type('Täis pikk postituse sisuasd asd asdas das asd asd asd asdas dasdasdasdasjdnasdjn asjdn asjndjasnd jand','content')
            ->press('Lisa')
            ->visit('/posts')
            ->see("pika postituse pealkiri")
            ->see("Täis pikk postituse sisuasd asd asdas das asd asd asd asdas dasdasdasdasjdnasdjn asjdn asjndjasnd jand")
            ->deletePost()
            ->logOut();
    }

    public function testChangePost(){
        $this->logIn()
            ->type('Test postituse pealkiri','title')
            ->type('Test postituse sisu','content')
            ->press('Lisa')
            ->see('Test postituse pealkiri')
            ->see('Test postituse sisu')
            ->press('id')
            ->type('blablabla','content')
            ->press('save')
            ->dontSee('Test postituse sisu')
            ->see('blablabla')
            ->deletePost()
            ->logOut();
    }

    public function testAddingNewUser(){
        $this->logIn()
            ->visit('/admin/register')
            ->type('Sherlock','name')
            ->type('secret@gmail.com','email')
            ->type('Sherlock','password')
            ->type('Sherlock','password_confirmation')
            ->press('register')
            ->see('secret@gmail.com')
            ->logOut();
    }

    public function testRemovingUser(){
        $this->logIn()
            ->visit('/admin/register')
            ->type('Sherlock','name')
            ->type('secret@gmail.com','email')
            ->type('Sherlock','password')
            ->type('Sherlock','password_confirmation')
            ->press('register')
            ->see('secret@gmail.com')
            ->press('id')
            ->logOut();
    }

    public function deletePost(){
        return $this->visit('/admin')
            ->press('delete');
    }

    public function logIn(){
        return $this->visit('/admin')
            ->type('Risto@valgeranna.com', 'email')
            ->type('valgeranna', 'password')
            ->press('Logi sisse')
            ->see('Lisa postitus');
    }

    public function logOut(){
        return $this->visit('/logout');
    }


}
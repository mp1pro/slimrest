<?php

//this automatically includes slim via composer
require 'vendor/autoload.php';

// instantiate new slim object
$app = new \Slim\Slim();

// get route in first parameters and 2nd param is constructors
/*$app->get('/ts', function () {
    echo "Hello";
})*/;

$app->get('/voters', 'getVoters');
$app->get('/voter/:id',  'getVoter');
$app->get('/voter/search/:query', 'findByName');
$app->post('/voter', 'addVoter');
$app->put('/voter/:id', 'updateVoter');
$app->delete('/voter/:id',   'deleteVoter');

// runs slim
$app->run();

// write the function for each end points now

function getVoters(){
    // load all voter in the table
    echo 'test voters';
}

function getVoter($id){
    // load a specific person
    echo 'test';
}

function findByName($query){
    // Search by name

}

function addVoter(){
    // Search by name

}

function updateVoter($id){
    // Search by name

}

function deleteVoter($id){
    // Search by name

}
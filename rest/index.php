<?php

//this automatically includes slim via composer
require 'vendor/autoload.php';

//includes functions.php that instantiates PDO SQL like in CS50 PSET7
require_once("includes/functions.php");

// instantiate new slim object
$app = new \Slim\Slim();

// get route in first parameters and 2nd param is constructors (functions)
/*$app->get('/ts', function () {
    echo "Hello";
})*/;


$app->get('/voters', 'getVoters');// to test voter just type http://localhost/slimrest/rest/voters in URL
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
    echo 'test';//test output
}

function findByName($query){
    // Search by name

}

function addVoter(){
    // add voter

}

function updateVoter($id){
    // update voter based on id

}

function deleteVoter($id){
    // delete voter based on id

}
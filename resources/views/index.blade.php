@extends('layouts.master')
@section('content')

<div class="jumbotron">
<h2> BBC iPlayer </h2>
<hr>

<div class="list-nav">
<h5 class="text-grey"> List of Programmes </h5>

<ul class="list-inline">
    <li  ng-repeat="letter in list.letters track by $index" ng-class="list.activeLetter(letter)"> [[letter | uppercase]] </li>
</ul>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h5> Programmes:- </h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-4 col-xs-12 text-center" ng-repeat="prog in list.programmes track by $index">
            <div class="panel panel-default">
                <div class="panel-body">
                    <img class="img-thumbnail img-responsive" ng-src="[[list.image(prog.images.standard)]]"/>
                </div>
                <div class="panel-footer"> [[ prog.title ]] </div>
            </div>
         </div>   
    </div>
    <div class="row">
        <div class="col-md-4 col-xs-6">
             <pagination></pagination>
        </div>
    </div>
</div>


@stop
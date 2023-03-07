@extends('shop::base')

@section('aimeos_styles')
@stop

@section('aimeos_scripts')
@stop

@section('aimeos_header')
<?= $aiheader['basket/mini'] ?>
<?= $aiheader['account/history'] ?>
<?= $aiheader['account/favorite'] ?>
<?= $aiheader['account/watch'] ?>
@stop

@section('aimeos_head')
<?= $aibody['basket/mini'] ?>
@stop

@section('aimeos_nav')
@stop

@section('aimeos_stage')
@stop

@section('aimeos_body')
<?= $aibody['account/history'] ?>
<?= $aibody['account/favorite'] ?>
<?= $aibody['account/watch'] ?>
@stop

@section('aimeos_aside')
@stop
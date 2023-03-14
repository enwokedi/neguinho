<?php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
// Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
//     $trail->push('Home', route('home'));
// });

// // Home > About
// Breadcrumbs::for('about', function (BreadcrumbTrail $trail) {
//     $trail->parent('home');
//     $trail->push('About', route('about'));
// });

// // Home > Contact
// Breadcrumbs::for('contact', function (BreadcrumbTrail $trail, $category) {
//     $trail->parent('home');
//     $trail->push('Contact', route('contact'));
// });

<!-- Stored in resources/views/welcome.blade.php -->

@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container-fluid banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <h1 class="logo"><strong><em>my</em></strong>rezzi</h1>
            </div>
            <div class="col-sm-10">
                <nav>
                    <ul>
                        <li><a href="#">pricing</a></li>
                        <li><a href="#">resources</a></li>
                        <li><a href="#">login</a></li>
                        <li><a href="#">sign up</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 headline">
                <h2>Your Professional Resume in Minutes</h2>
                <h3>your free and easy online resume builder</h3>
            </div>
        </div>
        <div class="row icon-wrapper">
            <div class="col-sm-4 icons">
                <img src="<?php echo asset('images/checklist.png'); ?>">
            </div>
            <div class="col-sm-4 icons">
                <a href="#" class="btn btn-large btn-warning cta-btn">Get Started Now</a>
            </div>
            <div class="col-sm-4 icons">
                <img src="<?php echo asset('images/graph.png'); ?>">
            </div>
        </div>
    </div>
</div>
<!-- end banner -->

<!-- template sections -->
<div class="container template">
    <h1>View Our Custom Templates</h1>
    <h4>choose from over <strong><em>150 templates</em></strong> in our standard, professional, and premium packages</h4>
</div>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Menu 1</a></li>
        <li><a href="#">Menu 2</a></li>
        <li><a href="#">Menu 3</a></li>
    </ul>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row template-slider">
            <div class="col-sm-4 sample">
                <h3>The Director</h3>
                <p>The efficent leader.</p>
                <img src="<?php echo asset('images/sample.png'); ?>" />
            </div>
            <div class="col-sm-4 sample">
                <h3>The Director</h3>
                <p>The efficent leader.</p>
                <img src="<?php echo asset('images/sample.png'); ?>" />
            </div>
            <div class="col-sm-4 sample">
                <h3>The Director</h3>
                <p>The efficent leader.</p>
                <img src="<?php echo asset('images/sample.png'); ?>" />
            </div>
        </div>
    </div>
</div>
<!-- end template -->

<!-- free callout -->
<div class="container-fluid callout">
    <div class="container">
        <div class="row callout-cta">
            <div class="col-sm-9">
                <h1>Get your <strong><em>FREE</em></strong> resume</h1>
                <h3><em>No credit card required. Your step closer to your professional career.</em></h3>
            </div>
            <div class="col-sm-3">
                <a href="#" class="btn btn-large btn-success">Build Your Resume</a>
            </div>
        </div>
    </div>
</div>
<!-- end free callout -->

<!-- how it works -->
<div class="container how-it-works">
    <div class="col-sm-12">
        <h1>How it <span><em>Works</em></span></h1>
        <h3>our easy 3 step process to your perfect resume</h3>
    </div>
    <div class="row">
        <div class="col-sm-5">
            <img src="assets/images/computer.png">
        </div>
        <div class="col-sm-1">
            <span class="number">1</span>
        </div>
        <div class="col-sm-6">
            <h2>Choose a Professional Template</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in efficitur leo. Sed vel tortor quis urna vehicula hendrerit. Ut venenatis diam sed risus rutrum, non semper lacus venenatis. Nulla facilisi.  Nunc molestie, justo luctus vehicula rhoncus, arcu dui cursus nisl, et bibendum lacus nisi ac mauris. Nunc convallis nisi consectetur eros congue.</p>
        </div>
    </div>
</div>
<!-- end how it works -->

@endsection
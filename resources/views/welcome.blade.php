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
                        <li><a href="#">explore</a></li>
                        <li><a href="auth/login">login</a></li>
                        <li><a href="auth/register">sign up</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 headline">
                <h2>Your Professional Resume in Minutes</h2>
                <h3><em>try it out for free while we're are in beta</em></h3>
            </div>
        </div>
        <div class="row icon-wrapper">
            <div class="col-sm-4 icons">
                <img src="<?php echo asset('images/checklist.png'); ?>">
            </div>
            <div class="col-sm-4 icons">
                <a href="auth/register" class="button-red-center">Get Started Now</a>
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
    <h4><em><b>custom</b></em> and <em><b>unique</b></em> templates that make your resume stand out to employers</h4>
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
            <div class="col-sm-8">
                <h1>Get your <strong><em>FREE</em></strong> resume</h1>
                <h3><em>No credit card required. Your step closer to your professional career.</em></h3>
            </div>
            <div class="col-sm-4">
                <a href="#" class="button-blue">Build Your Resume</a>
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

    <!-- Row 1 -->
    <div class="row">
        <div class="col-sm-5">
            <img src="<?php echo asset('images/computer.png'); ?>">
        </div>
        <div class="col-sm-1">
            <span class="number">1</span>
        </div>
        <div class="col-sm-6">
            <h2>Give us Your Qualifications</h2>
            <p>Once you have choosen a plan, we'll ask you a few questions that will hell fill in your resume. You can expect to see past job experience, education, skills, and a custom field. If you ever need to update your information, it's not a problem. Simply go to your profile and delete/add any information that you want.</p>
        </div>
    </div>

    <!-- Row 2 -->
    <div class="row">
        <div class="col-sm-6">
            <h2>Choose a Professional Template</h2>
            <p>Right now we have 9 different templates that are different in there own aspect. Each one is carefully design, reviewed and tested before we make it avaliable. You can change templates at anytime in simply three steps. No extra information needed, just a click of a button and you are live with your newly designed template</p>
        </div>
        <div class="col-sm-1">
            <span class="number">1</span>
        </div>
        <div class="col-sm-5">
            <img src="<?php echo asset('images/computer.png'); ?>">
        </div>
    </div>

    <!-- Row 3-->
    <div class="row">
        <div class="col-sm-5">
            <img src="<?php echo asset('images/computer.png'); ?>">
        </div>
        <div class="col-sm-1">
            <span class="number">1</span>
        </div>
        <div class="col-sm-6">
            <h2>Share the Link or Download</h2>
            <p>Once your resume is complete, you can share a link and place it on your linkedin, facebook, twitter, dribbble, or any site that you wish. Think of it as your own personal website. Place the link at the bottom of your email signature if you wish. You can also download a PDF copy that is picture perfect allowing you to have both a digital copy and hardcopy. It's on the web too, so you can edit it where ever you want. (Plus your resume will look good, even on a phone.)</p>
        </div>
    </div>
</div>
<!-- end how it works -->

<!-- Start Pricing Table -->
<div class="container-fluid pricing-table">
    <div class="container">
        <div class="row pricing-headline">
            <h1>Take Your Resume to the Next Level</h1>
            <h4>choose the package that's right for you</h4>
        </div>
        <div class="row">
            <div class="col-sm-4 price-card">
                <h3>Standard</h3>
                <h2 class="price">$0</h2>
                <p>Budget Option for Users</p><hr>
                <p>Select from <b>10 templates</b></p><hr>
                <p>Sign Up for Free</p><hr>
                <p>Sign Up for Free</p><hr>
                <p>Sign Up for Free</p><hr>
                <a class="button-red" href="#">Sign Up</a>
            </div>
            <div class="col-sm-4 price-card">
                <h3>Standard</h3>
                <h2 class="price">$10/<span>month</span></h2>
                <p>Budget Option for Users</p><hr>
                <p>Select from <b>10 templates</b></p><hr>
                <p>Sign Up for Free</p><hr>
                <p>Sign Up for Free</p><hr>
                <p>Sign Up for Free</p><hr>
                <a class="button-red" href="#">Sign Up</a>
            </div>
            <div class="col-sm-4 price-card">
                <h3>Standard</h3>
                <h2 class="price">$30/<span>month</span></h2>
                <p>Budget Option for Users</p><hr>
                <p>Select from <b>10 templates</b></p><hr>
                <p>Sign Up for Free</p><hr>
                <p>Sign Up for Free</p><hr>
                <p>Sign Up for Free</p><hr>
                <a class="button-red" href="#">Sign Up</a>
            </div>
        </div>
    </div>
</div>
<!-- End Pricing Table -->


<!-- Start Subscribe -->
<div class="container-fluid subscribe">
    <div class="container">
        <h2>Receive Tips That Lead to a Career</h2>
        <div class="row">
            <form>
                <input class="form-control" type="text" placeholder="Email">
                <input class="form-control btn btn-default" type="submit" placeholder="Subscribe">
            </form>
        </div>
    </div>
</div>

@endsection























